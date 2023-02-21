<?= $this->extend('front/template')?>
<?= $this->section('content')?>
<div class="container">

<main class="container mt-5 m-auto">
        <form class='form-signin m-auto w-25' method='post' action='/auth/doLogin'>
            
            <h1 class="h3 mb-3 fw-normal">Sign in Karyawan</h1>
            <?= session()->getFlashdata('msg')?>
        <div class="form-floating">
            <input type="text"  name="user" class="form-control" id="floatingInput">
            <label for="floatingInput">Username</label>
        </div>
          <div class="form-floating">
              <input type="password" name="pass"class="form-control" id="floatingPassword">
            <label for="floatingPassword">Password</label>
          </div>
      
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Remember me
            </label>
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
          <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
        </form>
    </main>
</div>
    <?= $this->endsection()?>