<br/><br/><br/><div class="container-fluid" Style="">
<div class="row">
<div class="col-md-3">


<!--Card-->
<div class="card card-personal" Style="width:auto;height:auto;margin:15%; ">

    <!--Card image-->
   <center> <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(15).jpg" alt="Card image cap" Style="border-radius:50%;height:50%;width:50%;margin-top:5px;"></center>
    <!--/.Card image-->

    <!--Card content-->
    <div class="card-block">
        <!--Title-->
        <a><h4 class="card-title title-one"><center><?php echo $_SESSION['username'] ?> </center></h4></a><hr>

		<center><a>Wall</a><br/><hr style="background-color:blue; margin-left:80px; margin-right:80px; margin-bottom:10px; margin-top:10px;">
		<a>Notes</a><br/><hr style="background-color:blue; margin-left:70px; margin-right:70px; margin-bottom:10px; margin-top:10px">
		<a>Settings</a><br/><hr style="background-color:blue; margin-left:60px; margin-right:60px; margin-bottom:10px; margin-top:10px">
		<a>Timetable</a><br/><hr style="background-color:blue; margin-left:50px; margin-right:50px; margin-bottom:10px; margin-top:10px">
		<a  data-toggle="modal" data-target="#basicExample" >Make announcement</a>
		
		
		
		</center>

        <hr>
        <a class="card-meta " Style="color:red"><span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fa fa-user"></i> &nbsp Faculty</span></a>
    </div>
    <!--/.Card content-->

</div>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="basicExample" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title w-100" id="myModalLabel">Add Announcement</h4>
            </div>
            <!--Body-->
            <div class="modal-body">
                
				
        <form method="post" action="index.php?page=front_page">
          <div class="container">

            <div class="input-field">
              <input placeholder="Enter the title" id="title" type="text" name = 'subject' class="validate">
              <label for="title">Subject</label>
            </div><br><br>

            <div class="input-field">
              <input id="Links" type="text" name="links" class="validate">
              <label for="Links">Links</label>
            </div><br><br>

            <div class="input-field">
               <input type="checkbox" id="first" name="first" />
                 <label for="first">First Year</label>
               </div>


           <div class="input-field ">
               <input type="checkbox" id="second"  name="second" />
                 <label for="second">Second Year</label>
          </div>

           <div class="input-field">
               <input type="checkbox" id="third" name="third" />
                 <label for="third">Third Year</label>
          </div>

           <div class="input-field">
               <input type="checkbox" id="fourth" name="fourth" />
                 <label for="fourth">Fourth Year</label>
          </div>
<br><br>
            <div class="input-field">
              <textarea id="description" class="materialize-textarea" name="description" required></textarea>
              <label for="description">Description</label>
            </div><br><br>
				</div>
				</form>
            </div>
            <!--Footer-->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Announce</button>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!-- Modal -->


<!--/.Card-->
</div>
<!---------------- 2 <div> missing intentionally. The notes_element sidebar has 2 extra closing <div> to compensate it--------->
