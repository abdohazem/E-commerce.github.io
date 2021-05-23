<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Username</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		
		<ul class="nav menu">
			<li class="active"><a href="{{route('admins.index')}}"><em class="fa fa-dashboard">&nbsp;</em> Admins</a></li>
			<li><a href="{{route('products.create')}}"><em class="fa fa-calendar">&nbsp;</em>Add Product</a></li>
			<li><a href="{{route('categories.create')}}"><em class="fa fa-bar-chart">&nbsp;</em> Add category</a></li>
			
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 1
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 2
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 3
					</a></li>
				</ul>
			</li>
			<li><a 

href="{{ route('logout') }}" 
onclick="event.preventDefault();
document.getElementById('logout-form').submit();"

				><em class="fa fa-power-off">&nbsp;</em> Logout</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

			</li>
		</ul>
	</div>