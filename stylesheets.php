<?php

   date_default_timezone_set("America/New_York");
   
   $time = date("H");
   
   if (00 <= $time && $time < 07)
   {
      echo '<link href="css/style-1.css" rel="stylesheet" type="text/css" media="screen" /><link href="css/flick/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" media="screen" />';
   }
   elseif (07 <= $time && $time < 12)
   {
      echo '<link href="css/style-3.css" rel="stylesheet" type="text/css" media="screen" /><link href="css/start/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" media="screen" />';
   }
   elseif (12 <= $time && $time < 18)
   {
      echo '<link href="css/style-2.css" rel="stylesheet" type="text/css" media="screen" /><link href="css/start/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" media="screen" />';
   }
   else
   {
      echo '<link href="css/style-4.css" rel="stylesheet" type="text/css" media="screen" /><link href="css/flick/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" media="screen" />';
   }

?>