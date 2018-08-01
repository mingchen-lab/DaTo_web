@extends('layouts.master')

@section('sidebar')
    @parent
@endsection


@section('content')
<body  style="background-color:#F5F5F5">
<div class="container" style="margin-top: 100px">
	
	<div class="row"> 		
		<div class="col-md-8"  >
			<div class="row" style="padding-top: 16px">
				<div class="tdunit">
					<div class="panel panel-default shadow" style="height:70px">
						<div class="row" style=" margin-top: 10px;"> 
							<div class="col-md-1"></div> 
							<div class="col-md-1">
								<i class="fa fa-star" style="font-size: 30px;margin-top:10px;color: rgb(248,231,28);"></i>
							</div>
							
							<div class="col-md-3 text-center" style="color:rgb(5, 70, 99);font-size: 28px;margin-left:0px;margin-top:3">
								Favorites
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row" style="margin-top: 16px">
				<div class="tdunit"  style="margin-top: 0px;">
					<div class="panel panel-default shadow" style="height:50px">
						<div class="row top-space">
							<div class="col-md-1"></div>   
							<div class="col-md-3" style="color: #054663; font-size: 23px;margin-top: -5px;">
								Porcine
							</div>
							<div class="col-md-6"></div>
							<div class="col-md-2">
								<div style="font-size:20;position:absolute;left:60px">8</div>
								<div style="position:absolute;left:75px;margin-top:10px">
									<img src="assets/icon/down_gray.png" style="height:10px">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row" style="margin-top: -21px">
				<div class="tdunit">
					<div class="panel panel-default shadow">
						<div class="row top-space">
							<div class="col-md-2">
								<i class="fa fa-star pull-right" style="font-size: 23px;color: rgb(248,231,28)"></i>
							</div>
							<div class="col-md-3">
								<a href="http://www.baidu.com" class="name_view_yxc text" target="_blank">OptisampleTM</a>
							</div>
							<div class="col-md-1">
								<img src="assets/icon/Tool.png" height="23px">
							</div>
							<div class="col-md-1 btn btn-link btn-sm" style="margin-top:-5" data-toggle="modal" data-target="#Move">
								<img src="assets/icon/right_circle.png" height="23px">
							</div>
							<div class="col-md-4">
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
			<div class="row" style="margin-top: -21px">
				<div class="tdunit">
					<div class="panel panel-default shadow">
						<div class="row top-space">
							<div class="col-md-2">
								<i class="fa fa-star pull-right" style="font-size: 23px;color: rgb(248,231,28)"></i>
							</div>
							<div class="col-md-3">
								<a href="http://www.baidu.com" class="name_view_yxc text" target="_blank">OptisampleTM</a>
							</div>
							<div class="col-md-1">
								<img src="assets/icon/Tool.png" height="23px">
							</div>
							<div class="col-md-1 btn btn-link btn-sm" style="margin-top:-5" data-toggle="modal" data-target="#Move">
								<img src="assets/icon/right_circle.png" height="23px">
							</div>
							<div class="col-md-4">
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
			<div class="row" style="margin-top: -21px">
				<div class="tdunit">
					<div class="panel panel-default shadow">
						<div class="row top-space">
							<div class="col-md-2">
								<i class="fa fa-star pull-right" style="font-size: 23px;color: rgb(248,231,28)"></i>
							</div>
							<div class="col-md-3">
								<a href="http://www.baidu.com" class="name_view_yxc text" target="_blank">OptisampleTM</a>
							</div>
							<div class="col-md-1">
								<img src="assets/icon/Tool.png" height="23px">
							</div>
							<div class="col-md-1 btn btn-link btn-sm" style="margin-top:-5"  data-toggle="modal" data-target="#Move">
								<img src="assets/icon/right_circle.png" height="23px">
							</div>
							<div class="col-md-4">
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
			<div class="row" style="margin-top: -21px">
				<div class="tdunit">
					<div class="panel panel-default shadow">
						<div class="row top-space">
							<div class="col-md-2">
								<i class="fa fa-star pull-right" style="font-size: 23px;color: rgb(248,231,28)"></i>
							</div>
							<div class="col-md-3">
								<a href="http://www.baidu.com" class="name_view_yxc text" target="_blank">OptisampleTM</a>
							</div>
							<div class="col-md-1">
								<img src="assets/icon/Tool.png" height="23px">
							</div>
							<div class="col-md-1 btn btn-link btn-sm" style="margin-top:-5"  data-toggle="modal" data-target="#Move">
								<img src="assets/icon/right_circle.png" height="23px">
							</div>
							<div class="col-md-4">
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
		</div>
		<!-- <div class="col-md-1"  ></div> -->
		<div class="col-md-4" style="margin-top: 140px;">
			<div class="tdunit"  >
				<div class="panel panel-default shadow" style="height:50px;margin-top: -21px">
					<div class="row" style="margin-top: 8px;">
						<div class="col-md-1"></div> 
						<div class="col-md-3" style="color: #054663; font-size: 23px;">
							Porcine
						</div>
						<div class="col-md-4"></div>
						<div class="col-md-2" >
							<div style="font-size:20;position:absolute;left:70px">8</div>
							<div style="position:absolute;left:90px;margin-top:7px">
								<img src="assets/icon/right_gray.png" style="height:15px">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tdunit"  >
				<div class="panel panel-default shadow" style="height:50px;margin-top: -21px">
					<div class="row" style="margin-top: 8px;">
						<div class="col-md-1"></div> 
						<div class="col-md-3" style="color: #054663; font-size: 23px;">
							MicroRNA
						</div>
						<div class="col-md-4"></div>
						<div class="col-md-2" >
							<div style="font-size:20;position:absolute;left:70px">8</div>
							<div style="position:absolute;left:90px;margin-top:7px">
								<img src="assets/icon/right_gray.png" style="height:15px">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tdunit"  >
				<div class="panel panel-default shadow" style="height:50px;margin-top: -21px">
					<div class="row" style="margin-top: 8px;">
						<div class="col-md-1"></div> 
						<div class="col-md-3" style="color: #054663; font-size: 23px;">
							Structure
						</div>
						<div class="col-md-4"></div>
						<div class="col-md-2" >
							<div style="font-size:20;position:absolute;left:70px">8</div>
							<div style="position:absolute;left:90px;margin-top:7px">
								<img src="assets/icon/right_gray.png" style="height:15px">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	

	<div class="row" style="padding-top: 0px">
		<span class="page-box" style="color: #FFFFFF; background-color: #2EA9DF">1</span>
		<span class="page-space"></span>
		<span class="page-box">2</span>
		<span class="page-space"></span>
		<span class="page-box">3</span>
		<span class="page-space"></span>
		<span class="page-box glyphicon glyphicon-chevron-right"></span>
	</div>
	<div class="row" style="padding-top: 80px"></div>

