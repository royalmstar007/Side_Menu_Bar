<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Sidebar Menu</title>
      <link rel="stylesheet" href="style.css">
      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
   </head>
   <body>
      <div class="btn">
         <span class="fas fa-bars"></span>
      </div>
      <nav class="sidebar" style="overflow-y: scroll; height: 100%;">
         <div class="text"><span><img src="logo1.png" alt="" style="height: 40px; width: 35px; margin-top: 20px;"></span>
            Side Menu
         </div>
         <ul>
            <li class="active"><a href="dashboard.php">Dashboard</a></li>
            <li>
               <a href="#" class="feat-btn"><i class="fa-sharp fa-solid fa-fire-flame-curved"></i>  Features
               <span class="fas fa-caret-down first"></span>
               </a>
               <ul class="feat-show">
                  <li><a href="feature1.php">Feature 1</a></li>
                  <li><a href="feature2.php">Feature 2</a></li>
               </ul>
            </li>
            <li>
               <a href="#" class="serv-btn"><i class="fa-solid fa-gear"></i>  Services
               <span class="fas fa-caret-down second"></span>
               </a>
               <ul class="serv-show">
                  <li><a href="service1.php">Service 1</a></li>
                  <li><a href="service2.php">Service 2</a></li>
               </ul>
            </li>
            <li>
               <a href="#" class="prot-btn"><i class="fa-solid fa-circle-user"></i>  Portfolio
               <span class="fas fa-caret-down third"></span>
               </a>
               <ul class="prot-show">
                  <li><a href="protofolio1.php">Protofolio 1</a></li>
                  <li><a href="protofolio2.php">Protofolio 2</a></li>
               </ul>
            </li>
            <li>
               <a href="#" class="over-btn"><i class="fa-solid fa-eye"></i>  Overview
               <span class="fas fa-caret-down fourth"></span>
               </a>
               <ul class="over-show">
                  <li><a href="overview1.php">overview 1</a></li>
                  <li><a href="overview2.php">overview 2</a></li>
               </ul>
            </li>
            <li>
               <a href="#" class="short-btn"><i class="fa-solid fa-share"></i>  Shortcuts
                  <span class="fas fa-caret-down fifth"></span>
               </a>
               <ul class="short-show">
                  <li><a href="shortcut1.php">shortcut 1</a></li>
                  <li><a href="shortcut2.php">shortcut 2</a></li>
               </ul>
            </li>
            <li>
               <a href="#" class="feed-btn"><i class="fa-solid fa-pen-fancy"></i>  Feedback
                  <span class="fas fa-caret-down sixth"></span>
               </a>
               <ul class="feed-show">
                  <li><a href="feedback1.php">Feedback 1</a></li>
                  <li><a href="feedback2.php">Feedback 2</a></li>
               </ul>
            </li>
         </ul>
      </nav>
      <script>
         $('.btn').click(function(){
            $(this).toggleClass("click");
            $('.sidebar').toggleClass("show");
            });

           $('.feat-btn').click(function(){
             $('nav ul .feat-show').toggleClass("show");
             $('nav ul .first').toggleClass("rotate");
           });
           $('.serv-btn').click(function(){
             $('nav ul .serv-show').toggleClass("show1");
             $('nav ul .second').toggleClass("rotate");
           });
           $('.prot-btn').click(function(){
            $('nav ul .prot-show').toggleClass("show2");
            $('nav ul .third').toggleClass('rotate');
           });
           $('.over-btn').click(function(){
            $('nav ul .over-show').toggleClass("show3");
            $('nav ul .fourth').toggleClass('rotate');
           });
           $('.short-btn').click(function(){
            $('nav ul .short-show').toggleClass("show4");
            $('nav ul .fifth').toggleClass('rotate');
           });
           $('.feed-btn').click(function(){
            $('nav ul .feed-show').toggleClass("show5");
            $('nav ul .sixth').toggleClass('rotate');
           });

           $('nav ul li').click(function(){
             $(this).addClass("active").siblings().removeClass("active");
           });
      </script>
   </body>
</html>