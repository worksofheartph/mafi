<?php include('header.php'); ?>
<body id="projects">
  <?php include('menu.php'); ?>
  <section id="prog-hero" class="flex light-beige">
    <div>
      <br/>
      <ul id="prog-list">
        <li class="prog-list-educ selected">
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
    </div>
  </section>
  <section id="programs-project">
    <div class="section-heading">
      <h1 class="dark-beige-text">Past Projects on Education</h1>
      <a href="program-educ.php" class="button view-all dark-beige-text">BACK TO EDUCATION <?php echo file_get_contents("images/svg-arrow.svg"); ?></a>
    </div>
    <div class="two-col">
      <div>
        <h3>Technical/Vocational Scholarship Project</h3>
        <p>The Technical-Vocational Scholarship Project (TVSP) provides thirty (30) scholarship grants to qualified and deserving applicants. This project provides technical-vocational education and training to the admitted scholars with the aim of producing graduates who are professionally trained and qualified to deliver technical services that are needed in the community and increasing their opportunity for gainful employment.</p>
        <p>As of March 2013, the foundaton has produced 49 TVSP graduates coming from different barangays in Kidapawan City and the municipalities of Magpet and Makilala in North Cotabato.</p>
      </div>
      <img src="images/educ/project-techvoc.jpg">
    </div>
    <div class="two-col">
      <div>
        <h3>High School Student Assistance Project</h3>
        <p>The High School Student Assistance Project (HSSAP) provides relevant assistance to high school students enrolled in public high schools within and around Mt. Apo. The project (a) grants support in times of accidents, (b) provides first aid medicines and supply, (c) augments learning for productive skills and (d) enhances formation of personal integrity values, with the purpose of developing productive and responsible individuals.</p>
      </div>
      <img src="images/educ/project-studentassistance.jpg">
    </div>
    <div class="two-col">
      <div>
        <h3>Masters in Education Scholarship Project</h3>
        <p>The Masters in Education Scholarship Project (MESP) provides two (2) scholarship grants to qualified applicants who are members of the indigenous/tribal community. This project aims to develop highly qualified educators and school administrators who can be instruments in providing quality education of students and pupils within and around Mt. Apo.</p>
      </div>
      <img src="images/educ/project-mastersscholarship.jpg">
    </div>
    <div class="two-col">
      <div>
        <h3>Law Scholarship Grant Project</h3>
        <p>The Law Scholarship Grant Project (LSGP) provides two (2) law scholarship grants to qualified applicants who are members of the indigenous/tribal community. This project aims to produce IP/tribal lawyers who can effectively lead, assist and legally address the aspirations, plans and concerns of various tribal communities within and around Mt. Apo.</p>
      </div>
      <img src="images/educ/project-lawscholarship.jpg">
    </div>
    <div class="two-col">
      <div>
        <h3>Teacher to the Barangay Project</h3>
        <p>Teacher to the Barangay Project (TBP) creates a pool of volunteer teachers from MAFI Education scholar-graduates who could render voluntary teaching services in public elementary or high schools within and around Mt. Apo as a noble gesture of serving back their own respective communities.</p>
      </div>
      <img src="images/educ/project-teacherbarangay.jpg">
    </div>
    <div class="two-col">
      <div>
        <h3>Community Information Service Project</h3>
        <p>The Community Information Service Project (CISP) publishes a community bulletin, the Tribu MAFI, as information service to the communities being served. A website, www.mafi.org.ph, is also maintained that provides program performance of the foundation, basic data of Mt. Apo Park and other information relevant to the community and indigenous people.</p>
      </div>
      <img src="images/educ/project-cis.jpg">
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
    <?php echo file_get_contents("images/footer-cta-bg.svg"); ?>
    <div class="overlay"></div>
  </div>
  <?php include('footer.php'); ?>