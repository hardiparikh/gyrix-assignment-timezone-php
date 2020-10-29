<?php

//current time of different countries
date_default_timezone_set('UTC');
date_default_timezone_set('NZ');
echo "<h2>current time of Newzealand is</h2>".date('d-m-Y h:i:sa')."<br>";
date_default_timezone_set('Australia/Sydney');
echo "<h2>current time of Australia is</h2>".date('d-m-Y h:i:sa')."<br>";
date_default_timezone_set('Asia/Kolkata');
echo "<h2>current time of india is</h2>".date('d-m-Y h:i:sa')."<br>";
date_default_timezone_set('Europe/Berlin');
echo "<h2>current time of germany is</h2>".date('d-m-Y h:i:sa')."<br>";
date_default_timezone_set('America/Mexico_City');
echo "<h2>current time of US is</h2>".date('d-m-Y h:i:sa')."<br>";

?>