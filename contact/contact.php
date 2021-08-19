<?php
if(isset($_POST['enviar'])) {
   if (!empty($_POST['name']) && !empty($_POST['motivo']) && !empty($_POST['msg']) && !empty($_POST['email'])){
      $name = $_POST['name'];
      $motivo = $_POST['motivo'];
      $msg = $_POST['msg'];
      $email = $_POST['email'];
      $header = "From: noreply@example.com". "\r\n";
      $header.= "Reply-To: noreply@example.com". "\r\n";
      $header.= "X-Mailer: PHP/". phpversion();
      $mail = mail("franborgiani2003@gmail.com", $motivo, $msg,$header);

      if($mail){
         echo "<h4>Enviado exitosamente</h4>";
      }

   }
}