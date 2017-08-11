#!/usr/bin/env bash
#
# Postprocess scaffold
#

# Default module values
AUTHOR_NAME="Mikael Roos"
AUTHOR_EMAIL="mos@dbwebb.se"
MODULE_NAME="mupp"
TODAY=$( date +'%Y-%m-%d' )

# Prepare for git
git init

# Update default config file
sed -i "s/MODULE_NAME/$MODULE_NAME/g" config/module.php
mv config/module.php "config/$MODULE_NAME.php"

# Update Revision history
sed -i "s/TODAY/$TODAY/g" REVISION.md

# Update composer.json
sed -i "s/MODULE_NAME/$MODULE_NAME/g" composer.json
sed -i "s/AUTHOR_NAME/$AUTHOR_NAME/g" composer.json
sed -i "s/AUTHOR_EMAIL/$AUTHOR_EMAIL/g" composer.json

# Create src
install -d src

# Final message
printf "\
Do update the following files and services.
 GitHub:      Create repo https://github.com/canax/%s
 Gitter:      Create a Gitter chatt https://gitter.im/canax/%s
 Composer:    Edit composer.json
 Packagist:   Create on https://packagist.org/packages/anax/%s
 Travis:      Enable, edit .travis.yml
 CircleCI:    Enable, edit circle.yml
 Scrutinizer: Enable
 and git add, commit, push to origin and then tag - ready to go. 
" "$MODULE_NAME" "$MODULE_NAME" "$MODULE_NAME" 
