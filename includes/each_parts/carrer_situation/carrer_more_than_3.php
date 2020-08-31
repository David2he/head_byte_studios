<?php $count_career = count($json_decodes[0]->career);

?>
<div class="card_career_center">
<div class="carousel" data-flickity='{ "draggable": true, "setGallerySize": false, "imagesLoaded": true, "prevNextButtons": false, "autoPlay": 2000, "wrapAround": true, "groupCells": 1}'>
        <?php
        for ($i = 0; $i < $count_career; $i++) { ?>
            <div class="carousel-cell_career <?php echo'background_slide_career'.$i?>">

            <?php
    
            echo '<style type="text/css">
            .background_slide_career'.$i.'{
            background-image: url("./images/'.$json_decodes[0]->career[$i]->background.'");
            }
            </style>';
            ?>

            <a href="#" class="link_to_trigger_career_join_us"><?= $json_decodes[0]->career[$i]->name_of_job; ?></a>
            <div class="card_career_hover">
                <p>
                    <?= $json_decodes[0]->career[$i]->text_presentation_job; ?>
                </p>
            </div>
            </div>
        <?php } ?>
    </div>
</div>