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

</head>
<style>
  body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
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
            margin-top:0px;
          }
          .text-home a{
            text-decoration: none;
            color:red;
            
          }
          .text-4{
            font-size:22px;
            font-weight:bold ;
            color:gold;
            text-shadow: .5px .5px black;
            letter-spacing: 5px;

          }
          .pg-2{
            font-size:25px;
            color:yellow; 
            text-align: center;
            padding: 25px 0px 0px 0;
            font-weight: bold;
            text-shadow: .5px .5px black;
          }
          .pg-3{
            font-size:30px;
            color:red; 
            text-align: center;
            padding: 25px 10px 10px 0;
            font-weight: bold;
            text-shadow: .5px .5px black;
          }
          .hgc-1{
            font-size:30px;
            font-weight: bold;
            padding: 10px 0px ;
            text-align: center;
            letter-spacing: 6px;
            color:#08A945;
            text-shadow: .5px .5px black;
          }
          .pgc-1{
            color:white;
            text-shadow: .5px .5px black;
          }
          .hgc-3{
            color:red;
            text-shadow: .5px .5px black;
            word-spacing: 5px;
            background-color: green;
          }
   
  </style>
<body>
<!----------------------------------header------------------>
<?php 
 include 'header.html';
?>
<?
include 'socilamedia.php';
?>
<!----------------------------------header------------------>
<section class="wraper_about">
<div class="container-fluid ">
  <div class="row">
     <div class="col-md-12">
      <h2 class="text-about">contact us</h2>
      <p class="text-home fnav"><a href="index.php">HOME</a>&nbsp;&nbsp;<i class="fa-solid fa-circle-chevron-right"></i>&nbsp;&nbsp;contact</p>
     </div>
    
  </div>
</div>

</section>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12 pt-3 pb-3  hgc-3">
    <h1 class="text-center"> Contact Us with Our Expert </h1>
    </div>
  </div>
  <div class="row">  
    <div class="col-md-6 pl-5 bg-danger">
      <p class="pg-2">Get in Touch</p>
      <h3 class="hgc-1">Contact Us</h3>
      
      <span class="text-4">
         Phone:
        </span><br>
         <b class="pgc-1">+91588575757</b><br><bR>

         <span class="text-4">
         Email:
        </span><br>
         <b class="pgc-1">Example@gmail.com</b><br><br>

         <span class="text-4">
         Address:
        </span><br>
         <b class="pgc-1">Noida (UP)</b>
    </div>
   
    <!-- <div class="container" id="contact"> -->
    
    
    <div class="col-md-6 bg-warning">
    <h2 class="text-center pg-3">Contact US</h2> 
        <form action="dbconect.php" method="post">
          <input type="text" class="form-control" name="cname" placeholder="Name" id="name" required><br>
          <input type="Number" class="form-control" name="cphone" placeholder="Phone" id="phone" required ><br>
          <input type="email" class="form-control" name="cemail" placeholder="E-mail" id="email" required ><br>
          <textarea class="form-control" name="cfeedback" placeholder="How can we help you?"
            style="height:150px;" id="message"></textarea><br>
          <input class="btn btn-outline-danger"  type="submit"  name="submit"><br><br>
        </form>
      </div>
    </div>
  </div>
</div>
<!-------------------------------footer------------------->
<?php 
 include 'footer.html';
?>
<!-------------------------------footer------------------->
<script src="https://smtpjs.com/v3/smtp.js"></script>
</body></html>
<script>
//function sendEmail(){
    let name= document.getElementById("name").value;
    let phone = document.getElementById("phone").value;
    let email = document.getElementById("email").value;
    let message = document.getElementById("message").value;
    let body ="name:" +name+ "<br/> Email:"+email+ "<br/> phone:"+phone+"<br/> message:"+message;
    
    Email.send({
    Host : "smtp.elasticemail.com",
    Username : "pushpendrayadav8434@gmail.com",
    Password : "A7DC8AAE8543774A8C6BC5EE95419F653629",
    To : 'hasmukhyadav8588@gmail.com',
    From :'pushpendrayadav8434@gmail.com',
    Subject : "message from contact from",
    Body : body
}).then(
  message => alert(message)
);
  }


  ScrollReveal({ reset: true,
    distance:'20px',
    duration:2600,delay:500
  });
  ScrollReveal().reveal('.main-title,.second-title,.third-title,.fouth-title,.fifth-title', { delay: 400 ,origin:'left'},{ mobile: true });
  ScrollReveal().reveal('.image', { delay: 600 ,origin:'bottom'},{ mobile: true });
  ScrollReveal().reveal('.about-detail', { delay: 600 ,origin:'right'},{ mobile: true });
  ScrollReveal().reveal('.media-icon li a i', { delay: 600 ,origin:'top',interval:200},{ mobile: true });
  ScrollReveal().reveal('.head-title', { delay: 600 ,origin:'right'},{ mobile: true });
  ScrollReveal().reveal('.forms', { delay: 700 ,origin:'right'},{ mobile: true });
  ScrollReveal().reveal('.image2', { delay: 700 ,origin:'left'},{ mobile: true });
</script>