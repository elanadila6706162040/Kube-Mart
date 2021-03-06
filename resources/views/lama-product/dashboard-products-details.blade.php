@extends('layout/admin')

@section('container')
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
    <link href="style/main.css" rel="stylesheet" />
  </head>

  <body>
    <div class="page-dashboard">
    

        <!-- Page Content -->
        <div id="page-content-wrapper">
        

          <div
            class="section-content section-dashboard-home"
            data-aos="fade-up"
            >
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dashboard-title">{{$product->name}}</h2>
                <p class="dashboard-subtitle">
                  Product Details
                </p>
              </div>
              <div class="dashboard-content">
                <div class="row">
                  <div class="col-12">
                    <form action="">
                      <div class="card">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="name">Product Name</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id="name"
                                  aria-describedby="name"
                                  name="storeName"
                                  value="{{$product->name}}"
                                />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="price">Price</label>
                                <input
                                  type="number"
                                  class="form-control"
                                  id="price"
                                  aria-describedby="price"
                                  name="price"
                                  value="200"
                                />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="price">Stock</label>
                                <input
                                  type="number"
                                  class="form-control"
                                  id="stock"
                                  aria-describedby="stock"
                                  name="stock"
                                  value="{{$product->stock}}"
                                />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="price">Weight</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id="weight"
                                  aria-describedby="weight"
                                  name="weight"
                                  value="12 kg"
                                />
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="description">Description</label>
                                <textarea
                                  name="description"
                                  id=""
                                  cols="30"
                                  rows="4"
                                  class="form-control"
                                >{{$product->description}}
                                </textarea>
                              </div>
                            </div>
                            <div class="col">
                              <a
                                href="{{ $product->id}}/edit"
                                class="btn btn-success btn-block px-5"
                              >
                                Update Product
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="row mt-4">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-4">
                            <!-- <div class="gallery-container">
                              <img
                                src="{{ ('assets/img/product-card-1.png') }}"
                                alt=""
                                class="w-100"
                              />
                              <a class="delete-gallery" href="#">
                                <img src="images/icon-delete.svg" alt="" />
                              </a>
                            </div> -->
                          </div>
                          <div class="col-md-4">
                            <div class="gallery-container">
                              <img
                                src="{{ ('assets/img/product-card-1.png') }}"
                                alt=""
                                class="w-100"
                              />
                              <a class="delete-gallery" href="#">
                                <img src="images/icon-delete.svg" alt="" />
                              </a>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <!-- <div class="gallery-container">
                              <img
                                src="{{ ('assets/img/product-card-3.png') }}"
                                alt=""
                                class="w-100"
                              />
                              <a class="delete-gallery" href="#">
                                <img src="{{ ('assets/img/icon-delete.svg') }}" alt="" />
                              </a>
                            </div> -->
                          </div>
                          <div class="col mt-3">
                            <input
                              type="file"
                              id="file"
                              style="display: none;"
                              multiple
                            />
                            <button
                              class="btn btn-secondary btn-block"
                              onclick="thisFileUpload();"
                            >
                              Update Photo
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /#page-content-wrapper -->
      </div>
    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="/vendor/jquery/jquery.slim.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
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
    <script>
      function thisFileUpload() {
        document.getElementById("file").click();
      }
    </script>
  </body>
</html>
@endsection
