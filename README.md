# Student Management System

A web-based Student Management System built using PHP, MySQL, HTML, CSS, and Bootstrap. This system helps administrators manage student data, track attendance, record marks, and handle subjects in a user-friendly interface.

## 🚀 Features

- **Student Management**: Add, view, edit, and delete student records.
- **Attendance Tracking**: Record and view attendance for each student.
- **Marks Management**: Add and view marks for different subjects per student.
- **Subject Management**: Manage subject list with easy CRUD operations.
- **Authentication**: Secure login system to restrict access.
- **Responsive UI**: Sidebar navigation with a clean and responsive design.

## 🛠️ Technologies Used

- **Frontend**: HTML, CSS, Bootstrap
- **Backend**: PHP, MySQL
- **Libraries**: Select2 (for searchable dropdowns)

## 📸 Screenshots

Add screenshots here for a visual overview of the application’s features.

## 📂 Folder Structure

- `index.php` - Dashboard and main page.
- `db.php` - Database connection.
- `add_student.php`, `view_student.php`, etc. - Feature-specific pages.
- `assets/` - Contains CSS, JavaScript, and other assets.

## 📝 Getting Started

### Prerequisites

- [XAMPP](https://www.apachefriends.org/index.html) or similar (for PHP and MySQL support)
- Web browser

### Installation

1. **Clone the repository**:
   ```bash
   git clone https://github.com/sayan365/student-management-system.git
Move to XAMPP's htdocs directory:

Place the cloned folder (student-management-system) inside the htdocs folder of your XAMPP installation.
Database Setup:

Open phpMyAdmin.
Create a new database (e.g., student_system).
Import the database.sql file provided in the repository to create the necessary tables.
Update Database Configuration:

In db.php, update the database credentials (DB_HOST, DB_USER, DB_PASS, and DB_NAME) to match your local environment.
Running the Application
Start XAMPP:

Open XAMPP and start Apache and MySQL.
Access the Application:

Go to http://localhost/student-management-system/ in your browser.
Login:

Use your credentials to log in (configured in the database).
### 🔄 Usage
Dashboard: Access the main dashboard after logging in.
Manage Students: Add, edit, view, or delete student records.
Track Attendance: Record and view attendance.
Manage Marks: Add and view marks for each subject per student.
Manage Subjects: Add, edit, view, or delete subjects.
### 🔒 Authentication
Only authenticated users can access the system. If unauthorized, the user will be redirected to the login page. A session timeout feature automatically logs out inactive users.

### 🔄 Logout
To logout, click the "Logout" button in the sidebar. This will end your session and redirect you to the login page.

### 🤝 Contributing
Contributions are welcome! Feel free to submit a Pull Request or open an Issue to suggest improvements or report bugs.

### 📄 License
This project is licensed under the MIT License - see the LICENSE file for details.
