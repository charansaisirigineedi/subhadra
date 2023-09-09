# Hospital Management Tool

The hospital management application is a cutting-edge and comprehensive software system meticulously crafted to revolutionize and supercharge all facets of hospital operations. By leveraging its unparalleled versatility, this system propels hospitals towards unparalleled efficiency, enhanced patient care, and unrivaled excellence in healthcare management.

The application is developed in **LAMP** framework
## Features

- **Patient Records**: The application stores and retrieves patient records, including medical history, diagnoses, and treatments, in an electronic format for easy access and improved efficiency.
- **Appointment Scheduling**: Patients can conveniently book appointments online, and hospital staff can efficiently manage schedules to minimize waiting times.
- **Billing and Payments**: The application automates billing processes and integrates with insurance providers to streamline payment processing.
- **Reporting and Analytics**: Hospital administrators can access comprehensive reports and analytics to make informed decisions and improve processes.

## Installation Guide

To set up and run the application, follow the steps below:

- Download the source code by either cloning the repository or directly downloading the files to your local system.

- Before running the application, make sure you have installed [xampp](https://www.apachefriends.org/download.html) on your computer.

- Move the project files to the "htdocs" folder in your xampp installation directory. For example, the path should be /xampp/htdocs if you installed xampp in the default location.

- Launch the xampp control panel and start the **Apache** and **MySQL** modules.

- Open your web browser and go to [localhost/phpmyadmin](http://localhost/phpmyadmin) to access the database management interface.

> Ensure that the MySQL service is running before accessing the database.

- Create a new database and import the database schema using the SQL provided in the **test.sql** file included in the codebase.

- Once the database is set up, update the database credentials in the **connect.php** file to establish a connection between the application and the database.

- Now, you can access the application by navigating to [localhost/subhadra/codebase](http://localhost/subhadra/codebase) in your web browser.

> The default password to access the application is **test@2**.


## Authors

1. [Charan Sai Sirigineedi](https://www.github.com/charanmcr)
2. [Hema Sai Praneeth Kambhampati](https://www.github.com/praneethmcr)
3. [Srikanth Peethambaram](https://www.github.com/srikanthpeethambaram)


## Look Out

This hospital management application is designed to handle maternity patients by default. If you wish to modify its functionality for other hospital departments or specific requirements, you are encouraged to customize the application as per your needs. Feel free to adapt the code, features, and user interface to suit your hospital's unique workflows and enhance patient care. Happy installing and customizing! 🚀💻🏥
