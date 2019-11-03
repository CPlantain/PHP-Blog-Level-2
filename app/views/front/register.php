<?php $this->layout('front/layout', ['title' => 'Sign Up', 'crop_layout' => 1]) ?>

  <body>
    <div class="form-wrapper text-center">

      <?= $flash ?>

      <form class="form-signin" action="/register-handler" method="post">
        <h1 class="h3 mb-3 font-weight-normal">Registration</h1>

        <input type="text" id="inputName" name="username" class="form-control" placeholder="Username" autofocus >

        <input type="text" id="inputEmail" name="email" class="form-control" placeholder="Email" >
        
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password">

        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
        <a href="login">Sign in</a>
        <p class="mt-5 mb-3 text-muted">&copy; 2018-2019</p>
      </form>
    </div>
  </body>
</html>