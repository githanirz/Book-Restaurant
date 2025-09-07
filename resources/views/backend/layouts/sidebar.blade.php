  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{url('backend')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

    

      <li class="nav-heading">Pages</li>
      @can('admin')
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('menu-backend')}}">
          <i class="bi bi-person"></i>
          <span>Menu</span>
        </a>
      </li><!-- End Profile Page Nav -->
      @endcan
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('blog-backend')}}">
          <i class="bi bi-question-circle"></i>
          <span>Blog</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('chef-backend')}}">
          <i class="bi bi-envelope"></i>
          <span>Chef</span>
        </a>
      </li><!-- End Contact Page Nav -->
      @can('admin')
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('booktable-backend')}}">
          <i class="bi bi-envelope"></i>
          <span>Booktable</span>
        </a>
      </li><!-- End Contact Page Nav -->
      @endcan
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('kategori-backend')}}">
          <i class="bi bi-envelope"></i>
          <span>Kategori</span>
        </a>
      </li><!-- End Contact Page Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('role-backend')}}">
          <i class="bi bi-envelope"></i>
          <span>Role</span>
        </a>
      </li><!-- End Contact Page Nav -->
      @can('admin')
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('user-backend')}}">
          <i class="bi bi-envelope"></i>
          <span>User</span>
        </a>
      </li><!-- End Contact Page Nav -->
      @endcan
 


    </ul>

  </aside><!-- End Sidebar-->