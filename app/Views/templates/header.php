<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel = "icon" href="images/favicon.ico" type = "image/x-icon">
    <title>GoodBUY</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <title></title>

  </head>
  <body>
    <?php
      $uri = service('uri');
     ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-info bg-gradient">
      <div class="container">
      <a class="navbar-brand" href="/home">
          <img src="images/GOODBUY-logo.png" width="120" height="60">
        </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <?php if (session()->get('isLoggedIn')): ?>
        <ul class="navbar-nav mr-auto">
          <li class="nav-item <?= ($uri->getSegment(1) == 'dashboard' ? 'active' : null) ?>">
            <a class="nav-link"  href="/dashboard"><b>Dashboard</b></a>
          </li>
          <li class="nav-item <?= ($uri->getSegment(1) == 'profile' ? 'active' : null) ?>">
            <a class="nav-link" href="/profile"><b>Profile</b></a>
          </li>
        </ul>
        <ul class="navbar-nav my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="/logout"><b>Logout</b></a>
          </li>
        </ul>
      <?php else: ?>
        <ul class="navbar-nav mr-auto">
          <li class="nav-item <?= ($uri->getSegment(1) == '' ? 'active' : null) ?>">
            <a class="nav-link" href="/"><b>Login</b></a>
          </li>
          <li class="nav-item <?= ($uri->getSegment(1) == 'register' ? 'active' : null) ?>">
            <a class="nav-link" href="/register"><b>Register</b></a>
          </li>
        </ul>
        <?php endif; ?>
      </div>
      </div>
    </nav>
