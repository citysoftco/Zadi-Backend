@extends('store.layout.app')

{{-- @section('preload-section')
    @if ($mapset->mapbox == 1 && $mapset->google_map == 0)
        <meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://code.jquery.com/jquery-3.4.1.js" type="text/javascript"></script>
        <script src="https://unpkg.com/@mapbox/mapbox-sdk/umd/mapbox-sdk.min.js"></script>
        <style>
            * {
                box-sizing: border-box;
            }

            body {
                font: 16px Arial;
            }

            /*the container must be positioned relative:*/
            .autocomplete {
                position: relative;
                display: inline-block;
            }

            input {
                border: 1px solid transparent;
                background-color: #f1f1f1;
                padding: 10px;
                font-size: 16px;
            }

            input[type=text] {
                width: 100%;
            }

            input[type=submit] {
                background-color: DodgerBlue;
                color: #fff;
                cursor: pointer;
            }

            .autocomplete-items {
                position: absolute;
                border: 1px solid #d4d4d4;
                border-bottom: none;
                border-top: none;
                z-index: 99;
                /*position the autocomplete items to be the same width as the container:*/
                top: 100%;
                left: 0;
                right: 0;
            }

            .autocomplete-items div {
                padding: 10px;
                cursor: pointer;
                background-color: #fff;
                border-bottom: 1px solid #d4d4d4;
            }

            /*when hovering an item:*/
            .autocomplete-items div:hover {
                background-color: #e9e9e9;
            }

            /*when navigating through the items using the arrow keys:*/
            .autocomplete-active {
                background-color: DodgerBlue !important;
                color: #ffffff;
            }
        </style>
    @endif
    @if ($mapset->mapbox == 0 && $mapset->google_map == 1)
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
            crossorigin="anonymous"></script>
        <style>
            #map {
                height: 100%;
            }

            .controls {
                margin-top: 10px;
                border: 1px solid transparent;
                border-radius: 2px 0 0 2px;
                box-sizing: border-box;
                -moz-box-sizing: border-box;
                height: 32px;
                outline: none;
                box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
            }

            #pac-input {
                background-color: #fff;
                font-family: Roboto;
                font-size: 15px;
                font-weight: 300;
                margin-left: 12px;
                padding: 0 11px 0 13px;
                text-overflow: ellipsis;
                width: 300px;
            }

            #pac-input:focus {
                border-color: #4d90fe;
            }

            .pac-container {
                font-family: Roboto;
            }

            #type-selector {
                color: #fff;
                background-color: #4d90fe;
                padding: 5px 11px 0px 11px;
            }

            #type-selector label {
                font-family: Roboto;
                font-size: 13px;
                font-weight: 300;
            }
        </style>
    @endif
@endsection --}}

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        @if (is_array(session()->get('success')))
                            <ul>
                                @foreach (session()->get('success') as $message)
                                    <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                        @else
                            {{ session()->get('success') }}
                        @endif
                    </div>
                @endif
                @if (count($errors) > 0)
                    @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                            {{ $errors->first() }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                @endif
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">{{ __('keywords.Add Bank Account') }}</h4>
                        <form class="forms-sample"
                            action="{{ route('stores.banks-accounts.update', [$store->id, $bankAccount->id]) }}"
                            method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            @method('put')
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">{{ __('keywords.Bank Name') }}</label>
                                    <input type="text" required value="{{ $bankAccount->bank_name }}" name="bank_name"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">{{ __('keywords.Account Name') }}</label>
                                    <input type="text" required value="{{ $bankAccount->bank_name }}" name="account_name"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">{{ __('keywords.Account Number') }}</label>
                                    <input type="number" value="{{ $bankAccount->account_number }}" name="account_number"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">{{ __('keywords.Account Status') }}</label>
                                    <select name="account_status" class="form-control" required>
                                        <option disabled selected>{{ __('keywords.Select Account Status') }}
                                        </option>
                                        <option value="on" @if ($bankAccount->account_status == 'on') selected @endif>
                                            {{ __('keywords.Account On') }}
                                        </option>
                                        <option value="off" @if ($bankAccount->account_status == 'off') selected @endif>
                                            {{ __('keywords.Account Off') }}
                                        </option>
                                        {{-- @foreach ($id_types as $taxes)
                                            <option value="{{ $taxes->name }}">{{ $taxes->name }}</option>
                                        @endforeach --}}
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating">{{ __('keywords.Bank Branch') }}</label>
                                    <input type="text" name="branch_name" class="form-control"
                                        value="{{ $bankAccount->branch_name }}" required>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <img src="{{ asset($bankAccount->bank_logo) }}" alt="">
                                <label class="bmd-label-floating">{{ __('keywords.Bank Logo') }}</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile" name="bank_logo"
                                        accept="image/png, image/jpeg" />
                                    <label class="custom-file-label"
                                        for="customFile">{{ __('keywords.Choose_File') }}</label>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">{{ __('keywords.Password') }}</label>
                                    <input type="text" name="password" class="form-control">
                                </div>
                            </div>
                            @if ($mapset->mapbox == 0 && $mapset->google_map == 1)
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="autocomplete"> {{ __('keywords.Boy Address') }} </label>
                                        <input type="text" name="boy_loc" id="autocomplete" class="form-control">
                                    </div>
                                </div>
                            @endif
                            @if ($mapset->mapbox == 1 && $mapset->google_map == 0)
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="autocomplete"> {{ __('keywords.Boy Address') }} </label>
                                        <div class="autocomplete" style="width:100%;">
                                            <input id="lng" type="hidden" name="lng">
                                            <input id="lat" type="hidden" name="lat">
                                            <input id="myInput" type="text" name="boy_loc" placeholder="address">
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div> --}}


                        <br>

                        <button type="submit" class="btn btn-primary">{{ __('keywords.Submit') }}</button>
                        <a href="{{ route('stores.banks-accounts.index', $store->id) }}"
                            class="btn">{{ __('keywords.Close') }}</a>
                        <div class="clearfix"></div>
                    </div><br>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>




@endsection
