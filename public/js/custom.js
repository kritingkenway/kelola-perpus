$(document).ready(function() {
    $('.js-example-basic-single').select2({
        dropdownParent: $("#staticBackdrop")
    });
});
function promptTambahWaktu(id) {
    var lama_pinjam = prompt('Berapa lama waktu yang akan ditambah?');
    if(isNaN(lama_pinjam)) return alert("Harus Angka!");
    window.location.href = `/pinjam/update/${id}/${lama_pinjam}`;
}

function details(book_id,user_id) {
    var url = `/pinjam/detail/${book_id}/${user_id}`;
    
    $('.modalbox-body').load(url);
}
function editBuku(book_id) {
    var url = `/buku/editBuku/${book_id}`;
    
    $('.modalbox-body').load(url);
}
function editUser(user_id) {
    var url = `/user/editUser/${user_id}`;
    
    $('.modalbox-body').load(url);
}
function editGallery(gallery_id) {
    var url = `/gallery/editGallery/${gallery_id}`;
    
    $('.modalbox-body').load(url);
}