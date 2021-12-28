<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATM Booth</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        form.user-input {
        border: 1px solid #ced4da;
        background: #fff;
        box-shadow: 10px 3px 10px rgb(0 0 0 / 0.2);
        }

        @media screen and (max-width: 600px) {
            form.user-input{
                width: 100%;
            }
        }
    </style>
</head>
<body>
<h3 class="mb-3 w-50 m-auto mt-2">Simple Atm Booth System</h3>
    <form action="output.php" method="post" class="w-50 user-input shadow-lg p-4  mb-5 bg-body rounded m-auto">
        <input class="form-control mb-3" type="text" name="num" placeholder="Enter Your Amount">
        <!-- <br><br> -->
        <input type="submit" value="Submit" class="btn btn-primary">
    </form>
</body>
</html>