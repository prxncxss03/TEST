FROM gitpod/workspace-gitpod/workspace-mysql

RUN sudo apt-get update && sudo apt-get install php-xdebug -y