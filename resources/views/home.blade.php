@extends("layout");
@section("main")

{{--bài thi--}}
    <div class="container">
        <form action="{{url('/submit')}}" method="post">
            @csrf
        <div class="card">

            <div class="card-header">
                Feedback
            </div>
            <div id="ajax"> </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="name" class="fw-bolder col-form-label">Full Name:</label>
                    <input type="text" value="" name="name" class="form-control" id="name" required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="fw-bolder col-form-label">Phone:</label>
                    <input type="tel" value="" name="phone" class="form-control" id="phone" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="fw-bolder col-form-label">Email:</label>
                    <input type="email" value="" name="email" class="form-control" id="email" required>
                </div>
                <div class="mb-3">
                    <label for="feedback" class="fw-bolder col-form-label">Feedback:</label>
                    <textarea type="text"  name="feedback" class="form-control" id="feedback" required></textarea>
                </div>
            </div>
            <div class="card-footer bg-transparent">
                <button type="submit" id="submit" class="btn btn-success">Submit</button>
            </div>

        </div>
        </form>
    </div>

{{--.bài thi--}}



{{--<!--Carousel Wrapper-->--}}
{{--<div id="carousel-example-1z" style="height:120vh;" class="carousel slide carousel-fade pt-4" data-ride="carousel">--}}

{{--    <!--Indicators-->--}}
{{--    <ol class="carousel-indicators">--}}
{{--        <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>--}}
{{--        <li data-target="#carousel-example-1z" data-slide-to="1"></li>--}}
{{--        <li data-target="#carousel-example-1z" data-slide-to="2"></li>--}}
{{--    </ol>--}}
{{--    <!--/.Indicators-->--}}

{{--    <!--Slides-->--}}
{{--    <div class="carousel-inner" role="listbox">--}}

{{--        <!--First slide-->--}}
{{--        <div class="carousel-item active">--}}
{{--            <div class="view" style="background-image:url({{asset('user_public/img/nike.jpg')}}); background-repeat: no-repeat; background-size: cover; background-position:center">--}}

