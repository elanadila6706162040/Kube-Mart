<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Dashboard - Your Best Marketplace</title>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/style/main.css') }}">
  </head>

  <body>
    <div class="page-dashboard">
      <div class="d-flex" id="wrapper" data-aos="fade-right">
        <!-- Sidebar -->
        <div class="border-right" id="sidebar-wrapper">
          <div class="sidebar-heading text-center">
          <a href="/">
            <img src="{{ ('../assets/img/dashboard-store-logo.svg') }}" alt="" class="my-4" />
          </a>
		    </div>
          <div class="list-group list-group-flush">
          @if(auth()->user()->role == \App\User::ROLE_KUBE)
           
       
            <a
              href="{{ route('dashboard.index')}}"
              class="list-group-item list-group-item-action  {{ Request::is('dashboard') ? 'active' : '' }}">
              Dashboard</a
            >
            <a
              href="{{ route('product.index')}}"
              class="list-group-item list-group-item-action {{ (request()->is('dashboard/product*')) ? 'active' : '' }}"
              >My Products</a
            >
            <a
              href="{{ route('transaction.index')}}"
              class="list-group-item list-group-item-action {{ (request()->is('dashboard/transaction*')) ? 'active' : '' }}"
              >Transactions</a
            >
          
            <!-- <a
              href="/dashboard-settings"
              class="list-group-item list-group-item-action"
              >Store Settings</a
            > -->
            <!-- <a
              href="{{ route('user.index')}}"
              class="list-group-item list-group-item-action {{ (request()->is('dashboard/user*')) ? 'active' : '' }}"
              >Anggota Kube Mart</a
            > -->
            <a
              href="{{ route('store.editKube', auth()->user()->store_id) }}"
              class="list-group-item list-group-item-action {{ (request()->is('dashboard/store*')) ? 'active' : '' }}"
              >My Account</a
            >

            <a
              href="{{ route('history.transaction', auth()->user()->store_id) }}"
              class="list-group-item list-group-item-action {{ (request()->is('dashboard/store*')) ? 'active' : '' }}"
              >History Transaction</a
            >

            <a
              href="{{ route('transaction.report', auth()->user()->store_id) }}"
              class="list-group-item list-group-item-action {{ (request()->is('dashboard/report*')) ? 'active' : '' }}"
              >Report</a
            >
        
          @elseif(auth()->user()->role == \App\User::ROLE_ADMIN)
          <a
              href="{{ route('dashboard.indexAdmin')}}"
              class="list-group-item list-group-item-action  {{ Request::is('dashboard') ? 'active' : '' }}">
              Dashboard</a
            >
            <a
              href="{{ route('store.index')}}"
              class="list-group-item list-group-item-action {{ (request()->is('dashboard/store*')) ? 'active' : '' }}"
              >Store</a
            >

            <a
              href="{{ route('transaction.indexAdmin')}}"
              class="list-group-item list-group-item-action {{ (request()->is('dashboard/transaction*')) ? 'active' : '' }}"
              >Report</a
            >
            <!-- <a
              href="{{ route('transaction.index')}}"
              class="list-group-item list-group-item-action {{ (request()->is('dashboard/transaction*')) ? 'active' : '' }}"
              >Report</a
            > -->
          
          @endif
            <!-- <a
              href="/dashboard-settings"
              class="list-group-item list-group-item-action"
              >Store Settings</a
            > -->
            <!-- <a
              href="{{ route('user.index')}}"
              class="list-group-item list-group-item-action {{ (request()->is('dashboard/user*')) ? 'active' : '' }}"
              >Anggota Kube Mart</a
            > -->
            
          </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
          <nav
            class="navbar navbar-store navbar-expand-lg navbar-light fixed-top"
            data-aos="fade-down"
          >
            <button
              class="btn btn-secondary d-md-none mr-auto mr-2"
              id="menu-toggle"
            >
              &laquo; Menu
            </button>

            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto d-none d-lg-flex">
                <li class="nav-item dropdown">
                  <a
                    class="nav-link"
                    href="#"
                    id="navbarDropdown"
                    role="button"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <img
                      src="{{ ('../assets/img/icon-user.png') }}"
                      alt=""
                      class="rounded-circle mr-2 profile-picture"
                    />
                
                    Hi, KUBE {{is_null(auth()->user()->store) ? "-" : auth()->user()->store->name}}

                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/">Go To Shopping</a>
                    <a class="dropdown-item" href="{{ route('store.editKube', auth()->user()->store_id) }}"
                      >Settings</a
                    >
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ url('auth/logout') }}">Logout</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link d-inline-block mt-2" href="/cart">
                    <img src="{{ ('../assets/img/icon-cart-empty.svg') }}" alt="" />
                  </a>
                </li>
              </ul>
              <!-- Mobile Menu -->
              <ul class="navbar-nav d-block d-lg-none mt-3">
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    Hi, KUBE {{is_null(auth()->user()->store) ? "-" : auth()->user()->store->name}}
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link d-inline-block" href="/cart">
                    Cart
                  </a>
                </li>
              </ul>
            </div>
          </nav>

          @yield('container')

        </div>
        <!-- /#page-content-wrapper -->
      </div>
    </div>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{ asset('/assets/vendor/jquery/jquery.slim.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <!-- Menu Toggle Script -->
    <script>
      $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });
    </script>

  </body>
</html>
