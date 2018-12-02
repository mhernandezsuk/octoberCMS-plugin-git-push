#Plugin to upload changes to remote branch

The plugin was developed so that when we make changes in production on the application, we can synchronize these changes with Bitbucket / GitHub.

##Steps to follow

####1 - Clone your project with SSH
You should add this repository in the plugins directory, it should be in such a way that / plugins / msuk

####2 - Create SSH credentials
https://git-scm.com/book/es/v1/Git-en-un-servidor-Generando-tu-clave-pública-SSH
 
####3 - Add credentials to Bitbucket / GitHub and copy them into the /var/www/.ssh directory
This is because the application when executing does it with the apache user (www-data) and we need this user to be the one who manages the SSH credentials in order to push the remote directory

###Note: 
possibly the first push you should do it from the console and not from the application
