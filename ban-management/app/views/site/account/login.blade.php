<!DOCTYPE html>
<html lang="en">
  <head>
    @include('site/header')
    <title>{{ trans('site.ba') }}</title>
  </head>
  <body style="padding-top: 60px;">
    @include('site/nav')
    <div class="container">
        <div class="container">
          <div class="row" style="padding-top: 100px;">
            <div class="col-md-4 col-md-offset-4">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Login</h3>
                </div>
                <div class="panel-body">
                  {{ Form::open(array('url' => 'account/login')) }}
					{{ isset($error) ? "Error!" : "" }}
                    <fieldset>
                      <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                        <input class="form-control" placeholder="Username" name="username" type="text" autofocus="true" required>
                      </div>
                      <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
                        <input class="form-control" placeholder="Password" name="password" type="password" required>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input name="remember" type="checkbox" value="Remember Me">Remember Me
                        </label>
                      </div>
                      <button class="btn btn-lg btn-primary btn-block" type="submit"><i class="fa fa-sign-in"></i> Login</button>
                    </fieldset>
                  {{ Form::close() }}
                </div>
              </div>
            </div>
          </div>
          </div>

    </div><!-- /.container -->
  </body>
</html>
