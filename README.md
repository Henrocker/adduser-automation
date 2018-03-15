# Adduser-automation
Web-frontend and script for adding unixusers and creating their own home directoy in web-exposed environment to which they can login via ftp to upload web-content.

# Prerequisites:
You will need:

- `*www-data* in sudo group`,
- `php5.6+` and
- `a working web server`

installed on your system. Tested on Debian x86_64 sid.

# Installation
Installing dependencies:

```sh
sudo apt install -y php5-fpm {webserver_you_like}
```

Now copy all the files to your www-folder and give run.php 755 permission.

```sh
git clone https://github.com/Henrocker/adduser-automation.git
cd adduser-automation
sudo chmod 755 run.php
```

Additionally, copy the script to `/etc/scripts` and give it executive permissions.

You are now ready to test. Visit _yoursite.com/adduser-automation_.
Have fun!