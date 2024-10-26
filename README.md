# Student Management System

A fully functional **Student Management System** built using **PHP**, **MySQL**, **HTML**, **CSS**, and **Bootstrap**. This application provides a streamlined way to manage students, track their attendance, record marks, and handle subject assignments in an intuitive and user-friendly interface.

## 🚀 Features

- **Student Management**: Easily add, view, edit, and delete student records.
- **Attendance Tracking**: Record and track attendance for each student.
- **Marks Management**: Record and view marks for various subjects.
- **Subject Management**: Manage subject list with options to add, view, edit, and delete subjects.
- **Authentication**: Secure login system to ensure data privacy and control access.
- **Responsive UI**: Sidebar navigation for easy page access, and a modern design.

## 🛠️ Technologies Used

- **Frontend**: HTML, CSS, Bootstrap
- **Backend**: PHP, MySQL
- **Libraries**: Select2 (for searchable dropdowns)

## 📸 Screenshots
![Dashboard Screenshot](https://github.com/user-attachments/assets/1458f1a1-6da1-440c-8984-de26cd958a29)
---
![View Student Screenshot](https://github.com/user-attachments/assets/a1f44e89-46e1-41a1-8c37-6731529617b1)
---
![Add Student Screenshot](https://github.com/user-attachments/assets/5bc0e03a-4e81-4559-891e-7fb9722dcdd8)


## 📂 Folder Structure

- `index.php` - Main dashboard page.
- `db.php` - Database connection file.
- `add_student.php`, `view_student.php`, etc. - Feature-specific files.
- `assets/` - Folder for CSS, JavaScript, and other assets.

## 📝 Getting Started

### Prerequisites

- [XAMPP](https://www.apachefriends.org/index.html) or similar (for running PHP and MySQL).
- Web browser to view the application.

### Installation

1. **Clone the repository**:
   ```bash
   git clone https://github.com/sayan365/student-management-system.git
   
2. **Move the project to XAMPP's htdocs folder:**

    - Place the cloned `student-management-system` folder inside the `htdocs` directory of your XAMPP installation.

3. **Set up the database:**

   - Open phpMyAdmin (usually accessible at [http://localhost/phpmyadmin](http://localhost/phpmyadmin)).
   - Create a new database (e.g., `student_system`).
   - Import the provided SQL file (`database.sql`) in the repository to set up the necessary tables.

4. **Update database configurations:**

   - In the `db.php` file, ensure the database credentials (username, password, and database name) match your local environment.

### Running the Application
1. Start XAMPP:
 - Open XAMPP and start Apache and MySQL services.

3. Access the Application:
 - Go to http://localhost/student-management-system/ in your browser.

3. Login:
 - Use your credentials to log in (configured in the database).

### 🔄 Usage
**Dashboard:** Access all main features from the main dashboard after logging in.
**Manage Students:** Add, edit, view, or delete student information.
**Track Attendance:** Record and view attendance details.
**Manage Marks:** Add and view marks for each subject and student.
**Manage Subjects:** Add, edit, view, or delete subject records.
### 🔒 Authentication and Logout
Authenticated access is required. Unauthorized users are redirected to the login page. Use the "Logout" button in the sidebar to end the session.

### 🤝 Contributing
Contributions are welcome! To contribute:
- Fork the repository.
- Create a branch with descriptive naming (e.g., feature/new-feature).
- Make your changes and create a pull request.
  
### 📄 License
This open-source project is available under the [MIT License](LICENSE).
---
**Author**: Sayan  
For any inquiries, feel free to contact me via GitHub or other platforms.
