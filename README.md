# Cloud-Based Secure Database Access System

## Overview

The Cloud-Based Secure Database Access System protects sensitive information against SQL injection attacks using secure authentication and database access mechanisms.

---

## Technologies Used

- PHP
- MySQL
- HTML
- CSS

---

## Cloud Platform Support

- InfinityFree
- AWS EC2 + RDS
- Microsoft Azure
- Google Cloud Platform

---

## Features

- User Registration
- User Login
- Password Hashing
- Prepared Statements
- Session Management
- SQL Injection Prevention

---

## Project Structure

```text
register.php
login.php
dashboard.php
logout.php
db.php
style.css
database.sql
```

---

## Architecture

User

↓

Cloud Web Application

↓

Secure Authentication Module

↓

SQL Injection Prevention Layer

↓

Cloud Database

---

## Cloud Deployment

For deployment on InfinityFree, AWS, Azure or Google Cloud, only the database credentials inside `db.php` need to be updated according to the credentials provided by the hosting platform.

---

## Future Enhancements

- AES-256 Encryption
- Multi-Factor Authentication
- AWS RDS Integration
- Real-Time Threat Monitoring
