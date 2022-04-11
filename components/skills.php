<?php

require_once('logic/PortrayCard.php');

?>
<section class="panel b-red" id="5">
  <article class="panel__wrapper">
    <div class="panel__content">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="projects-content">
              <div class="heading">
                <h4>Skills</h4>
              </div>
              <div class="row">
                <div class="col-md-12">
                       <div class="owl-carousel owl-theme projects-container">
                         <?php
                              $projectThumbnail = "img/project_thumbnail.png";
                              $projectCard = new PortrayCard();
                              $projectCard->ProjectCard("Programming Languages",
                              'img/project_thumbnail.png',
                              "C, C#, PHP, Java, Python, Dart", '#');
                              $projectCard->ProjectCard("Frameworks",
                              'img/project_thumbnail.png',
                              'Laravel, Flutter, Android - Java', '#');
                              $projectCard->ProjectCard("Database Technology",
                              'img/project_thumbnail.png',
                              'MySQL, Oracle, Firebase, NoSQL', '#');
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
