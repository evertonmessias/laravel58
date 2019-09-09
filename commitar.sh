#!/bin/bash
clear
git add *
echo "**************** GIT ADD OK ************************"
data=`date +%d-%m-%Y_%H:%M:%S`
git commit -m $data
#git pull
git push --force origin master
echo "*************** GIT COMMIT OK **********************"

