<?php

foreach(glob('/data/*/') as $dir)
{

   if(!is_dir($dir)) continue;

   $DIR_RUN = "";

   if(is_file($dir . 'htdocs/wp-config.php'))
   {
         $SHELL = "echo {$dir}; cd {$dir}htdocs/; wp-cli plugin remove gravityforms --allow-root; ";
         system($SHELL);
         continue;
   }

   if(is_file($dir . 'public_html/wp-config.php'))
   {
         $SHELL = "echo {$dir}; cd {$dir}public_html/; wp-cli plugin remove gravityforms --allow-root; ";
         system($SHELL);
         continue;
   }

   if(is_file($dir . 'public/wp-config.php'))
   {
         $SHELL = "echo {$dir}; cd {$dir}public/; wp-cli plugin remove gravityforms --allow-root; ";
         system($SHELL);
         continue;
   }

   if(is_file($dir . 'wp-config.php'))
   {
         $SHELL = "echo {$dir}; cd {$dir}; wp-cli plugin remove gravityforms --allow-root; ";
         system($SHELL);
         continue;
   }
     
   #echo $dir . PHP_EOL;
}
