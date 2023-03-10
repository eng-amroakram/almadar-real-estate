<?php

namespace App\Http\Livewire;

use App\Http\Controllers\Services\CustomerService;
use App\Http\Controllers\Services\ReservationService;
use App\Http\Controllers\Services\SaleService;
use App\Models\Customer;
use App\Models\Offer;
use App\Models\OfferEditors;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;


class OfferView extends Component
{
    use LivewireAlert;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['updateOffer', 'refreshComponent' => '$refresh'];

    public $offer;
    public $real_estate;
    public $offer_id;
    public $last_update_time = '';
    public $last_update_note_time = '';
    public $reservation_user;
    public $message = '';

    public $customer_id;
    public $price;
    public $date;
    public $reservation_notes;
    public $is_booked = false;
    public $user_id;
    public $check_sale = false;

    public $customer_name = '';
    public $phone_number = '';

    public function mount($offer_id)
    {
        $this->offer_id = $offer_id;
        $this->offer = Offer::find($offer_id);
        $this->real_estate = $this->offer->realEstate;
        $this->isBookedOffer();
    }

    public function isBookedOffer()
    {
        $active_reservation = $this->offer->reservations->where('status', 1)->first();
        if ($active_reservation) {
            $this->user_id = $active_reservation->user_id;
            $this->is_booked = true;
        } else {
            $this->is_booked = false;
        }

        if ($this->offer->sale) {
            if ($this->offer->sale->sale_status == 1) {
                $this->check_sale = true;
            } else {
                $this->check_sale = false;
            }
        }
    }

    public function render()
    {
        $this->getLastUpateTime();
        $this->isBookedOffer();
        return view('livewire.offer-view');
    }

    public function hydrate()
    {
        $check = false;

        if ($this->is_booked) {
            $check = true;
        }

        $this->emit('select2', $check);
    }

    public function reservationData()
    {
        $active_reservation = $this->offer->reservations->where('status', 1)->first();

        if ($active_reservation) {
            $this->reservation_user = 'USR-' . $active_reservation->user_id;
            $this->customer_id = $active_reservation->customer->id;
            $this->price = number_format($active_reservation->price);
            $this->date = $active_reservation->date_from . ' to ' . $active_reservation->date_to;
            $this->reservation_notes = $active_reservation->note;
        }
    }

    public function getLastUpateTime()
    {
        if ($this->offer) {
            if ($this->offer->updated_at) {
                $last_update = $this->offer->updated_at->toDateTimeString();
                $time_now = now();

                $datetime1 = strtotime($last_update);
                $datetime2 = strtotime($time_now);

                $secs = $datetime2 - $datetime1; // == <seconds between the two times>
                $min = $secs / 60;
                $hour = $secs / 3600;
                $days = $secs / 86400;


                if ($days > 0.99) {
                    $this->last_update_time = 'اخر تحديث منذ ' . round($days, 0) . ' يوم';
                    return true;
                }

                if ($hour > 0.99) {
                    $this->last_update_time = 'اخر تحديث منذ ' . round($hour, 0) . ' ساعة';
                    return true;
                }

                if ($min > 0.99) {
                    $this->last_update_time = 'اخر تحديث منذ ' . round($min, 0)  . ' دقيقة';
                    return true;
                }

                $this->last_update_time = 'اخر تحديث منذ ' . $secs . ' ثانية';
                return true;
            }
        }
    }

    public function getLastUpateOfferEditTime($order_edit_id)
    {
        $order_edit_id = OfferEditors::find($order_edit_id);

        $last_update = $order_edit_id->created_at->toDateTimeString();

        if ($last_update) {
            $time_now = now();

            $datetime1 = strtotime($last_update);
            $datetime2 = strtotime($time_now);

            $secs = $datetime2 - $datetime1;
            $min = $secs / 60;
            $hour = $secs / 3600;
            $days = $secs / 86400;


            if ($days > 0.99) {
                return 'منذ ' . round($days, 0) . ' يوم';
            }

            if ($hour > 0.99) {
                return 'منذ ' . round($hour, 0) . ' ساعة';
            }

            if ($min > 0.99) {
                return 'منذ ' . round($min, 0)  . ' دقيقة';
            }

            return 'منذ ' . $secs . ' ثواني';
        }
    }

    public function updated($propertyName, $value)
    {
        if ($propertyName == 'price') {
            $this->is_numeric('price', $value);
        }

        $this->validateOnly($propertyName);
    }

