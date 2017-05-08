<div class="col s12 m3 l6">

    <h2 class="header">announcements</h2>
    <?php foreach ($result as $card) { ?>
  <div class="card horizontal">
    <div class="card-image">
      <img src="http://lorempixel.com/100/190/nature/6">
    </div>
    <div class="card-stacked">
      <div class="card-content">
        <blockquote><?php echo $card->description; ?> </blockquote>
      </div>
      <div class="card-action">
        <a href="">This is a link</a>
      </div>
    </div>
  </div>
<?php } ?>
</div>
<div class="col s12 l3 m3">
</div>
