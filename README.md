# Pharmacy Management System (PMS)

A comprehensive web-based Pharmacy Management System built with PHP 8.3 and MySQL. This system helps pharmacies manage customers, medicines, inventory, finances, HR operations, and manufacturing records efficiently.

## Table of Contents

- [Features](#features)
- [System Requirements](#system-requirements)
- [Installation](#installation)
- [Configuration](#configuration)
- [Database Setup](#database-setup)
- [User Roles](#user-roles)
- [Project Structure](#project-structure)
- [Running the Application](#running-the-application)
- [Available Routes](#available-routes)
- [Testing](#testing)
- [Contributing](#contributing)
- [License](#license)

## Features

- **Customer Management**: Manage customer profiles and maintain customer ledgers
- **Inventory Management**: Track medicines, stock levels, and manufacturers
- **Finance Module**: Handle expenses, income tracking, invoicing, and financial reporting
- **HR Management**: Employee profiles, attendance tracking, salary management
- **Multi-Role Access Control**: Different user roles with specific permissions (Admin, Manager, Pharmacist, Accountant, HR)
- **QR Code Generation**: Built-in QR code generation for medicines and products
- **Invoice Management**: Create and print invoices for customer transactions
- **Reporting System**: Generate various reports for business analysis
- **Return Management**: Track product returns and manage returns process

## System Requirements

- **PHP**: 8.3 or higher
- **MySQL**: 8.0 or higher
- **Web Server**: Apache or Nginx
- **Composer**: 2.0 or higher
- **Node.js** (Optional): For development tools

## Installation

### Step 1: Clone or Download the Repository

```bash
git clone https://github.com/yourusername/pharmacy-management-system.git
cd pharmacy-management-system
```

Or download the ZIP file and extract it to your web server directory (e.g., `C:\wamp64\www\PMS`).

### Step 2: Install Dependencies

Make sure you have Composer installed on your system, then run:

```bash
composer install
```

This will install all required PHP packages listed in `composer.json`:
- illuminate/collections
- endroid/qr-code
- symfony/var-dumper
- setasign/fpdf
- bacon/bacon-qr-code
- vlucas/phpdotenv
- phpmailer/phpmailer

### Step 3: Configure Environment Variables

1. The `.env` file is already included in the project with default configurations
2. Update the `.env` file with your settings:

```bash
APP_NAME='PMS'
APP_ENV=production
APP_DEBUG=false
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=pharmacy
DB_USERNAME=root
DB_PASSWORD=

MAIL_MAILER=smtp
MAIL_HOST=your-mail-host
MAIL_PORT=465
MAIL_USERNAME=your-email@example.com
MAIL_PASSWORD=your-password
```

## Configuration

### Database Configuration

Database settings are configured in the `.env` file:

```env
DB_CONNECTION=mysql
DB_HOST=localhost        # MySQL server host
DB_PORT=3306            # MySQL server port
DB_DATABASE=pharmacy    # Database name
DB_USERNAME=root        # MySQL username
DB_PASSWORD=            # MySQL password (leave blank for no password)
```

Additional settings can be modified in `config.php`:

```php
'database' => [
    'host' => $_ENV['DB_HOST'],
    'port' => $_ENV['DB_PORT'],
    'dbname' => $_ENV['DB_DATABASE'],
    'charset' => 'utf8mb4'
]
```

### Mail Configuration

Configure SMTP settings in `.env` for email notifications:

```env
MAIL_MAILER=smtp
MAIL_HOST=your-mail-server.com
MAIL_PORT=465
MAIL_USERNAME=info@pms.com
MAIL_PASSWORD=your-password
MAIL_ENCRYPTION=ssl
MAIL_FROM_ADDRESS=info@pms.com
MAIL_FROM_NAME="PMS Website"
```

## Database Setup

### Step 1: Create Database

Create a new MySQL database named `pharmacy`:

```sql
CREATE DATABASE pharmacy CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
```

### Step 2: Import Database Schema

Import the provided SQL file:

```bash
mysql -u root -p pharmacy < pharmacy.sql
```

Or use phpMyAdmin:
1. Go to phpMyAdmin
2. Click "Import"
3. Select `pharmacy.sql` from the project root
4. Click "Go"

### Step 3: Verify Tables

The database includes the following key tables:
- `users` - User accounts and authentication
- `frequent_links` - User navigation history and shortcuts

Additional tables for customers, medicines, invoices, etc., will be created based on your application needs.

## User Roles

The system supports the following user roles with different permission levels:

| Role | Permissions |
|------|-------------|
| **Admin** | Full system access, user management, all modules |
| **Manager** | Customer, HR, and Medicine management |
| **Pharmacist** | Customer and Medicine management |
| **Accountant** | Finance and Invoice management |
| **HR** | Employee management, attendance, and salary |
| **Guest** | Limited read-only access |

### Default Demo Users

The database comes with pre-configured demo accounts (password: same as the hashed password in the database):

| Username | Email | Role | Password |
|----------|-------|------|----------|
| demo_admin | admin@pharmacy.com | Admin | (See SQL file for hash) |
| pharma | pharmacist@pharmacy.com | Pharmacist | (See SQL file for hash) |
| manager | manager@pharmacy.com | Manager | (See SQL file for hash) |
| accountant | accountant@pharmacy.com | Accountant | (See SQL file for hash) |
| hr | hr@pharmacy.com | HR | (See SQL file for hash) |

## Project Structure

```
PMS/
├── Core/                          # Core framework files
│   ├── App.php                   # Application container
│   ├── Authenticator.php         # Authentication logic
│   ├── Container.php             # Service container
│   ├── Database.php              # Database abstraction
│   ├── Router.php                # URL routing
│   ├── Session.php               # Session management
│   ├── Validator.php             # Form validation
│   ├── ValidationException.php   # Validation errors
│   ├── Response.php              # HTTP response
│   ├── functions.php             # Helper functions
│   └── middleware/               # Request middleware
│
├── Http/
│   ├── Controllers/              # Application controllers
│   │   ├── Dashboard.php
│   │   ├── Customer/            # Customer management
│   │   ├── Finance/             # Financial operations
│   │   ├── HR/                  # HR operations
│   │   ├── Medicine/            # Medicine management
│   │   ├── Manufacturer/        # Manufacturer data
│   │   ├── Report/              # Reporting
│   │   ├── Return/              # Return management
│   │   ├── Sessions/            # Authentication
│   │   └── settings/            # User settings
│   └── Forms/
│       └── LoginForm.php         # Login form validation
│
├── views/                         # View files (UI templates)
│   ├── partials/                # Reusable view components
│   ├── Customer/
│   ├── Finance/
│   ├── HR/
│   ├── Medicine/
│   ├── Manufacturer/
│   ├── Report/
│   ├── Return/
│   └── settings/
│
├── Public/
│   └── assets/                   # Static assets
│       ├── css/
│       ├── js/
│       ├── images/
│       ├── fonts/
│       └── plugins/
│
├── vendor/                        # Composer dependencies
├── bootstrap.php                  # Application bootstrap
├── config.php                     # Configuration settings
├── index.php                      # Entry point
├── route.php                      # Route definitions
├── composer.json                  # Composer configuration
├── .env                          # Environment variables
├── pharmacy.sql                  # Database schema
└── phpunit.xml                   # Test configuration
```

## Running the Application

### Using WAMP/XAMPP

1. Place the project in your web server directory:
   - **WAMP**: `C:\wamp64\www\PMS`
   - **XAMPP**: `C:\xampp\htdocs\PMS`

2. Start Apache and MySQL from the control panel

3. Access the application in your browser:
   ```
   http://localhost/PMS/
   ```

### Using PHP Built-in Server (Development)

```bash
# Navigate to the project directory
cd path/to/PMS

# Start the PHP server
php -S localhost:8000
```

Access the application at: `http://localhost:8000`

## Available Routes

### Authentication
- `GET /` - Login page (Guest only)
- `POST /login` - Process login (Guest only)

### Dashboard
- `GET /dashboard` - Main dashboard (Authenticated users)

### Customer Management
- `GET /customer-list` - View all customers
- `GET /Add-Customer` - Add new customer
- `GET /Customer-Ledger` - View customer ledger

### Finance
- `GET /expense` - View expenses (Admin & Accountant)
- `GET /income` - View income (Admin & Accountant)
- `GET /invoice-list` - List invoices
- `GET /invoice-details` - View invoice details
- `GET /invoice-print` - Print invoice

### HR Management
- `GET /attendance` - Attendance tracking
- `GET /member` - View employees
- `GET /add-member` - Add new employee
- `GET /salary` - Salary management
- `GET /member-profile` - Employee profile

### Inventory Management
- `GET /medicine-list` - View medicines
- `GET /ledger` - Manufacturer ledger (Admin only)

## Testing

Run tests using the provided test scripts:

```bash
# Run all tests
composer run test

# Run unit tests only
composer run unit-test

# Run functional tests only
composer run functional-test

# Code quality checks
composer run code-quality
```

The project uses **Pest PHP** for testing. Test configuration is in `phpunit.xml`.

## API & Development

### Custom Validation

The system includes a custom validator:

```php
$validator = new Validator();
$validated = $validator->validate([
    'email' => 'required|email',
    'password' => 'required|min:6'
]);
```

### Database Queries

Use the custom Database class:

```php
$db = App::resolve(Database::class);
$users = $db->query('SELECT * FROM users WHERE role = ?', ['admin'])->findAll();
```

### Authentication

Use the Authenticator class:

```php
$auth = new Authenticator();
if ($auth->attempt($email, $password)) {
    // User logged in successfully
}
```

## Troubleshooting

### Database Connection Error
- Verify MySQL is running
- Check `.env` database credentials
- Ensure the `pharmacy` database exists
- Check database user permissions

### Permission Denied Errors
- Verify file permissions on the `views/` and `public/` directories
- Ensure web server user has read/write access

### Missing Dependencies
```bash
composer install
composer dump-autoload
```

### Session Errors
- Ensure the session directory has proper permissions
- Check `SESSION_DRIVER` in `.env` is set correctly

## Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## Security Considerations

- Always use HTTPS in production
- Update the `APP_KEY` in `.env` with a secure random key
- Keep PHP and dependencies updated
- Validate and sanitize all user inputs
- Use prepared statements for database queries (already implemented)
- Implement regular security audits

## Support

For issues, questions, or contributions, please visit:
- **Email**: adebesindamilare39@gmail.com
- **Author**: Dammy The Traveller

## License

This project is licensed under the MIT License - see the LICENSE file for details.

## Changelog

### Version 1.0.0 (June 2025)
- Initial release
- Customer management
- Finance module
- HR operations
- Inventory management
- Multi-role access control
- Invoice generation and printing

---

**Last Updated**: June 2025  
**PHP Version**: 8.3+  
**MySQL Version**: 8.0+
