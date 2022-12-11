@extends('cityadmin.layout.app')

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
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  @endif
                @endif
                </div> 
            <div class="col-md-12">
            
                  <div class="card">
                                    <div class="card-header card-header-primary">
                                      <h4 class="card-title">{{ __('keywords.Driver Incentive')}} ({{$currency->currency_sign}})</h4>
                                      <form class="forms-sample" action="{{route('cityad-dboyadd-commisions')}}" method="post" enctype="multipart/form-data">
                                          {{csrf_field()}}
                                    </div>
                                    <div class="card-body">
                                         <div class="row">
                                           <div class="col-md-12">
                                            <div class="form-group">
                                              <label>{{ __('keywords.Driver Incentive')}} {{ __('keywords.Per Order')}}</label>
                                              <input type="number" name="incentive" @if($incentive) value="{{$incentive->incentive}}" @endif  class="form-control">
                                            </div>
                                          </div>
     
                                        </div><br>
                                        <button type="submit" class="btn btn-primary pull-center">{{ __('keywords.Update')}}</button>
                                        <div class="clearfix"></div>
                                    </div>
                                      </form>
                                  </div>
               
                  <hr>
             
            </div>
			</div>
          </div>

@endsection
