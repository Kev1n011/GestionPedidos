

<!doctype html>
<html lang="en">
<!-- [Head] start -->
<title>Users list</title>
@include('layouts.head')
<!-- [Head] end -->
<!-- [Body] Start -->

<body>
  <!-- [ Pre-loader ] start -->
  <div class="loader-bg">
    <div class="loader-track">
      <div class="loader-fill"></div>
    </div>
  </div>
  <!-- [ Pre-loader ] End -->
  <!-- [ Sidebar Menu ] start -->
  @include('layouts.sidebar')
  <!-- [ Sidebar Menu ] end -->
  <!-- [ Header Topbar ] start -->
  <header class="pc-header">
    <div class="header-wrapper"> <!-- [Mobile Media Block] start -->
      <div class="me-auto pc-mob-drp">
        <ul class="list-unstyled">
          <!-- ======= Menu collapse Icon ===== -->
          <li class="pc-h-item pc-sidebar-collapse">
            <a href="#" class="pc-head-link ms-0" id="sidebar-hide">
              <i class="ti ti-menu-2"></i>
            </a>
          </li>
          <li class="pc-h-item pc-sidebar-popup">
            <a href="#" class="pc-head-link ms-0" id="mobile-collapse">
              <i class="ti ti-menu-2"></i>
            </a>
          </li>
          <li class="dropdown pc-h-item d-inline-flex d-md-none">
            <a class="pc-head-link dropdown-toggle arrow-none m-0" data-bs-toggle="dropdown" href="#" role="button"
              aria-haspopup="false" aria-expanded="false">
              <i class="ph-duotone ph-magnifying-glass"></i>
            </a>
            <div class="dropdown-menu pc-h-dropdown drp-search">
              <form class="px-3">
                <div class="mb-0 d-flex align-items-center">
                  <input type="search" class="form-control border-0 shadow-none" placeholder="Search..." />
                  <button class="btn btn-light-secondary btn-search">Search</button>
                </div>
              </form>
            </div>
          </li>
          <li class="pc-h-item d-none d-md-inline-flex">
            <form class="form-search">
              <i class="ph-duotone ph-magnifying-glass icon-search"></i>
              <input type="search" class="form-control" placeholder="Search..." />

              <button class="btn btn-search" style="padding: 0"><kbd>ctrl+k</kbd></button>
            </form>
          </li>
        </ul>
      </div>
      <!-- [Mobile Media Block end] -->
      <div class="ms-auto">
        <ul class="list-unstyled">
          <li class="dropdown pc-h-item d-none d-md-inline-flex">
            <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button"
              aria-haspopup="false" aria-expanded="false">
              <i class="ph-duotone ph-circles-four"></i>
            </a>
            <div class="dropdown-menu dropdown-qta dropdown-menu-end pc-h-dropdown">
              <div class="overflow-hidden">
                <div class="qta-links m-n1">
                  <a href="#!" class="dropdown-item">
                    <i class="ph-duotone ph-shopping-cart"></i>
                    <span>E-commerce</span>
                  </a>
                  <a href="#!" class="dropdown-item">
                    <i class="ph-duotone ph-lifebuoy"></i>
                    <span>Helpdesk</span>
                  </a>
                  <a href="#!" class="dropdown-item">
                    <i class="ph-duotone ph-scroll"></i>
                    <span>Invoice</span>
                  </a>
                  <a href="#!" class="dropdown-item">
                    <i class="ph-duotone ph-books"></i>
                    <span>Online Courses</span>
                  </a>
                  <a href="#!" class="dropdown-item">
                    <i class="ph-duotone ph-envelope-open"></i>
                    <span>Mail</span>
                  </a>
                  <a href="#!" class="dropdown-item">
                    <i class="ph-duotone ph-identification-badge"></i>
                    <span>Membership</span>
                  </a>
                  <a href="#!" class="dropdown-item">
                    <i class="ph-duotone ph-chats-circle"></i>
                    <span>Chat</span>
                  </a>
                  <a href="#!" class="dropdown-item">
                    <i class="ph-duotone ph-currency-circle-dollar"></i>
                    <span>Plans</span>
                  </a>
                  <a href="#!" class="dropdown-item">
                    <i class="ph-duotone ph-user-circle"></i>
                    <span>Users</span>
                  </a>
                </div>
              </div>
            </div>
          </li>
          <li class="dropdown pc-h-item">
            <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button"
              aria-haspopup="false" aria-expanded="false">
              <i class="ph-duotone ph-sun-dim"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-end pc-h-dropdown">
              <a href="#!" class="dropdown-item" onclick="layout_change('dark')">
                <i class="ph-duotone ph-moon"></i>
                <span>Dark</span>
              </a>
              <a href="#!" class="dropdown-item" onclick="layout_change('light')">
                <i class="ph-duotone ph-sun-dim"></i>
                <span>Light</span>
              </a>
              <a href="#!" class="dropdown-item" onclick="layout_change_default()">
                <i class="ph-duotone ph-cpu"></i>
                <span>Default</span>
              </a>
            </div>
          </li>
          <li class="pc-h-item">
            <a class="pc-head-link pct-c-btn" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_pc_layout">
              <i class="ph-duotone ph-gear-six"></i>
            </a>
          </li>
          <li class="dropdown pc-h-item">
            <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button"
              aria-haspopup="false" aria-expanded="false">
              <i class="ph-duotone ph-diamonds-four"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-end pc-h-dropdown">
              <a href="#!" class="dropdown-item">
                <i class="ph-duotone ph-user"></i>
                <span>My Account</span>
              </a>
              <a href="#!" class="dropdown-item">
                <i class="ph-duotone ph-gear"></i>
                <span>Settings</span>
              </a>
              <a href="#!" class="dropdown-item">
                <i class="ph-duotone ph-lifebuoy"></i>
                <span>Support</span>
              </a>
              <a href="#!" class="dropdown-item">
                <i class="ph-duotone ph-lock-key"></i>
                <span>Lock Screen</span>
              </a>
              <a href="#!" class="dropdown-item">
                <i class="ph-duotone ph-power"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
          <li class="dropdown pc-h-item">
            <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button"
              aria-haspopup="false" aria-expanded="false">
              <i class="ph-duotone ph-bell"></i>
              <span class="badge bg-success pc-h-badge">3</span>
            </a>
            <div class="dropdown-menu dropdown-notification dropdown-menu-end pc-h-dropdown">
              <div class="dropdown-header d-flex align-items-center justify-content-between">
                <h5 class="m-0">Notifications</h5>
                <ul class="list-inline ms-auto mb-0">
                  <li class="list-inline-item">
                    <a href="mail.html" class="avtar avtar-s btn-link-hover-primary">
                      <i class="ti ti-link f-18"></i>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="dropdown-body text-wrap header-notification-scroll position-relative"
                style="max-height: calc(100vh - 235px)">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    <p class="text-span">Today</p>
                    <div class="d-flex">
                      <div class="flex-shrink-0">
                        <img src="../assets/images/user/avatar-2.jpg" alt="user-image"
                          class="user-avtar avtar avtar-s" />
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <div class="d-flex">
                          <div class="flex-grow-1 me-3 position-relative">
                            <h6 class="mb-0 text-truncate">Keefe Bond added new tags to 💪 Design system</h6>
                          </div>
                          <div class="flex-shrink-0">
                            <span class="text-sm">2 min ago</span>
                          </div>
                        </div>
                        <p class="position-relative mt-1 mb-2"><br /><span class="text-truncate">Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s.</span></p>
                        <span class="badge bg-light-primary border border-primary me-1 mt-1">web design</span>
                        <span class="badge bg-light-warning border border-warning me-1 mt-1">Dashobard</span>
                        <span class="badge bg-light-success border border-success me-1 mt-1">Design System</span>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="d-flex">
                      <div class="flex-shrink-0">
                        <div class="avtar avtar-s bg-light-primary">
                          <i class="ph-duotone ph-chats-teardrop f-18"></i>
                        </div>
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <div class="d-flex">
                          <div class="flex-grow-1 me-3 position-relative">
                            <h6 class="mb-0 text-truncate">Message</h6>
                          </div>
                          <div class="flex-shrink-0">
                            <span class="text-sm">1 hour ago</span>
                          </div>
                        </div>
                        <p class="position-relative mt-1 mb-2"><br /><span class="text-truncate">Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s.</span></p>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <p class="text-span">Yesterday</p>
                    <div class="d-flex">
                      <div class="flex-shrink-0">
                        <div class="avtar avtar-s bg-light-danger">
                          <i class="ph-duotone ph-user f-18"></i>
                        </div>
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <div class="d-flex">
                          <div class="flex-grow-1 me-3 position-relative">
                            <h6 class="mb-0 text-truncate">Challenge invitation</h6>
                          </div>
                          <div class="flex-shrink-0">
                            <span class="text-sm">12 hour ago</span>
                          </div>
                        </div>
                        <p class="position-relative mt-1 mb-2"><br /><span class="text-truncate"><strong> Jonny aber
                            </strong> invites to join the challenge</span></p>
                        <button class="btn btn-sm rounded-pill btn-outline-secondary me-2">Decline</button>
                        <button class="btn btn-sm rounded-pill btn-primary">Accept</button>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="d-flex">
                      <div class="flex-shrink-0">
                        <div class="avtar avtar-s bg-light-info">
                          <i class="ph-duotone ph-notebook f-18"></i>
                        </div>
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <div class="d-flex">
                          <div class="flex-grow-1 me-3 position-relative">
                            <h6 class="mb-0 text-truncate">Forms</h6>
                          </div>
                          <div class="flex-shrink-0">
                            <span class="text-sm">2 hour ago</span>
                          </div>
                        </div>
                        <p class="position-relative mt-1 mb-2">Lorem Ipsum is simply dummy text of the printing and
                          typesetting industry. Lorem Ipsum has been the industry's standard
                          dummy text ever since the 1500s.</p>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="d-flex">
                      <div class="flex-shrink-0">
                        <img src="../assets/images/user/avatar-2.jpg" alt="user-image"
                          class="user-avtar avtar avtar-s" />
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <div class="d-flex">
                          <div class="flex-grow-1 me-3 position-relative">
                            <h6 class="mb-0 text-truncate">Keefe Bond added new tags to 💪 Design system</h6>
                          </div>
                          <div class="flex-shrink-0">
                            <span class="text-sm">2 min ago</span>
                          </div>
                        </div>
                        <p class="position-relative mt-1 mb-2"><br /><span class="text-truncate">Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s.</span></p>
                        <button class="btn btn-sm rounded-pill btn-outline-secondary me-2">Decline</button>
                        <button class="btn btn-sm rounded-pill btn-primary">Accept</button>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="d-flex">
                      <div class="flex-shrink-0">
                        <div class="avtar avtar-s bg-light-success">
                          <i class="ph-duotone ph-shield-checkered f-18"></i>
                        </div>
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <div class="d-flex">
                          <div class="flex-grow-1 me-3 position-relative">
                            <h6 class="mb-0 text-truncate">Security</h6>
                          </div>
                          <div class="flex-shrink-0">
                            <span class="text-sm">5 hour ago</span>
                          </div>
                        </div>
                        <p class="position-relative mt-1 mb-2">Lorem Ipsum is simply dummy text of the printing and
                          typesetting industry. Lorem Ipsum has been the industry's standard
                          dummy text ever since the 1500s.</p>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="dropdown-footer">
                <div class="row g-3">
                  <div class="col-6">
                    <div class="d-grid"><button class="btn btn-primary">Archive all</button></div>
                  </div>
                  <div class="col-6">
                    <div class="d-grid"><button class="btn btn-outline-secondary">Mark all as read</button></div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="dropdown pc-h-item header-user-profile">
            <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button"
              aria-haspopup="false" data-bs-auto-close="outside" aria-expanded="false">
              <img src="../assets/images/user/avatar-2.jpg" alt="user-image" class="user-avtar" />
            </a>
            <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
              <div class="dropdown-header d-flex align-items-center justify-content-between">
                <h5 class="m-0">Profile</h5>
              </div>
              <div class="dropdown-body">
                <div class="profile-notification-scroll position-relative" style="max-height: calc(100vh - 225px)">
                  <ul class="list-group list-group-flush w-100">
                    <li class="list-group-item">
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                          <img src="../assets/images/user/avatar-2.jpg" alt="user-image"
                            class="wid-50 rounded-circle" />
                        </div>
                        <div class="flex-grow-1 mx-3">
                          <h5 class="mb-0">Carson Darrin</h5>
                          <a class="link-primary" href="mailto:carson.darrin@company.io">carson.darrin@company.io</a>
                        </div>
                        <span class="badge bg-primary">PRO</span>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <a href="#" class="dropdown-item">
                        <span class="d-flex align-items-center">
                          <i class="ph-duotone ph-key"></i>
                          <span>Change password</span>
                        </span>
                      </a>
                      <a href="#" class="dropdown-item">
                        <span class="d-flex align-items-center">
                          <i class="ph-duotone ph-envelope-simple"></i>
                          <span>Recently mail</span>
                        </span>
                        <div class="user-group">
                          <img src="../assets/images/user/avatar-1.jpg" alt="user-image" class="avtar" />
                          <img src="../assets/images/user/avatar-2.jpg" alt="user-image" class="avtar" />
                          <img src="../assets/images/user/avatar-3.jpg" alt="user-image" class="avtar" />
                        </div>
                      </a>
                      <a href="#" class="dropdown-item">
                        <span class="d-flex align-items-center">
                          <i class="ph-duotone ph-calendar-blank"></i>
                          <span>Schedule meetings</span>
                        </span>
                      </a>
                    </li>
                    <li class="list-group-item">
                      <a href="#" class="dropdown-item">
                        <span class="d-flex align-items-center">
                          <i class="ph-duotone ph-heart"></i>
                          <span>Favorite</span>
                        </span>
                      </a>
                      <a href="#" class="dropdown-item">
                        <span class="d-flex align-items-center">
                          <i class="ph-duotone ph-arrow-circle-down"></i>
                          <span>Download</span>
                        </span>
                        <span class="avtar avtar-xs rounded-circle bg-danger text-white">10</span>
                      </a>
                    </li>
                    <li class="list-group-item">
                      <div class="dropdown-item">
                        <span class="d-flex align-items-center">
                          <i class="ph-duotone ph-globe-hemisphere-west"></i>
                          <span>Languages</span>
                        </span>
                        <span class="flex-shrink-0">
                          <select class="form-select bg-transparent form-select-sm border-0 shadow-none">
                            <option value="1">English</option>
                            <option value="2">Spain</option>
                            <option value="3">Arbic</option>
                          </select>
                        </span>
                      </div>
                      <a href="#" class="dropdown-item">
                        <span class="d-flex align-items-center">
                          <i class="ph-duotone ph-flag"></i>
                          <span>Country</span>
                        </span>
                      </a>
                      <div class="dropdown-item">
                        <span class="d-flex align-items-center">
                          <i class="ph-duotone ph-moon"></i>
                          <span>Dark mode</span>
                        </span>
                        <div class="form-check form-switch form-check-reverse m-0">
                          <input class="form-check-input f-18" id="dark-mode" type="checkbox" onclick="dark_mode()"
                            role="switch" />
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <a href="#" class="dropdown-item">
                        <span class="d-flex align-items-center">
                          <i class="ph-duotone ph-user-circle"></i>
                          <span>Edit profile</span>
                        </span>
                      </a>
                      <a href="#" class="dropdown-item">
                        <span class="d-flex align-items-center">
                          <i class="ph-duotone ph-star text-warning"></i>
                          <span>Upgrade account</span>
                          <span class="badge bg-light-success border border-success ms-2">NEW</span>
                        </span>
                      </a>
                      <a href="#" class="dropdown-item">
                        <span class="d-flex align-items-center">
                          <i class="ph-duotone ph-bell"></i>
                          <span>Notifications</span>
                        </span>
                      </a>
                      <a href="#" class="dropdown-item">
                        <span class="d-flex align-items-center">
                          <i class="ph-duotone ph-gear-six"></i>
                          <span>Settings</span>
                        </span>
                      </a>
                    </li>
                    <li class="list-group-item">
                      <a href="#" class="dropdown-item">
                        <span class="d-flex align-items-center">
                          <i class="ph-duotone ph-plus-circle"></i>
                          <span>Add account</span>
                        </span>
                      </a>
                      <a href="#" class="dropdown-item">
                        <span class="d-flex align-items-center">
                          <i class="ph-duotone ph-power"></i>
                          <span>Logout</span>
                        </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </header>
  <!-- [ Header ] end -->



  <!-- [ Main Content ] start -->
  <div class="pc-container">
    <div class="pc-content">
      <!-- [ breadcrumb ] start -->
      <div class="page-header">
        <div class="page-block">
          <div class="row align-items-center">
            <div class="col-md-12">
              <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="../dashboard/index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript: void(0)">Profile</a></li>
                <li class="breadcrumb-item" aria-current="page">User List</li>
              </ul>
            </div>
            <div class="col-md-12">
              <div class="page-header-title">
                <h2 class="mb-0">User List</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- [ breadcrumb ] end -->


      <!-- [ Main Content ] start -->
      <div class="row">
        <!-- [ sample-page ] start -->
        <div class="col-sm-12">
          <div class="card border-0 table-card user-profile-list">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-hover" id="pc-dt-simple">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Position</th>
                      <th>Office</th>
                      <th>Age</th>
                      <th>Start date</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-inline-block align-middle">
                          <img src="../assets/images/user/avatar-1.jpg" alt="user image"
                            class="img-radius align-top m-r-15" style="width: 40px" />
                          <div class="d-inline-block">
                            <h6 class="m-b-0">Quinn Flynn</h6>
                            <p class="m-b-0 text-primary">Android developer</p>
                          </div>
                        </div>
                      </td>
                      <td>Support Lead</td>
                      <td>Edinburgh</td>
                      <td>61</td>
                      <td>2011/04/25</td>
                      <td>
                        <span class="badge bg-light-success">Active</span>
                        <div class="overlay-edit">
                          <ul class="list-inline mb-0">
                            <li class="list-inline-item m-0"><a href="#" class="avtar avtar-s btn btn-primary"><i
                                  class="ti ti-pencil f-18"></i></a></li>
                            <li class="list-inline-item m-0"><a href="#"
                                class="avtar avtar-s btn bg-white btn-link-danger"><i class="ti ti-trash f-18"></i></a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-inline-block align-middle">
                          <img src="../assets/images/user/avatar-2.jpg" alt="user image"
                            class="img-radius align-top m-r-15" style="width: 40px" />
                          <div class="d-inline-block">
                            <h6 class="m-b-0">Garrett Winters</h6>
                            <p class="m-b-0 text-primary">Android developer</p>
                          </div>
                        </div>
                      </td>
                      <td>Accountant</td>
                      <td>Tokyo</td>
                      <td>63</td>
                      <td>2011/07/25</td>
                      <td>
                        <span class="badge bg-light-danger">Disabled</span>
                        <div class="overlay-edit">
                          <ul class="list-inline mb-0">
                            <li class="list-inline-item m-0"><a href="#" class="avtar avtar-s btn btn-primary"><i
                                  class="ti ti-pencil f-18"></i></a></li>
                            <li class="list-inline-item m-0"><a href="#"
                                class="avtar avtar-s btn bg-white btn-link-danger"><i class="ti ti-trash f-18"></i></a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-inline-block align-middle">
                          <img src="../assets/images/user/avatar-3.jpg" alt="user image"
                            class="img-radius align-top m-r-15" style="width: 40px" />
                          <div class="d-inline-block">
                            <h6 class="m-b-0">Ashton Cox</h6>
                            <p class="m-b-0 text-primary">Android developer</p>
                          </div>
                        </div>
                      </td>
                      <td>Junior Technical Author</td>
                      <td>San Francisco</td>
                      <td>66</td>
                      <td>2009/01/12</td>
                      <td>
                        <span class="badge bg-light-danger">Disabled</span>
                        <div class="overlay-edit">
                          <ul class="list-inline mb-0">
                            <li class="list-inline-item m-0"><a href="#" class="avtar avtar-s btn btn-primary"><i
                                  class="ti ti-pencil f-18"></i></a></li>
                            <li class="list-inline-item m-0"><a href="#"
                                class="avtar avtar-s btn bg-white btn-link-danger"><i class="ti ti-trash f-18"></i></a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-inline-block align-middle">
                          <img src="../assets/images/user/avatar-4.jpg" alt="user image"
                            class="img-radius align-top m-r-15" style="width: 40px" />
                          <div class="d-inline-block">
                            <h6 class="m-b-0">Cedric Kelly</h6>
                            <p class="m-b-0 text-primary">Android developer</p>
                          </div>
                        </div>
                      </td>
                      <td>Senior Javascript Developer</td>
                      <td>Edinburgh</td>
                      <td>22</td>
                      <td>2012/03/29</td>
                      <td>
                        <span class="badge bg-light-success">Active</span>
                        <div class="overlay-edit">
                          <ul class="list-inline mb-0">
                            <li class="list-inline-item m-0"><a href="#" class="avtar avtar-s btn btn-primary"><i
                                  class="ti ti-pencil f-18"></i></a></li>
                            <li class="list-inline-item m-0"><a href="#"
                                class="avtar avtar-s btn bg-white btn-link-danger"><i class="ti ti-trash f-18"></i></a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-inline-block align-middle">
                          <img src="../assets/images/user/avatar-4.jpg" alt="user image"
                            class="img-radius align-top m-r-15" style="width: 40px" />
                          <div class="d-inline-block">
                            <h6 class="m-b-0">Airi Satou</h6>
                            <p class="m-b-0 text-primary">Android developer</p>
                          </div>
                        </div>
                      </td>
                      <td>Accountant</td>
                      <td>Tokyo</td>
                      <td>33</td>
                      <td>2008/11/28</td>
                      <td>
                        <span class="badge bg-light-success">Active</span>
                        <div class="overlay-edit">
                          <ul class="list-inline mb-0">
                            <li class="list-inline-item m-0"><a href="#" class="avtar avtar-s btn btn-primary"><i
                                  class="ti ti-pencil f-18"></i></a></li>
                            <li class="list-inline-item m-0"><a href="#"
                                class="avtar avtar-s btn bg-white btn-link-danger"><i class="ti ti-trash f-18"></i></a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-inline-block align-middle">
                          <img src="../assets/images/user/avatar-5.jpg" alt="user image"
                            class="img-radius align-top m-r-15" style="width: 40px" />
                          <div class="d-inline-block">
                            <h6 class="m-b-0">Brielle Williamson</h6>
                            <p class="m-b-0 text-primary">Android developer</p>
                          </div>
                        </div>
                      </td>
                      <td>Integration Specialist</td>
                      <td>New York</td>
                      <td>61</td>
                      <td>2012/12/02</td>
                      <td>
                        <span class="badge bg-light-danger">Disabled</span>
                        <div class="overlay-edit">
                          <ul class="list-inline mb-0">
                            <li class="list-inline-item m-0"><a href="#" class="avtar avtar-s btn btn-primary"><i
                                  class="ti ti-pencil f-18"></i></a></li>
                            <li class="list-inline-item m-0"><a href="#"
                                class="avtar avtar-s btn bg-white btn-link-danger"><i class="ti ti-trash f-18"></i></a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- [ sample-page ] end -->
      </div>
      <!-- [ Main Content ] end -->
    </div>
  </div>
  <!-- [ Main Content ] end -->
  @include('layouts.footer')
  <!-- Required Js -->
  @include('layouts.scripts')
  <!-- [Page Specific JS] start -->

  <script src="{{asset('/assets/js/plugins/simple-datatables.js')}}"></script>
  <script>
    const dataTable = new simpleDatatables.DataTable('#pc-dt-simple', {
      sortable: false,
      perPage: 5
    });
  </script>
  <!-- [Page Specific JS] end -->
  

</body>
<!-- [Body] end -->

</html>