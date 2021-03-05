<?php include('header.php'); ?>
<body id="publications" class="light-beige">
  <?php include('menu.php'); ?>
  <section id="pub-page">
    <div class="section-title">
      <h1>Publications</h1>
    </div>
    <div class="flex flex-start">
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
      <div id="searchBox">
        <form action="/search" class="search-form" id="searchform" method="get">
          <span id="noEasy"><input class="sb-search-submit" type="submit" value="">
          <span class="sb-icon-search"></span></span>
          <input id="sbox" name="q" onblur="if (this.placeholder == '') {this.placeholder = 'Search';}" onfocus="if (this.placeholder == 'Search') {this.placeholder = '';}" placeholder="Search" type="text" x-webkit-speech="">
        </form>
      </div>
    </div>
    <ul id="pub-list">
      <li><h3>List of TVSP Scholar graduates as of December 2015</h3>
        <div class="pub-info">
          <h5 class="dark-beige-text">PDF</h5>
          <h5 class="dark-beige-text">0.0KB</h5>
          <a href="" class="button">DOWNLOAD</a>
        </div>
      </li>
      <li><h3>List of TVSP Scholar graduates as of December 2015</h3>
        <div class="pub-info">
          <h5 class="dark-beige-text">PDF</h5>
          <h5 class="dark-beige-text">0.0KB</h5>
          <a href="" class="button">DOWNLOAD</a>
        </div>
      </li>
      <li><h3>List of TVSP Scholar graduates as of December 2015</h3>
        <div class="pub-info">
          <h5 class="dark-beige-text">PDF</h5>
          <h5 class="dark-beige-text">0.0KB</h5>
          <a href="" class="button">DOWNLOAD</a>
        </div>
      </li>
      <li><h3>List of TVSP Scholar graduates as of December 2015</h3>
        <div class="pub-info">
          <h5 class="dark-beige-text">PDF</h5>
          <h5 class="dark-beige-text">0.0KB</h5>
          <a href="" class="button">DOWNLOAD</a>
        </div>
      </li>
      <li><h3>List of TVSP Scholar graduates as of December 2015</h3>
        <div class="pub-info">
          <h5 class="dark-beige-text">PDF</h5>
          <h5 class="dark-beige-text">0.0KB</h5>
          <a href="" class="button">DOWNLOAD</a>
        </div>
      </li>
      <li><h3>List of TVSP Scholar graduates as of December 2015</h3>
        <div class="pub-info">
          <h5 class="dark-beige-text">PDF</h5>
          <h5 class="dark-beige-text">0.0KB</h5>
          <a href="" class="button">DOWNLOAD</a>
        </div>
      </li>
      <li><h3>List of TVSP Scholar graduates as of December 2015</h3>
        <div class="pub-info">
          <h5 class="dark-beige-text">PDF</h5>
          <h5 class="dark-beige-text">0.0KB</h5>
          <a href="" class="button">DOWNLOAD</a>
        </div>
      </li>
      <li><h3>List of TVSP Scholar graduates as of December 2015</h3>
        <div class="pub-info">
          <h5 class="dark-beige-text">PDF</h5>
          <h5 class="dark-beige-text">0.0KB</h5>
          <a href="" class="button">DOWNLOAD</a>
        </div>
      </li>
      <li><h3>List of TVSP Scholar graduates as of December 2015</h3>
        <div class="pub-info">
          <h5 class="dark-beige-text">PDF</h5>
          <h5 class="dark-beige-text">0.0KB</h5>
          <a href="" class="button">DOWNLOAD</a>
        </div>
      </li>
      <li><h3>List of TVSP Scholar graduates as of December 2015</h3>
        <div class="pub-info">
          <h5 class="dark-beige-text">PDF</h5>
          <h5 class="dark-beige-text">0.0KB</h5>
          <a href="" class="button">DOWNLOAD</a>
        </div>
      </li>
    </ul>
    <ul class="pagination">
      <li class="selected">1</li>
      <li>2</li>
      <li>3</li>
      <?php echo file_get_contents("images/svg-arrow.svg"); ?>
    </ul>
  </section>
  
  <footer>
    <div id="footer-cta">
      <img src="images/footer-cta-bg.svg" class="footer-cta-bg">
    </div>
    <?php include('footer.php'); ?>