#!/bin/bash
echo "Hello! This script will install your php-reverse-shell automatically. Open the index.html file after you have ran this script.
Make sure the all .php files are in same folder.This installs neccessary libraries for the php-reverse-shell to make it run smoothly. This takes only few minutes."
sudo apt update
sudo apt install openssh-server
sudo systemctl enable --now ssh
sudo apt install git
git clone https://github.com/Duunari2/php-reverse-shell/
wget http://datat.freehostia.com/bisnekset/uusi_laskuri.php
sudo apt install vsftpd
sudo apt install apache2
sudo apt install php
sudo apt install firefox
