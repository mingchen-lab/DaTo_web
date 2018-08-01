@extends('layouts.master')

@section('sidebar')
    @parent
@endsection


@section('content')
<body  style="background-color:#F5F5F5">
<div class="container">
	<div class="row" style="margin-top: 100px">
		<div class="tdunit">
			<div class="panel panel-default shadow">
				<div class="row" style="height:50px">
					<div class="col-md-1"></div>
					<div class="col-md-2" style="color:rgb(5, 70, 99);font-size: 28px;margin-left:-50px;margin-top:20">
						Favorites
					</div>
				</div>
				<hr>
				<div class="row" style="">
					<div class="col-md-1"></div>
					<div class="col-md-10" style="color:rgb(5, 70, 99);font-size: 16px;margin-left:-50px;margin-top:-5">
						The DaTo, comprised of 21667 bioinformatics tools and databases, is currently the most comprehensive database with high reliability and accuracy. DaTo downloads all pubmed articles which provide a http url in their abstract section. Then, their raw information such as names and description is computationally mined and the information is checked and curated record by record manually. So you can have high confidence on this. DaTo features a user-friendly query interface, providing rich annotation of the records with much details such as the status, the location and the country of the url. A graphical interaction network browser has also been integrated into the DaTo web interface to facilitate mining of the relationship between the tools and databases based on the Mesh term similarity.
					</div>
					
				</div>
				<div> &nbsp</div>
				<div> &nbsp</div>
			</div>
		</div>
	</div>
	<div class="row" style="margin-top: 20px">
		<div class="tdunit">
			<div class="panel panel-default shadow">
				<div class="row" style="height:50px">
					<div class="col-md-1"></div>
					<div class="col-md-2" style="color:rgb(5, 70, 99);font-size: 28px;margin-left:-50px;margin-top:20">
						FAQ
					</div>
				</div>
				<hr>
				<div class="row" style="">
					<div class="col-md-1"></div>
					<div class="col-md-10">
						<div style="color:rgb(5, 70, 99);font-size: 18px;margin-left:-50px;margin-top:;font-weight:bold">
							1. What is URL health? How can it influence my choice?
						</div>
						<div style="color:rgb(5, 70, 99);font-size: 18px;margin-left:-50px;margin-top:0px;">
						URL health is xxxx. When it is shown in green: 进度条.图片, it is stable. However, when it is shown in red:             , it may be hard to link to that URL.
						</div>
						<div style="color:rgb(5, 70, 99);font-size: 18px;margin-left:-50px;margin-top:;font-weight:bold">
							1. What is URL health? How can it influence my choice?
						</div>
						<div style="color:rgb(5, 70, 99);font-size: 18px;margin-left:-50px;margin-top:0px;">
						URL health is xxxx. When it is shown in green: 进度条.图片, it is stable. However, when it is shown in red:             , it may be hard to link to that URL.
						</div>
						<div style="color:rgb(5, 70, 99);font-size: 18px;margin-left:-50px;margin-top:;font-weight:bold">
							1. What is URL health? How can it influence my choice?
						</div>
						<div style="color:rgb(5, 70, 99);font-size: 18px;margin-left:-50px;margin-top:0px;">
						URL health is xxxx. When it is shown in green: 进度条.图片, it is stable. However, when it is shown in red:             , it may be hard to link to that URL.
						</div>
					</div> 
				</div>
				<div> &nbsp</div>
				<div> &nbsp</div>
			</div>
		</div>
	</div>
</div>
@endsection
