<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <title>Material Design Bootstrap</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="../material/materialize/css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="../material/materialize/css/mdb.min.css" rel="stylesheet">

	   <!-- JQuery -->
	   
    <script type="text/javascript" src="../material/materialize/js/jquery-2.2.3.min.js"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="../material/materialize/js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="../material/materialize/js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="../material/materialize/js/mdb.min.js"></script>
	

<style>

</style>

</head>
<body>

<div class="row">
<div class="col-md-2">
<div class="author-box z-depth-1" style="margin-left:40px; margin-top:40px; left:10px; height:500px; position:fixed;">

    <!--Bacground color-->
    <div class="card-up default-color-dark">
    </div>

    <!--Avatar-->
    <center><div class="avatar col-12 col-sm-6"><img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%288%29.jpg" class="rounded-circle img-responsive img-fluid">
    </div></center>

    <div class="card-block">
        <!--Name-->
       <center> <h4 class="card-title">Anna Doe</h4></center>
        <hr>
        <!--Quotation-->
        <center><a>Wall</a><br/><hr style="background-color:blue; margin-left:80px; margin-right:80px; margin-bottom:10px; margin-top:10px;">
		<a>Notes</a><br/><hr style="background-color:blue; margin-left:70px; margin-right:70px; margin-bottom:10px; margin-top:10px">
		<a>Timetable</a><br/><hr style="background-color:blue; margin-left:60px; margin-right:60px; margin-bottom:10px; margin-top:10px">
		<a>Settings</a><br/><hr style="background-color:blue; margin-left:50px; margin-right:50px; margin-bottom:10px; margin-top:10px">
		<a>Feedback</a>
		</center>
		
    </div>

</div>
</div>
<div class="container col-md-6" style="margin-top:40px; padding:0px; margin-right:40px; margin-left:40px; left:100px; "> 
<!--Author box-->
<div class="author-box z-depth-1" style="margin-bottom:10px;" >
    <!--Name-->
    <h3 class="h3-responsive text-left" style=" margin-bottom:0px; height:40px; color:white; padding-top:15px; padding-left:5px; font-size:15px; background-color:#bfbfbf;">maa ki chuu<span class="pull-right" style="padding-right:6px; margin-bottom:0px; font-size:12px;">11:50 PM Tuesday, 18 April 2017 (IST)</span></h3>
	
    <hr style="margin-top:0px;">
    <div class="row">
        <!--Avatar-->
        <div class="col-12 col-sm-2">
            <img src="../material/materialize/img/img.jpg" class="img-fluid rounded-circle z-depth-2" style="margin:8px; padding:10px;">
        </div>
        <!--Author Data-->
        <div class=" col-12 col-sm-10">
           
            <div class="personal-sm">
                <a class="email-ic" style="color:brown;"><i class="fa fa-home"> </i></a>
                <a class="fb-ic" style="color: #0033cc;"><i class="fa fa-facebook"> </i></a>
                <a class="tw-ic" style="color:#809fff;"><i class="fa fa-twitter"> </i></a>
                <a class="gplus-ic" style="color:red;"><i class="fa fa-google-plus"> </i></a>
                <a class="li-ic" style="color:#b3c6ff;"><i class="fa fa-linkedin"> </i></a>
                <a class="email-ic" style="color:#77ff33;"><i class="fa fa-envelope-o"> </i></a>
            </div>
           
            <p class="hidden-md-down" >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint esse nulla quia quam veniam commodi dicta, iusto inventore. Voluptatum pariatur eveniet ea, officiis vitae praesentium beatae quas libero, esse facere.
            </p>
			 <p class="pull-left" style="margin-botton:20px;color:red;"><strong> by:</strong > John Doe</p>
        </div>
    </div>
</div>


</div>



<div class="col-md-3">
<!--Card-->
    <div class="author-box z-depth-1" style="height:500px; width:250px; margin-top:40px; margin-left:100px; position:fixed;background-color:#e6e6ff;">

        <div class="pull-right" style="margin:10px" ><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalContactForm"><i class="fa fa-edit" aria-hidden="true">&nbsp Edit events</i></button>
		
		
				
		<!--Modal: Contact form-->