</div>

<footer class="footer">
	<div class="container">
		<p></p>
		<p> All rights reserved by Ming Chen's Lab, Zhejiang University</p>
	</div>
</footer>

<div class="modal fade" id="Move" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog" style="width: 444px;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <span class="glyphicon glyphicon-remove dark-blue" style="font-size: 16px;"></span>
                </button>
                <h4 class="modal-title text-center dark-blue" id="myModalLabel1">
                    Move to
                </h4>
            </div>
            <div class="modal-body">
                <div class="container" style="width: 444px;">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-9">
                            <div class="row">
                                <div class="panel panel-default text-center btn btn-link btn-sm" style="font-size: 22px;width:335px; border: 1px solid #2EA9DF;"data-toggle="modal" data-target="#Add" >
                                    +
                                </div>
                            </div>
                            <div class="row">
                                <span class="text dark-blue" style="font-size: 18px">Porcine</span>
                                <span class="pull-right text gray" style="font-size: 18px">8</span>
                                <hr/>
                            </div>
                            <div class="row">
                                <span class="text dark-blue" style="font-size: 18px">MicroRNA</span>
                                <span class="pull-right text gray" style="font-size: 18px">10</span>
                                <hr/>
                            </div>
                            <div class="row">
                                <span class="text dark-blue" style="font-size: 18px">Structure</span>
                                <span class="pull-right text gray" style="font-size: 18px">14</span>
                                <hr/>
                            </div>
                            <div class="row">
                                <span class="text dark-blue" style="font-size: 18px">Medical</span>
                                <span class="pull-right text gray" style="font-size: 18px">12</span>
                                <hr/>
                            </div>
                            <div class="row">
                                <span class="text dark-blue" style="font-size: 18px">DNA</span>
                                <span class="pull-right text gray" style="font-size: 18px">2</span>
                                <hr/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>
<div class="modal fade" id="Add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
    <div class="modal-dialog" style="width: 444px;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <span class="glyphicon glyphicon-remove dark-blue" style="font-size: 16px;"></span>
                </button>
                <h4 class="modal-title text-center dark-blue" id="myModalLabel2">
                    Add to
                </h4>
            </div>
            <div class="modal-body">
                <div class="container" style="width: 444px;">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-9">
                            <div class="row">
                                <form action="#">
                                    <input class="add-to-box text" type="text" name="#" placeholder="Type the name of your new collection." style="width:350px">
                                    <br/>
                                    <div class="row" style="height: 30px;"></div>
                                    <div class="row">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-5">
                                            <button class="clear-box confirm-btn btn btn-sm">Cancel</button>
										</div>
										<div class="col-md-5">  
                                            <button class="blue-box confirm-btn btn btn-sm" type="submit" >Confirm</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="row">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>
@endsection