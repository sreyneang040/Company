<?= $this->extend('layouts/main')?>
<?= $this->section('content') ?>
<!-- user login show menu -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
  <div class="container">
    <a class="navbar-brand" href="/">
        <img src="https://aeon.com.kh/wp-content/uploads/2019/12/AEONSPB-logo.png" alt="" width="70" height="70">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">

        <li class="nav-item">
          <a class="nav-link" href="/login">Login</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/register">Register</a>
        </li>

      </ul>
    </div>
  </div>
</nav>
<?= $this->endSection() ?>
