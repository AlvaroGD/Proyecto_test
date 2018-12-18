#!/bin/expect -f

tag=$( tail -n 1 /etc/test/101.txt )

set timeout 3000 
spawn ssh 172.17.11.1
expect "password:"
send "prueba123"
expect "#"
send "enable"
expect "#"
send "configure terminal"
expect "#"

