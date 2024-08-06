<?php
function createJumbotron($title, $description, $buttonText = null, $buttonUrl = null) {
    $html = '<div class="jumbotron jumbotron-fluid text-white m-0 vw-100">';
    $html .= '<div class="text-center py-5">';
    $html .= '<h1 class="display-4 mt-5">' . htmlspecialchars($title) . '</h1>';
    $html .= '<p class="lead orange">' . htmlspecialchars($description) . '</p>';
    if ($buttonText && $buttonUrl) {
        $html .= '<a class="btn btn-primary btn-lg" href="' . htmlspecialchars($buttonUrl) . '" role="button">' . htmlspecialchars($buttonText) . '</a>';
    }
    $html .= '</div>';
    $html .= '</div>';
    return $html;
}
?>
