@extends('layouts.master')

@section('sidebar')
    @parent
@endsection


@section('content')
<body style="background-color:rgb(255,255,255)">
<div class="container">
	<div class="row" style="margin-top: 100px">
		<div class="col-md-6" style="color:rgb(5, 70, 99);font-size: 28px;margin-top:20">
			My services
		</div>
	</div>
	<div class="row gray" style="padding-top: 26px">
        <div class="col-md-11">
			The services uploaded by you are shown here, you can check the status of each uploading.
		</div>
	</div>
	<div class="row" style="margin-top:25px">
		<div class="tdunit" >
			<div class="panel panel-default shadow" style="background-color:rgb(228,235,238)">
				<div class="row" style="height:45px">
					<div class="col-md-2" style="color:rgb(5, 70, 99);font-size: 25px;margin-top:4;margin-left:50px">
						Dec.2017
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row" style="margin-top:px">
		<div class="row" style="height:45px">
			<div class="col-md-2" style="color:rgb(5, 70, 99);font-size: 25px;margin-top:4;margin-left:50px">
				12.16
			</div>
			<div class="col-md-2" style="color:rgb(5, 70, 99);font-size: 25px;margin-top:4;margin-left:50px">
				OptisampleTM
			</div>
			<div class="col-md-6 text-right" style="color:rgb(5, 70, 99);font-size: 25px;margin-top:4;margin-left:;">
				Under approval
			</div>
			<div class="col-md-3" style="position:absolute;left:1450;margin-top:15px">
				<img src="assets/icon/down_gray.png" style="height:10px">
			</div>
		</div>
		
	</div>
	<div class="row gray" style="padding-top: 10px">
        <div class="col-md-11" style="margin-left:38px">
			Your service is under approval now, please wait for several days. The status will change to "approved" or "Not approved" after the review.
		</div>
	</div>

	<div class="row" style="margin-top:25px">
		<div class="tdunit" >
			<div class="panel panel-default shadow" style="background-color:rgb(228,235,238)">
				<div class="row" style="height:45px">
					<div class="col-md-2" style="color:rgb(5, 70, 99);font-size: 25px;margin-top:4;margin-left:50px">
						Nov.2017
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row" style="margin-top:px">
		<div class="row" style="height:45px">
			<div class="col-md-2" style="color:rgb(5, 70, 99);font-size: 25px;margin-top:4;margin-left:50px">
				11.29
			</div>
			<div class="col-md-2" style="color:rgb(5, 70, 99);font-size: 25px;margin-top:4;margin-left:50px">
				OptisampleTM
			</div>
			<div class="col-md-6 text-right" style="color:D0021B;font-size: 25px;margin-top:4;margin-left:;">
				Not approved
			</div>
			<div class="col-md-3" style="position:absolute;left:1450;margin-top:15px">
				<img src="assets/icon/down_gray.png" style="height:10px">
			</div>
		</div>
		
	</div>
	<div class="row gray" style="padding-top: 10px">
        <div class="col-md-11" style="margin-left:38px">
			Your service is not approved. Cause: invalid URL.
		</div>
	</div>
	<div class="row" style="margin-top:30px">
		<div class="row" style="height:45px">
			<div class="col-md-2" style="color:rgb(5, 70, 99);font-size: 25px;margin-top:4;margin-left:50px">
				11.10
			</div>
			<a href="http://www.baidu.com" target="_blank" class="col-md-2" style="color:rgb(5, 70, 99);font-size: 25px;margin-top:4;margin-left:50px;border-bottom: 2px solid #054663;">
				OptisampleQP
			</a>
			<div class="col-md-6 text-right" style="color:94D250;font-size: 25px;margin-top:4;margin-left:;">
				Approved
			</div>
			<div class="col-md-3" style="position:absolute;left:1450;margin-top:15px">
				<img src="assets/icon/down_gray.png" style="height:10px">
			</div>
		</div>
		
	</div>
	<div class="row gray" style="padding-top: 10px">
        <div class="col-md-11" style="margin-left:38px">
			Your service is approved. You can click the name to get access the detail page of your service.
		</div>
	</div>
</div>



@endsection
