<?php

return [
    'table_name' => 'users',

    'drop_scheme' => "SET FOREIGN_KEY_CHECKS = 0; DROP TABLE IF EXISTS `users`; SET FOREIGN_KEY_CHECKS = 1",

    'scheme' => "CREATE TABLE IF NOT EXISTS `users` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `role`int(11) NOT NULL,
        `first_name` varchar(200) NOT NULL,
        `insertion` varchar(20),
        `last_name` varchar(200) NOT NULL,
        `email` varchar(200) NOT NULL,
        `password` varchar(200) NOT NULL,
        `confirma_password` varchar(200),
        `country` int(11),
        `city` varchar(255),
        `birthday` date,
        `created_at` timestamp NOT NULL,
        `updated_at` timestamp DEFAULT CURRENT_TIMESTAMP,
        `deleted_at` timestamp DEFAULT NULL,
        `created_by` int(11) NOT NULL,
        `updated_by` int(11),
        `deleted_by` int(11),
        PRIMARY KEY (`id`)
    ) ENGINE=InnoDB  DEFAULT CHARSET=latin1;",

    'relations' => [
        'ALTER TABLE `users` ADD FOREIGN KEY (`role`) REFERENCES `roles`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;',

        'ALTER TABLE `users` ADD FOREIGN KEY (`created_by`) REFERENCES `users`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;',
        'ALTER TABLE `users` ADD FOREIGN KEY (`updated_by`) REFERENCES `users`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;',
        'ALTER TABLE `users` ADD FOREIGN KEY (`deleted_by`) REFERENCES `users`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;',

        'ALTER TABLE `roles` ADD FOREIGN KEY (`created_by`) REFERENCES `users`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;',
        'ALTER TABLE `roles` ADD FOREIGN KEY (`updated_by`) REFERENCES `users`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;',
        'ALTER TABLE `roles` ADD FOREIGN KEY (`deleted_by`) REFERENCES `users`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;',
    ],

    'seeder' => [
        'type' => 'array',
        'data' => array([
            'first_name' => 'Rana',   
            'last_name'  => 'Ibraheem',
            'email'      => 'rana.ibraheem@mail',
            'password'   => password_hash('ranahallo', PASSWORD_DEFAULT),
            'role'       => 1,
            'country'    => 150,
            'city'       => 'Groningen',
            'birthday'   => '1982-07-24',
            'created_at' => date('Y-m-d H:i:s'),
            'created_by' => 1,
        ],
        
        [
            'first_name' => 'Anas',
            'last_name'  => 'Zorom',
            'email'      => 'anas.zorom@mail',
            'password'   => password_hash('anashallo', PASSWORD_DEFAULT),
            'role'       => 1,
            'country'    => 150,
            'city'       => 'Groningen',
            'birthday'   => '1979-11-13',
            'created_at' => date('Y-m-d H:i:s'),
            'created_by' => 1,
        ],

        [
            'first_name' => 'Aslan',
            'last_name'  => 'Zorom',
            'email'      => 'aslan.zorom@mail',
            'password'   => password_hash('aslanhallo', PASSWORD_DEFAULT),
            'role'       => 3,
            'country'    => 150,
            'city'       => 'Groningen',
            'birthday'   => '2010-09-25',
            'created_at' => date('Y-m-d H:i:s'),
            'created_by' => 1,
        ],

        [
            'first_name' => 'Asanai',
            'last_name'  => 'Zorom',
            'email'      => 'asanai.zorom@mail',
            'password'   => password_hash('asanaihallo', PASSWORD_DEFAULT),
            'role'       => 3,
            'country'    => 150,
            'city'       => 'Groningen',
            'birthday'   => '2019-02-02',
            'created_at' => date('Y-m-d H:i:s'),
            'created_by' => 1,
        ],

        [
            'first_name' => 'nice',
            'last_name'  => 'bees',
            'email'      => 'nice.bees@mail',
            'password'   => password_hash('nicehallo', PASSWORD_DEFAULT),
            'role'       => 3,
            'country'    => 150,
            'city'       => 'Groningen',
            'birthday'   => '1999-06-18',
            'created_at' => date('Y-m-d H:i:s'),
            'created_by' => 1,
        ],

        [
            'first_name' => 'flying',
            'last_name'  => 'birds',
            'email'      => 'flying.birds@mail',
            'password'   => password_hash('flyinghallo', PASSWORD_DEFAULT),
            'role'       => 3,
            'country'    => 150,
            'city'       => 'Groningen',
            'birthday'   => '1999-06-18',
            'created_at' => date('Y-m-d H:i:s'),
            'created_by' => 1,
        ],

        [
            'first_name' => 'blue',
            'last_name'  => 'sky',
            'email'      => 'blue.sky@mail',
            'password'   => password_hash('bluehallo', PASSWORD_DEFAULT),
            'role'       => 3,
            'country'    => 150,
            'city'       => 'Groningen',
            'birthday'   => '1999-06-18',
            'created_at' => date('Y-m-d H:i:s'),
            'created_by' => 1,
        ],

        [
            'first_name' => 'swimming',
            'last_name'  => 'fish',
            'email'      => 'swimming.fish@mail',
            'password'   => password_hash('swimminghallo', PASSWORD_DEFAULT),
            'role'       => 3,
            'country'    => 150,
            'city'       => 'Groningen',
            'birthday'   => '1990-06-18',
            'created_at' => date('Y-m-d H:i:s'),
            'created_by' => 1,
        ],

        [
            'first_name' => 'dark',
            'last_name'  => 'night',
            'email'      => 'dark.night@mail',
            'password'   => password_hash('darkhallo', PASSWORD_DEFAULT),
            'role'       => 3,
            'country'    => 150,
            'city'       => 'Groningen',
            'birthday'   => '1999-06-18',
            'created_at' => date('Y-m-d H:i:s'),
            'created_by' => 1,
        ],

        [
            'first_name' => 'light',
            'last_name'  => 'day',
            'email'      => 'light.day@mail',
            'password'   => password_hash('lighthallo', PASSWORD_DEFAULT),
            'role'       => 3,
            'country'    => 150,
            'city'       => 'Groningen',
            'birthday'   => '1999-06-18',
            'created_at' => date('Y-m-d H:i:s'),
            'created_by' => 1,
        ]
        ),
    ],
];