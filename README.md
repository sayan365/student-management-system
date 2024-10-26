# Student Management System

A comprehensive student management system built with PHP, MySQL, HTML, and CSS. This web-based application allows educators and administrators to manage students, attendance, marks, and subjects efficiently.

## Features

- **Student Management**: Add, view, edit, and delete student records with details like enrollment number, department, phone number, etc.
- **Attendance Tracking**: Record and view student attendance.
- **Marks Management**: Enter and view student marks across different subjects.
- **Subject Management**: Manage the list of subjects with easy CRUD operations.
- **User-Friendly Interface**: Modern and responsive UI/UX with sidebar navigation for easy access to all functionalities.
- **Authentication**: Secure login system to ensure data protection.

## Technologies Used

- **Backend**: PHP, MySQL
- **Frontend**: HTML, CSS, Bootstrap
- **Additional Libraries**: Select2 for enhanced dropdowns

## Screenshots

![Dashboard Screenshot](path/to/your/dashboard-screenshot.png)
![Add Student Screenshot](path/to/your/add-student-screenshot.png)
![Attendance Screenshot](path/to/your/attendance-screenshot.png)

> *Add your screenshots to visually showcase the application.*

## Getting Started

### Prerequisites

- XAMPP (or any similar local server with PHP and MySQL support)
- Web browser

### Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/sayan365/student-management-system.git
    ```

2. Move the project to XAMPP's htdocs folder: Place the cloned `student-management-system` folder inside the `htdocs` directory of your XAMPP installation.

3. Set up the database:

   - Open phpMyAdmin (usually accessible at [http://localhost/phpmyadmin](http://localhost/phpmyadmin)).
   - Create a new database (e.g., `student_system`).
   - Import the provided SQL file (`database.sql`) in the repository to set up the necessary tables.

4. Update database configurations:

   - In the `db.php` file, ensure that the database credentials (username, password, and database name) match those of your local environment.

### Usage

1. Start XAMPP:

   - Launch XAMPP and start both Apache and MySQL.

2. Access the application:

   - Open your browser and navigate to [http://localhost/student-management-system/](http://localhost/student-management-system/).

3. Login:

   - Use the credentials set up in the database to log in. The application will redirect to the dashboard after a successful login.

4. Navigate through the system:

   - Use the sidebar for easy access to add, view, edit, and delete student data, attendance, marks, and subjects.

## Folder Structure

student-management-system/ ├── index.php # The main dashboard page. ├── db.php # Database connection file. ├── add_student.php # Page for adding a student. ├── view_student.php # Page for viewing students. ├── attendance.php # Page for managing attendance. ├── marks.php # Page for managing marks. ├── subjects.php # Page for managing subjects. ├── assets/ # Contains CSS files, JavaScript files, and other assets. └── database.sql # SQL file for setting up the database.

python
Copy code

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request or create an Issue for bug fixes, feature requests, or improvements.

## License

This project is open-source and available under the [MIT License](LICENSE).
