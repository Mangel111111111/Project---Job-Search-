# Project-JobSearch
## :book: Description of the Project
Develop a web application using Laravel to help users efficiently manage and track their job applications. The application will allow users to register, organise and monitor the status of job opportunities they have applied for, optimising the job search process and providing detailed control over interactions with companies.

## :camera: Screenshots
![Diagram](https://res.cloudinary.com/del1j3jge/image/upload/v1733904515/cct900ob3u2ktxqjuo7h.png)
![Diagram](https://res.cloudinary.com/del1j3jge/image/upload/v1733904515/phpvvsuqdlr5cntcis2z.png)

## :cyclone: Pre-Requirements

- A database manager (XAMMP, MAMP or similar)
- A web browser (Firefox, Opera, Chrome or similar)
- An API manager (Postman or similar)
- An IDE (VS Code or similar)
- GIT
  - GIT Bash

## :wrench: installation guide
### :open_file_folder: Project preparation
**Clone** the **repository** in Visual Studio.
> [!IMPORTANT]
> Have **Composer** and **XAMPP** correctly installed for the database to work.

> [!TIP]
> To install Composer and its IDE we must enter in **Git Bash** the **command**:
```php
$ composer install
```
```php
$ npm install
```
Open two GIT Bash and type the following commands, one on each prompt:
```php
$ php artisan serve
```
```php
$ npm run dev
```
In the "php artisan serve" prompt, there's a link to the page.

### :open_file_folder: Data Base

 In the XAMPP control panel: 

- Run the **Apache** and **MySQL** modules by pressing **Start**. 

- Open the **Admin** of **Apache**.
  - we create a database which we name as ‘JobSearchApp’.

### :open_file_folder: Page Display
open a new git bash prompt and type the following command:
```php
$ php artisan key:generate
```
Change the following section in .env file:
- DB_CONNECTION=mysql
- DB_DATABASE=insideOutApp

Open a git bash prompt and type the following command:
```php
$ php artisan migrate:fresh
```
with all this done you should now be able to view the website.

## Endpoints
- An endpoint is the URL of the API you want to interact with.
- Follow the next steps.
- 1 - Install Postman and open it.
- 2 - Open a new request, the most used are: Get, Get by id, Post, Put and Delete.
- 3 - Copy the link you want to use, and paste on postman, next to the Request.
-   GET: to retrieve data, POST: to send data (create), PUT: to update data, DELETE: to delete data.
- 4 - Examples and screenshots.

- This one is GET (all), you have to use http://127.0.0.1:8000/api/vacancies
---
- This one is GET by id, you have to use http://127.0.0.1:8000/api/vacancies/{id}
---
- This one is POST, you have to use http://127.0.0.1:8000/api/vacancies and select "Body" and "raw" to be able to write.
![Create](https://res.cloudinary.com/del1j3jge/image/upload/v1733825559/ach0r79w74fufe261pxr.png)
---
- This one is DELETE, you have to use http://127.0.0.1:8000/api/journals/{id}
---
- This one is PUT, you have to use http://127.0.0.1:8000/api/vacancies/{id} and select "Body" and "raw" to be able to write.
![put](https://res.cloudinary.com/del1j3jge/image/upload/v1733825741/kcwv0enic1pdkeb3r2bt.png)
---
- This one is POST (this Post is to add news to existing job offers.), you have to use http://127.0.0.1:8000/api/vacancies/{id}/follows and select "Body" and "raw" to be able to write.
![POST NEWS](https://res.cloudinary.com/del1j3jge/image/upload/v1733826634/udaqlcvgtpcotx2ickmw.png)

## :white_check_mark: Testing
To launch the tests we use the following command:
```php
$ php artisan test
```
Additionally, if you have Xdebug installed, you can see the test coverage.
```php
$ php artisan test --coverage
```
![Test](https://res.cloudinary.com/del1j3jge/image/upload/v1733904515/vzccinx7tcbxnxbir727.png)

## Database Diagram
![Diagram](https://res.cloudinary.com/del1j3jge/image/upload/v1733824167/jcvo4elntk5i86hw6ogp.png)

## :notebook_with_decorative_cover: Technologies
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='HTML5' src='https://img.shields.io/badge/HTML5-100000?style=for-the-badge&logo=HTML5&logoColor=white&labelColor=E34F26&color=E34F26'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='CSS3' src='https://img.shields.io/badge/CSS3-100000?style=for-the-badge&logo=CSS3&logoColor=white&labelColor=1572B6&color=1572B6'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='JavaScript' src='https://img.shields.io/badge/JavaScript-100000?style=for-the-badge&logo=JavaScript&logoColor=white&labelColor=F7DF1E&color=F7DF1E'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='php' src='https://img.shields.io/badge/PHP-100000?style=for-the-badge&logo=php&logoColor=white&labelColor=777BB4&color=777BB4'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='laravel' src='https://img.shields.io/badge/Laravel-100000?style=for-the-badge&logo=laravel&logoColor=white&labelColor=FF2D20&color=FF2D20'/></a>

<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='Git' src='https://img.shields.io/badge/Git-100000?style=for-the-badge&logo=Git&logoColor=white&labelColor=F05032&color=F05032'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='GitHub' src='https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=GitHub&logoColor=white&labelColor=181717&color=181717'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='composer' src='https://img.shields.io/badge/Composer-100000?style=for-the-badge&logo=composer&logoColor=white&labelColor=885630&color=885630'/></a>
    
## :godmode: Author :godmode:
[Miguel Ángel García López](https://github.com/Mangel111111111)
