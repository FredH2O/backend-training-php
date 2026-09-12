# PHP Backend Training 🐘

This repository documents my journey learning backend development with PHP.

I'm building things step by step, starting with PHP fundamentals and gradually moving towards more practical backend concepts and eventually Laravel.

## 📚 What I'm Learning

### PHP Basics

- Variables and data types
- Arrays
- Loops and `foreach`
- Functions
- Type declarations
- Strict typing

### Forms & User Input

- `$_GET`
- `$_POST`
- `$_SERVER`
- Form handling
- Input validation
- `isset()`
- `filter_var()`
- `htmlspecialchars()`
- Basic XSS prevention

### Data & APIs

- JSON
- `json_encode()`
- Working with structured data

### Sessions & Authentication

- `session_start()`
- `$_SESSION`
- `isset()` and `unset()`
- Login systems
- Protected pages
- Logout
- Session destruction
- Password hashing with `password_hash()`
- Password verification with `password_verify()`

### Databases

- MySQL
- Creating databases
- Creating tables
- SQL basics
- MySQL users and permissions
- PDO
- Connecting PHP to MySQL
- Prepared statements
- Storing user data

## 🗂️ Project Structure

```text
01-php-basics/

├── variables.php
├── arrays.php
├── loops.php
├── functions.php
├── forms.php
├── validation.php
├── json.php
├── session.php
├── login.php
├── protected.php
├── logout.php
├── register.php
├── config.php
└── .gitignore
```

The files are small exercises that build on each other as I learn new concepts.

`config.php` contains the local database connection and is excluded from Git using `.gitignore`.

## 🗄️ Current Database

MySQL is running locally with a database called:

```text
backend_training
```

The current `users` table contains:

```text
users
├── id
├── username
└── password
```

Passwords are hashed before being stored rather than saving them as plain text.

## 🚀 Running Locally

Make sure PHP and MySQL are installed.

From the project directory, start the PHP development server:

```bash
php -S localhost:8000
```

Then open:

```text
http://localhost:8000
```

MySQL can be accessed locally using the MySQL command line.

## 🎯 Goal

The goal of this repository is to develop a solid understanding of backend fundamentals before moving on to larger PHP applications and Laravel.

I'm focusing on understanding how things work rather than simply copying solutions.

## 📈 Progress

- [x] PHP fundamentals
- [x] Variables & arrays
- [x] Loops
- [x] Functions
- [x] Forms & superglobals
- [x] Validation
- [x] JSON
- [x] Sessions
- [x] Basic login/logout
- [x] Password hashing
- [x] MySQL installation
- [x] Database creation
- [x] `users` table creation
- [x] Basic PDO connection setup
- [ ] Complete PHP → MySQL connection test
- [ ] Store registered users in MySQL
- [ ] CRUD
- [ ] Password verification
- [ ] APIs
- [ ] Laravel
- [ ] Build a complete backend project
