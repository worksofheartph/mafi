<?php include('header.php'); ?>
<body id="stories" class="white light-beige">
  <?php include('menu.php'); ?>
  <section id="stories-hero" class="flex dark-beige">
    <div>
      <h1>Stories</h1>
    </div>
    <?php echo file_get_contents("images/stories.svg"); ?>
  </section>
  <section id="stories-page">
    <div id="stories-grid">
      <div class="story-item">
        <img src="images/photo-4.png">
        <div class="story-info">
          <h3>MAFI’S first Lumad Agricultural Engineering graduate</h3>
          <h5 class="author">Jan Michael Barila</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
          <a href="story.php" class="button">READ MORE</a>
        </div>
      </div>
      <div class="story-item">
        <img src="images/photo-5.png">
        <div class="story-info">
          <h3>MAFI’s first lawyer scholar now protecting indigenous people’s rights</h3>
          <h5 class="author">Atty. Ivyrose Paz</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
          <a href="story.php" class="button">READ MORE</a>
        </div>
      </div>
      <div class="story-item">
        <img src="images/photo-6.png">
        <div class="story-info">
          <h3>MAFI’S first Lumad Agricultural Engineering graduate</h3>
          <h5 class="author">Jan Michael Barila</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
          <a href="story.php" class="button">READ MORE</a>
        </div>
      </div>
      <div class="story-item">
        <img src="images/photo-4.png">
        <div class="story-info">
          <h3>MAFI’S first Lumad Agricultural Engineering graduate</h3>
          <h5 class="author">Jan Michael Barila</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
          <a href="story.php" class="button">READ MORE</a>
        </div>
      </div>
    </div>
        <ul class="pagination">
      <li class="selected">1</li>
      <li>2</li>
      <li>3</li>
      <?php echo file_get_contents("images/svg-arrow.svg"); ?>
    </ul>
  </section>
  
  <footer>
    <div id="footer-cta" style="background-image: url(images/banner-cta-1.png)">
      <div class="footer-cta-content">
        <?php echo file_get_contents("images/icon-0-educ.svg"); ?>
        <h2>Contribute to the cause</h2>
        <a href="getinvolved.php" class="button">GET INVOLVED <?php echo file_get_contents("images/svg-arrow.svg"); ?></a>
      </div>
      <img src="images/footer-cta-bg.svg" class="footer-cta-bg">
      <div class="overlay"></div>
    </div>
    <?php include('footer.php'); ?>