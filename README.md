# Work in progress!!


# Docker Symfony Dev Env

The purpose of this tool is to create a fast environment for Symfony4 development.

## Usage
  * Use `docker-compose build` to build your containers.
  * Build a `container-preparation.env` file in which you will add your desired `ENV` variables. E.g:
```
// Example ENV definitions:
PROJECT_NAME=test-new
PROJECT_TYPE=--full
GIT_EMAIL="john.doe@mail.com"
GIT_NAME="John Doe" 
```


 *The `PROJECT_NAME` and `PROJECT_TYPE` are used for the `symfony` installer. If the `--full` option can be ignored by leaving the `PROJECT_TYPE` variable empty. `E.g: PROJECT_TYPE=`*

  * Run `docker-compose up` and wait for your new Symfony4 project to be installed!

## Domain-wide index page
All dev projects are set in subdirectories named after the `PROJECT_NAME` parameter. You can access any of them from the main domain-wide index page. All your projects are shown
in this page.

Don't forget to add the domain `sf4-domain.localhost` to your `/etc/hosts`!

### Enjoy the Symfony Development Environment!