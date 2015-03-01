<nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
      </button>
      <a class="navbar-brand" href="/"><span class="glyphicon glyphicon-home"></span></a>
        <ul class="nav navbar-nav">
          <li><a href="/storage"> Storage</a></li>
          <li><a href="/posts"> Custom</a></li>
          <li><a href="/contact"> Contact</a></li>
          @if (Auth::check())
            <li><a href="/posts/create">Create New Post</a></li>
            <li><a href="/logout"><span class="glyphicon glyphicon-user"></span>Log Out</a></li>
          @endif
        </ul>
    </div>

  </div>
</nav>