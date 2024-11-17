<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


# Pharmacy System

This project is designed to streamline pharmacy operations with an intuitive CRUD interface for managing products, categories, and suppliers. It includes key features like assigning products to suppliers, managing customer data, and registering sales transactions with invoice generation, ensuring an efficient and user-friendly experience for staff.

---

## Features
- **Product Management:** Create, read, update, and delete product information.
- **Category Management:** Organize products with customizable categories.
- **Supplier Management:** Full CRUD functionality to register and manage suppliers.
- **Product-Supplier Assignment:** Link specific products to their respective suppliers.
- **Customer Management:** CRUD functionality for registering and managing customer data.
- **Sales Registration:** Log sales transactions and generate invoice totals.

---

## Requirements
- **Technologies Used:**
      - HTML
      - CSS
      - JavaScript
      - PHP
      - Laravel
      - MySQL
      - Bootstrap
      - MVC Architecture
- **Dependencies:** [Melody](https://melody.sensiolabs.org/) for lightweight dependency management in PHP scripts

---


## Installation
1. Clone the repository:  
   ```bash
   git clone https://github.com/julianasantosss/pharmacy-management-system.git
   ```

2. Navigate to the project directory:  
   ```bash
   cd pharmacy-management-system
   ```

3. Install the necessary dependencies:  
   ```bash
   composer install
   ```

4. Generate the application key:  
   ```bash
   php artisan key:generate
   ```

5. Run the migrations to set up the database schema:  
   ```bash
   php artisan migrate
   ```

8. Serve the application locally:  
   ```bash
   php artisan serve
   ```

9. Open your browser and access the application at:  
   `http://localhost:8000`
---

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
