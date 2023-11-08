<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cruz Roja</title>
    <link rel="stylesheet" href="<?=PATH?>resources/assets/css/global.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center pt-5 mt-5 mr-1">
            <div class="col-md-4 form">
                <form action="<?=PATH?>Index/Add" method="post" role="form">

                    <div class="form-group text-center text-white my-3">
                        <h1>Cruz Roja</h1>
                    </div>
                    <?php
                   if(isset($errores))
                   {
                       if(count($errores)>0)
                       {
                        echo "<div class='alert alert-danger' style='color:#343a40' ><ul>";
                           foreach ($errores as $error) {
                               echo "<li style='color:#343a40'>$error</li>";
                           }
                           echo "</ul></div>";
                       }
                   }
                   ?>
                    <div class="input-group mb-4">
                        <span class="input-group-text" for="username"><i class="bi bi-person-fill"></i></span>
                        <input type="text" class="form-control" id="username" aria-describedby="username"
                            placeholder="Enter an username" name="username">
                    </div>
                    <div class="input-group mb-4">
                        <span class="input-group-text" for="name"><i class="bi bi-person-fill"></i></span>
                        <input type="text" class="form-control" id="name" aria-describedby="name"
                            placeholder="Enter your name" name="name">
                    </div>
                    <div class="input-group mb-4">
                        <span class="input-group-text" for="email"><i class="bi bi-envelope-at-fill"></i></span>
                        <input type="text" class="form-control" id="email" aria-describedby="emailHelp"
                            placeholder="Enter an email" name="email">
                    </div>
                    <div class="input-group mb-4 ">
                        <span class="input-group-text" for="password"><i class="bi bi-file-lock2-fill"></i></span>
                        <input type="password" class="form-control" id="password" aria-describedby="emailHelp"
                            placeholder="Enter your password" name="password">
                    </div>
                    <div class="form-group text-center my-3">
                        <a href="<?=PATH?>Index" title="Go back" class="btn btn btn-light">Return</a>
                        <input type="submit" id="Save" title="Save" name="Save" class="btn btn btn-light" value="Save">
                    </div>
            </div>
        </div>
    </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html>