<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
      <!-- Sidebar -->
      <ul class="navbar-nav  sidebar sidebar-dark accordion bg-primary" id="accordionSidebar">

          <!-- Sidebar - Brand -->
          <a class="sidebar-brand d-flex align-items-center justify-content-center">
              <div class="sidebar-brand-icon">
                {{-- logo taruh sini --}}
                  {{-- <img src="img/logo.png" alt="" width="40"> --}}
              </div>
              <div class="sidebar-brand-text mx-3">ISHEC</div>
          </a>

          <!-- Divider -->
          <hr class="sidebar-divider my-0">

          <!-- Nav Item - Dashboard -->
          <li class="nav-item">
              <a class="nav-link" href="/ad">
                  <i class="fa-solid fa-gauge"></i>
                  <span>Dashboard</span></a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="/input-data">
                  <i class="fa-solid fa-calendar"></i>
                  <span>Input Data </span></a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="/rekam-medis">
                  <i class="fa-solid fa-notes-medical"></i>
                  <span>Rekam Medis</span></a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="/profile">
                  <i class="fa-solid fa-user"></i>
                  <span>Profile</span></a>
          </li>
      

          <!-- Divider -->
          <hr class="sidebar-divider">
  
          <!-- Heading -->
          {{-- <div class="sidebar-heading">
              {{ __('Settings') }}
          </div>
   --}}
          <!-- Nav Item - Profile -->
          {{-- <li class="nav-item">
              <a class="nav-link" href="/profile">
                  <i class="fas fa-fw fa-user"></i>
                  <span>{{ __('Profile') }}</span>
              </a>
          </li> --}}

          <li class="nav-item">
            <a class="nav-link" href="/">
              <i class="fa-solid fa-circle-arrow-left"></i>
              <span>Halaman Awal</span></a>
          </li>



          <!-- Divider -->

          <!-- Sidebar Toggler (Sidebar) -->
        

      </ul>
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">

          <!-- Main Content -->
          <div id="content">

              <!-- Topbar -->
              <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                  <!-- Sidebar Toggle (Topbar) -->
                  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                      <i class="fa fa-bars"></i>
                  </button>

                  <!-- Topbar Search -->
                  <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                      <div class="input-group">
                          <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                          <div class="input-group-append">
                              <button class="btn btn-primary" type="button">
                                  <i class="fas fa-search fa-sm"></i>
                              </button>
                          </div>
                      </div>
                  </form>

                  <!-- Topbar Navbar -->
                  <ul class="navbar-nav ml-auto">

                      <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                      <li class="nav-item dropdown no-arrow d-sm-none">
                          <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fas fa-search fa-fw"></i>
                          </a>
                          <!-- Dropdown - Messages -->
                          <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                              <form class="form-inline mr-auto w-100 navbar-search">
                                  <div class="input-group">
                                      <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                      <div class="input-group-append">
                                          <button class="btn btn-primary" type="button">
                                              <i class="fas fa-search fa-sm"></i>
                                          </button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </li>


                      <!-- Nav Item - User Information -->
                      <li class="nav-item dropdown no-arrow">
                          {{-- <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> --}}
                              {{-- <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ strtoupper('shab') }}</span>
                              <figure class="img-profile rounded-circle avatar font-weight-bold" data-initial="{{ strtoupper('S') }}"></figure> --}}
                          {{-- </a> --}}
                          <!-- Dropdown - User Information -->
                          {{-- <form method="POST" action="/adlogin" class="row g-3 needs-validation" novalidate> --}}
                            {{-- <input type="hidden" name="_token" value="rLysDUPbH0bDhVVZ1vQYxq2uDxZ5jlZmnAq0UmJ1">                <button class="btn" type="submit"> --}}
                              <a href="/logout" class="btn btn-primary"><i class="bi bi-box-arrow-right"></i>
                              <span>Sign Out</span></a>
                            </button>
                          </form>
                          {{-- <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown"> --}}
                              {{-- <a class="dropdown-item" href="/profile">
                                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                  Profil
                              </a> --}}
                              {{-- <a class="dropdown-item" href="javascript:void(0)">
                                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                  {{ __('Settings') }}
                              </a> --}}
                              {{-- <a class="dropdown-item" href="javascript:void(0)">
                                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                  {{ __('Activity Log') }}
                              </a> --}}
                              {{-- <div class="dropdown-divider"></div> --}}
                              {{-- <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                  {{ __('Logout') }}
                              </a> --}}
                          {{-- </div> --}}
                      </li>

                  </ul>

  
              </nav>
              <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">'Mau Keluar?'</h5>
                              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">×</span>
                              </button>
                          </div>
                          <div class="modal-body">Pilih "Logout" di bawah jika Anda siap untuk mengakhiri sesi Anda saat ini.</div>
                          <div class="modal-footer">
                              <button class="btn btn-link" type="button" data-dismiss="modal">{{ __('Batal') }}</button>
                              <a class="btn btn-danger" href='/logout' onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                              <form id="logout-form" action="/logout" method="POST" style="display: none;">
                                  @csrf
                              </form>
                          </div>
                      </div>
                  </div>
              </div>