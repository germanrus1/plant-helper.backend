<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>


# О проекте plant-helper.ru

PlantHelper - приложение-справочник по расстениям

- Приложение выполняет функцию API для приложений и администрирование
- Админка работает на Laravel, AdminLTE
- Для разработки желательно установить docker и docker-compose. Можно запустить и на 
Open Server, но надо настроить самому


## Настройка и запуск приложения

- Скопируйте _.env.example_ файл в корневую директорию приложения и переименуйте в _.env_
- Инструкции по настройка _.env_ файла читайте ниже

#### Без docker

- в корне проекта выполнить `composer install`
- За загрузить дамп базы данных MySQL

#### На docker
- После настройки .env выполните в терминале `docker-compose up`.
После этого у вас приложение должен работать
- Что бы выполнить команды внутри терминала, можно использовать команду
 `docker-compose exec SERVICE_NAME TERMINAL_CMD`. 
- Пример: `docker-compose exec app ls -la`

### Дополнительные кониги проекта
- Конфиги проекта расположены в _./deployment_

## Основные параметры настройки .env
- APP_URL=http://plant-helper.local - домен проекта 
