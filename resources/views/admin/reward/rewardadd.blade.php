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
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  @endif
                @endif
                </div> 
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">{{ __('keywords.Rewards Points')}}</h4>
                  <form class="forms-sample" action="{{route('rewardadd')}}" method="post" enctype="multipart/form-data">
                      {{csrf_field()}}
                </div>
                <div class="card-body">
                  <form>

                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <!--<label class="bmd-label-floating">Valid From</label>-->
                          <p class="card-description">{{ __('keywords.Cart Value')}}</p>
                         
                          <input type="text" name="min_cart_value" value="" class="form-control">
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <!--<label class="bmd-label-floating">Minimum Cart Value</label>-->
                          <p class="card-description">{{ __('keywords.Reward Points')}}</p>
                          <input type="text" name="reward_points" value="" class="form-control">
                        </div>
                      </div>
                    </div>

                    <button type="submit" class="btn btn-primary pull-center">{{ __('keywords.Submit')}}</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
			</div>
          </div>

@endsection
