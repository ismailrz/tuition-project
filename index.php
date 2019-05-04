<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <style type="text/css">

     #SearchInput{min-width: 230px;max-height: 28px}
     #SearchButton{min-width: 40px;max-height: 28px}

     #menu{max-width:100%;box-sizing:border-box;cursor:pointer;text-align:center;padding:19px 33px;font-size:21px;color:white;display:none;}

     @media screen and (max-width:770px){
nav ul{max-height:0px;display:none;}
nav ul li a{box-sizing:border-box;width:100%;}
#menu{display:block;}
#showing{max-height:20em;}
}

   </style>

</head>

<body>

 <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="container-fluidn" id="menu">Menu <i class="fa fa-angle-down"></i></div>
    <ul class="nav navbar-nav" id="showing">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="tutor_post.php">Find Tutor</a></li>
      <li><a href="providerdetails.php">Find Student</a></li>
      <li><a href="AboutUs.php">About Us</a></li>
     <li > <a  href="login.php"><span class="glyphicon glyphicon-user"></span><i> SignUp Or Login</i> </a></li>
    <!--  <li > <a  href="login.php"><span class="glyphicon glyphicon-user"></span> Login </a></li>!-->

<!--<ul class="nav navbar-nav navbar-midlle">

 <form class="navbar-form navbar-left">
  <div class="input-group">
    <input id="SearchInput" type="text" class="form-control" placeholder="Search">
    <div class="input-group-btn">

      <button id="SearchButton" class="btn btn-success" type="submit">
        <i class="glyphicon glyphicon-search"></i>
      </button>
    </div>
  </div>
</form>>!-->

    </ul>
  </div>
</nav>

  <div class="container-fluidn">
  <section class="container-fluid" style="background:#001834;min-height: 550px;margin-top:52px ">
   <br><br><br> <header style="text-align: center;color: white;font-size: 52px;font-weight: bold">Online Tuition Offer</header>
     <div class="container">
       <p style="color: white;font-size: 22px;padding-left: 73px">Tuition Offer  Is One of the  Most Popular Website For Finding Qualified Teacher And</p>
       <p style="color: white;font-size: 22px;padding-left: 165px"> It Also Provide's Easy To Find Student Who Is Seeking Tuition.</p>
     </div>

     <div class="container" style="margin-top: 85px;text-align: center;">
        <strong style="font-size: 24px;color:#FF9800">Are You Tuition Provider ?</strong><br>
         <a class="btn btn-success btn-lg" href="provider_form.php"  style="margin-top: 22px">Click Here</a>
     </div>


  </section>
</div>

<div class="container">
  <h3 style="text-align: center;margin-top: 66px;font-size: 45px">
    About Online Tution Provider
  </h3>
  <p style="font-size: 23px">Professional instructors and peer tutors work with students  in all locations.
 Offering online  tutoring services in popular classes like  English,Math, Physics, and so on,
 TuitionOffer.com a is a great place to find the right tutor to help you succeed.</p>
</div>

<div class="container" style="margin-top: 122px;">
   <div class="container" style="max-width: 380px;float: left;padding-left: 30px;font-size:18px " id="regiseter">
       <img style="max-width: 260px ;max-height: 180px" src="image/p1.jpg">
          <h2 style="">Register</h2>
             <p>This is  a simple way to get a tuition job via Online Tuition Offer.
                 Create your account and wait for a phone call or email.</p>
   </div>
   <div class="container" style="max-width: 380px;float: left;padding-left: 30px;font-size:18px " id="tutor">
        <img  style="max-width: 260px ;max-height: 180px" src="image/p2.jpg">
          <h2 style="">Tutor</h2>
            <p>Just  wait for the applications from our listed tutors.
               You may also search for a qualified tutor directly from our Tutors list.</p>
   </div>
   <div class="container" style="max-width: 380px;float: left;padding-left: 30px;font-size: 18px" id="provider">
       <img style="max-width: 260px ;max-height: 180px" src="image/p3.jpg">
         <h2 style="">Providers</h2>
           <p>You are on the way of getting a tuition job.
             Please view our latest circulars regularly and apply for the tuition jobs that match with your skills.</p>
   </div>
 </div>

   <div class="container " style="margin-top:74px;text-align: center;">
     <h2 >Tutor Must Complete The Step</h2>
     <p style="margin-bottom:54px;font-size: 18px">In our website tutor must follow this sequece to communicate with tution provider and get notification from our system.</p>

    <div class="container" style="max-width:200px ;float:left;">
        <img style="max-width: 220px ;max-height: 150px;" class="img-circle" src="image/p1.jpg">
         <h4><a href="#"> Registration</a></h4>
     </div>
     <div class="container" style="max-width:200px ;float: left;margin-top: 60px">
       <strong>----------------------------></strong>
     </div>

      <div class="container" style="max-width:200px ;float: left;">
        <img style="max-width: 220px ;max-height: 150px" class="img-circle" src="image/p4.jpg">
         <h4><a href="#"> Fill Up Tutor Requirment Form</a></h4>
     </div>

     <div class="container" style="max-width:200px ;float: left;margin-top: 60px">
       <strong>----------------------------></strong>
     </div>

     <div class="container" style="max-width:200px ;float: left;">
        <img style="max-width: 220px ;max-height: 150px" class="img-circle" src="image/p5.jpg">
         <h4>Communication With Provider</h4>
     </div>
   </div>

<div class="container-fluidn" style="margin-top: 100px">
  <?php
include "footer.php";
  ?>
</div>

<script>
$("#menu").click(function(){
$("#showing").toggle(500);
});

</script>

</body>
</html>
