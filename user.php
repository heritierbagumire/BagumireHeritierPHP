<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" type='text/css' href="style.css">
  <title>Document</title>
</head>
<div class="container">
  <div class="link-header">
    <h1 class="link-text"></h1>
  </div>
  <div class="text">
    <h1>Sign in</h1>
  </div>
  <form action="create.php" method="POST">
    <div class="your-input">
      First name: <br />
      <input type="text" name="fname" id="fname" class="input" placeholder="Enter your First name"  autocomplete="off" /><br />
      Last name: <br />
      <input type="text" name="lname" id="lname" class="input" placeholder="Enter your Last name"  autocomplete="off" /><br />
      Email: <br />
      <input type="text" name="email" id="email" class="input" placeholder="Enter your email"  autocomplete="off" /><br />
      PASSWORD: <br />
      <input type="password" name="pwd" id="pwd"  class="input" placeholder="Enter your password" autocomplete="off" /><br />
      GENDER: <br />
      <div class="gender">
        <input type="radio" name="gender" value="Male"/>Male<br />
        <input type="radio" name="gender" value="Female"/>Female<br /><br />
      </div>

    </div>

    <a href="#" class="forgot-password-link" style="color: green">Forgot Password?</a>
    <div class="submit-input">
      <input type="submit" name="submit" id="submit"  style="background-color: green" />
    </div>

  </form>
  <div class="footer">
    <!-- <p class="join-link"> New to FD? -->
      <a href="#" class="join-now">
        <!-- Join now -->
      </a>
    </p>
  </div>
</div>

</body>

</html>