{{--                <!-- Mask & flexbox options-->--}}
{{--                <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">--}}

{{--                    <!-- Content -->--}}
{{--                    <div class="text-center white-text mx-5 wow fadeIn">--}}
{{--                        <h1 class="mb-4">--}}
{{--                            <strong>NIKE</strong>--}}
{{--                            <p>--}}
{{--                                <strong>Just Do It</strong>--}}
{{--                            </p>--}}
{{--                        </h1>--}}
{{--                    </div>--}}
{{--                    <!-- Content -->--}}

{{--                </div>--}}
{{--                <!-- Mask & flexbox options-->--}}

{{--            </div>--}}
{{--        </div>--}}
{{--        <!--/First slide-->--}}

{{--        <!--Second slide-->--}}
{{--        <div class="carousel-item">--}}
{{--            <div class="view" style="background-image: url({{asset('user_public/img/adidas.png')}}); background-repeat: no-repeat; background-size: cover;background-position:center">--}}

{{--                <!-- Mask & flexbox options-->--}}
{{--                <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">--}}

{{--                    <!-- Content -->--}}
{{--                    <div class="text-center white-text mx-5 wow fadeIn">--}}
{{--                        <h1 class="mb-4">--}}
{{--                            <strong>Adidas</strong>--}}
{{--                        </h1>--}}
{{--                        <h1>helloooo</h1>--}}
{{--                    </div>--}}
{{--                    <!-- Content -->--}}

{{--                </div>--}}
{{--                <!-- Mask & flexbox options-->--}}

{{--            </div>--}}
{{--        </div>--}}
{{--        <!--/Second slide-->--}}

{{--        <!--Third slide-->--}}
{{--        <div class="carousel-item">--}}
{{--            <div class="view" style="background-image:url({{asset('user_public/img/puma.jpg')}}); background-repeat: no-repeat; background-size: cover;background-position:center">--}}

{{--                <!-- Mask & flexbox options-->--}}
{{--                <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">--}}

{{--                    <!-- Content -->--}}
{{--                    <div class="text-center white-text mx-5 wow fadeIn">--}}
{{--                        <h1 class="mb-4">--}}
{{--                            <strong>PUMA</strong>--}}
{{--                        </h1>--}}

{{--                    </div>--}}
{{--                    <!-- Content -->--}}

{{--                </div>--}}
{{--                <!-- Mask & flexbox options-->--}}

{{--            </div>--}}
{{--        </div>--}}
{{--        <!--/Third slide-->--}}

{{--    </div>--}}
{{--    <!--/.Slides-->--}}

{{--    <!--Controls-->--}}
{{--    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">--}}
{{--        <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--        <span class="sr-only">Previous</span>--}}
{{--    </a>--}}
{{--    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">--}}
{{--        <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--        <span class="sr-only">Next</span>--}}
{{--    </a>--}}
{{--    <!--/.Controls-->--}}

{{--</div>--}}
{{--<!--/.Carousel Wrapper-->--}}

{{--<!--Main layout-->--}}
{{--<main>--}}
{{--    <div class="container">--}}

{{--        <!--Navbar-->--}}
{{--        <nav class="navbar navbar-expand-lg navbar-dark mdb-color lighten-3 mt-3 mb-5">--}}
{{--            <div class="col-3 ">--}}
{{--                <label for="select_br"> </label>--}}
{{--                <select id="select_br" class="form-control select2">--}}
{{--                    <option class="selected">Select Brand</option>--}}
{{--                    <option>Adidas</option>--}}
{{--                    <option>Nike</option>--}}
{{--                    <option>Puma</option>--}}
{{--                </select>--}}
{{--            </div>--}}


{{--            <!-- Navbar brand -->--}}
{{--            <span class="navbar-brand">Categories:</span>--}}

{{--            <!-- Collapse button -->--}}
{{--            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"--}}
{{--                    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--                <span class="navbar-toggler-icon"></span>--}}
{{--            </button>--}}

{{--            <!-- Collapsible content -->--}}
{{--            <div class="collapse navbar-collapse" id="basicExampleNav">--}}

{{--                <!-- Links -->--}}
{{--                <ul class="navbar-nav mr-auto">--}}
{{--                    <li class="nav-item active">--}}
{{--                        <a class="nav-link" href="#">All--}}
{{--                            <span class="sr-only">(current)</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="#">Shirts</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="#">Sport wears</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="#">Outwears</a>--}}
{{--                    </li>--}}

{{--                </ul>--}}
{{--                <!-- Links -->--}}

{{--                <form class="form-inline">--}}
{{--                    <div class="md-form my-0">--}}
{{--                        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--            <!-- Collapsible content -->--}}

{{--        </nav>--}}
{{--        <!--/.Navbar-->--}}

{{--        <!--Section: Products v.3-->--}}
{{--        <section class="text-center mb-4">--}}
{{--            <!--Grid row-->--}}
{{--            <div class="row wow fadeIn">--}}
{{--                @foreach($products as $item)--}}

{{--                <!--Grid column-->--}}
{{--                    <a href="{{url('/details')}}">--}}

{{--                    <div class="col-lg-3 col-md-6 mb-4">--}}
{{--                    <!--Card-->--}}
{{--                    <div class="card">--}}

{{--                        <!--Card image-->--}}
{{--                        <div class="view overlay">--}}
{{--                            <img src="{{$item->image}}" class="card-img-top"--}}
{{--                                 alt="">--}}
{{--                            <a>--}}
{{--                                <div class="mask rgba-white-slight"></div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <!--Card image-->--}}

{{--                        <!--Card content-->--}}
{{--                        <div class="card-body text-center">--}}
{{--                            <!--Category & Title-->--}}
{{--                            <a href="" class="grey-text">--}}
{{--                                <h5>{{$item->Brand->name}}</h5>--}}
{{--                            </a>--}}
{{--                            <h5>--}}
{{--                                <strong>--}}
{{--                                    <a href="{{url('/details')}}" class="dark-grey-text">{{$item->name}}--}}
{{--                                    </a>--}}
{{--                                </strong>--}}
{{--                            </h5>--}}

{{--                            <h4 class="font-weight-bold blue-text">--}}
{{--                                <strong>${{$item->price}}</strong>--}}
{{--                            </h4>--}}
{{--                                <button onclick="window.document.location.href='{{url('/details',["id"=>$item->id])}}'" class="btn-primary btn btn-sm">Details</button>--}}


{{--                        </div>--}}
{{--                        <!--Card content-->--}}

{{--                    </div>--}}
{{--                    <!--Card-->--}}

{{--                </div>--}}
{{--                <!--Grid column-->--}}
{{--                </a>--}}

{{--        @endforeach--}}



{{--            </div>--}}
{{--            <!--Grid row-->--}}

{{--            <!--Grid row-->--}}

{{--            <!--Grid row-->--}}

{{--        </section>--}}
{{--        <!--Section: Products v.3-->--}}

{{--        <!--Pagination-->--}}
{{--        <nav class="d-flex justify-content-center wow fadeIn">--}}
{{--            {!! $products->links("vendor.pagination.bootstrap-4") !!}--}}

{{--        </nav>--}}
{{--        <!--Pagination-->--}}

{{--    </div>--}}
{{--</main>--}}
<!--Main layout-->
@endsection
