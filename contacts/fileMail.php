<?php
    $name = $_POST["user_data"];
    $email = $_POST["user_mail"];
    $tel = $_POST["tel_num"];
    $companyName = $_POST["company_name"];
    $userMess = $_POST["user_mess"];
    
    $randomNumber = rand(100000, 999999);

    $date = date("F j, Y, g:i a");

    $subjectAdmin = "Order from website";
    $subjectCustomer = "$name, thank you for your order";

    $messForAdmin = '<div style="font-family: Fjalla One, sans-serif;
                                    width: 650px;
                                    height: 530px;
                                    border: 3px solid #526A85;
                                    margin: auto;это 
                                    background: #fdfdfd;
                                    display: flex;
                                    flex-direction: column;
                                    align-items: center;
                                    position: relative;
                                    justify-content: space-evenly;">
                                    <h1 style="text-align: center;
                                                margin: 0;
                                                padding: 0;
                                                font-size: 52px;
                                                color: #343434;
                                                line-height: 46px;
                                                margin-top:20px; ">New Order<br>All user data</h1>
                                    <p style="padding: 0;
                                            margin: 20px 30px;
                                            font-size: 32px;
                                            line-height: 30px;
                                            width: 85%;">
                                                Full_name: <b>'.$name.'</b><br>
                                                Email: <b>'.$email.'</b><br>
                                                Phone number: <b>'.$tel.'</b><br>
                                                Company name: <b>'.$companyName.'</b><br>
                                                date: <b>'.$date.'</b><br>
                                                His order number is: <b>'.$randomNumber.'</b><br>
                                                User message: <b>'.$userMess.'</b>
                                        </p>
                                    <a href="http://clevertch.ru/" style="text-decoration: none;
                                                        color: whitesmoke;
                                                        background: #50b51b;
                                                        padding: 10px 15px;
                                                        font-size: 21px;
                                                        border-radius: 5px;
                                                        margin-bottom: 10px;">Back to CleverTech</a>
                                    <p style="font-size: 24px; color: #343434; text-align:center;">© 2022 CleverTech. All Rights Reserved<br>Thank you for choosing us</p>
                                </div>';

    $MessageForCustomer =  '<div style="font-family: Fjalla One, sans-serif;
                                    width: 500px;
                                    height: 530px;
                                    border: 3px solid #526A85;
                                    margin: auto;это 
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
    // Письмо для Заказчика. поставить почту пользователя
    mail($email, $subjectAdmin, $MessageForCustomer, $header);

    // Письмо для админа, со всемы данными
    mail("artemgavryushinofficial@mail.ru", $subjectAdmin, $messForAdmin, $header);
    
    header("Location: http://clevertch.ru/index.html");
?>
