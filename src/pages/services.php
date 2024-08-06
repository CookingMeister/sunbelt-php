<style>
    .hero {
        background: #f8f9fa;
        padding: 50px 0;
        text-align: center;
    }
</style>

<?php
require_once '../components/jumbotron.php';

echo createJumbotron("Our Services", "Explore the comprehensive services we offer to support your software needs.");
?>

<div class="hero shadow" style="width: 75%; margin: -4rem auto 0; border-radius: 12px;">
    <div class="container">
        <img src="../public/img/engineer-server.jpg" alt="server" style="max-width: 150px; border-radius: 12px; margin: -4.5rem 0 1rem;">
        <h1>PL/B Web Server</h1>
        <p class="lead">The Easy to Use Web Software</p>
        <a href="#" class="btn btn-primary btn-lg m-1 px-5">Download</a>
        <a href="#" class="btn btn-primary btn-lg m-1 px-5">Buy Now</a>
    </div>
</div>

<div class="container my-5">
    <div class="row features">
        <div class="col-md-4 p-2">
            <div class="text-center mb-3 service-image mix">
                <img src="../public/img/laptop.jpg" alt="Feature 1" style="max-width: 200px; border-radius: 12px;">
            </div>
            <h3 class="text-center">Feature 1</h3>
            <p class="px-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="col-md-4 p-2">
            <div class="text-center mb-4 service-image mix">
                <img src="../public/img/professionals.jpg" alt="Feature 2" style="max-width: 200px; border-radius: 12px;">
            </div>
            <h3 class="text-center">Feature 2</h3>
            <p class="px-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="col-md-4 p-2">
            <div class="text-center mb-3 service-image mix">
                <img src="../public/img/database.jpg" alt="Feature 3" style="max-width: 200px; border-radius: 12px;">
            </div>
            <h3 class="text-center">Feature 3</h3>
            <p class="px-5 text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
    </div>
</div>
<div class="jumbotron jumbotron-fluid bg-primary text-white rounded" style="width:85%; margin: 0 auto;">
    <div class="container-fluid py-5 text-center">
        <img src="../public/img/engineer-server.jpg" alt="server" style="max-width: 150px; border-radius: 12px; opacity: 0.66;">
        <h1 class="display-4 mt-5">Hand-held QR Scanner</h1>
        <p class="lead orange mb-1 px-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error saepe nisi voluptas ipsam pariatur eius animi perspiciatis deserunt, aperiam nulla nam officiis deleniti eaque ex rem a expedita rerum odit.</p>
    </div>
</div>