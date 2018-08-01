<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html >
<head>
    <meta charset="UTF-8">
    <title>DaTo | Search</title>
    <link rel='stylesheet prefetch' href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/dato.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-toggle.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/cube.css">

    <link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.min.css">
    <script src="assets/js/jquery-3.1.0.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap-toggle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.dataTables.min.css" />
    <script src="assets/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/urljs/1.2.0/url.min.js"></script>
    <style>
        .loader {
            border: 16px solid #f3f3f3;
            border-radius: 50%;
            border-top: 16px solid rgba(0, 179, 255, 0.92);
            border-bottom: 16px solid rgba(0, 179, 255, 0.92);
            width: 120px;
            height: 120px;
            -webkit-animation: spin 2s linear infinite;
            animation: spin 2s linear infinite;
        }

        @-webkit-keyframes spin {
            0% { -webkit-transform: rotate(0deg); }
            100% { -webkit-transform: rotate(360deg); }
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>

</head>
<body>
<!-- Fixed navbar -->
            <div class='Cube panelLoad hidden' id="cube_animation">
                <div class='cube-face cube-face-front'>^^</div>
                <div class='cube-face cube-face-back'>W</div>
                <div class='cube-face cube-face-left'>A</div>
                <div class='cube-face cube-face-right'>I</div>
                <div class='cube-face cube-face-bottom'>T</div>
                <div class='cube-face cube-face-top'>:)</div>
            </div>

<nav class="navbar navbar-fixed-top navbar-dato animate  navbar-inverse" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="animbrand">
                <a class="navbar-brand animate " href="#">.</a>
            </div>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" >
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.html" class="animate ">Home</a></li>
                <li class="active"><a class="animate" href="search.html">Search</a></li>
                <li><a class="animate" href="statistics.html">Statistics</a></li>
                <li><a class="animate" href="help.html">Help</a></li>
                <li><a class="animate" href="contact.html">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- End mark of the nav bar -->

<!-- Search box container -->
<div class="container" style="margin-top: 60px;">


    <div id="cirloading" class="hidden" align="center">
        <div class="loader"></div>
    </div>
    <div id="table_container" class="hidden">
        <div class="panel panel-default"  >

            <div class="panel-heading">DaTo Search Results</div>

            <div class="panel-body">
                <table id="example" width="100%" border="1" class="table table-striped" >
                    <thead style="background-color: #e1ffff">
                    <tr>
                        <th ><input type="checkbox"  id="check_all" ></th>
                        <th>PMID</th>
                        <th>Name</th>
                        <th>description</th>
                        <th>urlstatus</th>
                        <th>country</th>
                    </tr>
                    </thead>
                    <tbody align="center">
                    </tbody>
                </table>
            </div>
        </div>
        <script >
        

            $(document).ready(function(){



                    var oTable=$("#example").dataTable({
                        retrieve: true,
                        "autoWidth": false,
                        "columns":[
                            { "orderable": false ,"width":"3%"},
                            { "orderable": false ,"width":"6%"},
                            null,
                            null,
                            { "width":"3%"},
                            { "width":"3%"}
                        ],
                        "order": [[ 4, "desc" ]]
                    });
		    var postdata = Url.queryString("para") 
		    console.log(postdata)
                    $.ajax({
                        url:"assets/php/searchfall.php",
                        dataType:'json',
                        useDefaultXhrHeader: false,
                        crossDomain : true,
                        data:{"para":postdata},
                        type:"POST",

                        success:function(s){
// 			    		console.log(s[1]["name"])
                            oTable.fnClearTable();
                            for(var i=0;i<s.length;i++){
                                oTable.fnAddData([
                                    '<input type="checkbox" name="select" value="'+s[i]["pmid"]+'">',
                                    '<a href='+'http://www.ncbi.nlm.nih.gov/pubmed/?term='+s[i]["pmid"] +' target="_blank">'+s[i]["pmid"] +'</a>',
                                    s[i]["name"],
                                    s[i]["description"],
                                    s[i]["urlstatus"],
                                    '<img width="95%"  src="assets/img/flags/4x3/'+s[i]["country"].toLowerCase()+'.svg"></img>'
                                ])
                            }
                        }
                    })
                    $("#cube_animation").addClass("hidden")
                    $("#cirloading").addClass("hidden")
                    $("#table_container").removeClass("hidden")
            })

        </script>
    </div>
    <!-- End mark of Search box -->

</div>




<footer class="footer">
    <div class="container">
        <p></p>
        <p> All rights reserved by Ming Chen's Lab, Zhejiang University </p>
    </div>
</footer>

<script src="assets/js/advsearch.js"></script>
</body>

</html>


