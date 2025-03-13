<?php
require_once "Authenticator.php";

$auth1 = Authenticator::getInstance();
$auth2 = Authenticator::getInstance();

if ($auth1 === $auth2) {
    echo "Singleton працює: обидва об'єкти однакові.\n";
} else {
    echo "Помилка! Створено більше одного екземпляра.\n";
}

$username = "admin";
$password = "password";
if ($auth1->authenticate($username, $password)) {
    echo "Аутентифікація успішна для користувача '$username'.\n";
} else {
    echo "Помилка аутентифікації для користувача '$username'.\n";
}
