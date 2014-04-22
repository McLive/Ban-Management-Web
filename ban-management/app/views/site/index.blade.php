<?

$servers = DB::table('servers')->get();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('site/header')
    <link rel="stylesheet" href="assets/css/morris.css">
    <title>{{ trans('site.ba') }} | Home</title>
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

      <?
      //Nav Tabs
      if ($servers) {
        echo "<ul class=\"nav nav-tabs\">\n";
        $count = 0;

        foreach($servers as $server) {
          //Check if the tab is the first one
          if (!$count) {
            echo "<li class=\"active\"><a href=\"#tab_".$server->id."\" data-toggle=\"tab\" data-identifier=\"stat_".$server->id."\">".$server->name."</a></li>\n";
          }
          else {
            echo "<li><a href=\"#tab_".$server->id."\" data-toggle=\"tab\" data-identifier=\"stat_".$server->id."\">".$server->name."</a></li>\n";
          }
          $count ++;
        }

        echo "</ul>\n";
      }
      else {
        echo "<div class=\"alert alert-danger\">\n";
        echo "<strong><i class=\"fa fa-warning\"></i> No Servers!</strong> No servers where found, please check the database data in the admin dashboard!\n";
        echo "</div>\n";
      }

      //tab panes

      if ($servers) {
        echo "<div class=\"tab-content\">\n";
        $count = 0;
        foreach($servers as $server) {

          //Check if the tab is the first one
          if(!$count) {
            echo "<div class=\"tab-pane fade in active\" id=\"tab_".$server->id."\">\n";
          }
          else {
            echo "<div class=\"tab-pane fade\" id=\"tab_".$server->id."\">\n";
          }

          //Building a DB connection
          $DB_data = $server->sql_connection;
          $sql_connection = DB::table("sql_connections")->where("id", "=", $server->sql_connection);

          if (isset($sql_connection->hostname) && isset($sql_connection->username) && isset($sql_connection->password) && isset($sql_connection->database)) {

          $Server_DB = mysqli_connect($sql_connection->hostname,$sql_connection->username,$sql_connection->password,$sql_connection->database);



            //rowdiv
            echo "<div class=\"row\">\n";
            echo "</br>\n";

            //Panel 1-3 (Bans, kicks, stats)

            echo "</div>\n"; //End row div


          }
          //Ouput an error
          else {
            echo "<br/>\n";
            echo "<div class=\"alert alert-danger\">\n";
            echo "<strong><i class=\"fa fa-warning\"></i> DB Error</strong> DB data error, please check the DB data for DB ID: <em>".$server->sql_connection."</em>\n";
            echo "</div>\n";
          }

          echo "</div>\n"; //End tab div

        $count ++;
        } //End foreach
        echo "</div>\n"; //end tab-content div


      }

      ?>
    </div><!-- /.container -->
    <script src="assets/js/raphael.min.js"></script>
    <script src="assets/js/morris.js"></script>
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

      //Statistics
      $('ul.nav a').on('shown.bs.tab', function (e) {
        var types = $(this).attr("data-identifier");
        var typesArray = types.split(",");
        $.each(typesArray, function (key, value) {
          eval(value + ".redraw()");
        })
      });

      $(function () {
        //HUB data
        var data_HUB = [
          {
            label: 'Total mutes',
            value: 180
          },
          {
            label: 'Total warns',
            value: 49
          },
          {
            label: 'Total kicks',
            value: 293
          },
          {
            label: 'Total bans',
            value: 183
          }
          ]

        var stats_HUB = {
          element: 'stats-HUB',
          hideHover: 'auto',
          resize: true,
          data: data_HUB,
          colors: ['#a9acac', '#f9b000', '#f08300', '#c30304']
        }

        //PvP Data
        var data_PvP = [
          {
            label: 'Total mutes',
            value: 36
          },
          {
            label: 'Total warns',
            value: 37
          },
          {
            label: 'Total kicks',
            value: 252
          },
          {
            label: 'Total bans',
            value: 579
          }
          ]

        var stats_PvP = {
          element: 'stats-PvP',
          hideHover: 'auto',
          resize: true,
          data: data_PvP,
          colors: ['#a9acac', '#f9b000', '#f08300', '#c30304']
        }

        HUB = Morris.Donut(stats_HUB);
        PvP = Morris.Donut(stats_PvP);
      });
    </script>

  </body>
</html>
