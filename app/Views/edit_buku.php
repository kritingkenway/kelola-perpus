<form action="/buku/update/<?= $book['id']?>" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="KodeBuku" class="form-label">Kode Buku:</label>
        <input type="text" class="form-control" id="KodeBuku" placeholder="Masukan Kode Buku" name='kodebuku' value="<?= $book['kode']?>">
    </div>
    <div class="mb-3">
        <label for="judul" class="form-label">Judul:</label>
        <input type='text' class="form-control" id="judul" rows="3" name='judul' value="<?= $book['judul']?>"></input>
    </div>
    <div class="mb-3">
        <label for="author" class="form-label">Author:</label>
        <input type='text' class="form-control" id="author" rows="3" name='author' value="<?= $book['author']?>"></input>
    </div>
    <div class="mb-3">
        <label for="penerbit" class="form-label">Penerbit:</label>
        <input type='text' class="form-control" id="penerbit" rows="3" name='penerbit' value="<?= $book['penerbit']?>"></input>
    </div>
    <div class="mb-3">
        <label for="tahun" class="form-label">Tahun:</label>
        <input type='number' class="form-control" id="tahun" rows="3" name='tahun' value="<?= $book['tahun']?>"></input>
    </div>

    <div class="mb-3">
        <label for="formFile" class="form-label">Gambar:</label>
        <div class="div">
            <img src="img/<?= $book['gambar']?>" class="img-thumbnail d-inline" style='width: 50px;'>
            <caption><?= $book['gambar']?></caption>
            <input class="form-control col-2" type="file" id="formFile" name='gambar' >
        </div>
    </div>

    <div class="modal-footer">
        <input type="submit" class="btn btn-secondary" value='Update'></input>
    </div>
</form>