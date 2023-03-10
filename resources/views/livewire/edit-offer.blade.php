<div class="app-content content" wire:ignore.self>
    <div class="content-overlay" wire:ignore.self></div>
    <div class="header-navbar-shadow" wire:ignore.self></div>
    <div class="content-wrapper" wire:ignore.self>
        <div class="content-header row" wire:ignore.self>
        </div>
        <div class="content-body" wire:ignore.self>
            <div class="auth-wrapper auth-cover" wire:ignore.self>
                <div class="auth-inner row m-0" wire:ignore.self>
                    <!-- Brand logo-->
                    <a class="brand-logo" href="#" wire:ignore>
                        <svg viewBox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" height="28">
                            <defs>
                                <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%"
                                    y2="89.4879456%">
                                    <stop stop-color="#000000" offset="0%"></stop>
                                    <stop stop-color="#FFFFFF" offset="100%"></stop>
                                </lineargradient>
                                <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%"
                                    y2="100%">
                                    <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                    <stop stop-color="#FFFFFF" offset="100%"></stop>
                                </lineargradient>
                            </defs>
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                    <g id="Group" transform="translate(400.000000, 178.000000)">
                                        <path class="text-primary" id="Path"
                                            d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z"
                                            style="fill: currentColor"></path>
                                        <path id="Path1"
                                            d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z"
                                            fill="url(#linearGradient-1)" opacity="0.2"></path>
                                        <polygon id="Path-2" fill="#000000" opacity="0.049999997"
                                            points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325">
                                        </polygon>
                                        <polygon id="Path-21" fill="#000000" opacity="0.099999994"
                                            points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338">
                                        </polygon>
                                        <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994"
                                            points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <h2 class="brand-text text-primary ms-1">???????????? ????????????</h2>
                    </a>

                    <div class="col-lg-3 d-none d-lg-flex align-items-center p-0" wire:ignore>
                        <div class="w-100 d-lg-flex align-items-center justify-content-center" wire:ignore.self>
                            <img class="img-fluid w-100"
                                src="{{ asset('app-assets/images/illustration/create-account.svg') }}"
                                alt="multi-steps" />
                        </div>
                    </div>

                    <div class="col-lg-9 d-flex align-items-center auth-bg px-2 px-sm-3 px-lg-5 pt-3" wire:ignore.self>
                        <div class="width-700 mx-auto" wire:ignore.self>
                            <div class="bs-stepper register-multi-steps-wizard shadow-none" wire:ignore.self>

                                <div class="bs-stepper-header px-0" role="tablist" wire:ignore.self>

                                    <div class="step first-step" role="tab" wire:ignore.self>
                                        <button type="button" class="step-trigger" wire:ignore.self>
                                            <span
                                                class="bs-stepper-box
                                            @if ($errors->has('city_id') ||
                                                $errors->has('neighborhood_id') ||
                                                $errors->has('land_number') ||
                                                $errors->has('block_number')) ) bg-danger @endif
                                            ">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-map-pin font-medium-3">
                                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                                    <circle cx="12" cy="10" r="3"></circle>
                                                </svg>
                                            </span>
                                            <span class="bs-stepper-label" wire:ignore>
                                                <span class="bs-stepper-title">???????????? ????????????</span>
                                                <span class="bs-stepper-subtitle">?????????????????? ???????????????? ??????????</span>
                                            </span>
                                        </button>
                                    </div>

                                    <div class="line" wire:ignore>
                                        <i data-feather="chevron-right" class="font-medium-2"></i>
                                    </div>

                                    <div class="step second-step" role="tab" wire:ignore.self>
                                        <button type="button" class="step-trigger" wire:ignore.self>
                                            <span
                                                class=" bs-stepper-box
                                            @if ($errors->has('land_type_id') ||
                                                $errors->has('licensed_id') ||
                                                $errors->has('street_width_ids') ||
                                                $errors->has('notes') ||
                                                $errors->has('property_type_id') ||
                                                $errors->has('space') ||
                                                $errors->has('price_by_meter') ||
                                                $errors->has('total_price') ||
                                                $errors->has('branch_id')) bg-danger @endif ">



                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-send font-medium-3">
                                                    <line x1="22" y1="2" x2="11"
                                                        y2="13"></line>
                                                    <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                                                </svg>

                                                {{-- <i data-feather="send" class="font-medium-3"></i> --}}
                                            </span>
                                            <span class="bs-stepper-label" wire:ignore>
                                                <span class="bs-stepper-title">???????????? ??????????????</span>
                                                <span class="bs-stepper-subtitle">???????????? ?????? ???????????? ??????????????????</span>
                                            </span>
                                        </button>
                                    </div>

                                    <div class="line" wire:ignore>
                                        <i data-feather="chevron-right" class="font-medium-2"></i>
                                    </div>

                                    <div class="step third-step" role="tab" wire:ignore.self>
                                        <button type="button" class="step-trigger" wire:ignore.self>
                                            <span class="bs-stepper-box" wire:ignore>
                                                <i data-feather="percent" class="font-medium-3"></i>
                                            </span>
                                            <span class="bs-stepper-label" wire:ignore>
                                                <span class="bs-stepper-title">???????????? ??????????????</span>
                                                <span class="bs-stepper-subtitle">??????????????</span>
                                            </span>
                                        </button>
                                    </div>

                                </div>

                                <div class="bs-stepper-content px-0 mt-4" wire:ignore.self>

                                    <div class="personal-info" style="display: block;" role="tabpanel"
                                        wire:ignore.self>

                                        <div class="content-header mb-2" wire:ignore.self>
                                            <h2 class="fw-bolder mb-75">???????????? ????????????</h2>
                                        </div>

                                        <div class="row" wire:ignore.self>

                                            <div class="col-md-6 mb-1" wire:ignore>
                                                <label class="form-label" for="location">??????????????</label>
                                                <select class="js-select2-city select2 form-select"
                                                    wire:model.debounce.1s='city_id'>
                                                    @foreach (getCities() as $city)
                                                        <option value="{{ $city->id }}" selected>
                                                            {{ $city->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('city_id')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>

                                            <div class="col-md-6 mb-1" wire:ignore>
                                                <label class="form-label">????????</label>
                                                <select class="js-select2-neighborhood select2 form-select"
                                                    wire:model.debounce.1s='neighborhood_id'>
                                                </select>
                                                @error('neighborhood_id')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-6 mb-1">
                                                <label class="form-label">?????? ??????????</label>
                                                <input type="text" class="form-control" dir="ltr" placeholder="?????? ??????????"
                                                    wire:model.debounce.1s='land_number'>
                                                @error('land_number')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 mb-1">
                                                <label class="form-label">?????? ????????????</label>
                                                <input type="text" class="form-control" placeholder="?????? ????????????"
                                                    wire:model.debounce.1s='block_number'>
                                                @error('block_number')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-1">
                                                <label class="form-label">???????? ????????????</label>
                                                <input type="text" class="form-control"
                                                    placeholder="???????? ???????? ????????????"
                                                    wire:model.debounce.1s='real_estate_statement'>
                                                @error('real_estate_statement')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-between mt-2">
                                            <button class="btn btn-outline-secondary btn-prev" disabled wire:ignore>
                                                <i data-feather="chevron-left" class="align-middle me-sm-25 me-0"></i>
                                                <span class="align-middle d-sm-inline-block d-none">????????????</span>
                                            </button>
                                            <button class="btn btn-primary btn-next first-next" wire:ignore>
                                                <span class="align-middle d-sm-inline-block d-none">????????????</span>
                                                <i data-feather="chevron-right"
                                                    class="align-middle ms-sm-25 ms-0"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="account-details" style="display: none;" role="tabpanel"
                                        wire:ignore.self>

                                        <div class="content-header mb-2">
                                            <h2 class="fw-bolder mb-75">???????????? ??????????????</h2>
                                        </div>

                                        <div>
                                            <div class="row">
                                                <div class="col-md-6 mb-1" wire:ignore>
                                                    <label class="form-label">?????? ????????????</label>
                                                    <select class="js-select2-property-type select2 form-select"
                                                        wire:model='property_type_id' disabled>
                                                        @foreach (getPropertyTypes() as $property_type)
                                                            <option value="{{ $property_type->id }}" selected>
                                                                {{ $property_type->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('property_type_id')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6 mb-1">
                                                    <label class="form-label">??????????????</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="text" class="form-control"
                                                            wire:input.debounce.1s="space"
                                                            wire:model.debounce.1s='space' step="0.01"
                                                            placeholder="??????????????">
                                                        <span class="input-group-text">??????</span>
                                                    </div>

                                                    @error('space')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>


                                            <div class="row condominium-extra" wire:ignore.self>
                                                <div class="col-md-6 mb-1 ">
                                                    <label class="form-label" for="price">?????? ??????????????</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="number" wire:model.debounce.1s='floors_number'
                                                            class="form-control" placeholder="?????? ??????????????">
                                                    </div>
                                                    @error('floors_number')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6 mb-1">
                                                    <label class="form-label" for="price">?????? ??????????</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="number" wire:model.debounce.1s='flats_number'
                                                            class="form-control" placeholder="?????? ??????????">
                                                    </div>
                                                    @error('flats_number')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row" wire:ignore>
                                                <div class="col-md-6 mb-1 condominium-extra-stores-number">
                                                    <label class="form-label" for="price">?????? ??????????????</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="number" wire:model.debounce.1s='stores_number'
                                                            class="form-control" placeholder="?????? ??????????????">
                                                    </div>
                                                    @error('stores_number')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6 mb-1 condominium-extra-bathroom-number">
                                                    <label class="form-label" for="price">?????? ?????????? ????????????</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="number" wire:model.debounce.1s='bathroom_number'
                                                            class="form-control" placeholder="?????? ?????????? ????????????">
                                                    </div>
                                                    @error('bathroom_number')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6 mb-1 condominium-extra-flat-rooms">
                                                    <label class="form-label" for="price">?????? ?????? ??????????</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="number"
                                                            wire:model.debounce.1s='flat_rooms_number'
                                                            class="form-control" placeholder="?????? ?????? ??????????">
                                                    </div>
                                                    @error('flat_rooms_number')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row">

                                                <div class="col-md-6 mb-1 price-by-meter" wire:ignore.self>
                                                    <label class="form-label">?????????? ????????????</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="text" wire:model.debounce.1s='price_by_meter'
                                                            wire:input.debounce.1s="priceByMeter" step="0.01"
                                                            class="form-control" placeholder="?????????? ????????????">
                                                        <span class="input-group-text">????????</span>
                                                    </div>
                                                    @error('price_by_meter')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6 mb-1 total-price" wire:ignore.self>
                                                    <label class="form-label" for="price">?????????? ??????????????</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="text" class="form-control total-price-input"
                                                            placeholder="0.0" wire:model.debounce.1s='total_price'
                                                            wire:input.debounce.1s="totalPrice('total_price')"
                                                            step="0.01" wire:ignore.self>
                                                        <span class="input-group-text">????????</span>
                                                    </div>
                                                    @error('total_price')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6 mb-1 real-estate-age" wire:ignore.self>
                                                    <label class="form-label">?????? ????????????</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="text" wire:model.debounce.1s='real_estate_age'
                                                            class="form-control" placeholder="?????? ????????????">
                                                        <span class="input-group-text">????????</span>
                                                    </div>
                                                    @error('real_estate_age')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6 mb-1 direction-div-hide" wire:ignore>
                                                    <label class="form-label">??????????????</label>
                                                    <select class="js-select2-direction select2 form-select"
                                                        wire:model='direction_ids' multiple="multiple"
                                                        wire:ignore.self>
                                                        @foreach (getDirections() as $direction)
                                                            <option value="{{ $direction->id }}" selected>
                                                                {{ $direction->name }}</option>
                                                        @endforeach
                                                    </select>

                                                    @error('direction_ids')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6 mb-1 land-type-div-hide" wire:ignore>
                                                    <label class="form-label">?????? ??????????</label>

                                                    <select class="js-select2-land-type select2 form-select"
                                                        wire:model='land_type_id'>
                                                        @foreach (getLandTypes() as $land_type)
                                                            <option value="{{ $land_type->id }}" selected>
                                                                {{ $land_type->name }}</option>
                                                        @endforeach
                                                    </select>

                                                    @error('land_type_id')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6 mb-1 licensed-div-hide" wire:ignore>
                                                    <label class="form-label">??????????????</label>
                                                    <select class="js-select2-licensed select2 form-select"
                                                        wire:model='licensed_id'>
                                                        @foreach (getLicenseds() as $licensed)
                                                            <option value="{{ $licensed->id }}" selected>
                                                                {{ $licensed->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('licensed_id')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6 mb-1 street-width-div-hide" wire:ignore>
                                                    <label class="form-label">?????? ????????????</label>

                                                    <select class="js-select2-street-width select2 form-select"
                                                        multiple="multiple" wire:model='street_width_ids'>
                                                        @foreach (getStreets() as $street_width)
                                                            <option value="{{ $street_width->id }}" selected>
                                                                {{ $street_width->street_number }}</option>
                                                        @endforeach
                                                    </select>

                                                    @error('street_width_ids')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6 mb-1 character" wire:ignore.self>
                                                    <label class="form-label">?????????? ????
                                                        ??????????????</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="text" wire:model.debounce.1s='character'
                                                            class="form-control" placeholder="?????????? ???? ??????????????">
                                                    </div>
                                                    @error('character')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6 mb-1 interface-length-div-hide" wire:ignore.self>
                                                    <label class="form-label">?????? ??????????????</label>

                                                    <div class="input-group input-group-merge">
                                                        <input type="text" step="0.01"
                                                            wire:model.debounce.1s='interface_length'
                                                            class="form-control" placeholder="?????? ??????????????">
                                                    </div>
                                                    @error('interface_length')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6 mb-1 building-type" wire:ignore>
                                                    <label class="form-label">?????? ????????????</label>

                                                    <select class="js-select2-building-type select2 form-select"
                                                        wire:model='building_type_id'>
                                                        @foreach (getBuildingTypes() as $building_type)
                                                            <option value="{{ $building_type->id }}" selected>
                                                                {{ $building_type->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>

                                                    @error('building_type_id')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6 mb-1 building-status" wire:ignore>
                                                    <label class="form-label">???????? ????????????</label>

                                                    <select class="js-select2-building-status select2 form-select"
                                                        wire:model='building_status_id'>
                                                        @foreach (getBuildingStatuses() as $building_status)
                                                            <option value="{{ $building_status->id }}" selected>
                                                                {{ $building_status->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>

                                                    @error('building_status_id')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6 mb-1 construction-delivery" wire:ignore>
                                                    <label class="form-label">?????????? ????????????</label>

                                                    <select
                                                        class="js-select2-construction-delivery select2 form-select"
                                                        wire:model='construction_delivery_id'>
                                                        @foreach (getConstructionDeliveries() as $construction_delivery)
                                                            <option value="{{ $construction_delivery->id }}" selected>
                                                                {{ $construction_delivery->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>

                                                    @error('construction_delivery_id')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6 mb-1 owner-ship-type" wire:ignore>
                                                    <label class="form-label">?????? ??????????????</label>
                                                    <select class="js-select2-owner-ship-type select2 form-select"
                                                        wire:model='owner_ship_type_id'>
                                                        @foreach (getOwnerShipTypes() as $owner_ship_type)
                                                            <option value="{{ $owner_ship_type->id }}" selected>
                                                                {{ $owner_ship_type->id }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('owner_ship_type_id')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6 mb-1 floor-number" wire:ignore.self>
                                                    <label class="form-label" for="price">?????? ????????????</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="number" wire:model.debounce.1s='floor_number'
                                                            class="form-control" placeholder="?????? ????????????">
                                                    </div>
                                                    @error('floor_number')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6 mb-1 notes" wire:ignore.self>
                                                    <label class="form-label">??????????????</label>
                                                    <textarea class="form-control" wire:model.debounce.1s='notes' rows="3" placeholder="??????????????"></textarea>
                                                    @error('notes')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6 mb-1 condominium-extra" wire:ignore.self>
                                                    <label class="form-label" for="price">?????????? ????????????</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="text" wire:model.debounce.1s='annual_income'
                                                            class="form-control" placeholder="?????????? ????????????">
                                                    </div>
                                                    @error('annual_income')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6 mb-1 branch-div-hide" wire:ignore>
                                                    <label class="form-label">??????????</label>
                                                    <select class="js-select2-branch select2 form-select"
                                                        wire:model='branch_id'>
                                                        @foreach (getBranchesUser() as $branch)
                                                            <option value="{{ $branch->id }}" selected>
                                                                {{ $branch->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>

                                                    @error('branch_id')
                                                        <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>

                                            </div>

                                        </div>

                                        <div class="d-flex justify-content-between mt-2">
                                            <button class="btn btn-primary btn-prev second-prev" wire:ignore>
                                                <i data-feather="chevron-left" class="align-middle me-sm-25 me-0"></i>
                                                <span class="align-middle d-sm-inline-block d-none">????????????</span>
                                            </button>
                                            <button class="btn btn-primary btn-next second-next" wire:ignore>
                                                <span class="align-middle d-sm-inline-block d-none">????????????</span>
                                                <i data-feather="chevron-right"
                                                    class="align-middle ms-sm-25 ms-0"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="account-home-details" style="display: none;" role="tabpanel"
                                        wire:ignore.self>

                                        <div class="content-header mb-2">
                                            <h2 class="fw-bolder mb-75">???????????? ??????????????</h2>
                                        </div>


                                        <form>
                                            <div class="row">

                                                <div class="col-md-6 mb-1">
                                                    <label class="form-label">???? ?????????? ??????????</label>
                                                </div>
                                                <div class="col-md-6 mb-1" wire:ignore>
                                                    <div class="form-check form-check-inline" wire:ignore.self>
                                                        <input class="form-check-input" type="radio"
                                                            name="inlineRadioOptions" id="inlineRadio1"
                                                            value="option1" wire:model.debounce.1s='yes'>
                                                        <label class="form-check-label" for="inlineRadio1"
                                                            wire:ignore.self>
                                                            ??????</label>
                                                    </div>
                                                    <div class="form-check form-check-inline" wire:ignore.self>
                                                        <input class="form-check-input" type="radio"
                                                            name="inlineRadioOptions" id="inlineRadio2"
                                                            value="option2" wire:model.debounce.1s='no'
                                                            wire:ignore.self>
                                                        <label class="form-check-label" for="inlineRadio2">????</label>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="row mediators" wire:ignore.self>

                                                <div class="col-md-6 mb-1 ">
                                                    <label class="form-label">??????????????</label>
                                                </div>


                                                <div class="col-md-5 mb-1 mediators" wire:ignore>
                                                    <div class="position-relative">

                                                        <select
                                                            class="js-select2-multi select2 form-select select2-hidden-accessible"
                                                            id="select2-multiple" multiple="multiple"
                                                            data-select2-id="select2-multiple" tabindex="-1"
                                                            aria-hidden="true" wire:ignore.self>
                                                            <optgroup label="??????????????" data-select2-id="170">

                                                                @if (!getMediators()->count())
                                                                    <option>???? ???????? ??????????</option>
                                                                @endif
                                                                @foreach (getMediators() as $mediator)
                                                                    <option value="{{ $mediator->id }}">
                                                                        {{ $mediator->name . '::' . $mediator->phone_number }}
                                                                    </option>
                                                                @endforeach
                                                            </optgroup>
                                                        </select>

                                                        @error('mediators_ids')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror

                                                        <span class="dropdown-wrapper" aria-hidden="true"></span>
                                                    </div>
                                                </div>

                                                <div class="col-md-1 mb-1 mediators">
                                                    <a type="button" href="javascript:;"
                                                        class="btn btn-icon rounded-circle btn-outline-primary waves-effect"
                                                        data-bs-toggle="modal" data-bs-target="#CreateMediatorForm">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-user-plus">
                                                            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                                            <circle cx="8.5" cy="7" r="4">
                                                            </circle>
                                                            <line x1="20" y1="8" x2="20"
                                                                y2="14"></line>
                                                            <line x1="23" y1="11" x2="17"
                                                                y2="11"></line>
                                                        </svg>
                                                    </a>
                                                </div>

                                            </div>

                                        </form>

                                        <div class="d-flex justify-content-between mt-1">
                                            <button class="btn btn-primary third-prev" wire:ignore>
                                                <i data-feather="chevron-left" class="align-middle me-sm-25 me-0"></i>
                                                <span class="align-middle d-sm-inline-block d-none">????????????</span>
                                            </button>
                                            <button class="btn btn-success" wire:click="update" wire:ignore>
                                                <i data-feather="check" class="align-middle me-sm-25 me-0"></i>
                                                <span class="align-middle d-sm-inline-block d-none">??????</span>
                                                <span class="spinner-border spinner-border-sm" wire:loading
                                                    role="status" aria-hidden="true"></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="CreateMediatorForm" tabindex="-1" aria-labelledby="CreateMediatorFormTitle"
        aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog modal-dialog-centered modal-lg" wire:ignore.self>
            <div class="modal-content" wire:ignore.self>
                <div class="modal-header bg-transparent" wire:ignore.self>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pb-5 px-sm-4 mx-50" wire:ignore.self>
                    <h1 class="address-title text-center mb-1" id="CreateMediatorFormTitle" wire:ignore.self>??????????
                        ????????
                    </h1>
                    <p class="address-subtitle text-center mb-2 pb-75"></p>

                    <form id="addNewAddressForm" class="row gy-1 gx-2" wire:ignore.self>


                        <div class="col-12 col-md-6" wire:ignore.self>
                            <label class="form-label">?????? ????????????</label>
                            <input type="text" wire:model.debounce.1s='name' class="form-control"
                                placeholder="?????? ????????????" />
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>


                        <div class="col-12 col-md-6" wire:ignore.self>
                            <label class="form-label">?????? ????????????</label>
                            <input type="tel" wire:model.debounce.1s='phone_number' maxlength="10"
                                class="form-control" placeholder="?????? ????????????" />
                            @error('phone_number')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>


                        <div class="col-12 col-md-6" wire:ignore.self>
                            <label class="form-label">?????? ????????????</label>
                            <select wire:model='type' class="form-select">
                                <option value="office">????????</option>
                                <option value="individual">??????</option>
                            </select>
                            @error('type')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>


                        <div class="col-12 text-center mt-2 pt-50" wire:ignore.self>
                            <button type="button" class="btn btn-primary btn-submit me-1"
                                wire:click="createMediator">??????</button>
                            <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal"
                                aria-label="Close">??????????</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


    @push('test')
        <script>
            $(document).ready(function() {


                window.livewire.on('submitMediator', (data) => {
                    $('#CreateMediatorForm').modal('hide');
                    $('.js-select2-multi').html('');
                    $('.js-select2-multi').select2({
                        placeholder: ' ???????????? ??????????????',
                        data: data,
                        closeOnSelect: false,
                    });
                });

                $property_type_id = "{{ $property_type_id }}";

                // Hide All
                $(".price-by-meter").hide();
                $(".total-price").hide();
                $(".direction-div-hide").hide();
                $(".land-type-div-hide").hide();
                $(".licensed-div-hide").hide();
                $(".street-width-div-hide").hide();
                $(".character").hide();
                $(".interface-length-div-hide").hide();
                $(".condominium-extra").hide();
                $(".condominium-extra-stores-number").hide();
                $(".condominium-extra-flat-rooms").hide();
                $(".condominium-extra-bathroom-number").hide();

                $(".price").hide();
                $(".floor-number").hide();
                $(".notes").hide();
                $(".branch-div-hide").hide();
                $(".owner-ship-type").hide();
                $(".real-estate-age").hide();
                $(".building-type").hide();
                $(".building-status").hide();
                $(".construction-delivery").hide();

                if ($property_type_id == 1) {
                    $(".price-by-meter").show();
                    $(".total-price").show();
                    $(".direction-div-hide").show();
                    $(".land-type-div-hide").show();
                    $(".licensed-div-hide").show();
                    $(".total-price-input").prop('disabled', true);
                    $(".street-width-div-hide").show();
                    $(".character").show();
                    $(".interface-length-div-hide").show();
                    $(".notes").show();
                    $(".branch-div-hide").show();

                }

                if ($property_type_id == 2) {
                    // $(".price-by-meter").show();
                    $(".total-price").show();
                    $(".direction-div-hide").show();
                    $(".land-type-div-hide").show();
                    $(".licensed-div-hide").show();
                    $(".street-width-div-hide").show();
                    $(".character").show();
                    $(".interface-length-div-hide").show();
                    $(".building-type").show();
                    $(".building-status").show();
                    $(".construction-delivery").show();
                    $(".notes").show();
                    $(".real-estate-age").show();
                    $(".branch-div-hide").show();

                }

                if ($property_type_id == 3) {
                    $(".condominium-extra").show();
                    $(".condominium-extra-stores-number").show();
                    $(".condominium-extra-flat-rooms").show();
                    $(".real-estate-age").show();
                    $(".notes").show();
                    $(".total-price").show();
                    $(".branch-div-hide").show();

                }

                if ($property_type_id == 4) {
                    // // $(".price").show();
                    $(".floor-number").show();
                    $(".notes").show();
                    $(".condominium-extra-flat-rooms").show();
                    $(".condominium-extra-bathroom-number").show();
                    $(".total-price").show();
                    $(".branch-div-hide").show();
                    $(".real-estate-age").show();
                }

                if ($property_type_id == 5) {
                    $(".direction-div-hide").show();
                    $(".street-width-div-hide").show();
                    $(".notes").show();
                    $(".owner-ship-type").show();
                    $(".real-estate-age").show();
                    $(".total-price").show();
                    // $(".price").show();
                    $(".branch-div-hide").show();
                }

                // window.livewire.emit('setMediatorsIds');



                window.initSelectCompanyDrop = () => {

                    $('.js-select2-multi').select2({
                        placeholder: '?????????? ??????????????',
                        closeOnSelect: true,
                        tags: true
                    });

                    $('.js-select2-city').select2({
                        placeholder: '???????????? ??????????????',
                        closeOnSelect: true

                    });

                    $('.js-select2-neighborhood').select2({
                        placeholder: '???????????? ????????',
                        closeOnSelect: true
                    });

                    $('.js-select2-property-type').select2({
                        placeholder: '???????????? ?????? ????????????',
                        closeOnSelect: true
                    });

                    $('.js-select2-direction').select2({
                        placeholder: '???????????? ??????????????',
                        closeOnSelect: true
                    });

                    $('.js-select2-land-type').select2({
                        placeholder: '???????????? ?????? ??????????',
                        closeOnSelect: true
                    });

                    $('.js-select2-licensed').select2({
                        placeholder: '???????????? ??????????????',
                        closeOnSelect: true
                    });

                    $('.js-select2-street-width').select2({
                        placeholder: '???????????? ?????? ????????????',
                        closeOnSelect: true
                    });

                    $('.js-select2-interface-length').select2({
                        placeholder: '???????????? ?????? ??????????????',
                        closeOnSelect: true
                    });

                    $('.js-select2-branch').select2({
                        placeholder: '???????????? ??????????',
                        closeOnSelect: true
                    });

                    $('.js-select2-owner-ship-type').select2({
                        placeholder: '???????????? ?????? ??????????????f',
                        closeOnSelect: true
                    });
                }


                initSelectCompanyDrop();

                $(".js-select2-multi").on('change', function() {
                    var data = $('.js-select2-multi').val();
                    @this.set('mediators_ids', data);
                    window.livewire.emit('setMediatorsIds');
                });

                $('.js-select2-city').on('change', function() {
                    var city_id = $('.js-select2-city').val();
                    @this.set('city_id', city_id);
                    window.livewire.emit('setMediatorsIds');
                });

                $('.js-select2-neighborhood').on('change', function() {
                    var neighborhood_id = $('.js-select2-neighborhood').val();
                    @this.set('neighborhood_id', neighborhood_id);
                    window.livewire.emit('setMediatorsIds');
                });

                $('.js-select2-property-type').on('change', function() {
                    var property_type_id = $('.js-select2-property-type').val();
                    @this.set('property_type_id', property_type_id);

                    $(".price-by-meter").hide();
                    $(".total-price").hide();
                    $(".direction-div-hide").hide();
                    $(".land-type-div-hide").hide();
                    $(".licensed-div-hide").hide();
                    $(".street-width-div-hide").hide();
                    $(".character").hide();
                    $(".interface-length-div-hide").hide();
                    $(".condominium-extra").hide();
                    // // // // $(".price").hide();
                    $(".floor-number").hide();
                    $(".notes").hide();
                    $(".branch-div-hide").hide();
                    $(".owner-ship-type").hide();
                    $(".real-estate-age").hide();
                    $(".building-type").hide();
                    $(".building-status").hide();
                    $(".construction-delivery").hide();

                    if (property_type_id == 1) {
                        $(".price-by-meter").show();
                        $(".total-price").show();
                        $(".direction-div-hide").show();
                        $(".land-type-div-hide").show();
                        $(".licensed-div-hide").show();
                        $(".street-width-div-hide").show();
                        $(".character").show();
                        $(".total-price-input").prop('disabled', true);
                        $(".interface-length-div-hide").show();
                        $(".notes").show();
                        $(".branch-div-hide").show();

                    }

                    if (property_type_id == 2) {
                        // $(".price-by-meter").show();
                        $(".total-price").show();
                        $(".direction-div-hide").show();
                        $(".land-type-div-hide").show();
                        $(".licensed-div-hide").show();
                        $(".street-width-div-hide").show();
                        $(".character").show();
                        $(".interface-length-div-hide").show();
                        $(".building-type").show();
                        $(".building-status").show();
                        $(".construction-delivery").show();
                        $(".notes").show();
                        $(".real-estate-age").show();
                        $(".branch-div-hide").show();

                    }

                    if (property_type_id == 3) {
                        $(".condominium-extra").show();
                        $(".real-estate-age").show();
                        $(".notes").show();
                        $(".total-price").show();
                        $(".branch-div-hide").show();

                    }

                    if (property_type_id == 4) {
                        // // // $(".price").show();
                        $(".floor-number").show();
                        $(".notes").show();
                        $(".branch-div-hide").show();
                        $(".real-estate-age").show();

                    }

                    if (property_type_id == 5) {
                        $(".direction-div-hide").show();
                        $(".street-width-div-hide").show();
                        $(".notes").show();
                        $(".owner-ship-type").show();
                        $(".real-estate-age").show();
                        // // // $(".price").show();
                        $(".branch-div-hide").show();
                    }

                    window.livewire.emit('setMediatorsIds');
                });

                $('.js-select2-direction').on('change', function() {
                    var direction_ids = $('.js-select2-direction').val();
                    @this.set('direction_ids', direction_ids);

                    window.livewire.emit('setMediatorsIds');
                });

                $('.js-select2-land-type').on('change', function() {
                    var land_type_id = $('.js-select2-land-type').val();
                    @this.set('land_type_id', land_type_id);
                    window.livewire.emit('setMediatorsIds');
                });

                $('.js-select2-licensed').on('change', function() {
                    var licensed_id = $('.js-select2-licensed').val();
                    @this.set('licensed_id', licensed_id);
                    window.livewire.emit('setMediatorsIds');
                });

                $('.js-select2-street-width').on('change', function() {
                    var street_width_ids = $('.js-select2-street-width').val();
                    @this.set('street_width_ids', street_width_ids);
                    window.livewire.emit('setMediatorsIds');
                });

                $('.js-select2-branch').on('change', function() {
                    var branch_id = $('.js-select2-branch').val();
                    @this.set('branch_id', branch_id);
                    window.livewire.emit('setMediatorsIds');
                });

                $('.js-select2-interface-length').on('change', function() {
                    var interface_length_id = $('.js-select2-interface-length').val();
                    @this.set('interface_length_id', interface_length_id);
                    window.livewire.emit('setMediatorsIds');
                });


                $('.js-select2-owner-ship-type').on('change', function() {
                    var owner_ship_type_id = $('.js-select2-owner-ship-type').val();
                    @this.set('owner_ship_type_id', owner_ship_type_id);
                    window.livewire.emit('setMediatorsIds');
                });


                window.livewire.on('select2', () => {
                    initSelectCompanyDrop();
                });

                window.livewire.on('mediators-show', (is_direct) => {
                    if (!is_direct) {
                        $(".mediators").show();
                        $('.js-select2-multi').select2({
                            placeholder: '?????????? ??????????????',
                            closeOnSelect: true
                        });
                    } else {
                        $(".mediators").hide();
                    }
                });

                window.livewire.on('setids', (ids, is_direct) => {
                    @this.set('mediators_ids', ids['mediators_ids']);
                    @this.set('direction_ids', ids['direction_ids']);
                    @this.set('street_width_ids', ids['street_width_ids']);

                    if (is_direct) {
                        $('.mediators').hide(ids);
                    } else {
                        // var mediators_ids = JSON.parse(ids);
                        $('.js-select2-multi').val(ids['mediators_ids']);
                    }


                    $('.js-select2-direction').val(ids['direction_ids']);
                    $('.js-select2-street-width').val(ids['street_width_ids']);

                    // window.livewire.emit('setMediatorsIds');
                });


                window.livewire.on('neighborhoods', (data) => {
                    $('.js-select2-neighborhood').html('');

                    $('.js-select2-neighborhood').select2({
                        placeholder: '???????????? ????????',
                        data: data,
                        closeOnSelect: true
                    });
                });

                var first = $(".personal-info");
                var second = $(".account-details");
                var third = $(".account-home-details");

                var first_step = $(".first-step");
                var second_step = $(".second-step");
                var third_step = $(".third-step");
                first_step.addClass('active');


                $(".first-next").on('click', function() {
                    initSelectCompanyDrop();
                    first_step.removeClass('active');
                    second_step.addClass('active');
                    third_step.removeClass('active');
                    first.css('display', 'none');
                    second.css('display', 'block');
                    third.css('display', 'none');
                });

                $(".second-prev").on('click', function() {
                    first_step.addClass('active');
                    second_step.removeClass('active');
                    third_step.removeClass('active');
                    first.css('display', 'block');
                    second.css('display', 'none');
                    third.css('display', 'none');
                });

                $(".second-next").on('click', function() {
                    first_step.removeClass('active');
                    second_step.removeClass('active');
                    third_step.addClass('active');
                    first.css('display', 'none');
                    second.css('display', 'none');
                    third.css('display', 'block');
                });

                $(".third-prev").on('click', function() {
                    initSelectCompanyDrop();
                    first_step.removeClass('active');
                    second_step.addClass('active');
                    third_step.removeClass('active');
                    first.css('display', 'none');
                    second.css('display', 'block');
                    third.css('display', 'none');
                });
            });
        </script>

        <script>
            window.addEventListener("DOMContentLoaded", function() {
                Livewire.emit("setNeiborhoods");
                Livewire.emit("setIds");
            });
        </script>
    @endpush

</div>
