<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
  button {
    display: block;
  }
</style>
<body>
  <form action="/" method="POST">
  @csrf
  <p>氏名</p>
  <input type="text" name='name'>
  <p>メールアドレス</p>
  <input type="text" name='email'>
  <button>送信する</button>
</form>
  
</body>
</html>