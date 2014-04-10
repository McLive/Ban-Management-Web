<!DOCTYPE html>
<html lang="en">
  <head>
    @include('site/header')
    <title>{{ trans('site.ba') }}</title>
  </head>
  <body style="padding-top: 60px;">
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">{{ trans('site.ba') }}</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">{{ trans('site.home') }}</a></li>
            <li><a href="#">{{ trans('site.players') }}</a></li>
            <li><a href="#">{{ trans('site.stats') }}</a></li>
            <li><a href="#">{{ trans('site.appeal') }}</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <div class="container">
      <div class="jumbotron">
        <div class="container">
          <h1 class="text-center">Got banned?</h1>
          <br/>
          <form>
            <div class="col-lg-6 col-lg-offset-3">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Enter your username" autofocus="true" />
                <span class="input-group-btn">
                  <button class="btn btn-default"><i class="fa fa-search fa-fw"></i> Check</button>
                </span>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h1 class="panel-title">Recent bans</h1>
            </div>
            <div class="panel-body">
              <ul class="media-list">
                <li class="media">
                  <a class="pull-left" href="#">
                    <img class="media-object img-rounded" src="https://minotar.net/helm/Mr_Maccrafter/40.png" alt="Mr_Maccrafter">
                  </a>
                  <div class="media-body">
                    <h4 class="media-heading">Mr_Maccrafter</h4>
                    <time>banned 5 minutes ago</time>
                  </div>
                </li>

                <li class="media">
                  <a class="pull-left" href="#">
                    <img class="media-object img-rounded" src="https://minotar.net/helm/confuserr/40.png" alt="Confuserr">
                  </a>
                  <div class="media-body">
                    <h4 class="media-heading">Confuserr</h4>
                    <time>banned 8 minutes ago</time>
                  </div>
                </li>

                <li class="media">
                  <a class="pull-left" href="#">
                    <img class="media-object img-rounded" src="https://minotar.net/helm/ftblaster/40.png" alt="ftblaster">
                  </a>
                  <div class="media-body">
                    <h4 class="media-heading">ftblaster</h4>
                    <time>banned 14 minutes ago</time>
                  </div>
                </li>

                <li class="media">
                  <a class="pull-left" href="#">
                    <img class="media-object img-rounded" src="https://minotar.net/helm/Notch/40.png" alt="Notch">
                  </a>
                  <div class="media-body">
                    <h4 class="media-heading">Notch</h4>
                    <time>banned 1 day ago</time>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h1 class="panel-title">Recent warnings</h1>
            </div>
            <div class="panel-body">
              <ul class="media-list">
                <li class="media">
                  <a class="pull-left" href="#">
                    <img class="media-object img-rounded" src="https://minotar.net/helm/Mr_Maccrafter/40.png" alt="Mr_Maccrafter">
                  </a>
                  <div class="media-body">
                    <h4 class="media-heading">Mr_Maccrafter</h4>
                    <time>warned 5 minutes ago</time>
                  </div>
                </li>

                <li class="media">
                  <a class="pull-left" href="#">
                    <img class="media-object img-rounded" src="https://minotar.net/helm/confuserr/40.png" alt="Confuserr">
                  </a>
                  <div class="media-body">
                    <h4 class="media-heading">Confuserr</h4>
                    <time>warned 8 minutes ago</time>
                  </div>
                </li>

                <li class="media">
                  <a class="pull-left" href="#">
                    <img class="media-object img-rounded" src="https://minotar.net/helm/ftblaster/40.png" alt="ftblaster">
                  </a>
                  <div class="media-body">
                    <h4 class="media-heading">ftblaster</h4>
                    <time>warned 14 minutes ago</time>
                  </div>
                </li>

                <li class="media">
                  <a class="pull-left" href="#">
                    <img class="media-object img-rounded" src="https://minotar.net/helm/Notch/40.png" alt="Notch">
                  </a>
                  <div class="media-body">
                    <h4 class="media-heading">Notch</h4>
                    <time>warned 1 day ago</time>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h1 class="panel-title">Statistics</h1>
            </div>
            <div class="panel-body">
              ...
            </div>
          </div>
        </div>
      </div>

    </div><!-- /.container -->

  </body>
</html>
