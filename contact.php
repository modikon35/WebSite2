<?php
//проверяем значения полученые при проверке скриптом формы
if (trim($_POST['valTrFal'])!='valTrFal_true') {
	echo 'fasle';
}
else {

		$txtname = trim($_POST['txtname']);

		$txtNameValue = trim($_POST['name_class_value']);

		$txtemail = trim($_POST['txtemail']);

		$txtphone = trim($_POST['txtphone']);

		$txtmessage = trim($_POST['txtmessage']);

		// от кого
		$fromMail = 'prazdnikidea.ru';
		$fromName = 'CallBack';

		// Сюда введите Ваш email
		$emailTo = 'modikon35@gmail.com';

		$subject = 'Заказ обратного звонка';
		$subject = '=?utf-8?b?'. base64_encode($subject) .'?=';
		$headers = "Content-type: text/plain; charset=\"utf-8\"\r\n";
		$headers .= "From: ". $fromName ." <". $fromMail ."> \r\n";

		// тело письма
		$body = "Был заказан обратный звонок с сайта pradnikidea.ru\n\nИмя: $txtname\nТелефон: $txtphone";
		$mail = mail($emailTo, $subject, $body, $headers, '-f'. $fromMail );


		echo 'ok';
}
?>
