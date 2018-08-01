@extends('layouts.master')

@section('sidebar')
    @parent
@endsection


@section('content')

<body style="background-color: #f5f5f5">

<div class="container" style="padding-top: 100px">
    <div class="row">
        <div class="keyword-box text keyword-text text-center">sampling</div>
        <div class="keyword-space"></div>
        <div class="keyword-box text keyword-text text-center">blast</div>
        <div class="keyword-space"></div>
        <div class="keyword-box text keyword-text text-center">deep</div>
        <div class="keyword-space"></div>
        <div class="keyword-box text keyword-text text-center">respiratory</div>
        <div class="keyword-space"></div>
        <div class="keyword-box text keyword-text text-center">porcine</div>
        <div class="keyword-space"></div>
        <div class="keyword-box text keyword-text text-center">human</div>
        <div class="keyword-space"></div>
        <div class="keyword-box text keyword-text text-center">ape</div>
        <div class="keyword-space"></div>
        <div class="keyword-box text keyword-text text-center">ranking</div>
        <div class="keyword-space"></div>
        <div class="keyword-box text keyword-text text-center">plant</div>
    </div>

    <div class="row" style="padding-top: 22px">
        <div class="col-md-8 text">
            <div class="row gray">
                <div class="same-line">
                    DATO find 10 results for you
                </div>
                <div class="dropdown same-line">
                    <div t class="btn dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown">Type: All
                        <span class="glyphicon glyphicon-chevron-down angle-down"></span>
                    </div>
                    <ul class="dropdown-menu" style="width: 100px; height: 100px;" role="menu" aria-labelledby="dropdownMenu1">
                        <li class="text-center" role="presentation">
                            <a style="color: #2EA9DF;" role="menuitem" tabindex="-1" href="#">All</a>
                        </li>
                        <li class="text-center" role="presentation">
                            <a style="color: #a9a9a9;" role="menuitem" tabindex="-1" href="#">Database</a>
                        </li>
                        <li class="text-center" role="presentation">
                            <a style="color: #a9a9a9;" role="menuitem" tabindex="-1" href="#">Tool</a>
                        </li>
                    </ul>
                </div>
                <div class="dropdown same-line">
                    <div t class="btn dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown">URL: Good
                        <span class="glyphicon glyphicon-chevron-down angle-down"></span>
                    </div>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu2">
                        <li class="text-center" role="presentation">
                            <a style="color: #2EA9DF;" role="menuitem" tabindex="-1" href="#">Good</a>
                        </li>
                        <li class="text-center" role="presentation">
                            <a style="color: #a9a9a9;" role="menuitem" tabindex="-1" href="#">Bad</a>
                        </li>
                        <li class="text-center" role="presentation">
                            <a style="color: #a9a9a9;" role="menuitem" tabindex="-1" href="#">All</a>
                        </li>
                    </ul>
                </div>
                <div class="dropdown same-line">
                    <div t class="btn dropdown-toggle" id="dropdownMenu3" data-toggle="dropdown">Filter
                        <span class="glyphicon glyphicon-chevron-down angle-down"></span>
                    </div>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu3">
                        <li role="presentation">
                            <div class="same-line" style="width: 15px;"></div>
                            <div class="same-line">
                                <form action="#">
                                    <input class="filter-box" type="text" name="#" value="">
                                    <div class="same-line" style="width: 5px;"></div>
                                    <input class="blue-box go-btn" type="submit" value="Go">
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="same-line pull-right" style="padding-top: 6px">
                    <a href="ad_search" style="color: #a9a9a9; border-bottom: 1px solid #a9a9a9">Advanced</a>
                </div>
            </div>
            <div class="row" style="padding-top: 16px">
                <div class="tdunit">
                    <div class="panel panel-default shadow">
                        <div class="row top-space">
                            <div class="col-md-2">
                                <i class="fas fa-star pull-right" style="font-size: 23px; color: #ffdf00;"></i>
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
        </div>
        <!-- <div class="col-md-1"></div> -->
        <div class="col-md-4" style="padding-top: 6px">
            <div class="panel panel-default shadow">
                <div class="row" style="padding-top: 22px">
                    <div class="col-md-1"></div>
                    <div class="col-md-8 text" style="color: #054663; font-size: 23px;">Top 10 Searches</div>
                </div>
                <hr style="color: #d3d3d3;"/>
                <div class="row">
                    <ul style="list-style-type: none">
                        <li class="text hotword-text">
                            <span class="square" style="background-color: #8b0000">1</span>
                            &nbsp;&nbsp;micro RNA
                        </li>
                        <li class="hotword-space">&nbsp;</li>
                        <li class="text hotword-text">
                            <span class="square" style="background-color: #daa520">2</span>
                            &nbsp;&nbsp;comparative genoics
                        </li>
                        <li class="hotword-space">&nbsp;</li>
                        <li class="text hotword-text">
                            <span class="square" style="background-color: #2ea9df">3</span>
                            &nbsp;&nbsp;epigenomics
                        </li>
                        <li class="hotword-space">&nbsp;</li>
                        <li class="text hotword-text">
                            <span class="square">4</span>
                            &nbsp;&nbsp;medical data
                        </li>
                        <li class="hotword-space">&nbsp;</li>
                        <li class="text hotword-text">
                            <span class="square">5</span>
                            &nbsp;&nbsp;DNA structure
                        </li>
                        <li class="hotword-space">&nbsp;</li>
                        <li class="text hotword-text">
                            <span class="square">6</span>
                            &nbsp;&nbsp;phylogenomic
                        </li>
                        <li class="hotword-space">&nbsp;</li>
                        <li class="text hotword-text">
                            <span class="square">7</span>
                            &nbsp;&nbsp;personal genomics
                        </li>
                        <li class="hotword-space">&nbsp;</li>
                        <li class="text hotword-text">
                            <span class="square">8</span>
                            &nbsp;&nbsp;variant analysis
                        </li>
                        <li class="hotword-space">&nbsp;</li>
                        <li class="text hotword-text">
                            <span class="square">9</span>
                            &nbsp;&nbsp;Inc RNA
                        </li>
                        <li class="hotword-space">&nbsp;</li>
                        <li class="text hotword-text">
                            <span class="square">10</span>
                            &nbsp;&nbsp;SVM
                        </li>
                        <li style="height: 15px;">&nbsp;</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row text gray" style="padding-top: 26px">
        <div class="row">
            <div class="col-md-7">Did not find your databases or tools?</div>
        </div>
        <div class="row">
            <div class="col-md-7">
                <a href="#" style="color: #a9a9a9; border-bottom: 1px solid #a9a9a9">Click here to upload one now!</a>
            </div>
        </div>
    </div>

    <div class="row" style="padding-top: 22px">
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
        <p> All rights reserved by Ming Chen's Lab, Zhejiang University </p>
    </div>
</footer>

</body>

@endsection
