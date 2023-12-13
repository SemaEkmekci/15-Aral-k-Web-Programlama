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
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
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
                    <li class="nav-item"> <a class="nav-link active" href="home.php"> HOME</a></li>
                    <li class="nav-item"> <a class="nav-link" href="lessons.php"> Lessons</a></li>
                    <li class="nav-item"> <a class="nav-link" href="projects.php"> projects</a></li>
                    <li class="nav-item"> <a class="nav-link" href="about.php"> about</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <?php 
    if(isset($_GET['pid']))
    {
        $sqlQuery =$dbConnection->prepare("SELECT * FROM projeler WHERE ID=:proje_id");
        $sqlQuery->execute(['project_id' =>$_GET['pid']]);
        $project = $sqlQuery->Fetch(PDO::FETCH_ASSOC);
        ?>
            <div  class="container">
        <div class="row mt-3">
            <div class="col md-8">
                <div class="card mb-2">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $project['proje_baslik']; ?></h4>
                        <p class="card-text">details...</p>
                    </div>
                    <div class="card-footer text-muted">project date: <?php echo $project['tarih'];?> 
                <br>
                >project süresi: <?php echo $project['sure'] ."months";?> 
            </div>
                </div>
            </div>
        </div>
    </div>
    <?php 
    

    }
    else
    {

    }    ?>
    

    <div  class="container">
        <div class="row mt-3">
            <div class="col md-8">
                <div class="card mb-2">
                    <div class="card-body">
                        <h4 class="card-title">proje başlığı!</h4>
                        <p class="card-text">details...</p>
                    </div>
                    <div class="card-footer text-muted">güncelleme: 13.12.2023</div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
