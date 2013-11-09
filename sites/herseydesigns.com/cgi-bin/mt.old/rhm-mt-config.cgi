## Movable Type Configuration File
##
## This file defines system-wide
## settings for Movable Type. In 
## total, there are over a hundred 
## options, but only those 
## critical for everyone are listed 
## below.
##
## Information on all others can be 
## found at:
##  http://www.movabletype.org/documentation/config

#======== REQUIRED SETTINGS ==========

CGIPath        /cgi-bin/mt/
StaticWebPath  /mt-static/
StaticFilePath /usr/www/users/herseymo/mt-static

#======== DATABASE SETTINGS ==========

ObjectDriver DBI::mysql
Database herseymo_rhmdb
DBUser herseymo_2
DBPassword ckugwrEx
DBHost db44.pair.com

#======== MAIL =======================

MailTransfer sendmail
SendMailPath /usr/sbin/sendmail
