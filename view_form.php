<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require 'vendor/autoload.php';

    use Spipu\Html2Pdf\Html2Pdf;

    $html2pdf = new Html2Pdf();
    $html2pdf->writeHTML('<h1 style="color:pink;">CodeWall PDF</h1> <br/> <p>Convert this HTML to PDF please!</p>');
    $html2pdf->output('myPdf.pdf', 'I');
    ?>

    <!-- <h1>Test Preview</h1>
    <button type="button" value="Print">Print</button> -->
</body>

</html>