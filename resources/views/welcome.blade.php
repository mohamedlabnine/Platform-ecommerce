@include('navbar')


<head>
    <title>Exprese Shope</title>
    <link rel="stylesheet" href="css/Home.css">

</head>

<section id="section" class="position-relative">
    <div class="position-absolute top-50 ms-4 ps-3">
        <p>NEW ARRIVALES</p>
        <h3><strong class="text-info">Best Prices</strong> This Season</h3>
        <p>Eshop offers the best products of the most offordables price</p>

        @if(session()->has('client_id'))
        <a class="btn btn-secondary" href="/Shope" role="button">Shope Now</a>

        @else

        <a class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal" href="/Shope"
            role="button">Shope Now</a>

        @endif
    </div>
</section>

<section id="New-section" class="container d-flex w-100 py-3">
    <img class="m-3" src="Image/nike.png" width="20%" height="20%" alt="">
    <img class="m-3" src="Image/Mothercare.png" width="20%" height="20%" alt="">
    <img class="m-3" src="Image/newyorker.jpeg" width="20%" height="20%" alt="">
    <img class="m-3" src="Image/coach.png" width="20%" height="20%" alt="">
</section>

<section class="container d-flex w-100 py-3 justify-content-center">
    <div class="text-center rounded col-3 m-4 border bg-secondary text-light">
        <i class="fa-solid fa-truck-fast m-3" style="font-size: 50px;"></i>
        <h1>Fast Delivery</h1>
        <p class="m-3">your products can be transported in a period between 8h and 1d</p>
    </div>
    <div class="text-center rounded bg-secondary m-4 col-3 border text-light">
        <i class="fa-solid fa-thumbs-up m-3" style="font-size: 50px;"></i>
        <h1>Best Quality</h1>
        <p class="m-3">our products are the first in the world</p>
    </div>

    <div class="text-center rounded bg-secondary m-4 col-3 border text-light">
        <i class="fa-solid fa-lock m-3" style="font-size: 50px;"></i>
        <h1>Security</h1>
        <p class="m-3">Our system is secure. You can place your data securely</p>

    </div>
</section>

<section class="containerw-100 py-3 ">
    <div class="text-center">
        <h1 class="text-primary">Our Product</h1>
    </div>
    <div class="container m-4 p-4 row  justify-content-center  ">
        <div class=" m-3  " style="width: 18rem; height : 250px">
            <img src="Image/1.png" width="100%" height="100%">
        </div>
        <div class=" m-3 " style="width: 18rem; height : 250px">
            <img src="Image/2.webp" width="100%" height="100%">
        </div>
        <div class=" m-3 " style="width: 18rem; height : 250px">
            <img src="Image/foot.png" width="100%" height="100%">
        </div>
        <div class=" m-3" style="width: 18rem; height : 250px">
            <img src="Image/nice.webp" width="100%" height="100%">
        </div>
        <div class=" m-3" style="width: 18rem; height : 250px">
            <img src="Image/3.webp" width="100%" height="100%">
        </div>
        <div class=" m-3" style="width: 18rem; height : 250px">
            <img src="Image/pompe.jpeg" width="100%" height="100%">
        </div>

        <div class=" m-3" style="width: 18rem; height : 250px">
            <img src="Image/img1.jpg" width="100%" height="100%">
        </div>
    </div>

</section>


@include('footer')