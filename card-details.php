<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gift Card Details | AirAsia Rewards</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <nav class="site-nav border-bottom bg-white">
        <div class="container d-flex align-items-center justify-content-between py-3">
            <a class="site-brand" href="card-list.php">AirAsia Rewards</a>
            <div class="site-links">
                <a href="card-list.php">Gift Cards</a>
                <a href="card-add.php">Add Gift Card</a>
                <a href="login.php">Logout</a>
            </div>
        </div>
    </nav>

    <main class="container py-4">
        <h1 class="mb-3">Gift Card Details</h1>
        <p>Review this gift card before updating it.</p>

        <div class="row align-items-start g-4">
            <div class="col-md-4">
                <img class="img-fluid img-thumbnail" src="images/gift-card.png" alt="Amazon $25 Gift Card">
            </div>
            <div class="col-md-8">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th scope="row">Card Name</th>
                                <td>Amazon $25 Gift Card</td>
                            </tr>
                            <tr>
                                <th scope="row">Card Type</th>
                                <td>Retail</td>
                            </tr>
                            <tr>
                                <th scope="row">Card Value</th>
                                <td>$25.00</td>
                            </tr>
                            <tr>
                                <th scope="row">Points Required</th>
                                <td>5,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <a class="btn btn-primary me-2" href="card-update.php">Update Gift Card</a>
                <a class="btn btn-outline-secondary" href="card-list.php">Back to List</a>
            </div>
        </div>
    </main>
</body>

</html>
