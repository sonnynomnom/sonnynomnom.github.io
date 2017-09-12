<?php

if (isset($_POST['name') && ]$_POST['email'])) {

  $name = $_POST['name'];
  $email = $_POST['email'];
  $shipping = $_POST['shipping'];
  $address = $_POST['address'];

  $to = 'sonnynomnom@gmail.com';
  $subject = "New Preorder";
  $body = '<html>
            <body>
              <h2>Preorder</h2>
              <br>
              <p>Name:<br>'.$name.'</p>
              <p>Email:<br>'.$email.'</p>
              <p>Shipping:<br>'.$shipping.'</p>
              <p>Address:<br>'.$address.'</p>
            </body>
          </html>';

  // headers
  $headers = "From: ".$name."\ <".$email.">\r\n";
  $headers .= "Reply-To: ".$email."\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/html; charset-utf-8";

  // send
  $send = mail($to, $subject, $body, $headers);

  if ($send) {
    echo '<br>';
    echo 'Thanks for pre-ordering!';
  }
  else {
    echo 'error';
  }

}

?>
  <!-- r\n".
          'Reply-To: '.$email."\r\n" .
          'X-Mailer: PHP/' . phpversion();
          @mail($email_to, $email_subject, $email_message, $headers);


          ?>




  '
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "sonnynomnom@gmail.com";
    $email_subject = "Haunts EP Preorder";

    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }


    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['shipping']) ||
        !isset($_POST['address'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');
    }



    $name = $_POST['name']; // required
    $email = $_POST['email']; // required
    $shipping = $_POST['shipping']; // required
    $address = $_POST['address']; // required

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

  if(!preg_match($email_exp, $email)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }

    $string_exp = "/^[A-Za-z .'-]+$/";

  if(!preg_match($string_exp, $name)) {
    $error_message .= 'Name you entered does not appear to be valid.<br />';
  }


  if(strlen($address) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }

  if(strlen($error_message) > 0) {
    died($error_message);
  }


    $email_message = "Form details below.\n\n";


    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }



    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email)."\n";
    $email_message .= "Shipping: ".clean_string($shipping)."\n";
    $email_message .= "Address: ".clean_string($address)."\n";

// create email headers
$headers = 'From: '.$email."\r\n".
'Reply-To: '.$email."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);


?> -->


<!DOCTYPE html>
<html>

<head>
  <title>Townie Records</title>
  <meta charset="utf-8"/>
  <link rel="stylesheet" type="text/css" href="main.css">
  <script type="text/javascript" src="app.js"></script>
</head>

<body>

  <canvas id='canv'></canvas>

  <h2>
    <b>Pre-order</b>

    <form method="post" action="">

      <p>
        <label>
          Name: <input type="text" name="name" size="30" maxlength="30" />
        </label>
          <br />
          <br />
          Email:
          <input type="email" name="email" size="30" maxlength="30" />
          <br />
          <br />

          Shipping Method:
          <br />

          <input type="radio" name="shipping" value="mailed" />
          Mail ($2)

          <input type="radio" name="shipping" value="deliver" />
          Deliver ($0)

          <br />
          <br />
          Address:
          <br />
          <textarea rows="4" cols="40" id="address">
          </textarea>

          <br />

          <button type="submit">Submit</button>

      </form>
    <br />
    <br />

    <a href="https://www.venmo.com">Venmo</a> $7 + shipping to @TownieRecords
    <br />
    <br />

  </h2>

    <script src="app.js"></script>

  </body>
</html>
