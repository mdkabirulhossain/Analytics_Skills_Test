<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Application</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
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
</body>
</html>