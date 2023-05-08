<?php

session_start();

echo $_SESSION['name'];
$name = $_SESSION['name'];
echo $name;


// Connect to the database
$link = mysqli_connect('localhost', 'root', '', 'questions');

// Check if the form has been submitted
if (isset($_POST['ws1'])) {
  // Escape the radio button value to prevent SQL injection attacks
  $ws1 = mysqli_real_escape_string($link, $_POST['ws1']);
    $ws2 = mysqli_real_escape_string($link, $_POST['ws2']);
    $ws3 = mysqli_real_escape_string($link, $_POST['ws3']);
    $ws4 = mysqli_real_escape_string($link, $_POST['ws4']);
    $ws5 = mysqli_real_escape_string($link, $_POST['ws5']);
    $ws6 = mysqli_real_escape_string($link, $_POST['ws6']);
    $ws7 = mysqli_real_escape_string($link, $_POST['ws7']);
    $ws8 = mysqli_real_escape_string($link, $_POST['ws8']);


  // Insert the radio button value into the database
  $sql = "INSERT INTO `workplacestress`(`id`, `username`, `ws1`, `ws2`, `ws3`, `ws4`, `ws5`, `ws6`, `ws7`, `ws8`) VALUES (NULL,'$name','$ws1','$ws2','$ws3','$ws4','$ws5','$ws6','$ws7','$ws8')";
  mysqli_query($link, $sql);
  header("Location: report.php?username=$name");

}

// Close the database connection
mysqli_close($link);


//redirect in php

//redirect to html file
//redirect to html file









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
    form{
        text-align: center;
    }
    h4{
        text-align: center;
    }
    .label{
        font-size: 20px;
    }
   
</style>

