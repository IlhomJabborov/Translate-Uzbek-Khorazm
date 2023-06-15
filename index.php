<?php 
  require "./include/boshi.php";
  require "baza.php";
 

 
?>
<BR><BR><BR></BR></BR></BR>
<div class="mt-5">
  <form method="post" action="natija.php">
    <div class="form-group mt-5" style="display: flex; justify-content: center;">
      <input type="text" name="qidiruv" class="form-control" style="width: 800px; height: 60px;" placeholder="So'zni kiriting">
    </div>
    <div class="mt-3" style="display: flex; justify-content: center;height: 50px">
    <button type="submit" class="btn btn-primary" name="submit">Tarjima qilish</button>
    </div>
  </form>
</div>

<BR><BR></BR></BR><BR><BR><BR><BR><BR></BR></BR></BR></BR></BR>
<div class="container">
  <div class="row">
    <div class="col">
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/img/1.jpg" class="d-block w-100" alt="..." height="350">
          </div>
          <div class="carousel-item">
            <img src="/img/3.jpg" class="d-block w-100" height="350" alt="...">
          </div>
          <div class="carousel-item">
            <img src="/img/7.jpg" class="d-block w-100" height="350" alt="...">
          </div>
        </div>
      </div>
    </div>
    <div class="col">
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/img/2.webp" class="d-block w-100" height="350" alt="...">
          </div>
          <div class="carousel-item">
            <img src="/img/5.jpg" class="d-block w-100" height="350" alt="...">
          </div>
          <div class="carousel-item">
            <img src="/img/8.jpg" class="d-block w-100" height="350" alt="...">
          </div>
        </div>
      </div>
    </div>
    <div class="col">
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/img/4.jpg" class="d-block w-100" height="350" alt="...">
          </div>
          <div class="carousel-item">
            <img src="/img/9.jpg" class="d-block w-100" height="350" alt="...">
          </div>
          <div class="carousel-item">
            <img src="/img/6.jpg" class="d-block w-100" height="350" alt="...">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php  require "./include/oxiri.php"; ?>
