<!DOCTYPE html>
<html lang="en">
  <head>
    @include('site/header')
    <title>{{ trans('site.ba') }}</title>
  </head>
  <body style="padding-top: 60px;">
    @include('site/nav')
    <div class="container">
      <div class="jumbotron">
        <div class="container">
          <h1 class="text-center">Got banned?</h1>
          <br/>
          <div class="col-lg-6 col-lg-offset-3">
            <div class="input-group" id="form_div">
              <input type="text" name="username" id="username" class="form-control" placeholder="Enter your username" autofocus="true" required />
              <span class="input-group-btn">
                <button class="btn btn-default" onclick="search()" id="search_btn"><i class="fa fa-search fa-fw"></i> Check</button>
              </span>
            </div>
          </div>
        </div>
      </div>

      <!-- Nav tabs -->
      <ul class="nav nav-tabs">
        <li class="active"><a href="#hub" data-toggle="tab">HUB</a></li>
        <li><a href="#pvp" data-toggle="tab">PvP</a></li>
      </ul>

      <!-- Tab panes -->
      <ul class="tab-content">
        <li class="tab-pane fade in active" id="hub">

          <div class="row">
            <br/>
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
                        <h5 class="media-heading">Mr_Maccrafter</h5>
                        <time class="text-muted">banned 5 minutes ago</time>
                      </div>
                    </li>

                    <li class="media">
                      <a class="pull-left" href="#">
                        <img class="media-object img-rounded" src="https://minotar.net/helm/confuserr/40.png" alt="Confuserr">
                      </a>
                      <div class="media-body">
                        <h5 class="media-heading">Confuserr</h5>
                        <time class="text-muted">banned 8 minutes ago</time>
                      </div>
                    </li>

                    <li class="media">
                      <a class="pull-left" href="#">
                        <img class="media-object img-rounded" src="https://minotar.net/helm/ftbastler/40.png" alt="ftbastler">
                      </a>
                      <div class="media-body">
                        <h5 class="media-heading">ftbastler</h5>
                        <time class="text-muted">banned 14 minutes ago</time>
                      </div>
                    </li>

                    <li class="media">
                      <a class="pull-left" href="#">
                        <img class="media-object img-rounded" src="https://minotar.net/helm/Notch/40.png" alt="Notch">
                      </a>
                      <div class="media-body">
                        <h5 class="media-heading">Notch</h5>
                        <time class="text-muted">banned 1 day ago</time>
                      </div>
                    </li>

                  </ul>
                </div>

              </div>
            </div>

            <div class="col-lg-4">

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h1 class="panel-title">Recent kicks</h1>
                </div>
                <div class="panel-body">

                  <ul class="media-list">

                    <li class="media">
                      <a class="pull-left" href="#">
                        <img class="media-object img-rounded" src="https://minotar.net/helm/Mr_Maccrafter/40.png" alt="Mr_Maccrafter">
                      </a>
                      <div class="media-body">
                        <h5 class="media-heading">Mr_Maccrafter</h5>
                        <time class="text-muted">kicked 5 minutes ago</time>
                      </div>
                    </li>

                    <li class="media">
                      <a class="pull-left" href="#">
                        <img class="media-object img-rounded" src="https://minotar.net/helm/confuserr/40.png" alt="Confuserr">
                      </a>
                      <div class="media-body">
                        <h5 class="media-heading">Confuserr</h5>
                        <time class="text-muted">kicked 8 minutes ago</time>
                      </div>
                    </li>

                    <li class="media">
                      <a class="pull-left" href="#">
                        <img class="media-object img-rounded" src="https://minotar.net/helm/ftbastler/40.png" alt="ftbastler">
                      </a>
                      <div class="media-body">
                        <h5 class="media-heading">ftbastler</h5>
                        <time class="text-muted">kicked 14 minutes ago</time>
                      </div>
                    </li>

                    <li class="media">
                      <a class="pull-left" href="#">
                        <img class="media-object img-rounded" src="https://minotar.net/helm/Notch/40.png" alt="Notch">
                      </a>
                      <div class="media-body">
                        <h5 class="media-heading">Notch</h5>
                        <time class="text-muted">kicked 1 day ago</time>
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
                  <div id="stats-HUB" style="height: 205px;"></div>
                </div>
              </div>

            </div>

          </div>

          <div class="row">

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
                        <h5 class="media-heading">Mr_Maccrafter</h5>
                        <time class="text-muted">warned 5 minutes ago</time>
                      </div>
                    </li>

                    <li class="media">
                      <a class="pull-left" href="#">
                        <img class="media-object img-rounded" src="https://minotar.net/helm/confuserr/40.png" alt="Confuserr">
                      </a>
                      <div class="media-body">
                        <h5 class="media-heading">Confuserr</h5>
                        <time class="text-muted">warned 8 minutes ago</time>
                      </div>
                    </li>

                    <li class="media">
                      <a class="pull-left" href="#">
                        <img class="media-object img-rounded" src="https://minotar.net/helm/ftbastler/40.png" alt="ftbastler">
                      </a>
                      <div class="media-body">
                        <h5 class="media-heading">ftbastler</h5>
                        <time class="text-muted">warned 14 minutes ago</time>
                      </div>
                    </li>

                    <li class="media">
                      <a class="pull-left" href="#">
                        <img class="media-object img-rounded" src="https://minotar.net/helm/Notch/40.png" alt="Notch">
                      </a>
                      <div class="media-body">
                        <h5 class="media-heading">Notch</h5>
                        <time class="text-muted">warned 1 day ago</time>
                      </div>
                    </li>

                  </ul>
                </div>

              </div>
            </div>

            <div class="col-lg-4">

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h1 class="panel-title">Recent mutes</h1>
                </div>
                <div class="panel-body">

                  <ul class="media-list">

                    <li class="media">
                      <a class="pull-left" href="#">
                        <img class="media-object img-rounded" src="https://minotar.net/helm/Mr_Maccrafter/40.png" alt="Mr_Maccrafter">
                      </a>
                      <div class="media-body">
                        <h5 class="media-heading">Mr_Maccrafter </h5>
                        <time class="text-muted">muted 5 minutes ago</time>
                      </div>
                    </li>

                    <li class="media">
                      <a class="pull-left" href="#">
                        <img class="media-object img-rounded" src="https://minotar.net/helm/confuserr/40.png" alt="Confuserr">
                      </a>
                      <div class="media-body">
                        <h5 class="media-heading">Confuserr</h5>
                        <time class="text-muted">muted 8 minutes ago</time>
                      </div>
                    </li>

                    <li class="media">
                      <a class="pull-left" href="#">
                        <img class="media-object img-rounded" src="https://minotar.net/helm/ftbastler/40.png" alt="ftbastler">
                      </a>
                      <div class="media-body">
                        <h5 class="media-heading">ftbastler</h5>
                        <time class="text-muted">muted 14 minutes ago</time>
                      </div>
                    </li>

                    <li class="media">
                      <a class="pull-left" href="#">
                        <img class="media-object img-rounded" src="https://minotar.net/helm/Notch/40.png" alt="Notch">
                      </a>
                      <div class="media-body">
                        <h5 class="media-heading">Notch</h5>
                        <time class="text-muted">muted 1 day ago</time>
                      </div>
                    </li>

                  </ul>
                </div>

              </div>
            </div>

            <div class="col-lg-4">

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h1 class="panel-title">Placeholder</h1>
                </div>
                <div class="panel-body">
                  <p>Some sort of server button</p>
                </div>
              </div>

            </div>

        </div>
      </li> <!--End first tab-->

      <li class="tab-pane fade" id="pvp">

        <div class="row">
          <br/>
          <div class="col-lg-4">

            <div class="panel panel-default">
              <div class="panel-heading">
                <h1 class="panel-title">Recent bans</h1>
              </div>
              <div class="panel-body">

                <ul class="media-list">

                  <li class="media">
                    <a class="pull-left" href="#">
                      <img class="media-object img-rounded" src="https://minotar.net/helm/confuserr/40.png" alt="Confuserr">
                    </a>
                    <div class="media-body">
                      <h5 class="media-heading">Confuserr</h5>
                      <time class="text-muted">banned 1 minute ago</time>
                    </div>
                  </li>

                  <li class="media">
                    <a class="pull-left" href="#">
                      <img class="media-object img-rounded" src="https://minotar.net/helm/Mr_Maccrafter/40.png" alt="Mr_Maccrafter">
                    </a>
                    <div class="media-body">
                      <h5 class="media-heading">Mr_Maccrafter</h5>
                      <time class="text-muted">banned 5 minutes ago</time>
                    </div>
                  </li>

                  <li class="media">
                    <a class="pull-left" href="#">
                      <img class="media-object img-rounded" src="https://minotar.net/helm/Notch/40.png" alt="Notch">
                    </a>
                    <div class="media-body">
                      <h5 class="media-heading">Notch</h5>
                      <time class="text-muted">banned 1 day ago</time>
                    </div>
                  </li>

                  <li class="media">
                    <a class="pull-left" href="#">
                      <img class="media-object img-rounded" src="https://minotar.net/helm/ftbastler/40.png" alt="ftbastler">
                    </a>
                    <div class="media-body">
                      <h5 class="media-heading">ftbastler</h5>
                      <time class="text-muted">banned 14 days ago</time>
                    </div>
                  </li>

                </ul>
              </div>

            </div>
          </div>

          <div class="col-lg-4">

            <div class="panel panel-default">
              <div class="panel-heading">
                <h1 class="panel-title">Recent kicks</h1>
              </div>
              <div class="panel-body">

                <ul class="media-list">

                  <li class="media">
                    <a class="pull-left" href="#">
                      <img class="media-object img-rounded" src="https://minotar.net/helm/Mr_Maccrafter/40.png" alt="Mr_Maccrafter">
                    </a>
                    <div class="media-body">
                      <h5 class="media-heading">Mr_Maccrafter</h5>
                      <time class="text-muted">kicked 5 minutes ago</time>
                    </div>
                  </li>

                  <li class="media">
                    <a class="pull-left" href="#">
                      <img class="media-object img-rounded" src="https://minotar.net/helm/confuserr/40.png" alt="Confuserr">
                    </a>
                    <div class="media-body">
                      <h5 class="media-heading">Confuserr</h5>
                      <time class="text-muted">kicked 8 minutes ago</time>
                    </div>
                  </li>

                  <li class="media">
                    <a class="pull-left" href="#">
                      <img class="media-object img-rounded" src="https://minotar.net/helm/ftbastler/40.png" alt="ftbastler">
                    </a>
                    <div class="media-body">
                      <h5 class="media-heading">ftbastler</h5>
                      <time class="text-muted">kicked 14 minutes ago</time>
                    </div>
                  </li>

                  <li class="media">
                    <a class="pull-left" href="#">
                      <img class="media-object img-rounded" src="https://minotar.net/helm/Notch/40.png" alt="Notch">
                    </a>
                    <div class="media-body">
                      <h5 class="media-heading">Notch</h5>
                      <time class="text-muted">kicked 1 day ago</time>
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
                <div id="stats-PvP" style="height: 205px;"></div>
              </div>
            </div>

          </div>

        </div>

        <div class="row">

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
                      <h5 class="media-heading">Mr_Maccrafter</h5>
                      <time class="text-muted">warned 5 minutes ago</time>
                    </div>
                  </li>

                  <li class="media">
                    <a class="pull-left" href="#">
                      <img class="media-object img-rounded" src="https://minotar.net/helm/confuserr/40.png" alt="Confuserr">
                    </a>
                    <div class="media-body">
                      <h5 class="media-heading">Confuserr</h5>
                      <time class="text-muted">warned 8 minutes ago</time>
                    </div>
                  </li>

                  <li class="media">
                    <a class="pull-left" href="#">
                      <img class="media-object img-rounded" src="https://minotar.net/helm/ftbastler/40.png" alt="ftbastler">
                    </a>
                    <div class="media-body">
                      <h5 class="media-heading">ftbastler</h5>
                      <time class="text-muted">warned 14 minutes ago</time>
                    </div>
                  </li>

                  <li class="media">
                    <a class="pull-left" href="#">
                      <img class="media-object img-rounded" src="https://minotar.net/helm/Notch/40.png" alt="Notch">
                    </a>
                    <div class="media-body">
                      <h5 class="media-heading">Notch</h5>
                      <time class="text-muted">warned 1 day ago</time>
                    </div>
                  </li>

                </ul>
              </div>

            </div>
          </div>

          <div class="col-lg-4">

            <div class="panel panel-default">
              <div class="panel-heading">
                <h1 class="panel-title">Recent mutes</h1>
              </div>
              <div class="panel-body">

                <ul class="media-list">

                  <li class="media">
                    <a class="pull-left" href="#">
                      <img class="media-object img-rounded" src="https://minotar.net/helm/Mr_Maccrafter/40.png" alt="Mr_Maccrafter">
                    </a>
                    <div class="media-body">
                      <h5 class="media-heading">Mr_Maccrafter </h5>
                      <time class="text-muted">muted 5 minutes ago</time>
                    </div>
                  </li>

                  <li class="media">
                    <a class="pull-left" href="#">
                      <img class="media-object img-rounded" src="https://minotar.net/helm/confuserr/40.png" alt="Confuserr">
                    </a>
                    <div class="media-body">
                      <h5 class="media-heading">Confuserr</h5>
                      <time class="text-muted">muted 8 minutes ago</time>
                    </div>
                  </li>

                  <li class="media">
                    <a class="pull-left" href="#">
                      <img class="media-object img-rounded" src="https://minotar.net/helm/ftbastler/40.png" alt="ftbastler">
                    </a>
                    <div class="media-body">
                      <h5 class="media-heading">ftbastler</h5>
                      <time class="text-muted">muted 14 minutes ago</time>
                    </div>
                  </li>

                  <li class="media">
                    <a class="pull-left" href="#">
                      <img class="media-object img-rounded" src="https://minotar.net/helm/Notch/40.png" alt="Notch">
                    </a>
                    <div class="media-body">
                      <h5 class="media-heading">Notch</h5>
                      <time class="text-muted">muted 1 day ago</time>
                    </div>
                  </li>

                </ul>
              </div>

            </div>
          </div>

          <div class="col-lg-4">

            <div class="panel panel-default">
              <div class="panel-heading">
                <h1 class="panel-title">Placeholder</h1>
              </div>
              <div class="panel-body">
                <p>Some sort of server button</p>
              </div>
            </div>

          </div>

      </div>
    </li> <!--End second tab-->

    </ul>

    </div><!-- /.container -->
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>


    <script type="text/javascript">
      function search() {
        var username = $('#username').val();
        if (username) {
          $(location).attr('href','user/'+username);
        }
        else {
          $('#form_div').addClass('has-error');
        }
      }
      //Charts
      Morris.Donut({
        element: 'stats-HUB',
        data: [
          {label: "Total mutes", value: 129},
          {label: "Total warns", value: 240},
          {label: "Total kicks", value: 359},
          {label: "Total bans", value: 455}
          ]
        });

      Morris.Donut({
        element: 'stats-PvP',
        data: [
          {label: "Total mutes", value: 34},
          {label: "Total warns", value: 22},
          {label: "Total kicks", value: 340},
          {label: "Total bans", value: 846}
          ]
        });

    </script>

  </body>
</html>
