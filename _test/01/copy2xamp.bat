cd /d %~dp0
copy test01.php C:\xampp\htdocs\phptest\*.*
start "" http://localhost/phptest/test01.php
pause