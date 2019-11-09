# Work in progress!!


# Docker Symfony Dev Env

The purpose of this tool is to create a fast environment for Symfony4 development.

## Usage
  * Use `docker-compose build` to build your containers.
  * Build a `container-preparation.env` file in which you will add your desired `ENV` variables. E.g:
```
// Example ENV definitions:
CREATE_NEW_PROJECT=false
PROJECT_NAME=test-new
PROJECT_TYPE=--full
GIT_EMAIL="john.doe@mail.com"
GIT_NAME="John Doe" 
```


 *The `PROJECT_NAME` and `PROJECT_TYPE` are used for the `symfony` installer. If the `--full` option can be ignored by leaving the `PROJECT_TYPE` variable empty. `E.g: PROJECT_TYPE=`*

 *The `CREATE_NEW_PROJECT` flag decides whether the container creates a new project based on the two flags presented above or simply starts the containers so they can be used on existing projects.* 

  * Run `docker-compose up` and wait for your new Symfony4 project to be installed!

## Acces to the different services

### PHPMyAdmin
There is a `phpmyadmin` instance at port `8080`. By default, the container creates a database called `symfony` that has the following credentials:
	- User: symfony
	- Password: symfony

The `root` account has the default password: `root`

### Logs and Kibana
All Symfony logs are dumped on your local machine in the `logs` folder within this repository.

Kibana is available at port `5601`. 

[WIP] Logger configuration auto setup and auto-rotate + archiving logs 
At the moment, logging is set up manually, by configuring your `monolog.yaml` config file from your project. Here is an example:
```
monolog:
    handlers:
        main:
            type:  rotating_file
            path:  '/var/www/logs/symfony/proj1.log'
            level: debug
            formatter: 'monolog.formatter.json'
            max_files: 10
```

### Makefile
There is a Makefile that gives some shortcuts on how to manage the containers.

## Domain-wide index page
All dev projects are set in subdirectories named after the `PROJECT_NAME` parameter. You can access any of them from the main domain-wide index page. All your projects are shown
in this page.

Don't forget to add the domain `sf4-domain.localhost` to your `/etc/hosts`!

### Enjoy the Symfony Development Environment!