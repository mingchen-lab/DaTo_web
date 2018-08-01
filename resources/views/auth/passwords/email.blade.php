@extends('layouts.master')
@section('js')
	  <link rel='stylesheet prefetch' href="../assets/css/bootstrap.min.css">
	  <link rel="stylesheet" type="text/css" href="../assets/css/dato.css">
	  <link rel="stylesheet" type="text/css" href="../assets/font-awesome/css/font-awesome.min.css">
	  <link rel="stylesheet" type="text/css" href="../assets/css/statistics/sequences.css">
	  <link rel="stylesheet" type="text/css" href="../assets/css/statistics/network.css">
	  <link href="../assets/css/fancy.min.css" rel="stylesheet">
	  <link rel="stylesheet" type="text/css" href="../assets/css/jquery.dataTables.min.css" />
	  
	  <script src="../assets/js/jquery.min.js"></script>
	  <script src="../assets/js/jquery.dataTables.min.js"></script>
	  
	  <script src="../assets/js/bootstrap.min.js"></script>
	  <script src="../assets/js/d3.min.js"></script>
	  <script src="../assets/js/vis.js"></script>
	  <script src="../assets/js/highmaps.js"></script>
	  <script src="../assets/js/data.js"></script>
	  <script src="../assets/js/world.js"></script>
	  
	  <script src="../assets/js/statistics/network_conf.js"></script>
	  <script src="../assets/js/highchart-gray-theme.js"></script>
	  <script src="../assets/js/fancy.min.js"></script>
	  
   	  <script type='text/javascript' src="../assets/leaflet/leaflet.js"></script>
	  <script type='text/javascript' src="../assets/leaflet/plugin/leaflet.markercluster.js"></script>
      <script src="../assets/js/bootstrap-toggle.min.js"></script>
      
       <!-- 12.26修改 -->
	  <link rel='stylesheet prefetch' href="../assets/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="../assets/font-awesome/css/font-awesome.min.css">
	  <link rel="stylesheet" href="../assets/css/tmg.css">
	  <!-- yxc部分添加  -->
	  <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script defer src="https://use.fontawesome.com/releases/v5.0.2/js/all.js"></script>
@endsection
@section('content')
<div class="container"  style="margin-top: 100px;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>

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
    </div>
</div>
@endsection
