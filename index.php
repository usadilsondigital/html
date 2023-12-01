<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Website of Alderman Architecture.Includes support for branding.">
  <meta name="author" content="Adilson Jorda">
  <meta name="docsearch:language" content="en">
  <meta name="docsearch:version" content="1.0">

  <title>Alderman Architect</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="js/all.js"></script>
  <script src="js/index.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <link href="./css/all.css" rel="stylesheet">
  <link href="./css/index.css" rel="stylesheet">
  <!-- Favicons -->
  <link rel="apple-touch-icon" href="./images/logo3.png" sizes="180x180">
  <link rel="icon" href="./images/logo3.png" sizes="32x32" type="image/png">
  <link rel="icon" href="./images/logo3.png" sizes="16x16" type="image/png">
  <link rel="icon" href="./images/logo3.ico">

  <meta property="og:url" content="http://alderman-architect.com">
  <meta property="og:title" content="Alderman Architect">
  <meta property="og:description" content="Personal Website of Famous Architect Stuart Alderman.">
  <meta property="og:type" content="article">

  <script defer="" src="https://cdn.usefathom.com/script.js" data-site="ITUSEYJG"></script>

  <style>
    #myBtn {
      display: none;
      position: fixed;
      bottom: 20px;
      right: 30px;
      z-index: 99;
      font-size: 18px;
      border: none;
      outline: none;
      background-color: red;
      color: white;
      cursor: pointer;
      padding: 15px;
      border-radius: 4px;
    }

    #myBtn:hover {
      background-color: #555;
    }
  </style>


</head>

<body id="bodyIndex">
  <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa-regular fa-up-to-line"></i></button>

  <nav class="navbar " style="height: 100px;">
    <div class="container">
      <a class="navbar-brand" href="#">
      </a>
    </div>
  </nav>

  <div class="row g-0">
    <div class="col-1 g-0" style="border-top:10px black solid;text-align:right;padding-right:0px;">

      <img id="leftlogo" src="./images/logo4.png" alt="Logo Stuart" style="margin-top:15px;">
      <div class="vertical-menu">
        <a href="index.php" class="active">Home</a>
        <a href="bio.php">About</a>
        <a href="projects.php">Projects</a>
        <a href="contact.php">Contact</a>
      </div>
    </div>


    <div class="col-10 g-0" style="padding-left:35px;">

      <img src="./images/front/frontimage.jpg" alt="FrontImage" width="100%" height="280" style="opacity: 0.5;">
      <h3 style="margin-top:-5px;margin-bottom:0px;position:absolute;top:15%;"> <b>STUART M ALDERMAN</b></h3>
      <h3 style="position:absolute;top:20%;"> <b> ARCHITECT AIA</b></h3>
      <h4 style="position:absolute;top:25%;"> Design with a Personal Touch </h4>

      <div class="row g-0">
        <div class="col-7 g-0"><img src="./images/front/frontimage2.jpg" alt="FrontImage" width="100%" height="250" style="opacity: 0.5;"></div>
        <div class="col-5 g-0"><img src="./images/front/frontimage3.jpg" alt="FrontImage" width="100%" height="250" style="opacity: 0.5;"></div>
      </div>


    </div>



  </div>


  <div class="copyright">
    <span>Copyright <?php echo date("Y") ?> / Developed by Adilson</span>
  </div>



  <script>
    let mybutton = document.getElementById("myBtn");
    window.onscroll = function() {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }

    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>


</body>

</html>