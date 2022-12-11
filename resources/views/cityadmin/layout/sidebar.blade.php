<div id="sidebar" class="app-sidebar">
			<!-- BEGIN scrollbar -->
			<div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
				<!-- BEGIN menu -->
				<div class="menu">
					<div class="menu-header">{{ __('keywords.Navigation')}}</div>
					<div class="menu-item active">
						<a href="{{route('cityadhome')}}" class="menu-link">
							<span class="menu-icon"><i class="fa fa-laptop"></i></span>
							<span class="menu-text">{{ __('keywords.Dashboard')}}</span>
						</a>
					</div>
							<div class="menu-divider"></div>
					<div class="menu-header">{{ __('keywords.Notification')}} | {{ __('keywords.To user')}} | {{ __('keywords.To vendor')}}</div>
					<div class="menu-item">
						<a href="{{route('cityad-note2user')}}" class="menu-link">
							<span class="menu-icon"><i class="fa fa-bell"></i></span>
							<span class="menu-text">{{ __('keywords.To user')}}</span>
						</a>
					</div>
					
					<div class="menu-item">
						<a href="{{route('cityad-note2vendor')}}" class="menu-link">
							<span class="menu-icon"><i class="fa fa-bell"></i></span>
							<span class="menu-text">{{ __('keywords.To vendor')}}</span>
						</a>
					</div>
				
				
			  
					<div class="menu-divider"></div>
					<div class="menu-header">| {{ __('keywords.Delivery Boy')}} | {{ __('keywords.Area')}}</div>
				
					<div class="menu-item">
						<a href="{{route('cityad-dboylist')}}" class="menu-link">
							<span class="menu-icon"><i class="fa fa-male"></i></span>
							<span class="menu-text">{{ __('keywords.Delivery Boy')}}</span>
						</a>
					</div>
						<div class="menu-item">
						<a href="{{route('cityad-dboylist-commisions')}}" class="menu-link">
							<span class="menu-icon"><i class="fa fa-male"></i></span>
							<span class="menu-text">{{ __('keywords.Delivery Boy Commision')}}</span>
						</a>
					</div>
					
					<div class="menu-item">
						<a href="{{route('cityad-arealist')}}" class="menu-link">
							<span class="menu-icon"><i class="fa fa-map-marker"></i></span>
							<span class="menu-text">{{ __('keywords.Area')}}</span>
						</a>
					</div>
					<div class="menu-divider"></div>
					<div class="menu-header">{{ __('keywords.Vendor')}} | {{ __('keywords.Vendor')}}</div>
					<div class="menu-item">
						<a href="{{route('cityad-storelist')}}" class="menu-link">
							<span class="menu-icon"><i class="fa fa-users"></i></span>
							<span class="menu-text"> {{ __('keywords.Vendor')}}</span>
						</a>
					</div>
					<div class="menu-item">
						<a href="{{route('cityad-orders2day')}}" class="menu-link">
							<span class="menu-icon"><i class="fa fa-bullseye"></i></span>
							<span class="menu-text"> {{ __('keywords.Today')}} | {{ __('keywords.Completed')}}</span>
						</a>
					</div>
				
					
				</div>
				<!-- END menu -->
			</div>
			<!-- END scrollbar -->
			
			<!-- BEGIN mobile-sidebar-backdrop -->
			<button class="app-sidebar-mobile-backdrop" data-dismiss="sidebar-mobile"></button>
			<!-- END mobile-sidebar-backdrop -->
		</div>
		<!-- END #sidebar -->
 
