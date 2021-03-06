@extends('layout/main')

@section('container')
<div class="page-content page-cart">
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
              <li class="breadcrumb-item"><a href="{{ url('/')}}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">
                Cart
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <section class="store-cart">
    <div class="container">
      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-12 table-responsive">
          <table
            class="table table-borderless table-cart"
            aria-describedby="Cart"
          >
            <thead>
              <tr>
                <th scope="col">Image</th>
                <th scope="col">Name &amp; Seller</th>
                <th scope="col">Price</th>
                <th scope="col">Menu</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td style="width: 25%;">
                  <img
                    src="{{ ('assets/img/product-cart-1.jpg') }}"
                    alt=""
                    class="cart-image"
                  />
                </td>
                <td style="width: 35%;">
                  <div class="product-title">Sofa Ternyaman</div>
                  <div class="product-subtitle">by Andi Sukka</div>
                </td>
                <td style="width: 35%;">
                  <div class="product-title">Rp. 29.112</div>
                  <div class="product-subtitle">Rupiah</div>
                </td>
                <td style="width: 20%;">
                  <a href="#" class="btn btn-remove-cart">
                    Remove
                  </a>
                </td>
              </tr>
              <tr>
                <td style="width: 25%;">
                  <img
                    src="{{ ('assets/img/product-cart-2.jpg') }}"
                    alt=""
                    class="cart-image"
                  />
                </td>
                <td style="width: 25%;">
                  <div class="product-title">Sneaker</div>
                  <div class="product-subtitle">by BuildWith Angga</div>
                </td>
                <td style="width: 25%;">
                  <div class="product-title">Rp. 80.309</div>
                  <div class="product-subtitle">Rupiah</div>
                </td>
                <td style="width: 25%;">
                  <a href="#" class="btn btn-remove-cart">
                    Remove
                  </a>
                </td>
              </tr>
              <tr>
                <td style="width: 25%;">
                  <img
                    src="{{ ('assets/img/product-cart-3.jpg') }}"
                    alt=""
                    class="cart-image"
                  />
                </td>
                <td style="width: 25%;">
                  <div class="product-title">Coffee Holder</div>
                  <div class="product-subtitle">by Addictex</div>
                </td>
                <td style="width: 25%;">
                  <div class="product-title">Rp. 13.492</div>
                  <div class="product-subtitle">Rupiah</div>
                </td>
                <td style="width: 25%;">
                  <a href="#" class="btn btn-remove-cart">
                    Remove
                  </a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="row" data-aos="fade-up" data-aos-delay="150">
        <div class="col-12">
          <hr />
        </div>
        <div class="col-12">
          <h2 class="mb-4">Shipping Details</h2>
        </div>
      </div>
      <div class="row mb-2" data-aos="fade-up" data-aos-delay="200">
        <div class="col-md-6">
          <div class="form-group">
            <label for="addressOne">Address</label>
            <input
              type="text"
              class="form-control"
              id="addressOne"
              aria-describedby="emailHelp"
              name="addressOne"
              value="Setra Duta Cemara"
            />
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="province">Province</label>
            <select name="province" id="province" class="form-control">
              <option value="West Java">West Java</option>
            </select>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="city">City</label>
            <select name="city" id="city" class="form-control">
              <option value="Bandung">Bandung</option>
            </select>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="postalCode">Postal Code</label>
            <input
              type="text"
              class="form-control"
              id="postalCode"
              name="postalCode"
              value="40512"
            />
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="country">Country</label>
            <input
              type="text"
              class="form-control"
              id="country"
              name="country"
              value="Indonesia"
            />
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="mobile">Mobile</label>
            <input
              type="text"
              class="form-control"
              id="mobile"
              name="mobile"
              value="+628 2020 11111"
            />
          </div>
        </div>
      </div>
      <div class="row" data-aos="fade-up" data-aos-delay="150">
        <div class="col-12">
          <hr />
        </div>
        <div class="col-12">
          <h2>Payment Informations</h2>
        </div>
      </div>
      <div class="row" data-aos="fade-up" data-aos-delay="200">
        <div class="col-4 col-md-2">
          <div class="product-title">Rp. 11.000</div>
          <div class="product-subtitle">Shipping Cost</div>
        </div>
        <div class="col-4 col-md-2">
          <div class="product-title text-success">Rp. 392.409</div>
          <div class="product-subtitle">Total</div>
        </div>
        <div class="col-8 col-md-3">
          <a
            href="/checkout"
            class="btn btn-success mt-4 px-4 btn-block"
          >
            Checkout Now
          </a>
        </div>
      </div>
    </div>
  </section>
</div>

   
@endsection
