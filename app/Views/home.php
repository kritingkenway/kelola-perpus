<?= $this->extend('front/template')?>

<?= $this->section('content')?>


<div class="row container m-auto ">
    <div class="p-5 mb-4 bg-light rounded-3 bg-light shadow">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Selamat Datang!!</h1>
            <p class="col-md-8 fs-4">Development Web ini guna untuk menunjung tinggi nilai UAS Mata Kuliah Pemrograman Web ( FrameWork )</p>
           
        </div>
    </div>
</div>
<div class="row container m-auto mt-5">
    <div class="col-8">
        <h3 class="pb-4 mb-4 fst-italic border-bottom">List Buku tersedia</h3>
        <form action="" method='get'>

            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search...." name='keyword'>
                <button class="btn btn-outline-secondary" type="submit" name='submit'>Search</button>
            </div>
        </form>
    </div>
</div>

<div class="row container g-3 m-auto ">
    <div class="col-md-8 mb-5">
        <div class="row row-cols-auto justify-content-md-center">

            <?php foreach($books as $book):?>
                <div class="card col p-0 m-2 shadow" style="width: 12rem;">
                    <img src="img/<?= $book['gambar']?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text"><?= $book['judul']?></p>
                    </div>
                </div>
                
                <?php endforeach?>
        </div>
        <?= $pager->links('book', 'custom_page')?>
    </div>


    <!-- ------------------------------------------------ -->

    <div class="col-md-4">
        <div class="position-sticky shadow" style='top: 2rem;'>
            <div class="p-4 mb-3 bg-light rounded">
                <h4 class="fst-italic">About</h4>
                <p class="mb-0">
                    UAS Pemrograman Web (Framework)
                    <br>
                    <caption>By:</caption>
                    <br>
                    Aditya Mochamad Akbar
                    <br>
                    D1A.21.0036 <br>
                    3 Reguler A
                </p>
            </div>
         </div>   
    </div>

</div>
<?= $this->endsection('content')?>
