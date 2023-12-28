<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digitalbaba</title>
    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<title> Admin panel </title>
<style>
*{
box-sizing:border-box;
font-family:calibri;
}

body{
margin:0;
padding:0;
}

.course{
width:100%;
height:500px;

}

.row{
display:flex;
flex-wrap:wrap;
}
.left{
    margin-top: 10px;
margin-left: 10px;
width:20%;
height:550px;
background:gold;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

}

.left .menu{
width:100%;
height:50px;
padding-left: 70px;
line-height:130px;
/*border-bottom:1px solid white;*/
color:black;
cursor:pointer;
font-size: 25px;
}

.right{
    margin-top: 10px;
width:75%;
height:550px;
margin-left: 2%;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.content{
width:100%;
height:100%;
background:white;
float:left;
padding:0 30px;
display:none;
}

.show{
display:block;
}
.circle{
    height:100px;
    width: 100px;
    background-color: red;
    border-radius: 50%;
    margin: 20px 10px -30px 80px;
}
</style>
</head>
<body>
<section class="course">
	<div class="row">
		<div class="left">
            <div class="circle"></div>
			<div class="menu" onclick="abc(0)"> <i class="fa-solid fa-house"></i>&nbsp;Home </div>
			<div class="menu" onclick="abc(1)"><i class="fa-solid fa-gauge"></i> Dashboard </div>
			<div class="menu" onclick="abc(2)"> <i class="fa-solid fa-user"></i>&nbsp;cutomer </div>
			<div class="menu" onclick="abc(3)"><i class="fa-solid fa-table-columns"></i>&nbsp;Table </div>
			<div class="menu" onclick="abc(4)"> <i class="fa-solid fa-chart-simple"></i>&nbsp;chart </div>
			<div class="menu" onclick="abc(5)"><i class="fa-solid fa-right-to-bracket"></i> Logout </div>
		</div>
		<div class="right">
			<div class="content show">
				<h2> About the Course </h2>
				<?php
				include "datashow.php";
				?>
			</div><!-------content------->
			
					<div class="content">
				<h2> Web Designing </h2>
				<p>
					The quick brown fox jumps over to the little lazy dog.The quick brown fox jumps over to the little lazy dog.
				</p>
			</div><!-------content------->
			
					<div class="content">
				<h2> Graphic Designing </h2>
				<p>
					The quick brown fox jumps over to the little lazy dog.The quick brown fox jumps over to the little lazy dog.
				</p>
			</div><!-------content------->
			
					<div class="content">
				<h2> Tally </h2>
				<p>
					The quick brown fox jumps over to the little lazy dog.The quick brown fox jumps over to the little lazy dog.
				</p>
			</div><!-------content------->
			
				<div class="content">
				<h2> Angular </h2>
				<p>
					The quick brown fox jumps over to the little lazy dog.The quick brown fox jumps over to the little lazy dog.
				</p>
			</div><!-------content------->
			
				<div class="content">
				<h2> React </h2>
				<p>
					The quick brown fox jumps over to the little lazy dog.The quick brown fox jumps over to the little lazy dog.
				</p>
			</div><!-------content------->
		</div>
	</div>
</section>

</body></html>
<script>
function abc(n)
{
var data = document.getElementsByClassName("content");
for(i=0;i<data.length;i++)
{
data[i].style.display="none";
data[n].style.display="block";
}


}

</script>
