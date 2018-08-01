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
			It seems that you never upload your service before.
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-1" style="margin-top:20px;margin-left:60;">
			<button class="pull-right blue-box search-btn text " onclick="location='./upload'">Upload Now</button>
		</div>
	</div>
</div>



@endsection
