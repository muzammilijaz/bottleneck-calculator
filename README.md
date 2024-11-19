
# PC Bottleneck Calculator

A responsive and SEO-friendly web application to calculate the bottleneck percentage of a PC configuration based on the selected processor, graphics card, screen resolution, and purpose. The application features a dynamic progress bar and user-friendly admin panel for adding configuration options.

## Features

- **User-Friendly Interface**: Intuitive and responsive design for users to select their PC components and calculate bottlenecks easily.
- **Dynamic Progress Bar**: Displays the bottleneck percentage with a smooth animation and corresponding message.
- **Admin Panel**: Allows admins to manage processors, graphics cards, resolutions, and purposes dynamically.
- **SEO Optimized**: Includes meta descriptions for better search engine visibility.
- **Real-Time Results**: The calculation result is displayed instantly on the same page without redirection.

## Demo

[PC Bottleneck Calculator](https://bottleneckcalculator.app/)

## Installation

Follow these steps to set up the project:

### Prerequisites

- A web server (e.g., Apache, Nginx)
- PHP 7.4 or above
- MySQL database
- Basic knowledge of setting up PHP applications

### Steps

1. **Clone the Repository**

   ```bash
   git clone https://github.com/yourusername/pc-bottleneck-calculator.git
   cd pc-bottleneck-calculator
   ```

2. **Set Up the Database**

   - Import the provided SQL commands to create the necessary tables:

     ```sql
     CREATE DATABASE bottleneck_calculator;

     USE bottleneck_calculator;

     CREATE TABLE processors (
         id INT AUTO_INCREMENT PRIMARY KEY,
         name VARCHAR(255) NOT NULL
     );

     CREATE TABLE graphic_cards (
         id INT AUTO_INCREMENT PRIMARY KEY,
         name VARCHAR(255) NOT NULL
     );

     CREATE TABLE resolutions (
         id INT AUTO_INCREMENT PRIMARY KEY,
         name VARCHAR(255) NOT NULL
     );

     CREATE TABLE purposes (
         id INT AUTO_INCREMENT PRIMARY KEY,
         name VARCHAR(255) NOT NULL
     );
     ```

3. **Configure the Database Connection**

   Update the `database.php` file with your database credentials:

   ```php
   <?php
   $servername = "localhost";
   $username = "your_username";
   $password = "your_password";
   $database = "bottleneck_calculator";

   $conn = mysqli_connect($servername, $username, $password, $database);

   if (!$conn) {
       die("Connection failed: " . mysqli_connect_error());
   }
   ?>
   ```

4. **Run the Application**

   - Place the project in your server's root directory (e.g., `/var/www/html` for Apache).
   - Open the application in your browser: `http://localhost/pc-bottleneck-calculator`.

## Project Structure

```plaintext
.
├── index.php          # Main user interface
├── admin.php          # Admin dashboard for managing options
├── database.php       # Database connection
├── process.php        # Handles form submissions (optional, unused in the final version)
├── style.css          # Styling for the application
├── scripts.js         # JavaScript for interactivity
└── README.md          # Project documentation
```

## Usage

### Admin Panel
1. Open `http://localhost/pc-bottleneck-calculator/admin.php`.
2. Add new options for processors, graphics cards, resolutions, and purposes.

### Calculator
1. Open `http://localhost/pc-bottleneck-calculator/`.
2. Select your configuration and calculate the bottleneck percentage.

## Contributing

Feel free to fork this repository, make improvements, and create pull requests.

## License

This project is licensed under the MIT License. See the `LICENSE` file for more details.

---

**Author**: Muzammil Ai  
**Demo Link**: [bottleneckcalculator.app](https://bottleneckcalculator.app/)
