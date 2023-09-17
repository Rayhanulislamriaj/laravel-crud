<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Crud</title>
</head>

<body>
    {{-- <div class="conatiner form-control">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>View Product</h2>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-primary">
                                <thead>
                                    <tr>
                                        <th scope="col">Column 1</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="">
                                        <td scope="row">R1C1</td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <th scope="col">Column 1</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="">
                                        <td scope="row">R1C1</td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div> --}}



    <div class="container form-control mt-5">
        <div class="row justify-content-center align-items-center g-2">
            <h2 class="text-center">View all Data</h2>
        </div>
        <div class="row bg-info border">
            <div class="col-6">Name</div>
            <div class="col-6">{{ $product->name }}</div>
            <div class="w-100"></div>
            <div class="col-6">Price</div>
            <div class="col-6">{{ $product->price }}</div>
            <div class="w-100"></div>
            <div class="col-6">QCY</div>
            <div class="col-6">{{ $product->qcy }}</div>
            <div class="w-100"></div>
            <div class="col-6">Description</div>
            <div class="col-6">{{ $product->description }}</div>
        </div>
        <div>
            <a href="{{ route('product.index') }}" class="btn btn-dark mt-2">Go to Product List</a>
        </div>
    </div>
</body>

</html>
