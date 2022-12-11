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
             <br>
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">{{ __('keywords.Edit Profile')}}</h4>
                  <p class="card-category">{{ __('keywords.Edit your profile')}}</p>
                </div>
                <div class="card-body">
                  <form action="{{route('updateprof',$admin->id)}}" method="post" enctype="multipart/form-data">
                      {{csrf_field()}}
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">{{ __('keywords.Admin Name')}}</label>
                          <input type="text" name="admin_name" value="{{$admin->name}}" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">{{ __('keywords.Admin Email')}}</label>
                          <input type="text" name="admin_email" value="{{$admin->email}}" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                     <div class="col-md-12">
                        <img src="{{url($admin->admin_image)}}" style="width:100px;height:100px;border-radius:50%;" alt="admin_image" name="old_admin_image"/>
                        
                     </div>
                      <div class="col-md-12">
                        <div class="custom-file">
                          <input type="file" name="admin_image" class="custom-file-input" id="customFile" accept="image/*"/>
                          <label class="custom-file-label" for="customFile">{{ __('keywords.Choose Admin profile')}}</label>
                        </div>
                      </div>
                    </div><br><br>
                    <button type="submit" class="btn btn-primary pull-right">{{ __('keywords.Update Profile')}}</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
			</div>
          </div>

@endsection
          