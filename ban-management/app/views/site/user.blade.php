<!DOCTYPE html>
<html lang="en">
  <head>
    @include('site/header')
    <title>{{ $username }} | {{ trans('site.ba') }}</title>
    <script type='text/javascript'>
      $(document).ready(function () {
       if ($("[rel=tooltip]").length) {
       $("[rel=tooltip]").tooltip();
       }
      });
    </script>
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
            <li><a href="#">{{ trans('site.home') }}</a></li>
            <li class="active"><a href="#">{{ trans('site.players') }}</a></li>
            <li><a href="#">{{ trans('site.stats') }}</a></li>
            <li><a href="#">{{ trans('site.appeal') }}</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">
      <div class="jumbotron">
        <div class="media">
          <div class="pull-left">
            <img class="media-object img-rounded" src="https://minotar.net/helm/{{$username}}/150.png" alt="Mr_Maccrafter" style="width: 150px; height: 150px; ">
          </div>
          <div class="media-body">
            <h1 class="media-heading">{{$username}} <i class="fa fa-volume-off text-muted" rel="tooltip" data-placement="right" title="Currently muted"></i></h1>
            <h4>
              <span class="label label-default"> 2 mutes</span>
              <span class="label label-warning">4 warnings</span>
              <span class="label label-warning">2 kicks</span>
              <span class="label label-danger">5 tempbans</span>
              <span class="label label-danger">0 bans</span>
            </h4>
            <h4 class="text-success">Currently not banned</h4>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-7">
          <ul class="timeline">

            <li class="timeline-inverted">
              <div class="timeline-badge success"><i class="fa fa-check fa-fw"></i></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 class="timeline-title">Unbanned <small>by ADMIN</small></h4>
                  <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago</small></p>
                </div>
                <div class="timeline-body">
                  <p>ID: ###</p>
              </div>
            </li>

            <li>
              <div class="timeline-badge danger"><i class="fa fa-ban fa-fw"></i></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 class="timeline-title">Banned <small>by ADMIN</small></h4>
                  <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 5 days ago</small></p>
                </div>
                <div class="timeline-body">
                  <p>ID: ###</p>
              </div>
            </li>

            <li class="timeline-inverted">
              <div class="timeline-badge warning"><i class="fa fa-exclamation-triangle fa-fw"></i></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 class="timeline-title">Kicked <small>by ADMIN</small></h4>
                  <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 1 week ago</small></p>
                </div>
                <div class="timeline-body">
                  <p>ID: ###</p>
              </div>
            </li>

            <li>
              <div class="timeline-badge warning"><i class="fa fa-exclamation fa-fw"></i></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 class="timeline-title">Warned <small>by ADMIN</small></h4>
                  <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 2 weeks ago</small></p>
                </div>
                <div class="timeline-body">
                  <p>ID: ###</p>
              </div>
            </li>

            <li class="timeline-inverted">
              <div class="timeline-badge"><i class="fa fa-volume-off fa-fw"></i></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 class="timeline-title">Muted <small>by ADMIN</small></h4>
                  <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 1 month ago</small></p>
                </div>
                <div class="timeline-body">
                  <p>ID: ###</p>
                  <p class="text-danger">Permanent</p>
              </div>
            </li>

            <li>
              <div class="timeline-badge"><i class="fa fa-volume-off fa-fw"></i></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 class="timeline-title">Muted <small>by ADMIN</small></h4>
                  <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 2 months ago</small></p>
                </div>
                <div class="timeline-body">
                  <p>ID: ###</p>
                  <p>For: 5h 10min</p>
              </div>
            </li>

          </ul>
        </div>
      </div>

    </div><!-- /.container -->

  </body>
</html>
