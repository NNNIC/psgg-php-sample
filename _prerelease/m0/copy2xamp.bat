cd /d %~dp0
copy test01.php C:\xampp\htdocs\phptest\*.*
robocopy .\   C:\xampp\htdocs\phptest    *.php  /MIR
start "" http://localhost/phptest/test01.php
::pause