<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SchoolHb | JAVA Course</title>
  
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
 <meta name="description" content="SchoolHb, A website to learn programming by reading articles..">
    <meta name="author" content="Hakim Bouzourdaz">
    <meta name="keywords" content="SchoolHb,Algorithm,Java,c,c++,vb,vb.net,c#,c#.net,Android,HTML,CSS,JavaScript,PHP,SQL,CMD,Linux,Networks,security,hacking,color picker,تعلم البرمجة من الصفر حتى الإحتراف,أفضل موقع لتعلم البرمجة,تعلم البرمجة من المحترفين,أفضل موقع عربي لتعليم البرمجة,أهم موقع لتعلم البرمجة,تعلم البرمجة ببساطة">

    <meta property="og:title" content="SchoolHb | Learn Programming by reading articles" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://hakim-tech.tk/" />
    <meta property="og:image" content="logo.jpg" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="300" />   
    <meta property="og:site_name" content="SchoolHb"/>
  <!-- favicon icon -->
  <link rel="icon" href="logo.jpg">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link href="https://fonts.googleapis.com/css2?family=Tajawal&display=swap" rel="stylesheet">

  <!-- Bootstrap core CSS -->  
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="http://hakim-tech.tk/dark-mode.css">  
  <style>img[alt="www.OOOwebhost.com"]{display: none}</style>
  <style>
 img[alt="www.000webhost.com"]{display:none;}
 </style>
 <meta name="google-site-verification" content="6s-xqNZ6z2XQ-fHwS0LzQSKn2gq-DJDDpnCySJ5E2AU" />
    
</head>
<body>
<nav class="mb-1 navbar fixed-top navbar-expand-lg navbar-dark special-color-dark">
      <a class="navbar-brand" href="index.html">
       <img src="logo.png" width="(30)" height="30" class="d-inline-block align-top" alt="" loading="lazy">
     </a>
     <div style="color:white;">School<span style="color:orange;">Hb&nbsp;&nbsp;&nbsp;</span></div>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
       aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
       <ul class="navbar-nav mr-auto">
           .
         <li class="nav-item active">
           <a class="nav-link" href="index.html"><i class="fas fa-home"></i> Home
             <span class="sr-only">(current)</span>
           </a>
         </li>
         <li class="nav-item ">
           <a class="nav-link" href="html_course_1.php">HTML</a>
         </li>
         <li class="nav-item ">
           <a class="nav-link" href="computer_science_python_thenewbaghdad.php">Python</a>
         </li>
         <li class="nav-item ">
           <a class="nav-link" href="computer_science_c++_thenewboston.php">C++</a>
         </li>
         <li class="nav-item ">
           <a class="nav-link" href="computer_science_java_learninglad.php">JAVA</a>
         </li>
         <li class="nav-item dropdown ">
           <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
             aria-haspopup="true" aria-expanded="false">Languages
           </a>
           <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
             <a class="dropdown-item" href="language_english_emma.php"><i class="fas fa-book"></i>  English</a>
             <div class="dropdown-divider"></div>
             <a class="dropdown-item" href="language_french_lingoni.php"><i class="fas fa-book"></i>  French</a>
           </div>
         </li>
       </ul>  
       <ul class="navbar-nav ml-auto nav-flex-icons">
           
         <li class="nav-item ">
               
           <a class="nav-link waves-effect waves-light" href="https://twitter.com/hbouzourdaz21" target="_blank">
             <i class="fab fa-twitter"></i>
           </a>
         </li>
           <li class="nav-item ">
           <a class="nav-link waves-effect waves-light" href="https://facebook.com/hbouzourdaz97" target="_blank">
             <i class="fab fa-facebook"></i>
           </a>
         </li>
         <li class="nav-item ">
           <a class="nav-link waves-effect waves-light" href="https://instagram.com/h_bouzourdaz" target="_blank">
             <i class="fab fa-instagram"></i>
           </a>
         </li>
         <li class="nav-item ">
           <a class="nav-link waves-effect waves-light" href="https://github.com/hbouzourdaz" target="_blank">
             <i class="fab fa-github"></i>
           </a>
         </li>
         <li class="nav-item ">
           <a class="nav-link waves-effect waves-light" href="https://linkedin.com/hbouzourdaz" target="_blank">
             <i class="fab fa-linkedin"></i>
           </a>
         </li>
       <li class="nav-item ">
           <a class="nav-link waves-effect waves-light" href="https://www.youtube.com/channel/UC9zuAcoQFtLEnOUD61sjHrg/?sub_confirmation=1" target="_blank">
             <i class="fab fa-youtube"></i>
           </a>
           </li>
       
           <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
               <i class="fas fa-user"></i>
             </a>
             <div class="dropdown-menu dropdown-menu-right dropdown-default"
               aria-labelledby="navbarDropdownMenuLink-333">
               <a class="dropdown-item" href="reset-password.php" title="Rest your Password"><i class="fas fa-key"></i>  Change Password</a>
               <a class="dropdown-item" href="logout.php" ><i class="fas fa-sign-out-alt"></i>  Sign Out</a>
             </div>
           </li>
       </ul>
         
     </div>
   </nav>
