# MarkMyDoc

MarkMyDoc is Application for pretty documentation. This app will turn your markdown files into nice looking documentation.
This is stand alone application. MarkMyDoc is not standing on any framework. It using [PHP Markdown & Extra](https://github.com/dflydev/dflydev-markdown "PHP Markdown & Extra")
for converting markdown files into HTML.

# Installation

- Clone this repository with command
    $git clone https://github.com/Djuki/markmydoc.git

- Get into directory
    $cd markmydoc

- Get composer phar file with
    $curl -s https://getcomposer.org/installer | php

- Install composer depadances
    $sudo php composer.phar install

- Create virtual host on your web server (apache2) or change /config/config.php file
    base_url = '/path/to/folder/markmydocs/'

- Make sure you have enabled mode rewrite at apache2 server

# Credits

Default theme is taken from Laravel docs, and credits goes to [Dayle Rees](http://daylerees.com/ "Dayle Rees")
Main developer is [Ivan Đurđevac](https://github.com/Djuki "Ivan Đurđevac")