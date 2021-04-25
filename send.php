<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$ip = $_POST['ip'];
$token = "1755956051:AAHdb5bcaHe8ysjbR9z7yil6tgpbc-1GEm4";
$chat_id = "-531885266";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Почта: ' => $email,
  'IP Adress' => $ip
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");


if ($sendToTelegram) {
  header('Location: contacts-finish.html');
} else {
  echo "Ошибка";
}
?>