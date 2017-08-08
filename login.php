  <?php require"header.php"; ?>
  <?php require"nav.php"; ?>
  <?php require"title.html"; ?>

  <div class="container">
  <div class="row">

<?php
if(isset($_COOKIE['name'])){
  echo "Cookie name : ". $_COOKIE['name'];
}else {
  echo "Votre Cookie n'existe pas!";
}
 ?>
    <form class="col s12" method="post" action="security.php">
          <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate" name="passWord">
          <label for="password">Password</label>
        </div>
      </div>
      <button class="btn waves-effect waves-light" type="submit" name="action">Submit
          <i class="material-icons right">send</i>
     </button>
    </form>
  </div>
    <br><br>
  </div>

  <?php require"footer.html"; ?>
