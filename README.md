![Россия](https://leadersofdigital.ru/89e34a592e531d209b4a83f1fb649425.svg)
![Цифровой прорыв](https://leadersofdigital.ru/adb6f1da03e109f49d899a5d6305c7d2.svg)

# Команда Киборги - Кейс СКФУ

_Ресурсное управление // Разработка информационного портала по поиску работы для студентов и размещения вакансий от
работодателей_

## Live App

# https://ncfu.volkv.com

## Функционал:

* Возможность [Логина](https://ncfu.volkv.com/login) за Студента/Компанию/ВУЗ
* Личный Кабинет Студента/Компании/ВУЗа
* Страницы: [Студентов](https://ncfu.volkv.com/students) / [Компаний](https://ncfu.volkv.com/companies) / [ВУЗов](https://ncfu.volkv.com/universities) / [Вакансий](https://ncfu.volkv.com/vacancies) / [Событий](https://ncfu.volkv.com/events)

## Stack

* Laravel 8
* MySQL 8
* Nginx
* Redis
* ElasticSearch
* VueJS / Nuxt (wip)

## Технологии

* Docker / Compose
* Очереди Redis
* Кэш Redis
* Планировщик Laravel
* Events / Notification Channels

## Local init (linux):

Pre: docker / docker-compose
```shell
git clone https://github.com/volkv/leaders-of-digital-2020.git
make install
```

**https://ncfu.test:8080**