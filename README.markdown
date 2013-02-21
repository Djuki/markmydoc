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

- Install composer dependencies
    $sudo php composer.phar install

- Create virtual host on your web server (apache2) or change /config/config.php file
    base_url = '/path/to/folder/markmydocs/'

- Make sure you have enabled mode rewrite at apache2 server

# Create sidebar menu

Menu for documentation is configurable. Configuration file is config/sidebar.php

    return array(
        'menu' => array(
            'Preface' => array(
                'introduction' => 'intro',
                'Errors' => 'errors',
            ),
            'Application' => array (
                'Installation' => 'installation',
                'Config' => 'config',
            ),
        )
    );

"Preface" and "Application" are headlines for menu segments. In 'introduction' => 'intro', "Introduction" is menu item title and "into" is markdown filename. It will point to "intro.md" filename.
You can add as menu segments and menu items as you wish.

# Markdown files

This application use markdown files to create HTML pages. Main purpose is creating documentation, but you can use it for anything you want.
If you want to read more about Markdown files read on [Wikipedia](http://en.wikipedia.org/wiki/Markdown "Markdown").

Markdown files need to have .md extension. They need to be stored at /doc folder. Don't forget to create menu item for new markdown file.

# Themes

Default theme is located at the /public/themes/default folder. You can add new theme ih /themes folder. Theme need to have index.php file. Index.php is main theme file and it is responsible for layout look.
Javascript files location is in "js" folder in theme. Including javascript in theme is simple like this:

    <?=Assets::js('vendor/jquery-1.8.2.min')?>

As you can see this method assumes that you located javascript file in "js" folder. Important: Do not include ".js" extension in Asset::js method call, just filename.

Css files are located in "css" folder in theme. Including css files is similar with including js files.

    <?=Assets::css('style')?>

If you create new theme you need to change Layout class

# Credits

Default theme is taken from Laravel docs, and credits goes to [Dayle Rees](http://daylerees.com/ "Dayle Rees")
Main developer is [Ivan Đurđevac](https://github.com/Djuki "Ivan Đurđevac")