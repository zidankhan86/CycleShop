<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="index.html">Cycle Shop</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">St</a>
      </div>
      <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="dropdown active">
          <a href="{{route ('home') }}" class="nav-link "><i class="fas fa-fire"></i><span>Dashboard</span></a>

        </li>
        <li class="menu-header">Cycle Shop Home</li>
        <li class="dropdown">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Category</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{route ('cycle.category') }}">Add Category</a></li>
            <li><a class="nav-link" href="{{route ('category.list') }}">Category List</a></li>
          </ul>
        </li>

        <li class="dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Cycle</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="{{route('product.form') }}">Add Cycle</a></li>
              <li><a class="nav-link" href="{{route ('product.list') }}">Cycle List</a></li>
            </ul>
          </li>

        <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Order</span></a></li>
        <li class="dropdown">
          <a href="#" class="nav-link"><i class="fas fa-th"></i> <span>Customers</span></a>
        </li>

        <li class="dropdown">
          <a href="#" class="nav-link "><i class="fas fa-th-large"></i> <span>Report</span></a>
        </li>
        <li class="dropdown">
          <a href="#" class="nav-link "><i class="far fa-file-alt"></i> <span>Logout</span></a>

        </li>

      </ul>

           </aside>
  </div>
