  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
      <div class="d-flex align-items-center justify-content-between">
          <a href="index.html" class="logo d-flex align-items-center">
              <img src="{{ asset('assets/img/ads-logo-2.png') }}" />
          </a>
      </div><!-- End Logo -->

      <ul class="sidebar-nav" id="sidebar-nav">

          <li class="<?= $_SERVER['REQUEST_URI'] == '/operator' ? 'nav-item-active' : 'nav-item' ?>">
              <a class="<?= $_SERVER['REQUEST_URI'] == '/operator' ? 'nav-link' : 'nav-link collapsed' ?>" href="<?= url('/operator') ?>">
                <img src="<?= $_SERVER['REQUEST_URI'] == '/operator' ? asset('assets/img/menu/dashboard-menu-active.png') : asset('assets/img/menu/dashboard-menu.png') ?>" style="padding-right: 28px" />
                <span>Dashboard</span>
              </a>
          </li>
          <li class="<?= $_SERVER['REQUEST_URI'] == '/operator/user' ? 'nav-item-active' : 'nav-item' ?>">
              <a class="<?= $_SERVER['REQUEST_URI'] == '/operator/user' ? 'nav-link' : 'nav-link collapsed' ?>"
                  href="<?= url('/operator/user') ?>">
                  <img src="<?= $_SERVER['REQUEST_URI'] == '/operator/user' ? asset('assets/img/menu/user-menu-active.png') : asset('assets/img/menu/user-menu.png') ?>" style="padding-right: 28px" />
                  <span>User</span>
              </a>
          </li>

          <li class="<?= $_SERVER['REQUEST_URI'] == '/operator/ticket' ? 'nav-item-active' : 'nav-item' ?>">
              <a class="<?= $_SERVER['REQUEST_URI'] == '/operator/ticket' ? 'nav-link' : 'nav-link collapsed' ?>"
                  href="<?= url('/operator/ticket') ?>">
                  <img src="<?= $_SERVER['REQUEST_URI'] == '/operator/ticket' ? asset('assets/img/menu/ticket-menu-active.png') : asset('assets/img/menu/ticket-menu.png') ?>" style="padding-right: 28px" />
                  <span>Ticket</span>
              </a>
          </li>

          <li class="<?= $_SERVER['REQUEST_URI'] == '/operator/report' ? 'nav-item-active' : 'nav-item' ?>">
              <a class="<?= $_SERVER['REQUEST_URI'] == '/operator/report' ? 'nav-link' : 'nav-link collapsed' ?>"
                  href="<?= url('/operator/report') ?>">
                  <img src="<?= $_SERVER['REQUEST_URI'] == '/operator/report' ? asset('assets/img/menu/report-menu-active.png') : asset('assets/img/menu/report-menu.png') ?>" style="padding-right: 28px" />
                  <span>Report</span>
              </a>
          </li>

          <li class="<?= $_SERVER['REQUEST_URI'] == '/operator/notification' ? 'nav-item-active' : 'nav-item' ?>">
              <a class="<?= $_SERVER['REQUEST_URI'] == '/operator/notification' ? 'nav-link' : 'nav-link collapsed' ?>"
                  href="<?= url('/operator/notification') ?>">
                  <img src="<?= $_SERVER['REQUEST_URI'] == '/operator/notification' ? asset('assets/img/menu/notification-menu-active.png') : asset('assets/img/menu/notification-menu.png') ?>" style="padding-right: 28px" />
                  <span>Notification</span>
              </a>
          </li>

          <li class="<?= $_SERVER['REQUEST_URI'] == '/operator/vehicle' ? 'nav-item-active' : 'nav-item' ?>">
              <a class="<?= $_SERVER['REQUEST_URI'] == '/operator/vehicle' ? 'nav-link' : 'nav-link collapsed' ?>" href="<?= url('/operator/vehicle') ?>">
                  <img src="<?= $_SERVER['REQUEST_URI'] == '/operator/vehicle' ? asset('assets/img/menu/vehicle-menu-active.png') : asset('assets/img/menu/vehicle-menu.png') ?>" style="padding-right: 28px" />

                  <span>Vehicle</span>
              </a>
          </li>
      </ul>
  </aside><!-- End Sidebar-->
