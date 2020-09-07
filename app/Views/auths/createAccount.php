<?= $this->include('layouts/navbar') ?>
<div class="auth">

  <div class="auth__header">

  </div>

  <div class="auth__body">
    <form class="auth__form_register" autocomplete="off" action="register" method="POST">
      <div class="auth__form_body">
        <h3 class="auth__form_title text-center">
          Create Account
        </h3>
        <hr>
        <div>

        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label class="text-uppercase small">First Name</label>
              <input type="text" name ="first_name" id="first_name" class="form-control" value="<?= set_value('first_name') ?>" required>
            </div>
          </div>

          <div class="col-6">
            <div class="form-group">
              <label class="text-uppercase small">Last Name</label>
              <input type="text" name ="last_name" id="last_name" class="form-control" value="<?= set_value('last_name') ?>" required>
            </div>
          </div>

        </div>
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label class="text-uppercase small">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password"  value="<?= set_value('password') ?>" required minlength="8" maxlength="14">
            </div>
          </div>
          <div class="col-6">
          <div class="form-group">
          <label for="Role">Role User</label>
          <select class="browser-default custom-select" name="role" id = 'role' value="<?= set_value('role') ?>">
              <option selected>Please select your role</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
          </select>
          </div>
          </div>
        </div>
         
          <div class="form-group">
            <label class="text-uppercase small">Email</label>
            <input type="email" name ="email" id="email" class="form-control" placeholder="Enter email"  value="<?= set_value('email') ?>" required>
          </div>
        

        </div>
      </div>
        <div class="auth__form_actions">
          <button  type="submit"  class="btn btn-primary btn-lg btn-block" >
            Next
          </button>
          <div class="mt-2">
          <a href="<?= base_url('/login')?>" class="small text-uppercase">
            BACK TO SIGN IN    
          </a>
        </div>
    </form>
  </div>
</div>
