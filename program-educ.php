<?php include('header.php'); ?>
<body id="program">
  <?php include('menu.php'); ?>
  <section id="prog-hero" class="flex light-beige">
    <div>
      <h1>Our Programs</h1>
      <br/>
      <ul id="prog-list">
        <li class="prog-list-educ"><a href="" class="button" ><?php echo file_get_contents("images/icon-educ.svg"); ?> EDUCATION</a>
            <?php echo file_get_contents("images/prog-educ-button-bg.svg"); ?>
        </li>
        <li class="prog-list-envi"><a href="" class="button" ><?php echo file_get_contents("images/icon-envi.svg"); ?> COMMUNITY & ENVIRONMENT</a>
            <?php echo file_get_contents("images/prog-envi-button-bg.svg"); ?>
        </li>
        <li class="prog-list-culture"><a href="" class="button" ><?php echo file_get_contents("images/icon-culture.svg"); ?> CULTURAL HERITAGE</a>
            <?php echo file_get_contents("images/prog-culture-button-bg.svg"); ?>
        </li>
      </ul>
    </div>
    <?php echo file_get_contents("images/program-educ.svg"); ?>
  </section>
 
  <footer>
    <div id="footer-cta" style="background-image: url(images/banner-cta-1.png">
      <div class="footer-cta-content">
        <?php echo file_get_contents("images/icon-0-educ.svg"); ?>
        <h2>Contribute to the cause</h2>
        <a href="getinvolved.php" class="button cream">GET INVOLVED <?php echo file_get_contents("images/svg-arrow.svg"); ?></a>
      </div>
      <img src="images/footer-cta-bg.svg" class="footer-cta-bg">
      <div class="overlay"></div>
    </div>
    <?php include('footer.php'); ?>