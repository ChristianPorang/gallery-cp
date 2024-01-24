 <div class="main-panel">
  <div class="content-wrapper">

    <div class="card col-lg-4 mx-auto">
      <div class="card-body px-5 py-5">
        <h3 class="card-title text-left mb-3">Login</h3>
        <form action="<?= base_url('/home/aksi_login')?>" method="POST">
          <div class="form-group">
            <label>Username or email </label>
 <input type="text" class="form-control" placeholder="Username" name="u" required />
          </div>
          <div class="form-group">
            <label>Password </label>
<input type="password" name="p" class="form-control" placeholder="Password" required />
          </div>
          <div class="form-group d-flex align-items-center justify-content-between">
            <div class="text-center">
              <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
            </div>

                   </form>
            </div>
          </div>