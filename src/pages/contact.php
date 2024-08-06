<?php
require_once '../components/jumbotron.php';

echo createJumbotron("Contact Us", "Get in touch with our team for inquiries and support.");
?>
<div id="contact-form" class="container container-fluid border border-dark p-0 py-4 mb-5 bg-light" style="max-width: 80%; border-radius: 12px; margin-top: -5rem;">
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
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

</div>