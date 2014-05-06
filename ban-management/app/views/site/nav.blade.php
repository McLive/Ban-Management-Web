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
        <li><a href="{{ URL::asset('/') }}"><i class="fa fa-home"></i> {{ trans('site.home') }}</a></li>
        <li><a href="{{ URL::asset('/user') }}"><i class="fa fa-users"></i> {{ trans('site.players') }}</a></li>
        <li><a href="{{ URL::asset('/stats') }}"><i class="fa fa-star"></i> {{ trans('site.stats') }}</a></li>
        <li><a href="{{ URL::asset('/appeal') }}"><i class="fa fa-comment"></i> {{ trans('site.appeal') }}</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        @if (Auth::check())
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="https://minotar.net/helm/{{Auth::user()->username}}/16.png" class="img-rounded" style="width: 16px; height: 16px;" alt="{{Auth::user()->username}}">{{Auth::user()->username}} <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="{{URL::asset('user/'); Auth::user()->username}}"><i class="fa fa-user"></i> Profile</a></li>
              <li><a href="{{URL::asset('appeal/user/'); Auth::user()->username}}"><i class="fa fa-comment"></i> Appeals</a></li>
              <li><a href="{{URL::asset('account')}}">Account</a></li>
              <li class="divider"></li>
              @if (Auth::user()->security_level >= 2)
                <li><a href="{{URL::asset('admin')}}">Admin Section stuff</a></li>
              @endif
              <li class="divider"></li>
              <li><a href="{{ URL::asset('account/logout')}}"></a><i class="fa fa-sign-out"></i> Log out</li>
            </ul>
          </li>
        @else
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="{{URL::asset('account/login')}}"><i class="fa fa-sign-in"></i> Login</a></li>
              <li><a href="{{URL::asset('account/register')}}"><i class="fa fa-edit"></i> Register</a></li>
            </ul>
          </li>
        @endif
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>