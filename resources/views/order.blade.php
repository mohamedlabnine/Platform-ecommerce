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


</head>



<div class="container-fluid">
    <div class="row">

        @include('sidebar')

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

            <div class="x">
                <h1>Orders</h1><br>

                <h2> Orders LIST</h2>
                <br>
                <hr>
                <br>

                <table class="content-table table">
                    <thead>
                        <tr>
                            <th>Order id</th>
                            <th>Order status</th>
                            <th>Product name</th>
                            <th>Product Quantity</th>
                            <th>User id</th>
                            <th>User phone</th>
                            <th>User Adress</th>
                            <th>Order date</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)
                        <tr>
                            <td><strong>{{ $order->id }}</strong></td>
                            <td><strong>{{ $order->status }} </strong></td>
                            <td><strong>{{ $order->name_product }} </strong></td>
                            <td><strong>{{ $order->quntity_product }} </strong></td>
                            <td><strong>{{ $order->id_client }}</strong></td>
                            <td><strong>{{ $order->phone }}</strong></td>
                            <td><strong>{{ $order->adress }}</strong></td>
                            <td><strong>{{ $order->created_at }}</strong></td>
                            <td><a href="edit_order/{{ $order->id  }}" class="btn btn-outline-primary">Edit</a>
                            </td>
                            <td><a href="delete_order/{{ $order->id  }}" class="btn btn-outline-danger">Delete</a>
                            </td>


                        </tr>
                        @endforeach
                    </tbody>

                </table>
                <div class=" d-flex justify-content-center">
                    <div class="text-center ">
                        {!! $orders->links() !!}
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