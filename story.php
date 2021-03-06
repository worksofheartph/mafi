<?php include('header.php'); ?>
<body id="story" class="white light-beige">
  <?php include('menu.php'); ?>
  <section id="story-image" style="background-image: url(images/story-photo.png)">
  </section>
  <section class="light-beige">
    <div id="story-content" class="cream">
      <h5>MAFI STORIES</h5>
      
      <h1>Education partner environmentalist and wildlife conservation enthusiast </h1>
      <h5 class="author">Atty. Ivyrose Paz</h5>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis ultricies lacus sed turpis tincidunt id. Sodales ut etiam sit amet nisl purus in mollis. Lobortis scelerisque fermentum dui faucibus in ornare quam viverra orci. Integer eget aliquet nibh praesent tristique magna sit amet purus. Convallis a cras semper auctor neque. Diam quis enim lobortis scelerisque fermentum. Commodo viverra maecenas accumsan lacus vel. Metus aliquam eleifend mi in. Amet nisl suscipit adipiscing bibendum.</p>
      <p>Enim eu turpis egestas pretium aenean pharetra magna. Nullam ac tortor vitae purus. Ut etiam sit amet nisl purus. Et netus et malesuada fames ac turpis egestas sed tempus. Molestie nunc non blandit massa enim nec dui. Commodo sed egestas egestas fringilla. Mauris pharetra et ultrices neque ornare aenean euismod elementum. Vitae semper quis lectus nulla at volutpat diam ut venenatis. Eget nunc scelerisque viverra mauris in aliquam. Ac tincidunt vitae semper quis. Eget nunc lobortis mattis aliquam faucibus purus in. Amet commodo nulla facilisi nullam vehicula. Amet justo donec enim diam vulputate.</p>
      <p>Erat nam at lectus urna duis convallis convallis tellus. Neque viverra justo nec ultrices. Eget lorem dolor sed viverra ipsum nunc aliquet bibendum enim. Mauris in aliquam sem fringilla ut morbi tincidunt augue interdum. Volutpat maecenas volutpat blandit aliquam etiam. Cras pulvinar mattis nunc sed blandit. Gravida in fermentum et sollicitudin. Nulla facilisi morbi tempus iaculis. Sed cras ornare arcu dui vivamus arcu felis. Sit amet volutpat consequat mauris. Phasellus faucibus scelerisque eleifend donec pretium vulputate. Placerat duis ultricies lacus sed turpis tincidunt. Lorem ipsum dolor sit amet consectetur adipiscing elit. Ut morbi tincidunt augue interdum velit euismod in pellentesque. Pellentesque habitant morbi tristique senectus et netus et malesuada. Sagittis nisl rhoncus mattis rhoncus urna neque viverra justo nec. Quam vulputate dignissim suspendisse in.</p>
      <p>Mauris rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque. A erat nam at lectus urna duis. Arcu dictum varius duis at consectetur lorem donec massa sapien. Urna id volutpat lacus laoreet non. Ipsum dolor sit amet consectetur adipiscing elit pellentesque habitant. Porttitor eget dolor morbi non. Scelerisque eleifend donec pretium vulputate. Orci sagittis eu volutpat odio facilisis. Nullam non nisi est sit. Tempor orci dapibus ultrices in iaculis nunc. Turpis massa sed elementum tempus. </p>
    </div>
  </section>
  <section id="stories-slider" class="light-beige">
    <div class="section-heading">
      <h1>More Stories</h1>
      <a href="stories.php" class="button">VIEW ALL <?php echo file_get_contents("images/svg-arrow.svg"); ?></a>
    </div>
    <div
      class="stories-list slider"
      data-gap="40"
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
    <a href="#" class="slider-control slider-prev">
      <?php echo file_get_contents("images/svg-arrow.svg"); ?>
    </a>
    <a href="#" class="slider-control slider-next">
      <?php echo file_get_contents("images/svg-arrow.svg"); ?>
    </a>
  </section>
  <footer>
    <div id="footer-cta">
      <?php echo file_get_contents("images/footer-cta-bg.svg"); ?>
    </div>
    <?php include('footer.php'); ?>