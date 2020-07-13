<?


/*
 *  composer.
 *      Cкачиваются необходимые библиотеки, и формирует __autoload.php, при подключении которого мы получим доаступ.
 *      Нужно перейти в папка с php (должно быть расширение ssl) и установить там composer. Добавиться в эту папку composer.phar
 *
 *      установка при помощи - composer require "twig/twig:^3.0"
 *      удалить - composer remove slim/slim-skeleton
 *
 *      composer.json - здесь зависимости
 *              "require" - Здесь библиотеки (slim/slim:2 - Название поставщика/Библиотека : версия.)
 *
 *      composer install -  чтение composer.json и установка библиотек
 *
 *
 *
 *     repositories (Пользовательские репозитории пакетов.)
 *          https://getcomposer.ucoz.org/publ/kniga/skhema_composer_json/2-1-0-5#repositories
 *          По умолчанию Composer просто использует репозиторий packagist. Указав репозитории, вы можете получить пакеты из других мест.
 *           при этом в test-git должен быть описан свой composer.json
 *
 *
 *
 *        Можно устанавливать и по другому пути , используя composer/installers,
             extra": {
	            "installer-paths": {
	                "templates/": [
	                    "uplab/test-git"
	            ]
	        }
						!!! при этом в test-git должен быть описан свой composer.json
                        !!!  описан type, И ЗАВИСИМОСТЬ
							 "require": {
							    "composer/installers": "~1"
							  }

 */

require __DIR__ . '/vendor/autoload.php';

$loader = new \Twig\Loader\ArrayLoader([
	'index' => 'Hello {{ name }}!',
]);
$twig = new \Twig\Environment($loader);

echo $twig->render('index', ['name' => 'Fabien']);