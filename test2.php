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
        <div class="row" style="background-color:#4286f4; border: 05px solid black;">
        <div><h1 style="text-align:center;">HOUND DOG'S</h1></div>
                  <div><h1 style='text-align:center;'>Click on the one You wanna know more about!!</h1></div>

          <div class="col-md-2">
                     <?php
                          $thexmlfile=file_get_contents("pictureData.xml");
                          $xml = new SimpleXMLElement($thexmlfile);

                            //$count = count($xml->album[0]->img);

                            for ($x = 1; $x <= 1; $x++) {
                              for ($y =0 ; $y <=0 ; $y++){
                              $folder = (string)$xml->attributes()->url[0];
                              $catgr = (string)$xml->album[$x]->attributes()->url[0];
                              $name = (string)$xml->album[$x]->img[$y]->attributes()->thumb;           
                              $path = $folder."".$catgr."".$name;
                          echo "<a href = 'test2.1.php'> <img src = '$path' class='center-block image-responsive' /> </a><a href = 'test2.1.php'> <h2 style='text-align:center'>Basset Hound</h2></a><br><br>";
                          }
                        }
                    ?>   
          </div>
          
          <div class="col-md-2">
                     <?php
                          $thexmlfile=file_get_contents("pictureData.xml");
                          $xml = new SimpleXMLElement($thexmlfile);

                            //$count = count($xml->album[0]->img);

                            for ($x = 1; $x <= 1; $x++) {
                              for ($y =1 ; $y <=1 ; $y++){
                              $folder = (string)$xml->attributes()->url[0];
                              $catgr = (string)$xml->album[$x]->attributes()->url[0];
                              $name = (string)$xml->album[$x]->img[$y]->attributes()->thumb;           
                              $path = $folder."".$catgr."".$name;
                          echo "<a href = 'test2.2.php'> <img src = '$path' class='center-block image-responsive' /> </a> <a href = 'test2.2.php'><h2 style='text-align:center'>Beagle</h2></a> <br><br>";
                          }
                        }
                    ?>   
          </div>
          
          <div class="col-md-2">
                     <?php
                          $thexmlfile=file_get_contents("pictureData.xml");
                          $xml = new SimpleXMLElement($thexmlfile);

                            //$count = count($xml->album[0]->img);

                            for ($x = 1; $x <= 1; $x++) {
                              for ($y =2 ; $y <=2 ; $y++){
                              $folder = (string)$xml->attributes()->url[0];
                              $catgr = (string)$xml->album[$x]->attributes()->url[0];
                              $name = (string)$xml->album[$x]->img[$y]->attributes()->thumb;           
                              $path = $folder."".$catgr."".$name;
                          echo "<a href = 'test2.3.php'> <img src = '$path' class='center-block image-responsive' /> </a><a href = 'test2.3.php'><h2 style='text-align:center'>Whippet</h2></a> <br><br>";
                          }
                        }
                    ?>   
          </div>
          
            
          <div class="col-md-2">
                     <?php
                          $thexmlfile=file_get_contents("pictureData.xml");
                          $xml = new SimpleXMLElement($thexmlfile);

                            //$count = count($xml->album[0]->img);

                            for ($x = 1; $x <= 1; $x++) {
                              for ($y =3 ; $y <=3 ; $y++){
                              $folder = (string)$xml->attributes()->url[0];
                              $catgr = (string)$xml->album[$x]->attributes()->url[0];
                              $name = (string)$xml->album[$x]->img[$y]->attributes()->thumb;           
                              $path = $folder."".$catgr."".$name;
                          echo "<a href = 'test2.4.php'> <img src = '$path' class='center-block image-responsive' /> </a><a href = 'test2.4.php'><h2 style='text-align:center'>Plott Hound</h2></a> <br><br>";
                          }
                        }
                    ?>   
          </div>
          
          
          <div class="col-md-2">
                     <?php
                          $thexmlfile=file_get_contents("pictureData.xml");
                          $xml = new SimpleXMLElement($thexmlfile);

                            //$count = count($xml->album[0]->img);

                            for ($x = 1; $x <= 1; $x++) {
                              for ($y =4 ; $y <=4 ; $y++){
                              $folder = (string)$xml->attributes()->url[0];
                              $catgr = (string)$xml->album[$x]->attributes()->url[0];
                              $name = (string)$xml->album[$x]->img[$y]->attributes()->thumb;           
                              $path = $folder."".$catgr."".$name;
                          echo "<a href = 'test2.5.php'> <img src = '$path' class='center-block image-responsive' /> </a><a href = 'test2.5.php'> <h2 style='text-align:center'>Irish Woulfhound</h2></a><br><br>";
                          }
                        }
                    ?>   
          </div> 
    
          <div class="col-md-2">
                     <?php
                          $thexmlfile=file_get_contents("pictureData.xml");
                          $xml = new SimpleXMLElement($thexmlfile);

                            //$count = count($xml->album[0]->img);

                            for ($x = 1; $x <= 1; $x++) {
                              for ($y =5 ; $y <=5 ; $y++){
                              $folder = (string)$xml->attributes()->url[0];
                              $catgr = (string)$xml->album[$x]->attributes()->url[0];
                              $name = (string)$xml->album[$x]->img[$y]->attributes()->thumb;           
                              $path = $folder."".$catgr."".$name;
                          echo "<a href = 'test2.6.php'> <img src = '$path' class='center-block image-responsive' /> </a> <a href = 'test2.6.php'><h2 style='text-align:center'>Dacshhund</h2></a> <br><br>";
                          }
                        }
                    ?>   
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

  

</body>
</html>