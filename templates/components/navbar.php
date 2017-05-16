<nav class="light-blue lighten-1" role="navigation">
  <div class="nav-wrapper container"><a id="logo-container" href="index.php?page=front_page" class="brand-logo">Verticalned</a>
    <ul class="right hide-on-med-and-down">
        <?php if(is_logged_in()==false){ ?>
      <li><a href="#">About</a></li>
      <li><a href="#">Contact Us</a></li>
      <?php } else { ?>
      <li><a href='index.php?page=notes'>Notes</a></li>
      <li><a href='index.php?page=front_page'>Profile</a></li>
        <li><a href='index.php?page=logout'>Logout!</a></li>
  <?php  } ?>
    </ul>
    <ul id="nav-mobile" class="side-nav">
      <li><a href="#">About</a></li>
      <li><a href="#">Contact Us</a></li>
    </ul>
    <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
  </div>
</nav>
