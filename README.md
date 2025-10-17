# 🏢 Company Management CRUD

A simple PHP & MySQL CRUD application to manage employees and departments in a company.

## 🚀 Features

- View all employees and departments  
- Add new employees or departments  
- Edit existing entries  
- Delete records  
- Displays timestamps and work modes (remote / hybrid / onsite) for departments  

## 🗂️ Database Structure

**Database:** `company`

### Tables

#### `employees`
| Column | Type | Description |
|---------|------|-------------|
| id | INT (PK, AUTO_INCREMENT) | Employee ID |
| fname | VARCHAR(255) | First name |
| lname | VARCHAR(255) | Last name |

#### `department`
| Column | Type | Description |
|---------|------|-------------|
| id | INT (PK, AUTO_INCREMENT) | Department ID |
| name | VARCHAR(255) | Department name |
| is_hiring | BOOLEAN | Hiring status |
| work_mode | ENUM('remote','hybrid','onsite') | Work mode |
| created_at | DATETIME | Creation date |
| updated_at | DATETIME | Last update |

## 🧩 Technologies Used

- **PHP (Vanilla)**  
- **MySQL**  
- **HTML / CSS**  
- **PDO for Database Connection**  

## ⚙️ Setup Instructions

1. Clone the repository:
   ```bash
   git clone https://github.com/Moudycode963/company.git
   cd company
Import the SQL schema:

bash
Code kopieren
mysql -u root -p < migrations/company.sql
Configure your database connection in:

arduino
Code kopieren
config/config.php
Start a local PHP server:

bash
Code kopieren
php -S localhost:8000 -t public
Open your browser and visit:

arduino
Code kopieren
http://localhost:8000
📄 Project Structure
pgsql
Code kopieren

company/
├── config/
│   ├── config.php
│   └── loader.php
├── migrations/
│   └── company.sql
├── public/
│   ├── index.php
│   └── .htaccess
├── src/
│   └── crud/
│       ├── create.php
│       ├── read.php
│       ├── update.php
│       ├── delete.php
│       └── show.php
├── view/
│   ├── index.php
│   └── 404.html
└── README.md





🧑‍💻 Author
Moudycode963
📍 Berlin, Germany
💻 Passionate about PHP, Web Development & Databases
🔗 GitHub Profile
