<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8" />
	<title>{{$logo->name}} CityAdmin</title>
	<link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png">
    @if ($url_aws === "/")
        <link rel="icon" type="image/png" href="{{url($logo->favicon)}}">
    @else
        <link rel="icon" type="image/png" href="{{$url_aws.$logo->favicon}}">
    @endif
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="GoGrocer Multistore" />
    <meta name="author" content="Tecmanic" />
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.2/iconfont/material-icons.min.css" integrity="sha512-y9glprRcVESvYY3suAqBUYXx0ySbQNvbzzgvLy9F2o38Y7XCNeq/No2gnHjV3+Rjyq5ijoPZRMXotpdw6jcG4g==" crossorigin="anonymous" />
    <link href="{{url('assets/theme_assets/css/app.min.css')}}" rel="stylesheet" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    @yield('preload-section')
    
    @livewireStyles
    @powerGridStyles
</head>
<body data-spy='scroll' data-target='#sidebar-bootstrap' data-offset='200'>
    <div id="app" class="app">
    @include('cityadmin.layout.nav')
      @include('cityadmin.layout.sidebar')
     <!-- BEGIN #content -->
		<div id="content" class="app-content">
            @yield('content')
        </div>
        <!--footer-->
         @include('admin.layout.footer')

   	</div>
		<!-- END #content -->

		<!-- BEGIN btn-scroll-top -->
		<a href="#" data-click="scroll-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
		<!-- END btn-scroll-top -->
	<!-- END #app -->

	<!-- ================== BEGIN core-js ================== -->
	<script src="{{url('assets/theme_assets/js/app.min.js')}}"></script>
	<!-- ================== END core-js ================== -->
    <script type="text/javascript">
        var url = "{{ route('changeLang') }}";

        $(".changeLang").change(function(){
            window.location.href = url + "?lang="+ $(this).val();
        });
    </script>

	@yield('postload-section')
	

</body>
</html>