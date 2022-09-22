<h1 align="center">School Management System</h1>

<p align = "center">This is one of my open source portfolio projects that I will be working on during the semester break to build a school management system that might in the future be used and utilized by various school agencies that need this application for their agency needs.</p>

## Notes

-   Thanks to Kazi Ariyan who is the owner of the course from easylearning.bd who has guided and helped in making this project
-   If you want to take the source code or clone this repository, please follow my github or star this repository to support and encourage me
-   All content in this school management system application is written in Indonesian, but you can change it to a language you understand
-   Sorry for my bad english, I am learning a lot of new things everyday and I am still learning how to write in english.

## Current Tech Stack

-   HTML 5
-   CSS
-   SCSS
-   PHP
-   Javascript
-   JQuery
-   Laravel
-   Jetstream
-   Livewire

## Road Map

| Date                  | Progress                                    |
| :-------------------- | :------------------------------------------ |
| **27 June 2022**      | Installing Laravel 9 Framework              |
| **28 June 2022**      | Installing Laravel Jetstream Authentication |
| **28 June 2022**      | Create Database and Migration               |
| **29 June 2022**      | Customize Admin Dashboard                   |
| **29 June 2022**      | Dashboard Page Segmentation                 |
| **29 June 2022**      | Create Users Logout System                  |
| **29 June 2022**      | Customize Login Form                        |
| **30 June 2022**      | Customize Register Form                     |
| **30 June 2022**      | Customize Forgot Password Form              |
| **1 July 2022**       | Reduction Admin Template                    |
| **17 July 2022**      | Users Management Stage 1                    |
| **18 July 2022**      | Users Management Stage 2                    |
| **19 July 2022**      | Fetch and Display User Data From Database   |
| **20 July 2022**      | Insert User Data into Database              |
| **21 July 2022**      | Edit and Update User Data in Database       |
| **21 July 2022**      | Delete User Data from Database              |
| **22 July 2022**      | Add User Profile Image Stage 1              |
| **23 July 2022**      | Add User Profile Image Stage 2              |
| **24 July 2022**      | Update User Profile                         |
| **25 July 2022**      | Add Change Password Feature                 |
| **26 July 2022**      | Add Student Class Management Feature        |
| **26 July 2022**      | Insert Student Class into Database          |
| **27 July 2022**      | Update and Delete Student Class in Database |
| **27 July 2022**      | Insert Student Year into Database           |
| **28 July 2022**      | Update and Delete Student Year in Database  |
| **28 July 2022**      | Add Student Group Management Feature        |
| **29 July 2022**      | Add Exception Handling and Fix Route Access |
| **30 July 2022**      | Add Student Shift Management Feature        |
| **30 July 2022**      | Add Student Fee Category                    |
| **30 July 2022**      | Add Student Fee Amount Stage 1              |
| **1 August 2022**     | Add Student Fee Amount Stage 2              |
| **2 August 2022**     | Edit Student Fee Amount Stage 1             |
| **3 August 2022**     | Edit Student Fee Amount Stage 2             |
| **3 August 2022**     | Add Details View Student Fee Amount Feature |
| **4 August 2022**     | Add Student Exam Management Feature         |
| **4 August 2022**     | Add School Subject Management Feature       |
| **5 August 2022**     | Assign Subject Management Stage 1           |
| **6 August 2022**     | Assign Subject Management Stage 2           |
| **7 August 2022**     | Edit Assign Subject Management              |
| **8 August 2022**     | Details and Delete Assign Subject Feature   |
| **9 August 2022**     | Add School Designation Management Feature   |
| **10 August 2022**    | Refactoring and Remodeling Users Database   |
| **11 August 2022**    | Implement Role Access Authentication        |
| **12 August 2022**    | Implement Random Generate User Id           |
| **13 August 2022**    | Create Student Registration Form Stage 1    |
| **14 August 2022**    | Create Student Registration Form Stage 2    |
| **15 August 2022**    | Create Student Registration Form Stage 3    |
| **16 August 2022**    | Completed Student Registration Form         |
| **17 August 2022**    | Filtering Student Data Stage 1              |
| **18 August 2022**    | Filtering Student Data Stage 2              |
| **19 August 2022**    | Filtering Student Data Stage 3              |
| **20 August 2022**    | Completed Filtering Student Data            |
| **21 August 2022**    | Edit Student Data Stage 1                   |
| **22 August 2022**    | Edit Student Data Stage 2                   |
| **23 August 2022**    | Completed Edit Student Data                 |
| **24 August 2022**    | Create Student Promotion Feature            |
| **25 August 2022**    | Convert Student Data to PDF Stage 1         |
| **26 August 2022**    | Convert Student Data to PDF Stage 2         |
| **27 August 2022**    | Completed Convert Student Data to PDF       |
| **27 August 2022**    | Create Student Roll Generate Stage 1        |
| **28 August 2022**    | Create Student Roll Generate Stage 2        |
| **29 August 2022**    | Create Student Roll Generate Stage 3        |
| **30 August 2022**    | Completed Student Roll Generate             |
| **31 August 2022**    | Create Student Registration Fee Stage 1     |
| **1 September 2022**  | Create Student Registration Fee Stage 2     |
| **22 September 2022** | Try to Apply Nullable to Fix Some Issue     |
| **Next...**           | coming soon...                              |

## Installation

-   Give me a star or follow my GitHub
-   Clone this repository

```bash
git clone https://github.com/daffahaidar/school-management-system.git
```

-   Go to the folder application using `cd` command on your cmd or terminal
-   Run composer install on your cmd or terminal

```bash
composer install
```

-   Copy `.env.example` file to `.env` on the root folder.

```bash
copy .env.example .env
```

-   If you using terminal on Ubuntu run it to copy

```bash
cp .env.example .env
```

-   Open your `.env` file and change the database name (`DB_DATABASE`) to whatever you have, username (`DB_USERNAME`) and password (`DB_PASSWORD`) field correspond to your configuration.
-   Generate the App Key

```bash
php artisan key:generate
```

-   Migrate your database

```bash
php artisan migrate
```

-   Run the laravel server

```bash
php artisan serve
```

-   Open http://localhost:8000

## Authors

-   [@daffahaidar](https://www.github.com/daffahaidar)
-   [@easylearningbd](https://www.github.com/easylearningbd)
