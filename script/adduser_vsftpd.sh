#!/bin/bash

name=$1
password=$2

sudo adduser www-data sudo
grep -q -F '/bin/false' /etc/shells || echo '/bin/false' >> /etc/shells
sudo adduser $name --gecos "" --home /etc/nginx/html/$name --shell /bin/false --disabled-password
echo "$name:$password" | sudo chpasswd
echo $name >> /etc/vsftpd.userlist
sudo service vsftpd restart
echo "Geschafft! :-)"