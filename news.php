<?php include('header.php'); ?>
<body id="news">
  <?php include('menu.php'); ?>
  <section id="news-page">
    <div class="section-heading">
      <h1>Latest News</h1>
    </div>
    <div id="news-container" class="flex flex-start">
      <div id="news-filter">
        <ul id="news-cat" class="filter-list">
          <span>Category</span>
          <li><a href="" style="--color: var(--teal)">News</a></li>
          <li><a href="" style="--color: var(--red)">Featured</a></li>
          <li><a href=""style="--color: var(--beige)">Community Update</a></li>
        </ul>
        <ul class="filter-list">
          <span>Year</span>
          <li><a href="">2020 December</a></li>
          <li><a href="">2020 November</a></li>
          <li><a href="">2020 October</a></li>
          <li><a href="">2020 September</a></li>
          <li><a href="">2020 August</a></li>
          <li><a href="">2020 July</a></li>
          <li><a href="">2020 June</a></li>
        </ul>
      </div>
      <div id="news-list">
        <div class="news-item">
          <img src="images/photo-4.png">
          <div class="news-info">
            <h5 class="date" style="--color: var(--yellow)">August 2, 2020</h5>
            <a href="news-article.php"><h3>IP leaders confer Honorary Datu title on MAFI Chairman</h3></a>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis ultricies lacus sed turpis tincidunt id. Sodales ut etiam sit amet nisl purus in mollis. Lobortis scelerisque fermentum dui faucibus in ornare quam viverra orci.</p>
          </div>
        </div>
        <div class="news-item">
          <img src="images/photo-4.png">
          <div class="news-info">
            <h5 class="date" style="--color: var(--yellow)">August 2, 2020</h5>
            <a href="news-article.php"><h3>IP leaders confer Honorary Datu title on MAFI Chairman</h3></a>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis ultricies lacus sed turpis tincidunt id. Sodales ut etiam sit amet nisl purus in mollis. Lobortis scelerisque fermentum dui faucibus in ornare quam viverra orci.</p>
          </div>
        </div>
        <div class="news-item">
          <img src="images/photo-4.png">
          <div class="news-info">
            <h5 class="date" style="--color: var(--yellow)">August 2, 2020</h5>
            <a href="news-article.php"><h3>IP leaders confer Honorary Datu title on MAFI Chairman</h3></a>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis ultricies lacus sed turpis tincidunt id. Sodales ut etiam sit amet nisl purus in mollis. Lobortis scelerisque fermentum dui faucibus in ornare quam viverra orci.</p>
          </div>
        </div>
        <div class="news-item">
          <img src="images/photo-4.png">
          <div class="news-info">
            <h5 class="date" style="--color: var(--yellow)">August 2, 2020</h5>
            <a href="news-article.php"><h3>IP leaders confer Honorary Datu title on MAFI Chairman</h3></a>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis ultricies lacus sed turpis tincidunt id. Sodales ut etiam sit amet nisl purus in mollis. Lobortis scelerisque fermentum dui faucibus in ornare quam viverra orci.</p>
          </div>
        </div>
        <div class="news-item">
          <img src="images/photo-4.png">
          <div class="news-info">
            <h5 class="date" style="--color: var(--yellow)">August 2, 2020</h5>
            <a href="news-article.php"><h3>IP leaders confer Honorary Datu title on MAFI Chairman</h3></a>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis ultricies lacus sed turpis tincidunt id. Sodales ut etiam sit amet nisl purus in mollis. Lobortis scelerisque fermentum dui faucibus in ornare quam viverra orci.</p>
          </div>
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