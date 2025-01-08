# Ajikri - A Marketplace for Rental Ads

![Ajikri Screenshot](https://github.com/yassineboucham/AJIKRI/blob/main/public/images/logo_name.png)

## Introduction

Ajikri is a web application designed to help users list and browse rental ads for various items such as vehicles (cars, motorcycles, trucks, quad bikes, jet skis), real estate, and clothes. Users looking to rent items can either browse ads without registering or create their own rental ads after signing up. All transactions and bookings are handled externally between users.

- **Live Site**: [Visit Ajikri](https://www.ajikri.com)
- **Final Project Blog**: [Ajikri Blog Article](https://yassineboucham.github.io/AJIKRI_blog/) 
- **Author(s)**: 
  - [Your LinkedIn](https://www.linkedin.com/in/yassineboucham/) 
## Installation

# Project Name

## Description
This project is a web application designed to [briefly describe the purpose of your project, e.g., "manage rental announcements for various items"]. It allows users to [list key features, e.g., "create, view, edit, and delete announcements"].

## Features
- User authentication
- Create and manage announcements
- View announcements in a user-friendly interface
- [Any other features]

## Technologies Used
- **Backend**: Laravel
- **Frontend**: Blade, Bootstrap
- **Database**: MySQL
- **Version Control**: Git

## Prerequisites
Before you begin, ensure you have met the following requirements:
- PHP 8.0 or higher
- Composer
- Node.js and npm
- MySQL or another database server

## Installation

Follow these steps to set up the project on your local machine:

1. **Clone the Repository**
   ```bash
   git clone https://github.com/your-username/project-name.git
   cd project-name
   ```

2. **Install Dependencies**
   Run the following command to install the required PHP packages:
   ```bash
   composer install
   ```

3. **Set Up Environment Variables**
   Copy the `.env.example` file to `.env`:
   ```bash
   cp .env.example .env
   ```
   Update the `.env` file with your database credentials and other environment settings.

4. **Generate Application Key**
   Run the following command to generate the application key:
   ```bash
   php artisan key:generate
   ```

5. **Run Migrations**
   Set up the database by running the migrations:
   ```bash
   php artisan migrate
   ```

6. **Install Frontend Dependencies**
   If your project uses frontend assets, install them using npm:
   ```bash
   npm install
   ```

7. **Compile Assets**
   Compile the frontend assets:
   ```bash
   npm run dev
   ```

8. **Run the Application**
   Start the local development server:
   ```bash
   php artisan serve
   ```
   You can now access the application at `http://localhost:8000`.

## Usage
- To create an account, navigate to the registration page.
- After logging in, you can create, view, edit, and delete announcements.

## Contributing
If you want to contribute to this project, please follow these steps:
1. Fork the repository.
2. Create a new branch (`git checkout -b feature/YourFeature`).
3. Make your changes and commit them (`git commit -m 'Add some feature'`).
4. Push to the branch (`git push origin feature/YourFeature`).
5. Open a pull request.

## License
This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Acknowledgments
- [Any resources, libraries, or inspirations you want to acknowledge]
