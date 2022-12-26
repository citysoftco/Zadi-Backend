@extends('admin.layout.app')

@section('preload-section')
    {{-- You must include files that need to be preloaded: Syncronous scripts and Stylesheets mostly --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <style>
        * {
            /* direction: rtl */
        }
    </style>
@endsection

@section('content')

    <!-- BEGIN row -->
    <div class="row">
        <!-- BEGIN col-6 -->
        <div class="col-xl-6">
            <!-- BEGIN card -->
            <div class="card text-white-transparent-7 mb-3 overflow-hidden">
                <!-- BEGIN card-img-overlay -->
                <div class="card-img-overlay d-block d-lg-none bg-blue rounded"></div>
                <!-- END card-img-overlay -->

                <!-- BEGIN card-img-overlay -->
                <div class="card-img-overlay d-none d-md-block bg-blue rounded"
                    style="background-image: url({{ url('assets/theme_assets/img/bg/wave-bg.png') }}); background-position: right bottom; background-repeat: no-repeat; background-size: 100%;">
                </div>
                <!-- END card-img-overlay -->

                <!-- BEGIN card-img-overlay -->
                <div class="card-img-overlay d-none d-md-block bottom-0 top-auto">
                    <div class="row">
                        <div class="col-md-8 col-xl-6"></div>
                        <div class="col-md-4 col-xl-6 mb-n2">
                            <img src="{{ url('assets/theme_assets/img/page/dashboard.svg') }}" alt=""
                                class="d-block ml-n3 mb-5" style="max-height: 310px" />
                        </div>
                    </div>
                </div>
                <!-- END card-img-overlay -->

                <!-- BEGIN card-body -->
                <div class="card-body position-relative">
                    <!-- BEGIN row -->
                    <div class="row">
                        <!-- BEGIN col-8 -->
                        <div class="col-md-8">
                            <!-- stat-top -->
                            <div class="d-flex">
                                <div class="mr-auto">
                                    <h5 class="text-white-transparent-8 mb-3">{{ __('keywords.This Week Earning') }}</h5>
                                    <h3 class="text-white mt-n1 mb-1">{{ round($this_week, 2) }}</h3>
                                    <p class="mb-1 text-white-transparent-6 text-truncate">
                                        @if ($difference >= 0)
                                        <i class="fa fa-caret-up"></i>@else<i class="fa fa-caret-down"></i>
                                        @endif <b>{{ round($difference, 2) }} %</b>
                                        @if ($difference >= 0)
                                            {{ __('keywords.increase') }}
                                        @else
                                            {{ __('keywords.decrease') }}
                                        @endif {{ __('keywords.compare to last week') }}
                                    </p>
                                </div>
                            </div>

                            <hr class="hr-transparent bg-white-transparent-2 mt-3 mb-3" />

                            <!-- stat-bottom -->
                            <div class="row">
                                <div class="col-6 col-lg-5">
                                    <div class="mt-1">
                                        <i class="fa fa-fw fa-shopping-bag fs-28px text-black-transparent-5"></i>
                                    </div>
                                    <div class="mt-1">
                                        <div>{{ __('keywords.Store Earnings') }}</div>
                                        <div class="font-weight-600 text-white">{{ round($store_earnings, 2) }}</div>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-5">
                                    <div class="mt-1">
                                        <i class="fa fa-fw fa-retweet fs-28px text-black-transparent-5"></i>
                                    </div>
                                    <div class="mt-1">
                                        <div>{{ __('keywords.Admin Earnings') }}</div>
                                        <div class="font-weight-600 text-white">{{ round($admin_earnings, 2) }}</div>
                                    </div>
                                </div>
                            </div>

                            <hr class="hr-transparent bg-white-transparent-2 mt-3 mb-3" />

                            <div class="mt-3 mb-2">
                                <a href="{{ route('finance') }}"
                                    class="btn btn-yellow btn-rounded btn-sm pl-5 pr-5 pt-2 pb-2 fs-14px font-weight-600"><i
                                        class="fa fa-wallet mr-2 ml-n2"></i>{{ __('keywords.Go To Store Earnings') }}</a>
                            </div>
                            <p class="fs-12px">
                                {{ __('keywords.It Takes You To The Store Earnings Section') }}.
                            </p>
                        </div>
                        <!-- END col-8 -->

                        <!-- BEGIN col-4 -->
                        <div class="col-md-4 d-none d-md-block" style="min-height: 380px;"></div>
                        <!-- END col-4 -->
                    </div>
                    <!-- END row -->
                </div>
                <!-- END card-body -->
            </div>
            <!-- END card -->
        </div>
        <!-- END col-6 -->

        <!-- BEGIN col-6 -->
        <div class="col-xl-6">
            <!-- BEGIN row -->
            <div class="row">
                <!-- BEGIN col-6 -->
                <div class="col-sm-6">
                    <!-- BEGIN card -->
                    <div class="card mb-3 overflow-hidden fs-13px border-0 bg-gradient-custom-orange"
                        style="min-height: 202px;">
                        <!-- BEGIN card-img-overlay -->
                        <div class="card-img-overlay mb-n4 mr-n4 d-flex" style="bottom: 0; top: auto;">
                            <img src="assets/img/icon/order.svg" alt="" class="ml-auto d-block mb-n3"
                                style="max-height: 105px" />
                        </div>
                        <!-- END card-img-overlay -->

                        <!-- BEGIN card-body -->
                        <div class="card-body position-relative">
                            <h5 class="text-white-transparent-8 mb-3 fs-16px">{{ __('keywords.New Orders') }}</h5>
                            <h3 class="text-white mt-n1">{{ $this_week_ord }}</h3>
                            <div class="progress bg-black-transparent-5 mb-2" style="height: 6px">
                                @if ($diff_ord >= 0)
                                    <div class="progrss-bar progress-bar-striped bg-white"
                                        style="width:<?php echo round($diff_ord, 2); ?>%"></div>
                                @else
                                    <div class="progrss-bar progress-bar-striped bg-red" style="width:<?php echo round($diff_ord, 2); ?>%">
                                    </div>
                                @endif
                            </div>
                            <div>
                                <div class="text-white-transparent-8 mb-4">
                                    @if ($diff_ord >= 0)
                                    <i class="fa fa-caret-up"></i>@else<i class="fa fa-caret-down"></i>
                                        @endif{{ round($diff_ord, 2) }} % @if ($diff_ord >= 0)
                                            {{ __('keywords.increase') }}
                                        @else
                                            {{ __('keywords.decrease') }}
                                        @endif
                                        <br />
                                        {{ __('keywords.compare to last week') }}
                                </div>
                            </div>
                        </div>
                        <!-- BEGIN card-body -->
                    </div>
                    <!-- END card -->

                    <!-- BEGIN card -->
                    <div class="card mb-3 overflow-hidden fs-13px border-0 bg-gradient-custom-teal"
                        style="min-height: 202px;">
                        <!-- BEGIN card-img-overlay -->
                        <div class="card-img-overlay mb-n4 mr-n4 d-flex" style="bottom: 0; top: auto;">
                            <img src="assets/img/icon/visitor.svg" alt="" class="ml-auto d-block mb-n3"
                                style="max-height: 105px" />
                        </div>
                        <!-- END card-img-overlay -->

                        <!-- BEGIN card-body -->
                        <div class="card-body position-relative">
                            <h5 class="text-white-transparent-8 mb-3 fs-16px">{{ __('keywords.Cancelled Orders') }}</h5>
                            <h3 class="text-white mt-n1">{{ $this_week_can }}</h3>
                            <div class="progress bg-black-transparent-5 mb-2" style="height: 6px">
                                @if ($diff_can >= 0)
                                    <div class="progrss-bar progress-bar-striped bg-white"
                                        style="width:<?php echo round($diff_can, 2); ?>%"></div>
                                @else
                                    <div class="progrss-bar progress-bar-striped bg-red" style="width:<?php echo round($diff_can, 2); ?>%">
                                    </div>
                                @endif
                            </div>
                            <div>
                                <div class="text-white-transparent-8 mb-4">
                                    @if ($diff_can >= 0)
                                    <i class="fa fa-caret-up"></i>@else<i class="fa fa-caret-down"></i>
                                        @endif{{ round($diff_can, 2) }} % @if ($diff_can >= 0)
                                            {{ __('keywords.increase') }}
                                        @else
                                            {{ __('keywords.decrease') }}
                                        @endif
                                        <br />
                                        {{ __('keywords.compare to last week') }}
                                </div>
                            </div>
                        </div>
                        <!-- END card-body -->
                    </div>
                    <!-- END card -->
                </div>
                <!-- END col-6 -->

                <!-- BEGIN col-6 -->
                <div class="col-sm-6">
                    <!-- BEGIN card -->
                    <div class="card mb-3 overflow-hidden fs-13px border-0 bg-gradient-custom-pink"
                        style="min-height: 202px;">
                        <!-- BEGIN card-img-overlay -->
                        <div class="card-img-overlay mb-n4 mr-n4 d-flex" style="bottom: 0; top: auto;">
                            <img src="assets/img/icon/email.svg" alt="" class="ml-auto d-block mb-n3"
                                style="max-height: 105px" />
                        </div>
                        <!-- END card-img-overlay -->

                        <!-- BEGIN card-body -->
                        <div class="card-body position-relative">
                            <h5 class="text-white-transparent-8 mb-3 fs-16px">{{ __('keywords.Pending Orders') }}</h5>
                            <h3 class="text-white mt-n1">{{ $this_week_pen }}</h3>
                            <div class="progress bg-black-transparent-5 mb-2" style="height: 6px">
                                @if ($diff_pen >= 0)
                                    <div class="progrss-bar progress-bar-striped bg-white"
                                        style="width:<?php echo round($diff_pen, 2); ?>%"></div>
                                @else
                                    <div class="progrss-bar progress-bar-striped bg-red"
                                        style="width:<?php echo round($diff_pen, 2); ?>%"></div>
                                @endif
                            </div>

                            <div>
                                <div class="text-white-transparent-8 mb-4">
                                    @if ($diff_pen >= 0)
                                    <i class="fa fa-caret-up"></i>@else<i class="fa fa-caret-down"></i>
                                        @endif{{ round($diff_pen, 2) }} % @if ($diff_pen >= 0)
                                            {{ __('keywords.increase') }}
                                        @else
                                            {{ __('keywords.decrease') }}
                                        @endif
                                        <br />
                                        {{ __('keywords.compare to last week') }}
                                </div>
                            </div>
                        </div>
                        <!-- END card-body -->
                    </div>
                    <!-- END card -->

                    <!-- BEGIN card -->
                    <div class="card mb-3 overflow-hidden fs-13px border-0 bg-gradient-custom-indigo"
                        style="min-height: 202px;">
                        <!-- BEGIN card-img-overlay -->
                        <div class="card-img-overlay mb-n4 mr-n4 d-flex" style="bottom: 0; top: auto;">
                            <img src="assets/img/icon/browser.svg" alt="" class="ml-auto d-block mb-n3"
                                style="max-height: 105px" />
                        </div>
                        <!-- end card-img-overlay -->

                        <!-- BEGIN card-body -->
                        <div class="card-body position-relative">
                            <h5 class="text-white-transparent-8 mb-3 fs-16px">{{ __('keywords.This Week') }}
                                {{ __('keywords.App Users') }}</h5>
                            <h3 class="text-white mt-n1">{{ $this_week_usr }}</h3>
                            <div class="progress bg-black-transparent-5 mb-2" style="height: 6px">
                                @if ($diff_usr >= 0)
                                    <div class="progrss-bar progress-bar-striped bg-white"
                                        style="width:<?php echo round($diff_usr, 2); ?>%"></div>
                                @else
                                    <div class="progrss-bar progress-bar-striped bg-red"
                                        style="width:<?php echo round($diff_usr, 2); ?>%"></div>
                                @endif
                            </div>
                            <div>
                                <div class="text-white-transparent-8 mb-4">
                                    @if ($diff_usr >= 0)
                                    <i class="fa fa-caret-up"></i>@else<i class="fa fa-caret-down"></i>
                                        @endif{{ round($diff_usr, 2) }} % @if ($diff_usr >= 0)
                                            {{ __('keywords.increase') }}
                                        @else
                                            {{ __('keywords.decrease') }}
                                        @endif
                                        <br />
                                        {{ __('keywords.compare to last week') }}
                                </div>
                            </div>
                        </div>
                        <!-- END card-body -->
                    </div>
                    <!-- END card -->
                </div>
                <!-- BEGIN col-6 -->
            </div>
            <!-- END row -->
        </div>
        <!-- END col-6 -->



    </div>
    <!-- END row -->
    <!-- BEGIN row -->
    <div class="row">
        <canvas id="myChart"></canvas>

    </div>

    <div class="row">
        <!-- BEGIN col-6 -->
        <div class="col-xl-6">
            <!-- BEGIN card -->
            <div class="card mb-3">
                <!-- BEGIN card-body -->
                <div class="card-body">
                    <div class="d-flex align-items-center mb-4">
                        <div class="flex-grow-1">
                            <h5 class="mb-1">{{ __('keywords.Bestseller') }}</h5>
                            <div class="fs-13px">{{ __('keywords.Top product sales this week') }}</div>
                        </div>

                    </div>
                    @if (count($topselling) > 0)
                        @php $i=1; @endphp
                        @foreach ($topselling as $topsellings)
                            <?php
                            $topselling1 = DB::table('store_orders')
                                ->join('orders', 'store_orders.order_cart_id', '=', 'orders.cart_id')
                                ->select(DB::raw('count(store_orders.varient_id) as count'), DB::raw('SUM(store_orders.qty) as totalqty'), DB::raw('SUM(store_orders.price) as revenue'))
                                ->where('store_orders.varient_id', $topsellings->varient_id)
                                ->whereBetween('orders.delivery_date', [$to, $next_date])
                                ->first(); ?>
                            <!-- product-1 -->
                            <div class="d-flex align-items-center mb-3">
                                <div class="d-flex align-items-center justify-content-center mr-3 width-50 height-50">
                                    <img src="{{ $url_aws . $topsellings->varient_image }}" alt=""
                                        class="mw-100 mh-100" />
                                </div>
                                <div class="flex-grow-1">
                                    <div>
                                        <div class="text-dark font-weight-600">{{ $topsellings->product_name }}</div>
                                        <div class="fs-13px">{{ $topselling1->revenue }}</div>
                                    </div>
                                </div>
                                <div class="pl-3 text-center">
                                    <div class="text-dark font-weight-600">{{ $topsellings->count }}</div>
                                    <div class="fs-13px">{{ __('keywords.sales') }}</div>
                                </div>
                            </div>
                            @php $i++; @endphp
                        @endforeach
                    @else
                        {{-- /* TODO: Check if this can be replaced with a div instead */ --}}
                        <tr>
                            <td>{{ __('keywords.No data found') }}</td>
                        </tr>
                    @endif

                </div>
                <!-- END card-body -->
            </div>
            <!-- END card -->
        </div>
        <!-- END col-6 -->

        <!-- BEGIN col-6 -->
        <div class="col-xl-6">
            <!-- BEGIN card -->
            <div class="card">
                <!-- BEGIN card-body -->
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        <div class="flex-grow-1">
                            <h5 class="mb-1">{{ __('keywords.Orders') }}</h5>
                            <div class="fs-13px">{{ __('keywords.Latest order history') }}</div>
                        </div>

                    </div>

                    <!-- BEGIN table-responsive -->
                    <div class="table-responsive mb-n2">
                        <table class="table table-borderless mb-0">
                            <thead>
                                <tr class="text-dark">
                                    <th class="pl-0">#</th>
                                    <th>{{ __('keywords.Cart_id') }}</th>
                                    <th>User Details</th>
                                    <th class="text-center">{{ __('keywords.Status') }}</th>
                                    <th class="text-right pr-0">Amount</th>
                                    <th class="text-right pr-0">Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($ongoin) > 0)
                                    @php $i=1; @endphp
                                    @foreach ($ongoin as $ongoing)
                                        <tr>
                                            <td class="pl-0">{{ $i }}</td>
                                            <td>
                                                <div class="d-flex align-items-center">

                                                    <div class="ml-3 flex-grow-1">
                                                        <div class="font-weight-600 text-dark">{{ $ongoing->cart_id }}
                                                        </div>
                                                        <div class="fs-13px">{{ $ongoing->delivery_date }}</div>
                                                    </div>

                                                </div>
                                            </td>
                                            <td>
                                                <div class="ml-3 flex-grow-1">
                                                    <div class="font-weight-600 text-dark">{{ $ongoing->name }}</div>
                                                    <div class="fs-13px">{{ $ongoing->user_phone }}</div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                @if ($ongoing->order_status == 'Pending')
                                                    <span class="label bg-warning-transparent-2 text-warning"
                                                        style="min-width: 60px;padding: 5px;border-radius: 11px;">
                                                @endif
                                                @if ($ongoing->order_status == 'Confirmed')
                                                    <span class="label bg-success-transparent-2 text-success"
                                                        style="min-width: 60px;padding: 5px;border-radius: 11px;">
                                                @endif
                                                @if ($ongoing->order_status == 'Completed')
                                                    <span class="label bg-success-transparent-2 text-success"
                                                        style="min-width: 60px;padding: 5px;border-radius: 11px;">
                                                @endif
                                                @if ($ongoing->order_status == 'Cancelled')
                                                    <span class="label text-dark-transparent-5"
                                                        style="min-width: 60px;padding: 5px;border-radius: 11px;">
                                                @endif
                                                @if ($ongoing->order_status == 'Out_For_Delivery')
                                                    <span class="label bg-success-transparent-2 text-success"
                                                        style="min-width: 60px;    padding: 5px;border-radius: 11px;">
                                                @endif
                                                {{ $ongoing->order_status }}</span>
                                            </td>
                                            <td class="text-right pr-0"> {{ $ongoing->total_price }}</td>
                                            <td class="text-right pr-0"><button type="button" class="btn btn-primary"
                                                    data-toggle="modal"
                                                    data-target="#exampleModal1{{ $ongoing->cart_id }}">{{ __('keywords.Details') }}</button>
                                            </td>
                                        </tr>
                                        @php $i++; @endphp
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="6">{{ __('keywords.No data found') }}</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <!-- END table-responsive -->
                </div>
                <!-- END card-body -->
            </div>
            <!-- END card -->
        </div>
        <!-- END col-6 -->
    </div>
    <!-- END row -->
    <!--/////////Order details model//////////-->
    @foreach ($ongoin as $ords)
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
                                        cellspacing="0" width="100%" style="width:100%"
                                        data-background-color="purple">


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
                                                                        alt="">
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
    <style>
        canvas {
            width: 300px !important;
            height: 300px !important;
        }
    </style>

    <div>
        <canvas id="myChart"></canvas>
        <canvas id="barChart"></canvas>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const doughnutChart = document.getElementById('myChart');
        const barChart = document.getElementById('barChart');



        new Chart(doughnutChart, {
            type: 'doughnut',
            data: {
                labels: [
                    'New Orders',
                    'Pending Orders',
                    'Cancelled Orders',
                    'This Week App Users'
                ],
                datasets: [{
                    label: '',
                    data: [{{ $this_week_ord }}, {{ $this_week_pen }}, {{ $this_week_can }},
                        {{ $this_week_usr }}
                    ],
                    backgroundColor: [
                        '#ff784a',
                        '#e15671',
                        '#0aab7b',
                        '#8845f5'
                    ],
                    hoverOffset: 4,

                }],
                options: {
                    responsive: false,
                }

            },
        });
        const labels = ["name"];
        const config = {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'My First Dataset',
                    data: [65, 59, 80, 81, 56, 55, 40],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(255, 205, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(201, 203, 207, 0.2)'
                    ],
                    borderColor: [
                        'rgb(255, 99, 132)',
                        'rgb(255, 159, 64)',
                        'rgb(255, 205, 86)',
                        'rgb(75, 192, 192)',
                        'rgb(54, 162, 235)',
                        'rgb(153, 102, 255)',
                        'rgb(201, 203, 207)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            },
        };
    </script>
@endsection

@section('postload-section')
    {{-- You must include files that have no direct efect on the load of the page and can be loaded meanwhile other tasks can be performed by user --}}
    <script>
        $('#datatableDefault').DataTable({
            dom: "<'row mb-3'<'col-sm-4'l><'col-sm-8 text-right'<'d-flex justify-content-end'fB>>>t<'d-flex align-items-center'<'mr-auto'i><'mb-0'p>>",
            responsive: true,
            lengthMenu: false,
            autoWidth: true,
            select: true,
            scrollX: true,
            processing: true,
            ordering: true,
            paging: false,
            buttons: [{
                    extend: 'print',
                    className: 'btn btn-default fa-print'
                },
                {
                    extend: 'csv',
                    className: 'btn btn-default'
                }
            ]
        });
    </script>
@endsection
