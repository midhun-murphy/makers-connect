# Makers Connect

Makers Connect is a web-based marketplace platform designed to connect cotton yarn vendors and weaving product manufacturers directly with customers.

The platform enables vendors to showcase handcrafted yarn and textile products while allowing customers to browse, estimate costs, and place orders through a simple and user-friendly interface.

---

## Live Demo

🔗 GitHub Repository: https://github.com/midhun-murphy/makers-connect

---

# Project Overview

Makers Connect was developed to support local weavers and yarn manufacturers by creating a digital platform where they can directly reach customers without middlemen.

The system focuses on:
- Vendor accessibility
- Product transparency
- Fair trade support
- Secure transactions
- Simplified ordering process

---

# Features

## User Authentication
- User Registration
- Login System
- Session Handling

## Product Marketplace
- Browse cotton yarn products
- View pricing and product details
- Product inquiry option

## Cost Estimation System
- Calculates estimated final cost
- Distance-based shipping estimation
- Interest and shipping calculations

## Payment Module
- Payment details form
- Order submission workflow

## Vendor-Customer Connection
- Direct interaction between vendors and buyers
- Supports handcrafted textile businesses

---

# Tech Stack

## Frontend
- HTML5
- CSS3
- JavaScript

## Backend
- PHP

## Database
- MySQL

## Tools Used
- XAMPP
- VS Code

---

# System Workflow

1. User registers/login
2. User browses available yarn products
3. User selects products
4. Shipping and final cost are estimated
5. User proceeds to payment
6. Order gets submitted

---

# Project Screenshots

## Home Page
![Home Page](screenshots/home.png)

## Registration Page
![Register](screenshots/register.png)

## Login Page
![Login](screenshots/login.png)

## Product Listing
![Products](screenshots/products.png)

## Cost Estimation
![Estimate](screenshots/estimate.png)

## Payment Page
![Payment](screenshots/payment.png)

---

# Folder Structure

```bash
makers-connect/
│
├── css/
├── images/
├── js/
├── php/
├── database/
├── screenshots/
├── index.php
├── login.php
├── register.php
└── README.md

---

## Installation Guide

## Clone Repository

```bash
git clone https://github.com/midhun-murphy/makers-connect.git
```
## Move Project to XAMPP

Copy the project folder into:

```bash
C:/xampp/htdocs/
```

---

## Start Apache and MySQL

Open XAMPP Control Panel and start:

* Apache
* MySQL

---

## Import Database

Open browser and go to:

```bash
http://localhost/phpmyadmin
```

Create a new database:

```bash
makers_connect
```

Click **Import**

Select your SQL file from:

```bash
database/makers_connect.sql
```

Click **Go**

---

## Run the Project

Open browser and run:

```bash
http://localhost/makers-connect
```

---

# Future Enhancements

* Online payment gateway integration
* Real-time order tracking
* Vendor dashboard
* Product reviews and ratings
* AI-based product recommendations
* Mobile responsive UI improvements
* Admin analytics dashboard

---

# Learning Outcomes

Through this project, we learned:

* Full-stack web development
* Authentication handling
* Database integration
* Ecommerce workflow design
* UI/UX implementation
* Cost estimation logic
