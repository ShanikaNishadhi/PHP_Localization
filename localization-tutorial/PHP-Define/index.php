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
        <button type="submit">Submit</button>

      </form>
    </div>


    <h1 class="textOne">

      <?php

        if (!isset($_GET['langID']))
          $lang = 'en';
        else
          $lang = $_GET['langID'];

        
        if (isset($_GET['langID']))
          $locale = $_GET['langID'];

        include('locale/'. $locale . '.php');

        echo welcome;
        
     ?> 
    </h1>
  </body>
</html>
