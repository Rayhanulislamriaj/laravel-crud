<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" href="">
    <title>Laravel Crud</title>
</head>

<body>
    <div class="container form-control mt-5">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    <div class="card-header text-center">
                        <h3>Product Table</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table
                                class="table table-striped
                                table-hover
                                table-borderless
                                table-primary
                                align-middle  text-center">
                                <thead class="table-light">
                                    <caption>
                                        <b>
                                            <a text-decoration="none" href="{{ route('product.create') }}">Product
                                                Create</a>
                                        </b>
                                    </caption>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>QCY</th>
                                        <th>Description</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                    @foreach ($products as $product)
                                        <tr class="table-primary">
                                            <td scope="row">{{ $product->id }}</td>
                                            <td scope="">{{ $product->name }}</td>
                                            <td>{{ $product->price }}</td>
                                            <td>{{ $product->qcy }}</td>
                                            <td>{{ Illuminate\Support\Str::limit($product->description, 20) }}</td>
                                            <td>
                                                <a href="{{ route('product.view', $product->id) }}"><b>View</b></a>
                                                <a href="{{ route('product.edit', $product->id) }}"><b>Edit</b></a>
                                                <form action="{{ route('product.destroy', $product->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <input class="btn btn-hidden text-danger text-bold text-hover"
                                                        type="submit" value="delete">
                                                    {{-- <a href=""></a> --}}
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                                <tfoot>

                                </tfoot>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
