

<!--Navbar-->
<nav class="navbar navbar-toggleable-md navbar-dark" style="height:70px; width:100%; margin-top:0px;">
    <div class="container">
        
        <a class="navbar-brand" href="#">
            <strong>VerticalNed</strong>
        </a>
        <div class="collapse navbar-collapse" id="navbarNav1" Style="margin-left:82%;">

            <ul class="navbar-nav pull-xs-right" >

                <li class="nav-item">
                    <a class="nav-link">Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">Contact</a>
                </li>
                <?php if(is_logged_in()){ ?>
              <li class="nav-item">
                    <a class="nav-link" href="logout.php" Style="width:100px;">log out</a>
                </li>
                <?php } ?>
            </ul>

        </div>
		
    </div>
	<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
</nav>
