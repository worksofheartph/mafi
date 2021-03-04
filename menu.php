<header id="header">
  <a href="index.php" class="logo"><img src="images/mafi-logo.png"><img src="images/mafi-logo-white.png" class="white"></a>
  <div id="header-menu">
    <a href="getinvolved.php" class="button">GET INVOLVED</a>
    <div id="menuToggle">
      <input type="checkbox" />
      <div class="sun"></div>
      <div class="menu-btn">
        <?php echo file_get_contents("images/menu-line.svg"); ?>
        <?php echo file_get_contents("images/menu-line.svg"); ?>
        <?php echo file_get_contents("images/menu-line.svg"); ?>
      </div>
      <nav id="menu" data-stagger="true" data-delay="250">
        <a href="about.php">About</a>
        <a href="index.php#home-programs">Programs</a>
        <a href="">Stories</a>
        <a href="">News & Updates</a>
        <a href="">Publication</a>
        <a href="">Mt. Apo Park</a>
        <a href="">Get Involved</a>
      </nav>
    </div>
  </div>
</header>