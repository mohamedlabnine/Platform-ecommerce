<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item my-3">
                <a data-bs-toggle="modal" data-bs-target="#add" class="nav-link fs-3" href="add">
                    <i class="fa-solid fa-plus"></i>
                    Add
                </a>
            </li>
            <li class="nav-item my-3">
                <a class="nav-link fs-4" href="order">
                    <i class="fa-sharp fa-solid fa-sort "></i>
                    Orders
                </a>
            </li>
            <li class="nav-item my-3">
                <a class="nav-link fs-4" href="products">
                    <i class="fa-solid fa-cart-shopping "></i>
                    Products
                </a>
            </li>
            <li class="nav-item my-3">
                <a class="nav-link fs-4" href="client">
                    <i class="fa-solid fa-users"></i>
                    Customers
                </a>
            </li>

            <li class="nav-item my-3">
                <a class="nav-link fs-4" href="help">
                    <i class="fa-solid fa-circle-info "></i>
                    help
                </a>
            </li>
            <li class="nav-item my-3">
                <a class="nav-link fs-4" href="logout_admin">
                    <i class="fa-solid fa-right-from-bracket "></i>
                    logout
                </a>
            </li>
        </ul>

</nav>

<div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary" id="exampleModalLabel">Add Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form method="post" action="add_product" enctype="multipart/form-data">
                    @csrf

                    <div class="d-flex flex-wrap">

                        <div class="form-group m-2">
                            <label class="control-label text-primary" for="Name">PRODUCT
                                Name</label>

                            <input id="Name" name="Name" class="form-control input-md" required="" type="text">

                        </div>
                        <div class="form-group m-2">
                            <label class=" control-label text-primary" for="Price">PRODUCT
                                Price</label>

                            <input id="Price" name="Price" class="form-control input-md" required="" type="number">

                        </div>
                        <div class="form-group m-2">
                            <label class=" control-label text-primary" for="Category">PRODUCT
                                Category</label>

                            <select id="Category" name="Category" class="form-control input-md " required=""
                                type="text">
                                <option>Athletic</option>
                                <option>Food</option>
                                <option>clothes</option>
                                <option>Electronic</option>
                                <option>school</option>
                                <option>medically</option>
                            </select>
                        </div>
                        <div class="form-group m-2">
                            <label class=" control-label text-primary" for="Offre">PRODUCT
                                Offre</label>

                            <input id="Offre" name="Offre" class="form-control input-md" required="" type="number">
                        </div>
                        <div class="form-group m-2">
                            <label class="control-label text-primary" for="Quantity">PRODUCT
                                Quantity</label>

                            <input id="Quantity" name="Quantity" class="form-control input-md" required=""
                                type="number">
                        </div>
                        <div class="form-group m-2">
                            <label class="control-label text-primary" for="image">PRODUCT
                                Image</label>
                            <input id="image" name="Image" class="form-control input-md" required="" type="file">
                        </div>

                        <div class="form-group m-2">
                            <label class="control-label text-primary" for="Description">PRODUCT
                                Description</label>

                            <textarea name="des" id="Description" cols="40" class="form-control input-md"
                                rows="3">  </textarea>
                        </div>


                    </div>
                    <input type="submit" class="btn btn-outline-primary" value="Add">
                </form>
            </div>

        </div>
    </div>
</div>