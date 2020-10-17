<?php 
  include "include/header.php";
 ?>

  <section id="Contact" class="content-section">
    <div class="container-fluid">
      <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3818.602737072826!2d96.12323681434621!3d16.846052822626405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c195f4c6bf8dd1%3A0xb338113a5340732d!2sMMIT!5e0!3m2!1sen!2smm!4v1602321509264!5m2!1sen!2smm" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
    </div>
    <div class="container">

      <div class="block-heading">
        <h2>Contact Us</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      </div>
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6">
          <div class="contact-wrapper">
            <div class="address-block border-bottom">
              <h3 class="add-title">Online Shop</h3>
              <div class="c-detail">
                <span class="c-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span><span class="c-info">&nbsp;Yangon</span>
              </div>
              <div class="c-detail">
                <span class="c-icon"><i class="fa fa-phone" aria-hidden="true"></i></span><span class="c-info">09 790586341</span>
              </div>
              <div class="c-detail">
                <span class="c-icon"><i class="fa fa-envelope" aria-hidden="true"></i></span><span class="c-info">soe@gmail.com</span>
              </div>
            </div>
            <div class="address-block">
              <h3 class="add-title">Branch</h3>
              <div class="c-detail">
                <span class="c-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span><span class="c-info">&nbsp;98 Berry - Cheyenne, CO 80810</span>
              </div>
              <div class="c-detail">
                <span class="c-icon"><i class="fa fa-phone" aria-hidden="true"></i></span><span class="c-info">+123 4567 8987</span>
              </div>
              <div class="c-detail">
                <span class="c-icon"><i class="fa fa-envelope" aria-hidden="true"></i></span><span class="c-info">email@yourdomain.com</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
          <div class="form-wrap">
            <form action="javascript:void(0)" method="post">
              <div class="fname floating-label">
                <input type="text" class="floating-input" name="full name" />
                <label for="title">First Name</label>
              </div>
              <div class="fname floating-label">
                <input type="text" class="floating-input" name="full name" />
                <label for="title">Last Name</label>
              </div>
              <div class="email floating-label">
                <input type="email" class="floating-input" name="email" />
                <label for="email">Email</label>
              </div>
              <div class="contact floating-label">
                <input type="tel" class="floating-input" name="contact" />
                <label for="email">Mobile</label>
              </div>
              <div class="company floating-label">
                <textarea type="text" class="floating-input" name="company" /></textarea>
                <label for="email">Message</label>
              </div>
              <div class="submit-btn">
                <button type="submit">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php 
    include "include/footer.php"
 ?>