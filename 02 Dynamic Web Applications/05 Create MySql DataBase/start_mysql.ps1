$DataDir = "$PSScriptRoot\data"
$MySQLBin = "C:\Program Files\MySQL\MySQL Server 8.4\bin\mysqld.exe"

Set-Location "$PSScriptRoot"

if (-not (Test-Path $DataDir)) {
    Write-Host "Initializing MySQL Data Directory at $DataDir..."
    & $MySQLBin --initialize-insecure --console --datadir="$DataDir"
}

Write-Host "Starting MySQL Server..."
& $MySQLBin --no-defaults --console --datadir="$DataDir" --port=3306 --bind-address=0.0.0.0
