<nav class="navbar navbar-default navbar-main navbar-static-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{url('/')}}">
        Digital India Hack
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="main-nav-collapse">
      <ul class="nav navbar-nav">
        <li class="{{HTML::activeState('backend.challenges.index', array(), true, 'active')}}">
          <a href="{{route('backend.challenges.index')}}">Challenges</a>
        </li>
        <li class="{{HTML::activeState('backend.participants', array(), true, 'active')}}">
          <a href="{{route('backend.participants')}}">Participants</a>
        </li>
      </ul>
      {{Form::open(array('route' => "backend.search", 'method' => "get", 'class' => "navbar-form navbar-left"))}}
      <div class="form-group">
      <input type="text" class="form-control" placeholder="Search Participants" name="search" value="{{Input::get('search')}}">
      </div>
      <button type="submit" class="btn btn-sm btn-default">Search</button>
      {{Form::close()}}
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{$currentUser->name}} <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li>
              <a href="{{route('auth.logout')}}">Log out</a>
            </li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>