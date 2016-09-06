<?php

Admin::menu()->url('/')->label('Главная админки')->icon('fa-dashboard');
Admin::menu('App\Circle')->label('Кружки');
Admin::menu('App\Worker')->label('Сотрудники');
Admin::menu('App\Event')->label('События');
Admin::menu('App\Schedular')->label('Расписание');