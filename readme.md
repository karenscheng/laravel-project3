# Book Keeper API

### Running on your local machine:

1. Create a database locally named app
2. Download composer https://getcomposer.org/download/
3. Pull Laravel/php project from git provider.
4. Open the console and cd your project root directory
5. Run composer install or php composer.phar install
6. Run php artisan key:generate
7. Run php artisan migrate
8. Run php artisan db:seed to run seeders, if any.
9. Run php artisan serve

Project should now run on localhost://8888

### API Gitbook: 
https://karenscheng.gitbooks.io/book-keeper/content/

## HTTP Requests:

### GET

| **HTTP Request** | **Route** | **Description** |
| :--- | :--- | :--- |
| GET | /books | Retrieves all stored books |
| GET | /books/{id} | Retrieves book with specific id |
| GET | /authors | Retrieves all stored authors |
| GET | /authors/{id} | Retrieves author with specific id |
| GET | /genres | Retrieves all stored genres |
| GET | /genres/{id} | Retrieves author with specific id |

### POST

| **HTTP Request** | **Route** | **Description** |
| :--- | :--- | :--- |
| POST | /books | Adds book to database |
| POST | /authors | Adds author to database |
| POST | /genres | Adds genre to database |

### PUT

| **HTTP Request** | **Route** | **Description** |
| :--- | :--- | :--- |
| PUT | /books/{id} | Replaces current book stored at specific id |
| PUT | /authors/{id} | Replaces current author stored at specific id |
| PUT | /genres/{id} | Replaces current genre stored at specific id |

### DELETE

| **HTTP Request** | **Route** | **Description** |
| :--- | :--- | :--- |
| DELETE | /books/{id} | Deletes current book stored at specific id |
| DELETE | /authors/{id} | Deletes current author stored at specific id |
| DELETE | /genres/{id} | Deletes current genre stored at specific id |

### Personal Portfolio:

http://karenscheng.com/
