<h3 align="center">PHP Framework (MVC) BadonFW</h3>
### Prerequisites

This is an example of how to list things you need to use the software and how to install them.

* Composer

```sh
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === 'dac665fdc30fdd8ec78b38b9800061b4150413ff2e3b6f88543c636f7cd84f6db9189d43a81e5503cda447da73c7e5b6') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```
* PHP > 7.4

```sh
sudo apt-get install php7.4-curl
```

### Installation & Running

1. Clone the repo

```sh
git clone https://github.com/rhandyta/badon-fw.git
```

2. Clone the repo

```sh
cd badon-fw 
cd public

php -S localhost:9999
```

## Authors

* **rhandyta** - *Developer* - [rhandyta](https://github.com/rhandyta/) - *rhandyta*

## Acknowledgements

* [rhandyta](https://github.com/rhandyta/)