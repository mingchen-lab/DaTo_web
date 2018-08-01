@extends('layouts.master')

@section('sidebar')
    @parent
@endsection


@section('content')
  <div class="row">
      <div class="container">
          <div class="page-header">
          </div>
          <form class="form-horizontal" action=" " method="post"  id="contact_form">
          <fieldset>

<!-- Form Name -->



<!-- Text input-->

            <div class="form-group">
                <label class="col-md-4 control-label">Your Name</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                        <input  name="first_name" placeholder="Your Name" class="form-control"  type="text">
                    </div>
                </div>
            </div>

<!-- Text input-->

            <div class="form-group">
                <label class="col-md-4 control-label">E-Mail</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                    <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
                    </div>
                </div>
            </div>



<!-- Text input-->
 
            <div class="form-group">
                <label class="col-md-4 control-label">Institude</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-university" aria-hidden="true"></i></span>
                        <input name="city" placeholder="Institude" class="form-control"  type="text">
                    </div>
                </div>
            </div>

<!-- Text input-->
       
            <div class="form-group">
                <label class="col-md-4 control-label">PMID</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-file-text-o" aria-hidden="true"></i></span>
                        <input name="phone" placeholder="PMID of your publication" class="form-control" type="text">
                    </div>
                </div>
            </div>






<!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label">Tool or Database name</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-database" aria-hidden="true"></i></span>
                        <input name="website" placeholder="Tool or Database name" class="form-control" type="text">
                    </div>
                </div>
            </div>


<!-- Text area -->
  
            <div class="form-group">
                <label class="col-md-4 control-label">Project Description</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-pencil" aria-hidden="true"></i></i></span>
        	            <textarea class="form-control" name="comment" placeholder="Tool or Database Description"></textarea>
                    </div>
                </div>
            </div>

<!-- Success message -->

<!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-warning" >Send <span class="fa fa-send"></span></button>
                </div>
            </div>
          </fieldset>
          </form>
        </div>
    </div><!-- /.container -->
  </div>



  <hr>
  <footer class="footer">
      <div class="container">
          <p></p>
          <p> All rights reserved by Ming Chen's Lab, Zhejiang University</p>
      </div>
  </footer>


        <script src="assets/js/advsearch.js"></script>
            <!--<script type="text/javascript">-->
            <!--$(function() {-->
                <!--$('a[href="#toggle-search"], .navbar-bootsnipp .bootsnipp-search .input-group-btn > .btn[type="reset"]').on('click', function(event) {-->
                    <!--event.preventDefault();-->
                    <!--$('.navbar-bootsnipp .bootsnipp-search .input-group > input').val('');-->
                    <!--$('.navbar-bootsnipp .bootsnipp-search').toggleClass('open');-->
                    <!--$('a[href="#toggle-search"]').closest('li').toggleClass('active');-->

                    <!--if ($('.navbar-bootsnipp .bootsnipp-search').hasClass('open')) {-->
                        <!--/* I think .focus dosen't like css animations, set timeout to make sure input gets focus */-->
                        <!--setTimeout(function() {-->
                            <!--$('.navbar-bootsnipp .bootsnipp-search .form-control').focus();-->
                        <!--}, 100);-->
                    <!--}-->
                <!--});-->

                <!--$(document).on('keyup', function(event) {-->
                    <!--if (event.which == 27 && $('.navbar-bootsnipp .bootsnipp-search').hasClass('open')) {-->
                        <!--$('a[href="#toggle-search"]').trigger('click');-->
                    <!--}-->
                <!--});-->

                <!--$(window).resize(function() {-->

                    <!--window.location.reload();-->
                    <!--//Add the javascript reload code here-->

                <!--});-->

            <!--});-->
    <!--</script>-->
@endsection
