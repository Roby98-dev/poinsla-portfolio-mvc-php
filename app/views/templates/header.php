<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='icon' href='<?= BASEURL; ?>/assets/images/poinsla-icon.JPG' type='image/x-icon' />
  <title><?= $data['title']; ?> | Poinsla</title>
  <link rel="stylesheet" href="<?= BASEURL; ?>/assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= BASEURL; ?>/assets/css/main-front.css">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-success">
    <div class="container">
      <a class="navbar-brand logo text-uppercase" href="<?= BASEURL; ?>" title="Logo">Poinsla
        <!-- <img src="images/logo-poinsla.png" alt="Restaurant Logo" class="img-fluid img-responsive"> -->
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto text-uppercase">
          <li class="nav-item">
            <a class="nav-link" href="<?= BASEURL; ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= BASEURL; ?>/tech_i_use">Tech I Use</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= BASEURL; ?>foods.php">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= BASEURL; ?>contact.php">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>