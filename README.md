# Warehouse-Management-System
https://youtu.be/kZvyh3m6-3E
Laravel Warehouse Management System
Introduction

Warehouse Management System for Mikefel Enterprise
Mikefel Enterprise operates a central warehouse that stocks a variety of items. From this warehouse, the company distributes products to its various branches located across Ghana. To streamline this distribution process and improve efficiency, Mikefel Enterprise has implemented a Warehouse Management System (WMS).
This system, built on the Laravel PHP framework, enables real-time tracking and management of inventory, making it easier to oversee stock levels, monitor stock movements, and optimize the supply chain across all branches.
Technologies Used:

    Backend: PHP (Laravel Framework)
    Frontend: HTML, CSS, JavaScript, JQuery
    Asynchronous Communication: AJAX

With this setup, Mikefel Enterprise can manage their warehouse operations more efficiently, ensuring timely and accurate deliveries to branches nationwide.

Functional Requirements

Category Management
Ability to create, view, edit, and delete product categories.
Categories serve as the primary classification of inventory items.
Subcategory Management
Create and associate subcategories with specific categories.
Allows detailed organization of products for easy tracking.
Product Management
Add new products to the inventory with attributes like name, SKU, quantity, and price.
View product details including category, subcategory, stock levels, and other metadata.
Edit product details when necessary.
Delete obsolete or inactive products from the system.
Restocking Items
Track stock levels and generate alerts when quantities fall below a predefined threshold.
Enable seamless restocking by adding new quantities to existing products.
Maintain records of restocking events, including supplier details and dates.

Non-Functional Requirements

User Account Creation
Secure registration system for users.
Validation mechanisms for input data during account creation.
Roles and Permissions
Assign specific roles such as Administrator, Manager, and Employee.
Define granular permissions for each role, ensuring users can only access and modify data based on their role.
Audit Trail
Record all critical activities such as product additions, deletions, stock updates, and user actions.
Include details like timestamps, user IDs, and action descriptions.
Login and User Activities
Secure login functionality with encrypted credentials.
Track user login activities, including successful and failed attempts.
Monitor user actions within the system to ensure accountability and transparency.

Conclusion
The Warehouse Management System is structured to enhance operational efficiency, maintain inventory accuracy, and ensure secure user management. By combining functional requirements such as inventory categorization and restocking with robust non-functional features like roles, permissions, and audit trails, this system supports comprehensive warehouse operations.

Clone the repo and follow below steps.
Run composer install
Copy .env.example to .env
Set valid database credentials of env variables DB_DATABASE, DB_USERNAME, and DB_PASSWORD
Import the database in the Project
Run php artisan key:generate to generate application key
Run php artisan serve as per your environment
Demo Credentials
User: donkorakwasipoku@gmail.com
Password: Admin@1$$
Project Title; **Warehouse System Management **

My Name; Donkor Akwasi Poku

My GitHub name; Griffin9475

My edX username; Griffin1993

Country: Ghana

Date recorded;*~ 24/12/2024~


