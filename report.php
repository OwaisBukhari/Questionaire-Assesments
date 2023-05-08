<!-- sumof 7q multiplied by 2 ---for d and a forms

sum of 8 Qs for ws and same for ls which is sum of 7 Qs -->

<?php

session_start();
$USER=$_GET['username'];
// $_GET['email'];




// Connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'questions');
$query = "SELECT * FROM `a-series` where `username`='$USER'";
$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    $username = $row['username'];
    $a1 = $row['a1'];
    $a2 = $row['a2'];
    $a3 = $row['a3'];
    $a4 = $row['a4'];
    $a5 = $row['a5'];
    $a6 = $row['a6'];
    $a7 = $row['a7'];

    // do something with the fetched data
    // echo "ID: ".$id."<br>";
    // echo "Username: ".$username."<br>";
    // echo "a1: ".$a1."<br>";
    // echo "a2: ".$a2."<br>";
    // echo "a3: ".$a3."<br>";
    // echo "a4: ".$a4."<br>";
    // echo "a5: ".$a5."<br>";
    // echo "a6: ".$a6."<br>";
    // echo "a7: ".$a7."<br><br>";
}


// Connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'questions');
$query = "SELECT * FROM `d-series` where `username`='$USER'";
$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    $username = $row['username'];
    $d1 = $row['d1'];
    $d2 = $row['d2'];
    $d3 = $row['d3'];
    $d4 = $row['d4'];
    $d5 = $row['d5'];
    $d6 = $row['d6'];
    $d7 = $row['d7'];

    // do something with the fetched ddtd
    // echo "ID: ".$id."<br>";
    // echo "Username: ".$username."<br>";
    // echo "d1: ".$d1."<br>";
    // echo "d2: ".$d2."<br>";
    // echo "d3: ".$d3."<br>";
    // echo "d4: ".$d4."<br>";
    // echo "d5: ".$d5."<br>";
    // echo "d6: ".$d6."<br>";
    // echo "d7: ".$d7."<br><br>";
}



$query = "SELECT * FROM `workplacestress` where `username`='$USER'";
$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    $username = $row['username'];
    $ws1 = $row['ws1'];
    $ws2 = $row['ws2'];
    $ws3 = $row['ws3'];
    $ws4 = $row['ws4'];
    $ws5 = $row['ws5'];
    $ws6 = $row['ws6'];
    $ws7 = $row['ws7'];
    $ws8 = $row['ws8'];

    // do something with the fetched data
    // echo "ID: ".$id."<br>";
    // echo "Username: ".$username."<br>";
    // echo "ws1: ".$ws1."<br>";
    // echo "ws2: ".$ws2."<br>";
    // echo "ws3: ".$ws3."<br>";
    // echo "ws4: ".$ws4."<br>";
    // echo "ws5: ".$ws5."<br>";
    // echo "ws6: ".$ws6."<br>";
    // echo "ws7: ".$ws7."<br>";
    // echo "ws8: ".$ws8."<br><br>";
}

$query = "SELECT * FROM `lifescale` where `username`='$USER'";
$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    $username = $row['username'];
    $ls1 = $row['ls1'];
    $ls2 = $row['ls2'];
    $ls3 = $row['ls3'];
    $ls4 = $row['ls4'];
    $ls5 = $row['ls5'];


    // do something with the fetched data
    // echo "ID: ".$id."<br>";
    // echo "Username: ".$username."<br>";
    // echo "ls1: ".$ls1."<br>";
    // echo "ls2: ".$ls2."<br>";
    // echo "ls3: ".$ls3."<br>";
    // echo "ls4: ".$ls4."<br>";
    // echo "ls5: ".$ls5."<br>";
}


$A=($a1+$a2+$a3+$a4+$a5+$a6+$a7)*2;
$D=($d1+$d2+$d3+$d4+$d5+$d6+$d7)*2;
$WS=($ws1+$ws2+$ws3+$ws4+$ws5+$ws6+$ws7+$ws8);
$LS=($ls1+$ls2+$ls3+$ls4+$ls5);

echo $A."\n",$D."\n",$WS."\n",$LS."\n";






require_once('tcpdf.php');

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Your Name');
$pdf->SetTitle('Table Report');
$pdf->SetSubject('Table Report');
// $pdf->SetKeywords('TCPDF, PDF, report, table');

// set default header data
// $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 006', PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set font
$pdf->SetFont('helvetica', '', 12);

// add a page
$pdf->AddPage();

