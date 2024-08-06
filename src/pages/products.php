<?php
require_once '../components/jumbotron.php';

echo createJumbotron("Our Products", "We make nice things");
?>

<div class="container d-flex justify-content-center align-items-center mb-3" style="min-height: 100vh;">

    <div class="row g-4 mt-1 mb-4">
        <div class="col-12">
            <div class="p-4 text-white rounded gradient-col gradient-info position-relative">
                <div>
                    <h3 class="text-start px-5">Product 1</h3>
                    <p class="text-start px-5">Description of Product 1</p>
                    <a href="#" class="btn btn-outline-light hover-white text-start mx-5">Learn More</a>
                </div>
                <img src="../public/img/laptop.jpg" alt="logo" class="img-fluid position-absolute product-img" style="max-width: 120px; right: 10%; top: 50%; transform: translateY(-50%);">
            </div>
        </div>
        <div class="col-sm-12 col-md-6">
            <div class="p-4 text-white rounded gradient-col gradient-success text-center">
                <img src="../public/img/professionals.jpg" alt="logo" class="img-fluid mb-2 product-img" style="max-width: 150px;">
                <h3>Product 2</h3>
                <p>Description of Product 2</p>
                <a href="#" class="btn btn-outline-light hover-white">Learn More</a>
            </div>
        </div>
        <div class="col-sm-12 col-md-6">
            <div class="p-4 text-white rounded gradient-col gradient-warning text-center">
                <img src="../public/img/database.jpg" alt="logo" class="img-fluid mb-2 product-img" style="max-width: 150px;">
                <h3>Product 3</h3>
                <p>Description of Product 3</p>
                <a href="#" class="btn btn-outline-light hover-white">Learn More</a>
            </div>
        </div>
        <div class="col-12">
            <div class="p-4 text-white rounded gradient-col gradient-danger text-end position-relative">
                <div>
                    <h3 class="mx-5">Product 4</h3>
                    <p class="mx-5">Description of Product 4</p>
                    <a href="#" class="btn btn-outline-light hover-white mx-5">Learn More</a>
                </div>
                <img src="../public/img/engineer-server.jpg" alt="logo" class="img-fluid product-img position-absolute" style="max-width: 120px; left: 15%; top: 50%; transform: translateY(-50%);">
            </div>
        </div>
    </div>

</div>
