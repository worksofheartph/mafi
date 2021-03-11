<?php include('header.php'); ?>
<body id="getinvolved" class="light-beige">
  <?php include('menu.php'); ?>
  <section id="getinvolved-hero" class="flex cream">
    <?php echo file_get_contents("images/svg-mountain-flipped.svg"); ?>
  </section>
  <section id="getinvolved-intro" class="flex two-col cream">
    <div>
      <h1>Get Involved</h1>
      <p>In order for MAFI to sustain its gains and expand its services, we call on your support to our programs and to be part of our next 25 years of journey.</p>
      <p>Your donation will help us:<br/>
        <ul>
          <li>Send poor and deserving children of upland dwellers and indigenous peoples to school;</li>
          <li>Empower the communities;</li>
          <li>Promote and conserve indigenous cultural heritage;</li>
          <li>Protect the environment; and,</li>
          <li>Build sustainable futures in the Mt. Apo Natural Park</li>
        </ul>
      </p>
      <p>Please give to sustain our noble cause!</p>
    </div>
    <div>
      <div class="link-list">
        <h3>Donations</h3>
        <p>For cash donations, fill up our form.</p>
        <p>
          <a href="" class="button">DONATION FORM <?php echo file_get_contents("images/svg-arrow.svg"); ?></a>
        </p>
        <p>For in-kind (e.g. equipment, materials, other logistics), contact Armando C. Pacudan at <a href="mailto:acpacudan@mafi.org.ph">acpacudan@mafi.org.ph</a> or on our <a href="">Facebook page Mount Apo Foundation, Inc.</a> </p>
      </div>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.03470528993!2d125.08518319999999!3d7.005196299999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32f8f922455b33d3%3A0xa59213f89bd37b81!2sMount%20Apo%20Foundation%2C%20Inc.!5e0!3m2!1sen!2sph!4v1615428835834!5m2!1sen!2sph" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  </section>
  <section id="getinvolved-address" class="light-beige">
    <div class="flex three-col">
      <div>
        <h3>Office Address</h3>
        <p>2114 Eugenio Perez St., Poblacion, <br/>
          Kidapawan City 9400<br/>
        North Cotabato, Philippines</p>
      </div>
      <div>
        <h3>Telephone No.</h3>
        <div class="flex two-col">
          <span>Program Operations</span>
          <spanp>(06364) 577-4136</span>
        </div>
        <div class="flex two-col">
          <span>Administration</span>
          <span>(06364) 577-1831</span>
        </div>
        <div class="flex two-col">
          <span>Executive Director</span>
          <span>(06364) 577-4137</span>
        </div>
      </div>
      <div>
        <h3>&nbsp;</h3>
      info@mafi.org.ph</div>
    </div>
  </section>
  <section id="getinvolved-form">
    <h2 class="center-text">Become a friend of MAFI</h2>
    <form id="contact-form">
      <input type="text" name="full-name" placeholder="Full Name *">
      <input type="text" name="company" placeholder="Company & Designation">
      <input type="email" name="email-address" placeholder="Email Address *">
      <input type="text" name="phone" placeholder="Contact Number">
      <textarea placeholder="Message"></textarea>
      <button type="submit" class="button">SEND <?php echo file_get_contents("images/svg-arrow.svg"); ?></button>
    </form>
        <?php echo file_get_contents("images/svg-man-ground.svg"); ?>
        <?php echo file_get_contents("images/home-stories.svg"); ?>

  </section>
  <footer>
    <div id="footer-cta">
      <?php echo file_get_contents("images/svg-footer-cta-bg.svg"); ?>
    </div>
    <?php include('footer.php'); ?>