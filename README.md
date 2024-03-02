# How to install new Project
-   Execute command `make new-project` this command creating a new file into app folder with name project
-   Then execute `make ssh` for enter the container
-   enter the container should execute the follow next command `mv project/* . && mv project/.* .` for extract the content of folder with name project
-   now remove this folder with `rm -rf project`