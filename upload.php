<!DOCTYPE html>
<html>

<head>
    <title>Page Title</title>
</head>
<style>
    .a {
        text-align: center;
        border: 3px solid red;
        font-family: "times new roman", serif;
        background-color: lightsalmon;
    }

    .container {
        text-align: center;

        width: 500px;
        height: 50px;
        padding-top: 30px;


    }

    .b {
        text-align: center;
        position: absolute;
        top: 250px;
        left: 700px;
        height: 30px;
        width: 120px;
    }

    .c {
        text-align: center;
        position: absolute;
        top: 350px;
        left: 700px;
        height: 30px;
        width: 120px;
    }

    .d {
        text-align: center;
        position: absolute;
        top: 450px;
        left: 700px;
        height: 30px;
        width: 120px;
    }
</style>

<body>
    <link rel="stylesheet" type="text/css" href="style.css">
    <h1 class="a">Input data</h1>
    <div class="container">

        <form action="updb.php" method="POST" style="text-align:center;">

            <input type="text" name="text" class="b" placeholder="write something">
            <t>
                <t>

                    <input type="submit" class="c" name="submit">


        </form><br><br><br>
        <form action="frontpage.php" style="text-align:center;">
            <button class="d">Back</button>
        </form>




</body>

</html>