<?php
include_once('connection.php');

$query = "select * from entry";


$result = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html>

<head>
    <title> Fetch Data From Database </title>
</head>
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        text-align: center;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
</style>

<body>

    <table align="center" border="1px" style="width:600px; line-height:40px;">
        <tr>
            <th colspan="8">
                <h1><u>DATA</u></h1>
            </th>


            <?php while ($rows = mysqli_fetch_assoc($result)) {
                ?>
            <tr>

                <td align="center">
                    <?php echo $rows['text']; ?>
                </td>
            </tr>
            <?php
            }
            ?>

    </table>
</body>

</html>