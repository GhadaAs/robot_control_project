# Robot Control Project

## Introduction
This project is a web-based control panel designed to manage the movement of a robot. The control panel interface allows users to send commands such as moving forward, backward, left, right, and stop. These commands are stored in a MySQL database for tracking and later retrieval.

## Prerequisites
- XAMPP (to run Apache and MySQL servers)
- Web browser (such as Chrome, Firefox, Edge)

## Installation
1. Install XAMPP: Download and install XAMPP from [Apache Friends](https://www.apachefriends.org/index.html).
2. Set Up Project Files:
    - Download the project files from this repository.
    - Place the project files in the htdocs directory of your XAMPP installation.
3. Set Up Database:
    - Start Apache and MySQL from the XAMPP Control Panel.
    - Open phpMyAdmin by visiting http://localhost/phpmyadmin.
    - Create a new database named robot_control.
    - Import the commands.sql file into the robot_control database to create the necessary table.

## Usage
1. Access Control Panel:
    - Open your web browser and navigate to http://localhost/robot_control_project/index.html.
    - Use the buttons on the control panel to send movement commands to the robot.
2. View Commands:
    - The commands will be stored in the commands table in the robot_control database.

## Project Structure
- index.html: The main HTML file for the control panel interface.
- control.php: The PHP script to handle commands from the control panel and store them in the database.
- style.css: The CSS file for styling the control panel interface.
- commands.sql: The SQL file to create and setup the database table for storing commands.

## Screenshots
![Control Panel Screenshot](https://github.com/GhadaAs/robot_control_project/raw/main/Screenshot%202024-07-06%20042717.png?raw=true)
![Database Screenshot](https://github.com/GhadaAs/robot_control_project/raw/main/Screenshot%202024-07-06%20042804.png?raw=true)

## Contribution
Contributions are welcome! If you have any suggestions or improvements, please create a pull request or open an issue.
