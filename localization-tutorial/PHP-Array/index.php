<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <link rel="stylesheet" 
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">

    <title>Localization Tutorial</title>

    <style>
      .textOne{
        text-align: center;
      }
    </style>

  </head>

  <body>

    <br/>
    <div class="col-md-6">
      <form name="langSelect" action="" method="get" >
        <select name="langID" id="langID">
          <option>Select Language</option>
          <option value="arab">Arabic</option>
          <option value="zh">Chinese</option>
          <option value="en">English</option>
          <option value="es">Spanish</option>
        </select>

        <br/><br/>
        <input type="text" id="numBooks" name="numBooks" placeholder="Add number of books." />

        <br/><br/>
        <button type="submit">Submit</button>

      </form>
    </div>


    <h1 class="textOne">

      <?php

        if (!isset($_GET['langID']))
          $lang = 'en';
        else
          $lang = $_GET['langID'];

        if (!isset($_GET['numBooks']))
          $numberOfBooks = 1;
        else
          $numberOfBooks = $_GET['numBooks'];
  
        include('locale/'. $lang . '.php');
        echo $langArray['welcome'];

        if($numberOfBooks == 1){
          $sentence = $numberOfBooks." ". $langArray['single_book'];
        }else{
          $sentence = $numberOfBooks." ". $langArray['many_books'];
        }

        echo("<br/>");
        echo ($langArray['i_bought'].$sentence);

        if ($lang === 'en'){
          setlocale(LC_ALL,"en_US");
        }elseif ($lang === 'es'){
          setlocale(LC_ALL,"es_CO");
        }elseif( $lang === 'arab'){
          setlocale(LC_ALL,"ar_EG");
        }else{
          setlocale(LC_ALL,"zh_CN");
        }

        echo("<br/><br/>");
        echo($langArray['her_birthday']);
        echo(strftime("%m - %d - %Y, ",mktime(20,0,0,12,31,97))."<br>");
        echo($langArray['now_time']);
        echo(strftime("%m/ %d/ %Y   , %X "));
        
      ?> 
    </h1>
  </body>
</html>
