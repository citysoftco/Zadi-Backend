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
                                <h1 class="card-title"><b>{{ __('keywords.Varient') }} {{ __('keywords.List') }}</b></h1>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('storeadd-varient', $id) }}" class="btn btn-primary p-1 ml-auto"
                                    style="width:15%;float:right;padding: 3px 0px 3px 0px;">{{ __('keywords.Add') }}</a>
                            </div>
                        </div>

                    </div>
                    <div class="container"><br>
                        <table id="datatableDefault" class="table text-nowrap w-100 table-striped">
                            <thead class="thead-light">
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>{{ __('keywords.Quantity') }}</th>
                                    <th>{{ __('keywords.Unit') }}</th>
                                    <th>{{ __('keywords.Description') }}</th>
                                    <th class="text-right">{{ __('keywords.Actions') }}/{{ __('keywords.Status') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($product) > 0)
                                    @php $i=1; @endphp
                                    @foreach ($product as $products)
                                        <tr>
                                            <td class="text-center">{{ $i }}</td>
                                            <td>{{ $products->varient_quantity }}</td>
                                            <td> {{ $products->unit }}</td>
                                            <td> {{ $products->description }}</td>
                                            @if ($products->approved == 0)
                                                <td class="td-actions text-right">
                                                    <a href="{{ route('storeedit-varient', $products->varient_id) }}"
                                                        rel="tooltip" class="btn btn-success">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="{{ route('storedelete-varient', $products->varient_id) }}"
                                                        onClick="return confirm('Are you sure you want to permanently remove this Product Varient.')"
                                                        rel="tooltip" class="btn btn-danger">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </td>
                                            @else
                                                <td class="td-actions text-right">
                                                    <p><b style="color:red"> Approved by Admin</b></p>
                                                </td>
                                            @endif
                                        </tr>
                                        @php $i++; @endphp
                                    @endforeach
                                @else
                                    <tr>
                                        <td>{{ __('keywords.No data found') }}</td>
                                        @for ($i = 1; $i < 5; $i++)
                                            <td style="display:none"></td>
                                        @endfor
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
    </div>

@endsection

</div>
