@extends('layout/main')

@section('container')
  
      <!-- Desktop Menu -->
      <nav
      class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top"
      data-aos="fade-down"
      aria-label="Navbar"
    >
      <div class="container">
        <a class="navbar-brand" href="dashboard.html">
          <img src="images/logo.svg" alt="" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarResponsive"
          aria-controls="navbarResponsive"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="categories.html">Categories</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="address.html">Address</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="testimonial.html">Testimonial</a>
            </li>
          </ul>

          <!-- Desktop Menu -->
          <ul class="navbar-nav d-none d-lg-flex">
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
                  src="images/icon-user.png"
                  alt=""
                  class="rounded-circle mr-2 profile-picture"
                />
                Hi, Rich
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="dashboard.html">Dashboard</a>
                <a class="dropdown-item" href="dashboard-account.html"
                  >Settings</a
                >
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Logout</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link d-inline-block mt-2" href="/cart">
                <img src="images/icon-cart-empty.svg" alt="" />
              </a>
            </li>
          </ul>

          <!-- Mobile Menu -->
          <ul class="navbar-nav d-block d-lg-none">
            <li class="nav-item">
              <a class="nav-link" href="/cart">
                Hi, Rich
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-inline-block" href="#">
                Cart
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

      <!-- Mobile Menu -->
      <ul class="navbar-nav d-block d-lg-none">
        <li class="nav-item">
          <a class="nav-link" href="/cart">
            Hi, Rich
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-inline-block" href="#">
            Cart
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Page Content -->
<div class="page-content page-details">
  <section
    class="store-breadcrumbs"
    data-aos="fade-down"
    data-aos-delay="100"
  >
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">
                Product Details
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <section class="store-gallery" id="gallery">
    <div class="container">
      <div class="row">
        <div class="col-lg-8" data-aos="zoom-in">
          <transition name="slide-fade" mode="out-in">
            <img
              :key="photos[activePhoto].id"
              :src="photos[activePhoto].url"
              class="w-100 main-image"
              alt=""
            />
          </transition>
        </div>
        <div class="col-lg-2">
          <div class="row">
            <div
              class="col-3 col-lg-12 mt-2 mt-lg-0"
              v-for="(photo, index) in photos"
              :key="photo.id"
              data-aos="zoom-in"
              data-aos-delay="100"
            >
              <a href="#" @click="changeActive(index)">
                <img
                  :src="photo.url"
                  class="w-100 thumbnail-image"
                  :class="{ active: index == activePhoto }"
                  alt=""
                />
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="store-details-container" data-aos="fade-up">
    <section class="store-heading">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <h1>Sofa Ternyaman</h1>
            <div class="owner">By Galih Pratama</div>
            <div class="price">$1,409</div>
          </div>
          <div class="col-lg-2" data-aos="zoom-in">
            <a
              class="btn btn-success nav-link px-4 text-white btn-block mb-3"
              href="/cart"
              >Add to Cart</a
            >
          </div>
        </div>
      </div>
    </section>
    <section class="store-description">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-8">
            <p>
              The Nike Air Max 720 SE goes bigger than ever before with
              Nike's tallest Air unit yet for unimaginable, all-day comfort.
              There's super breathable fabrics on the upper, while colours
              add a modern edge.
            </p>
            <p>
              Bring the past into the future with the Nike Air Max 2090, a
              bold look inspired by the DNA of the iconic Air Max 90.
              Brand-new Nike Air cushioning underfoot adds unparalleled
              comfort while transparent mesh and vibrantly coloured details
              on the upper are blended with timeless OG features for an
              edgy, modernised look.
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="store-review">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-8 mt-3 mb-3">
            <h5>Customer Review (3)</h5>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-lg-8">
            <ul class="list-unstyled">
              <li class="media">
                <img
                  src="images/icon-testimonial-1.png"
                  class="mr-3 rounded-circle"
                  alt=""
                />
                <div class="media-body">
                  <h5 class="mt-2 mb-1">Hazza Risky</h5>
                  I thought it was not good for living room. I really happy
                  to decided buy this product last week now feels like
                  homey.
                </div>
              </li>
              <li class="media my-4">
                <img
                  src="images/icon-testimonial-2.png"
                  class="mr-3 rounded-circle"
                  alt=""
                />
                <div class="media-body">
                  <h5 class="mt-2 mb-1">Anna Sukkirata</h5>
                  Color is great with the minimalist concept. Even I thought
                  it was made by Cactus industry. I do really satisfied with
                  this.
                </div>
              </li>
              <li class="media">
                <img
                  src="images/icon-testimonial-3.png"
                  class="mr-3 rounded-circle"
                  alt=""
                />
                <div class="media-body">
                  <h5 class="mt-2 mb-1">Dakimu Wangi</h5>
                  When I saw at first, it was really awesome to have with.
                  Just let me know if there is another upcoming product like
                  this.
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
   
@endsection