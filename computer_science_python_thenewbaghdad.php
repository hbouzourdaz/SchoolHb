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
    <title>SchoolHb | Python Course</title>
  
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

    
  <!-- Page Content -->
  <div class="container">
  <nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="background:linear-gradient(to right,rgba(100,150,150, 1),rgba(150, 150, 150, 1))">
    <li class="breadcrumb-item" ><a href="welcome.php" style="color:white;">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="computer_science_python_thenewbaghdad.php" style="color:white;">Python</a></li>
  </ol>
</nav>
<!-- the actual content of this course ( Python Tutorials Arabic|| دورة برمجة بايثون )
     liste des chapitres-->

  <div class="accordion" id="accordionExample">
	<!-- Détails chapitre 1 -->
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Chapter 1 : Introduction
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_thenewbaghdad.php?video=1">&#10170  Why Python مقدمة الدورة</a><br>
        <a href="actualvideocontent_thenewbaghdad.php?video=2">&#10170  Install python تنصيب بايثون</a><br>
        <a href="actualvideocontent_thenewbaghdad.php?video=3">&#10170  First python app اول تطبيق بايثون</a><br>
        <a href="actualvideocontent_thenewbaghdad.php?video=4">&#10170  Python is Objects</a><br>
        <a href="actualvideocontent_thenewbaghdad.php?video=5">&#10170  Mutable and Immutable Object</a><br>
        <a href="actualvideocontent_thenewbaghdad.php?video=7">&#10170  Python Comments التعليقات</a><br>
      </div>
    </div>
  </div>
  <!-- Détails chapitre 2 -->
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Chapter 2 : Data Types
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_thenewbaghdad.php?video=6">&#10170  Python variables المتغيرات</a><br>
        <a href="actualvideocontent_thenewbaghdad.php?video=8">&#10170  Python lists and tuples السلاسل</a><br>
        <a href="actualvideocontent_thenewbaghdad.php?video=9">&#10170  Python Dictionary القاموس</a><br>
        <a href="actualvideocontent_thenewbaghdad.php?video=10">&#10170  Python Object id المعرف</a><br>
        <a href="actualvideocontent_thenewbaghdad.php?video=29">&#10170  Python|| Strings السلاسل النصية</a><br>
      </div>
    </div>
  </div>
  <!-- Détails chapitre 3 -->
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Chapter 3 : Procedural Programming
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_thenewbaghdad.php?video=12">&#10170  Python Math العمليات الرياضية</a><br>
        <a href="actualvideocontent_thenewbaghdad.php?video=13">&#10170  Python Bitwise</a><br>
        <a href="actualvideocontent_thenewbaghdad.php?video=18">&#10170  Python Debug تتبع التنفيذ</a><br>
        <a href="actualvideocontent_thenewbaghdad.php?video=26">&#10170  Python|| Functions الدوال</a><br>
        </div>
    </div>
  </div>
  <!-- Détails chapitre 4 -->
  <div class="card">
    <div class="card-header" id="headingFour">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
           Chapter 4 : Loops
        </button>
      </h2>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_thenewbaghdad.php?video=22">&#10170  Python|| While Loop العبارات التكرارية</a><br>
        <a href="actualvideocontent_thenewbaghdad.php?video=23">&#10170  Python|| iterator For Loop العبارات التكرارية</a><br>
        <a href="actualvideocontent_thenewbaghdad.php?video=24">&#10170  Python|| Nested Loop العبارات التكرارية متداخلة</a><br>
        <a href="actualvideocontent_thenewbaghdad.php?video=25">&#10170  Python|| Loop Control تحكم بالعبارات التكرارية</a><br>
      </div>
    </div>
  </div>
  <!-- Détails chapitre 5 -->
  <div class="card">
    <div class="card-header" id="headingFive">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
           Chapter 5 : Conditional statements
        </button>
      </h2>
    </div>
    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_thenewbaghdad.php?video=11">&#10170  Python Logic بوابات منطقية</a><br>
        <a href="actualvideocontent_thenewbaghdad.php?video=14">&#10170  Python Boolean operations</a><br>
        <a href="actualvideocontent_thenewbaghdad.php?video=15">&#10170  Python operation priorities</a><br>
        <a href="actualvideocontent_thenewbaghdad.php?video=19">&#10170  Python|| conditional "IF" العبارات الشرطية</a><br>
        <a href="actualvideocontent_thenewbaghdad.php?video=20">&#10170  Python|| conditional "IF- Else" العبارات الشرطية</a><br>
        <a href="actualvideocontent_thenewbaghdad.php?video=21">&#10170  Python|| conditional Nested IF العبارات الشرطية</a><br>
      </div>
    </div>
  </div>
  <!-- Détails chapitre 6 -->
  <div class="card">
    <div class="card-header" id="headingSix">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
           Chapter 6 : Object Oriented Programming
        </button>
      </h2>
    </div>
    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_thenewbaghdad.php?video=30">&#10170  Python OOP|| Basic Class</a><br>
        <a href="actualvideocontent_thenewbaghdad.php?video=31">&#10170  Python OOP|| Class Constructor</a><br>
        <a href="actualvideocontent_thenewbaghdad.php?video=32">&#10170  Python OOP|| kwargs</a><br>
        <a href="actualvideocontent_thenewbaghdad.php?video=33">&#10170  Python OOP|| Class Inheritance الوراثة</a><br>
        <a href="actualvideocontent_thenewbaghdad.php?video=34">&#10170  Python OOP|| method Overriding</a><br>

      </div>
    </div>
  </div>
  <!-- Détails chapitre 7 -->
  <div class="card">
    <div class="card-header" id="headingSeven">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
           Chapter 7 : Exceptions
        </button>
      </h2>
    </div>
    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_thenewbaghdad.php?video=28">&#10170  Python|| Exceptions اقتناص الاخطاء</a><br>
      </div>
    </div>
  </div>
  <!-- Détails chapitre 8 -->
  <div class="card">
    <div class="card-header" id="headingEight">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
           Chapter 8 : Databases
        </button>
      </h2>
    </div>
    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_thenewbaghdad.php?video=37">&#10170  Python|| Database Sqlite3 قواعد البيانات</a><br>
        <a href="actualvideocontent_thenewbaghdad.php?video=38">&#10170  Python|| Database Sqlite3 commit</a><br>
      </div>
    </div>
  </div>


</div>


    </div>
    <hr>


    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
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