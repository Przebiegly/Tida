# Konfiguracja Stacji Egzaminacyjnej INF.03
## 1. Przygotuj checklistę działań
- [ ] Zapewnienie dostępu do stacji egzaminacyjnej wraz z kontem
- [ ] Instalacja niezbędnego oprogramowania typu (Wirar, K3b do nagrywania płyt, Serwer XAMPP)
- [ ] Konfiguracja Zainstalowanego Oprogramowania 
- [ ] Testowanie Zainstalowanego Oprogramowania
- [ ] Zaplanowanie backupu po egzaminie

## 2. Przygotuj diagram wdrożenia projektu

![image](https://github.com/Przebiegly/Tida/assets/90707614/2c05b8dc-43ad-48e2-89b5-b908477790b7){ align="center" }

<br/>

![image](https://github.com/Przebiegly/Tida/assets/90707614/f238a2b9-bf50-4383-a196-0be2b7634a7c)


## 3. Napisz skrypt wdrożeniowy wskazanego oprogramowania
```
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
```
