<?php

include 'connect-mysql.php';
$sql = "SELECT `id`, `firstname`, `lastname`, `email`, `phone`, `position`, `company` FROM `regis-event` WHERE `regis-event` = 2";
$objQuery = mysqli_query($objCon,$sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SPP-Regiter Report</title>

    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

</head>

<body>

<div class="container">
    <div class="container-fluid">
        <!-- Example DataTables Card-->
        <div class="row" style="justify-content: center">
            <div class="col-lg-10 col-sm-10">
                <h4 style="text-align: center; text-align: center;">Register Event Report</h4><br>
                <div class="table-responsive">
                    <table id="dataTable" class="display" style="width:100%">
                        <thead>
                        <tr>
                            <th width="10%">ID</th>
                            <th width="15%">firstname</th>
                            <th width="15%">lastname</th>
                            <th width="15%">email</th>
                            <th width="15%">phone</th>
                            <th width="15%">position</th>
                            <th width="15%">company</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        while ($result = mysqli_fetch_array($objQuery, MYSQLI_ASSOC))
                        {
                            ?>
                            <tr>
                                <td><?=$result["id"]?></td>
                                <td><?=$result["firstname"]?></td>
                                <td><?=$result["lastname"]?></td>
                                <td><?=$result["email"]?></td>
                                <td><?=$result["phone"]?></td>
                                <td><?=$result["position"]?></td>
                                <td><?=$result["company"]?></td>
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


</div>

<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    } );
</script>
</body>
</html>