<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom App Development Services</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<style>
    .custom-navbar {
  background: linear-gradient(0deg, #142C30 0%, #2A575E 100%);
}

.nav-link {
    color: white !important;
}

.nav-link:hover {
    color: orange !important;
}

.navbar-brand img {
  width: 40px;
  height: 40px;
}

.navbar-toggler {
    border: none;
}

.navbar-toggler-icon {
    background-color: white;
}

.btn-login {
    background-color: transparent;
    border: 2px solid orange;
    color: white;
    padding: 5px 20px;
    border-radius: 20px;
    font-weight: bold;
}

.btn-login:hover {
    background-color: orange;
    color: white;
}

.custom-navbar .container-fluid {
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.custom-navbar .navbar-nav {
  display: flex;
  align-items: center;
}

</style>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light custom-navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="https://i.ibb.co/Z277p6H/logo.png" alt="Logo" width="40" height="40">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Artikel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Service</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
            </ul>
            <button class="btn btn-login">LOGIN</button>
          </div>
        </div>
      </nav>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
