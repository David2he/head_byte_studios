<?php


// include './includes/mail_assets.php';
include './includes/form_handler.php';

$count_career = count($json_decodes[0]->career);

?>
<div class="career_container">
    <?php
    if ($count_career > 3) {
        include './includes/each_parts/carrer_situation/carrer_more_than_3.php';
    } else {

        include './includes/each_parts/carrer_situation/carrer_less_than_3.php';
    }
    ?>


    <div class="career_join_us">
        <div class="close_career_join_us">

        </div>
        <div class="message_error_succes">
            <?php foreach ($errorMessages as $_message) : ?>
                <div class="message error">
                    <p><?= $_message ?></p>
                </div>
            <?php endforeach ?>
            <?php foreach ($successMessages as $_message) : ?>
                <div class="message success">
                    <p><?= $_message ?></p>
                </div>
            <?php endforeach ?>
        </div>

        <div class="form_career">
            <form method="post" action="#career" enctype="multipart/form-data">
                <div class="right_side_container form_container">
                    <fieldset>
                        <label for="first_name">First name</label>
                        <br>
                        <input id="first_name" type="text" name="first_name" placeholder="Ex : Nina" class="input_can_write">
                    </fieldset>
                    <fieldset>
                        <label for="last_name">Last name</label>
                        <br>
                        <input id="last_name" type="text" name="last_name" placeholder="Ex : Acuna" class="input_can_write">
                    </fieldset>
                    <fieldset>
                        <label for="email">Email</label>
                        <br>
                        <input id="email" type="text" name="email" placeholder="Ex : n.ac@mail.com" class="input_can_write">
                    </fieldset>
                    <fieldset>
                        <label for="phone">Phone</label>
                        <br>
                        <input id="phone" type="text" name="phone" placeholder="Ex : +33 0.00.00.00.00" class="input_can_write">
                    </fieldset>
                    <fieldset>
                        <label for="adress">Adress</label>
                        <br>
                        <input id="adress" type="text" name="adress" placeholder=" ex" class="input_can_write">
                    </fieldset>
                </div>
                <div class="center_side_container form_container">
                    <div class="start_center_side_container">

                        <label for="uploaded_file_1" class="custom-file-upload">
                            <i class="fa fa-cloud-upload"></i> Resume/CV
                        </label>
                        <input type="file" name="uploaded_file_1" id="uploaded_file_1" class="send_files" />

                        <label for="uploaded_file_2" class="custom-file-upload">
                            <i class="fa fa-cloud-upload"></i> Cover Letter 
                        </label>
                        <input type="file" name="uploaded_file_2" id="uploaded_file_2" class="send_files" />

                    </div>
                    <div class="middle_center_side_container">
                        <textarea placeholder="Describe yourself" class="form-control" name="message"></textarea>
                    </div>
                </div>
                <div class="left_side_container form_container">
                <fieldset>
                <label for="linkedIn ">LinkedIn</label>
                <br>
                <input id="linkedIn" type="text" name="linkedIn" class="input_can_write">
            </fieldset>
            <fieldset>
                <label for="twitter">Twitter</label>
                <br>
                <input id="twitter" type="text" name="twitter" class="input_can_write">
            </fieldset>
            <fieldset>
                <label for="website">Website</label>
                <br>
                <input id="website" type="text" name="website" class="input_can_write">
            </fieldset>
            <fieldset>
                <label for="portfolio">Portfolio</label>
                <br>
                <input id="portfolio" type="text" name="portfolio" class="input_can_write">
            </fieldset>
                </div>
                <input class="btned" name="submit" type="submit">
            </form>
        </div>

        <!-- <form method="post" action="#career" enctype="multipart/form-data">

        <div class="right_side_container form_container">
            <fieldset>
                <label for="first_name">First name</label>
                <br>
                <input id="first_name" type="text" name="first_name" placeholder="Ex : Nina" class="input_can_write">
            </fieldset>
            <fieldset>
                <label for="last_name">Last name</label>
                <br>
                <input id="last_name" type="text" name="last_name" placeholder="Ex : Acuna" class="input_can_write">
            </fieldset>
            <fieldset>
                <label for="email">Email</label>
                <br>
                <input id="email" type="text" name="email" placeholder="Ex : n.ac@mail.com" class="input_can_write">
            </fieldset>
            <fieldset>
                <label for="phone">Phone</label>
                <br>
                <input id="phone" type="text" name="phone" placeholder="Ex : +33 0.00.00.00.00" class="input_can_write">
            </fieldset>
            <fieldset>
                <label for="adress">Adress</label>
                <br>
                <input id="adress" type="text" name="adress" placeholder=" ex" class="input_can_write">
            </fieldset>
        </div>

        <div class="center_side_container form_container">
            <input type="file" name="uploaded_file_1" id="uploaded_file" />
            <input type="file" name="uploaded_file_2" id="uploaded_file" />
        </div>

        <div class="left_side_container form_container">
            <fieldset>
                <label for="linkedIn ">LinkedIn</label>
                <br>
                <input id="linkedIn" type="text" name="linkedIn" class="input_can_write">
            </fieldset>
            <fieldset>
                <label for="twitter">Twitter</label>
                <br>
                <input id="twitter" type="text" name="twitter" class="input_can_write">
            </fieldset>
            <fieldset>
                <label for="website">Website</label>
                <br>
                <input id="website" type="text" name="website" class="input_can_write">
            </fieldset>
            <fieldset>
                <label for="portfolio">Portfolio</label>
                <br>
                <input id="portfolio" type="text" name="portfolio" class="input_can_write">
            </fieldset>
        </div>

        <input class="btned" name="submit" type="submit">
    </form> -->
    </div>
</div>