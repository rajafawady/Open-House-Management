# Open House Management System

The Open House Management System is a web application designed to streamline the management of open house events. It allows evaluators to rate projects, administrators to oversee the entire process, and guests to submit preferred keywords for project assignments.

## NOTE: 
login credentials for admin are email: "rajafawady@gmail.com" password: "fawadhihun"

## Features

- **User Roles:**
  - **Admins:** Manage users, projects, and evaluations
  - **Evaluators:** Rate assigned projects.
  - **Guests:** Submit preferred keywords for project assignments.

- **Project Assignment:**
  - Projects are assigned to evaluators based on matching keywords and preferences.
  - Each evaluator is assigned to evaluate 3-5 projects.

- **Rating System:**
  - Evaluators can rate projects on a scale of 1-10.
  - Ratings are visible only to admins.

- **Preferences:**
  - Guests can submit preferred project categories and specialty areas.

## Technologies Used

- **Backend:**
  - [Laravel](https://laravel.com/): PHP web application framework.

- **Frontend:**
  - [Blade](https://laravel.com/docs/8.x/blade): Laravel's templating engine.
  - [Tailwind CSS](https://tailwindcss.com/): Utility-first CSS framework.

- **Database:**
  - [MySQL](https://www.mysql.com/): Open-source relational database management system.

- **Other Tools:**
  - [Composer](https://getcomposer.org/): Dependency manager for PHP.
  - [npm](https://www.npmjs.com/): Package manager for Node.js.
  - [Git](https://git-scm.com/): Version control system.

## Installation

1. **Clone the repository:**
   ```bash
   git clone https://github.com/your-username/open-house-management.git
   cd open-house-management

2. **Install PHP Dependencies:**
    ```bash
    composer install
    ```

3. **Create a copy of the `.env` file:**
    ```bash
    change the db ceredentials in .env file
    
    ```

4. **Generate an application key:**
    ```bash
    php artisan key:generate
    ```

5. **Configure the database in the `.env` file.**

6. **Run database migrations:**
    ```bash
    php artisan migrate
    ```

7. **Install Frontend Dependencies:**
    ```bash
    npm install
    ```

8. **Compile Assets:**
    ```bash
    npm run dev
    ```

## Usage

1. **Start the Laravel Development Server:**
    ```bash
    php artisan serve
    ```


2. **Administer the application using the provided admin panel.**

## Configuration

- Configure mail settings in the `.env` file if your application involves sending emails.
- Set up a mail driver, such as SMTP, in the `.env` file.

