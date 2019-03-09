<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>DVD Rental</title>
</head>
<body>

<header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="img/logo.png" alt=""/>
        </a>
        <p class="navbar-text"><?php echo $_SESSION['firstName'] ?? '' ?>
        </p>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="myaccount.php">My Account</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href = "logout.php" >Logout</a >
                </li>
            </ul>
            <form class="form-inline mt-2 mt-md-0" name="search_form" action="search.php" method="post">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" id="searchterm" name="search_term">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="search">Search</button>
            </form>
        </div>
    </nav>
</header>