<div class="col s12 m3 l6">

    <h2 class="header">Announcements</h2>
    <?php foreach ($result as $card) { ?>
  <div class="card horizontal hoverable">
    <div class="card-image">
      <img src="http://lorempixel.com/100/190/nature/6">
    </div>
    <div class="card-stacked">
      <div class="card-content">
        <div class="row">
          <div class="col s4 m4 l4">
            <p class="left-align"><?php echo $card->subject; ?> </p>
          </div>
          <div class="col s4 m4 l4">
          </div>
          <div class="col s4 m4 l4">
            <p class="right-align"><?php echo $card->time; ?> </p>
          </div>
        </div>
        <div class="divider"></div>
        <blockquote><?php echo $card->description; ?> </blockquote>
      </div>
      <div class="right-align"><p> -<?php echo $card->staff; ?> </p></div>
      <div class="card-action">
        <a href="">This is a link</a>
      </div>
    </div>
  </div>
<?php } ?>
</div>
<div class="col s12 l3 m3">
</div>
