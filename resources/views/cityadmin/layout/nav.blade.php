<!-- BEGIN #header -->
<div id="header" class="app-header">
    <!-- BEGIN mobile-toggler -->
    <div class="mobile-toggler">
        <button type="button" class="menu-toggler" data-toggle="sidebar-mobile">
            <span class="bar"></span>
            <span class="bar"></span>
        </button>
    </div>
    <!-- END mobile-toggler -->

    <!-- BEGIN brand -->
    <div class="brand">
        <div class="desktop-toggler">
            <button type="button" class="menu-toggler" data-toggle="sidebar-minify">
                <span class="bar"></span>
                <span class="bar"></span>
            </button>
        </div>

        <a href="#" class="brand-logo">
            @if ($url_aws === "/")
                <img src="{{url($logo->icon)}}" alt="" height="20" />
            @else
                <img src="{{$url_aws.$logo->icon}}" alt="" height="20" />
            @endif
        </a>
    </div>
    <!-- END brand -->

    <!-- BEGIN menu -->
    <div class="menu">
        <form class="menu-search" method="POST" name="header_search_form">
        </form>
        <div class="menu-item dropdown">

        </div>
        <div class="menu-item dropdown">
            <a href="#" data-toggle="dropdown" data-display="static" class="menu-link">
                <div class="menu-img online">
                    @if ($url_aws === "/")
                        <img src="{{url($cityadmin->image)}}" alt="" class="mw-100 mh-100 rounded-circle"/>
                    @else
                        <img src="{{$url_aws.'/'.$cityadmin->image}}" alt="" class="mw-100 mh-100 rounded-circle"/>
                    @endif
                </div>
                <div class="menu-text">{{$cityadmin->email}}</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right mr-lg-3">
                <a class="dropdown-item d-flex align-items-center"
                   href="{{route('cityad-logout')}}">{{ __('keywords.Log Out')}} <i
                        class="fa fa-toggle-off fa-fw ml-auto text-gray-400 f-s-16"></i></a>
            </div>
        </div>
    </div>
    <!-- END menu -->
</div>
<!-- END #header -->
