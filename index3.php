<?php
    session_start();
    ?>




<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap.min.css">

    <style>
        .container {
            margin-top: 260px;
            width: 650px;
        }
    </style>
    <title>Document</title>
</head>
<body>
    
<div class="container mt-5">

    <?php include("message.php");?>

        <div class="row">
            <div class="col-md-12">
                <div class="card-header">
                    <h4>student add
                        <a href="" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="code.php" method="post">
                        <div class="mb-3">
                            <label for="">Student Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Student Email</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Heure</label>
                            <input type="text" name="heure" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Student Phone</label>
                            <input type="text" name="phone" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Student Course</label>
                            <input type="text" name="course" class="form-control">
                        </div>

                        <div class="mb-3">
                            <button type="submit" name="save-student" class="btn btn-primary">Save Student</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="bootstrap.bundle.min.js"></script>
    
</body>
</html>
