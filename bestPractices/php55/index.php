<?php
/**
 * @file
 * Front controller.
 */

// Required files.
require_once 'config.inc.php';
require_once 'util.inc.php';

// Set title.
$title = 'PHP 5.5';

// Menu configuration.
$menu_item_default = 'status';
$menu_items = array(
  'status' => array(
    'label' => 'Status',
    'desc' => 'Status report',
  ),
  'game' => array(
    'label' => 'Game',
    'desc' => 'Random 2 Player Deal',
  ),
  'log' => array(
    'label' => 'Log',
    'desc' => 'Show game log',
  ),
  'phpinfo' => array(
    'label' => 'phpinfo()',
    'desc' => 'Render phpinfo()',
  ),
  'generate' => array(
    'label' => 'Generate',
    'desc' => 'Generate log files',
  ),
);

// Determine the current menu item.
$menu_current = $menu_item_default;
// If there is a query for a specific menu item and that menu item exists...
if (isset($_REQUEST['q']) && array_key_exists($_REQUEST['q'], $menu_items)) {
  $menu_current = $_REQUEST['q'];
}
?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo $title; ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/cards.css" media="screen" />
        <!--[if lt IE 9]>
            <link rel="stylesheet" type="text/css" href="css/cards-ie.css" media="screen" />
        <![endif]-->
        <!--[if IE 9]>
            <link rel="stylesheet" type="text/css" href="css/cards-ie9.css" media="screen" />
        <![endif]-->
        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>

        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="?q=<?php echo $menu_item_default; ?>"><?php echo $title; ?></a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                          <?php
                          foreach ($menu_items as $item => $item_data) {
                            echo '<li' . ($item == $menu_current ? ' class="active"' : '') . '>';
                            echo '<a href="?q=' . $item . '" title="' . $item_data['desc'] . '">' . $item_data['label'] . '</a>';
                            echo '</li>';
                          }
                          ?>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>

        <div class="container">

            <!-- Main hero unit for a primary marketing message or call to action -->
            <div class="hero-unit">
              <?php
              echo '<h1>' . $menu_items[$menu_current]['label'] . '</h1>';
              echo '<p>' . $menu_items[$menu_current]['desc'] . '</p>';
              ?>
            </div>

            <?php
              include_once 'pages/' . $menu_current . '.inc.php';
            ?>

            <hr>

            <footer>
                <p>&copy; lynda.com 2013</p>
            </footer>

        </div> <!-- /container -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.3.min.js"><\/script>')</script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>