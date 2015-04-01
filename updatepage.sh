#!/usr/bin/expect

git add -A
git commit -m "ServerUpdate"
spawn git push origin master
expect "username: "
send "magicle\r"
