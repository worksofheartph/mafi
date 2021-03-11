<?php include('header.php'); ?>
<body id="park-about" class="white">
  <?php include('menu.php'); ?>
  <section id="park-hero" class="flex green">
    <div>
      <h1>Mt. Apo Park</h1>
      <br/>
      <ul id="prog-list">
        <li class="park-list-about selected">
          <a href="#" class="button" >
          ABOUT THE PARK</a>
          <?php echo file_get_contents("images/prog-button-bg.svg"); ?>
        </li>
        <li class="park-list-maps">
          <a href="park-map.php" class="button" >MAPS & DESTINATIONS</a>
          <?php echo file_get_contents("images/prog-button-bg.svg"); ?>
        </li>
      </ul>
    </div>
    <?php echo file_get_contents("images/svg-horizon.svg"); ?>
  </section>
  <section id="prog-desc">
    <div class="two-col">
      <div>
        <p>Mt. Apo Natural Park (MANP) is the highest mountain peak in the Philippines with an elevation of 2,954 meters above sea level and a land area of 65,900.9 hectares.  It is geographically located between Region XII comprising the province of North Cotabato and Region XI comprising the province of Davao del Sur. In North Cotabato, it is bounded in the municipalities of Magpet and Makilala and the City of Kidapawan; in Davao del Sur, it straddles in the municipalities of Bansalan and Sta. Cruz, the City of Digos and the City of Davao.</p>
        <p>Mt. Apo Natural Park is declared as a protected area under the National Integrated Protected Areas System (NIPAS) Act, or Republic Act No. 7586 enacted and approved on June 1, 1992 by former President  Corazon C. Aquino. More importantly, Mt. Apo was recognized internationally as one of the heritage sites by the Association of Southeast Asian Nations (ASEAN).
        </p>
      </div>
      <ul class="link-list">
        <h3>More Info</h3>
        <li><a class="button" onclick="scrollToTargetAdjusted('park-overview');">OVERVIEW <?php echo file_get_contents("images/svg-arrow.svg"); ?></a></li>
        <li><a class="button" onclick="scrollToTargetAdjusted('park-bio');">BIODIVERSITY <?php echo file_get_contents("images/svg-arrow.svg"); ?></a></li>
        <li><a class="button" onclick="scrollToTargetAdjusted('park-pop');">POPULATION, ETHNICITY, AND AREA OF RESPONSIBILITY <?php echo file_get_contents("images/svg-arrow.svg"); ?></a></li>
        <li><a class="button" onclick="scrollToTargetAdjusted('park-gov');">PARK MANAGEMENT AND GOVERNANCE <?php echo file_get_contents("images/svg-arrow.svg"); ?></a></li>
      </ul>
    </div>
  </section>
  <section id="programs-slider">
    <div class="section-slider">
      <div class="slider" data-gap="80">
        <div class="panel">
          <img src="images/park/park-1.png">
          <span class="panel-caption">lorem ipsum</span>
        </div>
        <div class="panel">
          <img src="images/park/park-2.png">
          <span class="panel-caption">lorem ipsum</span>
        </div>
        <div class="panel">
          <img src="images/park/park-3.png">
          <span class="panel-caption">lorem ipsum</span>
        </div>
        <div class="panel">
          <img src="images/park/park-4.png">
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
  <section id="park-overview">
    <?php echo file_get_contents("images/svg-man-ground.svg"); ?>
    <div class="flex two-col">
      <div>
        <h4>Topography and Soil Type</h4>
        <br/>
        <p>MANP is typically volcanic terrain, characterized by gentle to moderate up to rugged slopes or inclinations.  Features include cinder cones, breached craters and volcanic plateaus.</p>
        <p>Soil type is clay-loam fertile volcanic.  In the forested area, soils have high organic matter content due to abundant vegetation.</p>
      </div>
      <div>
        <h4>Climate and Hydrology</h4>
        <br/>
        <p>Mt. Apo generally enjoys tropical rainy climate.  Rainfall is relatively distributed throughout the year.  Mean monthly temperature ranges from a low 26.4 degrees Celsius to 27.9 degrees Celsius.</p>
        <p>The natural park has 19 major rivers and 21 creeks draining its 8 major watersheds.  It has 4 major lakes and many waterfalls and hot spring.</p>
      </div>
    </div>
  </section>
  <section id="park-bio" class="yellow two-col">
    <img src="images/park/biodiversity.png">
    <div>
      <h4>Biodiversity</h4><br/>
      <p>Studies show that Mt. Apo is a rich botanical garden in Southeast Asia with around 800 types of flora.  Around 27 floral species have economic, cultural and medicinal significance.  Famous native tree species found at the higher elevation include *tinikaran.*</p>
      <p>In terms of fauna, there are around 272 types of birds and 54 species of mammals including the national bird, the Philippine Eagle.  Out of 414 faunal species, 207 of it are endemic to Mt. Apo.  Some 146 of faunal and 27 floral species have economic, cultural and medicinal significance.</p>
      <p>**Photo Credits: Atty. Ermelo Libre, MAFI and DENR</p>
    </div>
  </section>
  <section id="park-pop" class="two-col">
    <div>
      <h4>Population, Ethnicity & Area of Responsibility</h4><br/>
      <p>The 39 barangays within Mt. Apo are inhabited by indigenous peoples and upland non-IP dwellers.  MAFI’s 2018 baseline survey revealed that of the 39 barangays, its area of responsibility (AOR) within the 10-km radius covers 33 barangays, and it had a total household population of 26,737. Of these, 35% were IP households while the majority</p>
      <p>(65%) were non-IP households.</p>
    </div>
    <div></div>
    <?php echo file_get_contents("images/svg-park-people.svg"); ?>
  </section>
  <section id="park-gov" class="two-col light-beige">
    <div>
      <h4>Park Management and Governance</h4><br/>
      <p>The Protected Area Management Board (PAMB) composed of around 70 members governs the Mt. Apo Natural Park (Sec. 7 of RA 9237). Mandated as the highest policy-making body of MANP, the PAMB en banc is headed by the Regional Directors of DENR XI and DENR XII and represented by multi-sectoral members.</p>
    </div>
    <div><img src="images/park/map-politicalboundary.png"/></div>
  </section>
  <footer>
    <div id="footer-cta" style="background-image: url(images/banner-cta-1.png)">
      <div class="footer-cta-content">
        <?php echo file_get_contents("images/icon-0-envi.svg"); ?>
        <h2>Contribute to the cause</h2>
        <a href="getinvolved.php" class="button">GET INVOLVED <?php echo file_get_contents("images/svg-arrow.svg"); ?></a>
      </div>
      <?php echo file_get_contents("images/svg-footer-cta-bg.svg"); ?>
      <div class="overlay"></div>
    </div>
    <?php include('footer.php'); ?>