<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Admin</title>
    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
    <link href="css/dashboard.rtl.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/product_admin.css" rel="stylesheet">


</head>



<div class="container-fluid">
    <div class="row">

        @include('sidebar')

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

            <div class="x">
                <h1>Product</h1><br>

                <h2> Product LIST</h2>
                <br>
                <hr>
                <br>

                <table class="content-table table">
                    <thead>
                        <tr>
                            <th>Product id</th>
                            <th>Product image</th>
                            <th>Product name</th>
                            <th>Product quantity</th>
                            <th>Product price</th>
                            <th>Product offre</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td><strong>{{ $product->id }}</strong></td>
                            <td><strong><img width="60px" height="60px" src="Image/{{ $product->image }} "></strong>
                            </td>
                            <td><strong>{{ $product->name }} </strong></td>
                            <td><strong>{{ $product->quantity }} </strong></td>
                            <td><strong>{{ $product->price }}</strong></td>
                            <td><strong>{{ $product->offre }}</strong></td>
                            <td><a data-bs-toggle="modal" data-bs-target="#{{ $product->name  }}{{ $product->id  }}"
                                    class="btn btn-outline-primary">Edit</a>
                            </td>
                            <td><a href="delete_product/{{ $product->id  }}" class="btn btn-outline-danger">Delete</a>
                            </td>
                        </tr>
                        <div class="modal fade" id="{{ $product->name  }}{{ $product->id  }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-primary" id="exampleModalLabel">Edit Product</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>

                                    <div class="modal-body">
                                        <form method="post" action="edit_product/{{ $product->id  }}"
                                            enctype="multipart/form-data">
                                            @csrf

                                            <div class="d-flex flex-wrap">

                                                <div class="form-group m-2">
                                                    <label class="control-label text-primary" for="Name">PRODUCT
                                                        Name</label>

                                                    <input id="Name" name="Name" value="{{ $product->name }}"
                                                        class="form-control input-md" required="" type="text">

                                                </div>
                                                <div class="form-group m-2">
                                                    <label class=" control-label text-primary" for="Price">PRODUCT
                                                        Price</label>

                                                    <input id="Price" name="Price" value="{{ $product->price }}"
                                                        class="form-control input-md" required="" type="text">

                                                </div>
                                                <div class="form-group m-2">
                                                    <label class=" control-label text-primary" for="Category">PRODUCT
                                                        Category</label>
                                                    <select id="Category" name="Category" class="form-control  "
                                                        required="" type="text">
                                                        @if( $product->Category == "Athletic")
                                                        <option selected>Athletic</option>
                                                        @else
                                                        <option>Athletic</option>
                                                        @endif
                                                        @if($product->Category == "Food")
                                                        <option selected>Food</option>
                                                        @else
                                                        <option>Food</option>
                                                        @endif
                                                        @if($product->Category == "clothes")
                                                        <option selected>clothes</option>
                                                        @else
                                                        <option>clothes</option>
                                                        @endif
                                                        @if($product->Category == "Electronic")
                                                        <option selected>Electronic</option>
                                                        @else
                                                        <option>Electronic</option>
                                                        @endif
                                                        @if($product->Category == "school")
                                                        <option selected>school</option>
                                                        @else
                                                        <option>school</option>
                                                        @endif
                                                        @if($product->Category == "medically")
                                                        <option selected>medically</option>
                                                        @else
                                                        <option>medically</option>
                                                        @endif

                                                    </select>


                                                </div>
                                                <div class="form-group m-2">
                                                    <label class=" control-label text-primary" for="Offre">PRODUCT
                                                        Offre</label>

                                                    <input id="Offre" name="Offre" value="{{ $product->offre }}"
                                                        class="form-control input-md" required="" type="number">
                                                </div>
                                                <div class="form-group m-2">
                                                    <label class="control-label text-primary" for="Quantity">PRODUCT
                                                        Quantity</label>

                                                    <input id="Quantity" name="Quantity" class="form-control input-md"
                                                        required="" value="{{ $product->quantity }}" type="number">
                                                </div>
                                                <div class="form-group m-2">
                                                    <label class="control-label text-primary" for="image">PRODUCT
                                                        Image</label>
                                                    <input id="image" name="Image" class="form-control input-md"
                                                        type="file">
                                                </div>

                                                <div class="form-group m-2">
                                                    <label class="control-label text-primary" for="Description">PRODUCT
                                                        Description</label>

                                                    <textarea name="des" id="Description" cols="40"
                                                        class="form-control input-md"
                                                        rows="3">{{ $product->description }}  </textarea>
                                                </div>


                                            </div>
                                            <input type="submit" class="btn btn-outline-primary" value="Edit">
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        @endforeach
                    </tbody>

                </table>
                <div class=" d-flex justify-content-center">
                    <div class="text-center ">
                        {!! $products->links() !!}
                    </div>

                </div>

        </main>
    </div>
</div>

<script src=" ../assets/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
    integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
    integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
</script>
<script src="js/dashboard.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://kit.fontawesome.com/692381961f.js" crossorigin="anonymous">
</script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js">