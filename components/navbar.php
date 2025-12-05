<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand"><h2>Welcome, <?= $_SESSION['first_name']?>!</h2></a>
    <form class="d-flex" role="search">
      <button class="btn btn-light" type="submit">Logout</button>
      <button class="btn btn-secondary" type="submit">Add New Visitor</button>
    </form>
  </div>
</nav>