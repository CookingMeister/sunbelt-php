<?php
require_once '../components/jumbotron.php';

echo createJumbotron("Contact Us", "Get in touch with our team for inquiries and support.");
?>

<div class="d-flex justify-content-center">
    <img src="img/scslarge.png" alt="logo" class="bg-light shadow" style="max-width: 200px; border-radius: 12px; margin: -5rem 0 3rem !important;">
</div>

<div id="contact-form" class="container container-fluid border border-dark p-0 py-4 mb-5 bg-light" style="max-width: 80%; border-radius: 12px;">
    <div class="row justify-content-center">
        <div class="col-xs-6 col-md-8 col-8 mx-auto">
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email">
                </div>
                <div class="mb-3">
                    <label for="subject" class="form-label">Subject</label>
                    <input type="text" class="form-control" id="subject" placeholder="Enter subject">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" rows="5" placeholder="Enter your message"></textarea>
                </div>
                <button type="submit" class="btn btn-primary px-4">Submit</button>
            </form>
        </div>
    </div>

</div>