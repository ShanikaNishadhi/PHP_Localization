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
          <option value="ar_EG">Arabic</option>
          <option value="zh_CN">Chinese</option>
          <option value="en_US">English</option>
          <option value="es_CO">Spanish</option>
        </select>

        <input type="text" id="numBooks" name="numBooks" placeholder="Add number of books." />
        <br/><br/>
        <button type="submit">Submit</button>

      </form>
    </div>

    <h1 class="textOne">

    <?php
        if (!isset($_GET['langID']))
          $lang = 'en_US';
        else
          $lang = $_GET['langID'];

        if (!isset($_GET['numBooks']))
          $numberOfBooks = 1;
        else
          $numberOfBooks = $_GET['numBooks'];

        putenv("LANG=".$lang);
        setlocale(LC_ALL, $lang);
        $domain = "messages";
        bindtextdomain($domain, "locale");  //note that this works only in linux
        textdomain($domain);
        echo gettext("welcome");

        echo $numberOfBooks." ".ngettext('single_book', 'many_books', $numberOfBooks);
    ?> 
    </h1>
  </body>
</html>
