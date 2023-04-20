<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="{{ url('home') }}">
        <i class="icon-grid menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('students/create') }}">
         <i class="icon-head menu-icon"></i>
        <span class="menu-title">Add New Student</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('students/list') }}">
         <i class="icon-head menu-icon"></i>
        <span class="menu-title">Student List</span>
      </a>
    </li>
  </ul>
</nav>