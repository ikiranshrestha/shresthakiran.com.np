<section class="panel b-green" id="4">
  <article class="panel__wrapper">
    <div class="panel__content">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="contact-content">
              <div class="heading">
                <h4>Contact us</h4>
              </div>
              <div class="row">
                <div class="col-md-8">
                  <div class="contat-form">
                    <form id="contact" action="" method="post">
                      <fieldset>
                        <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required>
                      </fieldset>
                      <fieldset>
                        <input name="email" type="email" class="form-control" id="email" placeholder="Email" required>
                      </fieldset>
                      <fieldset>
                        <textarea name="message" rows="6" class="form-control" id="message" placeholder="Message" required></textarea>
                      </fieldset>
                      <fieldset>
                        <button type="submit" name = "submit" id="form-submit" class="btn">Send Message</button>
                      </fieldset>
                    </form>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="more-info">
                    <h3>Find Me</h3>
                    <div class="row">
                      <div class="col-sm-4 social-icons">
                        <figure>
                          <a href="https://github.com/ikiranshrestha" target="_blank"><img src="img/github.svg" alt=""></a>
                          <figcaption>/ikiranshrestha.</figcaption>
                        </figure>
                      </div>
                      <div class="col-sm-4 social-icons">
                        <figure>
                          <a href="https://github.com/ikiranshrestha" target="_blank"><img src="img/linkedin.svg" alt=""></a>
                          <figcaption>/ikiranshrestha.</figcaption>
                        </figure>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="footer">
              <p>Copyright &copy; <?= date('Y'); ?> Kiran Shrestha
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </article>
</section>

<?php
$email;
$message;
$name;

if (isset($_POST['submit'])){
  // mail("kiranshrestha1902@gmail.com", "By: ".$_POST['email'], $_POST['message']);
}


 ?>
