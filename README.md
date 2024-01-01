Laravel RESTful API Project
This project is a Laravel RESTful API that manages customer data and their associated invoices. It provides a comprehensive solution for managing customer transactions.

Getting Started
These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

Prerequisites
Before you begin, ensure you have met the following requirements:

You have installed PHP version 7.3 or higher.
You have installed Composer.
You have a MySQL server running.

Installing
Clone the repository: git clone https://github.com/Vooldz/Laravel-api.git
Navigate into the project directory: cd Laravel-api
Install the dependencies: composer install
Copy the .env.example file to .env:   cp .env.example .env
Generate an app encryption key: php artisan key:generate
Set your database connection details in the .env file.
Run the migrations and seed: php artisan migrate --seed
Start the server: php artisan serve
Now, your Laravel application should be running at http://localhost:8000.

Features
Create, retrieve, update, and delete customers.
Each customer can have multiple invoices.
Filter customers based on any field using operators like [eq] (equals), [lt] (less than), and [gt] (greater than).
Load all invoices for a customer using includeInvoices=true.

Usage
To interact with the API, use HTTP requests with the appropriate endpoint and parameters.

Filter Customers
To filter customers, append the field, operator, and value to the URL. For example, to find all customers whose name equals "Vooldz", use:
GET /api/customers?name[eq]=Vooldz

Load Customer Invoices
To load all invoices for a customer, use:
GET /api/customers?includeInvoices=true

Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.



