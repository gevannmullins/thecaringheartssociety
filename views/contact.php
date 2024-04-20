<?php

$errors = [];
$errorMessage = '';

if (!empty($_POST)) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  if (empty($name)) {
    $errors[] = 'Name is empty';
  }

  if (empty($email)) {
    $errors[] = 'Email is empty';
  } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Email is invalid';
  }

  if (empty($message)) {
    $errors[] = 'Message is empty';
  }

  if (empty($errors)) {
    $toEmail = 'gevann.mullins@gmail.com';
    $emailSubject = 'New email from your contact form';
    $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=utf-8'];
    $bodyParagraphs = ["Name: {$name}", "Email: {$email}", "Message:", $message];
    $body = join(PHP_EOL, $bodyParagraphs);

    if (mail($toEmail, $emailSubject, $body, $headers)) {

      header('Location: thank-you.html');
    } else {
      $errorMessage = 'Oops, something went wrong. Please try again later';
    }

  } else {

    $allErrors = join('<br/>', $errors);
    $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include("./includes/head.php"); ?>
</head>

<body>

  <!-- including the header.php global file -->
  <?php include("./includes/header.php"); ?>

  <main class="main">
    <div class="main-content responsive-wrapper">
      <div class="container text-center">
        <div class="row">
          <div class="col-sm-12">
            <h3>Contact Us</h3><br>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <article class="widget" style="font-size:22px;">

            <div class="container">
                <div class="row">
                  <div class="col-xs-4 text-right">
                    Address:
                  </div>
                  <div class="col-xs-8 text-left">
                  29 Tango Crescent Retreat
                  </div>
                </div>
              </div>
              <div class="container">
                <div class="row">
                  <div class="col-xs-4 text-right">
                    Email:
                  </div>
                  <div class="col-xs-8 text-left">
                  admin@thecaringheartssociety.co.za
                  </div>
                </div>
              </div>
              <div class="container">
                <div class="row">
                  <div class="col-xs-4 text-right">
                    Phone:
                  </div>
                  <div class="col-xs-8 text-left">
                  068 038 0383
                  </div>
                </div>
              </div>
              <div class="container">
                <div class="row">
                  <div class="col-xs-4 text-right">
                  <img src="https://thecaringheartssociety.co.za/assets/facebook_logo.png" height="40" />
                  </div>
                  <div class="col-xs-8 text-left">
                  <a href="https://www.facebook.com/TheCaringHeartsSociety1">https://www.facebook.com/TheCaringHeartsSociety1</a>
                  </div>
                </div>
              </div>
              <div class="container">
                <div class="row">
                  <div class="col-xs-4 text-right">
                  <img src="https://thecaringheartssociety.co.za/assets/instagram_logo.png" height="40" />
                  </div>
                  <div class="col-xs-8 text-left">
                  <a href="https://www.instagram.com/the_caring_hearts_society0101?igsh=MTl2NHdlMjlhdjAzZQ==">https://www.instagram.com/the_caring_hearts_society0101</a>
                  </div>
                </div>
              </div>
              <div class="container">
                <div class="row">
                  <div class="col-xs-4 text-right">
                  <img src="https://thecaringheartssociety.co.za/assets/whatsapp_logo.png" height="40" />
                  </div>
                  <div class="col-xs-8 text-left">
                  <a href="https://wa.me/27680380383">+2768 038 0383</a>
                  </div>
                </div>
              </div>

              <!--
              <form action="https://thecaringheartssociety.co.za/contact" method="post" id="contact-form">
                <h2>Contact us</h2>
                <?php echo ((!empty($errorMessage)) ? $errorMessage : '') ?>
                <p>
                  <label>First Name:</label>
                  <input name="name" type="text" />
                </p>
                <p>
                  <label>Email Address:</label>
                  <input style="cursor: pointer;" name="email" type="text" />
                </p>
                <p>
                  <label>Message:</label>
                  <textarea name="message"></textarea>
                </p>
                <p>

                  <input type="submit" value="Send" />
                </p>
              </form>

              <script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
              <script>


                const constraints = {
                  name: {
                    presence: { allowEmpty: false }
                  },
                  email: {
                    presence: { allowEmpty: false },
                    email: true
                  },
                  message: {
                    presence: { allowEmpty: false }
                  }
                };

                const form = document.getElementById('contact-form');
                form.addEventListener('submit', function (event) {

                  const formValues = {
                    name: form.elements.name.value,
                    email: form.elements.email.value,
                    message: form.elements.message.value
                  };


                  const errors = validate(formValues, constraints);
                  if (errors) {
                    event.preventDefault();
                    const errorMessage = Object
                      .values(errors)
                      .map(function (fieldValues) {
                        return fieldValues.join(', ')
                      })
                      .join("\n");

                    alert(errorMessage);
                  }
                }, false);
              </script>
              -->

            </article>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- including the footer.php global file -->
  <?php include("./includes/footer.php"); ?>

</body>

</html>