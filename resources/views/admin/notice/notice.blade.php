@extends('admin.layout.app')

@section ('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        @if(is_array(session()->get('success')))
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
                    @if($errors->any())
                        <div class="alert alert-danger" role="alert">
                            {{$errors->first()}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                    @endif
                @endif
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">{{ __('keywords.App Notice')}}</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <form name="add-notice-form" id="add-notice-form" method="post" action="{{url('app_notice/update')}}">
                                        @csrf
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>{{ __('keywords.Message') }}</label>
                                                <input type="text" class="form-control" name="notice" id="notice" value="{{ $notice->notice }}" placeholder="Message to show on the mobile app here" />
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" name="status" id="status" @if($notice->status == 1) checked @endif>
                                                <label class="form-check-label" for="exampleCheck1">Enabled</label>
                                            </div>
                                            <br>
                                            <button type="submit" class="btn btn-primary pull-center">{{ __('keywords.Save')}}</button>
                                            <div class="clearfix"></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
