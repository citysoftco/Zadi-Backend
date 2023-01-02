@extends('store.layout.app')
<style>
    @media screen {
        #printSection {
            display: none;
        }
    }

    @media print {
        body * {
            visibility: hidden;
        }

        #printSection,
        #printSection * {
            visibility: visible;
        }

        #printSection {
            position: absolute;
            left: 0;
            top: 0;
        }
    }
</style>

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
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">{{ __('keywords.Completed orders') }}</h4>
                    </div>
                    <div class="container"> <br>
                        <table id="datatableDefault" class="table table-striped text-nowrap w-100">
                            <thead class="thead-light">
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>{{ __('keywords.Cart_id') }}</th>
                                    <th>{{ __('keywords.Cart price') }}</th>
                                    <th>{{ __('keywords.User') }}</th>
                                    <th>{{ __('keywords.Store') }}</th>
                                    <th>{{ __('keywords.Delivery Boy') }}</th>
                                    <th>{{ __('keywords.Order_Date') }}</th>
                                    <th>{{ __('keywords.Delivery_Date') }}</th>
                                    <th>{{ __('keywords.Status') }}</th>
                                    <th>{{ __('keywords.Payment Method') }}</th>
                                    <th>{{ __('keywords.Cart Products') }}</th>
                                    <th>{{ __('keywords.Signature') }}</th>
                                    <th>{{ __('keywords.Invoice') }}</th>

                                </tr>
                            </thead>
                            <tbody>
                                @if (count($ord) > 0)
                                    @php $i=1; @endphp
                                    @foreach ($ord as $ords)
                                        <tr>
                                            <td class="text-center">{{ $i }}</td>
                                            <td>{{ $ords->cart_id }}</td>
                                            <td>{{ $ords->total_price }}</td>
                                            <td>{{ $ords->name }}<p style="font-size:14px">({{ $ords->user_phone }})</p>
                                            </td>
                                            <td>{{ $ords->store_name }}<p style="font-size:14px">
                                                    ({{ $ords->phone_number }})
                                                </p>
                                            </td>
                                            <td>{{ $ords->boy_name }}<p style="font-size:14px">({{ $ords->boy_phone }})
                                                </p>
                                            </td>
                                            <td>{{ $ords->order_date }}</td>
                                            <td>{{ $ords->delivery_date }}<p style="font-size:14px">
                                                    ({{ $ords->time_slot }})</p>
                                            </td>
                                            @if ($ords->order_status == null || $ords->order_status == '')
                                                <td>
                                                    <p><span class="dot" style="color:orange"></span><b
                                                            style="color:orange">NOT PLACED</b></p>
                                                </td>
                                            @endif
                                            @if ($ords->order_status == 'Pending' || $ords->order_status == 'pending')
                                                <td>
                                                    <p><span class="dot" style="color:orange"></span><b
                                                            style="color:orange">Pending</b></p>
                                                </td>
                                            @endif
                                            @if ($ords->order_status == 'Confirmed' || $ords->order_status == 'confirmed')
                                                <td>
                                                    <p><span class="dot" style="color:purple"></span><b
                                                            style="color:purple">Confirmed</b></p>
                                                </td>
                                            @endif
                                            @if ($ords->order_status == 'out_for_delivery' || $ords->order_status == 'Out_For_Delivery')
                                                <td>
                                                    <p><span class="dot" style="color:orange"></span><b
                                                            style="color:orange">Out For Delivery</b></p>
                                                </td>
                                            @endif
                                            @if ($ords->order_status == 'Cancelled' || $ords->order_status == 'cancelled')
                                                <td>
                                                    <p><span class="dot" style="color:red"></span><b
                                                            style="color:red">Cancelled</b></p>
                                                </td>
                                            @endif
                                            @if ($ords->order_status == 'Completed' || $ords->order_status == 'completed')
                                                <td>
                                                    <p><span class="dot" style="color:green"></span><b
                                                            style="color:green">Completed</b></p>
                                                </td>
                                            @endif
                                            <td>
                                                @if ($ords->payment_method == 'COD' ||
                                                    $ords->payment_method == 'cod' ||
                                                    $ords->payment_method == 'Cod' ||
                                                    $ords->payment_method == 'COD')
                                                    <b style="color:red">
                                                    @else
                                                        <b style="color:green">
                                                @endif {{ $ords->payment_method }}</b>
                                            </td>


                                            <td><button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#exampleModal1{{ $ords->cart_id }}">{{ __('keywords.Details') }}</button>
                                            </td>

                                            <td><a href="{{ $url_aws . $ords->user_signature }}"><img
                                                        src="{{ $url_aws . $ords->user_signature }}"
                                                        style="width:50px;height:50px;border-radius:50%" alt="image"></a>
                                            </td>
                                            <td><a target="_blank" rel="noopener noreferrer"
                                                    style="margin-right: 10px; !important"
                                                    href="{{ route('invoice', $ords->cart_id) }}" class="btn btn-success">
                                                    Invoice
                                                </a>&nbsp; &nbsp;<a target="_blank" rel="noopener noreferrer"
                                                    href="{{ route('a4invoice', $ords->cart_id) }}"
                                                    class="btn btn-success">
                                                    A4 Invoice
                                                </a></td>
                                        </tr>
                                        @php $i++; @endphp
                                    @endforeach
                                @else
                                    <tr>
                                        <td>{{ __('keywords.No data found') }}</td>
                                        @for ($i = 1; $i < 12; $i++)
                                            <td style="display:none"></td>
                                        @endfor
                                    </tr>
                                @endif
                            </tbody>
                        </table><br />
                        <div class="pull-right mb-1" style="float: right;">
                            {{ $ord->render('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
    </div>


    <!--/////////details model//////////-->
    <!--/////////details model//////////-->
    @foreach ($ord as $ords)
        <div id="printThis">
            <div class="modal fade" id="exampleModal1{{ $ords->cart_id }}" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="container">

                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">{{ __('keywords.Order Details') }}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="material-datatables">
                                <form role="form" method="post" action="">
                                    <table id="datatables" class="table table-striped table-no-bordered table-hover"
                                        cellspacing="0" width="100%" style="width:100%" data-background-color="purple">


                                        <tbody>
                                            <tr>
                                                <td colspan="5">
                                                    <table class="table">
                                                        <tr>
                                                            <td valign="top" style="width:50%">
                                                                <strong> {{ __('keywords.Order_Id') }} : </strong>
                                                                {{ $ords->cart_id }}
                                                                <br />
                                                                <strong>{{ __('keywords.Customer_name') }} :
                                                                </strong>{{ $ords->receiver_name }}<br />
                                                                <strong>{{ __('keywords.Contact') }} :
                                                                </strong>{{ $ords->receiver_phone }}, @if ($ords->user_phone != $ords->receiver_phone)
                                                                    {{ $ords->receiver_phone }}
                                                                @endif <br />
                                                                <strong> {{ __('keywords.Delivery_Date') }} :
                                                                </strong>{{ $ords->delivery_date }}
                                                                <br />
                                                                <strong> {{ __('keywords.Time_Slot') }} :
                                                                </strong>{{ $ords->time_slot }}
                                                                <br />
                                                            </td>
                                                            <td style="width:50%" align="right">
                                                                <strong> {{ __('keywords.Delivery Address') }}
                                                                </strong><br />

                                                                <b>{{ $ords->type }} :</b>
                                                                {{ $ords->house_no }},{{ $ords->society }},<br>
                                                                @if ($ords->landmark != null)
                                                                    {{ $ords->landmark }},
                                                                    <br>
                                                                @endif
                                                                {{ $ords->city }},{{ $ords->state }},<br>
                                                                {{ $ords->pincode }}
                                                            </td>

                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th>{{ __('keywords.Product_Name') }}</th>
                                                <th>{{ __('keywords.Qty') }}</th>
                                                <th>{{ __('keywords.Tax') }}</th>
                                                <th>{{ __('keywords.Price') }}</th>
                                                <th>{{ __('keywords.Total_Price') }}</th>
                                            </tr>
                                            @if (count($details) > 0)
                                                @php $i=1; @endphp

                                                <tr>
                                                    @foreach ($details as $detailss)
                                                        @if ($detailss->cart_id == $ords->cart_id)
                                                            <td>
                                                                <p><img style="width:25px;height:25px; border-radius:50%"
                                                                        src="{{ url($detailss->varient_image) }}"
                                                                        alt="$detailss->product_name">
                                                                    {{ $detailss->product_name }}({{ $detailss->quantity }}{{ $detailss->unit }})
                                                                </p>
                                                            </td>
                                                            <td>{{ $detailss->qty }}</td>
                                                            <td>
                                                                @if ($detailss->tx_per == 0 || $detailss->tx_per == null)
                                                                    0
                                                                @else
                                                                    {{ $detailss->tx_per }}
                                                                    @endif % @if ($detailss->tx_per != 0 && $detailss->tx_name != null)
                                                                        ({{ $detailss->tx_name }})
                                                                    @endif
                                                            </td>
                                                            <td>
                                                                <p><span style="color:grey">
                                                                        @if ($detailss->price_without_tax != null)
                                                                            {{ $detailss->price_without_tax }}
                                                                        @else
                                                                            {{ $detailss->price }}
                                                                        @endif
                                                                    </span></p>
                                                            </td>
                                                            <td>
                                                                <p><span style="color:grey">{{ $detailss->price }}</span>
                                                                </p>
                                                            </td>
                                                        @endif
                                                </tr>
                                                @php $i++; @endphp
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="5">{{ __('keywords.No data found') }}</td>
                                            </tr>
    @endif


    <tr>
        <td colspan="4" class="text-right"><strong class="pull-right">{{ __('keywords.Products_Price') }} : </strong>
        </td>
        <td class="text-right" colspan="1">
            <strong>{{ $ords->price_without_delivery }}</strong>
        </td>
    </tr>
    <tr>
        <td colspan="4" class="text-right"><strong class="pull-right">{{ __('keywords.Delivery_Charge') }} :
            </strong></td>
        <td class="text-right" colspan="1">
            <strong>+{{ $ords->delivery_charge }}</strong>
        </td>
    </tr>
    @if ($ords->paid_by_wallet > 0)
        <tr>
            <td colspan="4" class="text-right"><strong class="pull-right">{{ __('keywords.Paid By Wallet') }} :
                </strong></td>
            <td class="text-right" colspan="1">
                <strong>-{{ $ords->paid_by_wallet }}</strong>
            </td>
        </tr>
    @endif
    @if ($ords->coupon_discount > 0)
        <tr>
            <td colspan="4" class="text-right"><strong class="pull-right">{{ __('keywords.Coupon Discount') }} :
                </strong></td>
            <td class="text-right" colspan="1">
                <strong class="">-{{ $ords->coupon_discount }}</strong>
            </td>
        </tr>
    @endif
    <tr>
        <td colspan="4" class="text-right"><strong
                class="pull-right">{{ __('keywords.Net_Total(Payable)') }}:</strong></td>
        <td class="text-right" colspan="1">{{ $ords->rem_price }}</td>
    </tr>
    </tbody>
    </table>
    </form>
    </div>
    <div class="modal-footer">
        <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">{{ __('keywords.Close') }}</button>
    </div>
    </div>

    <!-- end content-->
    </div>
    </div>
    <!--  end card  -->

    </div>
    </div>
    </div>
    @endforeach

@endsection

</div>
