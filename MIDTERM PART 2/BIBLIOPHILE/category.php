<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliophile - Category</title>
    <link rel="icon" href="./assets/Logo.svg">
    <link rel="stylesheet" href="./bootstrap/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="top-header">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg d-flex align-items-center justify-content-between mb-2">
                <a class="navbar-brand wsm" href="./index.php"><img src="./assets/Logo.svg" class="nav-logo" alt="logo"> Bibliography</a>
                <div class="search-wrapper d-flex align-items-center">
                    <div class="select-filter">
                        <select name="filter" class="filter-select">
                            <option value="">All Categories</option>
                            <option value="Fantasy">Fantasy</option>
                            <option value="Romance">Romance</option>
                            <option value="Romance">Adventure</option>
                            <option value="Romance">Mystery</option>
                            <option value="Romance">Poetry</option>
                            <option value="Romance">Fanfiction</option>
                            <option value="Romance">Horror</option>
                        </select>
                    </div>
                    <input type="text" placeholder="Search..." class="search-input">
                    <span class="search-btn material-symbols-outlined">Search</span>
                </div>
                <div class="login-signup wsm d-flex align-items-center justify-content-end">
                <a href="./loginpage.php" class="signup-btn">Logout</a>
                </div>
            </nav>
            <nav class="navbar navbar-expand-lg">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <div class="link-wrapper d-flex align-items-center justify-content-between w-100">
                    <ul class="navbar-nav wsm">
                        <li class="nav-item">
                            <a class="nav-link" href="./new-arrivals.php">New Arrivals</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./collection.php">Collection</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav gap-4">
                        <li class="nav-item">
                            <a class="nav-link" href="./index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="order.php">Books</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./category.php">Category</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./orders.php">Orders</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav wsm justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link material-symbols-outlined" href="./wishlist.php">favorite</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link material-symbols-outlined" href="./shopping-cart.php">shopping_bag</a>
                        </li>
                    </ul>
                </div>
                </div>
            </nav>
        </div>
    </header>
    <div class="container vh-100">
        <h3 class="heading-text text-center text-uppercase letter-spacing-2">Book Categories</h3>
        <div class="row my-5">
            <div class="col-sm-12 col-md-4 col-lg-3">
                <a href="./view-book-categories.php" class="category-card">
                    <img src="./assets/1532bb6d141397e6101348965003.jpg" alt="book cover">
                    <div class="category-overlay d-flex align-items-center justify-content-center">
                        <p>Romance</p>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-3">
                <a href="./view-book-categories.php" class="category-card">
                    <img src="./assets/Scars and Heart.jpg" alt="book cover">
                    <div class="category-overlay d-flex align-items-center justify-content-center">
                        <p>Fanfiction</p>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-3">
                <a href="./view-book-categories.php" class="category-card">
                    <img src="./assets/The Juggernaut.jpg" alt="book cover">
                    <div class="category-overlay d-flex align-items-center justify-content-center">
                        <p>Adventure</p>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-3">
                <a href="./view-book-categories.php" class="category-card">
                    <img src="./assets/The Book of Terrus.jpg" alt="book cover">
                    <div class="category-overlay d-flex align-items-center justify-content-center">
                        <p>Fantasy</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="row my-5">
            <div class="col-sm-12 col-md-4 col-lg-3">
                <a href="./view-book-categories.php" class="category-card">
                    <img src="./assets/Day after Day.jpg" alt="book cover">
                    <div class="category-overlay d-flex align-items-center justify-content-center">
                        <p>Horror</p>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-3">
                <a href="./view-book-categories.php" class="category-card">
                    <img src="./assets/The Summer i Drowned.jpg" alt="book cover">
                    <div class="category-overlay d-flex align-items-center justify-content-center">
                        <p>Mystery</p>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-3">
                <a href="./view-book-categories.php" class="category-card">
                    <img src="./assets/The Scars Inside Me.jpg" alt="book cover">
                    <div class="category-overlay d-flex align-items-center justify-content-center">
                        <p>Poetry</p>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-3">
                <a href="./view-book-categories.php" class="category-card">
                    <img src="./assets/Four Walls.jpg" alt="book cover">
                    <div class="category-overlay d-flex align-items-center justify-content-center">
                        <p>Thriller</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <script src="./bootstrap/bootstrap.js"></script>
    <script src="./bootstrap/bootstrap.bundle.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
</body>
</html>