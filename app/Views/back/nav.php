
<div class='col-2 border '>
  
  <?php if(session()->get('log') == true):?>

    <nav class="nav flex-column sticky-top" style='top: 125px;'>
      <a class="nav-link" aria-current="page" href="/kelola-pinjaman">Pinjaman</a>
      <a class="nav-link" href="/kelola-buku">Kelola Buku</a>
      <a class="nav-link" href="/kelola-user">Kelola User</a>
      <a class="nav-link" href="/kelola-gallery">Kelola Gallery</a>
      <a class="nav-link" href="/auth/doLogout">Log-out</a>
      
    </nav>
    <?php endif?>
</div>


