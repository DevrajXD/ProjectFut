
<div>
  <?php include('../top.php');?>
</div>

<div>
<?php  include('../sidebar.php');?>
</div>

<?php include('../db.php');?>

<?php
$sql = "SELECT * FROM add_players";

$result = $conn->query($sql);$sql = "SELECT * FROM add_players";

$result = $conn->query($sql);
?> 
<!-- --------- -->


<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  

  <a href="<?php echo $siteUrl;?>/players/add_players.php" class="btn btn-success edit" data-id="<?php echo $array[0];?>">Add Players</a>
</div>

</body>
</html>

<!-- --------------------------->



<style>
body {
  background-image: url("rooney.jpg");
}


*{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
}
body{
    font-family: Helvetica;
    -webkit-font-smoothing: antialiased;
    
}

a:hover {
  margin-left: 30px;
  text-decoration: none;
  color: white;
}

h2{
    text-align: center;
    font-size: 18px;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: white;
    padding: 30px 0;
}

/* Table Styles */

.table-wrapper{
    margin: 10px 70px 70px;
    box-shadow: 0px 35px 50px rgba( 0, 0, 0, 0.2 );
}

.fl-table {
    border-radius: 5px;
    font-size: 12px;
    font-weight: normal;
    border: none;
    border-collapse: collapse;
    width: 100%;
    max-width: 100%;
    white-space: nowrap;
    background-color: white;
}

.fl-table td, .fl-table th {
    text-align: center;
    padding: 8px;
}

.fl-table td {
    border-right: 1px solid #f8f8f8;
    font-size: 12px;
}

.fl-table thead th {
    color: #ffffff;
    background: #4FC3A1;
}


.fl-table thead th:nth-child(odd) {
    color: #ffffff;
    background: #324960;
}

.fl-table tr:nth-child(even) {
    background: #F8F8F8;
}

/* Responsive */

@media (max-width: 767px) {
    .fl-table {
        display: block;
        width: 100%;
    }
    .table-wrapper:before{
        content: "Scroll horizontally >";
        display: block;
        text-align: right;
        font-size: 11px;
        color: white;
        padding: 0 0 10px;
    }
    .fl-table thead, .fl-table tbody, .fl-table thead th {
        display: block;
    }
    .fl-table thead th:last-child{
        border-bottom: none;
    }
    .fl-table thead {
        float: left;
    }
    .fl-table tbody {
        width: auto;
        position: relative;
        overflow-x: auto;
    }
    .fl-table td, .fl-table th {
        padding: 20px .625em .625em .625em;
        height: 60px;
        vertical-align: middle;
        box-sizing: border-box;
        overflow-x: hidden;
        overflow-y: auto;
        width: 120px;
        font-size: 13px;
        text-overflow: ellipsis;
    }
    .fl-table thead th {
        text-align: left;
        border-bottom: 1px solid #f7f7f9;
    }
    .fl-table tbody tr {
        display: table-cell;
    }
    .fl-table tbody tr:nth-child(odd) {
        background: none;
    }
    .fl-table tr:nth-child(even) {
        background: transparent;
    }
    .fl-table tr td:nth-child(odd) {
        background: #F8F8F8;
        border-right: 1px solid #E6E4E4;
    }
    .fl-table tr td:nth-child(even) {
        border-right: 1px solid #E6E4E4;
    }
    .fl-table tbody td {
        display: block;
        text-align: center;
    }
}
</style>
<!Doctype html>
<html lang="en">

<h2>Player List</h2>
<div class="table-wrapper">
    <table class="fl-table">
        <thead>
            
        <tr>
            <th>S.No</th>
            <th>Player</th>
            <th>Age</th>
            <th>Position</th>
            <th>Country</th>
        </tr>
        </thead>
        <?php while($row = $result->fetch_assoc()){?>
                            <tr class="table-active">

                                        <td><?php echo $row['id']?></td>
                                        <td><?php echo $row['player_name']?></td>
                                        <td><?php echo $row['age']?></td>
                                        <td><?php echo $row['position']?></td>
                                        <td><?php echo $row['country']?></td>
        </tr>  <?php } ?>
        <tbody>
    </table>
</div>
</html>