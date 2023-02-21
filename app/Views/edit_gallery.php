<form action="/gallery/update/<?= $gallery['id']?>" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="deskripsi" class="form-label">Deskripsi</label>
        <textarea class="form-control" id="deskripsi" name='deskripsi'  rows='3'><?= $gallery['deskripsi']?></textarea>
    </div>
    <div class="mb-3">
        <label for="formFile" class="form-label">Gambar</label>
        <div class="div">
            <img src="img/<?= $gallery['gambar']?>" class="img-thumbnail d-inline" style='width: 50px;'>
            <caption><?= $gallery['gambar']?></caption>
            <input class="form-control col-2" type="file" id="formFile" name='gambar' >
        </div>
    </div>
   

    

    <div class="modal-footer">
        <input type="submit" class="btn btn-secondary" value='Update'></input>
    </div>
</form>