<nav class="navbar navbar-expand-lg navbar-light py-sm-3 bg-light shadow-lg fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img class="logo" src="assets/icons/gear.svg" alt="" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">

                <!-- Checked a Login Session -->
                <?php if (isset($_SESSION['username']) && isset($_SESSION['password']) && isset($_SESSION['role'])) : ?>
                    <!-- Menu for Login -->
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="?page=about">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle btn btn-dark text-white ms-lg-3" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?= $_SESSION['fullname']; ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                            <li><a class="dropdown-item" href="?page=logout">Logout</a></li>
                        </ul>
                    </li>
                <?php else : ?>
                    <!-- Menu without Login -->
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="?page=about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="?page=login">Login</a>
                    </li>
                <?php endif ?>
            </ul>
        </div>
    </div>
</nav>