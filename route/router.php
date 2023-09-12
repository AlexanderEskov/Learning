<?php

header("Location: http://heroes/index.php?qwert=244");
    class Router
    {
    //  http://heroes.com?page=inventory&action=pickupItem&id=324

    //  http://heroes.com/home/
    //  http://heroes.com/inventory/pickUpItem/id=15
    //  http://heroes.com/inventory/deleteItem/id=15
        private $url;       // Переданный адрес
        private $route;     // Маршрут
        private $params;    // Параметры запроса
        private $action;    // Параметры запроса

        /* 1. Нужно определить финальный путь (то есть куда по факту пренаправлять клиента)
        *
        *  2. Первое подразумевает:
        *    -Определить контроллер назначения
        *    -Производимое действие (нужный action)
         * 3. -Параметры, передаваемые в action
         *
         * 4. Проверить права доступа к указанному ресурсу
         */


        // Test: http://heroes/qw45q43
        public function __construct()
        {
            $url = $_SERVER['HTTP_REFERER'];    // Заказанная ссылка
            $route = App
        }


    }
?>