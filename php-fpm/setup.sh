#!/bin/sh

printf "\n\n\n\n";
echo "Seting up the Symfony Development Environment!";
printf "\n\n\n\n";

git config --global user.name "$GIT_NAME";
git config --global user.email "$GIT_EMAIL";

if [ $CREATE_NEW_PROJECT == 'true' ]
then
	echo "Creating new project named '$PROJECT_NAME' ...";
	symfony new $PROJECT_TYPE $PROJECT_NAME;
else
	echo "Skiping creating a new project!";
fi

printf "\n\n\n\n";
echo "SETUP DONE!";
echo "Server is up at 'sf4-dev.localhost'!";
echo "PhpMyAdmin is up at 'sf4-dev.localhost:8080'";
printf "\n\n";
echo "IMPORTANT!";
echo "Don't forget to set up your /etc/hosts to the correct domain!";
printf "\n\n\n\n";

php-fpm7 -F;