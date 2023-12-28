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
  .bg-wheat{
    background-color: wheat;
  }
  .bg-white{
    background-color: ;
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
          .text-1{
            font-size:20px;
            color:grey;
          }
          .servy a{
            color:red;
            text-decoration-line: none;
            display: ;
          }
          .servy a:hover{
            color:red;
            text-decoration-line: none;
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
      <h2 class="text-about">services</h2>
      <p class="text-home fnav"><a href="index.php">HOME</a>&nbsp;&nbsp;<i class="fa-solid fa-circle-chevron-right"></i>&nbsp;&nbsp;services</p>
     </div>
    
  </div>
</div>

</section>
<div class="container-fluid bg-wheat">
  <div class="row">
          <div class="col-md-6 p-5 servy text-justify">
            <p>Why Choose Us</p>
            <h3>Our Services</h3>
            <i class="fa-solid fa-circle-check" style="color:blue; font-size:30px"></i>&nbsp;&nbsp;&nbsp;<a href="/">It’s time to take your digital marketing seriously. With a team of specialists at hand, you can finally make that breakthrough and see profound ROI!</a><br>
            
            <i class="fa-solid fa-circle-check" style="color:blue;font-size:30px"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/">We follow a systematic approach to ensure all our online marketing efforts deliver profitable results.</a> <br>
            <i class="fa-solid fa-circle-check" style="color:blue;font-size:30px"></i>&nbsp;&nbsp;&nbsp;<a href="/">Leverage Webtek Digital services today and let us help you boost your customer acquisition and retention rates.</a> <br>
            <i class="fa-solid fa-circle-check" style="color:blue;font-size:30px"></i>&nbsp;&nbsp;&nbsp;<a href="/">Build Brand Recognition as an Industry Leader and Boost Profitability at DigitalBaba</a>  </br>    <br>                 
            <button type="button" class="btn btn-outline-warning" style="font-size:20px;  "> Sevirce</button>
           </div>
          <div class="col-md-6 p-5 text-center">
            <div class="row p-3">
              <div class="col-md-6 ">
                <div class="card">
                 
                  <div class="card-body bg-warning ">
                  <img src="images/SEO.jpeg" width="30%"><br>
                    <h5>Search Engine Optimization</h5>
                  </div>
                </div>
              </div>
              <div class="col-md-6 ">
                <div class="card">
                  
                  <div class="card-body bg-info">
                  <img src="images/webdevlopment.png" width="30%"><br>
                    <h5>Web Devloment</h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="row p-3">
              <div class="col-md-6 ">
                <div class="card">
                  
                  <div class="card-body bg-success">
                  <img src="images/googleads-2.jpeg" width="30%"><br>
                    <h5>Digital Marketing</h5>
                  </div>
                </div>
              </div>
              <div class="col-md-6 ">
                <div class="card">
                 
                  <div class="card-body bg-secondary">
                  <img src="images/socialmedia.jpeg" width="30%"></br>
                    
                    <h5>Google Ads – Shopping, Text, Display</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
  </div>
</div>
<!-------------------------------footer------------------->
<?php 
 include 'footer.html';
?>
<!-------------------------------footer------------------->
</body></html>