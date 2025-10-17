<?php
/**
 * Golden Deer Brasil - Professional B2G/B2B Website
 * Main entry point for all requests
 */

// Start session
session_start();

// Set error reporting for production
error_reporting(E_ALL & ~E_NOTICE);
ini_set('display_errors', 0);

// Include configuration
require_once 'includes/config.php';
require_once 'includes/functions.php';

// Get requested page
$page = isset($_GET['page']) ? sanitize_input($_GET['page']) : 'home';
$language = isset($_GET['lang']) ? $_GET['lang'] : 'pt';

// Validate language
if (!in_array($language, ['pt', 'en'])) {
    $language = 'pt';
}

// Set language in session
$_SESSION['language'] = $language;

// Include language file
if (file_exists("includes/lang/{$language}.php")) {
    require_once "includes/lang/{$language}.php";
} else {
    require_once "includes/lang/pt.php";
}

// Handle contact form submission
if ($_POST && isset($_POST['form_type'])) {
    require_once 'includes/form_handler.php';
    $form_result = handleFormSubmission($_POST);
}

// Define valid pages
$valid_pages = [
    'home',
    'solutions-municipalities', 
    'solutions-airports',
    'solutions-corporations',
    'technology',
    'projects',
    'about',
    'financing',
    'resources',
    'contact'
];

// Validate requested page
if (!in_array($page, $valid_pages)) {
    $page = 'home';
}

// Include header
include 'includes/header.php';

// Include requested page content
$page_file = "pages/{$page}.php";
if (file_exists($page_file)) {
    include $page_file;
} else {
    include 'pages/404.php';
}

// Include footer
include 'includes/footer.php';
?>