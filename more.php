<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&family=Poppins:wght@100&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200&family=Poppins:wght@100&display=swap" rel="stylesheet">
  <style>
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
     

    }
    .h1{
      font-size: 25px;
      margin-bottom:10px;
      font-family: 'Josefin Sans', sans-serif;
      padding-bottom: 20px;
    }
    .section{
      width: 100%;
      height:140vh;
      background-color: #ddd;
    }
    .button a{
      background-color: #3d3d3d;
      padding: 12px 40px;
      text-decoration: none;
      color: #fff;
      font-size: 25px;
      letter-spacing: 1.5px;
    }
    .button{
    	margin-top: 30px;
    }
    .button a:hover{
      background-color: #a52a2a;
      color: #fff;
    }

    .container{
      width: 80%;
      display: 100vh;
      margin:auto;
      padding-top: 100px;
    }
    .content-section{
      float: left;
      width: 55%;
    }
    .image-section{
      float: right;
      width: 30%;
      
    }
    .image-section img{
      width: 70%;
      height: auto;
    
    }
    .content-section .title{
      text-transform: uppercase;
      font-size: 28px;
    }
    .content-section .content h3{
      margin-top: 20px;
      color: #5d5d5d;
      font-size: 18px;
    }
    .content-section .content p{
      margin-top: 10px;
      font-family: sans-serif;
      font-size: 17px;
      line-height: 1.5;
    }
    .content-section .content .button{
      margin-top: 30px;
    }
    .content-section .content .button a{
      background-color: #3d3d3d;
      padding: 12px 40px;
      text-decoration: none;
      color: #fff;
      font-size: 25px;
      letter-spacing: 1.5px;
    }
    .content-section .content .button a:hover{
      background-color: #a52a2a;
      color: #fff;
    }
    .content-section .socail{
      margin: 40px 40px;
      margin-left:30px;
    }
    .content-section .socail i{
      color:#a52a2a;
      font-size: 30px;
      padding: 0px 10px;
    }
    .content-section .socail i:hover{
      color: #3d3d3d;
    }
    .h3{
    	font-size: 15px;
    	color:#5d5d5d;
    	font-family:sans-serif;
    	padding-bottom: 10px;
    }
    .p{
    	font-size: 15px;
    	margin-top: 8px;
    	line-height: 1.5;
    	font-family: 'Poppins', sans-serif;
    }
    @media screen and (max-width: 768px){
      .container{
      width: 80%;
      display: 100vh;
      margin:auto;
      padding-top: 50px;
    }
     .content-section{
      float: none;
      width: 100%;
      display: block;
      margin: auto;
    }
    .image-section{
      float: none;
      width: 100%;
    }
    .image-section img{
      width: 100%;
      height: auto;
      display: block;
      margin: au
    }
    .content-section .content .button{
      text-align: center;
    }
    .content-section .content .button a{
      padding: 9px 30px;
    }
    .content-section .social{
      text-align: center;
    }
    }

  </style>
</head>
<body>
<?php include 'base.php'; ?>

  <div class="section">
    <div class="container">
      <div class="content-section">
        <div class="title">
          <h1 class="h1">About the author of R . Foundation</h1>
          <h3 class="h3">All about to the R . Founation & How to founded R . Foundation</h3>
          <p class="p">MR. Rohit Kumar also belongs from middle class family they face so many problems in there life to completing their studies he is still a Engineering student in mechanical engineering but he is an awarded person and he observed there surrounding he look so many child still they are illiterate due to their conditions then he decide to do something for these children that the problem which he faced during his time are not face by the other child then he founded the organization named as R__Foundation</p>
          <div class="button">
            <a href="about.php">>> Back  </a>
          </div>
        </div>
        <div class="content">
        </div>
        <div class="socail">
          <a href=""><i class="fab fa-facebook-f"></i></a>
          <a href=""><i class="fab fa-twitter"></i></a>
          <a href=""><i class="fab fa-instagram"></i></a>
        </div>
      </div>
      <div class="image-section">
        <img src="img/team/raj1.jpg">
      </div>
    </div>
  </div>
</body>
</html>