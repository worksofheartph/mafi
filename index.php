<?php include('header.php'); ?>
<body id="home">
  <?php include('menu.php'); ?>
  <section id="home-hero" class="flex">
    <div>
      <h1>Empowered Communities,<br />
      Sustainable Futures</h1>
      <br />
      <a href="about.php" class="button">LEARN MORE <?php echo file_get_contents("images/svg-arrow.svg"); ?></a>
    </div>
    <img src="images/home-hero-photo.png">
    <?php echo file_get_contents("images/svg-mountain.svg"); ?>
    <?php echo file_get_contents("images/svg-line.svg"); ?>
  </section>
  <section id="home-about" class="green center-text">
    <div id="home-about-intro">
      Mount Apo Foundation, Inc. empowers the indigenous tribes and other upland dwellers surrounding Mount Apo for the protection and preservation of their environment and culture, allowing them to sustainably prosper far into the future.
      <div id="home-about-numbers">
        <h2>
        320 scholar graduates<br />
        33 barangays<br />
        9,441 IPs<br />
        1 shared vision
        </h2>
      </div>
    </div>
    <?php echo file_get_contents("images/svg-datu.svg"); ?>
  </section>
  <section id="home-programs">
    <div id="home-programs-slider" class="section-slider">
      <div class="slider" data-gap="80">
        <div class="panel">
          <a href="program-educ.php">
            <h2>Educational Development Program</h2>
          </a>
          <img src="images/banner-program-educ.png">
          <div class="overlay"></div>
        </div>
        <div class="panel">
          <a href="program-educ.php">
            <h2>Community and Environment Program</h2>
          </a>
          <img src="images/banner-program-envi.png">
          <div class="overlay"></div>
        </div>
        <div class="panel">
          <a href="program-educ.php">
            <h2>Cultural Heritage Program</h2>
          </a>
          <img src="images/banner-program-culture.png">
          <div class="overlay"></div>
        </div>
      </div>
      <a href="#" class="slider-control slider-prev">
        <?php echo file_get_contents("images/svg-arrow.svg"); ?>
      </a>
      <a href="#" class="slider-control slider-next">
        <?php echo file_get_contents("images/svg-arrow.svg"); ?>
      </a>
    </div>
  </section>
  <section id="home-programs-info">
    
    <ul id="prog-list">
      <li class="prog-list-educ">
        <a href="program-educ.php" class="button" >
        <?php echo file_get_contents("images/icon-educ.svg"); ?> EDUCATION</a>
        <?php echo file_get_contents("images/prog-button-bg.svg"); ?>
      </li>
      <li class="prog-list-envi">
        <a href="" class="button" >
        <?php echo file_get_contents("images/icon-envi.svg"); ?> COMMUNITY & ENVIRONMENT</a>
        <?php echo file_get_contents("images/prog-button-bg.svg"); ?>
      </li>
      <li class="prog-list-culture">
        <a href="" class="button" >
        <?php echo file_get_contents("images/icon-culture.svg"); ?> CULTURAL HERITAGE</a>
        <?php echo file_get_contents("images/prog-button-bg.svg"); ?>
      </li>
    </ul>
    <div class="two-col">
      <div>
        <h1>Our Programs</h1>
        <p>To serve as a catalyst in the total development of cultural communities and Mount Apo through the provision of culturally-acceptable, ecologically-sound and sustainable technologies and process.
        </p>
      </div>
      <ul class="link-list">
        <h3>More Info</h3>
        <li><a href="about.php" class="button">What we do <?php echo file_get_contents("images/svg-arrow.svg"); ?></a></li>
        <li><a href="publications.php" class="button">Publications <?php echo file_get_contents("images/svg-arrow.svg"); ?></a></li>
      </ul>
    </div>
  </section>
</section>
<section id="stories-slider" class="dark-beige">
  <div class="section-heading">
    <h1>Stories</h1>
    <a href="stories.php" class="button light-beige-text">VIEW ALL</a>
  </div>
  <div class="stories-list slider" data-gap="30">
    <div class="story-item panel">
      <img src="images/photo-4.png">
      <a href="story.php" class="story-info">
        <h3>MAFI’S first Lumad Agricultural Engineering graduate</h3>
        <h5 class="author">Jan Michael Barila</h5>
      </a>
    </div>
    <div class="story-item panel">
      <img src="images/photo-5.png">
      <a href="story.php" class="story-info">
        <h3>MAFI’s first lawyer scholar now protecting indigenous people’s rights</h3>
        <h5 class="author">Atty. Ivyrose Paz</h5>
      </a>
    </div>
    <div class="story-item panel">
      <img src="images/photo-6.png">
      <a href="story.php" class="story-info">
        <h3>MAFI’S first Lumad Agricultural Engineering graduate</h3>
        <h5 class="author">Jan Michael Barila</h5>
      </a>
    </div>
  </div>
  <a href="#" class="slider-control slider-prev">
    <?php echo file_get_contents("images/svg-arrow.svg"); ?>
  </a>
  <a href="#" class="slider-control slider-next">
    <?php echo file_get_contents("images/svg-arrow.svg"); ?>
  </a>
</section>
<section id="home-news">
  <div class="divider-line"><?php echo file_get_contents("images/svg-divider-line.svg"); ?></div>
  <div class="section-heading">
    <h1>Latest News</h1>
    <a href="news.php" class="button view-all">VIEW ALL</a>
  </div>
  <div class="news-grid">
    <div class="news-item">
      <img src="images/photo-1.png">
      <a href="news-article.php" class="news-info">
        <h3>Meeting the Challenges of COVID-19 Pandemic: MAFI's pivot in its operations</h3>
        <h5 class="date" style="--color: var(--yellow)">August 2, 2020</h5>
      </a>
    </div>
    <div class="news-item">
      <img src="images/photo-2.png">
      <a href="news-article.php" class="news-info">
        <h3>MAFI's Response to the 2019 Earthquakes in Mindanao</h3>
        <h5 class="date" style="--color: var(--green)">August 2, 2020</h5>
      </a>
    </div>
    <div class="news-item">
      <img src="images/photo-3.png">
      <a href="news-article.php" class="news-info">
        <h3>2018 Institutional Pivot: In Search of Strategic and Policy Directions</h3>
        <h5 class="date" style="--color: var(--red)">August 2, 2020</h5>
      </a>
    </div>
  </div>
</section>
<section id="home-partners" class="center-title light-beige center-text">
  <div class="section-title">
    <h1>Our Partners</h1>
  </div>
  <br />
  <img src="images/home-partners-logos.png">
  <?php echo file_get_contents("images/svg-man-ground.svg"); ?>
</section>
<footer>
  <div id="footer-cta" style="background-image: url(images/banner-cta-1.png)">
    <div class="footer-cta-content">
      <?php echo file_get_contents("images/icon-0-educ.svg"); ?>
      <h2>Contribute to the cause</h2>
      <a href="getinvolved.php" class="button">GET INVOLVED <?php echo file_get_contents("images/svg-arrow.svg"); ?></a>
    </div>
    <?php echo file_get_contents("images/svg-footer-cta-bg.svg"); ?>
    <div class="overlay"></div>
  </div>
  <?php include('footer.php'); ?>