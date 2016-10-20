<?php
  $name_error = $email_error = $phone_error = "";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $name_error = "Please enter your name";
    } else {
      $name = $_POST["name"];
    }

    if (empty($_POST["email"]))  {
      $email_error = "Please enter your email";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
      $email_error = "Invalid email";
    } else {
      $email = $_POST["email"];
    }

    if (empty($_POST["phone"]))  {
      $phone_error = "Please enter your phone number";
    } elseif (!preg_match("/^\d{10}$/", $_POST["phone"])) {
      $phone_error = "Invalid phone. Please enter 10 numbers";
    } else {
      $phone = $_POST["phone"];
    }

    if ($name && $email && $phone) {
      $message_to_customer = "Hello $name, \nThank you very much for your interest in Professional Painters. We will be in contact with you shortly either by phone or email. Have a nice day!";
      $message_to_customer = wordwrap($message_to_customer, 70, "\r\n");
      $subject_to_customer = "Professional Painters";
      mail($email, $subject_to_customer, $message_to_customer);
      $message_to_website_owner = "Hello, Professional Painters, \n You have a potentional new client. \nName: $name \nEmail: $email \nPhone: $phone";
      $message_to_website_owner = wordwrap($message_to_website_owner, 70, "\r\n");
      mail("webmaster@professionalpainters.com", "New Customer", $message_to_website_owner);
    }
  }
?>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/inc/header.php' ?>
<div class='container-fluid' id='central-image'>
  <div class='central center-text'>
    <h1><span class='red'>PROFESSIONAL</span> <span class='blue'>PAINTERS</span></h1>
    <h2 class='blue'>OF LARGO, CLEARWATER, TAMPA</h2>
    <hr>
    <h3 class='blue'>WE CARE ABOUT MORE THAN PAINT!</h3>
    <div class='transparent-red white'>
      <h4>SCHEDULE YOUR FREE ESTIMATE</h4>
      <h4>TO REDEEM PROMO CODE FOR</h4>
      <h1 class='large'>$150 OFF</h1>
      <h5>ANY JOB OF $3000 OR MORE</h5>
    </div>
    <form method='post' action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" class='form-horizontal'>
      <div class='form-group'>
        <label for='name'>NAME</label>
        <input type='text' name='name' class='' id='name' placeholder="<?php echo $name_error ?>">
      </div>
      <div class='form-group'>
        <label for='email'>EMAIL</label>
        <input type='email' name='email' class='' id='email' placeholder="<?php echo $email_error ?>">
      </div>
      <div class='form-group'>
        <label for='phone'>PHONE</label>
        <input type='text' name='phone' class='' id='phone' maxlength='10' placeholder="<?php echo $phone_error ?>">
      </div>
      <div class='form-group'>
        <input type='submit' name='submit' class='btn submit' value='SAVE $150'>
      </div>
    </form>
    <div class='bottom-central white'>
      <h4><span class='glyphicon glyphicon-ok-sign'></span> Quality Work &nbsp;&nbsp;&nbsp;<span class='glyphicon glyphicon-ok-sign'></span> Professional Painters &nbsp;&nbsp;&nbsp;<span class='glyphicon glyphicon-ok-sign'></span> Flexible Schedules</h4>
    </div>
    &nbsp;
  </div>
</div>

<div class='container-fluid'>
  <div class='col-xs-2'>
  </div>
  <div class='col-xs-8'>
    <h1 class='red'>Professional Painters</h1>
    <h3 class='blue'>Tackling Residential & Commercial Painting Projects</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus gravida massa pharetra, tempor ligula ut, aliquet nulla. Quisque eu quam turpis. Sed porttitor mauris nec quam dignissim, et placerat odio scelerisque. In hac habitasse platea dictumst. Proin et accumsan nunc, sit amet bibendum purus. Proin at euismod ante. Phasellus ipsum orci, feugiat tristique mollis vitae, sagittis sollicitudin libero. In tempus ex non ipsum pretium, ac consequat justo fringilla.</p>
    <h3 class='blue'>Why Clients Choose to Hire Our Team:</h3>
    <ul class='red list-unstyled'>
      <li>
        <span aria-hidden="true" data-icon="&#xe001;" class="icon-glyphicon-paintbrush blue"></span>  Mauris sit amet urna et leo pulvinar tristique.
      </li>
      <li>
        <span aria-hidden="true" data-icon="&#xe001;" class="icon-glyphicon-paintbrush blue"></span>  Nam eu eros mollis, interdum sapien tincidunt accumsan erat.
      </li>
      <li>
        <span aria-hidden="true" data-icon="&#xe001;" class="icon-glyphicon-paintbrush blue"></span>  Maecenas rutrum libero ac diam volutpat, eu vehicula risus molestie.
      </li>
      <li>
        <span aria-hidden="true" data-icon="&#xe001;" class="icon-glyphicon-paintbrush blue"></span>  Mauris at tellus in lacus efficitur fringilla.
      </li>
      <li>
        <span aria-hidden="true" data-icon="&#xe001;" class="icon-glyphicon-paintbrush blue"></span>  Nullam lacinia nulla eget quam ornare blandit.
      </li>
      <li>
        <span aria-hidden="true" data-icon="&#xe001;" class="icon-glyphicon-paintbrush blue"></span>  Sed mollis magna eu mi aliquet scelerisque.
      </li>
    </ul>
    <p>Donec aliquam sit amet nisi sed consequat. Etiam non gravida nisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean feugiat lacinia velit non lacinia. Proin eget tristique leo.</p>
  </div>
</div>

<div class='container-fluid bottom-footer center white center-text'>
  <h2>Schedule your free estimate! 555-123-4567</h2>
</div>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/inc/footer.php' ?>