<body>
    

    <h4>
        Directions: Thinking about your current job, how often does each of the following
        statements describe how you feel?

    </h4>
    <div>
        <form action="" method="post">
            <div class="form-group">
                <div class=row>

                    <label  class="label" for="ws1">Conditions at work are
                        unpleasant or sometimes even
                        unsafe.</label>
                </div>

                <div class="row">

                    <div class="form-check">
                        <label class="form-check-label" for="ws1">
                             Never
                        </label>
                        <input class="form-check-input2" type="radio" name="ws1" id="ws1" value="1" >
                    </div>
                    <div class="form-check">
                        <input class="form-check-input2" type="radio" name="ws1" id="radio2" value="2">
                        <label class="form-check-label" for="radio2">
                             2
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input2" type="radio" name="ws1" id="radio3" value="3">
                        <label class="form-check-label" for="radio3">
                             3
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input2" type="radio" name="ws1" id="radio4" value="4">
                        <label class="form-check-label" for="radio4">
                             4
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input2" type="radio" name="ws1" id="radio5" value="5">
                        <label class="form-check-label" for="radio2">
                            Very Often
                        </label>
                    </div>
                </div>

                <div class="row">
                    <label  class="label" for="ws2">I feel that my job is negatively
                        affecting my physical or
                        emotional well being. </label>
                </div>

                <div class="row">



                    <div class="form-check">
                        <label class="form-check-label" for="ws2">
                             Never
                        </label>
                        <input class="form-check-input2" type="radio" name="ws2" id="ws2" value="1" >
                    </div>
                    <div class="form-check">
                        <input class="form-check-input2" type="radio" name="ws2" id="radio2" value="2">
                        <label class="form-check-label" for="radio2">
                             2
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input2" type="radio" name="ws2" id="radio3" value="3">
                        <label class="form-check-label" for="radio3">
                             3
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input2" type="radio" name="ws2" id="radio4" value="4">
                        <label class="form-check-label" for="radio4">
                             4
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input2" type="radio" name="ws2" id="radio5" value="5">
                        <label class="form-check-label" for="radio2">
                            Very Often
                        </label>
                    </div>

                </div>

                <div class="row">
                    <label  class="label" for="ws3">I have too much work to do
                        and/or too many unreasonable
                        deadlines. </label>

                </div>

                <div class="row">
                    <div class="form-check">
                        <label class="form-check-label" for="ws3">
                             Never
                        </label>
                        <input class="form-check-input2" type="radio" name="ws3" id="ws3" value="1" >
                    </div>
                    <div class="form-check">
                        <input class="form-check-input2" type="radio" name="ws3" id="radio2" value="2">
                        <label class="form-check-label" for="radio2">
                             2
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input2" type="radio" name="ws3" id="radio3" value="3">
                        <label class="form-check-label" for="radio3">
                             3
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input2" type="radio" name="ws3" id="radio4" value="4">
                        <label class="form-check-label" for="radio4">
                             4
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input2" type="radio" name="ws3" id="radio5" value="5">
                        <label class="form-check-label" for="radio2">
                            Very Often
                        </label>
                    </div>

                </div>

                <div class="row">
                    <label  class="label" for="ws4">I find it difficult to express my
                        opinions or feelings about my
                        job conditions to my superiors. </label>

                </div>

                <div class="row">
                    <div class="form-check">
                        <label class="form-check-label" for="ws4">
                             Never
                        </label>
                        <input class="form-check-input2" type="radio" name="ws4" id="ws4" value="1" >
                    </div>
                    <div class="form-check">
                        <input class="form-check-input2" type="radio" name="ws4" id="radio2" value="2">
                        <label class="form-check-label" for="radio2">
                             2
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input2" type="radio" name="ws4" id="radio3" value="3">
                        <label class="form-check-label" for="radio3">
                             3
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input2" type="radio" name="ws4" id="radio4" value="4">
                        <label class="form-check-label" for="radio4">
                             4
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input2" type="radio" name="ws4" id="radio5" value="5">
                        <label class="form-check-label" for="radio2">
                            Very Often
                        </label>
                    </div>

                </div>

                <div class="row">
                    <label  class="label" for="ws5">I feel that job pressures
                        interfere with my family or
                        personal life. </label>
                </div>

                <div class="row">
                    <div class="form-check">
                        <label class="form-check-label" for="ws5">
                             Never
                        </label>
                        <input class="form-check-input2" type="radio" name="ws5" id="ws5" value="1" >
                    </div>
                    <div class="form-check">
                        <input class="form-check-input2" type="radio" name="ws5" id="radio2" value="2">
                        <label class="form-check-label" for="radio2">
                             2
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input2" type="radio" name="ws5" id="radio3" value="3">
                        <label class="form-check-label" for="radio3">
                             3
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input2" type="radio" name="ws5" id="radio4" value="4">
                        <label class="form-check-label" for="radio4">
                             4
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input2" type="radio" name="ws5" id="radio5" value="5">
                        <label class="form-check-label" for="radio2">
                            Very Often
                        </label>

                    </div>

                </div>

                <div class="row">
                    <label  class="label" for="ws6">I have adequate control or input
                        over my work duties</label>
                </div>

                <div class="row">


                    <div class="form-check">
                        <label class="form-check-label" for="ws6">
                             Never
                        </label>
                        <input class="form-check-input2" type="radio" name="ws6" id="ws6" value="5" >
                    </div>
                    <div class="form-check">
                        <input class="form-check-input2" type="radio" name="ws6" id="radio2" value="4">
                        <label class="form-check-label" for="radio2">
                             2
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input2" type="radio" name="ws6" id="radio3" value="3">
                        <label class="form-check-label" for="radio3">
                             3
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input2" type="radio" name="ws6" id="radio4" value="2">
                        <label class="form-check-label" for="radio4">
                             4
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input2" type="radio" name="ws6" id="radio5" value="1">
                        <label class="form-check-label" for="radio2">
                            Very Often
                        </label>
                    </div>

                </div>

                <div class="row">
                    <label  class="label" for="ws7">I receive appropriate
                        recognition or rewards for good</label>
                </div>

                <div class="row">
                    <div class="form-check">
                        <label class="form-check-label" for="ws7">
                             Never
                        </label>
                        <input class="form-check-input2" type="radio" name="ws7" id="ws7" value="5" >
                    </div>
                    <div class="form-check">
                        <input class="form-check-input2" type="radio" name="ws7" id="radio2" value="4">
                        <label class="form-check-label" for="radio2">
                             2
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input2" type="radio" name="ws7" id="radio3" value="3">
                        <label class="form-check-label" for="radio3">
                             3
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input2" type="radio" name="ws7" id="radio4" value="2">
                        <label class="form-check-label" for="radio4">
                             4
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input2" type="radio" name="ws7" id="radio5" value="1">
                        <label class="form-check-label" for="radio2">
                            Very Often
                        </label>
                    </div>

                </div>

                <div class="row">
                    <label  class="label" for="ws8">I am able to utilize my skills and
                        talents to the fullest extent at
                        work. </label>
                </div>

                <div class="row">

                    <div class="form-check">
                        <label class="form-check-label" for="ws8">
                            Never
                        </label>
                        <input class="form-check-input2" type="radio" name="ws8" id="ws8" value="5" >
                    </div>
                    <div class="form-check">
                        <input class="form-check-input2" type="radio" name="ws8" id="radio2" value="4">
                        <label class="form-check-label" for="radio2">
                             
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input2" type="radio" name="ws8" id="radio3" value="3">
                        <label class="form-check-label" for="radio3">
                             
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input2" type="radio" name="ws8" id="radio4" value="2">
                        <label class="form-check-label" for="radio4">
                             
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input2" type="radio" name="ws8" id="radio5" value="1">
                        <label class="form-check-label" for="radio2">
                             Very Often
                        </label>
                    </div>

                </div>



            </div>
            <!-- Add more radio buttons as needed -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>



</body>

</html>