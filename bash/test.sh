#! /bin/bash
read -p "Please input(y/n): " yn
[ "$yn" == "y" -o "$yn" == "Y" ] && echo "OK, continue" && exit 0
[ "$yn" == "n" -o "$yn" == "N" ] && echo "OK, interrupt" && exit 0
