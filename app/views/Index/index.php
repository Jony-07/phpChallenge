<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cruz Roja</title>
    <link rel="stylesheet" href="<?=PATH?>resources/assets/css/global.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <!--
       DataTables buttons
    -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

</head>

<body>
    <div class="container">
        <div class="row justify-content-center pt-5 mt-5 mr-1">
            <a href="<?=PATH?>Index/Create" class="add" style="color: #FF0032"><i class="bi bi-plus-circle"></i>Add
                user</a>
            <div class="row mt-3">
                <div class="table-responsive">
                    <table class="table table-bordered " id="datatable">
                        <thead class="Te" style="background-color: #FF8B8B">
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">Username</th>
                                <th class="text-center">Nombre</th>
                                <th class="text-center">Correo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                          
                    foreach($users as $user)
                    {
                      
                        ?>
                            <tr id="id_<?=$user['id']?>">
                                <td class="text-center"><?=$user['id']?></td>
                                <td class="text-center"><?=$user['username']?></td>
                                <td class="text-center"><?=$user['name']?></td>
                                <td class="text-center"><?=$user['email']?></td>
                            </tr>

                            <?php                 
                    }
                    ?>
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
<script>
$(document).ready(function() {
    $('#datatable').DataTable();
});
</script>

</html>