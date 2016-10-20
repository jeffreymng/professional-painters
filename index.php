
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
      <h1>$150 OFF</h1>
      <h5>ANY JOB OF $3000 OR MORE</h5>
    </div>
    <form method='post' action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" class='form-horizontal'>
      <div class='form-group'>
        <label for='name'>NAME</label>
        <input type='text' class='' id='name'>
      </div>
      <div class='form-group'>
        <label for='email'>EMAIL</label>
        <input type='email' class='' id='email'>
      </div>
      <div class='form-group'>
        <label for='phone'>PHONE</label>
        <input type='number' class='' id='phone'>
      </div>
      <div class='form-group'>
        <button type='submit' class='btn'>SAVE $150</button>
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
    <ul class='red'>
      <li>
        Mauris sit amet urna et leo pulvinar tristique.
      </li>
      <li>
        Nam eu eros mollis, interdum sapien tincidunt accumsan erat.
      </li>
      <li>
        Maecenas rutrum libero ac diam volutpat, eu vehicula risus molestie.
      </li>
      <li>
        Mauris at tellus in lacus efficitur fringilla.
      </li>
      <li>
        Nullam lacinia nulla eget quam ornare blandit.
      </li>
      <li>
        Sed mollis magna eu mi aliquet scelerisque.
      </li>
    </ul>
    <p>Donec aliquam sit amet nisi sed consequat. Etiam non gravida nisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean feugiat lacinia velit non lacinia. Proin eget tristique leo.</p>
  </div>
</div>

<div class='container-fluid bottom-footer center white center-text'>
  <h2>Schedule your free estimate! 555-123-4567</h2>
</div>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/inc/footer.php' ?>