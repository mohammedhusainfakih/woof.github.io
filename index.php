<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <style>
      h1,h2{
              	font-family: 'Lobster', cursive;
              }
      .bgimg{
            background-image: url('img/head.jpg');
          } 
          a {color:#000307;}      /* unvisited link */
          a:hover {color:#e1f409;}  /* mouse over link */
    </style>
  </head>
  <body background="img/dogwall.png">
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="page-header">
              <h1>
                <font size="28">Woof...Woof...
                  <small style="color: black;">The complete pet shop.</small>
                </font>
              <img style="text-align:right;" src="img/dog.png">
              </h1>

            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div  class="col-md-12 bgimg">
            <h1  class="text-right"><font size="20">"When a dog is in your life, there's always a reason to laugh!"</font></h1>
            <p class="text-center">&nbsp;
            <br>&nbsp;
            <br>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
                <div>
        <h1>What would you prefer?<small style="color: black;">(Click on the prefered category, to know more about its different breeds!)</small></h1>
      </div>
        <div style="margin-right:20px; margin-left: 20px; text-align: center;padding: 20px;">
          <div style="background-color:#4286f4; border: 05px solid black; margin-right:20px;padding: 20px;" class="col-md-3">
            <?php
            $thexmlfile=file_get_contents( "pictureData.xml"); 
            $xml= new SimpleXMLElement($thexmlfile);
            $folder= (string)$xml->attributes()->url[0];
            $catgr = (string)$xml->album[0]->attributes()->url[0];
            $name = (string)$xml->album[0]->img->attributes()->thumb[0];
            $path = $folder."".$catgr."".$name; 
            echo "<a href='test1.php'> <img src='$path' class='center-block img-responsive'> </a>";
            ?>
            <h2><a href="test1.php">Non-Sporting</a></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,
              <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
              <br>Ut enim ad minim veniam, quis nostrud</p>
          </div>
          <div style="background-color:#4286f4; border: 05px solid black;padding: 20px;" class="col-md-3">
            <?php
             $thexmlfile=file_get_contents( "pictureData.xml"); 
             $xml= new SimpleXMLElement($thexmlfile); 
             $catgr= (string)$xml->album[1]->attributes()->url[0]; 
             $name = (string)$xml->album[1]->img->attributes()->thumb[0];
             $path = $folder."".$catgr."".$name; 
             echo "<a href='test2.php'> <img src='$path' class='center-block img-responsive'> </a>"; 
             ?>
            <h2><a href="test2.php">Hound</a></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,
              <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
              <br>Ut enim ad minim veniam, quis nostrud</p>
          </div>
          <div style="background-color:#4286f4; border: 05px solid black;margin-left:20px ;padding: 20px;" class="col-md-3">
            <?php
             $thexmlfile=file_get_contents( "pictureData.xml"); 
             $xml= new SimpleXMLElement($thexmlfile); 
             $catgr= (string)$xml->album[2]->attributes()->url[0];
             $name = (string)$xml->album[2]->img->attributes()->thumb[0];
             $path = $folder."".$catgr."".$name; 
             echo "<a href='test3.php'> <img src='$path' class='center-block img-responsive'> </a>"; 
            ?>
            <h2><a href="test3.php">Sporting</a></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,
              <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
              <br>Ut enim ad minim veniam, quis nostrud</p>
          </div>
          </div>
         </div>
      </div>
    </div>
    <footer class="section section-primary">
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <h1>Woof...Woof...<small style="color: white;">The complete pet shop.</small></h1>
            <p>131, B , Midnight Boulevard
              <br>Entilio park, opp. Dr.peepers clinic.
              <br>San Francisco - 94101, California.
              <br>E-mail: help@woofwoof.com
              <br>Contact: +44-235-84-95</p>
          </div>
          <div class="col-sm-4">
           <a href="index.php"> <img src="img/woof.jpg"></a>
          </div>
          <div class="col-sm-4">
            <p class="text-info text-right">
              <br>
            </p>
            <h2 align="center">Stay Connected With us!!!</h2>
            <br>
            <p></p>
            <div class="row">
              <div class="col-md-12 hidden-lg hidden-md hidden-sm text-left">
                <a href="#"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a>
                <a href="#"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a>
                <a href="#"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a>
                <a href="#"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 hidden-xs text-center">
                <a href="https://www.instagram.com"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a>
                <a href="https://www.twitter.com"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a>
                <a href="https://www.facebook.com"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a>
                <a href="https://www.github.com"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  

</body></html>