<div class="alert alert-primary" role="alert">
  .
</div>
    
    

    
    
<!--/.Navbar -->
    
<div class="container">
<?php
      $lien="";
      $nom_vid="";
      $chapitre="";
      if (isset($_GET['video'])){
        switch ($_GET['video']) {
          case '1':
            $lien="https://www.youtube.com/embed/KD6VuIbfIew";
            $nom_vid="Introduction to Java Programming, Its History, Why Study it";
            $chapitre="0";
            break;
          case '2':
            $lien="https://www.youtube.com/embed/fhfVkPpIwjk";
            $nom_vid="How Java Program Works, Compiler, Interpreter";
            $chapitre="0";
            break;
          case '4':
            $lien="https://www.youtube.com/embed/9kLmgpBmNpk";
            $nom_vid="How To Download and Install Eclipse IDE for Java Programming";
            $chapitre="0";
            break;
          case '5':
            $lien="https://www.youtube.com/embed/U034JnDiaJs";
            $nom_vid="My First Java Hello World Program";
            $chapitre="0";
            break;
          case '7':
            $lien="https://www.youtube.com/embed/mXBIrwv-JY0";
            $nom_vid="Java Primitive Data Types, Variables";
            $chapitre="1";
            break;
          case '8':
            $lien="https://www.youtube.com/embed/z85Vg9S3i-I";
            $nom_vid="Creating and using Variables.";
            $chapitre="1";
            break;
          case '13':
            $lien="https://www.youtube.com/embed/LSxh_3y-Vco";
            $nom_vid="Strings in Java Programming";
            $chapitre="1";
            break;
          case '26':
            $lien="https://www.youtube.com/embed/psQQLAosB84";
            $nom_vid="Arrays in Java Programming";
            $chapitre="2";
            break;
          case '27':
            $lien="https://www.youtube.com/embed/n2U6ZOhv8ng";
            $nom_vid="How to Declare and initialise Arrays in different ways";
            $chapitre="2";
            break;
          case '28':
            $lien="https://www.youtube.com/embed/RTvTcpvhcl4";
            $nom_vid="Array User Input using For Loop";
            $chapitre="2";
            break;
          case '29':
            $lien="https://www.youtube.com/embed/_86FMWNfGOc";
            $nom_vid="Copying Array and its Elements";
            $chapitre="2";
            break;
          case '31':
            $lien="https://www.youtube.com/embed/udHgmxK9oAI";
            $nom_vid="Two Dimensional ( 2 D ) Array with Example";
            break;
          case '33':
            $lien="https://www.youtube.com/embed/d8x5Nciymjs";
            $nom_vid="Three Dimensional Array ( 3 D )";
            $chapitre="2";
            break;
          case '9':
            $lien="https://www.youtube.com/embed/YvKnA5Bt0vc";
            $nom_vid="Basic and Compound Arithmetic Operators";
            $chapitre="3";
            break;
          case '10':
            $lien="https://www.youtube.com/embed/igoEVH1dv-E";
            $nom_vid="Increment and Decrement Operators";
            $chapitre="3";
            break;
          case '15':
            $lien="https://www.youtube.com/embed/rN_dt3BSRXo";
            $nom_vid="Comparison Operators";
            $chapitre="3";
            break;
          case '16':
            $lien="https://www.youtube.com/embed/KTvZkBfFR8U";
            $nom_vid="IF ELSE Conditional Statements";
            $chapitre="4";
            break;
          case '17':
            $lien="https://www.youtube.com/embed/cV3Qo1TJ6ns";
            $nom_vid="Nested IF ELSE Statements";
            $chapitre="4";
            break;
          case '18':
            $lien="https://www.youtube.com/embed/qdudJfu2C04";
            $nom_vid="Ternary Opeartor in Java Programming";
            $chapitre="4";
            break;
          case '19':
            $lien="https://www.youtube.com/embed/2o0jEUhOqaw";
            $nom_vid="Logical Operators in Java Programming";
            $chapitre="4";
            break;
          case '25':
            $lien="https://www.youtube.com/embed/SYpEBREKJuI";
            $nom_vid="Switch Statement in Java Programming";
            $chapitre="4";
            break;
          case '20':
            $lien="https://www.youtube.com/embed/AsRphSuU2OI";
            $nom_vid="Looping with While Loop";
            $chapitre="5";
            break;
          case '21':
            $lien="https://www.youtube.com/embed/GNlXEBVkksg";
            $nom_vid="DO WHILE Loop";
            $chapitre="5";
            break;
          case '22':
            $lien="https://www.youtube.com/embed/MHtLSle7YYg";
            $nom_vid="For Loop With Example";
            $chapitre="5";
            break;
          case '23':
            $lien="https://www.youtube.com/embed/-WGZ96NPzNA";
            $nom_vid="BREAK Statement in Java";
            $chapitre="5";
            break;
          case '24':
            $lien="https://www.youtube.com/embed/U0gWWEZTh1o";
            $nom_vid="Continue Statement in Java";
            $chapitre="5";
            break;/*breakpoint*/
          case '41':
            $lien="https://www.youtube.com/embed/0wGq6yZNn60";
            $nom_vid="Classes, Objects, Methods";
            $chapitre="6";
            break;
          case '43':
            $lien="https://www.youtube.com/embed/OArkHvK3gOk";
            $nom_vid="Public, Default Access Specifiers, Packages";
            $chapitre="6";
            break;
          case '44':
            $lien="https://www.youtube.com/embed/OkZtn36U6-w";
            $nom_vid="Method Overloading, Nesting";
            $chapitre="6";
            break;
          case '46':
            $lien="https://www.youtube.com/embed/QkepUID9F-U";
            $nom_vid="Java Data Types and Default Values";
            $chapitre="6";
            break;
          case '47':
            $lien="https://www.youtube.com/embed/1qLzmHoGLaQ";
            $nom_vid="Class Constructors with Example";
            $chapitre="6";
            break;
          case '48':
            $lien="https://www.youtube.com/embed/4wQFTtnxofY";
            $nom_vid="Static Keyword, Methods, Variables";
            $chapitre="6";
            break;
          case '49':
            $lien="https://www.youtube.com/embed/xtn6og_CEic";
            $nom_vid="Java Private Access Specifiers";
            $chapitre="6";
            break;
          case '50':
            $lien="https://www.youtube.com/embed/NbpfMe1YaCA";
            $nom_vid="Java this Keyword with Example";
            $chapitre="6";
            break;/*breakpoint*/

          default:
            # code...
            break;
        }
      }
   ?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="background:linear-gradient(to right,rgba(100,150,150, 1),rgba(150, 150, 150, 1))">
    <li class="breadcrumb-item" ><a href="welcome.php" style="color:white;">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="language_english_emma.php" style="color:white;">JAVA</a></li>
    <li class="breadcrumb-item active" aria-current="page" style="color:white;"><?php echo $nom_vid ?></li>
  </ol>
