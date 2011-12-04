<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/htmll charset=iso-8859-1" />
      
      <?php include("stylesheets.php"); ?>
      
      <script type="text/javascript" src="js/jquery-1.6.3.min.js"></script>
      <script type="text/javascript" src="js/jquery-ui-1.8.16.custom.min.js"></script>
      <script type="text/javascript">
         $(functions() {
            $("#tabs").tabs();
         });
      </script>
      
      <meta name="description" content="" />
      <meta name="keywords" content="" />
      
      <title></title>
   </head>
   <body>
      <div id="wrapper">
         <div class="content_container_top">
            <h1>Simple Time Base CSS Style Sheet Switcher - Demo</h1>
         </div>
         
         <div class="content_container_2">
            <p>
               Morning
            </p>
            <p>
               Afternoon
            </p>
            <p>
               Evening
            </p>
            <p>
               Night
            </p>
         </div>
         <div class="content_container_1">
            <div class="main_image"><div>
            <p class="main_description">
               Main Image Changes at times indicated
            </p>
            
            <div id="tabs-1">
               <p>
                  <img class="tabs_img" src="images/envato_1.jpg" width="300" height="195" alt="About Envato" />
                  Envato is a startup based out of Australia with people around the world and sites serving pages every second. We started in a living room in 2006 and have been steadily working to build our company into a world-class contender. Our background is creative, we love open source, we believe that work is about way more than just making money, and we're totally committed to making products that are awesome!
               </p>
               <p>
                  <a class="tabs_link_1" href="http://envato.com/" target="_blank" title="Visit The Envato Website">Visit The Envato Website</a>
               </p>
            </div>
            
            <div id="tabs-2">
               <p>
                  <img class="tabs_img" src="images/marketplace_1.jpg" width="300" height="195" alt="Marketplaces" />
                  The Envato Marketplaces allow anyone to buy or sell digital goods like WordPress themes, background music, After Effects project files, Flash templates and much more. The marketplaces are home to a thriving community of over 500,000 users, authors and buyers and every day hundreds of new files are added.	
               </p>
               <p>
                  <a class="tabs_link_1" href="http://themeforest.net/" target="_blank" title="Visit the Theme Marketplace">Visit the Theme Marketplace</a>
               </p>
            </div>
            
            <div id="tabs-3">
               <p>
                  <img class="tabs_img" src="images/psdtuts_1.jpg" width="300" height="195" alt="Tuts+ Network" />
                  At Envato we're very passionate about education, that's why weve created one of the most popular networks of educational blogs around. Tuts+ serves up over 18 million pageviews a month across its many subsites on subjects like graphics, web development, audio production, iPhone development and motion graphics.
               </p>
               <p>
                  <a class="tabs_link_1" href="http://tutsplus.com/" target="_blank" title="Visit Tuts+ Hub">Visit Tuts+ Hub</a>
               </p>
            </div>
            
         </div> 
            
      </div>            
            
      <div class="content_container_bottom">
         <p>
            This demo uses PHP to change multiple CSS style sheets (Main Style and <a href="http://jqueryui.com/themeroller/#themeGallery" target="_blank" title="jQuery UI Theme Gallery">jQuery UI Theme</a>) at specific times during a 24 hour period.
         </p>
         <p>
            Four different CSS style sheets were created to display "Night", "Morning", "Afternoon" and "Evening" Themes for this demo. The <a href="http://www.php.net/manual/en/timezones.php" target="_blank" title="List of Supported Timezones">timezone</a> is set to Australia/Melbourne. 
         </p>
         <p>
            <a href="http://www.webcodepro.net/demos/php-stylesheet-switcher-2/php-css-switcher.php" title="America New York Timezone Demo">Click Here</a> to view a demo that is set to America/New_York time and includes additional stylesheets and images. 
         </p>
         <p>
            <a href="http://www.webcodepro.net/demos/php-stylesheet-switcher-3/php-css-switcher.php" title="Basic Demo">Click Here</a> to view the basic demo used in the Tutorial.
         </p>
         <p>
            This Demo includes images of the Envato Marketplaces Mascots. You can download wallpapers at <a href="http://zoo.envato.com/" target="_blank" title="Pasquale's Zoo!">Pasquale's Zoo!</a>. 
         </p>
            
         </div>
      </div>
   </body>
</html>