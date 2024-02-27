<html>
<head>
    <title>Matching Leads</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"></link>
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #f4f5f7;
        }
        .navbar {
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0,0,0,.1);
        }
        .navbar-brand {
            font-weight: bold;
            color: #007bff;
        }
        .nav-link {
            color: #495057;
        }
        .nav-link.active {
            color: #007bff;
        }
        .lead-list-item {
            border-left: 4px solid transparent;
            padding: 1rem;
            background-color: #fff;
            margin-bottom: 8px;
            cursor: pointer;
        }
        .lead-list-item.active {
            border-left-color: #007bff;
            background-color: #e9ecef;
        }
        .lead-list-item:hover {
            background-color: #e9ecef;
        }
        .lead-list-item .time-ago {
            font-size: 0.8rem;
            color: #6c757d;
        }
        .lead-detail {
            border: 1px solid #dee2e6;
            background-color: #fff;
            padding: 1rem;
        }
        .lead-detail h5 {
            font-weight: 600;
        }
        .lead-detail .badge {
            background-color: #ffc107;
            font-weight: 600;
        }
        .lead-detail .btn {
            font-size: 0.9rem;
            padding: 0.375rem 0.75rem;
        }
        .lead-detail .btn-primary {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
        }
        .lead-detail .btn-outline-secondary {
            color: #6c757d;
            border-color: #6c757d;
        }
        .lead-detail .contact-info {
            display: flex;
            align-items: center;
            margin: 0.5rem 0;
        }
        .lead-detail .contact-info i {
            font-size: 1.2rem;
            color: #6c757d;
            margin-right: 0.5rem;
        }
        .lead-detail .guarantee-badge {
            display: flex;
            align-items: center;
            font-size: 0.8rem;
            margin-top: 0.5rem;
        }
        .lead-detail .guarantee-badge img {
            margin-right: 0.5rem;
        }
        .lead-detail .details-section {
            margin-top: 1rem;
        }
        .lead-detail .details-section h6 {
            font-weight: 600;
        }
        .lead-detail .details-section p {
            color: #6c757d;
        }
        .sidebar {
            background-color: #fff;
            padding: 1rem;
            height: 100vh;
            overflow-y: auto;
        }
        .content {
            padding: 1rem;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">bark</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Leads</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">My Responses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Settings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Help</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 sidebar">
                <h4>320 matching leads</h4>
                <div class="lead-list-item active">
                    <div class="d-flex justify-content-between">
                        <h5>Baljinder</h5>
                        <span class="time-ago">20m ago</span>
                    </div>
                    <p>Web Design</p>
                    <p>Hayes, Greater London (Nationwide)</p>
                    <p>Create a new website / To advertise my business/services / Small business (...)</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span>29 credits</span>
                        <a href="#" class="btn btn-primary">Be the 1st to respond</a>
                    </div>
                </div>
                <div class="lead-list-item">
                    <div class="d-flex justify-content-between">
                        <h5>Russell</h5>
                        <span class="time-ago">22m ago</span>
                    </div>
                    <p>Web Design</p>
                    <p>Ashford, TN25 (Nationwide)</p>
                    <p>Additional details / Create a new website / To advertise my business/services / ...</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span>36 credits</span>
                        <a href="#" class="btn btn-outline-secondary">Be the 1st to respond</a>
                    </div>
                </div>
                <div class="lead-list-item">
                    <div class="d-flex justify-content-between">
                        <h5>Kath</h5>
                        <span class="time-ago">1h ago</span>
                    </div>
                    <p>Web Design</p>
                    <p>...</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span>...</span>
                        <a href="#" class="btn btn-outline-secondary">...</a>
                    </div>
                </div>
                <!-- Repeat for each lead item -->
            </div>
            <div class="col-md-8 content">
                <div class="lead-detail">
                    <h5>Baljinder</h5>
                    <p>Web Design</p>
                    <p>Hayes, Greater London (Nationwide)</p>
                    <p>Happy to receive service online or remotely <i class="fas fa-info-circle"></i></p>
                    <div class="contact-info">
                        <i class="fas fa-phone"></i>
                        <span>078********</span>
                    </div>
                    <div class="contact-info">
                        <i class="fas fa-envelope"></i>
                        <span>b*****i@h********o.uk</span>
                    </div>
                    <div class="guarantee-badge">
                        <img src="https://placehold.co/20x20" alt="Guarantee badge icon">
                        <span>Covered by our Get Hired Guarantee</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <span class="badge">29 credits</span>
                        <div>
                            <button class="btn btn-primary">Contact Baljinder</button>
                            <button class="btn btn-outline-secondary">Not interested</button>
                        </div>
                    </div>
                    <div class="details-section">
                        <h6>Details</h6>
                        <p>What is your web design requirement?</p>
                        <p>Create a new website</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>