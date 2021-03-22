<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
 <div class="container">
    <a class="navbar-brand" href="/">Blog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">      
        <li class="nav-item">
          <a class="nav-link " href="#">Career</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="about" class="btn btn-outline-primary">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="blog" class="btn btn-outline-primary">Create Blog</a>
        </li>
      @if(Session::has('user'))
          <li class="dropdown">
          <a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <strong>  {{Session::get('user')['name']}}</strong>
          </a>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="profile">Profile</a>
            <a class="dropdown-item" href="logout">Logout</a>
          </div>
        </li>
        @else
         <li class="nav-item">
          <a class="nav-link " href="register">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="login">Sign In</a>
        </li>
        @endif
      </ul>
    </div>
    </div>
</nav>