<div class="modal hide fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal" role="document">
        <!--Content-->
        <div class="modal-content">

            <!--Header-->
            <div class="modal-header light-blue darken-3 white-text">
                <button type="button" class="close waves-effect waves-light" style="left:200px;" id="closemodel" data-dismiss="modal"  aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="title"><i class="fa fa-pencil"></i> Add events</h4>
            </div>
            <!--Body-->
            <div class="modal-body mb-0">
                <div class="md-form form-sm">
                   <i class="fa fa-graduation-cap prefix" aria-hidden="true"></i>
                    <input type="text" id="form19" class="form-control">
                    <label for="form19">Event name</label>
                </div>

               
                   
						<fieldset class="form-group">
								<input name="group1" type="radio" id="radio1">
								<label for="radio1">College event</label><br/>
						</fieldset>

							<fieldset class="form-group">
								<input name="group1" type="radio" id="radio2">
								<label for="radio2">Department event</label>
							</fieldset>

						
                

                <div class="md-form form-sm">
                    <i class="fa fa-tag prefix"></i>
                    <input type="text" id="form21" class="form-control">
                    <label for="form21">Link</label>
                </div>

                <div class="md-form form-sm">
                    <i class="fa fa-pencil prefix"></i>
                    <textarea type="text" id="form8" class="md-textarea mb-0"></textarea>
                    <label for="form8">News feed</label>
                </div>

                <div class="text-center mt-1-half">
                    <button class="btn btn-info mb-2">Create <i class="fa fa-send ml-1"></i></button>
                </div>

            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!--Modal: Contact form-->

</div><br/>
		
		
		
		


                                            
                                       
		
		
		
		
		
		
		
		
		
        <!--/.Card image-->

        <!--Card content-->
        <div class="card-block text-center" style="padding-bottom:0px;" >
            <!--Title-->
            <h4 class="card-title" ><strong>Recent Events</strong></h4>
          
            </div>
								<div id="MainMenu" style="height:80px">
					  <div class="list-group panel">
						<a href="#demo3" class="list-group-item" data-toggle="collapse" data-parent="#MainMenu" >College events</a>
						<div class="collapse" id="demo3">
						  <a href="#SubMenu1" class="list-group-item" data-toggle="collapse" data-parent="#SubMenu1">Subitem 1 </a>
						 
						  <a href="#" class="list-group-item">Subitem 2</a>
						  <a href="#" class="list-group-item">Subitem 3</a>
						</div>
						<a href="#demo4" class="list-group-item" data-toggle="collapse" data-parent="#MainMenu">Department events</a>
						<div class="collapse" id="demo4">
						  <a href="" class="list-group-item">Subitem 1</a>
						  <a href="" class="list-group-item">Subitem 2</a>
						  <a href="" class="list-group-item">Subitem 3</a>
						   <a href="" class="list-group-item">Subitem 3</a>
						    <a href="" class="list-group-item">Subitem 3</a>
							 <a href="" class="list-group-item">Subitem 3</a>
						</div>
						
						<div class="latest-blog-posts" style="background-color:white;padding:15px;">

				<h3><i class="fa fa-rss" style="margin-right:15px;"></i>News feed</h3>

				<ul>
					<li ><i class="fa fa-newspaper-o" aria-hidden="true" style="margin:5px;"></i><a href="#" style="font-size:10px;">Lorem ipsum dolor sit amet. </a></li>
					<li><i class="fa fa-newspaper-o" aria-hidden="true" style="margin:5px"></></i><a href="#" style="font-size:10px;">Pellentesque quis eros dignis. </a></li>
					<li><i class="fa fa-newspaper-o" aria-hidden="true" style="margin:5px"></></i><a href="#" style="font-size:10px;">Lorem ipsum dolor sit amet. </a></li>
					<li><i class="fa fa-newspaper-o" aria-hidden="true" style="margin:5px"></></i><a href="#" style="font-size:10px;">Nam tempus turpis viverra, mattis diam ac, malesuada mi. </a></li>
					<li><i class="fa fa-newspaper-o" aria-hidden="true" style="margin:5px"></></i><a href="#" style="font-size:10px;">Lorem ipsum dolor sit amet. </a></li>
					<li><i class="fa fa-newspaper-o" aria-hidden="true" style="margin:5px"></></i><a href="#" style="font-size:10px;">Lorem ipsum dolor sit amet. </a></li>
					<li><i class="fa fa-newspaper-o" aria-hidden="true" style="margin:5px"></></i><a href="#" style="font-size:10px;">Lorem ipsum dolor sit amet. </a></li>
					<li><i class="fa fa-newspaper-o" aria-hidden="true" style="margin:5px"></></i><a href="#" style="font-size:10px;">Lorem ipsum dolor sit amet. </a></li>
				</ul>

			</div>
					  </div>
					</div>
        <!--/.Card content-->

    </div>
    <!--/.Card-->
	</div>
<!--/.Author box-->
</div>

  
</body>
</html>