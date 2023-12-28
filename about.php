<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digitalbaba</title>
    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!---- font-awesome------------->
  <link rel="stylesheet" href="css/all.min.css">
  <!---- font-awesome-------------> 
  <script src="js/main.js"></script>
  <style>
       .wraper_about{
        
  min-height:300px;
   background:linear-gradient(rgba(1,1,1,.5),rgba(1,1,1,.5)),url(images/bg-3.jpg);
  background-size:cover;
  background-attachment:fixed;
  padding-bottom: 0px; 
  
    }
    .text-about{
      font-size: 80px;
      text-align: center;
      color:whitesmoke;
      text-transform: uppercase;
      margin-top: 120px;
    }
    .text-home{
      text-align: center;
      color:whitesmoke;
      text-transform: uppercase;
      margin-top:;
    }
    .text-home a{
      text-decoration: none;
      color:red;
      
    }
    .text-3{
      line-height: 35px;
      font-size: 20px;
    }
    .bg-colors-1{
      background-color: rgb(134, 209, 205);
    }
    .bg-colors-2{
      background-color: rgb(197, 183, 157);
    }
    .text-2{
      line-height: 30px;
      font-size: 17px;
      color:grey;
    }
  </style>

</head>
<body>
    <!--------------------------header------------------->
<?php 
 include 'header.html'
?>
<!--------------------------header------------------->
<section class="wraper_about">
<div class="container-fluid ">
  <div class="row">
     <div class="col-md-12">
      <h2 class="text-about">About Us</h2>
      <p class="text-home fnav"><a href="index.php">HOME</a>&nbsp;&nbsp;<i class="fa-solid fa-circle-chevron-right"></i>&nbsp;&nbsp;About us</p>
     </div>
    
  </div>
</div>

</section>
<!--------------------------Card------------------>
<div class="container-fluid">
  <div class="row mt-4 mb-4">
    <div class="col-md-6">
        <div class="card ">
          <div class="card-body bg-colors-2">
            <h3 class="text-center"><b>Our Mission</b></h2>
            <p class="text-muted text-3">We sincerely provide an all-inclusive range of services to revamp your brand’s success story. While always keeping our client’s needs at the front, we make the latest digital branding solutions accessible, efficient, and affordable for every industry.</p>
          </div>
        </div>
    </div>
    <div class="col-md-6">
      <div class="card ">
         <div class="card-body bg-colors-1">
   <h2 class="text-center"> <b>Our Vision</b></h2>
<p class="text-muted text-3">We aim to become the most valuable <b>digital marketing agency in India</b> that supports every small, medium-sized, and well-established organization by creating excellent branding solutions for them to succeed. We work closely with our clients to help them meet their business targets.</p>
  </div>
  </div>    
</div>
</div>
<!--------------------------End---Card------------------>
<div class="container-fluid">
  <div class="row pt-5">
        <div class="col-md-6">
          <p>About us</p>
          <h1>We are Your Partner in Growth and Success</h1>
          <p class="text-2">We, at Digitalbaba, are known as the best digital marketing agency in India as we have been helping businesses reach their target audience and make more revenue. Having offices in India and abroad, we are passionate to transform your brand for a better future.<br>

We have a team of experienced and well-skilled professionals to work on your branding strategies, right from carefully measuring your business objectives, creating cutting-edge content strategies, strengthening your digital presence with our advanced <b class="text-warning"> SEO </b> tools and <b class="text-warning"> PPC</b> activities, promoting your business on different social media platforms, and much more.</p>

</p>
        </div>
        <div class="col-md-6">
          <img src="images/digital.jpg" width="100%">
        </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <img src="images/digital-2.jpg" width="100%">
    </div>
    <div class="col-md-6">
      <p>Why Choose us</p>
      <h1>Save Your Time & Effort With Webtek Digital</h1>
      <p class="text-2">If you are looking forward to expanding your digital reach and connecting with your target audience-  Digitalbaba has the right skill sets and passion to help you. To achieve a boost in your business, you need more and more people to know about your products, services, and solutions. This is where our<b class="text-warning"> SEO services in India</b> are essential as we know how to generate more leads to improve your sales</p>
      <button type="button" class="btn btn-outline-warning"> <h4>Contact us</h4></button>
   </div>
  </div>
</div>
<!---------------------------------Footer---------------->
<?php
include'footer.html'; 
?>
<!---------------------------------Footer---------------->
