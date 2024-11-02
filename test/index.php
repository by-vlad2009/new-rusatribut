<?
$to      = 'info@makevlad.ru';
$subject = 'the subject';
$message = 'hello';
$headers = array(
    'From' => 'mail@topflag.ru',
    'Reply-To' => 'mail@topflag.ru',
    'X-Mailer' => 'PHP/' . phpversion()
);

mail($to, $subject, $message, $headers);


// Сообщение
$message = "Line 1\r\nLine 2\r\nLine 3";

// На случай если какая-то строка письма длиннее 70 символов, вызовем функцию wordwrap()
$message = wordwrap($message, 70, "\r\n");

// Отправляем
print mail('info@makevlad.ru', 'My Subject', $message);

print "dd";