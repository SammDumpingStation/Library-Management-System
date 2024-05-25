<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include './includes/general_css.php'?>
  <link rel="stylesheet" href="/public/css/authenticate.css">
  <title>Authenticate User</title>
</head>
<body>
  <header>
    <h1 class="libra auth-title">LIBRA</h1>
  </header>

  <main>
    <h1 class="section-title">Start Using LIBRA For Free!</h1>
    <form action="">
      <label for="have-account" class="auth-account have-account">
        <input id="have-account" class="radio-button" name="account-type" value="have-account" type="radio"> 
        <img src="/public/images/have-account.png" alt="">
        <label class="auth-state">I already have an account</label>
      </label>

      <label for="dont-have-account" class="auth-account dont-have-account">
        <input id="dont-have-account" class="radio-button" name="account-type" value="dont-have-account" type="radio"> 
        <img src="/public/images/dont-have-acount.png" alt="">
        <label class="auth-state">I don't have an account</label>
      </label>
    </form>
  </main>
</body>
</html>