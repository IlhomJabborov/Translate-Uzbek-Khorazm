<?php 
    require "baza.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $xorazm=$_POST['xorazm'];
        $uzbek=$_POST['uzbek'];

        $buyruq= $pdo->prepare("INSERT INTO dic (xorazm,uzbek) VALUES (?,?)");
        $buyruq->execute([$xorazm,$uzbek]);

     }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Admin Panel</title>
</head>
<body>
<div class="mt-5" >
    <a href="index.php"><button type="button" class="btn btn-primary " style="display: flex; justify-content: center; height: 50px; width: 300px; background-color:blueviolet">Sayt Bosh Sahifasi</button></a> 
</div>
<BR><BR></BR></BR>
    <div class="container mt-5">
        <form method="post" action="" onsubmit="return validateForm()">
            <div><h2>Xorazmcha</h2></div>
            <div class="input-group mb-3">
                <input type="text" name="xorazm" class="form-control" style="background-color:antiquewhite; color:black; border-color:black; height: 50px;" required>
            </div>
            <div><h2>O'zbekcha</h2></div>
            <div class="input-group mt-1">
                <input type="text" name="uzbek" class="form-control" style="background-color:antiquewhite; color:black; border-color:black; height: 50px;" required>
            </div>
            <div class="mt-5" style="display: flex; justify-content: center; height: 50px;">
            <button type="submit" class="btn btn-primary" name="submit">Lug'atga qo'shish</button>
            </div>
        </form>
    </div>

    <script>
      function validateForm() {
        var input = document.querySelector('input[name="xorazm"],input[name="uzbek"]');
        if (input.value === "") {
          return false; // Formani jo'natmaslik uchun false qaytarish
        }
      }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>