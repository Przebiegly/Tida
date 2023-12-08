# Konfiguracja Stacji Egzaminacyjnej INF.03
## 1. Przygotuj checklistę działań
- [ ] Zapewnienie dostępu do stacji egzaminacyjnej wraz z kontem
- [ ] Instalacja niezbędnego oprogramowania typu (Wirar, K3b do nagrywania płyt, Serwer XAMPP)
- [ ] Konfiguracja Zainstalowanego Oprogramowania 
- [ ] Testowanie Zainstalowanego Oprogramowania
- [ ] Zaplanowanie backupu po egzaminie

## 2. Przygotuj diagram wdrożenia projektu

<p align="center">
<image src="https://github.com/Przebiegly/Tida/assets/90707614/2c05b8dc-43ad-48e2-89b5-b908477790b7" alt="jakies zdjecie" ></image>
</p>
<br/>


<p align="center">
<image src="https://github.com/Przebiegly/Tida/assets/90707614/f238a2b9-bf50-4383-a196-0be2b7634a7c" alt="jakies zdjecie" ></image>
</p>


## 3. Napisz skrypt wdrożeniowy wskazanego oprogramowania
```
Invoke-WebRequest -Uri "https://downloads.apache.org/httpd/httpd-2.4.51-win64-VS16.zip" -OutFile "httpd.zip"
Expand-Archive -Path "httpd.zip" -DestinationPath "C:\Apache"
Rename-Item -Path "C:\Apache\httpd-2.4.51-win64-VS16" -NewName "Apache"
Remove-Item -Path "httpd.zip" -Force

Invoke-WebRequest -Uri "https://windows.php.net/downloads/releases/php-8.0.13-Win32-vs16-x64.zip" -OutFile "php.zip"
Expand-Archive -Path "php.zip" -DestinationPath "C:\PHP"
Remove-Item -Path "php.zip" -Force

Invoke-WebRequest -Uri "https://www.python.org/ftp/python/3.10.0/python-3.10.0-amd64.exe" -OutFile "python.exe"
Start-Process -Wait -FilePath ".\python.exe" -ArgumentList "/quiet", "InstallAllUsers=1", "PrependPath=1"
Remove-Item -Path "python.exe" -Force

Invoke-WebRequest -Uri "https://dev.mysql.com/get/Downloads/MySQLInstaller/mysql-installer-web-community-8.0.27.0.msi" -OutFile "mysql-installer.msi"
Start-Process -Wait -FilePath "msiexec" -ArgumentList "/i", "mysql-installer.msi", "/quiet", "/qn", "/norestart"
Remove-Item -Path "mysql-installer.msi" -Force

pip install pygame

pip install PyQt5

Write-Host "Instalacja zakończona."

```
