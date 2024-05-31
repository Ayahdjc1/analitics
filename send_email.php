<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $phoneNumber = $_POST["name"];
    $email = $_POST["email"];
// Отправляем уведомление пользователю
    $user_subject = "Ваша заявка принята";
    $user_body = "Спасибо за ваше сообщение! Мы рассмотрим ваш запрос в ближайшее время.";
    $headers = "From: your_website@example.com";
    mail($email, $user_subject, $user_body, $headers);

    header("Location: index.php");
    exit();
}

?>