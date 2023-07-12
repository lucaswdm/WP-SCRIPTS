<?php

foreach(glob('/data/*/') as $dir)
{

   if(!is_dir($dir)) continue;
     
   echo $dir . PHP_EOL;
}
