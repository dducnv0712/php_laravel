@extends('layout');
@section('main')
    <!--Main layout-->
    <main class="mt-5 pt-4">
        <div class="container wow fadeIn">

            <!-- Heading -->
            <h2 class="my-5 h2 text-center">Checkout form</h2>

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-7 mb-4">

                    <!--Card-->
                    <div class="card">

                        <!--Card content-->
                        <form class="card-body">

                            <!--Username-->
                            <div class="md-form  mb-5">
                                <input type="text" id="fullName" class="form-control"  aria-describedby="basic-addon1">
                                <label for="fullName" class="">Full Name</label>
                            </div>

                            <!--email-->
                            <div class="md-form mb-5">
                                <input type="email" id="email" class="form-control" >
                                <label for="email" class="">Email</label>
                            </div>

                            <!--phone-->
                            <div class="md-form mb-5">
                                <input type="tel" id="tel" class="form-control" >
                                <label for="tel" class="">Number Phone</label>
                            </div>

                            <!--Grid column-->
                            <div class="md-form mb-5">
                                <input type="tel" id="adress" class="form-control" >
                                <label for="address" class="">Address</label>
                            </div>

                            <div class="mb-5">
                                <label for="city">City</label>
                                <select class="form-control select select2 d-block w-100" id="city" required>
                                    <option value="0" selected disabled>Select City</option>

                                    @foreach($cities as $item)
                                        <option value="{{$item->shipping_fee}}">{{$item->city_name}}</option>
                                    @endforeach



                                </select>

                            </div>




                            <!--Grid column-->
                            <hr class="mb-4">
                            <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>

                        </form>

                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-5 mb-4">

                    <!-- Heading -->
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Your cart</span>
                        <span class="badge badge-primary badge-pill">{{count($cart)}}</span>
                    </h4>

                    <!-- Cart -->
                    <ul class="list-group mb-3 z-depth-1">
                        @foreach($cart as $item)
                            <li class="list-group-item d-flex justify-content-between lh-condensed">

                                <div class="d-flex">
                                    <img style="width:40px;height:40px" src="{{url($item->image)}}" alt="1">
                                    <div style="margin-left:20px">
                                        <h6 class="my-0">{{$item->name}}</h6>
                                        <small class="text-muted">Brief description</small>
                                    </div>


                                </div>
                                <div>
                                    <span class="text-muted">Quantity: {{$item->cart_qty}}</span>

                                </div>
                                <span class="text-muted">${{$item->price}}</span>
                            </li>
                        @endforeach

                        <li class="list-group-item">
                            <div class=" d-flex justify-content-between mb-3">
                                <span>Shipping</span>
                                <strong >$<span class="shipping">{{$shipping}}</span></strong>
                            </div>
                            <div class=" d-flex justify-content-between">
                                <span>Total (USD)</span>
                                <strong>${{$grandTotal+$shipping}}</strong>
                            </div>

                        </li>
                    </ul>
                    <!-- Cart -->

                    <!-- Promo code -->
                    <form class="card p-2">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Promo code" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary btn-md waves-effect m-0" type="button">Redeem</button>
                            </div>
                        </div>
                    </form>
                    <!-- Promo code -->

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </div>
    </main>
    <!--Main layout-->
@endsection
