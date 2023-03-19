<?php
  $title = 'POST input';

    include('./../inc/header.php');
    require_once('./../inc/functions.php');
    
    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

        if ($email == false) {
            $status = 'Please enter a valid email address';
        }
    }
    
    /* if (isset($_POST['login'])) {
        output($_POST);
    } //for multiple forms
    */
    

?>

    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="mt-5">GET input</h1>
        </div>
      </div>
      <div class="row">

        <form action="" method="POST">
            <div class="form-group">
                <label for="email">Email: </label>
                <input class="form-group" type="text" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="email">Password: </label>
                <input class="form-group" type="password" name="password" id="password">
            </div>
            <div class="form-group">
                <input type="submit" name="login" value="Login">
            </div>
        </form>
      

      </div>
      <div class="row" >
        <?php 
            if (isset($status)) {
                echo $status;
            }
            ?>
      </div>
    </div>

    <?php include('./../inc/footer.php'); ?>