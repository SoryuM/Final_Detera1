<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand"><h2>Welcome, <?= $_SESSION['first_name']?>!</h2></a>
    <div class="d-flex">
      <a href="functions/auth.php?action=logout" class="btn btn-light">Logout</a>
      <a class="btn btn-secondary" href="newVisitor.php">Add New Visitor</a>
    </div>
  </div>
</nav>