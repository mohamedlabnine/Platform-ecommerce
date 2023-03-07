<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link href="../css/product.css" rel="stylesheet">

</head>



<div class="container mt-5 mb-5">
    <div class="card">
        <div class="row g-0">
            <div class="col-md-6 border-end">
                <div class="d-flex flex-column justify-content-center">
                    <div class="main_image"> <img src="../Image/{{ $product->image }}" id="main_product_image"
                            width="350"> </div>
                    <div class="thumbnail_images">
                        <ul id="thumbnail">
                            <li><img src="../Image/{{ $product->image }}" width="70">
                            </li>
                            <li><img src="../Image/{{ $product->image }}" width="70">
                            </li>
                            <li><img src="../Image/{{ $product->image }}" width="70">
                            </li>
                            <li><img src="../Image/{{ $product->image }}" width="70">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-3 right-side">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3>{{ $product->name }}</h3> <span class="heart"><i class='bx bx-heart'></i></span>
                    </div>
                    <div class="mt-2 pr-3 content">
                        <p>{{ $product->description }}</p>
                    </div>
                    <h3>${{ $product->price }}</h3>
                    <div class="ratings d-flex flex-row align-items-center">
                        <div class="d-flex flex-row"> <i class='bx bxs-star'></i> <i class='bx bxs-star'></i> <i
                                class='bx bxs-star'></i> <i class='bx bxs-star'></i> <i class='bx bx-star'></i>
                        </div>
                        <span>{{ $product->price * 3}} reviews</span>
                    </div>
                    <div class="mt-5"> <span class="fw-bold">Color</span>
                        <div class="colors">
                            <ul id="marker">
                                <li id="marker-1"></li>
                                <li id="marker-2"></li>
                                <li id="marker-3"></li>
                                <li id="marker-4"></li>
                                <li id="marker-5"></li>
                            </ul>
                        </div>
                    </div>
                    <form class="buttons d-flex flex-row " action="/addcart" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $product->id }}">
                        <input type="hidden" name="name" value="{{ $product->name }}">
                        <input type="hidden" name="image" value="{{ $product->image }}">
                        <input type="hidden" name="price" value="{{ $product->price }}">

                        <div class="qty m-1">
                            <button type="button" class="btn btn-primary" style="width: 30px ; height : 30px"
                                onclick='moin()'>-</button>
                            <input type="number" class="m-3 text-center" id="qty" name="qty" value="1">
                            <button type="button" class="btn btn-primary" style="width: 30px; height:30px;"
                                onclick='plus()'>+</button>
                        </div>
                        <input type="submit" class="btn btn-outline-primary" value="Add to Cart">

                    </form>

                    <div class="search-option"> <i class='bx bx-search-alt-2 first-search'></i>
                        <div class="inputs"> <input type="text" name=""> </div> <i class='bx bx-share-alt share'></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://kit.fontawesome.com/692381961f.js" crossorigin="anonymous"></script>

<script>
function plus() {
    const input = document.getElementById("qty");
    input.value = parseInt(input.value) + 1;
}

function moin() {
    const input = document.getElementById("qty");
    input.value = parseInt(input.value) - 1;
}
</script>