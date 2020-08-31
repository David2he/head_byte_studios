<?php 
$count_about_us = count($json_decodes[0]->about_us);
?>
  <div class="carousel" data-flickity='{ "draggable": true, "setGallerySize": false, "imagesLoaded": true, "prevNextButtons": false, "autoPlay": 2000, "wrapAround": true}'>
    <?php for ($i = 0; $i < $count_about_us; $i++) { ?>
      <div class="carousel-cell">
        <div class="each_person_0">
          <div class="text_presentation">
            <h2><?= $json_decodes[0]->about_us[$i]->name ?></h2>
            <div class="about_us_list_container">
              <ul class="about_us_list_name">
                <li>Age</li>
                <li>Spe</li>
                <li>Hob</li>
                <li>Fav</li>
              </ul>
              <ul class="about_us_list_person">
                <li><?= $json_decodes[0]->about_us[$i]->age ?></li>
                <li><?= $json_decodes[0]->about_us[$i]->spe ?></li>
                <li><?= $json_decodes[0]->about_us[$i]->hob ?></li>
                <li><?= $json_decodes[0]->about_us[$i]->fav ?></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
