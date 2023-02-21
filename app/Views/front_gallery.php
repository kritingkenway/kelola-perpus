<?= $this->extend('front/template')?>
<?= $this->section('content')?>



<div class="row container m-auto mb-5">
    <div class="card bg-dark text-white p-0" style='height: 500px;'>
        <img src="img/img1.png" class="card-img h-100" alt="...">
        <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center">
            <h1 class="card-title">Gallery</h1>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem ut soluta maiores.</p>
        </div>
    </div>
</div>

<div class="row container m-auto mb-5">
  <div class="row row-cols-3">
    <?php foreach($galleries as $gallery):?>    
        <div class="col my-3 p-auto "><img src="img/<?= $gallery['gambar']?>" class='img-thumbnail' alt=""></div>
    <?php endforeach?>
</div>
</div>










<?= $this->endsection()?>