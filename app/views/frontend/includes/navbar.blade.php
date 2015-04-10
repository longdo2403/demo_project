<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <!-- The mobile navbar-toggle button can be safely removed since you do not need it in a non-responsive implementation -->
      <div id="logo">
          <a class="navbar-brand" href="#">
            <img alt="" src="http://www.drama.net/main/img/drama-logo.png">
          </a>
      </div>
    </div>
    <!-- Note that the .navbar-collapse and .collapse classes have been removed from the #navbar -->
    <div id="navbar">
      <ul class="nav navbar-nav">
        <li class="<?= ($track == 'homepage') ? 'active' : '' ?>"><a href="{{route('homepage')}}">DRAMAHD.NET</a></li>
        <li class="<?= ($track == 'on-going') ? 'active' : '' ?>"><a href="{{route('on-going')}}">On Going</a></li>
        <li class="<?= ($track == 'about') ? 'active' : '' ?>"><a href="{{route('about')}}">About</a></li>
        <li class="<?= ($track == 'contact') ? 'active' : '' ?>"><a href="{{route('contact')}}">Contact</a></li>
        <li class="<?= ($track == 'faq') ? 'active' : '' ?>"><a href="{{route('faq')}}">FAQ</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        @if(!Auth::check())
            <li class="<?= ($track == 'register') ? 'active' : '' ?>"><a href="{{route('register')}}"><i class="fa fa-star text-yellow"></i> Sign Up</a></li>
            <li class="<?= ($track == 'login') ? 'active' : '' ?>"><a href="{{route('login')}}"><i class="fa fa-star text-yellow"></i> Login</a></li>
        @else
            <li class="<?= ($track == 'logout') ? 'active' : '' ?>"><a href="{{route('logout')}}"><i class="fa fa-star text-yellow"></i> Logout</a></li>
        @endif
        
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>

<div class="mainHeader" id="separator">
    <div class="overlay">
        <div class="container" id="">
            <div class="row">
            	<!-- 
                <h1 class="text-primary" style="margin-top:80px;">DRAMAHD.NET</h1>
                <h5>Watch Drama Online in HD for Free</h5>
                 -->
            </div>
        </div>
    </div>
</div>