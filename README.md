# Note Taking Web App

This is a simple Note Taking Web App created using React, JavaScript, CSS, PHP, and MySQL.

## Table of Contents

- [Overview](#overview)
- [Features](#features)
- [Requirements](#requirements)
- [Getting Started](#getting-started)
- [Contributing](#contributing)
- [License](#license)

## Overview

The Note Taking Web App allows users to create, view, and delete notes. It consists of a frontend developed with React and a backend server implemented in PHP connected to a MySQL database.

## Features

- Create new notes with a title and description
- View existing notes with a user-friendly interface
- Delete notes to maintain an organized list

## Requirements

Ensure you have the following tools installed:

- [Node.js](https://nodejs.org/)
- [npm](https://www.npmjs.com/) (Node Package Manager)
- [PHP](https://www.php.net/)
- [MySQL](https://www.mysql.com/)

## Getting Started

Follow these steps to run the project locally:

1. **Clone the repository:**

   ```bash
   git clone https://github.com/your-username/NoteTakingWebApp.git
   ```

2. **Navigate to the project directory:**

   ```bash
   cd NoteTakingWebApp
   ```

3. **Install frontend dependencies:**

   ```bash
   npm install
   ```

4. **Install backend dependencies:**

   (Assuming you have PHP and a web server like Apache set up)

5. **Set up MySQL database:**

   - Create a MySQL database named `notes-1`.
   - Update the database connection details in the `server/create.php` and `server/read.php` files.

6. **Run the application:**

   Start the React development server:

   ```bash
   npm start
   ```

   Start the PHP server (Assuming you are using Apache, make sure it's configured correctly):

   ```bash
   # Navigate to the server directory
   cd server
   # Start the PHP server
   php -S localhost:8000
   ```

7. **Open the application in your browser:**

   Open [http://localhost:3000](http://localhost:3000) to view the Note Taking Web App.
   # Example:
   Front End [![image](https://github.com/MoustAhmed/TaskManagement/assets/121663630/eb9650cd-4914-43af-9012-eb356648e658)](https://github.com/MoustAhmed/TaskManagement/blob/main/ezgif-2-0c90393e97.gif)
   
   PHP: [![image](https://github.com/MoustAhmed/TaskManagement/assets/121663630/5f28858d-0001-478a-b630-d019e4a8bc91)](https://github.com/MoustAhmed/TaskManagement/blob/main/ezgif-2-4cd3efbe32.gif)


## Contributing

Contributions are welcome! Feel free to open issues and pull requests.

## License

This project is licensed under the [MIT License](LICENSE).
