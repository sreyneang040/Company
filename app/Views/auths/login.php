<?= $this->include('layouts/navbar') ?>
<div class="auth">
  <div class="auth__body">
    <form class="auth__form" autocomplete="off" action="<?= base_url('/login')?>" method="post">
      <div class="auth__form_body">
        <h3 class="auth__form_title"> Login </h3>
        <hr>
        <div>
          <div class="form-group">
            <label class="text-uppercase small">User Name</label>
            <input type="text" name="first_name" id = "first_name" class="form-control" placeholder="User Name" value="<?= set_value('first_name') ?>" required>
          </div>

          <div class="form-group">
            <label class="text-uppercase small">Password</label>
            <input type="password" name="password" id = "password" class="form-control" placeholder="Password" value="<?= set_value('password') ?>" required>
          </div>

          <div class="form-group">
            <label class="text-uppercase small">Pin Code</label>
            <input type="password" name="code" id = "code" class="form-control" placeholder="Pin Code" value="<?= set_value('code') ?>">
          </div>

          <!-- Error Validation -->
          <?php if(isset($validation)) :?>
                <div class="col-12">
                  <div class="alert alert-danger" role="alert">
                    <?= $validation->listErrors(); ?>
                  </div>
                </div>
              <?php endif; ?>
          <div class="mt-2">
          <a href="<?= base_url('register')?>" class="small text-uppercase">
            Forgot Password
          </a>
        </div>

        </div>
      </div>
      <div class="auth__form_actions">
        <button type="submit" class="btn btn-primary btn-lg btn-block">
          NEXT
        </button>
        <div class="mt-2">
          <a href="<?= base_url('register')?>" class="small text-uppercase">
            CREATE ACCOUNT
          </a>
        </div>
      </div>
    </form>
  </div>
</div>