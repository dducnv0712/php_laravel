@extends("admin_views.layout")
@section("page_title","Feedback")
@section("main")
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-3">Feedback</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">

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
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Feedback</th>
                            <th>Created at</th>
                            <th>Updated at</th>

                        </tr>
                        </thead>
                        <tbody class="table-hover">
                        @foreach($feedback as $item)
                            <tr >
                                <th class="border-bottom"  scope="row">{{$num++}}</th>
                                <th class="border-bottom"><a>{{$item->name}}</a></th>
                                <th class="border-bottom"><a>{{$item->phone}}</a></th>
                                <th class="border-bottom"><a>{{$item->email}}</a></th>
                                <th class="border-bottom desc"><a>{{$item->feedback}}</a></th>
                                <td class="border-bottom">{{$item->created_at}}</td>
                                <td class="border-bottom">{{$item->updated_at}}</td>
                        @endforeach


                        </tbody>
                    </table>



                </div>
            </div>
        </div>
    </section>
@endsection

