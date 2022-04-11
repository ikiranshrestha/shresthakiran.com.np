<?php
class PortrayCard
{
  public $itemName;
  public $itemImage;
  public $itemDescription;

  function ProjectCard($name, $image, $desc, $projectLink) {
   $projectName = $name;
   $projectImage = $image;
   $projectDescription = $desc;
   echo <<<HTML
   <div>
     <div class="project-item">
       <a href="$projectImage" data-lightbox="image-1"><img src="$projectImage" alt="" width = "auto" height = "auto"></a>
       <div class="text-content">
         <h4>$projectName</h4>
         <p>$projectDescription</p>
         <div class="primary-button">
           <a href="$projectLink" target="_blank">Show Project</a>
         </div>
       </div>
     </div>
   </div>

HTML;
// return 100;
 }

}

 ?>



    <!-- <div class="owl-carousel owl-theme projects-container">
      <div>
        <div class="project-item">
          <a href="img/project-item-01.jpg" data-lightbox="image-1"><img src="img/project-item-01.jpg" alt=""></a>
          <div class="text-content">
            <h4>Best Design</h4>
            <p>Lorem ipsum dolor, adipis scing elit etiam ante vehicula, aliquam mauris in, luctus neque.</p>
            <div class="primary-button">
              <a href="#">Discover More</a>
            </div>
          </div>
        </div>
      </div>
    </div> -->
