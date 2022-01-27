<?php

    // Load the HTML <head> section
    require 'assets/views/layouts/head-c.view.php';

    require 'assets/views/header.view.php';
    // Inject code from controller
    require 'controllers/coffeeCups.php';
    // require 'assets/views/coffeeCups.view.php';
    // Close it with the bottom end </body> and </html> tags
    require 'assets/views/footer.view.php';
    // Close HTML <body> and <html> section
    require 'assets/views/layouts/bottom-c.view.php';