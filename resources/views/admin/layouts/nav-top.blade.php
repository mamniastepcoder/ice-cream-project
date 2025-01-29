
<!-- Navbar -->
<nav class="main-header navbar navbar-expand" style="background-color: black; color: white; position: fixed; width: 100%; top: 0; z-index: 1030;">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" id="sidebar-toggle" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
  </ul>
  <!-- Right side -->
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <form action="{{ route('logout') }}" method="POST" class="d-inline">
        @csrf
        <button type="submit" class="btn btn-danger" title="Logout">
          <i class="fas fa-sign-out-alt"></i>
        </button>
      </form>
    </li>
  </ul>
</nav>

<!-- JavaScript to toggle sidebar -->
<script>
  document.getElementById('sidebar-toggle').addEventListener('click', function(e) {
    e.preventDefault();
    const sidebar = document.querySelector('.sidebar');
    if (sidebar.style.transform === 'translateX(0px)') {
      sidebar.style.transform = 'translateX(-250px)';
    } else {
      sidebar.style.transform = 'translateX(0px)';
    }
  });
</script>
