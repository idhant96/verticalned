
 
    <div class="col-md-9 col-lg-10 main">
            <h1 class="display-2 hidden-xs-down">
            Announcements Section
            </h1>

   <!-- Modal Trigger -->
 <button class = 'modal-trigger' data-target="modal1">Modal</button>

  <!-- Modal Structure -->
 <div id="modal1" class="modal">
    <div class="modal-content">
       <div class="row">
    
    <form class="col s12" method="post" action="index.php?page=profile">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Enter the title" id="title" type="text" name = 'subject' class="validate">
          <label for="title">Subject</label>
        </div>
         <div class="row">
        <div class="input-field col s6">
          <input id="Links" type="text" name="links" class="validate">
          <label for="Links">Links</label>
        </div>
        </div>
         <div class="row">
        <div class="input-field col s6">
           <input type="checkbox" id="first" name="first" />
             <label for="first">First Year</label>
      </div>


       <div class="input-field col s6">
           <input type="checkbox" id="second"  name="second" />
             <label for="second">Second Year</label>
      </div>

       <div class="input-field col s6">
           <input type="checkbox" id="third" name="third" />
             <label for="third">Third Year</label>
      </div>
       <div class="input-field col s6">
           <input type="checkbox" id="fourth" name="fourth" />
             <label for="fourth">Fourth Year</label>
      </div>
      </div>
         <div class="row">

      <div class="row">
        <div class="input-field col s12">
          <textarea id="description" class="materialize-textarea" name="decription"></textarea>
          <label for="description">Description</label>
        </div>
      </div>

  </div>
      </div>
    </form>

    </div>
    <div class="modal-footer">
      <button type = 'submit' class="modal-action modal=close waves-effect waves-green btn-flat">Announce</button>
    </div>
  </div>
  </div>


            <a id="layouts"></a>

            <div class="row mb-3">
                <div class="col-lg-6">
                <?php 
                	foreach ($result as $detail) {
                		?>

						<div class="card" z-default=10 z-hover=30>
                        <div class="card-header">
                            By<?php echo $detail->staff; ?> 
                        </div>
                        <div class="card-block"><h4>Topic goes here......</h4>
                            <p class="card-text"><?php echo $detail->announcements; ?></p>
                            <input type="button" onclick="location.href='<?php $detail->link ?>';" value="Go to Link" />
                        </div>
                    </div>
					  <?php } ?>
                </div>
				</div>
				</div>

                 <!-- Modal Trigger -->
