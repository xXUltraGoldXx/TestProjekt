<?php if (isset($_SESSION['loggedin'])) { 
  include 'assets/sites/admin.php';
  ?>
<!-- <li class="nav-item">
  <form action="" method="post">
    <input class="btn nav-link" type="submit" name="logout" value="Logout">
  </form>
</li> -->

<li class="nav-item darkmode"><div class="dropdown text-end">
<a href="#" class="d-block link-dark text-decoration-none dropdown-toggle show" data-bs-toggle="dropdown" aria-expanded="true">
  <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
</a>
<ul class="dropdown-menu text-small show" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 34px, 0px);" data-popper-placement="bottom-start">
  <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#adminpanel">Admin Panel</a></li>
  <li><a class="dropdown-item" href="#">Profile</a></li>
  <li><hr class="dropdown-divider"></li>
  <li><form action="" method="post">
     <input class="no-border" type="submit" name="logout" value="Logout">
  </form></li>
</ul>
</div></li>

<?php  } else { ?>

<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
  Login
  </a>
  <ul class="dropdown-menu dropdownlogin">
    <li class="login">
      <form action="" method="post">
        <label for="username">
          <i class="bi bi-person-fill"></i>
        </label>
        <input type="text" name="username" placeholder="Username" id="username" required>
        <label for="password">
          <i class="bi bi-lock-fill"></i>
        </label>
        <input type="password" name="password" placeholder="Password" id="password" autocomplete="on" required>
        <input type="submit" value="Login">
      </form>
    </li>
  </ul>
</li>

<?php } ?>
