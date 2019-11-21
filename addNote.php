<?php
session_start();
if (empty($_SESSION['username'])) {
    header("location:index.php?pesan=belum_login");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Reminder - Build for you</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>

<!--navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">
        <i class="fas fa-clipboard"></i>Reminder
    </a>
    <!--    <div class="alert alert-success" role="alert">-->

    <!--    </div>-->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    </div>
    <a href="logout.php" style="color: white;">
        <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit"> -->
        <i class="fas fa-sign-out-alt"></i>Logout
        <!-- </button> -->
    </a>
</nav>
<!--end navbar-->

<!--jumbotron-->
<div class="jumbotron">
    <h1 style="text-align: center;">Create your note <?= $_SESSION['username'] ?></h1>

    <div class="card bg-secondary" style="width: 50rem;margin: 0 auto;">
        <div class="card-body">
            <form style="color: white;">
                <div class="form-group">
                    <label for="note">Nama Note Title</label>
                    <input type="text" class="form-control" id="note"
                              placeholder="Create note ">
                </div>
                <div class="form-group">
                    <label for="note">Note</label>
                    <textarea type="text" class="form-control" id="note"
                              placeholder="Create your note"></textarea>
                </div>
                <div class="form-group">
                    <label for="date">Deadline</label>
                    <input type="time" class="form-control" id="date"
                           placeholder="Enter date">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Priority</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>High</option>
                        <option>Medium</option>
                        <option>Low</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-info">
                    Create <i class="fas fa-paper-plane" ></i>
                </button>
            </form>
        </div>
    </div>
</div>
<!--end jumbotron-->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.jsdelivr.net/webshim/1.12.4/extras/modernizr-custom.js"></script>
<script src="http://cdn.jsdelivr.net/webshim/1.12.4/polyfiller.js"></script>
<script>
    webshims.setOptions('waitReady', false);
    webshims.setOptions('forms-ext', {type: 'date'});
    webshims.setOptions('forms-ext', {type: 'time'});
    webshims.polyfill('forms forms-ext');
</script>
</body>
</html>