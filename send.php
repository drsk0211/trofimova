$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$f = $_POST['f'];
$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$message = htmlspecialchars($message);
$f = htmlspecialchars($f);
$name = urldecode($name);
$email = urldecode($email);
$message = urldecode($message);
$f = urldecode($f);
$name = trim($name);
$email = trim($email);
$message = trim($message);
$f = trim($f);
echo $name;
echo "<br>";
echo $email;
echo $message;
echo "<br>";
echo $f;
mail("dr0211@mail.ru", "Заявка с сайта", "ФИО:".$name.". E-mail: ".$email ,"From: example2@mail.ru \r\n");
if (mail("dr0211@mail.ru", "Заявка с сайта", "ФИО:".$name.". E-mail: ".$email ,"From: example2@mail.ru \r\n");)
 { 
    echo "сообщение успешно отправлено"; 
} else { 
    echo "при отправке сообщения возникли ошибки"; 
}