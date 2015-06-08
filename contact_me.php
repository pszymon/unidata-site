<?php
if($_POST)
{
 $to_Email = "biuro@unidata.pl "; //Podaj tu email docelowyw
 $subject = 'Formularz kontaktowy webtar'; //Tutaj temat wiadomości - możesz też wykorzystać pole formularza i pobrać tą wartość od klienta :)
 
 
 //Sprawdzamy czy jest to rządanie Ajax, jeśli nie..
 if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
 
 //Kończymy skrypt wysyłając dane JSON
 $output = json_encode(
 array(
 'type'=>'error', 
 'text' => 'Rządanie musi przejść przez AJAX'
 ));
 
 die($output);
 } 
 
 //Sprawdzamy czy wszystkie pola zostały wysłane. kończymy skrypt jeśli nie (tutaj dodawaj więcej pól, które są wymagane)
 if(!isset($_POST["userEmail"]) || !isset($_POST["userMessage"]))
 {
 $output = json_encode(array('type'=>'error', 'text' => 'POLA SĄ PUSTE!'));
 die($output);
 }

 //Pobieramy dane z formularza
 $user_Email = filter_var($_POST["userEmail"], FILTER_SANITIZE_EMAIL);
 $user_Message = filter_var($_POST["userMessage"], FILTER_SANITIZE_STRING);
 
 //Dodatkowa validacja PHP (tylko dla pól wymaganych)

 if(!filter_var($user_Email, FILTER_VALIDATE_EMAIL)) //sprawdzamy email
 {
 $output = json_encode(array('type'=>'error', 'text' => 'Proszę podać poprawny email!'));
 die($output);
 }
 if(strlen($user_Message)<5) //Sprawdzamy czy wiadomość ma więcej niż 5 znaków
 {
 $output = json_encode(array('type'=>'error', 'text' => 'Wiadomość za krótka! Wpisz coś jeszcze.'));
 die($output);
 }
 
 //Nagłówki do Maila
 $headers = 'From: '.$user_Email.'' . "\r\n" .
 'Reply-To: '.$user_Email.'' . "\r\n" .
 'X-Mailer: PHP/' . phpversion();
 
 $sentMail = @mail($to_Email, $subject, $user_Message .' -'. $headers);
 
 if(!$sentMail)
 {
 $output = json_encode(array('type'=>'error', 'text' => 'Nie można wysłać wiadomości. Sprawdź konfigurację PHP Mail'));
 die($output);
 }else{
 $output = json_encode(array('type'=>'message', 'text' => 'Dziękuję za wysłanie wiadomości! '));
 die($output);
 }
}
?>