<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="cssfolder/header1.css">
    <link rel="stylesheet" href="cssfolder/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/6b6617017c.js" crossorigin="anonymous"></script>

    <link rel="icon" type="image/x-icon" href="image/logo.png">
</head>

<body>
    <section class="m-0 vh-100">
        <div class="container-fluid p-0">
            <div class="header">
                <div class="topnav" id="myTopnav">
                    <div>
                        <a class="d-flex" href="home.php">
                            <img class="logoimg" src="image/logo.png" alt="Logo" width="40px">
                            <h3 class="logoname m-0 px-3">DFS</h3>
                        </a>
                    </div>
                    <div>
                        <input class="searchbar" type="text" placeholder="Search..">
                    </div>
                    <div class="navbtnright">
                        <a href="profile.php"><img class="profileimg" src="image/profile.png" alt="Profile" width="40px"></a>
                        <a type="button" class="btn dropdown-toggle-split" data-hover="dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <span><img class="hamburgerimg" src="image/hamburger.png" alt="Menu" width="40px"></span>
                        </a>
                        <div class="dropdownbtn">
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="timeline.html">Upload</a></li>
                                <li><a class="dropdown-item" href="phase1.html">View & Download</a></li>
                                <li><a class="dropdown-item" href="phase2.html">Share</a></li>
                                <li><a class="dropdown-item" href="phase3.html">Void</a></li>
                                <li><a class="dropdown-item" href="phase4.html">Log Out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main">
                <div>
                    <h2 class="p-3">My Documents</h2>
                </div>
            </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>