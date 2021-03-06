<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      a.m-auto.btn.btn-info.try-again {
        width: 120px;
        left: 50%;
        position: absolute;
        right: 50%;
        transform: translate(-50%, -50%);
}
        @media screen and (max-width: 600px) {
            table.table.w-50.m-auto.border.mt-5.table-striped{ width: 80% !important;}
            h3.w-50.m-auto.mt-4.text-danger { text-align: center; width: 90% !important;}
            
        }
    </style>
</head>
<body>
<?php
error_reporting(0);
$num = '';
$num = $_POST["num"];
if(empty($num)){
  echo '<h3 class="w-50 m-auto mt-4 mb-5 text-danger">You Not Enter Any Number! Please Enter any number which is divided by 100</h3>';
  echo '<a class="m-auto btn btn-info try-again" href="http://localhost/learn%20php/atm/">Try Again</a>';
  exit;
}

elseif($num % 100 == 0 ){
    $oneThousand = (int)($num / 1000);
    $num = $num % 1000;

    $fiveHundred = (int)($num / 500);
    $num = $num % 500;

    $twoHundred = (int)($num / 200);
    $num = $num % 200;

    $oneHundred = (int)($num / 100);
    $num = $num % 100;

}

else{
    echo '<h3 class="w-50 m-auto mt-4 mb-5 text-danger">Invalid Number! Please Enter any number which is divided by 100</h3>';
    echo '<a class="m-auto btn btn-info try-again" href="http://localhost/learn%20php/atm/">Try Again</a>';
    exit;
    
}

$totalNote = $oneThousand + $fiveHundred + $twoHundred + $oneHundred;
?>
          

<table class="table w-50 m-auto border mt-5  table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">1000</th>
      <th scope="col">500</th>
      <th scope="col">200</th>
      <th scope="col">100</th>
      <th scope="col">Total Note</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row"><?php echo $oneThousand ?></td>
      <td><?php echo $fiveHundred ?></td>
      <td><?php echo $twoHundred ?></td>
      <td><?php echo $oneHundred ?></td>
      <td><?php echo $totalNote ?></td>
    </tr>
  </tbody>
</table>
<a class="m-auto btn btn-info try-again mt-5" href="http://localhost/learn%20php/atm/">Try Agian</a>
</body>
</html>