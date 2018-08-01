@extends('layouts.master')

@section('sidebar')
    @parent
@endsection


@section('content')
<body style="background-color: #f5f5f5">

<div class="container" style="padding-top: 100px">

    <div class="panel panel-default shadow" style="background-color: #FFFFFF">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="row" style="padding-top: 32px">
                    <span class="text just-search">Search</span>
                </div>
                <div class="row" style="padding-top: 14px">
                    <div class="panel panel-default" style="background-color: #f5f5f5">
                        <div class="row" style="padding-top: 16px">
                            <div class="col-md-1"></div>
                            <div class="col-md-10 text gray">Create your search use the search builder below.</div>
                        </div>
                        <div class="row" style="padding-top: 52px">&nbsp;</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="row" style="padding-top: 16px">
                    <span class="text just-search">Search Builder</span>
                </div>
                <div class="row" style="padding-top: 16px">
                    <form action="#">
                        <select class="search-select">
                            <option value="title">Title</option>
                            <option value="abstract">Abstract</option>
                            <option value="type">Type</option>
                        </select>
                        <span class="same-line" style="width: 10px"></span>
                        <input class="search-box text gray" type="text" name="#" placeholder="Search Content">
                        <br/>
                        <div style="height: 22px;"></div>
                        <select class="search-select">
                            <option value="title">Title</option>
                            <option value="abstract">Abstract</option>
                            <option value="type">Type</option>
                        </select>
                        <span class="same-line" style="width: 10px"></span>
                        <input class="search-box text gray" type="text" name="#" placeholder="Search Content">
                        <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        <span class="glyphicon glyphicon-plus"></span>
                        <br/>
                        <div style="height: 62px;"></div>
                        <div class="row">
                            <div class="col-md-10">
                                <input class="pull-right blue-box search-btn text" type="submit" value="Search">
                                <span class="pull-right" style="width: 30px;">&nbsp;</span>
                                <button class="pull-right clear-box text">Clear</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row" style="padding-top: 50px">&nbsp;</div>
            </div>
        </div>
    </div>
</div>

</body>
</html>