</nav>


<div class="video_accordian_container">
    <div class="row">
        <div class="col-md-8">
          <!-- The actual video content -->
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="<?php echo isset($lien)?$lien:''; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <hr>
        </div>
        <div class="col-md-4">
          <!-- The lessons within the same chapter  -->
          <?php
              if (isset($chapitre)){
                switch ($chapitre) {
                  case '0':
                    echo '<!-- Détails chapitre 0 -->
                    <div class="card">
                      <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                          <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Chapter 0 : Introduction
                          </button>
                        </h2>
                      </div>

                      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                          <a href="actualvideocontent_learninglad.php?video=1">&#10170  Introduction to Java Programming, Its History, Why Study it</a><br>
                          <a href="actualvideocontent_learninglad.php?video=2">&#10170  How Java Program Works, Compiler, Interpreter</a><br>
                          <a href="actualvideocontent_learninglad.php?video=4">&#10170  How To Download and Install Eclipse IDE for Java Programming</a><br>
                          <a href="actualvideocontent_learninglad.php?video=5">&#10170  My First Java Hello World Program</a><br>
                        </div>
                      </div>
                    </div>';
                    break;
                  case '1':
                    echo '<!-- Détails chapitre 1 -->
                    <div class="card">
                      <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                          <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                            Chapter 1 : Manipulating data types
                          </button>
                        </h2>
                      </div>
                      <div id="collapseTwo" class="collapse show"  aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                          <a href="actualvideocontent_learninglad.php?video=7">&#10170  Java Primitive Data Types, Variables </a><br>
                          <a href="actualvideocontent_learninglad.php?video=8">&#10170  Creating and using Variables </a><br>
                          <a href="actualvideocontent_learninglad.php?video=13">&#10170  Strings in Java Programming</a><br>
                        </div>
                      </div>
                    </div>';
                    break;
                  case '2':
                    echo '<!-- Détails chapitre 2 -->
                    <div class="card">
                      <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                          <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                            Chapter 2 : Manipulating Arrays
                          </button>
                        </h2>
                      </div>
                      <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                          <a href="actualvideocontent_learninglad.php?video=26">&#10170  Arrays in Java Programming </a><br>
                          <a href="actualvideocontent_learninglad.php?video=27">&#10170  How to Declare and initialise Arrays in different ways</a><br>
                          <a href="actualvideocontent_learninglad.php?video=28">&#10170  Array User Input using For Loop</a><br>
                          <a href="actualvideocontent_learninglad.php?video=29">&#10170  Copying Array and its Elements</a><br>
                          <a href="actualvideocontent_learninglad.php?video=31">&#10170  Two Dimensional ( 2 D ) Array with Example</a><br>
                          <a href="actualvideocontent_learninglad.php?video=33">&#10170  Three Dimensional Array (3 D )</a><br>
                        </div>
                      </div>
                    </div>';
                    break;
                  case '3':
                    echo '<!-- Détails chapitre 3 -->
                    <div class="card">
                      <div class="card-header" id="headingFour">
                        <h2 class="mb-0">
                          <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                             Chapter 3 : Operators
                          </button>
                        </h2>
                      </div>
                      <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordionExample">
                        <div class="card-body">
                          <a href="actualvideocontent_learninglad.php?video=9">&#10170  Basic and Compound Arithmetic Operators</a><br>
                          <a href="actualvideocontent_learninglad.php?video=10">&#10170  Increment and Decrement Operators </a><br>
                          <a href="actualvideocontent_learninglad.php?video=15">&#10170  Comparison Operators </a><br>
                        </div>
                      </div>
                    </div>';
                    break;
                  case '4':
                    echo '<!-- Détails chapitre 4 -->
                    <div class="card">
                      <div class="card-header" id="headingFive">
                        <h2 class="mb-0">
                          <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                             Chapter 4 : Conditional statements
                          </button>
                        </h2>
                      </div>
                      <div id="collapseFive" class="collapse show" aria-labelledby="headingFive" data-parent="#accordionExample">
                        <div class="card-body">
                          <a href="actualvideocontent_learninglad.php?video=16">&#10170  IF ELSE Conditional Statements</a><br>
                          <a href="actualvideocontent_learninglad.php?video=17">&#10170  Nested IF ELSE Statements</a><br>
                          <a href="actualvideocontent_learninglad.php?video=18">&#10170  Ternary Opeartor in Java Programming</a><br>
                          <a href="actualvideocontent_learninglad.php?video=19">&#10170  Logical Operators in Java Programming</a><br>
                          <a href="actualvideocontent_learninglad.php?video=25">&#10170  Switch Statement in Java Programming</a><br>
                        </div>
                      </div>
                    </div>';
                    break;
                  case '5':
                    echo '<!-- Détails chapitre 5 -->
                   <div class="card">
                     <div class="card-header" id="headingSix">
                       <h2 class="mb-0">
                         <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                             Chapter 5 : Loops
                         </button>
                       </h2>
                     </div>
                     <div id="collapseSix" class="collapse show" aria-labelledby="headingSix" data-parent="#accordionExample">
                       <div class="card-body">
                         <a href="actualvideocontent_learninglad.php?video=20">&#10170  Looping with While Loop </a><br>
                         <a href="actualvideocontent_learninglad.php?video=21">&#10170  DO WHILE Loop.</a><br>
                         <a href="actualvideocontent_learninglad.php?video=22">&#10170  For Loop With Example</a><br>
                         <a href="actualvideocontent_learninglad.php?video=23">&#10170  BREAK Statement in Java</a><br>
                         <a href="actualvideocontent_learninglad.php?video=24">&#10170  Continue Statement in Java</a><br>
                       </div>
                     </div>
                   </div>';
                    break;
                  case '6':
                    echo '<!-- Détails chapitre 6 -->
                    <div class="card">
                      <div class="card-header" id="headingSeven">
                        <h2 class="mb-0">
                          <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                              Chapter 6 : Object Oriented Programming
                          </button>
                        </h2>
                      </div>
                      <div id="collapseSeven" class="collapse show" aria-labelledby="headingSeven" data-parent="#accordionExample">
                        <div class="card-body">
                          <a href="actualvideocontent_learninglad.php?video=41">&#10170  Classes, Objects, Methods</a><br>
                          <a href="actualvideocontent_learninglad.php?video=43">&#10170  Public, Default Access Specifiers, Packages</a><br>
                          <a href="actualvideocontent_learninglad.php?video=44">&#10170  Method Overloading, Nesting</a><br>
                          <a href="actualvideocontent_learninglad.php?video=46">&#10170  Java Data Types and Default Values</a><br>
                          <a href="actualvideocontent_learninglad.php?video=47">&#10170  Class Constructors with Example</a><br>
                          <a href="actualvideocontent_learninglad.php?video=48">&#10170  Static Keyword, Methods, Variables</a><br>
                          <a href="actualvideocontent_learninglad.php?video=49">&#10170  Java Private Access Specifiers</a><br>
                          <a href="actualvideocontent_learninglad.php?video=50">&#10170  Java this Keyword with Example</a><br>
                        </div>
                      </div>
                    </div>';
                    break;
                }
              }
          ?>
        </div>
    </div>
