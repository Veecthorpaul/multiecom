 <!-- ========== Left Sidebar Start ========== -->
 <div class="vertical-menu">

  <div data-simplebar class="h-100">

      <!--- Sidemenu -->
      <div id="sidebar-menu">
          <!-- Left Menu Start -->
          <ul class="metismenu list-unstyled" id="side-menu">
              <li class="menu-title">Menu</li>

              <li>
                  <a href="backend.dashboard'" class="waves-effect" style="font-size: 16px;  padding: .825rem 1.5rem;">
                      <i class="bx bx-home-circle"></i>
                      <span>Dashboard</span>
                  </a>
              </li>

              <li>
                  <a href="manage.users'" class="waves-effect" style="font-size: 16px;  padding: .825rem 1.5rem;">
                      <i class="bx bx-user"></i>
                      <span>Manage Users</span>
                  </a>
              <li>
                 
                <li>
                  <a href="manage.admins'" class="waves-effect" style="font-size: 16px;  padding: .825rem 1.5rem;">
                      <i class="bx bx-user"></i>
                      <span>Manage Admins</span>
                  </a>
                </li>
    
              <li>
              <a href="{{url('admin/sections')}}" class="waves-effect" style="font-size: 16px;  padding: .825rem 1.5rem;">
                      <i class="bx bxs-credit-card"></i>
                      <span>Sections</span>
                  </a>
              </li>
              <li>
                <a href="{{url('admin/categories')}}" class="waves-effect" style="font-size: 16px;  padding: .825rem 1.5rem;">
                    <i class="bx bxs-analyse"></i>
                    <span>Categories</span>
                </a>
            </li>
              <li>
                  <a href="{{url('admin/products')}}" class="waves-effect" style="font-size: 16px;  padding: .825rem 1.5rem;">
                      <i class="bx bxs-credit-card-alt"></i>
                      <span>Products</span>
                  </a>
              </li>
              <li>
                <li>
                    <a href="{{url('admin/brands')}}" class="waves-effect" style="font-size: 16px;  padding: .825rem 1.5rem;">
                        <i class="bx bx-chat"></i>
                        <span>Brands</span>
                    </a>
                </li>
                <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect" style="font-size: 16px;  padding: .825rem 1.5rem;">
                    <i class="bx bx-user"></i>
                    <span>Account</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{url('admin/updateadmindetails')}}">Profile</a></li>
                    <li><a href="{{url('admin/settings')}}">Change Password</a></li>
                </ul>
            </li>
              <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" class="dropdown-item" style="font-size: 16px;  padding: .825rem 1.5rem;"><i class="fa fa-power-off"></i> Logout</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
@csrf
</form>
              </li>
          </ul>
      </div>
      <!-- Sidebar -->
  </div>
</div>

