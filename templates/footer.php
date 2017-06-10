<section id="services" style="background-color: #f2f2f2;">
        <div class="container" >
            <div class="row">
                <div class="col-lg-12 text-center">
                	<br><br>
                    <h2 class="section-heading">Services</h2>
                    <h3 class="section-subheading text-muted">Study hard &amp; Study smart .</h3>
                </div>
            </div>
            <div class="row text-center" Style="padding:40px;">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x" >
                        <i class="fa fa-circle fa-stack-2x " Style="color:#8c8c8c;" ></i>
                        <i class="	fa fa-angle-double-up fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Upload</h4>
                    <p class="text-muted">Share your knowledge.<br/> Single platform to upload and distribute notes.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x " Style="color:#8c8c8c;"></i>
                        <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Announce</h4>
                    <p class="text-muted">Make announcement about upcoming events and information at a go.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x " Style="color:#8c8c8c;"></i>
                        <i class="fa fa-chevron-circle-down fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Notes</h4>
                    <p class="text-muted">Single place for getting all the notes.</p>
                </div>
            </div>
        </div>
</section>
        <!-- /.section -->
<!--Footer-->
<footer class="page-footer center-on-small-only " Style="background-color:#404040;width:100%; margin-top:0px;">

    <!--Footer Links-->
    <div class="container-fluid">
        <div class="row">

            <!--First column-->
            <div class="col-md-3 offset-md-1">
                <h5 class="title">Footer Content</h5>
                <p>Here you can use rows and columns here to organize your footer content.</p>
            </div>
            <!--/.First column-->

            <hr class="hidden-md-up">

            <!--Second column-->
            <div class="col-md-2 offset-md-1">
                <h5 class="title">Links</h5>
                <ul>
                    <li><a href="#!">Link 1</a></li>
                    <li><a href="#!">Link 2</a></li>
                    
                </ul>
            </div>
            <!--/.Second column-->

            <hr class="hidden-md-up">

            <!--Third column-->
            <div class="col-md-2">
                <h5 class="title">Links</h5>
                <ul>
                    <li><a href="#!">Link 1</a></li>
                    <li><a href="#!">Link 2</a></li>
                   
                </ul>
            </div>
            <!--/.Third column-->

            <hr class="hidden-md-up">

            <!--Fourth column-->
            <div class="col-md-2">
                <h5 class="title">Links</h5>
                <ul>
                    <li><a href="#!">Link 1</a></li>
                    <li><a href="#!">Link 2</a></li>
                
                </ul>
            </div>
            <!--/.Fourth column-->

        </div>
    </div>
    <!--/.Footer Links-->

    <hr Style="background-color:white;width:30%;">

    <!--Call to action-->
    <div class="call-to-action">
        <ul>
            <li>
                <h5>Register for free</h5></li>
            <li><a href="" class="btn btn-danger">Sign up!</a></li>
        </ul>
    </div>
    <!--/.Call to action-->

    <hr Style="background-color:white;width:50%;">

    <!--Social buttons-->
    <div class="social-section">
        <ul>
            <li><a class="btn-floating btn-small btn-fb"><i class="fa fa-facebook"> </i></a></li>
            <li><a class="btn-floating btn-small btn-tw"><i class="fa fa-twitter"> </i></a></li>
            <li><a class="btn-floating btn-small btn-gplus"><i class="fa fa-google-plus"> </i></a></li>
            <li><a class="btn-floating btn-small btn-li"><i class="fa fa-linkedin"> </i></a></li>
            <li><a class="btn-floating btn-small btn-git"><i class="fa fa-github"> </i></a></li>
            <li><a class="btn-floating btn-small btn-pin"><i class="fa fa-pinterest"> </i></a></li>
            <li><a class="btn-floating btn-small btn-ins"><i class="fa fa-instagram"> </i></a></li>
        </ul>
    </div>
    <!--/.Social buttons-->

    <!--Copyright-->
    <div class="footer-copyright">
        <div class="container-fluid">
            © 2017 Copyright: <a href="#"> Verticalned.in </a>

        </div>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->


  <!-- JQuery -->
	   
    <script type="text/javascript" src="material/materialize/js/jquery-2.2.3.min.js"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="material/materialize/js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="material/materialize/js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="material/materialize/js/mdb.min.js"></script>
	
	<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery-1.8.2.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/flexslider.js"></script>
<script src="js/carousel.js"></script>
<script src="js/jquery.cslider.js"></script>
<script src="js/slider.js"></script>
<script defer="defer" src="js/custom.js"></script>
<!-- end: Java Script -->
	</body>
<script>
$(document).ready(function(){
  // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
  $('#modal1').modal();
});
function expandAll(){
  $(".collapsible-header").addClass("active");
  $(".collapsible").collapsible({accordion: false});
}

function collapseAll(){
  $(".collapsible-header").removeClass(function(){
    return "active";
  });
  $(".collapsible").collapsible({accordion: true});
  $(".collapsible").collapsible({accordion: false});
}
 </script>
  </body>
</html>
