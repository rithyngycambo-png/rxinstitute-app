# 🎓 RXInstitute - Laravel School Management System

A modern **School Management System** built using **Laravel** to manage students, lecturers, departments, and enrollments.

![Laravel](https://img.shields.io/badge/Laravel-E74430?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-00758F?style=for-the-badge&logo=mysql&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)

---

## 📚 About the Project

RXInstitute is a Laravel-based web app designed to provide CRUD operations for academic management:

- 👨‍🎓 **Students** - Add, edit, list, and delete student records.
- 👩‍🏫 **Lecturers** - Manage lecturer data.
- 🏛️ **Departments** - Department creation and listing.
- 📝 **Enrollments** - Assign students to departments with join date & fee info.

---

## 🛠️ Tech Stack

- **Languages**: PHP, HTML, CSS, JavaScript
- **Frameworks**: Laravel, Bootstrap
- **Database**: MySQL
- **Tools**: Git, GitHub, VS Code

---

## ⚙️ Features

- Full CRUD functionality for all entities
- Blade templating for clean layouts
- Form validation
- Flash messages on actions
- Responsive UI

---

## 🖼️ Screenshots

> *(Insert screenshots of your app UI here)*  
> For example: `/screenshots/student-index.png`

---

## 🚀 Getting Started

```bash
# Clone the repository
git clone https://github.com/yourusername/rxinstitute-app.git

# Install dependencies
composer install

# Copy .env file
cp .env.example .env

# Update DB settings in .env
# Then run:
php artisan key:generate
php artisan migrate
php artisan serve
