# Тестовое задание на PHP

1. Создать схему БД для хранения записей и комментариев к ним. SQL-запросы для создания БД поместить в отдельный файл
- запросы сохранены в файле sql.txt

2. Создать PHP скрипт, который скачает список записей и комментариев к ним и загрузит их в БД. По завершению загрузки, вывести в консоль надпись: "Загружено Х записей и Y комментариев"
- файл loadData.php

3. Создать HTML-форму поиска записей по тексту комментария (поле ввода и кнопка "Найти"). Пример: при вводе "laudanti" нужно вывести все записи, в комментариях к которым есть эта строка. (имеется в этой записи https://jsonplaceholder.typicode.com/posts/6/comments). Поиск должен работать при вводе минимум 3-х символов. В результатах поиска вывести заголовок записи и комментарий с искомой строкой.
- файл index.php
