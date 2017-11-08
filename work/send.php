<?php
//принимаем данные
$name=$_POST['name'];
$phone=$_POST['phone'];
$what=$POST['what'];
//на какой ящик посылать письмо
$to = "bondaralexandr1991@gmail.com"
//тема и сообщение
$subject = "Заявка с сайта сантехники"
$message = "
Письмо отправлено из моей формы.<br />
Пользователь хочет: ".htmlspecialchars($what)."<br />
Телефон: ".htmlspecialchars($phone);
$headers = "From: mysite.ru <site-email@mysite.ru>\r\nContent-type: text/html;
    charset=utf8 \r\n";
mail ($to, $subject, $messege, $headers);
header('Location: thanks.html');
exit();
?>
