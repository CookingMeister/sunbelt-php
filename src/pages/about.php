<style>
    body {
        background-color: rgba(255, 128, 0, 0.5);
    }
</style>

<?php
require_once '../components/jumbotron.php';

echo createJumbotron("About Us", "Learn about Sunbelt Computer Software's history and mission.");
?>

<div class="container mb-3" style="margin-top: -3rem; margin-bottom: 9rem !important;">
    <div class="card shadow-lg mx-auto px-5 py-2" style="max-width: 80%; border-radius: 15px; background-color:bisque;">
        <div class="card-body text-dark" style="background-color: bisque;">

            <h2 class="card-title">Welcome to Sunbelt Computer Software</h2>
            <div class="about d-flex">
                <img src="../public/img/sunnyCity.jpg" alt="city" class="m-1" style="max-height: 350px; max-width: 250px; border-radius: 12px;">
                <div>
                    <p class="card-text px-3">
                    Sunbelt Computer Software is a leading provider of innovative software solutions. Founded in 1985, we have been at the forefront of technological advancements, delivering cutting-edge products to businesses and individuals alike. Our mission is to empower our clients with robust, user-friendly software that enhances productivity and drives success.
                    </p>
                    <p class="card-text px-3">
                    With a team of dedicated professionals and a commitment to excellence, we continue to push the boundaries of what's possible in the world of software development. From custom enterprise solutions to consumer applications, Sunbelt Computer Software is your trusted partner in the digital age.
                    </p>
                </div>

            </div>
            
        </div>
    </div>
</div>
