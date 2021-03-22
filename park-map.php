<?php include('header.php'); ?>
<body id="park-maps" class="white">
  <?php include('menu.php'); ?>
  <section id="park-hero" class="flex green">
    <div>
      <h1>Mt. Apo Park</h1>
      <br/>
      <ul id="prog-list">
        <li class="park-list-about">
          <a href="park-about.php" class="button" >
          ABOUT THE PARK</a>
          <?php echo file_get_contents("images/prog-button-bg.svg"); ?>
        </li>
        <li class="park-list-maps selected">
          <a href="park-map.php" class="button" >MAPS & DESTINATIONS</a>
          <?php echo file_get_contents("images/prog-button-bg.svg"); ?>
        </li>
      </ul>
    </div>
    <?php echo file_get_contents("images/svg-horizon.svg"); ?>
  </section>
  <section id="park-maplist">
    <div id="mobile-heading" class="flex flex-start mobile-only">
      <div id="pub-filters" class="flex">
        <div class="dp-list">
          <select name="filter-map" class="toggle-select">
            <option selected="true" disabled="disabled">Map</option>
            <option value="map-drainage" selected="">Drainage</option>
            <option value="map-elevation">Elevation</option>
            <option value="2018">2018</option>
            <option value="2017">2017</option>
            <option value="2016">2016</option>
            <option value="2015">2015</option>
            <option value="2014">2014</option>
            <option value="2013">2013</option>
          </select>
        </div>
    </div>
  </div>
    <div class="two-col">
      <div id="map-filter">
        <ul id="news-cat" class="filter-list">
          <span>Category</span>
          <li><a name="map-drainage" class="toggle-link selected">Drainage Network</a></li>
          <li><a name="map-elevation" class="toggle-link">Elevation</a></li>
          <li><a name="map-erosion" class="toggle-link">Erosion</a></li>
          <li><a name="map-habitat" class="toggle-link">Habitat</a></li>
          <li><a name="map-infrastructure" class="toggle-link">Infrastructure</a></li>
          <li><a name="map-management" class="toggle-link">Management Zones</a></li>
          <li><a name="map-slope" class="toggle-link">Slope</a></li>
          <li><a name="map-soil" class="toggle-link">Soil</a></li>
          <li><a name="map-tenurial" class="toggle-link">Tenurial</a></li>
          <li><a name="map-vegetative" class="toggle-link">Vegetative Cover</a></li>
        </ul>
      </div>
    <div id="maps">
      <img id="map-drainage" class="toggle-content  toggle toggled" src="images/park/map-drainage.png"/>
      <img id="map-elevation" class="toggle-content toggle " src="images/park/map-elevation.png"/>
      <img id="map-erosion" class="toggle-content toggle " src="images/park/map-erosion.png"/>
      <img id="map-habitat" class="toggle-content toggle " src="images/park/map-habitat.png"/>
      <img id="map-infrastructure" class="toggle-content toggle " src="images/park/map-infrastructure.png"/>
      <img id="map-management" class="toggle-content toggle " src="images/park/map-managementzone.png"/>
      <img id="map-slope" class="toggle-content toggle " src="images/park/map-slope.png"/>
      <img id="map-soil" class="toggle-content toggle " src="images/park/map-soil.png"/>
      <img id="map-tenurial" class="toggle-content toggle " src="images/park/map-tenurial.png"/>
      <img id="map-vegetative" class="toggle-content toggle " src="images/park/map-vegetative.png"/>
    </div>
  </div>
</section>
<section id="park-destinations">
  <h1 class="dark-beige-text">Destinations</h1>
  <br/>
  <div class="three-col flex-wrap flex-start">
  <div>
    <img src="images/park/mt-apo-peak.png"/>
    <h3>Mt.Apo Peak</h3>
    <p>The peak of Mt. Apo is a popular park destination of local and foreign tourists. It has an elevation of 10, 311 feet above sea level, the highest in the Philippines. The peak of Mt. Apo can be reached thru trekking starting from various entry points designated by local government units that surrounds the park.</p>
  </div>
  <div>
    <img src="images/park/venado-lake.png"/>
    <h3>Venado Lake</h3>
    <p>The highest endorheic lake in the Philippines with an estimated elevation of 1,984 meters above sea level. The Venado ground is a common camping area of mountain climbers coming from various park entry points. The deer-shaped Venado waters and the surrounding endemic tinikaran trees enriched with biodiverstiy offer a wonderful experience of nature’s beauty.</p>
  </div>
  <div>
    <img src="images/park/agco-lake.png"/>
    <h3>Agco Lake</h3>
    <p>The water of Lake Agco bubbles with heat coming from beneath. The boiling mud around the lake is sometimes used by local inhabitants to cook eggs. Lake Agco has an elevation of 1,250 meters above sea level and is located at Agco, Ilomavis, Kidapawan City.</p>
  </div>
  <div>
    <img src="images/park/mawig-falls.png"/>
    <h3>Mawig Falls</h3>
    <p>This crystal-clear 65 feet-long waterfalls is located in Barangay Balabag, Kidapawan City, North Cotabato. Mawig falls is one of the pristine park destinations within Kidapawan City area. It is the major source of Matingao River.</p>
  </div>
  <div>
    <img src="images/park/kirungdung-falls.png"/>
    <h3>Kirungdung Falls</h3>
    <p>Kirungdong falls is a 200-feet twin falls cascading from the cool headwaters of the mountain streams. It is located at Sitio Kirungdong , Barangay Kinarum, Magpet, North Cotabato within a friendly community characterized by tranquil and rustic setting of real mountain life. Kirungdong falls has an estimated elevation of 1,090 meters above sea level.</p>
  </div>
  <div>
    <img src="images/park/pidlanan-falls.png"/>
    <h3>Pidlanan Falls</h3>
    <p>Pidlanan falls is a favorite picnic area of local residents. It is lined with huge rocks and the mountain waters drops 40 feet in height. Pidlanan falls has an elevation of 1,020 meters above sea level. It is located in Barangay Magkaalam, Magpet, North Cotabato.</p>
  </div>
  <div>
    <img src="images/park/tawsuvan-falls.png"/>
    <h3>Tausuvan Falls</h3>
    <p>The 85.2-feet high Tawsuvan Falls is located at Sitio Waterfalls, Bongolanon, Magpet North Cotobato. Sitio Waterfalls is a tribal community inhabited by Manobos, an indigenous people in Mt. Apo.</p>
  </div>
  <div>
    <img src="images/park/mahomanoy-resort.png"/>
    <h3>Mahomanoy Resort</h3>
    <p>The resort started in 2003 with just one pool. With the growing local and foreign visitors each year, more pools were developed by the local IP community using the heat from nearby hotsprings and Agco lake. The resort is located at Agco, Ilomavis, Kidapawan City.</p>
  </div>
</div>
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