@extends('layout/account')

@section('container')
 <!-- Page Content -->
 <!--PEN CONTENT     -->
<div class="content">
  <!--content inner-->
  <div class="content__inner">
    <div class="container">
      <!--content title-->
      <!-- <h2 class="content__title content__title--m-sm">Pick animation type</h2> -->
      <!--animations form-->
      <form class="pick-animation my-4">
        <div class="form-row">
          <div class="col-5 m-auto">
            <!-- <select class="pick-animation__select form-control">
              <option value="scaleIn" selected="selected">ScaleIn</option>
              <option value="scaleOut">ScaleOut</option>
              <option value="slideHorz">SlideHorz</option>
              <option value="slideVert">SlideVert</option>
              <option value="fadeIn">FadeIn</option>
            </select> -->
          </div>
        </div>
      </form>
      <!--content title-->
      <h2 class="content__title">Checkout</h2>
    </div>
    <div class="container overflow-hidden">
      <!--multisteps-form-->
      <div class="multisteps-form">
        <!--progress bar-->
        <div class="row">
          <div class="col-12 col-lg-8 ml-auto mr-auto mb-4">
            <div class="multisteps-form__progress" style="padding-top: 2px;">
              <button class="multisteps-form__progress-btn js-active" type="button" title="User Info">Pay</button>
              <button class="multisteps-form__progress-btn" type="button" title="Address">Order Status</button>
              <button class="multisteps-form__progress-btn" type="button" title="Comments">Upload Proof Of Payment </button>
              <button class="multisteps-form__progress-btn" type="button" title="Comments">Selesai</button>
            </div>
          </div>
        </div>
        <!--form panels-->
        <div class="row">
          <div class="col-12 col-lg-8 m-auto" style="    padding-bottom: 20px;">
            <form class="multisteps-form__form">
              <!--single form panel-->
              <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active"  data-animation="scaleIn">
              <div class="multisteps-form__content">
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                    <h3 class="multisteps-form__title">Your User Info</h3>
                    </div>
                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                    <h3 class="multisteps-form__title">Your Order</h3>
                    </div>
                  </div>

                </div>
                <div class="multisteps-form__content">
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <input class="multisteps-form__input form-control" type="text" placeholder="Nama KUBE"/>
                    </div>
                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                      Beras dengan harga Rp. 11.000
                    </div>
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <input class="multisteps-form__input form-control" type="text" placeholder="No HP"/>
                    </div>
                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                      Shipping Cost : Rp. 11.000
                    </div>
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <input class="multisteps-form__input form-control" type="password" placeholder="Alamat"/>
                    </div>
                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                      TOTAL RP.10.000
                    </div>
                  </div>
                  <div class="button-row d-flex mt-4">
                    <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Bayar</button>
                  </div>
                </div>
              </div>
               <!--single form panel-->
               <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                <h3 class="multisteps-form__title">THANK YOU!. YOUR ORDER HAS BEEN RECEIVED</h3>
                <div class="multisteps-form__content">
                  <div class="form-row mt-4">
                    <table class="table">
                      <tr>
                        <td>Semangka <br>10.000 x 2</td>
                        <td>200000</td>
                      </tr>
                      <tr>
                        <td>Semangka <br>10.000 x 2</td>
                        <td>200000</td>
                      </tr>
                      <tr>
                        <td>Semangka <br>10.000 x 2</td>
                        <td>200000</td>
                      </tr>
                      <tr>
                        <td>Semangka <br>10.000 x 2</td>
                        <td>200000</td>
                      </tr>
                      <tr>
                        <td><h5>Total</h5></td>
                        <td><h5>80000</h5></td>
                      </tr>
                    </table>
                    <div class="col">
                     Please Transfer Money Amounting to <b>Rp. 11.000 </b>
                    </div>
                  </div>
                  <div class="form-row mt-4">
                    <div class="col">
                    Transfer to Account: MANDIRI : 13011293846
                    </div>
                  </div>
                  <div class="form-row mt-4">
                    <div class="col">
                    On Behalf Of : <b>PT. KUBEMART INDONESIA</b>
                    </div>
                  </div>
                  <div class="form-row mt-4">
                    <div class="col">
                    Attention: If you have transferred, don't forget to screenshot/photo of the proof of payment.
                    </div>
                  </div>
                  <div class="button-row d-flex mt-4">
                    <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                    <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Already Paid</button>
                  </div>
                </div>
              </div>
              <!--single form panel-->
              <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                <h3 class="multisteps-form__title">Upload Proof Of Payment</h3>
                <div class="multisteps-form__content">
                  <div class="form-row mt-4">
                  <input
                                  type="file"
                                  multiple
                                  class="form-control pt-1"
                                  id="thumbnails"
                                  aria-describedby="thumbnails"
                                  name="thumbnails"
                                />
                  </div>
                  <div class="button-row d-flex mt-4">
                    <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                    <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Send">Send</button>
                  </div>

                </div>
              </div>
               <!--single form panel-->
               <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                <h3 class="multisteps-form__title">THANK YOU. PLEASE WAIT FOR VERIFICATION PAYMENT PROOF</h3>
                <P>if your payment status doesnt have any update in long time, just email us in support@mail.com</P>
                <div class="multisteps-form__content">
                  <!-- <div class="form-row mt-4">
                    <div class="col">
                      <input class="multisteps-form__input form-control" type="text" placeholder="Address 1"/>
                    </div>
                  </div>
                  <div class="form-row mt-4">
                    <div class="col">
                      <input class="multisteps-form__input form-control" type="text" placeholder="Address 2"/>
                    </div>
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <input class="multisteps-form__input form-control" type="text" placeholder="City"/>
                    </div>
                    <div class="col-6 col-sm-3 mt-4 mt-sm-0">
                      <select class="multisteps-form__select form-control">
                        <option selected="selected">State...</option>
                        <option>...</option>
                      </select>
                    </div>
                    <div class="col-6 col-sm-3 mt-4 mt-sm-0">
                      <input class="multisteps-form__input form-control" type="text" placeholder="Zip"/>
                    </div>
                  </div> -->
                  <div class="button-row d-flex mt-4">
                    <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                    <a href="{{ route('home.index')}}" class="btn btn-success ml-auto" type="button" title="Go To My Dashboard">My Dashboard</a>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- partial -->
 <!-- <div class="page-content page-success">
      <div class="section-success" data-aos="zoom-in">
        <div class="container">
          <div class="row align-items-center row-login justify-content-center">
            <div class="col-lg-6 text-center">
              <img src="images/success.svg" alt="" class="mb-4" />
              <h2>
                Transaction Processed!
              </h2>
              <p>
                Silahkan tunggu konfirmasi email dari kami dan <br />
                kami akan menginformasikan resi secept mungkin!
              </p>
              <div>
                <a class="btn btn-success w-50 mt-4" href="/dashboard">
                  My Dashboard
                </a>
                <a class="btn btn-signup w-50 mt-2" href="/index">
                  Go To Shopping
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->


@endsection
