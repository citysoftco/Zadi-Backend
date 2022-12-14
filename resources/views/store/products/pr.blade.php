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
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">{{ __('keywords.Update Quantity') }}</h4>
                    </div>
                    <div class="container"> <br>
                        <table id="datatableDefault" class="table text-nowrap w-100 table-striped">
                            <thead class="thead-light">
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>{{ __('keywords.Product') }} {{ __('keywords.Name') }}</th>
                                    <th>Id</th>
                                    <th class="text-center">{{ __('keywords.Current Quantity') }}</th>
                                    <th class="text-center">{{ __('keywords.Add Quantity') }}</th>
                                    <th class="text-right">{{ __('keywords.Actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>

                                @if (count($selected) > 0)
                                    @php $i=1; @endphp
                                    @foreach ($selected as $sel)
                                        <tr>
                                            <td class="text-center">{{ $i }}</td>
                                            <td>
                                                <p>{{ $sel->product_name }}({{ $sel->weight }} {{ $sel->unit }})</p>
                                            </td>
                                            <td><b>{{ $sel->p_id }}</b></td>
                                            <td>{{ $sel->quantity }}</td>
                                            <td>

                                                <form class="forms-sample"
                                                    action="{{ route('quantity_update', $sel->p_id) }}" method="post"
                                                    enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    <div class="col-md-12">
                                                        <div class="col-md-12 d-flex align-items-center gap-2"
                                                            style="float:left">
                                                            <div class="form-group" style="margin-top: 10px">
                                                                <button name="action" value="minus" type="submit"
                                                                    class="btn btn-danger"> <i
                                                                        class="fa fa-minus"></i></button>
                                                            </div>
                                                            <div class="form-group">
                                                                {{-- <label
                                                                    class="bmd-label-floating">{{ __('keywords.Stock') }}</label>
                                                                <input type="number" name="stock" class="form-control"
                                                                    value="0"> --}}
                                                                <label
                                                                    class="bmd-label-floating">{{ __('keywords.Quantity') }}</label>
                                                                <input type="number" name="quantity" class="form-control"
                                                                    value="0">
                                                            </div>
                                                        </div><br>
                                                        <div class="form-group">
                                                            <button name="action" value="plus" type="submit"
                                                                class="btn btn-primary"> <i class="fa fa-plus"></i></button>
                                                        </div>
                                                    </div>
                                                </form>
                    </div>
                    </td>
                    <td class="td-actions text-right">
                        <a href="{{ route('delete_product', $sel->p_id) }}" rel="tooltip" class="btn btn-danger">
                            <i class="material-icons">close</i>
                        </a>
                    </td>
                    </tr>
                    @php $i++; @endphp
                    @endforeach
                @else
                    <tr>
                        <td>{{ __('keywords.No data found') }}</td>
                        @for ($i = 1; $i < 6; $i++)
                            <td style="display:none"></td>
                        @endfor
                    </tr>
                    @endif
                    </tbody>
                    </table><br />
                    <div class="pull-right mb-1" style="float: right;">
                        {{ $selected->render('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

@endsection
