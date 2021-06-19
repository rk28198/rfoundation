<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
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
    height: 300px;
    width: 300px;
    object-fit: cover;
    border-radius: 6px;
    margin-top: -200px;
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
      width: 10%;
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
    #p{
      margin-top: 20px;
    }
    #bt{
      margin-left: 10px;
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
  <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">नियम और शर्तें</h2>
            <div class="about-content">
                <div class="column left">
                    <img id="image" class="img" src="img/scho/scho4.png" alt="">
                </div>
                <div class="column right">
                    <div class="text">         स्कॉलर-शिप के नियम और शर्तें                               <span class="typing-2"><a href="form.php">Read In English</a><a id="bt" href="https://forms.gle/q6dJgrRcZA72RCCN6">फॉर्म भरे</a></span></div>
                    <p class="p">स्कॉलरशिप फॉर्म आप जिस कक्षा में हैं उसी कक्षा के आधार पर आपका फॉर्म स्वीकार किया जाएगा |</p>

                    <p class="p">आप जिस कक्षा या साल में है परीक्षा पेपर वर्तमान कक्षा तथा पिछले कक्षा को मिला कर ही बनाया जाएगा |</p>
                    <p class="p">सभी अभ्यर्थियों को यह सूचित किया जाता है कि उनका परीक्षा उनके ही जिले में आयोजित होगा |</p>
                    <p class="p">विद्यार्थियों को यह भी सूचित किया जाता है कि आवश्यकता पड़ने पर कक्षा 11 व 12 तथा पॉलिटेक्निक, बीए, बीकॉम लेवल की परीक्षाएं नजदीकी दूसरे जिलों में भी कराया जा सकता है |</p>
                    <p class="p">कोरोना महामारी तथा अन्य किन्ही कारणों से अगर परीक्षा कैंसिल होती है तो आप की धनराशि आपको आपके खाते में वापस कर दी जाएगी |</p>
                    <p class="p">स्कॉलरशिप के लिए भरे जाने वाला फॉर्म पूर्ण रुप से सत्य व सही होना चाहिए |</p>
                    <p class="p">स्कॉलरशिप परीक्षा में उत्तीर्ण हुए छात्रों को स्कॉलरशिप डॉक्यूमेंट वेरिफिकेशन के बाद ही दी जाएगी |</p>
                    <p class="p">आपके द्वारा भरा गया फॉर्म ऑफ पूर्णिया उसमें कोई त्रुटि है तो वह फॉर्म रिजेक्ट कर के फीस वापस कर दी जाएगी |</p>
                    <p class="p">स्कॉलरशिप फॉर्म तभी पूर्ण माना जाएगा जब अभ्यार्थी स्कॉलरशिप फॉर्म भर के पेमेंट के उपरांत ट्रांजैक्शन आईडी और पेमेंट रिसिप्ट अपलोड करें</p>
                    <p class="p">स्कॉलरशिप फॉर्म में भरा गया त्रुटि पूर्ण पेमेंट रिसिप्ट मान्य नहीं होगा और आपका फॉर्म रिजेक्ट कर दिया जाए |</p>
                    <p class="p">स्कॉलरशिप फॉर्म भरते समय ट्रांजैक्शन आईडी या पेमेंट आईडी भरना अनिवार्य है पेमेंट रिसिप्ट से अगर ट्रांजैक्शन आईडी मैच नहीं होती है तो आपका फॉर्म अपूर्ण माना जाएगा और उस फॉर्म को रिजेक्ट कर दिया जाएगा |</p>
                    <p class="p">आपके द्वारा दी गई कोई भी गलत सूचना आपको कानूनी प्रक्रिया में फंसा सकती है |</p>

                    <a href="https://forms.gle/q6dJgrRcZA72RCCN6">फॉर्म भरे</a>
                    
                </div>
            </div>
        </div>
    </section>
  </body>
</html>
