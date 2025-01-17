# Simple Laravel 8 CRUD API

This is a simple Laravel 8 CRUD API project for managing a collection of books. It demonstrates basic CRUD operations, including creating, reading, updating, and deleting data, with endpoints accessible via RESTful API.

## Features
- View all books (GET `/api/books`)
- View a single book by ID (GET `/api/books/{id}`)
- Create a new book (POST `/api/books`)
- Update a book (PUT `/api/books/{id}`)
- Delete a book (DELETE `/api/books/{id}`)

## Requirements
- PHP 7.4 or higher
- Composer
- Laravel 8
- MySQL or MariaDB

## Installation

1. **Clone the repository**:
   ```bash
   git clone https://github.com/adjisdhani/simple-api-crud-lara8.git

2. **Navigate to the project directory**:
   ```bash
   cd simple-api-crud-lara8

3. **Install dependencies**:
   ```bash
   composer install

4. **Copy .env.example to .env**:
   ```bash
   cp .env.example .env

5. **Configure the .env file**:
   ```bash
    DB_CONNECTION=mysql
	DB_HOST=127.0.0.1
	DB_PORT=3306
	DB_DATABASE=simple_api_crud_lara8
	DB_USERNAME=root
	DB_PASSWORD=yourpassword

6. **Generate the application key**:
   ```bash
    php artisan key:generate

7. **Run the database migrations**:
   ```bash
    php artisan migrate

8. **(Optional) Seed the database with dummy data**:
   ```bash
    php artisan db:seed

9. **Start the development server**:
   ```bash
    php artisan serve

10. **Access the API**:
   (http://127.0.0.1:8000/api/books)

      ## API Endpoints 
    
    **1. Get All Books**

    - Method: GET
    - Endpoint: /api/books
    - Description: Retrieve a list of all books.

    **Example Response**:
       ```bash
       [
    	    {
    	        "id": 1,
    	        "title": "Data Title 1",
    	        "author": "Data Author 1",
    	        "published_year": 99999,
    	        "genre": "Data Genre 1",
    	        "summary": "Data Summary 1"
    	    }
    	]
       ```
    
    **2. Get a Single Book by ID**
    
    - Method: GET
    - Endpoint: /api/books/{id}
    - Description: Retrieve a single book by its ID.

    **Example Response**:
       ```bash
       [
    	    {
    	        "id": 1,
    	        "title": "Data Title 1",
    	        "author": "Data Author 1",
    	        "published_year": 99999,
    	        "genre": "Data Genre 1",
    	        "summary": "Data Summary 1"
    	    }
    	]
       ```
    
    **3. Create a New Book**
    
    - Method: POST
    - Endpoint: /api/books
    - <b>Body Parameters:</b>
      1. title (string, required)
      2. author (string, required)
      3. published_year (integer, required)
      4. genre (string, required)
      5. summary (string, optional)

    **Example Request**:
       ```bash
       [
    	    {
    	        "title": "Data Title 2",
    	        "author": "Data Author 2",
    	        "published_year": 99999,
    	        "genre": "Data Genre 2",
    	        "summary": "Data Summary 2"
    	    }
    	]
       ```
    **Example Response**:
       ```bash
       [
    	    {
    	        "id"   : 2,
    	        "title": "Data Title 2",
    	        "author": "Data Author 2",
    	        "published_year": 99999,
    	        "genre": "Data Genre 2",
    	        "summary": "Data Summary 2"
    	    }
    	]
       ```
    **4. Update a Book**
    
    - Method: PUT
    - Endpoint: /api/books
    - <b>Body Parameters:</b>
      1. title (string, required)
      2. author (string, required)
      3. published_year (integer, required)
      4. genre (string, required)
      5. summary (string, optional)

    **Example Request**:
       ```bash
       [
    	    {
                "title": "1984 (Updated Edition)",
                "published_year": 1950
            }

    	]
       ```
    **Example Response**:
       ```bash
       [
    	    {
                "id": 2,
                "title": "1984 (Updated Edition)",
                "author": "Data Author 2",
                "published_year": 1950,
                "genre": "Data Genre 2",
    	        "summary": "Data Summary 2"
            }
    	]
       ```
    **4. Delete a Book**
    
    - Method: DELETE
    - Endpoint: /api/books
    
    **Example Response**:
       ```bash
       [
    	    {
                "message": "Book deleted successfully."
            }
    	]
       ```
    ## Author
    Adjis Ramadhani Utomo

    ## License
    This project is licensed under the [MIT license](https://opensource.org/licenses/MIT).