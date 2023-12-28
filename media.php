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
  </style>
<body>
  <!----------------------------------header------------------>
<?php 
 include 'header.html';
?>
<!----------------------------------header------------------>
<section class="wraper_about">
<div class="container-fluid ">
  <div class="row">
     <div class="col-md-12">
      <h2 class="text-about">media</h2>
      <p class="text-home"><a href="index.php">HOME</a>&nbsp;&nbsp;<i class="fa-solid fa-circle-chevron-right"></i>&nbsp;&nbsp;media</p>
     </div>
    
  </div>
</div>

</section>
<!-------------------------------footer------------------->
<?php 
 include 'footer.html';
?>
<!-------------------------------footer------------------->
</body></html>