  <div class="sidebar" id="sidebar">

      <!-- Start Logo -->
      <div class="sidebar-logo">
          <div>
              <!-- Logo Normal -->
              <a href="index.html" class="logo logo-normal">
                  <img src="assets/img/logo.svg" alt="Logo">
              </a>

              <!-- Logo Small -->
              <a href="index.html" class="logo-small">
                  <img src="assets/img/logo-small.svg" alt="Logo">
              </a>

              <!-- Logo Dark -->
              <a href="index.html" class="dark-logo">
                  <img src="assets/img/logo-white.svg" alt="Logo">
              </a>
          </div>
          <button class="sidenav-toggle-btn btn border-0 p-0 active" id="toggle_btn">
              <i class="ti ti-arrow-bar-to-left"></i>
          </button>

          <!-- Sidebar Menu Close -->
          <button class="sidebar-close">
              <i class="ti ti-x align-middle"></i>
          </button>
      </div>
      <!-- End Logo -->

      <!-- Sidenav Menu -->
      <div class="sidebar-inner" data-simplebar="">
          <div id="sidebar-menu" class="sidebar-menu">
              <ul>
                  <li class="menu-title"><span>Main Menu</span></li>
                  <li>
                      <ul>
                          <li>
                              <a href="{{ route('dashboard') }}">
                                  <i class="ti ti-dashboard"></i>
                                  <span>Dashboard</span>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="menu-title"><span>CRM</span></li>
                  @can('gt-users.view')
                      <li>
                          <ul>
                              <li>
                                  <a href="{{ route('gt-users.index') }}">
                                      <i class="ti ti-users"></i>
                                      <span>Manage Users</span>
                                  </a>
                              </li>
                          </ul>
                      </li>
                  @endcan
                  @can('role.view')
                      <li>
                          <ul>
                              <li class="submenu">
                                  <a href="javascript:void(0);">
                                      <i class="ti ti-brand-apple-podcast"></i><span>Roles</span><span
                                          class="menu-arrow"></span>
                                  </a>
                                  <ul>
                                      <li><a href="{{ route('roles.index') }}">Roles & Permission</a></li>
                                  </ul>
                              </li>
                          </ul>
                      </li>
                  @endcan
                  <li class="menu-title"><span>Website</span></li>
                  <li>
                      <ul>
                          <li>
                              <a href="{{ route('gt-users.index') }}">
                                  <i class="ti ti-brand-blogger"></i>
                                  <span>Manage Blog</span>
                              </a>
                          </li>
                      </ul>
                  </li>
              </ul>
          </div>
      </div>

  </div>
