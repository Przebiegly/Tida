# Konfiguracja Stacji Egzaminacyjnej INF.03
# 1. Przygotuj checklistę działań

# 2. Przygotuj diagram wdrożenia projektu

# 3. Napisz skrypt wdrożeniowy wskazanego oprogramowania
if (-not ([Security.Principal.WindowsPrincipal] [Security.Principal.WindowsIdentity]::GetCurrent()).IsInRole([Security.Principal.WindowsBuiltInRole]::Administrator)) {
    Write-Host "Uruchom skrypt z uprawnieniami administratora."
    exit
}

$apacheInstallerPath = "C:ścieżka\do\pliku\apache_installer.exe"
$phpInstallerPath = "C:ścieżka\do\pliku\php_installer.exe"
$pythonInstallerPath = "C:ścieżka\do\pliku\python_installer.exe"
$mysqlInstallerPath = "C:ścieżka\do\pliku\mysql_installer.exe"
$pygameInstallerPath = "C:ścieżka\do\pliku\pygame_installer.exe"
$qtpysideInstallerPath = "C:ścieżka\do\pliku\qtpyside_installer.exe"

Start-Process -Wait -FilePath $apacheInstallerPath
Start-Process -Wait -FilePath $phpInstallerPath
Start-Process -Wait -FilePath $pythonInstallerPath
Start-Process -Wait -FilePath $mysqlInstallerPath
Start-Process -Wait -FilePath $pygameInstallerPath
Start-Process -Wait -FilePath $qtpysideInstallerPath

Write-Host "Instalacja zakończona pomyślnie."
