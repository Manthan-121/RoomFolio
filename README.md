# RoomFolio

RoomFolio is an apartment visitor management system designed for use by Security Guards. It enables easy tracking and management of visitor data, apartment details, and other information through an intuitive interface.

---

## Table of Contents
- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Configuration](#configuration)
- [Running the Project](#running-the-project)
- [Troubleshooting](#troubleshooting)
- [Contributing](#contributing)
- [License](#license)

---


## Prerequisites
Ensure the following tools are installed on your system:
- **PHP** >= 8.0
- **Composer** >= 2.x
- **MySQL** >= 5.7
- **Node.js** (for frontend dependencies)
- **Git** (for cloning the repository)

---

## Installation


### Step 1: Clone the Repository
To get started, clone the repository to your local machine:
```bash
git clone https://github.com/yourusername/RoomFolio.git
cd RoomFolio
```

### Step 2: Install PHP Dependencies
Install the required PHP packages using Composer:
```bash
composer install
```

### Step 3: Install Node Modules (Optional)
If you are working with frontend assets, you may want to install Node dependencies:
```bash
npm install
```
## Configuration

### Step 4: Configure the Environment
1. Copy `.env.example` to `.env`:

   ```bash
   cp .env.example .env
   ```
2. Update the following fields in the `.env` file with your database and application details:
    ```bash
    APP_NAME=RoomFolio
    APP_URL=http://localhost:8000

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=roomfolio_db
    DB_USERNAME=root
    DB_PASSWORD=

    ```
### Step 5: Generate Application Key
Generate an application key to secure the application:
```bash
php artisan key:generate
```
### Step 6: Migrate the Database
Run the following command to create the necessary tables:
```bash
php artisan migrate
```
### Step 7: Seed the Database (Optional)
Seed initial data for testing (e.g., an admin user):
```bash
php artisan db:seed
```

## Running the Project
### Step 8: Serve the Application
Start the Laravel development server:
```bash
php artisan serve
```
The application should now be running at http://localhost:8000.

### Step 9: (Optional) Link Storage
To make the `storage` folder accessible, create a symbolic link
```bash
php artisan storage:link
```

## Troubleshooting
If you encounter any issues, try:

- Clearing cached files:
    ```bash
    php artisan config:cache
    php artisan route:cache
    php artisan cache:clear
    ```
- Checking that your `.env` file has correct database credentials.

## Contributing
Feel free to submit pull requests or report issues. We welcome all contributions that improve RoomFolio!

## License
RoomFolio is licensed under the MIT License. See `LICENSE` for more information.

```bash

This code will produce a detailed, easy-to-read README file for your RoomFolio project, guiding users through installation, configuration, and running the application. Let me know if you'd like to add any further customization!

```
