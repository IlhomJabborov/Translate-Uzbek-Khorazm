<?php
    require "./include/header.php";
    require "baza.php";

    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $qidiruv=$_POST['qidiruv'];

        $buyruq=$pdo->prepare("SELECT * FROM dic WHERE xorazm OR uzbek LIKE '%$qidiruv%';");
        $buyruq->execute();

        $olish=$buyruq->fetchAll();

    } 
?>

    <div class="text-secondary px-4 py-5 text-center">
        <div class="py-5">
        <h1 class="display-5 fw-bold text-dark">Dark mode hero</h1>
        <div class="col-lg-6 mx-auto">
            <p class="fs-5 mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
        </div>
        </div>
    </div>

  <div class="b-example-divider"></div>

    <div class="container">
        <table class="table mt-5 table-secondary table-hover text-center table-bordered">
            <thead>
                <tr>
                <th scope="col">Xorazmcha</th>
                <th scope="col">O'zbekcha</th>
                </tr>
            </thead>
            <?php foreach($olish as $malumot): ?>
            <tbody>
                <tr>
                <td><?= $malumot['xorazm'];?></td>
                <td><?= $malumot['uzbek'];?></td>
                </tr>
            </tbody>
            <?php endforeach; ?>
        </table>
    </div>

    <?php if (empty($olish)) { ?>
        <div class="container-fluid ">
            <div class="alert alert-danger text-center p-5 fs-3">
             <strong>Xabar:</strong>Siz xato so'z kiritdingiz. Bizning tarjimon saytimizda ushbu so'z mavjud emas!
             </div>
             
        </div>
    <?php } ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>