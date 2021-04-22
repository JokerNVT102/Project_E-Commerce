<div>
    <style>
    nav svg {
        height: 20px;
    }

    nav .hidden {
        display: inline-block !important;
    }
    </style>
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                All Products
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.addcategory')}}" class="btn btn-success pull-right">Add New</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">
                            <strong>Success </strong>{{Session::get('message')}}
                        </div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Stock</th>
                                    <th>Price</th>
                                    <th>Category</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                <tr>
                                    <th>
                                        {{$product->id}}
                                    </th>
                                    <th>
                                        <img src="{{asset('assets/images/products')}}/{{$product->image}}"
                                            alt="{{$product->name}}" width="60">
                                    </th>
                                    <th>
                                        {{$product->name}}
                                    </th>
                                    <th>
                                        {{$product->stock_status}}
                                    </th>
                                    <th>
                                        {{$product->regular_price}}
                                    </th>
                                    <th>
                                        {{$product->category->name}}
                                    </th>
                                    <th>
                                        {{$product->create_at}}
                                    </th>
                                    <th>

                                    </th>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$products->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>