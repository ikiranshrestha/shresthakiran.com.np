<?php

require_once('logic/PortrayCard.php');

?>
<section class="panel b-red" id="3">
  <article class="panel__wrapper">
    <div class="panel__content">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="projects-content">
              <div class="heading">
                <h4>Recent Projects</h4>
              </div>
              <div class="row">
                <div class="col-md-12">
                       <div class="owl-carousel owl-theme projects-container">
                         <?php
                              $projectThumbnail = "img/project_thumbnail.png";
                              $projectCard = new PortrayCard();
                              $projectCard->ProjectCard("BMI Calclator",
                              'img/project_thumbnail.png',
                              "Basically, this mobile app takes your height and weight as input and calculate your Body Mass Index.", 'https://github.com/ikiranshrestha/bmi-calculator');
                              $projectCard->ProjectCard("Karjekram",
                              'img/project_thumbnail.png',
                              'This is a basic to-do mobile app.', 'https://github.com/ikiranshrestha/karjekram');
                              $projectCard->ProjectCard("Training Institute Management System",
                              'img/project_thumbnail.png',
                              "This is a basic form of Training Institute Management System.", 'https://github.com/ikiranshrestha/itn_backup');
                          ?>
                        </div>
                     </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </article>
</section>
