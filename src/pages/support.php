<?php
require_once '../components/jumbotron.php';

echo createJumbotron("Support", "Access our customer support resources and documentation.");
?>

<div class="container my-5">
    <div class="d-flex justify-content-center">
        <img src="img/scslarge.png" alt="logo" class="bg-light shadow" style="max-width: 200px; border-radius: 12px; margin: -8rem 0 2rem !important;">
    </div>
    <div class="row">
        <div class="col-md-6 mx-auto">
            <h2 class="mb-4 text-center">Support Resources</h2>
            <ul class="list-group support-list">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Documentation
                    <a href="#" class="btn btn-primary btn-sm px-3">View</a>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    FAQs
                    <a href="#" class="btn btn-primary btn-sm px-3">View</a>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Knowledge Base
                    <a href="#" class="btn btn-primary btn-sm px-3">Explore</a>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Community Forums
                    <a href="#" class="btn btn-primary btn-sm px-3">Join</a>
                </li>
            </ul>
        </div>
    </div>
</div>