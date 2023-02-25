<?php

session_start();
require 'includes/functions.php';


require 'includes/conn.php';

require 'includes/navbar.php';

auth_redirect();

require_with('includes/miniheader.php', array('pagename' => 'register'));




if ($_SERVER['REQUEST_METHOD']  == 'POST') {




  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $email = $_POST['email'];
  $password = md5($_POST['password']);
  $verifypassword = $_POST['verifypassword'];
  $phone = $_POST['phone'];



  $errors = array();

  if (empty($errors)) {


    $sql = "INSERT INTO `client` 
(`client_id`, `firstname`, `lastname`, `Email`, `Mot_de_passe`, `phoneNumber`)
 VALUES
  (NULL, '$firstName', '$lastName' , '$email' , '$password' , '$phone')";

    // $sql = "INSERT INTO `annoce` (`id`, `titre`, `image`, `description`, `space`, `adresse`, `price`, `dateDannonce`, `type`) VALUES (NULL, 'amina', 'xxxxx', 'xxxx', '44', 'qsdfqsfqsdqsdqsdqsd', '34', '2023-02-01', 'sale');";

    // execute a query
    $conn->exec($sql);



    // ->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION['id'] = $conn->query("SELECT client_id FROM client WHERE email = '$email' ")->fetch()['client_id'];

    // fetch all rows
    header("location:profile.php");
  } else {
  }
};




?>





<section class="col-md-4 mx-auto border border-secondary my-4 p-3 rounded">

  <h2 class='text-center my-3'>registration form</h2>


  <form action="<?php echo $_SERVER["PHP_SELF"] ?>" class="signup" method='POST'>
    <div class="field">
      <input type="text" name="firstName" placeholder="First Name" required class="form-control my-3" />
    </div>
    <div class="field">
      <input type="text" name="lastName" placeholder="Last Name" required class="form-control my-3" />
    </div>
    <div class="field">
      <input type="email" name="email" placeholder="Email Address" required class="form-control my-3" autocomplete="off" />
    </div>
    <div class="field">
      <input type="password" name="password" placeholder="Password" required class="form-control my-3" />
    </div>
    <div class="field">
      <input type="password" name="verifypassword" placeholder="Confirm password" required class="form-control my-3" autocomplete="new-password" />
    </div>
    <div class="field">
      <input type="text" name="phone" placeholder="Phone" required class="form-control my-3" />
    </div>
    <div class="field btn">
      <div class="btn-layer"></div>
      <input type="submit" name="signUp" value="Signup" class="form-control btn btn-secondary d-flex my-3" />
    </div>
  </form>



</section>






<?php
require 'includes/footer.php';


?>