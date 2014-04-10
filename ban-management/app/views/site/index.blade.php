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

      <div class="starter-template">
        <h1>{{ trans('site.ba') }}</h1>
        <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
      </div>

    </div><!-- /.container -->

  </body>
</html>
