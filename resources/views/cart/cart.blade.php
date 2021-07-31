@extends("layout")
@section("page_title","Cart")
@section("main")
    <div class="container mt-5 p-3 rounded cart">
        <form action="#" method="POST">

        <div class="row no-gutters">


            <div class="col-md-8">
                <div class="product-details mr-2">
                    <div class="d-flex rounded-3 border-top flex-row cart-header align-items-center"><i class="fa ms-2 fa-long-arrow-left"></i><span class="ml-2"><a href="?route=Product-List" class="text-secondary backBtn"><i class="fas fa-arrow-left"></i></a> Continue Shopping</span></div>
                    <div class="cart-body rounded-3 mt-3">
                        <div class="row">
                            <div class="col-10">
                                <h6 class="mb-0 ">Shopping cart</h6>
                                <div class="d-flex justify-content-between"><span>You have {{count($cart)}} items in your cart</span>
                                </div>
                            </div>
                            <div class="col-2">
                                <button type="button" class="btn btn-sm btn-success">Update cart</button>
                            </div>
                        </div>
                        <div  class="container-product mt-3">
                            @forelse($cart as $item)
                                <div class="d-flex bg-white shadow justify-content-between align-items-center mt-3 py-2 mx-3 items rounded">
                                    <div class="d-flex flex-row">
                                        <div class="ml-2">
                                        <span class="fw-bold  d-block">
                                            <img style="width:50px;height:50px" src="{{$item->image}}" alt="img">
                                        </span>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row">
                                        <div class="ml-2"><span class="fw-bold name-pr d-block">{{$item->name}}</span><span class="spec"></span></div>
                                    </div>
                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                        <span class="d-block  fw-bold mx-5"><label for="qty">Quantity: </label> <input id="qty" min="1" value="{{$item->cart_qty}}" type="number" style="width:60px"></span>
                                        <span class="d-block  mx-3 ml-5 fw-bold">Price: {{$item->price}}</span>
                                        <span class="d-block  mx-3 ml-5 fw-bold">Total: {{$item->price*$item->cart_qty}}</span>
                                        <button onclick="window.location.href='?route=Cart-List&delCart='" type="button" class="shadow-none btn-close">
                                        </button>
                                    </div>


                                </div>
                                @empty
                                    <h1>Không có Sản Phẩm Nào</h1>

                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="payment-info">
                    <div class="d-flex justify-content-between align-items-center"><span>Card details</span><img class="rounded" src="https://i.imgur.com/WU501C8.jpg" alt="/" width="30"></div><span class="type d-block mt-3 mb-1">Card type</span><label class="radio"> <input type="radio" name="card" value="payment" checked> <span><img width="30" src="https://img.icons8.com/color/48/000000/mastercard.png" alt="/" /></span> </label>
                    <label class="radio"> <input type="radio" name="card" value="payment"> <span><img width="30" src="https://img.icons8.com/officel/48/000000/visa.png" alt="/" /></span> </label>
                    <label class="radio"> <input type="radio" name="card" value="payment"> <span><img width="30" src="https://img.icons8.com/ultraviolet/48/000000/amex.png" alt="/" /></span> </label>
                    <label class="radio"> <input type="radio" name="card" value="payment"> <span><img width="30" src="https://img.icons8.com/officel/48/000000/paypal.png" alt="/" /></span> </label>
                    <div>
                        <label for="name_cus" class="credit-card-label">Full Name</label>
                        <input type="text" id="name_cus" class="form-control credit-inputs" placeholder="Full Name">
                    </div>
                    <div>
                        <label for="phone_cus" class="credit-card-label">Phone Number</label>
                        <input id="phone_cus" type="text" class="form-control credit-inputs" >
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="input" class="credit-card-label">Date</label>
                            <input id="input" type="text" class="form-control credit-inputs" placeholder="12/24">
                        </div>
                        <div class="col-md-6">
                            <label for="input" class="credit-card-label">CVV</label>
                            <input id="input" type="text" class="form-control credit-inputs" placeholder="342">
                        </div>
                    </div>
                    <div>
                        <label for="City" class="credit-card-label">City</label>
                        <select name="city" class="form-control credit-inputs select2 "  id="City">
                            <option selected="selected" disabled >Select City</option>
                            @foreach($cities as $item)
                                <option value="{{$item->id}}">{{$item->city_name}}</option>
                            @endforeach


                        </select>
                    </div>
                    <div>
                        <label for="phone_cus" class="credit-card-label">Address</label>
                        <textarea id="phone_cus" type="text" class="form-control credit-inputs" ></textarea>
                    </div>
                    <hr class="line">

                    <div class="d-flex justify-content-between information"><span>Subtotal</span><span></span></div>
                    <div class="d-flex justify-content-between information"><span>Shipping</span><span>1000 VND</span></div>
                    <div class="d-flex justify-content-between information"><span>Total(Incl. taxes)</span><span>2000 VND</span></div>
                    <button type="submit" class="btn btn-warning  shadow-none rounded-pill fs-6  button cartButton">Checkout</button>
                </div>
            </div>

        </div>
        </form>

    </div>
@endsection
