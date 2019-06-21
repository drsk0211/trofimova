
<?php
    $send = $_POST['button'];
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $text = $_POST['text'];
    $f = $_POST['f'];
 
    if ($send != "button"){
        $to = "dr0211l@mail.ru";                 
        $subject = "New message"; 
 
        $mailheaders = "From: " . strip_tags($_POST['mail']) . "\r\n";
        $mailheaders .= "Reply-To: ". strip_tags($_POST['mail']) . "\r\n";
        $mailheaders .= "CC: dr0211@mail.ru\r\n"; //отправка копии
 
        //$mailheaders .= "MIME-Version: 1.0\r\n";
        $mailheaders .= "Content-Type: text/html; charset=utf-8\r\n"; //charset=ISO-8859-1
 
        $message = '<html><body>';
        $message .= "<p style='background: #eee;'><strong>Отправитель:</strong> " . strip_tags($_POST['name']) . "</p>";
        $message .= "<p style='background: #eee;'><strong>Email:</strong> " . strip_tags($_POST['mail']) . "</p>";
        $message .= "<p style='background: #eee;'><strong>Текст сообщения:</strong> " . strip_tags($_POST['text']) . "</p>";
        $message .= "</body></html>";
 
        mail ($to, $subject, $message, $mailheaders);
        echo "<html><head>"; 
        echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">';
        echo "<title>Отправлено</title>"; 
        echo "</head>"; 
        echo "<body>"; 
        echo "<p id=successful_message>Здравствуйте $name, ваше сообщение было успешно отправлено.</p>"; 
        echo "<div>"; 
        echo '<a href="../contacts.html" id=link_send_back>Вернуться</a>';
        echo "</div>"; 
        echo "</body>"; 
        echo "</html>";
    }
?>
