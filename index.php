<?php

require_once('config.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Razorpay Demo</title>
</head>

<body class="bg-light">
    <div class="container">
        <div class="row my-5">
            <div class="col-4 mx-auto">
                <div class="card roudned shadow">
                    <div class="card-body">
                        <h5 class="text-center text-primary">Dontane Now</h5>
                        <hr>
                        <form action="confirm.php" method="POST" id="payemnt-from">
                            <div class="form-group">
                                <label for="amount">Amount you want to dontate</label>
                                <input type="number" name="amount" id="amount" class="form-control rounded" placeholder="EG: Rs. 100" required>
                            </div>
                            <div class="form-group">
                                <label for="username">Sending Name</label>
                                <input type="text" name="username" id="username" class="form-control rounded" placeholder="EG: John Dow" required>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>