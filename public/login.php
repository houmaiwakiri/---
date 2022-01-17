<!DOCTYPE html>
<html>

<head>
  <title>となり</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<body class="text-center ">
  <header class="p-3">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="index.html" class="align-items-center text-decoration-none title">
          となり
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
            <use xlink:href="#bootstrap"></use>
          </svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="mypage.html" class="nav-link px-2">マイページ</a></li>
          <li><a href="serch.html" class="nav-link px-2">園を探す</a></li>
          <li><a href="question.html" class="nav-link px-2">質問</a></li>
          <li><a href="registration.html" class="nav-link px-2">施設情報の登録</a></li>
          <li><a href="detail.html" class="nav-link px-2">となりとは</a></li>
        </ul>

        <button type="button" class="btn btn-warning"><a class="text-decoration-none" href="login.php">ログイン</a></button>


      </div>
    </div>
  </header>

  <main class="form-signin">
    <form action="" method="post" class="container">
      <h1 class="h3 mb-3 fw-normal">ログイン</h1>
      <span>メールアドレス:</span><input type="text" name="mail">
      <span>パスワード:</span><input type="text" name="pass">
      <input type="submit" name="submit">
      <input type="submit" name="submit" value="ログイン">
    </form>
  </main>

  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="index.html" class="nav-link px-2 text-muted">トップ</a></li>
      <li class="nav-item"><a href="serch.html" class="nav-link px-2 text-muted">園を探す</a></li>
      <li class="nav-item"><a href="question.html" class="nav-link px-2 text-muted">質問</a></li>
      <li class="nav-item"><a href="registration.html" class="nav-link px-2 text-muted">園情報の登録</a></li>
      <li class="nav-item"><a href="detail.html" class="nav-link px-2 text-muted">となりとは</a></li>
    </ul>
    <p class="text-center text-muted">© 2021 tonari-project</p>
  </footer>

</body>

</html>