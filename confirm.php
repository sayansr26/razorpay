<?php

$amount = $_POST['amount'];
$username = $_POST['username'];


$transectionid = rand(100, 999);
$transectionidProtected = md5($transectionid);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Confirm</title>
</head>

<body class="bg-light">
    <div class="container">
        <div class="row my-5">
            <div class="col-4 mx-auto">
                <div class="card roudned shadow">
                    <div class="card-body">
                        <h5 class="text-center text-primary">Dontane Now</h5>
                        <hr>
                        <form action="pay.php" method="POST" id="payemnt-from">
                            <div class="form-group">
                                <label for="amount">Amount you want to dontate</label>
                                <input type="number" disabled value="<?php echo $amount; ?>" class="form-control rounded" placeholder="EG: Rs. 100">
                                <input type="hidden" name="amount" value="<?php echo $amount; ?>">
                            </div>
                            <div class="form-group">
                                <label for="username">Sending Name</label>
                                <input type="text" disabled value="<?php echo $username; ?>" class="form-control rounded" placeholder="EG: John Dow">
                                <input type="hidden" name="username" value="<?php echo $username; ?>">
                            </div>
                            <div class="form-group">
                                <label for="username">Transection Id</label>
                                <input type="text" disabled value="<?php echo $transectionidProtected; ?>" class="form-control rounded" placeholder="EG: John Dow">
                                <input type="hidden" name="transectionid" value="<?php echo $transectionidProtected; ?>">
                            </div>
                            <br>
                            <div class="form-group">
                                <button class="form-control btn btn-outline-primary btn-block">Pay Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>