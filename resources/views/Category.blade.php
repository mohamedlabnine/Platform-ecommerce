@include('navbar')

<head>
    <title>Shope</title>
    <link rel="stylesheet" href="../css/Shope.css">

</head>
<div>
    <div class="sidenav bg-light">
        <h3 class="fw-bold ms-4 my-5">Categorys : </h3>
        <ul class="mt-5">
            <li style="list-style:none;"><a class="font-weight-bold" href="/Category/Athletic">
                    <p class="font-monospace">Athletic</p>
                </a></li>
            <li style="list-style:none;"><a href="/Category/Food">
                    <p class="font-monospace">Food</p>
                </a></li>
            <li style="list-style:none;"><a href="/Category/clothes">
                    <p class="font-monospace">clothes</p>
                </a></li>
            <li style="list-style:none;"> <a href="/Category/Electronic">
                    <p class="font-monospace">Electronic</p>
                </a></li>
            <li style="list-style:none;"><a href="/Category/school">
                    <p class="font-monospace">school</p>
                </a></li>
            <li style="list-style:none;"><a href="/Category/medically">
                    <p class="font-monospace">medically</p>
                </a></li>
        </ul>
    </div>

    <div class="main">
        <section class="containerw-100 py-3 ">

            <div class="container m-4 p-4 row   justify-content-center  ">

                @foreach ($products as $product)
                <div class="col-lg-3 col-md-6 m-4">
                    <div class="card " style="height: 400px;">
                        <div class="view overlay">
                            <img src="../Image/{{ $product->image }}" class="card-img-top" alt="" height="100%">
                            <a>
                                <div class="mask rgba-white-slight">
                                </div>
                            </a>
                        </div>

                        <div class="card-body text-center">

                            <h5>
                                <strong>
                                    <a type="button" href="../product/{{ $product->id }}"
                                        class="btn btn-outline-primary">

                                        <b> Go To Details </b>
                                    </a>
                                </strong>
                            </h5>

                            <h4 class="font-weight-bold blue-text">
                                <strong>{{ $product->price }}$</strong>
                            </h4>

                        </div>



                    </div>
                </div>

                @endforeach


            </div>

        </section>
    </div>
</div>