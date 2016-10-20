
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
      <h4><span class='glyphicon glyphicon-ok-sign'></span>Quality Work &nbsp;&nbsp;&nbsp;&nbsp;<span class='glyphicon glyphicon-ok-sign'></span>Professional Painters &nbsp;&nbsp;&nbsp;&nbsp;<span class='glyphicon glyphicon-ok-sign'></span>Flexible Schedules</h4>
    </div>
    &nbsp;
  </div>
</div>

<!-- 
<div class='container-fluid'>
  <div class='col-xs-8'>
    <h1><span class='red'>Professional Painters</span></h1>
  </div>
</div> -->

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/inc/footer.php' ?>