<?php 

  setlocale(LC_ALL,"en_US"); 
  echo "The time in US is";
  echo(strftime("%m/ %d/ %Y  , %X "));

  echo ("<br/>");


  setlocale(LC_ALL,"zh_CN"); 
  echo "The time in China is ";
  echo(strftime("%m/ %d/ %Y  , %X "));

  echo ("<br/>");

  $num = 1314.15;
  setlocale(LC_ALL, 'en_US');

  echo number_format($num, 1);
  echo "<br/>";
  echo number_format($num, 2);

?> 

