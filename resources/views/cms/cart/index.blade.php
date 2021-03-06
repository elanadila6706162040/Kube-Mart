@extends('layout/account')

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
        @include('layout.alert')
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
                <th scope="col">Quantity</th>
                <th scope="col">Total</th>
                <th scope="col">Menu</th>
              </tr>
            </thead>
            <tbody>
              @forelse($carts as $cart)
              @if(!is_null($cart->product))
              <tr>
                <td style="width: 20%;">
                  <img
                    src="{{ url('storage/'.(is_null($cart->product) ? 0 : $cart->product->photo) ) }}"
                    alt=""
                    class="cart-image"
                  />
                </td>
                <td style="width: 30%;">
                  <div class="product-title">{{ (is_null($cart->product) ? '-' : $cart->product->name) }}</div>
                  <div class="product-subtitle">{{ (is_null($cart->product) ? 0 : $cart->product->store->name)  }}</div>
                </td>
                <td style="width: 20%;">
                  <div class="product-title">Rp. {{ (is_null($cart->product) ? 0 :  $cart->product->price) }}</div>
                  <div class="product-subtitle">Rupiah</div>
                </td>
                <td style="width: 10%;">
                <div class="product-title">{{$cart->quantity}}</div>

                </td>
                <td style="width: 20%;">
                <div class="product-title">Rp. {{$cart->quantity * (is_null($cart->product) ? 0 : $cart->product->price)}}</div>
                </td>
                <td style="width: 15%;">
                  <a href="{{ route('cart.remove') . '?product_id='.$cart->product->id }}" class="btn btn-remove-cart">
                    Remove
                  </a>
                </td>
              </tr>
              @endif
              @empty
              <tr>
                <td>
                0 Cart found
                </td>
              </tr>
              @endforelse
              <!-- <tr>
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
              </tr> -->
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
      <form method="POST" action="{{ route('checkout.step-1-submit') }}" class="mt-3">
      @csrf
      <div class="row mb-2" data-aos="fade-up" data-aos-delay="200">
        <div class="col-md-6">
          <div class="form-group">
            <label for="address">Address</label>
            <input
              type="text"
              class="form-control"
              id="address"
              aria-describedby="address"
              name="address"
              value="{{ old('address' )}}"
            />
            @if($errors->has('address'))
              <div class="text-danger">{{ $errors->first('address') }}</div>
            @endif
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="province">Province</label>
            <select name="province" id="province" class="form-control">
              <option value="Nangroe Aceh Darussalam">Nangroe Aceh Darussalam</option>
              <option value="North Sumatra">North Sumatra</option>
              <option value="West Sumatra">West Sumatra</option>
              <option value="Riau">Riau</option>
              <option value="Riau Islands">Riau Islands</option>
              <option value="Jambi">Jambi </option>
              <option value="South Sumatra">South Sumatra</option>
              <option value="Bangka Belitung">Bangka Belitung</option>
              <option value="Bengkulu">Bengkulu </option>
              <option value="Lampung">Lampung </option>
              <option value="DKI Jakarta">DKI Jakarta</option>
              <option value="West Java">West Java</option>
              <option value="Banten">Banten</option>
              <option value="Central Java">Central Java</option>
              <option value="DI Yogyakarta">DI Yogyakarta</option>
              <option value="East Java">East Java</option>
              <option value="Bali">Bali</option>
              <option value="West Nusa Tenggara">West Nusa Tenggara</option>
              <option value="East Nusa Tenggara">East Nusa Tenggara</option>
              <option value="West Kalimantan">West Kalimantan</option>
              <option value="Central Kalimantan">Central Kalimantan</option>
              <option value="South Kalimantan">South Kalimantan</option>
              <option value="East Kalimantan"> East Kalimantan</option>
              <option value="North Kalimantan">North Kalimantan</option>
              <option value="North Sulawesi">North Sulawesi</option>
              <option value="West Sulawesi">West Sulawesi</option>
              <option value="Central Sulawesi">Central Sulawesi</option>
              <option value="Southeast Sulawesi">Southeast Sulawesi</option>
              <option value="South Sulawesi">South Sulawesi</option>
              <option value="Gorontalo">Gorontalo</option>
              <option value="Maluku">Maluku</option>
              <option value="North Maluku">North Maluku</option>
              <option value="West Papua">West Papua</option>
              <option value="Papua">Papua</option>
            </select>
          </div>
        </div>
        @if($errors->has('province'))
          <div class="text-danger">{{ $errors->first('province') }}</div>
        @endif
        <div class="col-md-4">
          <div class="form-group">
            <label for="city">City</label>
            <select name="city" id="city" class="form-control">
              <option value="Banda Aceh">Banda Aceh</option>
              <option value="Medan">Medan</option>
              <option value="Padang">Padang</option>
              <option value="Pekanbaru">Pekanbaru</option>
              <option value="Tanjung Pinang">Tanjung Pinang</option>
              <option value="Jambi">Jambi</option>
              <option value="Palembang">Palembang</option>
              <option value="Pangkal Pinang">Pangkal Pinang</option>
              <option value="Bengkulu">Bengkulu</option>
              <option value="Bandar Lampung">Bandar Lampung</option>
              <option value="Jakarta">Jakarta</option>
              <option value="Bandung">Bandung</option>
              <option value="Serang">Serang</option>
              <option value="Semarang">Semarang</option>
              <option value="Yogyakarta">Yogyakarta</option>
              <option value="Surabaya">Surabaya</option>
              <option value="Denpasar">Denpasar</option>
              <option value="Mataram">Mataram</option>
              <option value="Kupang">Kupang</option>
              <option value="Pontianak">Pontianak</option>
              <option value="Palangkaraya">Palangkaraya</option>
              <option value="Banjarmasin">Banjarmasin</option>
              <option value="Samarinda">Samarinda</option>
              <option value="Tanjung Selor">Tanjung Selor</option>
            </select>
          </div>
        </div>
        @if($errors->has('city'))
          <div class="text-danger">{{ $errors->first('city') }}</div>
        @endif
        <div class="col-md-4">
          <div class="form-group">
            <label for="postal_code">Postal Code</label>
            <input
              type="text"
              class="form-control"
              id="postal_code"
              name="postal_code"
              value="{{ old('postal_code' )}}"
            />
          </div>
        </div>
        @if($errors->has('postal_code'))
          <div class="text-danger">{{ $errors->first('postal_code') }}</div>
        @endif
        <div class="col-md-6">
          <div class="form-group">
            <label for="country">Country</label>
            <input
              type="text"
              class="form-control"
              id="country"
              name="country"
              value="{{ old('country' )}}"
            />
          </div>
        </div>
        @if($errors->has('country'))
          <div class="text-danger">{{ $errors->first('country') }}</div>
        @endif
        <div class="col-md-6">
          <div class="form-group">
            <label for="phone">Mobile</label>
            <input
              type="text"
              class="form-control"
              id="phone"
              name="phone"
              value="{{ old('phone' )}}"
            />
          </div>
        </div>
        @if($errors->has('phone'))
          <div class="text-danger">{{ $errors->first('phone') }}</div>
        @endif
        <div class="col-md-4">
          <div class="form-group">
            <label for="courier">Courier</label>
            <select name="courier" id="courier" class="form-control">
              <option value="JNE">JNE</option>
              <option value="JNE">J&T</option>
              <option value="JNE">Tiki</option>
              <option value="JNE">Sicepat</option>
            </select>
          </div>
        </div>
        @if($errors->has('courier'))
          <div class="text-danger">{{ $errors->first('courier') }}</div>
        @endif
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
          <div class="product-title">Rp. {{\App\Transaction::ONGKIR}}</div>
          <input type="hidden" value="{{\App\Transaction::ONGKIR}}" name="shipping_cost">
          <div class="product-subtitle">Shippng Cost</div>
        </div>
        <div class="col-4 col-md-2">
          <div class="product-title text-success">Rp. {{ $totalPrice }}</div>
          <div class="product-subtitle">Total</div>
        </div>
        <div class="col-8 col-md-3">
          <button type="submit"
            class="btn btn-success mt-4 px-4 btn-block"
          >
            Checkout Now
          </a>
        </div>
      </div>
      </form>
    </div>
  </section>
</div>


@endsection
