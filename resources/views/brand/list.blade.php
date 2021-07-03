@extends("layout")
@section("page_title","Brands")
@section("main")
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-3">Brands</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <div class="float-sm-right m-3">
                    <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#add-brand" >New Brand</button>
                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-12">

                    <table id="datatable" class="table" style="width:100%" >

                        <thead class="table-light">
                        <tr>
                            <th>Num</th>
                            <th>Logo</th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th>Function</th>
                        </tr>
                        </thead>
                        <tbody class="table-hover">
                        @foreach($brands as $item)
                            <tr >
                                <th class="border-bottom"  scope="row">{{$num++}}</th>
                                <td class="border-bottom"><img class="imgLogo" src="{{$item->logo}}" alt=""></td>
                                <td class="border-bottom">{{$item->id}}</td>
                                <th class="border-bottom"><a href="{{url("admin/products/proBrands",["id"=>$item->id])}}">{{$item->name}}</a></th>
                                <td class="border-bottom">{{$item->created_at}}</td>
                                <td class="border-bottom">{{$item->updated_at}}</td>


                                <td class="border-bottom">
                                    <!-- phím chức năng -->
                                    <div class="btn-group shadow" role="group" aria-label="Basic mixed styles example">

                                        <button   class="btn btn-sm edit-btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#edit-product-{{$item->id}}" >Edit</button>
                                        <button   class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_product-{{$item->id}}">
                                            Delete
                                        </button>
                                    </div>


                                    <!--Popup Xóa Sản Phẩm -->
                                    <div class="modal fade" id="delete_product-{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title fw-bold" id="exampleModalLabel">Delete Brand</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    You Want to delete brand {{$item->name}}

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button onclick="window.location.href='{{url("admin/brands/delete",["id"=>$item->id])}}'"  class="btn btn-danger">Delete Brand</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- kết thúc popup xóa sản phẩm -->


                                    <!--Sửa sản phẩm-->
                                    <div id="edit-product-{{$item->id}}" class="modal fade"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title fw-bolder justify-content-center" id="exampleModalLabel">Update Brand {{$item->id}}</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">

                                                    <form action="{{url("admin/brands/update",["id"=>$item->id])}}" method="post"><!--UPDATE-->
                                                        @csrf
                                                        <div class="mb-3">
                                                            <label for="image" class="fw-bolder col-form-label">Image:</label>
                                                            <input class="form-control" type="text" value="{{$item->logo}}" name="imgLogo" id="image">
                                                            {{-- <input type="file"  name="imgLogo" accept="image/png, image/jpeg">--}}
                                                            <a href="#">
                                                                <div class="d-flex">
                                                                    <div class="imgFile-View  mt-1">
                                                                        <img  src="{{$item->logo}}" alt="">
                                                                    </div>
                                                                    <div class="addImg ms-2 mt-1">
                                                                        <i class="fas fa-plus"></i>
                                                                    </div>
                                                                </div>
                                                            </a>

                                                        </div>                                                        <!----->
                                                        <div class="mb-3">
                                                            <label for="edit-name" class="fw-bolder col-form-label">Brand Name</label>
                                                            <!-- lấy thông tin cũ -->
                                                            <input type="text" name="name_edit" class="form-control"  value="{{$item->name}}" id="edit-name" >
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit"  class="btn btn-primary">Update Brand</button>
                                                        </div>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!--kết thúc form -->
                                </td>
                            </tr>
                        @endforeach


                        </tbody>
                    </table>


                    <!-- Form Thêm Sản Phẩm-->
                    <div id="add-brand" class="modal fade"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title fw-bolder " id="exampleModalLabel">ADD BRAND</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{url("/brands/save")}}" method="post">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="image" class="fw-bolder col-form-label">Image:</label>
                                            <input class="form-control" type="text" name="imgLogo" id="image">
                                            {{-- <input type="file"  name="imgLogo" accept="image/png, image/jpeg">--}}
                                            <a href="#">
                                                <div class="d-flex">
                                                    <div class="imgFile-View  mt-1">
                                                        <img  src="https://scontent.fhan3-2.fna.fbcdn.net/v/t1.6435-1/p200x200/127276256_1330240820660968_9032823244503499320_n.jpg?_nc_cat=100&ccb=1-3&_nc_sid=7206a8&_nc_ohc=KTqn6PtY6ecAX9eh-H_&_nc_ht=scontent.fhan3-2.fna&tp=6&oh=c15f6eaf41d4dd28009b660db8c03f6f&oe=60D357F7" alt="">
                                                    </div>
                                                    <div class="addImg ms-2 mt-1">
                                                        <i class="fas fa-plus"></i>
                                                    </div>
                                                </div>
                                            </a>

                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="fw-bolder col-form-label">Brand Name:</label>
                                            <input type="text" name="name" class="form-control" id="recipient-name" required>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Add Brand</button>
                                        </div>

                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--Kết Thúc Form Thêm Sản Phẩm -->





                    {{--                    <table class="table table-striped table-bordered">--}}
                    {{--                        <thead>--}}
                    {{--                        <th>ID</th>--}}
                    {{--                        <th>Name</th>--}}
                    {{--                        <th>Created at</th>--}}
                    {{--                        <th>Updated at</th>--}}
                    {{--                        </thead>--}}
                    {{--                        <tbody>--}}
                    {{--                        @foreach($categories as $item)--}}
                    {{--                            <tr>--}}
                    {{--                                <td>{{$item->id}}</td>--}}
                    {{--                                <td>{{$item->name}}</td>--}}
                    {{--                                <td>{{$item->created_at}}</td>--}}
                    {{--                                <td>{{$item->updated_at}}</td>--}}
                    {{--                            </tr>--}}
                    {{--                        @endforeach--}}
                    {{--                        </tbody>--}}
                    {{--                    </table>--}}

                </div>
            </div>
        </div>
    </section>

@endsection
