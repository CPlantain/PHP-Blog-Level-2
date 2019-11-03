<?php $this->layout('front/layout', ['title' => 'Log In', 'crop_layout' => 1]) ?>

  <body>
    <div class="form-wrapper text-center">

      <?= $flash ?>

      <form class="form-signin" action="/login-handler" method="post">
        <h1 class="h3 mt-0 mb-3 font-weight-normal">Authorization</h1>
      
        <input type="text" id="inputEmail" name="email" class="form-control" placeholder="Email" autofocus value="<?= $_POST['email'] ?>">

        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" value="<?= $_POST['password'] ?>">

        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" name="remember" value="1"> Remember me
          </label>
        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <a href="/register">Sign up</a>
        <p class="mt-5 mb-3 text-muted">&copy; 2018-2019</p>
      </form>
    </div>
  </body>
</html>