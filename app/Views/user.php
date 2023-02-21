<?= $this->extend('back/template') ?>

<?= $this->section('content') ?>


<div>
    <div class="row">
       <?= $this->include('back/nav')?>

       <div class="col mt-3">
            <div class="row container">
            <div class="col mb-3">
                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Tambah User
                </button>
            </div>         
            </div>
            <!-- Form POST -->
            <div class="modal fade" id="staticBackdrop" class="myModal" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Form Tambah User</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/user/create" method="post">
                                <div class="mb-3">
                                    <label for="NPM" class="form-label">NPM</label>
                                    <input type="text" class="form-control" id="NPM"  name='npm'>
                                    
                                </div>
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type='text' class="form-control" id="nama" rows="3" name='nama'></input>
                                </div>
                                <div class="mb-3">
                                    <label for="semester_kelas" class="form-label">Semester - Kelas</label>
                                    <input type='text' class="form-control" id="semester_kelas" rows="3" name='semester_kelas'></input>
                                </div>
                                <div class="mb-3">
                                    <label for="fakultas" class="form-label">Fakultas</label>
                                    <input type='text' class="form-control" id="fakultas" rows="3" name='fakultas'></input>
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
                            <h5 class="modal-title" id="staticBackdropLabel">Edit User</h5>
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
                                <th width="100">Detail User</th>
                                <th width="100">Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                        $angka = 1;
                        foreach($users as $user): ?>
                            <tr>
                                <td><?= $angka++?></td>
                                <!-- <td><img src="https://islandpress.org/sites/default/files/default_book_cover_2015.jpg" alt="" style="width: 200px;"></td> -->
                                <td>
                                    <p><span>NPM:</span><?= $user['npm']?></p>
                                    <p><span>Nama:</span><?= $user['nama']?></p>
                                    <p><span>Semester-Kelas:</span><?= $user['semester_kelas']?></p>
                                    <p><span>Tahun:</span><?= $user['fakultas']?></p>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-info mb-2 d-block"  onclick="editUser('<?= $user['id'] ?>')" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">Edit User</button> 
                                    <a class="btn btn-danger" href="/user/delete/<?= $user['id'] ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
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