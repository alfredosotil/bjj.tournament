@ECHO OFF
setlocal DISABLEDELAYEDEXPANSION
SET BIN_TARGET=%~dp0/../vendor/tubalmartin/cssmin/cssmin
php "%BIN_TARGET%" %*
