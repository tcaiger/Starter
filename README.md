# Starter
A project starter for SilverStripe projects.

### Installing The Starter For The First Time ###
* Run composer install from the project root to get php modules.
* Run npm install from the theme root to get the javascript dependencies required for running grunt.
* Run grunt dev to watch and compile scss files.

### SCSS Styles Overview ###
* All scss is stored in the styles folder and compiles to css/main.css.
* Css architecture is based on BEMIT, ITCSS and uses Bootstrap framework for reset, grid and some utility classes

### Set Up A New Project Locally ###
* Keep a copy of the starter repo on your local machine.
* Make a new project in bit bucket.
* Clone your new empty project from bit bucket to your desktop.
* Copy and paste the whole starter project, except the .git folder, into your new project folder and make first commit to the new project.

### Set Up A New Project On The Server ###
* SSH into the server.
* Clone the project to public_html on the server.
* Run composer install to get the php modules.


### Set Up An Existing Project On The Server ###
* https://help.github.com/articles/adding-an-existing-project-to-github-using-the-command-line/
* If the modules are installed with composer. Create a .gitignore file at the project root and add the php modules to it before the git add . step. 

### Notes ###
* Browser support back to IE9

### References ###
* ITCSS: https://www.xfive.co/blog/itcss-scalable-maintainable-css-architecture
* Font guidelines: https://css-tricks.com/snippets/css/using-font-face/