<?php
/*getting active page name*/
$activePage = basename($_SERVER['PHP_SELF'], ".php");
?>
<div class="sidebar" data-color="blue">
  <div class="logo" style="padding:unset;">
    <a href="dashboard.php" class="simple-text logo-mini" style="width:100px;padding-left:10px;">
      <img src="../images/logo1.png" />
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="<?= ($activePage == 'dashboard' || $activePage == 'new_test' || $activePage == 'test_details' || $activePage == 'add_question' || $activePage == 'student_test_credentials') ? 'active' : ''; ?>">
        <a href="dashboard.php">
          <i class="now-ui-icons shopping_shop"></i>
          <p>Dashboard</p>
        </a>
      </li>
      <li class="<?= ($activePage == 'logout') ? 'active' : ''; ?>">
        <a href="logout.php">
          <i class="now-ui-icons media-1_button-power"></i>
          <p>Logout</p>
        </a>
      </li>
    </ul>
  </div>
</div>