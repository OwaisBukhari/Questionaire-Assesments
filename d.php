<?php
session_start();

echo $_SESSION['name'];
$name = $_SESSION['name'];
echo $name;

// Connect to the database
$link = mysqli_connect('localhost', 'root', '', 'questions');

// Check if the form has been submitted
if (isset($_POST['d1'])) {
  // Escape the radio button value to prevent SQL injection attacks
  $d1 = mysqli_real_escape_string($link, $_POST['d1']);
  $d2 = mysqli_real_escape_string($link, $_POST['d2']);
  $d3 = mysqli_real_escape_string($link, $_POST['d3']);
  $d4 = mysqli_real_escape_string($link, $_POST['d4']);
  $d5 = mysqli_real_escape_string($link, $_POST['d5']);
  $d6 = mysqli_real_escape_string($link, $_POST['d6']);
  $d7 = mysqli_real_escape_string($link, $_POST['d7']);
  $a1 = mysqli_real_escape_string($link, $_POST['a1']);
  $a2 = mysqli_real_escape_string($link, $_POST['a2']);
  $a3 = mysqli_real_escape_string($link, $_POST['a3']);
  $a4 = mysqli_real_escape_string($link, $_POST['a4']);
  $a5 = mysqli_real_escape_string($link, $_POST['a5']);
  $a6 = mysqli_real_escape_string($link, $_POST['a6']);
  $a7 = mysqli_real_escape_string($link, $_POST['a7']);
  echo $d1;
    echo $d2;
    echo $d3;
    echo $d4;
    echo $d5;
    echo $d6;
    echo $d7;
    echo $a1;
    echo $a2;
    echo $a3;
    echo $a4;
    echo $a5;
    echo $a6;
    echo $a7;


  // Insert the radio button value into the database
  $sql = "INSERT INTO `d-series`(`id`, `username`, `d1`, `d2`, `d3`, `d4`, `d5`, `d6`, `d7`) VALUES (NULL ,'$name','$d1','$d2','$d3','$d4','$d5','$d6','$d7')";
  mysqli_query($link, $sql);
  echo mysqli_error($link);
  echo "my name is khan";
  header("Location: visual_array_task.html");
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

<body style="margin-left:50px">
    <form action="" method="post">
        <div class="form-group">
            <div>
                <h4>Please read each statement and circle a number 0, 1, 2 or 3 which indicates how much the statement
                    applied to you over the past week. There are no right or wrong answers. Do not spend too much
                    time on any statement.
                    The rating scale is as follows:
                    0 Did not apply to me at all
                    1 Applied to me to some degree, or some of the time
                    2 Applied to me to a considerable degree or a good part of time
                    3 Applied to me very much or most of the time
                </h4>
            </div>
            <div class="row">

                <div class="row">
                    <label class="label" for="d7">I couldn’t seem to experience any positive feeling at all</label>

                </div>

            </div>
            <div class="row">

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="d1" id="d1" value="0">
                    <label class="form-check-label" for="d1">
                         1
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="d1" id="radio2" value="1">
                    <label class="form-check-label" for="radio2">
                         2
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="d1" id="radio3" value="2">
                    <label class="form-check-label" for="radio3">
                         3
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="d1" id="radio2" value="3">
                    <label class="form-check-label" for="radio3">
                         4
                    </label>
                </div>
            </div>


            <div class="row">
                <label class="label" for="d2">I found it difficult to work up the initiative to do things</label>

            </div>

            <div class="row">

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="d2" id="d2" value="0">
                    <label class="form-check-label" for="d2">
                         1
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="d2" id="radio2" value="1">
                    <label class="form-check-label" for="radio2">
                         2
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="d2" id="radio3" value="2">
                    <label class="form-check-label" for="radio3">
                         3
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="d2" id="radio2" value="3">
                    <label class="form-check-label" for="radio3">
                         4
                    </label>
                </div>

            </div>



            <div class="row">
                <label class="label" for="d3">I felt that I had nothing to look forward to</label>

            </div>

            <div class="row">

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="d3" id="d3" value="0">
                    <label class="form-check-label" for="d3">
                         1
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="d3" id="radio2" value="1">
                    <label class="form-check-label" for="radio2">
                         2
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="d3" id="radio3" value="2">
                    <label class="form-check-label" for="radio3">
                         3
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="d3" id="radio2" value="3">
                    <label class="form-check-label" for="radio3">
                         4
                    </label>
                </div>

            </div>



            <div class="row">
                <label class="label" for="d4">I felt down-hearted and blue</label>

            </div>
            <div class="row">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="d4" id="d4" value="0">
                    <label class="form-check-label" for="d4">
                         1
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="d4" id="radio2" value="1">
                    <label class="form-check-label" for="radio2">
                         2
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="d4" id="radio3" value="2">
                    <label class="form-check-label" for="radio3">
                         3
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="d4" id="radio2" value="3">
                    <label class="form-check-label" for="radio3">
                         4
                    </label>
                </div>

            </div>






            <div class="row">
                <label class="label" for="d5">I felt I wasn’t worth much as a person</label>

            </div>
            <div class="row">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="d5" id="d5" value="0">
                    <label class="form-check-label" for="d5">
                         1
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="d5" id="radio2" value="1">
                    <label class="form-check-label" for="radio2">
                         2
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="d5" id="radio3" value="2">
                    <label class="form-check-label" for="radio3">
                         3
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="d5" id="radio2" value="3">
                    <label class="form-check-label" for="radio3">
                         4
                    </label>
                </div>


            </div>




            <div class="row">
                <label class="label" for="d6">I felt that life was meaningless</label>

            </div>
            <div class="row">

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="d6" id="d6" value="0">
                    <label class="form-check-label" for="d6">
                         1
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="d6" id="radio2" value="1">
                    <label class="form-check-label" for="radio2">
                         2
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="d6" id="radio3" value="2">
                    <label class="form-check-label" for="radio3">
                         3
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="d6" id="radio2" value="3">
                    <label class="form-check-label" for="radio3">
                         4
                    </label>
                </div>
            </div>



            <div class="row">
                <label class="label" for="d7">I was unable to become enthusiastic about anything</label>

            </div>

            <div class="row">

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="d7" id="d7" value="0">
                    <label class="form-check-label" for="d7">
                         1
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="d7" id="radio2" value="1">
                    <label class="form-check-label" for="radio2">
                         2
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="d7" id="radio3" value="2">
                    <label class="form-check-label" for="radio3">
                         3
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="d7" id="radio2" value="3">
                    <label class="form-check-label" for="radio3">
                         4
                    </label>
                </div>

            </div>




        </div>














        </div>
        <!-- Add more radio buttons as needed -->
        <button type="submit" class="btn btn-primary">Next</button>
    </form>


</body>

</html>