<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Child Labour</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&family=Poppins:wght@100&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200&family=Poppins:wght@100&display=swap" rel="stylesheet">
</head>
<style type="text/css">
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Ubuntu:wght@400;500;700&display=swap');
  section{
    padding: 100px 0;
}
.max-width{
    max-width: 1300px;
    padding: 0 80px;
    margin: auto;
}
.about, .services, .skills, .teams, .contact, footer{
    font-family: 'Poppins', sans-serif;
}
.about .about-content,
.services .serv-content,
.skills .skills-content,
.contact .contact-content{
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
}
section .title{
    position: relative;
    text-align: center;
    font-size: 40px;
    font-weight: 500;
    margin-bottom: 60px;
    padding-bottom: 20px;
    font-family: 'Ubuntu', sans-serif;
    margin-top:-70px;
}
section .title::before{
    content: "";
    position: absolute;
    bottom: 0px;
    left: 50%;
    width: 180px;
    height: 3px;
    background: #111;
    transform: translateX(-50%);
}
section .title::after{
    position: absolute;
    bottom: -8px;
    left: 50%;
    font-size: 20px;
    color: crimson;
    padding: 0 5px;
    background: #fff;
    transform: translateX(-50%);
}
.about .title::after{
    content: "";
}
.about .about-content .left{
    width: 45%;
}
.about .about-content .left img{
    height: 400px;
    width: 400px;
    object-fit: cover;
    border-radius: 6px;
    margin-top: -60px;
}
.about .about-content .right{
    width: 55%;
}
.about .about-content .right .text{
    font-size: 25px;
    font-weight: 600;
    margin-bottom: 10px;
}
.about .about-content .right .text span{
    color: crimson;
}
.about .about-content .right p{
    text-align: justify;
}
.about .about-content .right a{
    display: inline-block;
    background: crimson;
    color: #fff;
    font-size: 20px;
    font-weight: 500;
    padding: 10px 30px;
    margin-top: 20px;
    border-radius: 6px;
    border: 2px solid crimson;
    transition: all 0.3s ease;
}
.about .about-content .right a:hover{
    color: crimson;
    background: none;
}
.p{
  font-size: 15px;
}

    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
     

    }
    .h1{
      font-size: 30px;
      margin-bottom:10px;
      font-family: 'Josefin Sans', sans-serif;
      padding-bottom: 20px;
    }
    .section{
      width: 100%;
      height:110vh;
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
      width: 140%;
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
      font-size: 20px;
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
<body>

<?php include 'base.php'; ?>

  <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">Child Labour</h2>
            <div class="about-content">
                <div class="column left">
                    <img class="img" src="img/19.jpg" alt="">
                </div>
                <div class="column right">
                    <div class="text">What is Child Labour ? <span class="typing-2"></span></div>
                    <p class="p">Child labour is defined by international standards as work that is hazardous, demands too many hours, or is performed by children who are too young.
                    In 2011, the national census of India found the total number of child labourers, aged [5–14], to be at 10.1 million, out of the total of 259.64 million children in that age group. The child labour problem is not unique to India; worldwide, about 217 million children work, many full-time.</p>
                </div>
            </div>
        </div>
    </section>
  <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">Stop It</h2>
            <div class="about-content">
                <div class="column left">
                    <img class="img" src="img/17.png" alt="">
                </div>
                <div class="column right">
                    <div class="text">Together we can stop child labour.<span class="typing-2"></span></div>
                    <p class="p">By no longer accepting it, not in mines, not on fields, not in factories, not in domestic settings and not in the products we buy…

Child labour is a global problem that requires a global solution.  In India, Africa and Latin America, local authorities, teachers, employers, parents and children in child labour free zones work together to get children out of work and into school. They are all convinced that no child should be working: every child should be in school. These child labour free zones are successful and are continuing to spread to other areas and countries.

But real change requires more. This is why we call on governments, businesses and consumers worldwide to shoulder their responsibility. And work together towards a child labour free world.</p>
          <p class="p">Do You Really want to stop it,Please Join us</p>
          <a href="contact.php">Join us</a>
        </div>
            </div>
        </div>
    </section>
  </body>
</html>
