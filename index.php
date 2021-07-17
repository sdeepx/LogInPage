<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="./css/bootstrap.min.css">
      <link rel="stylesheet" href="./css/style.min.css">
      <title>SOLD - Admin Login</title>
</head>

<body>
      <div class="container mt-5 mb-5">
            <div class="row">
                  <div class="col-md-6">
                        <div class="container mt-4">
                              <img src="/images/undraw_remotely_2j6y.svg" alt="Image" class="img-fluid pr-4">
                        </div>
                  </div>

                  <div class="col-md-6 ">
                        <form class="shadow p-4 bg-white form" action="/action.php" method="POST">
                              <div class="mb-3">
                                    <input type="email" class="form-control shadow-none" id="email" name="email" placeholder="Email address" required>
                              </div>
                              <div class="mb-3">
                                    <input type="password" class="form-control shadow-none" id="password" name="password" placeholder="Password" required>
                              </div>

                              <button type="submit" class="btn submit__btn form-control btn-primary">Log In</button>
                              <hr />
                              <div class="mb-3 text-center">
                                    <a href="/forgot-pass.php" class="forgot__pass">Forgotten password?</a>
                              </div>
                        </form>
                  </div>
            </div>
      </div>

      <script src="/js/bootstrap.min.js"></script>
      <script src="/js/scripts.min.js"></script>
</body>

</html>