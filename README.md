# 🎓 Student Attendance Management System

## 📖 Project Overview

The Student Attendance Management System is a web-based application developed using **PHP** and **MySQL**. It helps manage student attendance efficiently by allowing users to add students, mark daily attendance, and generate attendance reports.

This project is designed for educational purposes and demonstrates the use of PHP for backend development and MySQL for database management.

---

## ✨ Features

- ➕ Add new students
- ✅ Mark daily attendance
- 📊 View attendance reports
- 💾 Store data using MySQL
- 🎨 Simple and user-friendly interface

---

## 🛠️ Technologies Used

- PHP
- MySQL
- HTML5
- CSS3
- XAMPP

---

## 📂 Project Structure

```
Student-Attendance-System/
│
├── add_student.php
├── db.php
├── index.php
├── mark_attendance.php
├── report.php
├── style.css
│
├── database/
│   └── attendance_db.sql
│
├── dataset/
│   ├── students.csv
│   └── attendance.csv
│
├── documentation/
│   ├── Installation_Guide.md
│   └── User_Manual.md
│
└── README.md
```

---

## 📋 Modules

### 🏠 Home

The home page provides navigation to all the modules of the system.

### ➕ Add Student

Allows users to add student details such as:

- Student Name
- Roll Number

### ✅ Mark Attendance

Users can:

- Select a student
- Mark attendance as Present or Absent
- Save attendance for the current date

### 📊 Attendance Report

Displays:

- Student Name
- Roll Number
- Attendance Status
- Attendance Date

---

## 🗄️ Database

Database Name

```
attendance_db
```

Tables

### students

| Field | Type |
|-------|------|
| id | INT |
| name | VARCHAR(100) |
| roll_no | VARCHAR(20) |

### attendance

| Field | Type |
|-------|------|
| id | INT |
| student_id | INT |
| status | ENUM(Present, Absent) |
| attendance_date | DATE |

---

## ⚙️ Installation

### Step 1

Install **XAMPP**.

### Step 2

Copy the project folder into:

```
xampp/htdocs/
```

### Step 3

Start:

- Apache
- MySQL

### Step 4

Open phpMyAdmin.

Create a database named:

```
attendance_db
```

### Step 5

Import:

```
database/attendance_db.sql
```

### Step 6

Open your browser and visit:

```
http://localhost/attendance_system/
```

---

## 📁 Dataset

The project contains sample datasets for testing.

- students.csv
- attendance.csv

---

## 🚀 Future Enhancements

- Admin Login
- Student Login
- Attendance Percentage
- Monthly Attendance Report
- Export Report to PDF
- Export Report to Excel
- Email Notifications

---

## 👩‍💻 Author

**Tejasvi Vidhate**

---

## 📄 License

This project is developed for educational and academic purposes.