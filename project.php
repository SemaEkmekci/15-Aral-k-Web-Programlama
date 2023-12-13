<!DOCTYPE html>
<?php require_once "DBConnection.php"?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>13 Aralık</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
        <div class="container">
            <a href="home.php" class="navbar-brand">
                <img src="../../img/images.jpeg" alt="Logo">
                PERSONAL BLOG
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#miniMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="miniMenu" class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item"> <a class="nav-link " href="home.php"> HOME</a></li>
                    <li class="nav-item"> <a class="nav-link" href="lessons.php"> Lessons</a></li>
                    <li class="nav-item"> <a class="nav-link active" href="project.php"> projects</a></li>
                    <li class="nav-item"> <a class="nav-link" href="about.php"> about</a></li>
                </ul>
            </div>
        </div>
    </nav>


<div class="container">
    <div class="row mt-3">
        <div class="col md-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">project title</h4>
                    <p class="card-text"> project details</p>
                    <a href="#" class="btn btn-secondary btn-sm">read more</a>
                </div>
                <div class="card-footer">date:...</div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                    <h4 class="card-title">project title</h4>
                    <p class="card-text"> project details</p>
                    <a href="#" class="btn btn-secondary btn-sm">read more</a>
                </div>
                <div class="card-footer">date:...</div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                    <h4 class="card-title">project title</h4>
                    <p class="card-text"> project details</p>
                    <a href="#" class="btn btn-secondary btn-sm">read more</a>
                </div>
                <div class="card-footer">date:...</div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                    <h4 class="card-title">project title</h4>
                    <p class="card-text"> project details</p>
                    <a href="#" class="btn btn-secondary btn-sm">read more</a>
                </div>
                <div class="card-footer">date:...</div>
            </div>

            <div class="card  mb-3">
                <div class="card-body">
                    <h4 class="card-title">project title</h4>
                    <p class="card-text"> project details</p>
                    <a href="#" class="btn btn-secondary btn-sm">read more</a>
                </div>
                <div class="card-footer">date:...</div>
            </div>
      
                 <?php
                $sqlQuery = $dbConnection->prepare("SELECT ID, proje_baslik, projeicerik, tarih FROM projeler");
                $sqlQuery->execute();
                while ($project = $sqlQuery->fetch(PDO::FETCH_ASSOC)) {
                ?>
                    <div class="card mb-2">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $project['proje_baslik']; ?></h4>
                        
                            <p class="card-text"><?php echo substr($project['projeicerik'], 0, 250) . "..."; ?></p>

                            <a href="projectDetail.php?pid=<?php echo $project['ID']; ?>" class="btn btn-secondary btn-sm">read more</a>
                        
                        </div>
                        <div class="card-footer text-muted">date: <?php echo $project['tarih']; ?></div>
                    </div>
                <?php
                }
                ?>

        </div>
        <div class="col md-4">

        <div class="card">
            <h5 class="card-header bg-primary text-white">search any thing?</h5>
            <div class="card-body">
                <div class="input-group">
                    <input type="text" name="txtSearch" class="from-control" placeholder="search any thing...">
                    <span> <button class="btn btn-secondary">search</button></span>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
