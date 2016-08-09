<?php $activeTab = 0; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'templates/head.php' ?>
    <title>North Side Pizza</title>
</head>
<body>
	<?php include 'templates/background.php' ?>
    <?php include 'templates/navbar.php' ?>
    <div class="home-container">
      <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2000">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1" class=""></li>
          <li data-target="#myCarousel" data-slide-to="2" class=""></li>
          <li data-target="#myCarousel" data-slide-to="3" class=""></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img class="first-slide" src="/res/image-1.jpg" alt="First slide">
            <div class="container">
              <div class="carousel-caption">
                <p>Bring In Any Ongoing Pizza Deals In Town</p>
                <p>WE WILL BEAT IT</p>
              </div>
            </div>
          </div>
          <div class="item">
            <img class="second-slide" src="/res/image-2.jpg" alt="Second slide">       
          </div>
          <div class="item">
            <img class="third-slide" src="/res/image-3.jpg" alt="Third slide">
          </div>
          <div class="item">
            <img class="forth-slide" src="/res/image-4.jpg" alt="Forth slide">
          </div>
        </div>
      </div>
      <?php include 'templates/footer.php' ?>
    </div>
    <?php include 'templates/scripts.php' ?>
</body>
</html>
