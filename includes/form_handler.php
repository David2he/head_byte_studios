<?php


$errorMessages = [];
// $errorMessages = ['bite', 'couille','chatte','bite', 'couille','bite', 'couille','chatte','bite', 'couille',];
$successMessages = [];


$first_name = "";
$last_name = "";
$email = "";
$phone = "";
$adress = "";

$linkedIn = "";
$twitter = "";
$website = "";
$portfolio = "";
$message = "";


if (!empty($_POST)) {
    $first_name = strip_tags($_POST['first_name']);
    $last_name = strip_tags($_POST['last_name']);
    $email = strip_tags($_POST['email']);
    $phone = (int)($_POST['phone']);
    $adress = strip_tags($_POST['adress']);

    $linkedIn = strip_tags($_POST['linkedIn']);
    $twitter = strip_tags($_POST['twitter']);
    $website = strip_tags($_POST['website']);
    $portfolio = strip_tags($_POST['portfolio']);

    $message = strip_tags($_POST['message']);

    // echo '<pre>';
    // print_r($_POST);
    // echo '</pre>';



    /// FIRST NAME
    if (1 === preg_match('~[0-9]~', $first_name)) {
        $errorMessages[] = 'contain number';
    } elseif (empty($first_name)) {
        $errorMessages[] = 'pls insert your first name';
    }

    /// LAST NAME
    if (1 === preg_match('~[0-9]~', $last_name)) {
        $errorMessages[] = 'contain number';
    } elseif (empty($last_name)) {
        $errorMessages[] = 'pls insert your first name';
    }

    /// MAIL
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    } else {
        $errorMessages[] = 'pls inser valid mail';
    }

    /// PHONE
    $phone_verificator =  strlen((string)$phone);
    if ($phone_verificator > 11) {
        $errorMessages[] = 'pls insert valid phone numbers';
    } elseif ($phone_verificator < 9) {
        $errorMessages[] = 'pls insert valid phone numbers';
    }

    /// ADRESS
    if (empty($adress)) {
        $errorMessages[] = 'pls insert your adress';
    }



    if (empty($errorMessages)) {
        $successMessages[] = 'You are now registered';
        include './includes/mail_assets.php';
        // Reset values
        $first_name = "";
        $last_name = "";
        $email = "";
        $phone = "";
        $adress = "";
        
        $linkedIn = "";
        $twitter = "";
        $website = "";
        $portfolio = "";
        $message = "";
        $errorMessages = [];
        // $successMessages = [];
        echo '<style type="text/css">
        .career_join_us{
            transform: translateY(0);
        }
          </style>';
    }else{
        echo '<style type="text/css">
        .career_join_us{
            transform: translateY(-44.3%);
        }
          </style>';
    }
}
