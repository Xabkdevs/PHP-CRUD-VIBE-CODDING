# PHP Native CRUD Application

This is a simple CRUD (Create, Read, Update, Delete) application built using native PHP, Bootstrap for frontend styling, and JavaScript (jQuery) for AJAX operations. This application was created using vibe coding with Gemini 2.5 Flash preview.

## Features

*   **Create:** Add new records with First Name, Last Name, Phone, Store, and a unique key (UNIKEY).
*   **Read:** Display all existing records in a table.
*   **Update:** Edit existing records via a modal form.
*   **Delete:** Remove records from the database.
*   **Responsive Design:** Built with Bootstrap 5 for a mobile-first approach.
*   **AJAX:** Seamless CRUD operations without page reloads.
*   **Toast Notifications:** User feedback for operations using Bootstrap toasts.

## Technologies Used

*   PHP (Native)
*   MySQL (Database)
*   Bootstrap 5 (CSS Framework)
*   jQuery (JavaScript Library)
*   HTML5

## Setup Instructions

To get this application up and running on your local machine, follow these steps:

### 1. Prerequisites

*   **XAMPP** (or any other Apache/MySQL/PHP stack) installed and running.

### 2. Clone the Repository

```bash
git clone <your-repository-url>
cd phpnativ
```

### 3. Place Files in XAMPP htdocs

Ensure your XAMPP Apache server is running. Copy the entire `phpnativ` folder into your XAMPP's `htdocs` directory (e.g., `c:\xampp\htdocs\`).

### 4. Database Setup

You need to create a database and a table for the application.

*   Open your web browser and go to `http://localhost/phpmyadmin`.
*   Create a new database named `php_crud_db`.
*   Select the `php_crud_db` database and execute the following SQL queries in the SQL tab to create and configure the `users` table:

```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    store VARCHAR(255) NOT NULL,
    unikey VARCHAR(255) NOT NULL UNIQUE,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
```

### 5. Run the Application

*   Open your web browser and navigate to `http://localhost/phpnativ/index.php`.

You should now see the CRUD application interface, where you can add, view, edit, and delete records.

## Database Connection Details

*   **Servername:** `localhost`
*   **Username:** `root`
*   **Password:** (empty)
*   **Database Name:** `php_crud_db`

## Contributing

Feel free to fork this repository and contribute. If you find any issues or have suggestions for improvements, please open an issue or submit a pull request.

## License

This project is open-source and available under the [MIT License](LICENSE).