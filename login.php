<?php
  require './inc/header.php';
?>
  <main>
    <section class="form-row row">
      <div class="col-sm-12 col-md-6 col-lg-6">
        <h3>Don't have an account, then sign up below!</h3>
        <form method="post" action="save-admin.php">
        	<p><input class="form-control" name="first_name" type="text" placeholder="First Name" autocomplete = 'off' required /></p>
        	<p><input class="form-control" name="last_name" type="text" placeholder="Last Name" autocomplete = 'off' required /></p>
        	<p><input class="form-control" name="username" type="text" placeholder="Username" autocomplete = 'off' required /></p>
        	<p><input class="form-control" name="password" type="password" placeholder="Password" autocomplete = 'off' required /></p>
        	<p><input class="form-control" name="confirm" type="password" placeholder="Confirm Password" autocomplete = 'off' required /></p>
          <input class="btn btn-light" type="submit" name="submit" value="Register" />
        </form>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-6">
        <h3>Already have an account, then sign in below!</h3>
        <form method="post" action="./inc/validate.php">
        	<p><input class="form-control" name="username" type="text" placeholder="Username" autocomplete = 'off' required /></p>
        	<p><input class="form-control" name="password" type="password" placeholder="Password" autocomplete = 'off' required /></p>
          <input class="btn btn-light" type="submit" value="Login" />
        </form>
      </div>
    </section>
  </main>
<!-- Let's add our footer file. -->
<?php
  require './inc/footer.php';
?>