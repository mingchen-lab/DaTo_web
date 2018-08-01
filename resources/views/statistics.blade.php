@extends('layouts.master')

@section('sidebar')
    @parent
@endsection


@section('content')
  


  <div class="container" id="sta_container" style="margin-top: 60px">


      <div class="form-group">
          <div class="dropdown" >
              <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Statistics Model
                  <span class="caret"></span></button>
              <ul class="dropdown-menu">
                  <li><a href="#" id="basic_sta">Basic</a></li>
                  <li><a href="#" id="cloud_sta">Cloud for mesh term</a></li>
                  <li><a href="#" id="world_sta">World Distribution</a></li>
                  <li><a href="#" id="top_sta">Top series</a></li>
              </ul>
              <span id="sta_title">Basic Statics</span>
          </div>

<div class="hidden" id="top_cir">
 <div id="bodyyy" >
		  <div id="mainchart">
			  <div id="sequence"></div>
			  <div id="subchart">
				  <div id="explanation" style="visibility: hidden;">
					  <span id="percentage"></span><br/>
					 The percentage of each Contient, Country, State/Province, City
				  </div>
			  </div>
		  </div>
		  <div id="sidebar">
			  <input type="checkbox" id="togglelegend"> Legend<br/>
			  <div id="legend" style="visibility: hidden;"></div>
		  </div>
		  <script type="text/javascript" src="assets/js/statistics/sequences.js"></script>
		  <script type="text/javascript">
			  // Hack to make this example display correctly in an iframe on bl.ocks.org
			  d3.select(self.frameElement).style("height", "700px");
		  </script>
	  </div>
</div>

      <div class="hidden" id="cloud_mesh" style="border: 1px solid lightgray">
	  <div id="cloud_vis"></div>
          <div class="row" align="center">
              <div class="form-line">
              <button id="lastyear" class="btn btn-link">Last</button>
              <label id="markyear">2016</label>
              <button id="nextyear" class="btn btn-link">Next</button>
              </div>
          </div>
	  <input type="hidden" id="text"></input>
		  <script src="assets/js/statistics/cloud.min.js"></script>
	  </div>






	<div id="basic_pie">
        <div id="journal_pie" style="border: 1px solid lightgray" ></div>
        <div id="year_pie" style="border: 1px solid lightgray"></div>
        <div id="country_pie" style="border: 1px solid lightgray"></div>
        <div id="tool_pie" style="border: 1px solid lightgray"></div>

	</div>
      <script src="assets/js/d3pie.min.js"></script>
      <script src="piechart.js"></script>      




	<div class="hidden" id="world_dist">
	  <div id="world_map"></div>
	  <div id="grid" >
		  <script src="mapview.js"></script>
	  </div>
	</div>

  <footer class="footer">
	  <div class="container">
		  <p></p>
		  <p> All rights reserved by Ming Chen's Lab, Zhejiang University</p>
	  </div>
  </footer>







<script >

    var d = new Date();
    var cuYear = d.getFullYear();
    var startyear=1994;
//     console.log(cuYear)

    $("#nextyear").click(function () {
        var thisyear = $("#markyear").html()
        if(parseInt(thisyear)>=cuYear){
           alert("Out of Range!!!")
        }
        else {
            drawYear=parseInt(thisyear)+1;
            console.log(drawYear)
            $("#markyear").html(drawYear)
            mesh_draw(drawYear)
        }


    })

    $("#lastyear").click(function () {
        var thisyear = $("#markyear").html()
        if(parseInt(thisyear)<=startyear){
            alert("Out of Range!!!")
        }
        else {
            drawYear=parseInt(thisyear)-1;
            console.log(drawYear)
            $("#markyear").html(drawYear)
            mesh_draw(drawYear)
        }


    })

	$("#basic_sta").click(function() {
		$("#sta_title").html("Basic Statics")
        if($("#basic_pie").hasClass("hidden")){
            $("#basic_pie").removeClass("hidden")
        }
        else {}
        if($("#top_cir").hasClass("hidden")){

        }
        else {
            $("#top_cir").addClass("hidden")
        }

        if($("#cloud_mesh").hasClass("hidden")){

        }
        else{
            $("#cloud_mesh").addClass("hidden")
        }
        if($("#world_dist").hasClass("hidden")){

        }
        else {
            $("#world_dist").addClass("hidden")
        }
        drawpie()
	})


	$("#cloud_sta").click(function() {
        $("#sta_title").html("Cloud Mesh Statics")
        if($("#basic_pie").hasClass("hidden")){

        }
        else  {
            $("#basic_pie").addClass("hidden")
        }
        if($("#top_cir").hasClass("hidden")){

        }
        else {
            $("#top_cir").addClass("hidden")
        }

        if($("#cloud_mesh").hasClass("hidden")){
            $("#cloud_mesh").removeClass("hidden")
        }
        else{

        }
        if($("#world_dist").hasClass("hidden")){

        }
        else {
            $("#world_dist").addClass("hidden")
        }
	})


	$("#top_sta").click(function(){
        $("#sta_title").html("T-T-T-Top of 6 ")
        if($("#basic_pie").hasClass("hidden")){

        }
        else  {
            $("#basic_pie").addClass("hidden")
        }
        if($("#top_cir").hasClass("hidden")){
            $("#top_cir").removeClass("hidden")
        }
        else {

        }

        if($("#cloud_mesh").hasClass("hidden")){

        }
        else{
            $("#cloud_mesh").addClass("hidden")
        }
        if($("#world_dist").hasClass("hidden")){

        }
        else {
            $("#world_dist").addClass("hidden")
        }
	})

    $("#world_sta").click(function(){
        $("#sta_title").html("Change in world map ")
        if($("#basic_pie").hasClass("hidden")){

        }
        else  {
            $("#basic_pie").addClass("hidden")
        }
        if($("#top_cir").hasClass("hidden")){

        }
        else {
            $("#top_cir").addClass("hidden")
        }

        if($("#cloud_mesh").hasClass("hidden")){

        }
        else{
            $("#cloud_mesh").addClass("hidden")
        }
        if($("#world_dist").hasClass("hidden")){
            $("#world_dist").removeClass("hidden")
        }
        else {

        }
    })
</script>
@endsection
