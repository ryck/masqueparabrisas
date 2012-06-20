<?php
if( isset($_POST) ){

    //form validation vars
    $formok = true;
    $errors = array();

    //submission data
    $ipaddress = $_SERVER['REMOTE_ADDR'];
    $date = date('d/m/Y');
    $time = date('H:i:s');

    //form data
    $name = $_POST['nombre'];
    $email = $_POST['email'];
    $message = $_POST['mensaje'];

    //validate form data

    //validate name is not empty
    if(empty($name)){
        $formok = false;
        $errors[] = "El campo 'Nombre' es obligatorio";
    }

    //validate email address is not empty
    if(empty($email)){
        $formok = false;
        $errors[] = "El campo 'Correo electrónico' es obligatorio";
    //validate email address is valid
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $formok = false;
        $errors[] = "La dirección de correo electrónico no es válida";
    }

    //validate message is not empty
    if(empty($message)){
        $formok = false;
        $errors[] = "El campo 'Mensaje' es obligatorio";
    }

    //send email if all is ok
    if($formok){
        $headers = "De: {$email}" . "\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
        $headers .= "From: $name <$email>". "\r\n";
        $headers .= "Reply-To: $name <$email>". "\r\n";

        $emailbody = "<p>Nuevo mensaje</p>
                      <p><strong>Nombre: </strong> {$name} </p>
                      <p><strong>Correo electrónico: </strong> {$email} </p>
                      <p><strong>Mensaje: </strong> {$message} </p>
                      <p>IP: {$ipaddress} el {$date} a las {$time}</p>";

        mail("info@autovidro.es","Consulta via web",$emailbody,$headers);

    }

    //what we need to return back to our form
    $returndata = array(
        'posted_form_data' => array(
            'name' => $name,
            'email' => $email,
            'message' => $message
        ),
        'form_ok' => $formok,
        'errors' => $errors
    );

    //if this is not an ajax request
    if(empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) !== 'xmlhttprequest'){
        //set session variables
        session_start();
        $_SESSION['cf_returndata'] = $returndata;

        //redirect back to form
        header('location: ' . $_SERVER['HTTP_REFERER']);
    }
}