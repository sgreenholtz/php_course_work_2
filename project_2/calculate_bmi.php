<!DOCTYPE html>
<html>
    <head>
        <title>Calculate Your BMI</title>
        <link href="css/calculate_bmi.css" rel="stylesheet" />
    </head>

    <body>
        <div class="container">
            <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">

                <label for="weight">Enter your weight (lbs): </label>
                <input type="text" name="weight" /><br />

                <label for="height">Enter your height (in): </label>
                <input type="text" name="height" /><br />

                <input type="submit" name="Submit" />

            </form>
        </div>

        <?php

            if (isset($_POST['Submit']))
            {
                $weight = $_POST['weight'];
                $height = $_POST['height'];

                $bmi = ($weight / ($height * $height)) * 703;
                echo $bmi;
            }
        ?>
    </body>
</html>

