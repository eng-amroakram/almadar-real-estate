<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseMethod extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function sale()
    {
        return $this->belongsTo(Sale::class, 'purch_method_id', 'id');
    }

    public function scopeData($query)
    {
        return $query->select([
            'id',
            'name',
            'created_at'
        ]);
    }
}
