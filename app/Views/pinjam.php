<?= $this->extend('back/template') ?>

<?= $this->section('content') ?>


<div>
    <div class="row">
       <?= $this->include('back/nav')?>

       <div class="col mt-3 ">
            <div class="row container">
            <div class="col mb-3">
                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Tambah Pinjaman
                </button>
            </div>         
            </div>
            <!-- Form POST -->
            <div class="modal fade" id="staticBackdrop" class="myModal" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Form Tambah Pinjaman</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/pinjam/create" method="post">
                                <div class="mb-3">
                                    <label for="KodeBuku" class="form-label">Buku</label>
                                    <!-- <input type="text" class="form-control" id="KodeBuku" placeholder="Masukan Kode Buku" name='kodebuku'> -->
                                    <select name="books_id" class="js-example-basic-single" style="width:100%!important" id="KodeBuku">
                                        <?php foreach($books as $book): ?>
                                            <option value="<?= $book['id']?>"><?= $book['kode']?> - <?= $book['judul']?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="npm" class="form-label">Mahasiswa</label>
                                    <!-- <input type='text' class="form-control" id="npm" rows="3" name='npm'></input> -->
                                    <select name="users_id" class="js-example-basic-single" style="width:100%!important" id="npm">
                                        <?php foreach($users as $user): ?>
                                            <option value="<?= $user['id']?>"><?= $user['npm']?> - <?= $user['nama']?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="lama-pinjam" class="form-label">Lama Pinjam</label>
                                    <div class='input-group'>
                                        <input type='number'class="form-control" id="lama-pinjam" rows="3" name='lama_pinjam' min='1'></input>
                                        <span class="input-group-text" id="basic-addon2">Hari</span>
                                        
                                    </div>
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
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Detail Peminjaman</h5>
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
            
            <div class="row container">
                <div class="col">
                    <table class="table table-light table-bordered table-striped" style='vertical-align: middle; text-align:center;'>
                        <thead class="table-dark">
                            
                            <tr>
                                <th width="50">No</th>
                                <th width="100">Cover</th>
                                <th width="100">Judul Buku</th>
            
                                <th width="100">Nama Peminjam</th>
                                <th width="100">Tanggal Pinjam</th>
                                <th width="100">Tanggal Kembali</th>
                                <th width="100">Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            <!-- <tr>
                                <td>1</td>
                                <td>CD124FB</th>
                                <td>Pendidikan AGAMA </td>
                                <td>D1A210036</td>
                                <td>Aditya</td>
                                <td>30/3/2022</td>
                                <td>3/4/2022</td>

                            </tr> -->
                        <?php 
                        $angka = 1;
                        foreach($pinjaman as $pinjam): ?>
                            <tr>
                                <td><?= $angka++?></td>
                                <td><img src="img/<?= $pinjam['gambar']?>" alt="" style="width: 200px;"></th>
                                <td><?= $pinjam['judul']?></td>
            
                                <td><?= $pinjam['nama']?></td>
                                <td><?= $pinjam['tanggal_pinjam']?></td>
                                <td><?= $pinjam['tanggal_kembali']?></td>
                                
                                <td>

                                    <button type="button" class="btn btn-info mb-2"  onclick="details('<?= $pinjam['books_id'] ?>','<?= $pinjam['users_id']?>')" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">Details Pinjaman</button>
                                    <button type="button" class="btn btn-success mb-2"  onclick="promptTambahWaktu('<?= $pinjam['id'] ?>')">[+] Waktu Pinjam</button> 
                                    <a class="btn btn-danger" href="/pinjam/delete/<?= $pinjam['id'] ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
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