<!DOCTYPE html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8" />
	<title>{{$logo->name}} CityAdmin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	
	<!-- ================== BEGIN core-css ================== -->
	<link href="{{url('assets/theme_assets/css/app.min.css')}}" rel="stylesheet" />
	<!-- ================== END core-css ================== -->
	
</head>
<body>
	<!-- BEGIN #app -->
	<div id="app" class="app app-full-height app-without-header">
		<!-- BEGIN login -->
		<div class="login">
		    
			<!-- BEGIN login-content -->
			<div class="login-content">
			    <div  align="center">
			    	<img align="center" img style="width:100px;height:auto;" src="{{$url_aws.$logo->icon}}" alt="IMG">
			    	</div><hr>
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
				<form action="{{ route('cityadmin-checklogin') }}" method="POST" name="login_form">
				    {{ csrf_field() }}
					<h1 class="text-center">{{ __('keywords.Sign In')}}</h1>
					<div class="text-muted text-center mb-4">
						{{ __('keywords.CityAdmin Login')}}
					</div>
					<div class="form-group">
						<label>{{ __('keywords.Email Address')}}</label>
						<input data-validate = "Valid email is required: ex@abc.xyz" type="email" class="form-control form-control-lg fs-15px" name="email" placeholder="username@address.com" />
					</div>
					<div class="form-group">
						<div class="d-flex">
							<label>{{ __('keywords.Password')}}</label>
							<a href="{{route('reset_pass')}}" class="ml-auto text-muted">{{ __('keywords.Forgot password?')}}</a>
						</div>
						<input type="password" class="form-control form-control-lg fs-15px" name="password" placeholder="Enter your password" />
						 @include('admin.partials._googletagmanager')
					</div>
					<div class="form-group">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" type="checkbox" value="" id="customCheck1" />
							<label class="custom-control-label fw-500" for="customCheck1">{{ __('keywords.Remember me')}}</label>
						</div>
					</div>
					<button type="submit" class="btn btn-primary btn-lg btn-block fw-500 mb-3">{{ __('keywords.Sign In')}}</button>
				</form>
			</div>
			<!-- END login-content -->
		</div>
		<!-- END login -->
		
		<!-- BEGIN btn-scroll-top -->
		<a href="#" data-click="scroll-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
		<!-- END btn-scroll-top -->
	</div>
	<!-- END #app -->
	
	<!-- ================== BEGIN core-js ================== -->
	<script src="{{url('assets/theme_assets/js/app.min.js')}}"></script>
	<!-- ================== END core-js ================== -->
	
</body>
</html>