// create table
$tbl = '<h1>Thanks for your Feedback '.$USER.'</h1>

<table cellspacing="0" cellpadding="1" border="1">
        <tr>
            <th>Your A`s</th>
            <th>Your Ds`</th>
            <th>Your Ws`s</th>
            <th>Your Ls`s</th>
        </tr>
        <tr>
            <td>'.$A.'</td>
            <td>'.$D.'</td>
            <td>'.$WS.'</td>
            <td>'.$LS.'</td>
        </tr>
    </table>';

// output the table
$pdf->writeHTML($tbl, true, false, false, false, '');

// close and output PDF document
ob_end_clean() ;
$pdf->Output('table_report.pdf', 'I');





// // File path of the PDF to be sent as attachment
// $pdf_path = 'path/to/table_report.pdf';

// // Recipient email address
// $to = 'buildyournetwork1@gmail.com';

// // Subject of the email
// $subject = 'Table Report';

// // Message of the email
// $message = 'Please find the attached table report.';

// // Additional headers
// $headers = 'From: owaisbukhari257@gmail.com' . "\r\n" .
//     'Reply-To: owaisbukhari257@gmail.com' . "\r\n" .
//     'X-Mailer: PHP/' . phpversion();

// // File name of the PDF attachment
// $pdf_name = 'table_report.pdf';

// // Read the contents of the PDF into a variable
// $pdf_data = file_get_contents($pdf_path);

// // Encode the contents of the PDF as a base64 string
// $pdf_data = chunk_split(base64_encode($pdf_data));

// // Build the message body
// $body = "--PHP-mixed-".$random_hash."\r\n" .
//     "Content-Type: text/plain; charset=iso-8859-1\r\n" .
//     "Content-Transfer-Encoding: 7bit\r\n" .
//     "\r\n" .
//     $message . "\r\n" .
//     "--PHP-mixed-".$random_hash."\r\n" .
//     "Content-Type: application/pdf; name=\"" . $pdf_name . "\"\r\n" .
//     "Content-Transfer-Encoding: base64\r\n" .
//     "Content-Disposition: attachment\r\n" .
//     "\r\n" .
//     $pdf_data . "\r\n" .
//     "--PHP-mixed-".$random_hash."--\r\n";

// // Set the content type to indicate a mixed-type message
// $headers .= "Content-Type: multipart/mixed; boundary=PHP-mixed-".$random_hash."\r\n";

// // Send the email
// mail($to, $subject, $body, $headers);


// require 'path/to/PHPMailer/src/Exception.php';
// require 'path/to/PHPMailer/src/PHPMailer.php';
// require 'path/to/PHPMailer/src/SMTP.php';

// // File path of the PDF to be sent as attachment
// $pdf_path = 'path/to/table_report.pdf';

// // Recipient email address
// $to = 'buildyournetwork1@gmail.com';

// // Subject of the email
// $subject = 'Table Report';

// // Message of the email
// $message = 'Please find the attached table report.';

// // File name of the PDF attachment
// $pdf_name = 'table_report.pdf';

// // Create a new instance of PHPMailer
// $mail = new PHPMailer\PHPMailer\PHPMailer();

// // Set the SMTP server and port
// $mail->isSMTP();
// $mail->Host = 'owaisbukhari257@gmail.com';
// $mail->Port = 587;

// // Enable SMTP authentication
// $mail->SMTPAuth = true;
// $mail->Username = 'owaisbukhari257@gmail.com';
// $mail->Password = 'dbxxpigglplqdulb';

// // Set the sender and recipient email addresses
// $mail->setFrom('sender@example.com', 'Sender Name');
// $mail->addAddress($to);












?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js.map"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js.map"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js.map"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.js.map"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.esm.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.esm.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.esm.min.js.map"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.esm.js.map"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/helpers.esm.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/helpers.esm.js"></script>

    <title>Document</title>
</head>
<body>
<h1>Thanks for your Feedback <?php echo "\n".$USER;?></h1>
<table class="table table-striped">
  <thead>
    <tr>
      <th>Your A's</th>
      <th>Your D's</th>
      <th>Your Ws'S</th>
      <th>Your Ls'S</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $A; ?></td>
      <td><?php echo $D; ?></td>
      <td><?php echo $WS; ?></td>
      <td><?php echo $LS; ?></td>
    </tr>
  </tbody>
</table>

<!-- <button onclick="location.href=http://google.com type="button" class="btn btn-success center">
Play Again</button>
 -->

    

    
</body>
</html>

