<?php include('header.php'); ?>
<body id="program">
  <?php include('menu.php'); ?>
  <section id="prog-hero" class="flex light-beige">
    <div>
      <h1>Our Programs</h1>
      <br/>
      <ul id="prog-list">
        <li class="prog-list-educ selected">
          <a href="" class="button" >
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
    </div>
    <?php echo file_get_contents("images/program-educ.svg"); ?>
  </section>
  <section id="prog-desc">
    <div class="two-col">
      <div>
        <p>Provides scholarship grants for senior high school and collegiate level to qualified and deserving students within and around Mount Apo Natural Park. When resources allow it, financial assistance is also provided, on a limited and selective scale, for post-baccalaureate degrees like Masters in Education and Law.</p>
        <p>To make the education program more relevant, responsive and sustainable, MAFI works for the establishment of strong partnerships among parents and/or guardians, schools, and other key partners where regular avenues for mutual support systems are created.  In particular, the enhanced educational development program of the scholars shall include the integration of cultural values as well as environmental awareness into their in-house learning competencies.
        </p>
      </div>
      <ul class="link-list">
        <h3>More Info</h3>
        <li><a class="button" onclick="scrollToTargetAdjusted('prog-numbers');">Highlights <?php echo file_get_contents("images/svg-arrow.svg"); ?></a></li>
        <li><a class="button" onclick="scrollToTargetAdjusted('programs-project');">PROJECT BRIEFS <?php echo file_get_contents("images/svg-arrow.svg"); ?></a></li>
        <li><a class="button" onclick="scrollToTargetAdjusted('program-data');">DATA QUICK GLANCES <?php echo file_get_contents("images/svg-arrow.svg"); ?></a></li>
        <li><a class="button" onclick="scrollToTargetAdjusted('stories');">STORIES <?php echo file_get_contents("images/svg-arrow.svg"); ?></a></li>
      </ul>
    </div>
  </section>
  <section id="prog-numbers" class="green center-text">
    <h2>320 scholar graduates</h2>
    <p>From 1993 to 2020, 78% of 420 scholarship grantees </p><br/>
    <h2>81% IP grantees</h2>
    <p> 19% are non-IP</p><br/>
    <h2>19 currently enrolled</h2>
    <p>under the CDSP, for SY 2020</p><br/>
    </h2>
  </section>
  <section id="programs-slider">
    <div class="section-slider">
      <div class="slider" data-gap="80">
        <div class="panel">
          <img src="images/educ/educ-1.png">
          <span class="panel-caption">lorem ipsum</span>
        </div>
        <div class="panel">
          <img src="images/educ/educ-2.png">
          <span class="panel-caption">lorem ipsum</span>
        </div>
        <div class="panel">
          <img src="images/educ/educ-3.png">
          <span class="panel-caption">lorem ipsum</span>
        </div>
        <div class="panel">
          <img src="images/educ/educ-4.png">
          <span class="panel-caption">lorem ipsum</span>
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
  <section id="programs-project">
    <div class="divider-line"><?php echo file_get_contents("images/svg-divider-line.svg"); ?></div>
    <div class="section-heading">
      <h1 class="dark-beige-text">Current Projects</h1>
      <a href="projects.php" class="button view-all dark-beige-text">VIEW ALL</a>
    </div>
    <div class="two-col">
      <div>
        <h3>Collegiate Degree Scholarship Project</h3>
        <p>The CDSP provides thirty (30) scholarship grants to qualified and deserving applicants. This project provides 4-year college education to admitted scholars with the aim of producing college degree graduates who are professionally qualified to serve the community and increasing their opportunity for a better life.</p>
        <p>As of 2020, the foundation has produced 207 degree-course graduates coming from different barangays in Kidapawan City and the municipalities of Magpet and Makilala in North Cotabato.</p>
      </div>
      <img src="images/educ/project-collegescholarship.jpg">
    </div>
    <div class="two-col">
      <div>
        <h3>Senior High School - Collegiate Educational Assistance Program (SHS - CEAP)</h3>
        <p>MAFI’s pivot of its scholarship program to pilot-test senor high school (SHS) education in 2017, as a springboard to college education support, was named as “Senior High School to College Education Assistance Project (SHS-CEAP). The scheme adopted was in conformity with the Department of Education’s (DepEd) K-12 curriculum, to allow opportunity for this transition to both the academic community and the students themselves in order to reduce the impact of K-12 on MAFI’s college-based scholarship. The two-year SHS phase aims to prepare SHS beneficiaries by allowing them to situate their interests, hone themselves through their chosen tracks and strands, and providing them better preparation for college education.</p>
      </div>
      <img src="images/banner-program-educ.png">
    </div>
    
  </section>
  <section id="program-data" class="light-beige">
    <div class="section-heading">
      <h1>Data Quick Glances</h1>
      <a href="publications.php" class="button dark-beige-text">VIEW ALL</a>
    </div>
    <div id="data-grid" class="flex">
      <a href="" class="data-item">
        <img src="images/data.png"><br/>
        List of CDSP Scholar graduates as of June 2016
      </a>
      <a href="" class="data-item">
        <img src="images/data.png"><br/>
        List of CDSP Scholar graduates as of June 2016
      </a>
      <a href="" class="data-item">
        <img src="images/data.png"><br/>
        List of CDSP Scholar graduates as of June 2016
      </a>
      <a href="" class="data-item">
        <img src="images/data.png"><br/>
        List of CDSP Scholar graduates as of June 2016
      </a>
    </div>
  </div>
</section>
<section id="stories" class="dark-beige">
  <div class="section-heading">
    <h1>Stories</h1>
    <a href="stories.php" class="button light-beige-text">VIEW ALL</a>
  </div>
  <div
    class="stories-list slider"
    data-gap="40"
    data-anchor="0"
    data-hanger="8.3333%"
    >
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