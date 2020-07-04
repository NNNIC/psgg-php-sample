@echo off
cd /d %~dp0
echo :
echo : delete doc\*.* , public\TestControl.php public\base\StateManager.php
echo : continue?
pause
del /q doc\*.*
del /q public\TestControl.php
del /q public\base\StateManager.php
pause