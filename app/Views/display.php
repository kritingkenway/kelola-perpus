
<div class="container">
    <div class="row mb-3">
        <div class="col border-bottom pb-3">

            <div class='card border-secondary'>
                <div class="row g-0">
                <div class="card-header"><h3>Buku</h3></div>
                    <div class="card-body text-secondary col-md-8 ps-3 pt-3">
    
                        <ul class="list-group list-group-flush">
                            <caption>Kode Buku:</caption>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <?= $book['kode']?>
                            </li>
                            <caption>Judul:</caption>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <?= $book['judul']?>
                            </li>
                            <caption>Penulis:</caption>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <?= $book['author']?>
                            </li>
                            <caption>Penerbit:</caption>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <?= $book['penerbit']?>
                            </li>
                            <caption>Tahun:</caption>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <?= $book['tahun']?>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">

                        <img src="img/<?= $book['gambar']?>" class="img-fluid rounded-end" alt="...">

                    </div>
                </div>
            </div>

        </div>
        
    </div>
    <div class="row mb-3">

        <div class="col border-bottom">
            <div class="card border-secondary mb-3" >
                <div class="card-header"><h3>Peminjam</h3></div>
                <div class="card-body text-secondary">
                    <!-- <h5 class="card-title">Secondary card title</h5> -->
                    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                    <ul class="list-group list-group-flush">
                        <caption>NPM:</caption>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <?= $user['npm']?>
                        </li>
                        <caption>Nama:</caption>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <?= $user['nama']?>
                        </li>
                        <caption>Semester/Kelas</caption>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <?= $user['semester_kelas']?>
                        </li>
                        <caption>Fakultas:</caption>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <?= $user['fakultas']?>
                        </li>
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
    
</div>



