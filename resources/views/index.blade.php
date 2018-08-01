@extends('layouts.master')

@section('sidebar')
    @parent
@endsection


@section('content')
<body  style="background-color:#F5F5F5">
<div class="container" style="padding-top: 100px">
	
	<div class="col-md-8"  >
		@if(Auth::check())
		<div style="color:rgb(5, 70, 99);font-size: 28px;margin-top:20px; margin-left: 40px;">
					Updates in Your Field of Interest
		</div>
		<div class="row" style="padding-top: 16px">
			<div class="tdunit">
				<div class="panel panel-default shadow">
					<div class="row top-space">
						<div class="col-md-2">
							<i class="far fa-star pull-right" style="font-size: 23px"></i>
						</div>
						<div class="col-md-3">
							<a href="http://www.baidu.com" class="name_view_yxc text" target="_blank">OptisampleTM</a>
						</div>
						<div class="col-md-1">
							<img src="assets/icon/Tool.png" height="23px">
						</div>
						<div class="col-md-5">
							<div class="text health-text pull-right">URL health
								<span class="health health-good">&nbsp</span>
								<span class="health health-good">&nbsp</span>
								<span class="health health-good">&nbsp</span>
								<span class="health health-good">&nbsp</span>
								<span class="health health-good">&nbsp</span>
								<span class="health health-good">&nbsp</span>
								<span class="health health-good">&nbsp</span>
								<span class="health health-good">&nbsp</span>
								<span class="health health-normal">&nbsp</span>
								<span class="health health-normal">&nbsp</span>
							</div>
						</div>
					</div>
					<div class="row top-space">
						<div class="col-md-2"></div>
						<div class="col-md-9 text desc_text">OptisampleTM: Open web-based application to optimize sampling strategies for active surveillance activities at the herd level illustrated using Porcine Respiratory Reproductive Syndrome (PRRS).</div>
					</div>
					<div class="row">
						<div class="col-md-2 top-space"></div>
						<div class="col-md-6 top-space bottom-space text desc_text tag-text"><b>Tags:&nbsp&nbsp&nbsp</b>
							<div class="tag-box text tag-text text-center">github</div>
							<div class="tag-space"></div>
							<div class="tag-box text tag-text text-center">web</div>
							<div class="tag-space"></div>
							<div class="tag-box text tag-text text-center">application</div>
						</div>
						<div class="col-md-3 bottom-space">
							<button class="blue-box details-btn pull-right text health-text">Details</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row" style="padding-top: 16px">
			<div class="tdunit">
				<div class="panel panel-default shadow">
					<div class="row top-space">
						<div class="col-md-2">
							<i class="far fa-star pull-right" style="font-size: 23px"></i>
						</div>
						<div class="col-md-3">
							<a href="http://www.baidu.com" class="name_view_yxc text" target="_blank">OptisampleTM</a>
						</div>
						<div class="col-md-1">
							<img src="assets/icon/Tool.png" height="23px">
						</div>
						<div class="col-md-5">
							<div class="text health-text pull-right">URL health
								<span class="health health-good">&nbsp</span>
								<span class="health health-good">&nbsp</span>
								<span class="health health-good">&nbsp</span>
								<span class="health health-good">&nbsp</span>
								<span class="health health-good">&nbsp</span>
								<span class="health health-good">&nbsp</span>
								<span class="health health-good">&nbsp</span>
								<span class="health health-good">&nbsp</span>
								<span class="health health-normal">&nbsp</span>
								<span class="health health-normal">&nbsp</span>
							</div>
						</div>
					</div>
					<div class="row top-space">
						<div class="col-md-2"></div>
						<div class="col-md-9 text desc_text">OptisampleTM: Open web-based application to optimize sampling strategies for active surveillance activities at the herd level illustrated using Porcine Respiratory Reproductive Syndrome (PRRS).</div>
					</div>
					<div class="row">
						<div class="col-md-2 top-space"></div>
						<div class="col-md-6 top-space bottom-space text desc_text tag-text"><b>Tags:&nbsp&nbsp&nbsp</b>
							<div class="tag-box text tag-text text-center">github</div>
							<div class="tag-space"></div>
							<div class="tag-box text tag-text text-center">web</div>
							<div class="tag-space"></div>
							<div class="tag-box text tag-text text-center">application</div>
						</div>
						<div class="col-md-3 bottom-space">
							<button class="blue-box details-btn pull-right text health-text">Details</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		@endif
		<div style="color:rgb(5, 70, 99);font-size: 28px;margin-top:30px;margin-left: 40px;">
			10 Latest Pulished
		</div>
			@foreach($Drecords as $record)
				<div class="row" style="padding-top: 5px">
					<div class="tdunit">
						<div class="panel panel-default shadow">
							<div class="row top-space">
								<div class="col-md-2">
									<i class="far fa-star pull-right" style="font-size: 23px"></i>
								</div>
								<div class="col-md-3">
									<a href="http://www.baidu.com" class="name_view_yxc text" target="_blank">{{ $record->name }}</a>
								</div>
								{{--<div class="col-md-1">--}}
								{{--<img src="assets/icon/Tool.png" height="23px">--}}
								{{--</div>--}}
								@if( $record->type == 2)
									<div class="col-md-1">
										<img src="assets/icon/Tool.png" height="23px">
									</div>
								@else
									<div class="col-md-1">
										<img src="assets/icon/Database.png" height="23px">
									</div>
								@endif
								<div class="col-md-5">
									<div class="text health-text pull-right">URL health
										@for ($j=0;$j<$record->url_health;$j++)
											<span class="health health-good">&nbsp</span>
										@endfor
										@for ($i=$record->url_health+1;$i<=10;$i++)
											<span class="health health-normal">&nbsp</span>
										@endfor
									</div>
								</div>
							</div>
							<div class="row top-space">
								<div class="col-md-2"></div>
								<div class="col-md-9 text desc_text">{{ $record->description }}</div>
							</div>
							<div class="row">
								<div class="col-md-2 top-space"></div>
								<div class="col-md-6 top-space bottom-space text desc_text tag-text"><b>Tags:&nbsp&nbsp&nbsp</b>
									@foreach(array_slice(explode(";",$record->keyword),0,3) as $key)
										<div class="tag-box text tag-text text-center">{{ $key }}</div>
										<div class="tag-space"></div>
									@endforeach
									{{--<div class="tag-box text tag-text text-center">github</div>--}}
									{{--<div class="tag-space"></div>--}}
									{{--<div class="tag-box text tag-text text-center">web</div>--}}
									{{--<div class="tag-space"></div>--}}
									{{--<div class="tag-box text tag-text text-center">application</div>--}}
								</div>
								<div class="col-md-3 bottom-space">
									<a href="detail/{{$record->pmid}}"><button class="blue-box details-btn pull-right text health-text" >Details</button></a>
								</div>
							</div>
						</div>
					</div>
				</div>

			@endforeach
	</div>



	<!-- <div class="col-md-1"  ></div> -->
		
	<div class="col-md-4"  >
		<div class="tdunit" style="margin-top: 75px;">
			<div class="panel panel-default shadow" >
				<div class="row top-space">
					<div style="color:rgb(5, 70, 99);font-size: 23px;margin-left: 30px;">
						Trend This Month
					</div>
					
				</div>
				<hr>
				<div class="row bottom-space">
					{{--<img src="assets/icon/Brand.png" style="height:300px;margin-left: 40px;">--}}
					
				</div>
				{!! Charts::styles() !!}
				<div class="app" style="width:100%;height: 250px">
					<center>
						{!! $chart->html() !!}
					</center>
				</div>
				<!-- End Of Main Application -->
				{!! Charts::scripts() !!}
				{!! $chart->script() !!}
			</div>
		</div>
	</div>
	
</div>



<footer class="footer">
	<div class="container">
		<p></p>

		<p> All rights reserved by Ming Chen's Lab, Zhejiang University</p>
	</div>
</footer>

<div class="modal fade" id="Forget" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title text-center" id="myModalLabel">
					Forget Your Password(样式未设置)
				</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
						<div class="panel-body">
							@if (session('status'))
								<div class="alert alert-success">
									{{ session('status') }}
								</div>
							@endif

							<form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
								{{ csrf_field() }}

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

								<div class="form-group">
									<div class="col-md-6 col-md-offset-4">
										<button type="submit" class="btn btn-primary">
											Send Password Reset Link
										</button>
									</div>
								</div>
							</form>
						</div>
  				  </div>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal -->
</div>
@endsection