@extends('layouts.master')

@section('sidebar')
    @parent
@endsection


@section('content')

<body style="background-color: #f5f5f5">

<div class="container" style="padding-top: 100px"> 
    <div class="row">
        <div class="col-md-8">
            <div class="tdunit">
                <div class="panel panel-default shadow">
                    <div class="row" style="padding-top: 25px">
                        <div class="col-md-1"></div>
                        <div class="col-md-3" >
                            <a href="http://www.baidu.com" class="name_view_yxc text" style="font-size: 22px" target="_blank">OptisampleTM</a>
                        </div>
                        <div class="col-md-1"  style="padding-top: 5px">
                            <i class="fa fa-star pull-right" style="font-size: 23px;color: rgb(248,231,28);"></i>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-4" style="padding-top: 5px">
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
                    <div class="row top-space"  style="padding-top: 35px">
                        <div class="col-md-1"></div>
                        <div class="col-md-9 text desc_text">OptisampleTM: Open web-based application to optimize sampling strategies for active surveillance activities at the herd level illustrated using Porcine Respiratory Reproductive Syndrome (PRRS).</div>
                    </div>
                    <div class="row top-space"  style="padding-top: 20px">
                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <a href="http://www.baidu.com" class="name_view_yxc text" style="font-size: 12px" target="_blank">Link to Pubmed page</a>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 20px">
                        <div class="col-md-1 top-space"></div>
                        <div class="col-md-6 top-space bottom-space text desc_text tag-text"><b>Tags:&nbsp&nbsp&nbsp</b>
                            <div class="tag-box text tag-text text-center">github</div>
                            <div class="tag-space"></div>
                            <div class="tag-box text tag-text text-center">web</div>
                            <div class="tag-space"></div>
                            <div class="tag-box text tag-text text-center">application</div>
                        </div>
                    </div>
                    <div class="row" style="padding-top:10px">
                        <div class="col-md-1"></div>
                        <div class="col-md-5">
                            <span style="font-size:13px;font-weight:bold;color:#054663">Classfication:</span>
                            <span style="font-size:13px;font-weight:none;color:#054663;">Information science</span>
                        </div>
                    </div>
                    <div>&nbsp</div>
                </div>
            </div>   
            <div class="tdunit">
                <div class="panel panel-default shadow">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-5" style="padding-top:20">
                            <span style="font-size:23px;font-weight:none;color:#054663;">Publications:</span>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <span style="font-size:13;font-weight:none;color:#054663">OptisampleTM: Open web-based application to optimize sampling strategies for active surveillance activities at the herd level illustrated using Porcine Respiratory Reproductive Syndrome(PRRS). PLoS One. 2017 Jul 18.</span>
                        </div>
                    </div>
                    <div>&nbsp</div>
                </div>
            </div>   
            <div class="tdunit">
                <div class="panel panel-default shadow">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-5" style="padding-top:20px">
                            <span style="font-size:23px;font-weight:none;color:#054663;">Related Services:</span>
                        </div>
                    </div>
                    <hr>
                    <!-- 以下重复循环 -->
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
                    <div>&nbsp</div>
                    <div>&nbsp</div>
                    <!-- 以下重复 -->
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
        <!-- <div class="col-md-1"></div> -->
        <div class="col-md-4">
            <div class="tdunit" style="margin-top: px;">
                <div class="panel panel-default shadow" >
                    <div class="row top-space">
                        <div class="col-md-1"></div>
                        <div class="col-md-10" style="color:rgb(5, 70, 99);font-size: 23px;padding-top:20">
                            Trend This Month
                        </div>
                        
                    </div>
                    <hr>
                    <div class="row bottom-space">
                        <img src="assets/icon/Brand.png" style="height:300px;margin-left: 40px;"> 
                    </div>
                </div>
            </div>
            <div class="tdunit">
                <div class="panel panel-default shadow">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-5" style="padding-top:20">
                            <span style="font-size:23px;font-weight:none;color:#054663;">Organizations</span>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <span style="font-size:13;font-weight:none;color:#054663">1.Department of Veterinary Population Medicine, College of Veterinary Medicine, University of Minnesota, St. Paul, MN, United States of America.</span>
                            <div>&nbsp</div>
                            <span style="font-size:13;font-weight:none;color:#054663">2. Veterinary Diagnostic Laboratory, University of Minnesota, St. Paul, MN, United States of America.</span>
                        </div>
                    </div>
                    <div>&nbsp</div>
                </div>
            </div>  
            <div class="tdunit" style="margin-top: px;">
                <div class="panel panel-default shadow" >
                    <div class="row top-space">
                        <div class="col-md-1"></div>
                        <div class="col-md-10" style="color:rgb(5, 70, 99);font-size: 23px;padding-top:20">
                            Loctation
                        </div> 
                    </div>
                    <hr>
                    {!! Charts::styles() !!}
                    <div class="app" style="width:100%;height: 250px">
                        <center>
                            {!! $chart->html() !!}
                        </center>
                    </div>
                    <!-- End Of Main Application -->
                    {!! Charts::scripts() !!}
                    {!! $chart->script() !!}
                    <div class="row top-space">
                        <div class="col-md-1"></div>
                        <span class="col-md-10" style="font-size:22;font-weight:none;color:#054663"> United stated of America</span>
                    </div>
                </div>
            </div> 
        </div>


    </div>
</div>




<footer class="footer">
    <div class="container">
        <p></p>
        <p> All rights reserved by Ming Chen's Lab, Zhejiang University </p>
    </div>
</footer>

</body>

@endsection
