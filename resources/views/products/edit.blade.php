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


    <div class="container form-control">
        <div class="row">
            <div class="card">
                <div class="card-header form-control">
                    <h3>Edit a Product</h3>
                </div>
                @if ($errors->any)
                    <div class="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="card-body form-control">
                    <form action="{{ route('product.update', ['product' => $product]) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-control">
                            <label for="form-control">Name</label>
                            <input type="text" name="name" value="{{ $product->name }}">
                        </div>
                        <div class="form-control mb-2">
                            <label for="form-control">QCY</label>
                            <input type="text" name="qcy" value="{{ $product->qcy }}">
                        </div>
                        <div class="form-control mb-2">
                            <label for="form-control">Price</label>
                            <input type="text" name="price" value="{{ $product->price }}">
                        </div>
                        <div class="form-control mb-3">
                            <label for="form-control">description</label>
                            {{-- <input type="text" name="description" value="description"> --}}
                            <textarea class="form-control" name="description" id="" cols="3" rows="4">{{ $product->description }}</textarea>
                        </div>
                        <div>
                            <button class="btn btn-primary" type="submit">Update</button>
                            <a href="{{ route('product.index') }}" class="btn btn-dark">Close</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
