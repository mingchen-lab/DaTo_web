<html>
<head>
	<META HTTP-EQUIV="content-type" CONTENT="text/html; charset=utf-8">
	<title>DaTo</title>
@section('js')
	  <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
	  <!-- ↓ 这就是那个霸气的图标 -->
	  <link rel="stylesheet" type="text/css" href="assets/css/dato.css">  
	  <link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.min.css">
	  <link rel="stylesheet" type="text/css" href="assets/css/statistics/sequences.css">
	  <link rel="stylesheet" type="text/css" href="assets/css/statistics/network.css">
	  <link href="assets/css/fancy.min.css" rel="stylesheet">
	  <link rel="stylesheet" type="text/css" href="assets/css/jquery.dataTables.min.css" />

	  <script src="assets/js/jquery.min.js"></script>
	  <script src="assets/js/jquery.dataTables.min.js"></script>
	  
	  <script src="assets/js/bootstrap.min.js"></script>
	  <script src="assets/js/d3.min.js"></script>
	  <script src="assets/js/vis.js"></script>
	  <script src="assets/js/statistics/sequences.js"></script>
	  <script src="assets/js/highmaps.js"></script>
	  <script src="assets/js/data.js"></script>
	  <script src="assets/js/world.js"></script>

			<link href="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-minimal.css" rel="stylesheet" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js"></script>
	    <script src="assets/js/statistics/network_conf.js"></script>
	  <script src="assets/js/highchart-gray-theme.js"></script>
	  <script src="assets/js/fancy.min.js"></script>
	  
   	  <script type='text/javascript' src="assets/leaflet/leaflet.js"></script>
	  <script type='text/javascript' src="assets/leaflet/plugin/leaflet.markercluster.js"></script>
	  <script src="assets/js/bootstrap-toggle.min.js"></script>
	  <!-- 12.26修改 -->
	  <link rel='stylesheet prefetch' href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.min.css">
	  <link rel="stylesheet" href="assets/css/tmg.css">
	  <!-- yxc部分添加  -->
	  <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script defer src="https://use.fontawesome.com/releases/v5.0.2/js/all.js"></script>


@show
</head>

<body>
@section('sidebar')


<!-- 12.26 修改 -->
<nav class="navbar navbar-default navbar-fixed-top shadow" style="height:75px">

    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a href="index" class="navbar-brand animate" style="margin-top:-10px">
                <img alt="Brand" src="assets/icon/Brand.png" style="height:40px;">
        </a>
		<!-- <a class="navbar-brand" href="#" style="font-size: 28px">D  A  T  O</a> -->
		<!-- <img src="assets/icon/Database.png" class=".img-thumbnail" style="width:10%;height:5%;"> -->

	</div>
	


    <div class="navbar-collapse collapse" id="searchbar">
		<!-- <ul class="nav navbar-nav navbar-left ">
			<img src="assets/icon/Database.png" class=".img-thumbnail" style="width:100%;height:100%;">
		</ul> -->
        <ul class="nav navbar-nav navbar-right ">
			
			<li><a href="#">Trend</a></li>
			<li><a class="animate" href="upload">Upload</a></li>
			<li><a class="animate" href="help">Help</a></li>
			@guest
				<!-- <li><a href="#" data-toggle="modal" data-target="#Login">Login</a></li>
				<li><a href="#" data-toggle="modal" data-target="#Register">Register</a></li> -->
				<li><a href="{{ route('login') }}">Login</a></li>
				<li><a href="{{ route('register') }}">Register</a></li>
			@else
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
							{{ Auth::user()->name }} <span class="caret"></span>
						</a>

						<ul class="dropdown-menu">
							<li>
								<a class="animate" href="favorite"
									onclick="">
									Favorites
								</a>
							</li>

							<li>
								<a class="animate" href="myupload_none"
									onclick="">
									My uploads
								</a>
							</li>

							<li class="divider"></li>

							<li>
								<a href="{{ route('logout') }}"
									onclick="event.preventDefault();
												document.getElementById('logout-form').submit();">
									Logout
								</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									{{ csrf_field() }}
								</form>
							</li>
						</ul>
					</li>
			@endguest
            <!-- <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </li> -->
        </ul>


        <!--<div class="input-group">-->
            <!--<input type="text" class="form-control" aria-label="...">-->

        <!--</div>&lt;!&ndash; /input-group &ndash;&gt;-->
        <form class="navbar-form" action="search">
            <div class="form-group" style="display:inline;">
                <div class="input-group" style="display:table;">
                    <span class="input-group-addon inputaddsear" id="basic-addon1" style="width:1%;"><li class="fa fa-search" style="color:rgb(5, 70, 99)"></li></span>
                    <input class="form-control inputstl" name="search" placeholder="search for databases or tools" autocomplete="off" autofocus="autofocus" type="text" >
                    <span class="input-group-addon inputadd " style="width:1%;color:rgb(5, 70, 99)">
                        ALL
                    </span>
                </div>
            </div>
        </form>

    </div><!--/.nav-collapse -->
