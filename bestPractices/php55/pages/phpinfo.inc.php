<?php

// http://www.mainelydesign.com/blog/view/displaying-phpinfo-without-css-styles
ob_start();
phpinfo();
$pinfo = ob_get_contents();
ob_end_clean();

$pinfo = preg_replace( '%^.*<body>(.*)</body>.*$%ms', '$1', $pinfo);
echo '<div class="phpinfo">' . $pinfo . '</div>';