<div>
    <style>
    nav svg {
        height: 20px;
    }

    /* nav .hidden {
        display: block !important;
    } */
    </style>
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">All Categories </div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Category Name</th>
                                    <th scope="col">Slug</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                <tr>
                                    <th>
                                        {{$category->id}}
                                    </th>
                                    <th>
                                        {{$category->name}}
                                    </th>
                                    <th>
                                        {{$category->slug}}
                                    </th>
                                    <th></th>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$categories->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>