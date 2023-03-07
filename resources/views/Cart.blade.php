<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link href="css/cart.css" rel="stylesheet">
</head>

<div class="card">
    <div class="row ">
        <div class="col-md-8 cart position-relative">
            <div class="title">
                <div class="row">
                    <div class="col">
                        <h4><b>Shopping Cart</b></h4>
                    </div>
                    <div class="col align-self-center text-right text-muted">{{ $items->count() }} products</div>
                </div>
            </div>
            <div class="m-4 position-absolute top-0 end-0"><a href="/Shope"><i class="fa-solid fa-backward"
                        style="font-size: 40px;"></i></a>

            </div>
            @foreach ($items as $item)
            <div class="row border-top border-bottom">
                <div class="row  main align-items-center">
                    <div class="col-2"><img class="img-fluid" src="Image/{{ $item['attributes'][0] }}"></div>
                    <div class="col d-flex flex-row">
                        <p class="fs-4  me-5">{{ $item['name'] }} </p>
                        <p class="fs-4  ">&euro;{{ $item['price'] }}</p>
                    </div>
                    <form class="me-1 mt-2 buttons d-flex flex-row col " action="/updatecart" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $item['id'] }}">
                        <input type="number" class="text-center mx-2" name="qty" value="{{ $item['quantity'] }}">
                        <input class="btn-primary mx-2" type="submit" value="Edite">

                    </form>
                    <form class="mt-2 buttons d-flex flex-row col " action="/removecart" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $item['id'] }}">
                        <input class="btn-danger mx-2" type="submit" value="delete" style="width: 60px;">
                    </form>


                </div>
            </div>
            @endforeach

        </div>
        <div class="col-md-4 summary">
            <div>
                <h5><b>Summary</b></h5>
            </div>
            <hr>
            <div class="row">
                <div class="col" style="padding-left:0;">{{ $items->count() }} products</div>

            </div>
            <form method="post" action="buy">
                @csrf
                <p>personal informations </p>
                <input name="phone" placeholder="Enter your phone number" required>
                <input name="adress" placeholder="Enter your adress" required>

                <p>GIVE CODE</p>
                <input name="cart" id="code" placeholder="Enter your code" required pattern="[0-9]{16}">
                <input type="submit" class="btn" value="Buy Now">
            </form>
            <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                <div class="col">TOTAL PRICE</div>
                <div class="col text-right">&euro; {{ $items->count() != 0 ? $item['attributes'][1] : 0 }}</div>
            </div>

        </div>
    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://kit.fontawesome.com/692381961f.js" crossorigin="anonymous"></script>