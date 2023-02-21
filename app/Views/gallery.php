<?= $this->extend('back/template') ?>

<?= $this->section('content') ?>


<div>
    <div class="row">
       <?= $this->include('back/nav')?>

       <div class="col mt-3">
            <div class="row container">
            <div class="col mb-3">
                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Tambah Gallery
                </button>
            </div>         
            </div>
            <!-- Form POST -->
            <div class="modal fade" id="staticBackdrop" class="myModal" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Form Tambah Gallery</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/gallery/create" method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Deskripsi:</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name='deskripsi'></textarea>
                                    
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
                            <h5 class="modal-title" id="staticBackdropLabel">Edit Gallery</h5>
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
                                <th width="100">Gambar</th>
                                <th width="100">Deskripsi</th>
                                <th width="100">Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                        $angka = 1;
                        foreach($galleries as $gallery): ?>
                            <tr>
                                <td><?= $angka++?></td>
                                <td><img src="img/<?= $gallery['gambar']?>" alt="" style="width: 200px;"></td>
                                <td>
                                    <p><?= $gallery['deskripsi']?></p>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-info mb-2 d-block"  onclick="editGallery('<?= $gallery['id'] ?>')" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">Edit Gallery</button> 
                                    <a class="btn btn-danger" href="/gallery/delete/<?= $gallery['id'] ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
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