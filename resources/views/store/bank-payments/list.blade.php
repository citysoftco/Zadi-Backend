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
                                <a href="{{ route('stores.bank-accounts.create', $store->id) }}"
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
                                    <th>{{ __('keywords.User Name') }}</th>
                                    <th>{{ __('keywords.User Phone') }}</th>
                                    <th>{{ __('keywords.Amount') }}</th>
                                    <th>{{ __('keywords.Payment Status') }}</th>
                                    <th>{{ __('keywords.Payment For') }}</th>
                                    <th>{{ __('keywords.Payment Receipt') }}</th>
                                    <th>{{ __('keywords.Bank Name') }}</th>
                                    <th>{{ __('keywords.Account Name') }}</th>
                                    <th>{{ __('keywords.Account Number') }}</th>
                                    <th>{{ __('keywords.Bank Branch') }}</th>
                                    <th>{{ __('keywords.Cancel Reason') }}</th>
                                    <th class="text-right">{{ __('keywords.Actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($bankPayments != null)
                                    @php $i=1; @endphp
                                    @foreach ($bankPayments as $bankPayment)
                                        <tr>
                                            <td class="text-center">{{ $i }}</td>
                                            <td>{{ $bankPayment->user->name }}</td>
                                            <td>{{ $bankPayment->user->user_phone }}</td>
                                            <td>{{ number_format($bankPayment->amount) }}</td>
                                            @if ($bankPayment->payment_status == 'confirmed')
                                                <td>
                                                    <p style="color:green">{{ __('keywords.Confirmed') }}</p>
                                                </td>
                                            @elseif ($bankPayment->payment_status == 'pending')
                                                <td>
                                                    <p class="text-warning">{{ __('keywords.Pending') }}</p>
                                                </td>
                                            @elseif ($bankPayment->payment_status == 'cancelled')
                                                <td>
                                                    <p style="color:red">{{ __('keywords.Cancelled') }}</p>
                                                </td>
                                            @endif
                                            @if ($bankPayment->payment_for == 'wallet_recharge')
                                                <td>{{ __('keywords.Wallet Recharge') }}</td>
                                                {{-- @elseif ($bankPayment->payment_for == 'wallet_recharge')
                                                <td>{{ __('keywords.Wallet Recharge') }}</td> --}}
                                            @endif

                                            <td>
                                                <img style="width:50px;height:50px;border-radius:50%"
                                                    src="{{ asset($bankPayment->receipt_photo) }}" alt="">
                                            </td>
                                            <td>{{ $bankPayment->bankAccount->bank_name }}</td>
                                            <td>{{ $bankPayment->bankAccount->account_name }}</td>
                                            <td>{{ $bankPayment->bankAccount->account_number }}</td>
                                            <td>{{ $bankPayment->bankAccount->branch_name }}</td>

                                            <td>{{ $bankPayment->cancelled_reason }}</td>
                                            <td class="td-actions text-right">
                                                <div class="d-flex flex-column gap-1 align-items-start">
                                                    {{-- <form
                                                        action="{{ route('stores.bank-payments.update', [$store->id, $bankPayment]) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('put') --}}
                                                    @if ($bankPayment->payment_status == 'cancelled' || $bankPayment->payment_status == 'pending')
                                                        <button data-toggle="modal"
                                                            data-target="#confirmModal{{ $bankPayment->id }}"
                                                            name="action" value="confirm" rel="tooltip"
                                                            class="btn btn-success">
                                                            <i class="fas fa-check-circle"></i>
                                                        </button>
                                                    @endif
                                                    @if ($bankPayment->payment_status == 'confirmed' || $bankPayment->payment_status == 'pending')
                                                        <button data-toggle="modal"
                                                            data-target="#cancelModal{{ $bankPayment->id }}" name="action"
                                                            value="cancel" rel="tooltip" class="btn btn-danger">
                                                            <i class="fas fa-times"></i>
                                                        </button>
                                                    @endif
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
                            {{ $bankPayments->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
    </div>
    @foreach ($bankPayments as $bankPayment)
        <div class="modal fade" id="confirmModal{{ $bankPayment->id }}" tabindex="-1" role="dialog"
            aria-labelledby="confirmModalLabel" aria-hidden="true">
            <div class="container">

                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            {{-- <h5 class="modal-title" id="confirmModalLabel"><b>{{ $bankPayment->boy_name }} --}}
                            {{-- {{ __('keywords.Confirm') }}
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button> --}}
                            {{ __('keywords.Confirm Payment Request') }}
                        </div>
                        <form class="forms-sample"
                            action="{{ route('stores.bank-payments.update', [$store->id, $bankPayment]) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="material-datatables">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">{{ __('keywords.Amount') }}</label>
                                        <input type="number" value="{{ $bankPayment->amount }}" name="amount"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">

                                <button type="submit" name="action" value="confirm"
                                    class="btn btn-success">{{ __('keywords.Confirm') }}</button>


                                <button class="btn btn-danger" data-dismiss="modal"
                                    aria-hidden="true">{{ __('keywords.Close') }}</button>
                            </div>
                        </form>

                    </div>
                    <!-- end content-->
                </div>

            </div>
            <!--  end card  -->
        </div>

        {{-- Cancel Modal --}}
        <div class="modal fade" id="cancelModal{{ $bankPayment->id }}" tabindex="-1" role="dialog"
            aria-labelledby="cancelModalLabel" aria-hidden="true">
            <div class="container">

                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            {{-- <h5 class="modal-title" id="cancelModalLabel"><b>{{ $bankPayment->boy_name }} --}}
                            {{-- {{ __('keywords.Cancel') }}
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button> --}}
                            {{ __('keywords.Cancel Payment Request') }}
                        </div>
                        <form class="forms-sample"
                            action="{{ route('stores.bank-payments.update', [$store->id, $bankPayment]) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="material-datatables">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">{{ __('keywords.Cancel Reason') }}</label>
                                        <textarea placeholder="Cancel Reason" name="cancelled_reason" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">


                                <button type="submit" name="action" value="cancel"
                                    class="btn btn-danger">{{ __('keywords.Cancel Request') }}</button>

                                <button class="btn btn-dark" data-dismiss="modal"
                                    aria-hidden="true">{{ __('keywords.Close') }}</button>
                            </div>
                        </form>

                    </div>
                    <!-- end content-->
                </div>

            </div>
            <!--  end card  -->
        </div>
    @endforeach
@endsection

</div>
