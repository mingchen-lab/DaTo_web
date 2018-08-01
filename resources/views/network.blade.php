<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>DaTo Statistics</title>
    <link rel='stylesheet prefetch' href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/statistics/network.css">
    <link rel="stylesheet" type="text/css" href="assets/css/dato.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-toggle.min.css">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/d3.min.js"></script>
    <script src="assets/js/vis.js"></script>
    <script src="assets/js/statistics/network_conf.js"></script>
    <script src="assets/js/bootstrap-toggle.min.js"></script>


</head>
<body>
<!-- Fixed navbar -->
<nav class="navbar navbar-fixed-top navbar-bootsnipp animate  navbar-inverse" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="[ navbar-header ]">
            <button type="button" class="[ navbar-toggle ]" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="animbrand">
                <a class="navbar-brand animate " href="#">DaTo</a>
            </div>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="visible-xs">
                    <form action="#" method="GET" role="search">
                        <div class="input-group">
                            <input type="text" class="form-control" name="q" placeholder="Search for snippets">
								<span class="input-group-btn">
									<button class="btn btn-primary" type="submit"><span class="fa fa-search"></span></button>
									<button class="btn btn-danger" type="reset"><span class="fa fa-remove"></span></button>
								</span>
                        </div>
                    </form>
                </li>
                <li><a href="index.html" class="animate ">Home</a></li>
                <li><a class="animate" href="search.html">Search</a></li>
                <li class="active"><a class="animate" href="#">Statistics</a></li>
                <li><a class="animate" href="help.html">Help</a></li>
                <li><a class="animate" href="contact.html">Contact</a></li>

            </ul>
        </div>
    </div>

</nav>

<div class="container" style="margin-top: 60px" id="network_tank">
<div class="row">
    <p>
        <label><input type="checkbox" id="fixed" checked="checked"/> Fix in place after import.</label><br>
        <label><input type="checkbox" id="parseColor"/> Parse the color instead of
            copy (adds borders, highlights etc.)</label>
    </p>

    <div id="mynetwork"></div>
    <div class="nodeContent"><h4>Node Content:</h4>
        <pre id="nodeContent"></pre>

    </div>
    <script type="text/javascript">
        var network;
        console.log($("#network_tank").width())
        var nodes = new vis.DataSet();
        var edges = new vis.DataSet();
        var gephiImported;
        var fixedCheckbox = document.getElementById('fixed');
        fixedCheckbox.onchange = redrawAll;

        var parseColorCheckbox = document.getElementById('parseColor');
        parseColorCheckbox.onchange = redrawAll;

        var nodeContent = document.getElementById('nodeContent');

        loadJSON('assets/data/statistics/world.json', redrawAll, function(err) {console.log(err)});

        var container = document.getElementById('mynetwork');
        var data = {
            nodes: nodes,
            edges: edges
        };
        var options = {
            nodes: {
                shape: 'dot',
                font: {
                    face: 'Tahoma'
                }
            },
            edges: {
                width: 0.15,
                smooth: {
                    type: 'continuous'
                }
            },
            interaction: {
                tooltipDelay: 200,
                hideEdgesOnDrag: true
            },
            physics: {
                stabilization: false,
                barnesHut: {
                    gravitationalConstant: -10000,
                    springConstant: 0.002,
                    springLength: 150
                }
            }
        };

        network = new vis.Network(container, data, options);
        network.on('click', function (params) {
            if (params.nodes.length > 0) {
                var data = nodes.get(params.nodes[0]); // get the data from selected node
                nodeContent.innerHTML = JSON.stringify(data, undefined, 3); // show the data in the div
            }
        })

        /**
         * This function fills the DataSets. These DataSets will update the network.
         */
        function redrawAll(gephiJSON) {
            if (gephiJSON.nodes === undefined) {
                gephiJSON = gephiImported;
            }
            else {
                gephiImported = gephiJSON;
            }

            nodes.clear();
            edges.clear();

            var fixed = fixedCheckbox.checked;
            var parseColor = parseColorCheckbox.checked;

            var parsed = vis.network.gephiParser.parseGephi(gephiJSON, {
                fixed: fixed,
                parseColor: parseColor
            });

            // add the parsed data to the DataSets.
            nodes.add(parsed.nodes);
            edges.add(parsed.edges);

            var data = nodes.get(2); // get the data from node 2 as example
            nodeContent.innerHTML = JSON.stringify(data,undefined,3); // show the data in the div
            network.fit(); // zoom to fit
        }

    </script>

</div>
</div>
<footer class="footer">
    <div class="container">
        <p></p>
        <p> All rights reserved by Ming Chen's Lab, Zhejiang University</p>
    </div>
</footer>


</body>
</html>