    public function getFields()
    {
        return ['customer_id', 'price', 'date', 'reservation_notes'];
    }

    public function rules()
    {
        $fields = $this->getFields();

        $validation = [];

        foreach ($fields as $field) {
            $validation[$field] = ['required'];
        }

        return $validation;
    }

    public function messages()
    {

        $fields = $this->getFields();

        $validation = [];

        foreach ($fields as $field) {
            $validation[$field . '.required'] = 'هذا الحقل مطلوب';
        }

        return $validation;
    }

    public function is_numeric($name, $value)
    {
        $string_value = str_replace(',', '', $value);
        $float_value = (float)$string_value;
        $after_comma = explode('.', $string_value);
        $count = 0;

        if (array_key_exists(1, $after_comma)) {
            foreach ($after_comma as $num) {
                $count = $count + 1;
            }
        }

        if (is_numeric($string_value)) {
            $this->fill([$name => number_format($float_value, $count)]);
        } else {
            $this->validate([$name => 'numeric'], [$name . '.numeric' => "الحقل يقبل ارقام فقط"]);
        }
        return $float_value;
    }

    public function storeReservation(ReservationService $reservationService)
    {
        $data = $this->validate();

        $dates = explode(" to ", $data['date']);

        if (!array_key_exists(1, $dates) || !array_key_exists(0, $dates)) {
            $this->message = "يرجى اختيار التاريخ من والى";
            return true;
        }

        $data['price'] = $this->is_numeric('price', $this->price);
        $reservation = $reservationService->store($data, $this->offer);

        if ($reservation) {
            $this->alert('success', '', [
                'toast' => true,
                'position' => 'center',
                'timer' => 3000,
                'text' => '👍 تم حجز العرض بنجاح',
                'timerProgressBar' => true,
            ]);
        }

        $this->emit('refreshComponent');
        $this->emit('submitReservation');
    }

    public function cancelReservation(ReservationService $reservationService)
    {
        $result = $reservationService->cancel($this->offer->id);

        if ($result) {
            $this->alert('success', '', [
                'toast' => true,
                'position' => 'center',
                'timer' => 3000,
                'text' => '👍 تم إلغاء الحجز بنجاح',
                'timerProgressBar' => true,
            ]);

            $this->emit('refreshComponent');
            return true;
        }

        $this->alert('danger', '', [
            'toast' => true,
            'position' => 'center',
            'timer' => 3000,
            'text' => '👍 حدث خطأ ما، يرجى المتابعة مع المبرمج',
            'timerProgressBar' => true,
        ]);

        return true;
    }

    public function cancelSale(SaleService $saleService)
    {
        $saleService->cancel($this->offer->sale->id);

        $this->alert('success', '', [
            'toast' => true,
            'position' => 'center',
            'timer' => 3000,
            'text' => '👍 تم إلغاء الاتفاقية بنجاح',
            'timerProgressBar' => true,
        ]);

        $this->check_sale = false;
        return redirect()->route('panel.offer', $this->offer->id);
    }

    public function createCustomer(CustomerService $customerService)
    {
        $data = $this->validate([
            'customer_name' => ['required'],
            'phone_number' => ['required', 'unique:customers,phone'],
        ], [
            'customer_name.required' => 'هذا الحقل مطلوب',
            'phone_number.required' => 'هذا الحقل مطلوب',
            'phone_number.unique' => 'رقم هاتف مستخدم، ادخل رقما مختلف',
        ]);

        $new_customer = Customer::create([
            'user_id' => auth()->id(),
            'name' => $data['customer_name'],
            'phone' => $data['phone_number'],
            'support_eskan' => 0,
        ]);

        $customers = Customer::get(['id', 'name', 'phone'])->toArray();

        foreach ($customers as $key => $customer) {

            foreach ($customer as $index => $value) {
                if ($index == 'name') {
                    $customer['text'] = $value . ' :: ' . $customer['phone'];
                    unset($customer['name']);
                    $customers[$key] = $customer;
                }
            }
        }

        array_push($customers, [
            "id" => $new_customer->id,
            "selected" => true,
            "text" =>  $new_customer->name . '::' . $new_customer->phone,
        ]);

        $this->customer_id = $new_customer->id;

        $customers_json = json_decode(json_encode($customers));

        $this->emit('submitCustomer', $customers_json);

        $this->alert('success', '', [
            'toast' => true,
            'position' => 'center',
            'timer' => 3000,
            'text' => '👍 تم إضافة العميل بنجاح',
            'timerProgressBar' => true,
        ]);
    }


}
