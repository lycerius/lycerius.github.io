<?php
  function createHeader($relatedJS){
    $header = "<!DOCTYPE html>
    <html>
    <head>
    <meta charset='utf-8' />
    <title>Do I suck at: Overwatch</title>
    <link rel='stylesheet' type='text/css' href='css/reset.css' />
    <link rel='stylesheet' type='text/css' href='css/main.css'  />
    <link rel='shortcut icon' type='image/x-icon' href='images/favicon.ico' />
    <script src='https://code.jquery.com/jquery-3.1.1.min.js'></script>";
    if(!is_null($relatedJS)){$header = $header . "<script src='javascript\\" . $relatedJS . "'></script>";}
    $header = $header . "
    <script src='javascript\\api.js'></script>
    </head>
    <body>
    <div id='banner' style='background-image: url(images/maxresdefault.jpg); background-position: -30px;'>
      <center>
        <h1>Do you suck at</h1><br />
        <image src='images\overwatch_logo_by_feeerieke-da4xuzp_fix.png' height='256px' width='50%'/>
      </center>
    </div>
    <ul>
      <li><a href='byname.php'>Search By Name</a></li>
      <li><a href='compare.php'>Compare By Name</a></li>
      <li><a href='#By Char'>Search By Character</a></li>
      <li><a href='#compare 2'>Compare By Character</a></li>
    </ul>
    <br  />
    ";
    echo $header;
  }

  function endPage(){echo "</body></html>";}

  function createUsernameBox($id){
    echo "<input type=\"text\" id='" . $id . "' class=\"materialText\" name='" . $id . "' placeholder=\"Battletag#Number\" value='";
    if(isset($_GET[$id]))
    {
      echo $_GET[$id];
    }
    else{
      echo "";
    }
    echo "'/>";
  }

  function createSubmitButton(){
    echo "<input type='submit' value='Search' class='materialButton' />";
  }


?>