</div>
</div>


    
    
    
    
    
    
  <!-- Footer -->
<footer class="page-footer font-small special-color-dark pt-4">

<!-- Footer Elements -->
<div class="container">
        
<div align="center">
    <a href="https://linktr.ee/hbouzourdaz" class="btn btn-red btn-xl shadow text-center ">Subscribe</a></div>
</div>
<div class="container text-center text-md-left mt-5">

  <!-- Grid row -->
  <div class="row mt-3">

    <!-- Grid column -->
    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

      <!-- Content -->
      <h6 class="text-uppercase font-weight-bold">School<span style="color:orange;">Hb&nbsp;&nbsp;&nbsp;</span></h6>
      <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
      <p>You can visit my personel account on:</p>
        <ul class="list-unstyled list-inline text-center">
      
          <li class="list-inline-item">
            <a class="btn-floating btn-fb mx-1" href="https://facebook.com/hbouzourdaz2I">
              <i class="fab fa-facebook"> </i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn-floating btn-tw mx-1" href="https://twitter.com/hbouzourdaz21">
              <i class="fab fa-twitter"> </i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn-floating btn-li mx-1" href="https://instagram.com/hbouzourdaz21">
              <i class="fab fa-instagram"> </i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn-floating btn-dribbble mx-1" href="https://www.youtube.com/channel/UC9zuAcoQFtLEnOUD61sjHrg/?sub_confirmation=1">
              <i class="fab fa-youtube"> </i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn-floating btn-li mx-1" href="https://github.com/hbouzourdaz">
              <i class="fab fa-github"> </i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn-floating btn-li mx-1" href="https://linkedin.com/hbouzourdaz">
              <i class="fab fa-linkedin"> </i>
            </a>
          </li>
        </ul>

    </div>
    <!-- Grid column -->
    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

      <!-- Links -->
      <h6 class="text-uppercase font-weight-bold">Useful links</h6>
      <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
      <p>
        <a href="privacy.html">Privacy Policy</a>
      </p>
      <p>
        <a href="terms.html">Terms</a>
      </p>

    </div>
    <!-- Grid column -->
    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

      <!-- Links -->
      <h6 class="text-uppercase font-weight-bold">Category</h6>
      <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
      <p>
        <a href="html_course_1.php">HTML</a>
      </p>
      <p>
        <a href="computer_science_python_thenewbaghdad.php">Python</a>
      </p>
      <p>
        <a href="computer_science_c++_thenewboston.php">C++</a>
      </p>
      <p>
        <a href="computer_science_java_learninglad.php">JAVA</a>
      </p>
      <p>
        <a href="language_english_emma.php">English</a>
      </p>
      <p>
        <a href="language_french_lingoni.php">French</a>
      </p>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

      <!-- Links -->
      <h6 class="text-uppercase font-weight-bold">Contact</h6>
      <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
      <p>
        <a href="https://www.google.com/maps/place/Beni+Ourtilane/@36.431185,4.7385733,12z/data=!3m1!4b1!4m5!3m4!1s0x128cd99e0e693383:0x9e7e9b31ce1bfe4a!8m2!3d36.441325!4d4.8505566"><i class="fas fa-home mr-3"></i> Sétif, Beni Ouertilane, ALGERIA</a></p>
      <p></p>
        <a href="mailto:hbouzourdaz@gmail.com"><i class="fas fa-envelope mr-3"></i> hbouzourdaz@gmail.com</a>  
      </p>
      <p>
        <i class="fas fa-phone mr-3"></i> + 213 792573095</p>
        <p>
          <i class="fas fa-phone mr-3"></i> + 213 780559817</p>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</div>
