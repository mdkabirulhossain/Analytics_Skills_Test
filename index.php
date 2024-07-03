<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Application</title>
    <!-- Font awesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- Swiper JS CDN Link  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <nav>
    <ul class="sidebar">
      <li onclick=hideSidebar()><a href="#"><i class="fa-solid fa-xmark" style="color: #e45f07;"></i></a></li>
      <li><a href="#">HOME</a></li>
      <li><a href="#">ABOUT</a></li>
      <li><a href="#">SERVICES</a></li>
      <li><a href="#">CONTACT</a></li>
      <li><a href="#">CAREER</a></li>
    </ul>
    <ul>
      <li class="Logo">Logo</li>
      <li class="hide"><a href="#">HOME</a></li>
      <li class="hide"><a href="#">ABOUT</a></li>
      <li class="hide"><a href="#">SERVICES</a></li>
      <li class="hide"><a href="#">CONTACT</a></li>
      <li class="hide"><a href="#">CAREER</a></li>
      <li class="menu-button" onclick=showSidebar()><a href="#"><i class="fa-solid fa-bars" style="color: #e45f07;"></i></a></li>
    </ul>
  </nav>
  <main class="main">
    <div class="container swiper">
        <div class="slider-wrapper">
            <div class="card-list swiper-wrapper">
                <div class="card-item swiper-slide">
                    <img class="user-image" src="assets/image_01.jpg" alt="Jack">
                    <h2 class="user-name">Jack</h2>
                    <p class="user-profession">Software Engineer</p>
                    <button class="message-button">Contact With me</button>
                </div>
                <div class="card-item swiper-slide">
                    <img class="user-image" src="assets/images_02.jpg" alt="Jack">
                    <h2 class="user-name">Mr. Umar</h2>
                    <p class="user-profession">Machine Learning Engineer</p>
                    <button class="message-button">Contact With me</button>
                </div>
                <div class="card-item swiper-slide">
                    <img class="user-image" src="assets/images_03.jpg" alt="Jack">
                    <h2 class="user-name">Mr. Rakin</h2>
                    <p class="user-profession">SQA Engineer</p>
                    <button class="message-button">Contact With me</button>
                </div>
                <div class="card-item swiper-slide">
                    <img class="user-image" src="assets/images_04.jpg" alt="Jack">
                    <h2 class="user-name">Rose</h2>
                    <p class="user-profession">Project Manager</p>
                    <button class="message-button">Contact With me</button>
                </div>
                <div class="card-item swiper-slide">
                    <img class="user-image" src="assets/images_05.jpg" alt="Jack">
                    <h2 class="user-name">Mr. Akibul</h2>
                    <p class="user-profession">Software Engineer</p>
                    <button class="message-button">Contact With me</button>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button swiper-button-prev"></div>
            <div class="swiper-button swiper-button-next"></div>
        </div>
    </div>

  </main>

  <script>
    function showSidebar(){
      const sidebar = document.querySelector('.sidebar')
      sidebar.style.display = 'flex'
    }
    function hideSidebar(){
      const sidebar = document.querySelector('.sidebar')
      sidebar.style.display = 'none'
    }
  </script>
  <!-- swiper JS CDN script Link  -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="swiper.js"></script>
</body>
</html>