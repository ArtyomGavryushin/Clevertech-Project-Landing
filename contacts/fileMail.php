<?php
    $name = $_POST["user_data"];
    $email = $_POST["uder_mail"];
    $tel = $_POST["tel_num"];
    $companyName = $_POST["company_name"];
    $userMess = $_POST["user_mess"];

    $randomNumber = rand(1, 999999);

    // В этом сообщении нужно первым параметром указать $email, тк это сообщение для пользователя!
    mail("artemgavryushinofficial@mail.ru", "Order placed! Expect to be contacted shortly", $name . " thank you for your message! Your order is - " . $randomNumber);

    // Сообщение для администратора
    mail("artemgavryushinofficial@mail.ru", "Message for administrator", 
        'Message from: '. $email .
        'Phone Number: '. $tel . 
        'Company name': $companyName . 
        'User message': $userMess);

?>