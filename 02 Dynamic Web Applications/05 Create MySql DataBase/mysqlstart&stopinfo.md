1. Locate your MySQL bin folder

By default, winget installs MySQL 8.4 to: C:\Program Files\MySQL\MySQL Server 8.4\bin

First, verify the folder exists by running:

PowerShell ls "C:\Program Files\MySQL\MySQL Server 8.4\bin"

2. Register the Service

Open your terminal as Administrator and run the following command. This tells Windows to create a new service named "MySQL" pointing to the database executable:

PowerShell & "C:\Program Files\MySQL\MySQL Server 8.4\bin\mysqld.exe" --install MySQL

3. Initialize and Start

Before it can run, MySQL needs a "Data" folder where it stores the actual databases. If you haven't done this yet, run:

PowerShell # This creates the initial system databases and a root user with NO password 
            & "C:\Program Files\MySQL\MySQL Server 8.4\bin\mysqld.exe" --initialize-insecure --user=mysql   
            # Now start the service you just registered 
            Start-Service -Name MySQL

4. Verify Success

Check the status of the service to make sure it's now "Running":

PowerShell Get-Service -Name MySQL

5. Optional: Set to Start Automatically

If you want MySQL to start automatically when Windows boots, run:

PowerShell Set-Service -Name MySQL -StartupType Automatic

If you prefer to start it manually, run:

PowerShell Set-Service -Name MySQL -StartupType Manual  # To set it back to manual start

PowerShell Get-Service -Name MySQL | Select-Object Name, StartType, Status


sudo net stop MySQL 

add this to 

mysqlstart&stopinfo.md

this file as stop mysql  and add this in same  sation but labal as not work 

Stop-Service -Name MySQL  

and add this as  Remove the service registration from Windows

& "C:\Program Files\MySQL\MySQL Server 8.4\bin\mysqld.exe" --remove MySQL


for manula stop mysql

Method 1: Stop the Conflicting Service (Recommended)
You likely have a regular version of MySQL running in the background.

Press Windows Key + R on your keyboard.

Type services.msc and press Enter.

Scroll down the list and look for a service named MySQL or MySQL80.

Right-click it and select Stop.

Also, right-click it, select Properties, and change "Startup type" to Manual (this prevents it from blocking XAMPP again next time you restart your PC).

Go back to XAMPP and click Start on MySQL.

add this @mysqlstart%26stopinfo.md 