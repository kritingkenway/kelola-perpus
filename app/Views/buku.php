<?= $this->extend('back/template') ?>

<?= $this->section('content') ?>


<div>
    <div class="row">
       <?= $this->include('back/nav')?>

       <div class="col mt-3">
            <div class="row container">
            <div class="col mb-3">
                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Tambah Buku
                </button>
            </div>         
            </div>
            <!-- Form POST -->
            <div class="modal fade" id="staticBackdrop" class="myModal" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Form Tambah Buku</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/buku/create" method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="KodeBuku" class="form-label">Kode Buku:</label>
                                    <input type="text" class="form-control" id="KodeBuku" placeholder="Masukan Kode Buku" name='kodebuku'>
                                    
                                </div>
                                <div class="mb-3">
                                    <label for="judul" class="form-label">Judul:</label>
                                    <input type='text' class="form-control" id="judul" rows="3" name='judul'></input>
                                </div>
                                <div class="mb-3">
                                    <label for="author" class="form-label">Author:</label>
                                    <input type='text' class="form-control" id="author" rows="3" name='author'></input>
                                </div>
                                <div class="mb-3">
                                    <label for="penerbit" class="form-label">Penerbit:</label>
                                    <input type='text' class="form-control" id="penerbit" rows="3" name='penerbit'></input>
                                </div>
                                <div class="mb-3">
                                    <label for="tahun" class="form-label">Tahun:</label>
                                    <input type='number' class="form-control" id="tahun" rows="3" name='tahun'></input>
                                </div>


                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Gambar:</label>
                                    <input class="form-control" type="file" id="formFile" name='gambar'>
                                </div>

                                <div class="modal-footer">
                                    <input type="submit" class="btn btn-secondary" value='Tambah'></input>
                                </div>
                            </form>    
                        </div>
                    </div>
                </div>
            </div>
            <!-- HTML DETAIL -->
            <div class="modal fade" id="staticBackdrop2" class="myModal" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Edit Buku</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="modalbox-body">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- TABEL DATA -->
            
            <div class="row mb-3 container">
                <div class="col">
                    <table class="table table-light  table-striped" style='vertical-align: middle;'>
                        <thead class="table-dark">
                            
                            <tr>
                                <th width="50">No</th>
                                <th width="100">Cover</th>
                                <th width="100">Detail Buku</th>
                                <th width="100">Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                        $angka = 1;
                        foreach($books as $book): ?>
                            <tr>
                                <td><?= $angka++?></td>
                                <td><img src="img/<?= $book['gambar']?>" alt="" style="width: 200px;"></td>
                                <td>
                                    <p><span>Kode:</span><?= $book['kode']?></p>
                                    <p><span>Judul:</span><?= $book['judul']?></p>
                                    <p><span>Author:</span><?= $book['author']?></p>
                                    <p><span>Penerbit:</span><?= $book['penerbit']?></p>
                                    <p><span>Tahun:</span><?= $book['tahun']?></p>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-info mb-2 d-block"  onclick="editBuku('<?= $book['id'] ?>')" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">Edit Buku</button> 
                                    <a class="btn btn-danger" href="/buku/delete/<?= $book['id'] ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach ?>    
                        </tbody>
                    </table>
                </div>
            </div>
       </div>
    </div>
    
    
</div>



<?= $this->endsection() ?>