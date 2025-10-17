<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About This Project - PHP CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">PHP CRUD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h1 class="mb-4 text-center">About This PHP CRUD Application</h1>
        <p>This project is a straightforward **CRUD (Create, Read, Update, Delete) application** designed to demonstrate fundamental web development concepts using a traditional PHP stack.</p>
        <p>It allows users to manage a list of records, each containing detailed information such as **First Name, Last Name, Phone, Store, and a unique identifier (UNIKEY)**. The application provides a user-friendly interface for adding new entries, viewing existing data, modifying record details, and removing unwanted entries.</p>
        
        <h3>Key Technologies & Concepts:</h3>
        <ul>
            <li><strong>Native PHP:</strong> Backend logic for handling data processing and database interactions.</li>
            <li><strong>MySQL Database:</strong> Used for persistent storage of application data.</li>
            <li><strong>Bootstrap 5:</strong> A modern CSS framework providing responsive and aesthetically pleasing UI components.</li>
            <li><strong>jQuery & AJAX:</strong> Enhances user experience by performing CRUD operations asynchronously without full page reloads, utilizing toast notifications for feedback.</li>
            <li><strong>Modular Structure:</strong> Separation of concerns with dedicated files for database connection (`db_connect.php`), CRUD functions (`functions.php`), and API endpoints (`api.php`).</li>
        </ul>

        <h3>Database Connection Details:</h3>
        <p>To connect this application to your MySQL database, use the following credentials:</p>
        <ul>
            <li><strong>Servername:</strong> <code>localhost</code></li>
            <li><strong>Username:</strong> <code>root</code></li>
            <li><strong>Password:</strong> (empty by default for XAMPP)</li>
            <li><strong>Database Name:</strong> <code>php_crud_db</code></li>
        </ul>

        <p class="mt-4 text-muted"><em>This application was created using **vibe coding with Gemini 2.5 Flash preview**, showcasing rapid development capabilities and AI-assisted programming.</em></p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <footer class="footer mt-auto py-3 bg-light">
        <div class="container text-center">
            <span class="text-muted">© 2025 PHP CRUD Application. Created by ABK DEVS.</span>
        </div>
    </footer>
</body>
</html>