cd /d %~dp0
robocopy public   C:\xampp\htdocs\phptest    *.php  /MIR
start "" http://localhost/phptest/test.php
::pause
exit