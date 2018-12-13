<?php
require "includes/head.php"
?>

<body id="index_page">
  
    <!-- Background & main-container for smaller screens -->
    <div class="d-block d-md-none small_screen_background_image">

      <!--Logo-->
      <div class="container logo_container">
        <img class="small_screen_logo_image" src="images/logo_dark.png" alt="Logo">
      </div>

      <!-- Container for elements we want to flex-end -->
      <div class="flex_bottom_container">
        <!-- Container for buttons  -->
        <div class="small_screen_button_container justify-content-between">
         
          <button type="button" onclick="location.href='views/login_page.php?action=login';" class="btn primory_btn_inverse">
            Log in
          </button>

          <button type="button" onclick="location.href='views/login_page.php?action=register';" class="btn primory_btn">
            Register
          </button>
        
        </div> <!-- Container for buttons  -->

      </div> <!-- Container for elements we want to flex-end -->

    </div> <!-- Background-image for smaller screens -->

    <div class="hero_container d-md-none">
      <div class="hero">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat magni necessitatibus at optio, quod adipisci modi veritatis impedit vero. Reprehenderit? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit, aperiam.

      </div>
      <div class="hr_imitation"></div>

      <?php
      require "includes/footer.php"
      ?>

    </div>

  <div class="desktop_background_gradient">
    <section class="container desktop_container d-none d-md-flex">
      
        <div class="row justify-content-around">

          <!-- Container for image on bigger screens -->
          <div class="d-none d-md-flex col-md-7 col-lg-5 justify-content-center big_screen_image">
            <img class="img-fluid" src="images/Eske_01.jpg" alt="Millhouse Store Responsive image">
          </div>

          <!-- Wrapper for logo and buttons on bigger screens -->
          <div class="d-none d-md-flex col-md-4 col-lg-5 big_screen_logo_btn_container">

            <div>
              <!--Logo for bigger screens-->
              <div class="big_screen_logo">
                <img class="img-fluid" src="images/logo_dark.png" alt="Millhouse Logo">
              </div> <!--Logo for bigger screens-->

              <!-- Container for buttons  -->
              <div class="big_screen_button_container">
              
                <button type="button" onclick="location.href='views/login_page.php?action=login';" class="btn primory_btn_inverse">
                  Log in
                </button>
              
                <button type="button" onclick="location.href='views/login_page.php?action=register';" class="btn primory_btn">
                  Register
                </button>

              </div> <!-- Container for buttons  -->
            </div> 

          </div> <!-- Wrapper for logo and buttons on bigger screens -->
        </div>
      
    </section>
  </div>

</body>

</html>

