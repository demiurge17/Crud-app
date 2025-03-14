Installation & Setup

Prerequisites
- Install XAMPP or any local server that supports PHP and MySQL.
- Make sure MySQL is running.

Steps
1. Clone or download the project files.
2. Move the project folder to the `htdocs` directory (if using XAMPP).
3. Start Apache and MySQL in XAMPP.
4. Open `phpMyAdmin` and create a new database named `clients`.
5. Import the provided `clients.sql` file into the database.
6. Open a browser and go to `http://localhost/crud-app/index.php`.

Database Schema
**Table Name:** `inquiry`
- `id` (INT, AUTO_INCREMENT, PRIMARY KEY)
- `firstName` (VARCHAR)
- `lastName` (VARCHAR)
- `email` (VARCHAR)
- `comment` (TEXT)

File Structure
- `db.php` - Handles database connection.
- `index.php` - Displays inquiries and provides edit/delete options.
- `add.php` - Allows users to add new inquiries.
- `edit.php` - Enables users to edit inquiries.
- `delete.php` - Deletes an inquiry.
- `styles.css` - Styles the UI.

Usage
1. Navigate to the main page (`index.php`) to view inquiries.
2. Click "Add Inquiry" to create a new record.
3. Use the "Edit" link to modify an inquiry.
4. Click "Delete" to remove an inquiry (confirmation required).

Author
Omor Siddiqe Chowdhury

License
This project is open-source. Feel free to use and modify it.

