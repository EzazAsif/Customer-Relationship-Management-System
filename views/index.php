<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - CRM</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            border: none;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .btn-custom {
            background-color: #007bff;
            color: white;
        }
        .btn-custom:hover {
            background-color: #0056b3;
        }
        h2 {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>
    <div class="container mt-5">
        
        <h2 class="text-center">CRM Dashboard</h2>
        <div class="row mt-4">
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Contacts</h5>
                        <p class="card-text">Manage customer contacts.</p>
                        <a href="contacts.html" class="btn btn-custom">Go to Contacts</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Sales Automation</h5>
                        <p class="card-text">Manage and track sales leads.</p>
                        <a href="sales.html" class="btn btn-custom">Go to Sales</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Customer Support</h5>
                        <p class="card-text">Manage customer support tickets.</p>
                        <a href="support.html" class="btn btn-custom">Go to Support</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Marketing Automation</h5>
                        <p class="card-text">Run and track marketing campaigns.</p>
                        <a href="marketing.html" class="btn btn-custom">Go to Marketing</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="analytics.html" class="btn btn-custom btn-lg">Go to Analytics</a>
        </div>
    </div>
    
    <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
