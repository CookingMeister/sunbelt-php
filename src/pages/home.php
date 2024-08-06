<?php
require_once '../components/jumbotron.php';

echo createJumbotron("We are Sunbelt Computer Software", "We make nice things");
?>

<div class="container d-flex justify-content-center align-items-center home-container" style="min-height: 100vh;">

    <div class="row g-4 mb-4">
        <div class="col-12">
            <div class="p-4 text-white rounded gradient-col gradient-info">
                <h3>Product 1</h3>
                <p>Description of Product 1</p>
                <a href="#" class="btn btn-outline-light hover-white">Learn More</a>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="p-4 text-white rounded gradient-col gradient-success text-center">
                <h3>Product 2</h3>
                <p>Description of Product 2</p>
                <a href="#" class="btn btn-outline-light hover-white">Learn More</a>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="p-4 text-white rounded gradient-col gradient-warning text-center">
                <h3>Product 3</h3>
                <p>Description of Product 3</p>
                <a href="#" class="btn btn-outline-light hover-white">Learn More</a>
            </div>
        </div>
        <div class="col-12">
            <div class="p-4 text-white rounded gradient-col gradient-danger text-center">
                <h3>Product 4</h3>
                <p>Description of Product 4</p>
                <a href="#" class="btn btn-outline-light hover-white">Learn More</a>
            </div>
        </div>
    </div>

</div>
<div class="jumbotron jumbotron-fluid bg-primary text-white rounded" style="width:85%; margin: 0 auto;">
    <div class="container-fluid py-5 text-center">
        <img src="../public/img/engineer-server.jpg" alt="server" style="max-width: 150px; border-radius: 12px; opacity: 0.66;">
        <h1 class="display-4 mt-5">A Shiny Thing</h1>
        <p class="lead orange mb-1 px-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error saepe nisi voluptas ipsam pariatur eius animi perspiciatis deserunt, aperiam nulla nam officiis deleniti eaque ex rem a expedita rerum odit.</p>
    </div>
</div>