</nav>
<!-- 登录模态窗 -->
<!-- <div class="modal fade" id="Login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title text-center" id="myModalLabel">
					Login(样式未设置)
				</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
						<div class="panel-body">
									<form class="form-horizontal" method="POST" action="{{ route('login') }}">
										{{ csrf_field() }}

										<div class="form-group{{ $errors->has('emaiail') ? ' has-error' : '' }}">
											<label for="email" class="col-md-4 control-label">E-Mail Address</label>

											<div class="col-md-6">
												<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

												@if ($errors->has('email'))
													<span class="help-block">
														<strong>{{ $errors->first('email') }}</strong>
													</span>
												@endif
											</div>
										</div>

										<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
											<label for="password" class="col-md-4 control-label">Password</label>

											<div class="col-md-6">
												<input id="password" type="password" class="form-control" name="password" required>

												@if ($errors->has('password'))

													<span class="help-block">
													<div class="alert alert-success">成功！很好地完成了提交。</div>
														<strong>{{ $errors->first('password') }}</strong>
													</span>
													<script>
												@endif
											</div>
										</div>

										<div class="form-group">
											<div class="col-md-6 col-md-offset-4">
												<div class="checkbox">
													<label>
														<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
													</label>
												</div>
											</div>
										</div>

										<div class="form-group">
											<div class="col-md-8 col-md-offset-4">
												<button type="submit" id="login_panel" class="btn btn-primary">
													Login
												</button>

												<a class="btn btn-link" href="#" data-toggle="modal" data-target="#Forget">
													Forgot Your Password?
												</a>
											</div>
										</div>
									</form>
								</div>
						</div>
  				  </div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="Register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title text-center" id="myModalLabel">
					Register(样式未设置)
				</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
					<div class="panel-body">
								<form class="form-horizontal" method="POST" action="{{ route('register') }}">
									{{ csrf_field() }}

									<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
										<label for="name" class="col-md-4 control-label">Name</label>

										<div class="col-md-6">
											<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

											@if ($errors->has('name'))
												<span class="help-block">
													<strong>{{ $errors->first('name') }}</strong>
												</span>
											@endif
										</div>
									</div>

									<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
										<label for="email" class="col-md-4 control-label">E-Mail Address</label>

										<div class="col-md-6">
											<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

											@if ($errors->has('email'))
												<span class="help-block">
													<strong>{{ $errors->first('email') }}</strong>
												</span>
											@endif
										</div>
									</div>

									<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
										<label for="password" class="col-md-4 control-label">Password</label>

										<div class="col-md-6">
											<input id="password" type="password" class="form-control" name="password" required>

											@if ($errors->has('password'))
												<span class="help-block">
													<strong>{{ $errors->first('password') }}</strong>
												</span>
											@endif
										</div>
									</div>

									<div class="form-group">
										<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

										<div class="col-md-6">
											<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
										</div>
									</div>

									<div class="form-group">
										<div class="col-md-6 col-md-offset-4">
											<button type="submit" class="btn btn-primary">
												Register
											</button>
										</div>
									</div>
								</form>
							</div>
					</div>
   			 	</div>
					
			</div>
		</div>
	</div>
</div> -->


@show

@yield('content');
</body>
</html>

