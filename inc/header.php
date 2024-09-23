<!doctype html>
<html lang="en" class="h-100" data-bs-theme="auto">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Holstcon AB - IT Consulting Services">
    <meta name="author" content="Holstcon AB">
    <title>Holstcon AB - Holst Consulting</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="inc/fav/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="inc/fav/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="inc/fav/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="inc/fav/site.webmanifest">
    <link rel="icon" href="inc/fav/favicon.ico">
    <meta name="theme-color" content="#7a7256">
    <link href="inc/css/style.css" rel="stylesheet">
    <link href="inc/fontawesome/v5-pro/css/all.css" rel="stylesheet">
    <link href="inc/fontawesome/v6-free/css/all.css" rel="stylesheet">
  </head>
  <body class="d-flex flex-column h-100">

<div class="container hc-dark-styles">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a title="Holstcon AB" href="index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <img alt="Holstcon AB Logo" src="inc/img/holstcon-logo-no-h.png" height="45px">
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="index.php" class="nav-link <?php if (stripos($_SERVER['REQUEST_URI'], 'index.php')){ echo ' active';} ?>" aria-current="page">Hem</a></li>
        <li class="nav-item"><a href="staffing.php" class="nav-link<?php if (stripos($_SERVER['REQUEST_URI'], 'staffing.php')){ echo ' active';} ?>">Personaluthyrning</a></li>
        <li class="nav-item"><a href="contact.php" class="nav-link<?php if (stripos($_SERVER['REQUEST_URI'], 'contact.php')){ echo ' active';} ?>">Kontakt</a></li>
      </ul>

    </header>
  </div>
