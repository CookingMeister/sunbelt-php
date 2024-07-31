<?php include 'components/header.php'; ?>

<main id="main-content" class="pt-4" style="background-color: aliceblue; height: 79vh;">
    <!-- Content will be loaded here dynamically -->
</main>

<?php include 'components/footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('.nav-link').click(function(e) {
        e.preventDefault();
        let page = $(this).attr('href').replace('.php', '');
        let title = $(this).text();
        $('#main-content').load('pages/' + page + '.php', function() {
            document.title = title + ' - Sunbelt Software';
        });
    });
    
    // Load home page by default
    $('#main-content').load('pages/index.php', function() {
        document.title = 'Home - Sunbelt Software';
    });
});
</script>

