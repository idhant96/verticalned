
<div class="col-md-6 col-sm-12 col-xs-12">
    <?php foreach ($result as $card) { ?>
<!--Author box-->
<div class="author-box z-depth-1" style="margin-bottom:10px;margin-left:15px; width:700px;" >
    <!--Name-->
   <h3 class="h3-responsive text-left z-depth-1" style=" width:100%;margin-bottom:0px; height:50px; color:white; padding-top:15px; padding-left:5px; font-size:15px; background-color:indigo;"><?php echo $card->subject; ?><span class="pull-right" style="padding-right:6px; margin-bottom:0px; font-size:12px;"><?php echo $card->time; ?></span></h3>


    <div class="row">
        <!--Avatar-->
        <div class="col-xs-2 col-sm-2">
            <img src="../material/materialize/img/img.jpg" class="img-fluid rounded-circle z-depth-2" style="margin:8px; padding:10px;">
        </div>
        <!--Author Data-->
        <div class=" col-sm-10 col-xs-10">

            <p class="hidden-md-down" ><?php echo $card->description; ?></p>

			 <p class="pull-left" style="margin-botton:20px;color:red;"><strong> by:</strong > John Doe</p>
        </div>
    </div>
</div>

<?php } ?>
</div>
