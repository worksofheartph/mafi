<?php include('header.php'); ?>
<body id="news">
  <?php include('menu.php'); ?>
  <section id="news-page">
    <div class="section-heading">
      <h1>Latest News</h1>
    </div>
    <div id="news-container" class="flex flex-start">
<div id="mobile-heading" class="flex flex-start mobile-only">
  <div id="pub-filters" class="flex">
    <div class="dp-list">
      <select name="filter-year" onchange="showHide(this)">
        <option selected="true" disabled="disabled">Year</option>
        <option value="2020">2020</option>
        <option value="2019">2019</option>
        <option value="2018">2018</option>
        <option value="2017">2017</option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
      </select>
    </div>
    <div class="dp-list">
      <select name="filter-type" onchange="showHide(this)">
        <option selected="true" disabled="disabled">Type</option>
        <option value="a">A</option>
        <option value="b">B</option>
        <option value="x">C</option>
      </select>
    </div>
    <div class="dp-list">
      <select name="filter-prog" onchange="showHide(this)">
        <option selected="true" disabled="disabled">Program</option>
        <option value="educ">Education</option>
        <option value="envi">Community and Environment</option>
        <option value="culture">Cultural Heritage</option>
      </select>
    </div>
  </div>
</div>
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
      <?php echo file_get_contents("images/svg-footer-cta-bg.svg"); ?>
      <div class="overlay"></div>
    </div>
    <?php include('footer.php'); ?>