<!-- Footer Elements -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3" >
  &copy; &nbsp;<script>document.write(new Date().getFullYear());</script> SchoolHb, Inc.
  by &nbsp;<a href="https://twitter.com/hbouzourdaz21">@hbouzourdaz21</a>
  
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->
<!-- End your project here-->

<!-- jQuery -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->  
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<!-- Your custom scripts (optional) -->
<script type="text/javascript" src="http://hakim-tech.tk/js.js"></script>
<script LANGUAGE="JavaScript">
<!--
//Disable right click script III- By Renigade (renigade@mediaone.net) //Disable select-text script (IE4+, NS6+)- By Andy Scott //Visit http://hashem-earn-from-internet.blogspot.com/ 
var message=""; 
function clickIE() {
if (document.all) {
(message);return false;
}
} function clickNS(e) { 
if (document.layers||(document.getElementById&&!document.all)) { 
if (e.which==2||e.which==3) { (message); return false;
} } } if (document.layers) { document.captureEvents(Event.MOUSEDOWN); 
document.onmousedown=clickNS;
} else { document.onmouseup=clickNS;
document.oncontextmenu=clickIE; 
} document.oncontextmenu=new Function("return false")
function disableselect(e) { return false } function reEnable() { return true } 
document.onselectstart=new Function ("return false") //if NS6 if (window.sidebar){ document.onmousedown=disableselect document.onclick=reEnable } //
//-->
</SCRIPT>   
</body>
<!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v10.0'
        });
      };

      (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <!-- Your Chat Plugin code -->
    <div class="fb-customerchat"
      attribution="setup_tool"
      page_id="103537604888325">
    </div>
</html>