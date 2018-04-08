<?php
$mailheaders = "Content-type: text/html; charset=UTF-8 \r\n";
$mailheaders .= "From: fire.co.ua <no-reply@fire.co.ua>";
$mailheaders .= "Reply-To: fire.co.ua";
$messeng ="<h1>Данные Пользователя</h1>
<p>Имя пользователя:". $_POST["name"] . "</p>
<p>Телефон пользователя:". $_POST["tel"] . "</p>
<p>Выбор пользователя:". $_POST["checkBox"] . "</p>

";
mail('Dogdog.info@mail.ru',"Form Test site",$messeng,$mailheaders);
header('Location: index.html');
exit;
?>