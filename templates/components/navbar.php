 <nav class="navbar navbar-fixed-top navbar-toggleable-sm navbar-inverse bg-primary mb-3"  >
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="flex-row d-flex">
        <a class="navbar-brand mb-1" href="#">Verticalned</a>
        <button type="button" class="hidden-md-up navbar-toggler" data-toggle="offcanvas" title="Toggle responsive left sidebar">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="navbar-collapse collapse" id="collapsingNavbar">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">Home</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=profile">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=notes">Notes</a>
            </li>
			<li class="nav-item">
                <a class="nav-link" href="index.php?page=Calender">Calender</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=logout">Logout</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container-fluid" id="main">
    <div class="row row-offcanvas row-offcanvas-left">
        <div class="col-md-3 col-lg-2 sidebar-offcanvas" id="sidebar" role="navigation">
            <ul class="nav flex-column pl-1">
                <li class="nav-item"><a class="nav-link" href="#">Menu</a></li>
                <li class="nav-item"><a class="nav-link" href="#">One</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Two</a></li>
                <li class="nav-item"><a class="nav-link" href="">Three</a></li>
                <li class="nav-item"><a class="nav-link" href="">Nav item</a></li>
                <li class="nav-item"><a class="nav-link" href="">Another</a></li>
                <li class="nav-item"><a class="nav-link" href="">Nav item</a></li>
                <li class="nav-item"><a class="nav-link" href="">One more</a></li>
            </ul>
        </div>

        