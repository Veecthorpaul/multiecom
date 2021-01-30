<div class="vertical-menu">

  <div data-simplebar class="h-100">

      <!--- Sidemenu -->
      <div id="sidebar-menu">
          <!-- Left Menu Start -->
          <ul class="metismenu list-unstyled" id="side-menu">
              <li class="menu-title">Menu</li>

              <li>
                  <a href="{{route('home')}}" class="waves-effect" style="font-size: 16px;  padding: .825rem 1.5rem;">
                   
                      <i class="bx bx-home-circle"></i>
                      <span>Dashboard</span>
                  </a>
              </li>

              <li>
                  <a href="javascript: void(0);" class="has-arrow waves-effect" style="font-size: 16px;  padding: .825rem 1.5rem;"> 
                      <i class="bx bx-user"></i>
                      <span>Account</span>
                  </a>
                  <ul class="sub-menu" aria-expanded="false">
                      <li><a href="{{route('profile')}}">Profile</a></li>
                      <li><a href="{{route('change.password')}}">Change Password</a></li>
                  </ul>
              </li>
              <li>
                  <a href="{{ route('deposit') }}" class="waves-effect" style="font-size: 16px;  padding: .825rem 1.5rem;">
                      <i class="bx bxs-credit-card"></i>
                      <span>Deposits</span>
                  </a>
              </li>
              <li>
                  <a href="{{route('packages')}}" class="waves-effect" style="font-size: 16px;  padding: .825rem 1.5rem;">
                      <i class="bx bxs-credit-card-alt"></i>
                      <span>Investments Plans</span>
                  </a>
              </li>
              <li>
                  <a href="{{route('user.packages')}}" class="waves-effect" style="font-size: 16px;  padding: .825rem 1.5rem;">
                      <i class="bx bxs-purchase-tag-alt"></i>
                      <span>My Investments</span>
                  </a>
              </li>
              <li>
                  <a href="{{route('withdrawals')}}" class="waves-effect" style="font-size: 16px;  padding: .825rem 1.5rem;">
                      <i class="bx bxs-analyse"></i>
                      <span>Withdrawals</span>
                  </a>
              </li>
              <li>
                  <a href="{{route('referrals')}}" class="waves-effect" style="font-size: 16px;  padding: .825rem 1.5rem;">
                      <i class="bx bx-user-voice"></i>
                      <span>Downlines</span>
                  </a>
              </li>
              
              <li>
                  <a href="{{route('support')}}" class="waves-effect" style="font-size: 16px;  padding: .825rem 1.5rem;">
                      <i class="bx bx-user-circle"></i>
                      <span>FAQs</span>
                  </a>
              </li>
              <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" style="font-size: 16px;  padding: .825rem 1.5rem;"><i class="fa fa-power-off"></i> Logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
        </form>
              </li>
          </ul>
      </div>
      <!-- Sidebar -->
  </div>
</div>