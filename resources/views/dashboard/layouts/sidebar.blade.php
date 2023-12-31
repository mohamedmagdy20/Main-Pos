<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav position-fixed">
      <li class="nav-item">
        <a class="nav-link" href="{{route('dashboard')}}">
          <i class="icon-grid menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="icon-layout menu-icon"></i>
          <span class="menu-title">Mangers</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('admin.index')}}">Admins</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('role.index')}}">Roles</a></li>
          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#art" aria-expanded="false" aria-controls="art">
          <i class="icon-layout menu-icon"></i>
          <span class="menu-title">Artifacts</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="art">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('products.create')}}">Products</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('gum.index')}}">Gums</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('line.index')}}">Lines</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('fabrics.index')}}">Fibrics</a></li>

          </ul>
        </div>
      </li>


    
    </ul>
  </nav>