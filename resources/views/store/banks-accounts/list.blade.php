@extends('store.layout.app')
<style>
    .material-icons {
        margin-top: 0px !important;
        margin-bottom: 0px !important;
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

                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="card-title"><b>{{ __('keywords.Bank Accounts List') }} </b>
                                </h5>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('stores.banks-accounts.create', $store->id) }}"
                                    class="btn btn-primary p-1 ml-auto"
                                    style="width:15%;float:right;padding: 3px 0px 3px 0px;">{{ __('keywords.Add') }}</a>
                            </div>
                        </div>
                    </div>

                    <div class="container"><br>
                        <table id="datatableDefault" class="table table-striped text-nowrap w-100">
                            <thead class="thead-light">
                                <tr>
                                    <th>#</th>
                                    <th>{{ __('keywords.Bank Name') }}</th>
                                    <th>{{ __('keywords.Account Name') }}</th>
                                    <th>{{ __('keywords.Account Number') }}</th>
                                    <th>{{ __('keywords.Bank Branch') }}</th>
                                    <th>{{ __('keywords.Account Status') }}</th>
                                    <th>{{ __('keywords.Bank Logo') }}</th>
                                    <th class="text-right">{{ __('keywords.Actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($bankAccounts) > 0)
                                    @php $i=1; @endphp
                                    @foreach ($bankAccounts as $bankAccount)
                                        <tr>
                                            <td class="text-center">{{ $i }}</td>
                                            <td>{{ $bankAccount->bank_name }}</td>
                                            <td>{{ $bankAccount->account_name }}</td>
                                            <td>{{ $bankAccount->account_number }}</td>
                                            <td>{{ $bankAccount->branch_name }}</td>
                                            @if ($bankAccount->account_status == 'on')
                                                <td>
                                                    <p style="color:green">on</p>
                                                </td>
                                            @else
                                                <td>
                                                    <p style="color:red">off</p>
                                                </td>
                                            @endif
                                            <td>
                                                <img style="width:50px;height:50px;border-radius:50%"
                                                    src="{{ asset($bankAccount->bank_logo) }}" alt="">
                                            </td>
                                            {{-- <td> <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#exampleModal1{{ $bankAccount->dboy_id }}">{{ __('keywords.Details') }}</button>
                                            </td> --}}
                                            <td class="td-actions text-right">
                                                <div class="d-flex flex-column gap-1 align-items-start">
                                                    <a href="{{ route('stores.banks-accounts.edit', [$store->id, $bankAccount->id]) }}"
                                                        rel="tooltip" class="btn btn-warning">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <form
                                                        action="{{ route('stores.banks-accounts.destroy', [$store->id, $bankAccount->id]) }}"
                                                        method="post">
                                                        @method('delete')
                                                        @csrf
                                                        <button type="submit" rel="tooltip" class="btn btn-danger">
                                                            <i class="fa fa-trash"></i>
                                                            </a>
                                                    </form>
                                                </div>

                                            </td>
                                        </tr>
                                        @php $i++; @endphp
                                    @endforeach
                                @else
                                    <tr>
                                        <td>{{ __('keywords.No data found') }} </td>
                                        @for ($i = 1; $i < 9; $i++)
                                            <td style="display:none"></td>
                                        @endfor
                                    </tr>
                                @endif
                            </tbody>
                        </table><br />
                        <div class="pull-right mb-1" style="float: right;">
                            {{ $bankAccounts->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
    </div>
    @foreach ($bankAccounts as $cities)
        <div class="modal fade" id="exampleModal1{{ $cities->dboy_id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="container">

                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><b>{{ $cities->boy_name }}
                                    {{ __('keywords.Profile') }}</b> (@if ($cities->status == 1)
                                    <span style="color:green"><b>Online</b></span>
                                @else
                                    <span style="color:red"><b>Offline</b></span>
                                @endif)</h5>
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
                                            <td colspan="3">
                                                <table class="table">
                                                    <tr>
                                                        <td align="center" valign="top" style="width:100%">
                                                            <strong> {{ __('keywords.Current Location') }} : </strong>
                                                            <div class="mapouter">
                                                                <div class="gmap_canvas"><iframe width="400"
                                                                        height="300" id="gmap_canvas"
                                                                        src="https://maps.google.com/maps?q={{ $cities->current_lat }},{{ $cities->current_lng }}&t=&z=19&ie=UTF8&iwloc=&output=embed"
                                                                        frameborder="0" scrolling="no" marginheight="0"
                                                                        marginwidth="0"></iframe><a
                                                                        href="https://123movies-to.org"></a><br>
                                                                    <style>
                                                                        .mapouter {
                                                                            position: relative;
                                                                            text-align: right;
                                                                            height: 300px;
                                                                            width: 400px;
                                                                        }
                                                                    </style><a href="https://www.embedgooglemap.net">build
                                                                        custom google map</a>
                                                                    <style>
                                                                        .gmap_canvas {
                                                                            overflow: hidden;
                                                                            background: none !important;
                                                                            height: 300px;
                                                                            width: 400px;
                                                                        }
                                                                    </style>
                                                                </div>
                                                            </div>
                                                        </td>


                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">
                                                <table class="table">
                                                    <tr>
                                                        <td valign="top" style="width:100%">
                                                            <strong> {{ __('keywords.Driver Name') }} : </strong>
                                                            {{ $cities->boy_name }}
                                                            <br />
                                                            <strong>{{ __('keywords.Contact') }} :
                                                            </strong>{{ $cities->boy_phone }}<br />
                                                            <strong> {{ __('keywords.city') }} :
                                                            </strong>{{ $cities->boy_city }}
                                                            <br />
                                                            <strong> {{ __('keywords.Address') }} :
                                                            </strong>{{ $cities->boy_loc }}
                                                            <br />

                                                        </td>


                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>{{ __('keywords.ID') }}</th>
                                            <th>{{ __('keywords.ID number') }}</th>
                                            <th>{{ __('keywords.ID photo') }}</th>
                                        </tr>
                                        <tr>
                                            <td>{{ $cities->id_name }}</td>
                                            <td>{{ $cities->id_no }}</td>
                                            {{-- <td><a class="btn btn-default" href="{{ $url_aws . $cities->id_photo }}"
                                                    target="_blank">{{ __('keywords.See_ID_Photo') }}</a></td> --}}
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-danger" data-dismiss="modal"
                                aria-hidden="true">{{ __('keywords.Close') }}</button>
                        </div>
                    </div>
                    <!-- end content-->
                </div>
            </div>
            <!--  end card  -->
        </div>
        </div>
    @endforeach
@endsection

</div>
