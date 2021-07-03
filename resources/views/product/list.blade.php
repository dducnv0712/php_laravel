@extends("layout")
@section("page_title","Products")
@section("main")
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-4">
                <h1 class="m-3">Products</h1>
            </div><!-- /.col -->
            <div class="col-sm-4">
                <form action="#" method="post">
                    <div class="input-group mt-3 mb-3">
                        <label>
                            <input class="form-control" name="search">
                        </label>
                        <label hidden for="inputGroupSelect01"></label>
                        <select class="form-select" id="inputGroupSelect01">
                            <option selected>Choose...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <button class="btn btn-outline-success" type="submit">submit</button>

                    </div>
                </form>

            </div>
            <div class="col-sm-4">
                <div class="float-sm-right m-3">
                    <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#add-product" >New Product</button>
                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-12">

                    <table id="datatable"  class="table" style="width:100%" >

                        <thead class="table-light">
                        <tr>
                            <th>Num</th>
                            <th>Image</th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Brand</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Description</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th>Function</th>
                        </tr>
                        </thead>
                        <tbody  class="table-hover">
                        @foreach($products as $item)
                            <tr>
                                <th class="border-bottom" scope="row">{{$num++}}</th>
                                <td class="border-bottom"><img class="imgProductView" src="{{$item->image}}" alt=""></td>
                                <td class="border-bottom">{{$item->id}}</td>
                                <th class="border-bottom"><a title="Details" href="#">{{$item->name}}</a></th>
                                <td class="border-bottom"><a title="Cùng Thể Loại" href="admin/products/proBrands/{{$item->brand_id}}">{{$item->Brand->name}}</a></td>
                                <td class="border-bottom"><a title="Cùng Thể Loại" href="admin/products/proCategories/{{$item->category_id}}">{{$item->Category->name}}</a></td>

                                <td class="border-bottom">{{"$".$item->price}}</td>
                                <td class="border-bottom">{{$item->qty}}</td>
                                <td class="border-bottom "  >
                                <div class="desc">
                                {{$item->	description}}
                                </div>
                                </td>
                                <td class="border-bottom">{{$item->created_at}}</td>
                                <td class="border-bottom">{{$item->updated_at}}</td>


                                <td class="border-bottom">
                                    <!-- phím chức năng -->
                                    <div class="btn-group mt-2 shadow"  role="group" aria-label="Basic mixed styles example">

                                        <button   class="btn btn-sm  edit-btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#edit-product-{{$item->id}}" >Edit</button>
                                        <button   class="btn btn-sm  btn-danger" data-bs-toggle="modal" data-bs-target="#delete_product-{{$item->id}}">
                                            Delete
                                        </button>
                                    </div>


                                    <!--Popup Xóa Sản Phẩm -->
                                    <div class="modal fade" id="delete_product-{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title fw-bold" id="exampleModalLabel">Delete Product</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    You Want to delete product {{$item->name}}

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button onclick="window.location.href='{{url("admin/products/delete",["id"=>$item->id])}}'"  class="btn btn-danger">Delete Product</button>
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
                                                    <h4 class="modal-title fw-bolder justify-content-center" id="exampleModalLabel">Update Product {{$item->name}}</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">

                                                    <form action="{{url("admin/products/update",["id"=>$item->id])}}" method="post"><!--UPDATE-->
                                                        <!--Thẻ input ẩn để lấy ID sửa sản phẩm -->
                                                        @csrf
                                                        <div class="mb-3">
                                                            <input class="form-control" type="hidden" value="{{$item->id}}" name="id_edit">
                                                            <label for="image" class="fw-bolder col-form-label">Image:</label>
                                                            <input class="form-control" type="text" value="{{$item->image}}" name="fileImg_edit" id="image">
                                                            {{--                                            <input type="file"  name="imageFile" accept="image/png, image/jpeg">--}}
                                                            <a href="#">
                                                            <div class="d-flex">
                                                                <div class="imgFile-View  mt-1">
                                                                    <img  src="{{$item->image}}" alt="">
                                                                </div>
                                                                <div class="addImg ms-2 mt-1">
                                                                    <i class="fas fa-plus"></i>
                                                                </div>
                                                            </div>
                                                            </a>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="name" class="fw-bolder col-form-label">Product Name:</label>
                                                            <input type="text" value="{{$item->name}}" name="name_edit" class="form-control" id="name" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="price" class="fw-bolder col-form-label">Price:</label>
                                                            <input type="text" value="{{$item->price}}" name="price_edit" class="form-control" id="price" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="qty" class="fw-bolder col-form-label">Quantity:</label>
                                                            <input type="text" value="{{$item->qty}}" name="qty_edit" class="form-control" id="qty" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="Description" class="fw-bolder col-form-label">Description:</label>
                                                            <textarea  name="desc_edit" class="form-control" id="Description" required>{{$item->description}}</textarea>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Update Category</button>
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
                    <div id="add-product" class="modal fade"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" style="width:500px">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title fw-bolder " id="exampleModalLabel">ADD PRODUCT</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{url("admin/products/save")}}" method="post">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="image" class="fw-bolder col-form-label">Image:</label>
{{--                                            <input class="form-control" type="text" name="fileImg" id="image">--}}
                                            <input type="file"  name="imageFile" accept="image/png, image/jpeg">
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
                                            <label for="name" class="fw-bolder col-form-label">Product Name:</label>
                                            <input type="text" name="name" class="form-control" id="name"  required>
                                            @error("name")
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="category" class="fw-bolder col-form-label">Brand ID:</label>
                                            <select id="category"  name="brand_id" class="form-select"  aria-label="Default select example">
                                                <option disabled >Select Brand</option>
                                                @foreach($products as $item_brand)
                                                    <option value="{{$item_brand->Brand->id}}" >{{$item_brand->Brand->id."-".$item_brand->Brand->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="category" class="fw-bolder col-form-label">Category ID:</label>
                                            <select id="category_id"  name="category_id" class="form-select" aria-label="Default select example">
                                                <option disabled >Select Category</option>
                                                @foreach($products as $item_brand)
                                                    <option value="{{$item_brand->Category->id}}" >{{$item_brand->Category->id."-".$item_brand->Category->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="price" class="fw-bolder col-form-label">Price:</label>
                                            <input type="text" name="price" class="form-control"  id="price" required>
                                            @error("price")
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror

                                        </div>
                                        <div class="mb-3">
                                            <label for="qty" class="fw-bolder col-form-label">Quantity:</label>
                                            <input type="text" name="qty" class="form-control" id="qty" required>
                                            @error("qty")
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="Description" class="fw-bolder col-form-label">Description:</label>
                                            <textarea name="desc" class="form-control" id="Description"  required></textarea>
                                            @error("description")
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Add Category</button>
                                        </div>

                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--Kết Thúc Form Thêm Sản Phẩm -->

                </div>
            </div>
        </div>
    </section>
@endsection
