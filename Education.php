<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education</title>
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
            <h2 class="title">Education</h2>
            <div class="about-content">
                <div class="column left">
                    <img class="img" src="img/educa/educa1.jpg" alt="">
                </div>
                <div class="column right">
                    <div class="text">What Is The Education? <span class="typing-2"></span></div>
                    <p class="p">Education is a powerfull weapon that aids an individual to face the adversities of life and overcome societal stigmas such as poverty,feae,status to achieve
                    success. Education is the hope of development and success for most third-world countries and the world's dominion countries.
                    Mandatory education builds the scope of better growth and development.</p>
                </div>
            </div>
        </div>
    </section>
    <div class="section">
    <div class="container">
      <div class="content-section">
        <div class="title">
          <h1 class="h1">R . Foundation</h1>
          <h3 class="h3">THE RIGHT TO EDUCATION FOR ALL CHILDREN</h3>
          <p class="p">Save the Children is working to ensure that every child receives a good quality education, and learns the skills they will need to thrive in the 21st century. We are breaking down the barriers to education by helping marginalised and vulnerable children – including those who are living in conflict and disaster zones - access early childhood and primary school services. Our work is leading the way in improving literacy and numeracy skills, helping teachers to teach and children to learn. Through our work, we are supporting out-of-school young people access training in a skill or occupation, so that they can get a job which provides them with enough money to survive.</p>
          <div class="button">
            <a href="/contact">Join Us >></a>
          </div>
        </div>
        <div class="socail">
          <a href=""><i class="fab fa-facebook-f"></i></a>
          <a href=""><i class="fab fa-twitter"></i></a>
          <a href=""><i class="fab fa-instagram"></i></a>
        </div>
      </div>
      <div class="image-section">
        <img src="img/educa/educa3.jpg">
      </div>
    </div>
  </div>
  <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">R . Foundation</h2>
            <div class="about-content">
                <div class="column left">
                    <img class="img" src="img/educa/e4.jpg" alt="">
                </div>
                <div class="column right">
                    <div class="text">HOW IS THE RIGHT TO EDUCATION VIOLATED?
                    MILLIONS ARE MISSING OUT<span class="typing-2"></span></div>
                    <p class="p">Millions of children are not learning because of poverty, discrimination, the quality of the education on offer, or because they are too hungry to learn. These children leave school before they acquire the basic skills and knowledge needed to thrive within society.

Enrolment figures only tell part of the story. Around 250 million 5-to-12 year olds cannot read or write, whether they are in school or not.

Education transforms children’s lives by helping them overcome poverty. This leads to better health and increased income opportunities. Without it, many children remain trapped in a life of poverty and hardship..</p>
<a href="contact.php">JOIN US</a>
                </div>
            </div>
        </div>
    </section>
  </body>
</html>
