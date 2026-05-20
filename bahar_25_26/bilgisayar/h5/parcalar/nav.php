<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">OBS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./liste.php">Öğrenciler</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./ogrenci_kayit.php">Yeni Öğrenci</a>
        </li>
       
        
       
      </ul>
   
    </div>
  </div>
</nav>
<div class="col-12">
                <h1><?php echo isset($baslik) ? $baslik : 'Başlık'; ?></h1>

                <?php
                if($bilgi){
                  echo "<div class=\"alert alert-info mt-3\" role=\"alert\">".$mesaj."</div>";
                          }?>
            </div>