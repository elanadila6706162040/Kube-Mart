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
                <h2 class="dashboard-title">{{$transaction->invoice}}</h2>
                <p class="dashboard-subtitle">
                  Transaction Details
                </p>
              </div>
              <div class="dashboard-content" id="transactionDetails">
                <div class="row">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-12 col-md-4">
                          @foreach($transaction->products_transactions as $product)
                            <img
                              src="{{ url('storage/'.$product->product->photo) }}"
                              alt=""
                              class="w-100 mb-3"
                            />
                            @endforeach
                          </div>
                          <div class="col-12 col-md-8">
                            <div class="row">
                              <div class="col-12 col-md-6">
                                <div class="product-title">Customer Name</div>
                                <div class="product-subtitle">{{$transaction->user->name}} </div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="product-title">Product Name</div>
                                <div class="product-subtitle">
                                @foreach($transaction->products_transactions as $product)
                                  {{$product->product->name}}
                                @endforeach
                               
                                </div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="product-title">
                                  Date of Transaction
                                </div>
                                <div class="product-subtitle">
                                {{$transaction->created_at}}
                                </div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="product-title">Status</div>
                                <div class="product-subtitle text-danger">
                                </div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="product-title">Total Amount</div>
                                <div class="product-subtitle">$280,409</div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="product-title">Mobile</div>
                                <div class="product-subtitle">
                                {{$transaction->phone}}
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-12 mt-4">
                            <h5>
                              Shipping Informations
                            </h5>
                            <div class="row">
                              <div class="col-12 col-md-6">
                                <div class="product-title">Address</div>
                                <div class="product-subtitle">
                                {{$transaction->address}}
                                </div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="product-title">
                                  Province
                                </div>
                                <div class="product-subtitle">
                                {{$transaction->province}}
                                </div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="product-title">City</div>
                                <div class="product-subtitle">
                                {{$transaction->city}}
                                </div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="product-title">Postal Code</div>
                                <div class="product-subtitle">{{$transaction->postal_code}}</div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="product-title">Country</div>
                                <div class="product-subtitle">
                                {{$transaction->country}}
                                </div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="product-title">Status</div>
                                    <select
                                      name="status"
                                      id="status"
                                      class="form-control"
                                      v-model="status"
                                    >
                                      <option value="UNPAID">Unpaid</option>
                                      <option value="PENDING">Pending</option>
                                      <option value="SHIPPING">Shipping</option>
                                      <option value="SUCCESS">Success</option>
                                    </select>
                                  </div>
                                  <template v-if="status == 'SHIPPING'">
                                    <div class="col-md-3">
                                      <div class="product-title">
                                        Input Resi
                                      </div>
                                      <input
                                        class="form-control"
                                        type="text"
                                        name="resi"
                                        id="openStoreTrue"
                                        v-model="resi"
                                      />
                                    </div>
                                    <div class="col-md-2">
                                      <button
                                        type="submit"
                                        class="btn btn-success btn-block mt-4"
                                      >
                                        Update Resi
                                      </button>
                                    </div>
                                  </template>
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
    <script src="/vendor/vue/vue.js"></script>
    <script>
      var transactionDetails = new Vue({
        el: "#transactionDetails",
        data: {
          status: "SHIPPING",
          resi: "BDO12308012132",
        },
      });
    </script>
  </body>
</html>
@endsection
