<?php
    require "baza.php";

    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $qidiruv=$_POST['qidiruv'];

        $buyruq=$pdo->prepare("SELECT * FROM dic WHERE xorazm LIKE '%$qidiruv%';");
        $buyruq->execute();

        $olish=$buyruq->fetchAll(); 

    }   
?>

<?php foreach($olish as $malumot): ?>
    <div>
        <h1>Qidirilayotgan so'z :<?= $malumot['xorazm'] ?></h1>
        <h1>Ma'nosi : <?= $malumot['uzbek'] ?></h1>
    </div>
<?php endforeach; ?>