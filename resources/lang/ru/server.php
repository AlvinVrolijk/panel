<?php

return [
    'index' => [
        'title' => 'Просмотр сервера :name',
        'header' => 'Консоль сервера',
        'header_sub' => 'Контролируйте свой сервер в режиме реального времени.',
    ],
    'schedule' => [
        'header' => 'Диспетчер расписаний',
        'header_sub' => 'Управляйте всеми расписаниями этого сервера в одном месте.',
        'current' => 'Текущие расписания',
        'new' => [
            'header' => 'Создать новое расписание',
            'header_sub' => 'Создайте новый набор запланированных задач для этого сервера.',
            'submit' => 'Создать расписание',
        ],
        'manage' => [
            'header' => 'Управление расписанием',
            'submit' => 'Обновить расписание',
            'delete' => 'Удалить расписание',
        ],
        'task' => [
            'time' => 'После',
            'action' => 'Выполнить действие',
            'payload' => 'С полезной нагрузкой',
            'add_more' => 'Добавить еще одну задачу',
        ],
        'actions' => [
            'command' => 'Отправить команду',
            'power' => 'Управление питанием',
        ],
        'toggle' => 'Переключить статус',
        'run_now' => 'Расписание запуска',
        'schedule_created' => 'Успешно создано новое расписание для этого сервера.',
        'schedule_updated' => 'Расписание обновлено.',
        'unnamed' => 'Расписание без имени',
        'setup' => 'Настройка расписания',
        'day_of_week' => 'День недели',
        'day_of_month' => 'День месяца',
        'hour' => 'Час дня',
        'minute' => 'Минута часа',
        'time_help' => 'Система расписаний поддерживает использование синтаксиса Cronjob при определении момента начала выполнения задач. Используйте поля выше, чтобы указать, когда эти задачи должны начать выполняться, или выберите параметры в меню множественного выбора.',
        'task_help' => 'Время выполнения заданий относительно ранее определенного задания. Каждому расписанию может быть назначено не более 5 задач, а задачи не могут быть запланированы с интервалом более 15 минут.',
    ],
    'tasks' => [
        'task_created' => 'Успешно создано новое задание на панели.',
        'task_updated' => 'Задача успешно обновлена. Любые действия задачи, поставленные в очередь, будут отменены и запущены снова в следующее определенное время.',
        'header' => 'Запланированные задачи',
        'header_sub' => 'Автоматизируйте свой сервер.',
        'current' => 'Текущие запланированные задачи',
        'actions' => [
            'command' => 'Отправить команду',
            'power' => 'Опция управленя питанием ',
        ],
        'new_task' => 'Добавить новую задачу',
        'toggle' => 'Переключить статус',
        'new' => [
            'header' => 'Новое задание',
            'header_sub' => 'Создайте новое запланированное задание для этого сервера.',
            'task_name' => 'Название задачи',
            'day_of_week' => 'День недели',
            'custom' => 'Пользовательское значение',
            'day_of_month' => 'День месяца',
            'hour' => 'Час',
            'minute' => 'Минута',
            'sun' => 'Воскресенье',
            'mon' => 'Понедельник',
            'tues' => 'Вторник',
            'wed' => 'Среда',
            'thurs' => 'Четверг',
            'fri' => 'Пятница',
            'sat' => 'Суббота',
            'submit' => 'Создать задачу',
            'type' => 'Тип задачи',
            'chain_then' => 'Затем после',
            'chain_do' => 'Выполнять',
            'chain_arguments' => 'С аргументами',
            'payload' => 'Задача Полезная нагрузка',
            'payload_help' => 'Например, если вы выбрали <code>Send Command</code>, введите команду здесь. Если вы выбрали <code>Send Power Option</code>, укажите здесь действие power (например, <code>restart</code>).',
        ],
        'edit' => [
            'header' => 'Управление задачей',
            'submit' => 'Обновить задачу',
        ],
    ],
    'users' => [
        'header' => 'Управление пользователями',
        'header_sub' => 'Контроль, кто может получить доступ к вашему серверу.',
        'configure' => 'Настроить разрешения',
        'list' => 'Аккаунты с доступом',
        'add' => 'Добавить нового пользователя',
        'update' => 'Обновить пользователя',
        'user_assigned' => 'Успешно назначен новый пользователь на этот сервер.',
        'user_updated' => 'Успешно обновлены разрешения.',
        'edit' => [
            'header' => 'Редактировать пользователя',
            'header_sub' => 'Изменить доступ пользователя к серверу.',
        ],
        'new' => [
            'header' => 'Добавить нового пользователя',
            'header_sub' => 'Добавьте нового пользователя с разрешениями на этот сервер.',
            'email' => 'Адрес электронной почты',
            'email_help' => 'Введите адрес электронной почты для пользователя, которого вы хотите пригласить для управления этим сервером.',
            'power_header' => 'Управление питанием',
            'file_header' => 'Управление файлами',
            'subuser_header' => 'Управление пользователями',
            'server_header' => 'Управление сервером',
            'task_header' => 'Управление расписанием',
            'database_header' => 'Управление базой данных',
            'power_start' => [
                'title' => 'Запустить сервер',
                'description' => 'Позволяет пользователю запустить сервер.',
            ],
            'power_stop' => [
                'title' => 'Остановить сервер.',
                'description' => 'Позволяет пользователю остановить сервер.',
            ],
            'power_restart' => [
                'title' => 'Перезагрузить сервер',
                'description' => 'Позволяет пользователю перезапустить сервер.',
            ],
            'power_kill' => [
                'title' => 'Убить Сервер',
                'description' => 'Позволяет пользователю убить процесс сервера.',
            ],
            'send_command' => [
                'title' => 'Отправить консольную команду',
                'description' => 'Позволяет отправить команду из консоли. Если у пользователя нет разрешений на остановку или перезапуск, он не может отправить команду stop',
            ],
            'access_sftp' => [
                'title' => 'SFTP разрешения',
                'description' => 'Позволяет пользователю подключаться к SFTP-серверу, предоставленному демоном.',
            ],
            'list_files' => [
                'title' => 'Список файлов',
                'description' => 'Позволяет пользователю перечислять все файлы и папки на сервере, но не просматривать содержимое файла.',
            ],
            'edit_files' => [
                'title' => 'Редактировать файлы',
                'description' => 'Позволяет пользователю открыть файл только для просмотра. SFTP не влияет на это разрешение.',
            ],
            'save_files' => [
                'title' => 'Сохранить файлы',
                'description' => 'По',
            ],
            'move_files' => [
                'title' => 'Переименовать и переместить файлы',
                'description' => 'Позволяет пользователю перемещать и переименовывать файлы и папки в файловой системе.',
            ],
            'copy_files' => [
                'title' => 'Копировать файлы',
                'description' => 'Позволяет пользователю копировать файлы и папки в файловой системе.',
            ],
            'compress_files' => [
                'title' => 'Сжатие файлов',
                'description' => 'Позволяет пользователю создавать архивы файлов и папок в системе.',
            ],
            'decompress_files' => [
                'title' => 'Распаковать файлы',
                'description' => 'Позволяет пользователю распаковать архивы .zip и .tar (.gz).',
            ],
            'create_files' => [
                'title' => 'Создать файлы',
                'description' => 'Позволяет пользователю создавать новый файл в панели.',
            ],
            'upload_files' => [
                'title' => 'Загрузить файлы',
                'description' => 'Позволяет пользователю загружать файлы через файловый менеджер.',
            ],
            'delete_files' => [
                'title' => 'Удалить файлы',
                'description' => 'Позволяет пользователю удалять файлы из системы.',
            ],
            'download_files' => [
                'title' => 'Скачать файлы',
                'description' => 'Позволяет пользователю загружать файлы. Если пользователю дано это разрешение, он может загружать и просматривать содержимое файла, даже если это разрешение не назначено на панели.',
            ],
            'list_subusers' => [
                'title' => 'Список пользователей',
                'description' => 'Позволяет пользователю просматривать список всех суб-пользователей, назначенных серверу.',
            ],
            'view_subuser' => [
                'title' => 'Просмотр пользователей',
                'description' => 'Позволяет пользователю просматривать разрешения, назначенные для пользователей.',
            ],
            'edit_subuser' => [
                'title' => 'Редактировать пользователей',
                'description' => 'Позволяет пользователю редактировать разрешения, назначенные другим пользователям.',
            ],
            'create_subuser' => [
                'title' => 'Создать пользователя',
                'description' => 'Позволяет пользователю создавать дополнительных пользователей на сервере.',
            ],
            'delete_subuser' => [
                'title' => 'Удалить пользователя',
                'description' => 'Позволяет пользователю удалять других пользователей на сервере.',
            ],
            'view_allocations' => [
                'title' => 'Посмотреть распределение',
                'description' => 'Позволяет пользователю просматривать все IP-адреса и порты, назначенные серверу.',
            ],
            'edit_allocation' => [
                'title' => 'Изменить подключение по умолчанию',
                'description' => 'Позволяет пользователю изменять распределение соединения по умолчанию для использования на сервере.',
            ],
            'view_startup' => [
                'title' => 'Просмотреть команду запуска',
                'description' => 'Позволяет пользователю просматривать команду запуска и связанные переменные для сервера.',
            ],
            'edit_startup' => [
                'title' => 'Редактировать команду запуска',
                'description' => 'Позволяет пользователю изменять переменные запуска для сервера.',
            ],
            'list_schedules' => [
                'title' => 'Список расписаний',
                'description' => 'Позволяет пользователю посмотреть все расписания (включенные и отключенные) для этого сервера.',
            ],
            'view_schedule' => [
                'title' => 'Посмотреть расписание',
                'description' => 'Позволяет пользователю просматривать детали конкретного расписания, включая все назначенные задачи.',
            ],
            'toggle_schedule' => [
                'title' => 'Переключить Расписание',
                'description' => 'Позволяет пользователю переключать расписание на активные или неактивные.',
            ],
            'queue_schedule' => [
                'title' => 'Очередь Расписаний',
                'description' => 'Позволяет пользователю ставить в очередь расписание для выполнения его задач в следующем цикле процесса.',
            ],
            'edit_schedule' => [
                'title' => 'Изменить расписание',
                'description' => 'Позволяет пользователю редактировать расписание, включая все задачи расписания. Это позволит пользователю удалять отдельные задачи, но не удалять само расписание.',
            ],
            'create_schedule' => [
                'title' => 'Создать расписание',
                'description' => 'Позволяет пользователю создавать новое расписание.',
            ],
            'delete_schedule' => [
                'title' => 'Удалить расписание',
                'description' => 'Позволяет пользователю удалить расписание с сервера.',
            ],
            'view_databases' => [
                'title' => 'Просмотр базы данных',
                'description' => 'Позволяет пользователю просматривать все базы данных, связанные с этим сервером, включая имена пользователей и пароли для баз данных.',
            ],
            'reset_db_password' => [
                'title' => 'Сбросить пароль базы данных',
                'description' => 'Позволяет пользователю сбросить пароли для баз данных.',
            ],
            'delete_database' => [
                'title' => 'Удалить базы данных',
                'description' => 'Позволяет пользователю удалять базы данных для этого сервера.',
            ],
            'create_database' => [
                'title' => 'Создать базу данных',
                'description' => 'Позволяет пользователю создавать дополнительные базы данных для этого сервера.',
            ],
        ],
    ],
    'allocations' => [
        'mass_actions' => 'Массовые акции',
        'delete' => 'Удалить распределение',
    ],
    'files' => [
        'exceptions' => [
            'invalid_mime' => 'Этот тип файла не может быть отредактирован через встроенный редактор.',
            'max_size' => 'Этот файл слишком велик для редактирования через встроенный редактор.',
        ],
        'header' => 'Файловый менеджер',
        'header_sub' => 'Управляйте всеми своими файлами прямо из Интернета.',
        'loading' => 'Загрузка исходной файловой структуры, это может занять несколько секунд.',
        'path' => 'При настройке любых путей к файлам в плагинах или настройках вашего сервера вы должны использовать :path в качестве базового пути. Максимальный размер загрузки файлов через Интернет на этот узел: :size.',
        'seconds_ago' => 'секунд назад',
        'file_name' => 'Имя файла',
        'size' => 'Размер',
        'last_modified' => 'Последнее изменение',
        'add_new' => 'Добавить новый файл',
        'add_folder' => 'Добавить новую папку',
        'mass_actions' => 'Массовые акции',
        'delete' => 'Удалить файлы',
        'edit' => [
            'header' => 'Редактировать файл',
            'header_sub' => 'Внесите изменения в файл из Интернета.',
            'save' => 'Сохранить файл',
            'return' => 'Вернуться в файловый менеджер',
        ],
        'add' => [
            'header' => 'Новый файл',
            'header_sub' => 'Создайте новый файл на вашем сервере.',
            'name' => 'Имя файла',
            'create' => 'Создать файл',
        ],
    ],
    'config' => [
        'name' => [
            'header' => 'Название сервера',
            'header_sub' => 'Измените имя этого сервера.',
            'details' => 'Имя сервера является только ссылкой на этот сервер на панели и не влияет на какие-либо конкретные конфигурации серверов, которые могут отображаться для пользователей в играх.',
        ],
        'startup' => [
            'header' => 'Начать настройку',
            'header_sub' => 'Управляйте аргументами запуска сервера.',
            'command' => 'Команда запуска',
            'edit_params' => 'Изменить параметры',
            'update' => 'Обновить параметры запуска',
            'startup_regex' => 'Правила ввода',
            'edited' => 'Переменные запуска были успешно отредактированы. Они вступят в силу при следующем запуске этого сервера.',
        ],
        'sftp' => [
            'header' => 'Конфигурация SFTP',
            'header_sub' => 'Данные учетной записи для SFTP-соединений.',
            'details' => 'Подробности SFTP',
            'conn_addr' => 'Адрес подключения',
            'warning' => 'Пароль SFTP - это пароль вашей учетной записи. Убедитесь, что ваш клиент настроен на использование SFTP, а не FTP или FTPS для соединений, между протоколами есть разница.',
        ],
        'database' => [
            'header' => 'Базы данных',
            'header_sub' => 'Все базы данных доступные для этого сервера.',
            'your_dbs' => 'Настройки базы данных',
            'host' => 'MySQL Хост',
            'reset_password' => 'Сброс пароля',
            'no_dbs' => 'Для этого сервера нет баз данных.',
            'add_db' => 'Добавить новую базу данных.',
        ],
        'allocation' => [
            'header' => 'Порты сервера',
            'header_sub' => 'Управляйте IP-адресами и портами, доступными на этом сервере.',
            'available' => 'Доступные Распределения',
            'help' => 'Справка по Распределению портов.',
            'help_text' => 'Список включает в себя все доступные IP-адреса и порты, которые открыты для вашего сервера, чтобы использовать для входящих подключений.',
        ],
    ],
];
