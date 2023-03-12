<?php
session_start();

$host = "localhost:3308";
$user = "root";
$password = "";
$db = "SWC2363";

$conn = mysqli_connect($host, $user, $password, $db);

if (isset($_POST['Username'])) {

  $username = $_POST['Username'];
  $password = $_POST['Password'];

  $sql = "SELECT * FROM signupform WHERE User=? AND Pass=? LIMIT 1";
  
  $stmt = mysqli_prepare($conn, $sql);
  mysqli_stmt_bind_param($stmt, "ss", $username, $password);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);

  if (mysqli_num_rows($result) == 1) {
    $_SESSION['Username'] = $username;
    header("Location: HomePage.php");
    exit();
  } else if (mysqli_num_rows($result) == 0) {
    $error = "Incorrect password or username";
  } 
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <link rel="icon" href="Logo.png" type="image/icon type">
  <meta charset="utf-8">
  <title>Login Page</title>
  <link rel="stylesheet" href="login.css">
</head>

<body>
  <div class="center">
    <h1>Login</h1>
    <form action="#" method="post">
      <div class="txt_field">
        <input type="text" name="Username" required>
        <span></span>
        <label>Username</label>
      </div>
      <div class="txt_field">
        <input type="password" name="Password" required>
        <span></span>
        <label>Password</label>
      </div>
      <div class="pass"><a href="forgotpassword.php">Forgot Password?</a></div>
        <input type="submit" value="Login">
        <div class="signup_link">
          Don't have an account? <a href="signup.php">Signup</a>
        </div>
    </form>
  </div>
</body>
</html>

<?php if (isset($error)) { ?>
  <script>
    alert('<?php echo $error ?>');
  </script>
<?php } ?>

