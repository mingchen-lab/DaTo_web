@extends('layouts.master')

@section('sidebar')
    @parent
@endsection


@section('content')
<body style="background-color:rgb(255,255,255)">
<div class="container">
	<div class="row" style="margin-top: 100px">
		<div class="col-md-6" style="color:rgb(5, 70, 99);font-size: 28px;margin-top:20">
			Upload your database or tool here
		</div>
	</div>
	<div class="row gray" style="padding-top: 26px">
        <div class="col-md-11">
			DATO collects bioinformatics databases and tools from Pubmed regularly. And you can also upload your service manually in this page. It will take several days before your service approved and added to our database. You can check the status in "my upload".
		</div>
	</div>
	<div class="row" style="margin-top:25px">
		<div class="tdunit" >
			<div class="panel panel-default shadow" style="background-color:rgb(228,235,238)">
				<div class="row" style="height:45px">
					<div class="col-md-2" style="color:rgb(5, 70, 99);font-size: 25px;margin-top:4;margin-left:12px">
						Service info
					</div>
				</div>
			</div>
		</div>
	</div>
	<form action="#">
		<div class="row" style="margin-top: px">
			<div class="col-md-2 text-right" style="color:rgb(5, 70, 99);font-size: 20px;margin-top:px">
				Title*
			</div>
			<input class="search-box text gray" type="text" name="#" placeholder="No more than 20 words" style="margin-left:20px;width:800px">
		</div>
		<div class="row" style="margin-top: 15px">
			<div class="col-md-2 text-right" style="color:rgb(5, 70, 99);font-size: 20px;margin-top:px">
				Type*
			</div>
			<select class="search-select" style="margin-left:20px">
                            <option value="Tool">Tool</option>
                            <option value="Database">Database</option>
                            <option value="Tool+Database">Tool+Database</option>
            </select>
		</div>
		<div class="row" style="margin-top: 15px">
			<div class="col-md-2 text-right" style="color:rgb(5, 70, 99);font-size: 20px;margin-top:px">
				URL*
			</div>
			<input class="search-box text gray" type="text" name="#" placeholder="No more than 20 words" style="margin-left:20px;width:800px">
		</div>
		<div class="row" style="margin-top: 15px">
			<div class="col-md-2 text-right" style="color:rgb(5, 70, 99);font-size: 20px;margin-top:px">
				Discription*
			</div>
			<textarea rows="4" class="search-box text gray" type="text" name="#" placeholder="Please introduce your service in 100 words" style="margin-left:20px;height:100px;width:800px"></textarea>
		</div>
		<div class="row" style="margin-top: 15px">
			<div class="col-md-2 text-right" style="color:rgb(5, 70, 99);font-size: 20px;margin-top:px">
				Tags*
			</div>
			<textarea rows="4" class="search-box text gray" type="text" name="#" placeholder="Add 3 tags of your service, and separate each tag by a semicoion" style="margin-left:20px;height:100px;width:800px"></textarea>
		</div>
	</form>
	<div class="row" style="margin-top:40px">
		<div class="tdunit" >
			<div class="panel panel-default shadow" style="background-color:rgb(228,235,238)">
				<div class="row" style="height:45px">
					<div class="col-md-2" style="color:rgb(5, 70, 99);font-size: 25px;margin-top:4;margin-left:12px">
						Credit info
					</div>
				</div>
			</div>
		</div>
	</div>
	<form action="#">
		<div class="row" style="margin-top: px">
			<div class="col-md-2 text-right" style="color:rgb(5, 70, 99);font-size: 20px;margin-top:px">
				Authors*
			</div>
			<input class="search-box text gray" type="text" name="#" placeholder="" style="margin-left:20px;width:800px">
		</div>
		<div class="row" style="margin-top: 15px">
			<div class="col-md-2 text-right" style="color:rgb(5, 70, 99);font-size: 20px;margin-top:px">
				Organization*
			</div>
			<textarea rows="4" class="search-box text gray" type="text" name="#" placeholder="If there is more than on organization,seperate them by a semicoion" style="margin-left:20px;height:100px;width:800px"></textarea>
		</div>
		<div class="row" style="margin-top: 15px">
			<div class="col-md-2 text-right" style="color:rgb(5, 70, 99);font-size: 20px;margin-top:px">
				Publications
			</div>
			<input class="search-box text gray" type="text" name="#" placeholder="" style="margin-left:20px;width:800px">
		</div>
	</form>
	<div class="row">
		<div class="col-md-1" style="margin-top:20px;margin-left:600">
			<input class="pull-right blue-box search-btn text" type="submit" value="Submit">
		</div>
	</div>
</div>



@endsection
