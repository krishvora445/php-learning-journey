# MySQL Setup and Configuration

This directory contains resources for setting up and managing a MySQL database environment on Windows, specifically for use with our PHP applications.

## Contents

-   **`start_mysql.ps1`**: A convenience PowerShell script to quickly start the MySQL service if it's not already running.
-   **`mysqlstart&stopinfo`**: A text file documenting the manual steps required to install the MySQL service, initialize the data directory, and configure it to run on Windows.

## Key Setup Steps Covered

1.  **Locating the Binaries**: Identifying where `mysqld.exe` is installed (typically `C:\Program Files\MySQL\MySQL Server 8.4\bin`).
2.  **Service Registration**: Using `--install MySQL` to register MySQL as a Windows service.
3.  **Initialization**: Using `--initialize-insecure` to create the initial data folder and root user.
4.  **Service Management**: Using PowerShell commands like `Start-Service` and `Get-Service` to manage the database server.

## Purpose
This setup is a prerequisite for the subsequent directories (`06`, `07`, `08`) where we connect to this database using PHP.
