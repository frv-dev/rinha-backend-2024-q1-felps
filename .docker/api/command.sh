if [ ! -d "./vendor" ]; then
    composer install
fi

php src/index.php
