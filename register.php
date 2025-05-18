<?= $this->extend('Layout/Starter') ?>

<?= $this->section('content') ?>

<head>
  <meta charset="UTF-8">
  <title>login vip</title>
  <link rel="stylesheet" href="./v.css">

</head>
<body>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="v.css">
  <title>Sign in to Server</title>
</head>

<body>
  <?= form_open() ?>
  <section id="login">

    <div class="header">
      <div class="logo">
        <svg height="48" aria-hidden="true" viewBox="0 0 16 16" version="1.1" width="48" data-view-component="true" fill="#c9d1d9">
          <path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z">
          </path>
        </svg>
      </div>
      <h1>Sign in to Server</h1>
    </div>

      <div id="loginbox">

      <label for="username"> Username or email address :</label>
      <input type="text" name="username" id="username" aria-describedby="help-username" placeholder="Username">
      <?php if ($validation->hasError('username')) : ?>
      <small id="help-username" class="form-text text-danger"><?= $validation->getError('username') ?></small>
      <?php endif; ?>
      
      <div class="inputBx">
      <label for="password"> Password :</label>
      <input type="password" name="password" id="password" aria-describedby="help-password" placeholder="Password">
      <?php if ($validation->hasError('password')) : ?>
      <small id="help-password" class="form-text text-danger"><?= $validation->getError('password') ?></small>
      <?php endif; ?>
      
      <div class="inputBx">
      <label for="password2"> Password :</label>
      <input type="password2" name="password2" id="password2" aria-describedby="help-password2" placeholder="Password">
      <?php if ($validation->hasError('password')) : ?>
      <small id="help-password2" class="form-text text-danger"><?= $validation->getError('password2') ?></small>
      <?php endif; ?>
      
      <div class="inputBx">
      <label for="referral"> referral :</label>
      <input type="referral" name="referral" id="referral" aria-describedby="help-referral" placeholder="referral">
      <?php if ($validation->hasError('referral')) : ?>
      <small id="help-referral" class="form-text text-danger"><?= $validation->getError('referral') ?></small>
      <?php endif; ?>
      
      <div class="inputBx">
      <input type="submit" value="Sign in">
      </div>
      </div>
      </div>
      </div>
      </div>
      <p>do you have an account ? <a href="<?= site_url('login') ?>">Register here</a>.</p>
      <?= form_close() ?>
    <footer>
      <ul>
        <li><a href="#!">Terms</a></li>
        <li><a href="#!">Privacy</a></li>
        <li><a href="#!">Security</a></li>
        <li><a href="#!">Contact GitHub</a></li>
      </ul>
    </footer>
  </section>
</body>
</div>

<?= $this->endSection() ?>