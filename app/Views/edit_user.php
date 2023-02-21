<form action="/user/update/<?= $user['id']?>" method="post">
    <div class="mb-3">
        <label for="npm" class="form-label">NPM</label>
        <input type="text" class="form-control" id="npm" placeholder="Masukan Kode Buku" name='npm' value="<?= $user['npm']?>">
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label">NAMA</label>
        <input type='text' class="form-control" id="nama" rows="3" name='nama' value="<?= $user['nama']?>"></input>
    </div>
    <div class="mb-3">
        <label for="semester_kelas" class="form-label">Semester - Kelas</label>
        <input type='text' class="form-control" id="semester_kelas" rows="3" name='semester_kelas' value="<?= $user['semester_kelas']?>"></input>
    </div>
    <div class="mb-3">
        <label for="fakultas" class="form-label">Fakultas</label>
        <input type='text' class="form-control" id="fakultas" rows="3" name='fakultas' value="<?= $user['fakultas']?>"></input>
    </div>
    

    

    <div class="modal-footer">
        <input type="submit" class="btn btn-secondary" value='Update'></input>
    </div>
</form>