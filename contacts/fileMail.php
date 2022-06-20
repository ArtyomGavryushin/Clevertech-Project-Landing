<?php
    $name = $_POST["user_data"];
    $email = $_POST["user_mail"];
    $tel = $_POST["tel_num"];
    $companyName = $_POST["company_name"];
    $userMess = $_POST["user_mess"];
    $randomNumber = rand(100000, 999999);

    $subjectAdmin = "Order from website";
    $subjectCustomer = "$name, thank you for your order";

    // $header = "From: $email\r\n" . "Reply-To:$email\r\n";

    $fullMess = "Name: $name
                 \nEmail: $email
                 \nPhone number: $tel
                 \nCompany name: $companyName
                 \nUser message: $userMess";

    $MessageForCustomer =  '<div style="font-family: Fjalla One, sans-serif;
                                    width: 500px;
                                    height: 530px;
                                    border: 3px solid #526A85;
                                    margin: auto;
                                    background: #fdfdfd;
                                    display: flex;
                                    flex-direction: column;
                                    align-items: center;
                                    position: relative;
                                    justify-content: space-evenly;">
                                    <h1 style="text-align: center;
                                                margin: 0;
                                                padding: 0;
                                                font-size: 64px;
                                                color: #343434;
                                                line-height: 55px;">Thank you for your order!</h1>
                                    <p style="padding: 0;
                                            margin: 20px 30px;
                                            font-size: 32px;
                                            line-height: 30px;">Your order has been placed! Wait for an answer from the administrator, he will contact you soon.<br>Your order number is - <b>'.$randomNumber.'</b></p>
                                    <a href="http://clevertch.ru/" style="text-decoration: none;
                                                        color: whitesmoke;
                                                        background: #50b51b;
                                                        padding: 10px 15px;
                                                        font-size: 21px;
                                                        border-radius: 5px;
                                                        margin-bottom: 10px;">Back to CleverTech</a>
                                    <p style="font-size: 24px; color: #343434; text-align:center;">© 2022 CleverTech. All Rights Reserved<br>Thank you for choosing us</p>
                                </div>';
    

    $header = "Content-type: text/html; charset=utf-8";
    // Письмо для администратора. Заменить $email на другую почту
    mail($email, $subjectAdmin, $MessageForCustomer, $header);

    
    // Письмо для заказчика. Здесь должна быть почта $email, но на первое время будет эта
    // mail("artemgavryushinofficial@mail.ru", $subjectCustomer, 
    //     "Thank you for your order!\nAn administrator will contact you soon",
    //     "From: artemgavryushinofficial@mail.ru\r\n" . "Reply-To:artemgavryushinofficial@mail.ru\r\n");
        
    header("Location: http://clevertch.ru/index.html");
?>
