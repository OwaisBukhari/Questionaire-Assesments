<?php
session_start();

echo $_SESSION['name'];
$name = $_SESSION['name'];
echo $name;

// Connect to the database
$link = mysqli_connect('localhost', 'root', '', 'questions');

// Check if the form has been submitted
if (isset($_POST['ls1'])) {
  // Escape the radio button value to prevent SQL injection attacks
  $ls1 = mysqli_real_escape_string($link, $_POST['ls1']);
    $ls2 = mysqli_real_escape_string($link, $_POST['ls2']);
    $ls3 = mysqli_real_escape_string($link, $_POST['ls3']);
    $ls4 = mysqli_real_escape_string($link, $_POST['ls4']);
    $ls5 = mysqli_real_escape_string($link, $_POST['ls5']);

  // Insert the radio button value into the database
  $sql = "INSERT INTO `lifescale`(`id`, `username`, `ls1`, `ls2`, `ls3`, `ls4`, `ls5`) VALUES (NULL,'$name','$ls1','$ls2','$ls3','$ls4','$ls5')";
  mysqli_query($link, $sql);
  echo mysqli_error($link);
  header("Location: ws.php");

}

// Close the database connection
mysqli_close($link);






?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Document</title>
</head>
<style>
.form-group {
    margin: 10px;
    padding-left: 10px;



}


.row {
    margin-top: 10px;
    place-content: center;
}

form {
    text-align: center;
}

h4 {
    text-align: center;
}

.label {
    font-size: 20px;
}
</style>

<body>
    <h4>
        Instructions: Below are five statements that you may agree or disagree with. Using the 1 -
       Strongly Agree scale below, indicate your agreement with each item by placing the appropriate number
        on the line preceding that item. Please be open and honest in your responding.

    </h4>

    <form action="" method="post">
        <div class="form-group">
            <div class="row">
                <label class="label" for="ls">In most ways my life is close to my ideal</label>

            </div>

            <div class="row">

                <div class="form-check">
                    <label class="form-check-label" for="ls">
                        Strongly DisAgree
                    </label>
                    <input class="form-check-input" type="radio" name="ls1" id="ls1" value="1">
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ls1" id="radio2" value="2">
                    <label class="form-check-label" for="radio2">
                        2
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ls1" id="radio2" value="3">
                    <label class="form-check-label" for="radio2">
                        3
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ls1" id="radio4" value="4">
                    <label class="form-check-label" for="radio4">
                        4
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ls1" id="radio5" value="5">
                    <label class="form-check-label" for="radio5">
                        5
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ls1" id="radio6" value="6">
                    <label class="form-check-label" for="radio6">
                        6
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ls1" id="radio7" value="7">
                    <label class="form-check-label" for="radio7">
                       Strongly Agree
                    </label>
                </div>

            </div>
            <div class="row">
                <label class="label" for="ls">The conditions of my life are excellent</label>

            </div>

            <div class="row">

                <div class="form-check">
                    <label class="form-check-label" for="ls2">
                        Strongly DisAgree
                    </label>
                    <input class="form-check-input" type="radio" name="ls2" id="ls2" value="1">
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ls2" id="radio2" value="2">
                    <label class="form-check-label" for="radio2">
                        2
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ls2" id="radio2" value="3">
                    <label class="form-check-label" for="radio2">
                        3
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ls2" id="radio4" value="4">
                    <label class="form-check-label" for="radio4">
                        4
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ls2" id="radio5" value="5">
                    <label class="form-check-label" for="radio5">
                        5
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ls2" id="radio6" value="6">
                    <label class="form-check-label" for="radio6">
                        6
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ls2" id="radio7" value="7">
                    <label class="form-check-label" for="radio7">
                       Strongly Agree
                    </label>
                </div>
            </div>
            <div class="row">
                <label class="label" for="ls3">I am satisfied with my life.</label>

            </div>

            <div class="row">
                <div class="form-check">
                    <label class="form-check-label" for="ls3">
                        Strongly DisAgree
                    </label>
                    <input class="form-check-input" type="radio" name="ls3" id="ls3" value="1">
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ls3" id="radio2" value="2">
                    <label class="form-check-label" for="radio2">
                        2
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ls3" id="radio2" value="3">
                    <label class="form-check-label" for="radio2">
                        3
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ls3" id="radio4" value="4">
                    <label class="form-check-label" for="radio4">
                        4
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ls3" id="radio5" value="5">
                    <label class="form-check-label" for="radio5">
                        5
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ls3" id="radio6" value="6">
                    <label class="form-check-label" for="radio6">
                        6
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ls3" id="radio7" value="7">
                    <label class="form-check-label" for="radio7">
                       Strongly Agree
                    </label>
                </div>

            </div>
            <div class="row">
                <label class="label" for="ls4">So far I have gotten the important things I want in life</label>

            </div>

            <div class="row">

                <div class="form-check">
                    <label class="form-check-label" for="ls4">
                        Strongly DisAgree
                    </label>
                    <input class="form-check-input" type="radio" name="ls4" id="ls4" value="1">
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ls4" id="radio2" value="2">
                    <label class="form-check-label" for="radio2">
                        2
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ls4" id="radio2" value="3">
                    <label class="form-check-label" for="radio2">
                        3
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ls4" id="radio4" value="4">
                    <label class="form-check-label" for="radio4">
                        4
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ls4" id="radio5" value="5">
                    <label class="form-check-label" for="radio5">
                        5
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ls4" id="radio6" value="6">
                    <label class="form-check-label" for="radio6">
                        6
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ls4" id="radio7" value="7">
                    <label class="form-check-label" for="radio7">
                       Strongly Agree
                    </label>
                </div>
            </div>

            <div class="row">
                <label class="label" for="ls5">If I could live my life over, I would change almost nothing</label>

            </div>

            <div class="row">

                <div class="form-check">
                    <label class="form-check-label" for="ls5">
                        Strongly DisAgree
                    </label>
                    <input class="form-check-input" type="radio" name="ls5" id="ls5" value="1">
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ls5" id="radio2" value="2">
                    <label class="form-check-label" for="radio2">
                        2
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ls5" id="radio2" value="3">
                    <label class="form-check-label" for="radio2">
                        3
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ls5" id="radio4" value="4">
                    <label class="form-check-label" for="radio4">
                        4
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ls5" id="radio5" value="5">
                    <label class="form-check-label" for="radio5">
                        5
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ls5" id="radio6" value="6">
                    <label class="form-check-label" for="radio6">
                        6
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ls5" id="radio7" value="7">
                    <label class="form-check-label" for="radio7">
                       Strongly Agree
                    </label>
                </div>
            </div>
        </div>
        <!-- Add more radio buttons as needed -->
        <button type="submit" class="btn btn-primary">Next</button>
    </form>




</body>

</html>