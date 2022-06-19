<?php
    $name = $_POST["user_data"];
    $email = $_POST["user_mail"];
    $tel = $_POST["tel_num"];
    $companyName = $_POST["company_name"];
    $userMess = $_POST["user_mess"];

    $subjectAdmin = "Order from website";
    $subjectCustomer = "$name, thank you for your order";

    $header = "From: $email\r\n" . "Reply-To:$email\r\n";

    $fullMess = "Name: $name
                 \nEmail: $email
                 \nPhone number: $tel
                 \nCompany name: $companyName
                 \nUser message: $userMess";
    
    // Письмо для администратора. Заменить $email на другую почту
    mail($email, $subjectAdmin, $fullMess);

    // Письмо для заказчика. Здесь должна быть почта $email, но на первое время будет эта
    // mail("artemgavryushinofficial@mail.ru", $subjectCustomer, 
    //     "Thank you for your order!\nAn administrator will contact you soon",
    //     "From: artemgavryushinofficial@mail.ru\r\n" . "Reply-To:artemgavryushinofficial@mail.ru\r\n");
        
    header("Location: http://clevertch.ru/index.html");
?>
