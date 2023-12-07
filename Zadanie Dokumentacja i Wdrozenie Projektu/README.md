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
if (-not (Test-Path "C:\xampp\")) {
    Invoke-WebRequest -Uri "https://www.apachefriends.org/xampp-files/8.0.10/xampp-windows-x64-8.0.10-0-VS16-installer.exe" -OutFile "xampp-installer.exe"
    Start-Process -Wait -FilePath ".\xampp-installer.exe"
    Remove-Item -Path ".\xampp-installer.exe"
}

if (-not (Get-Command "pip" -ErrorAction SilentlyContinue)) {
    Invoke-WebRequest -Uri "https://bootstrap.pypa.io/get-pip.py" -OutFile "get-pip.py"
    python get-pip.py
    Remove-Item -Path ".\get-pip.py"
}

$pythonPackages = @("pygame", "PySide2")

foreach ($package in $pythonPackages) {
    if (-not (Get-Module $package -ListAvailable)) {
        python -m pip install $package
    }
}

Write-Host "Instalacja zakończona."

}
```
