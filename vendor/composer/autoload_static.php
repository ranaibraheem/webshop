<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4fd09cabee3860617ba4e335db940a83
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        'a4a119a56e50fbb293281d9a48007e0e' => __DIR__ . '/..' . '/symfony/polyfill-php80/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Php80\\' => 23,
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Ctype\\' => 23,
        ),
        'P' => 
        array (
            'Plasticbrain\\FlashMessages\\' => 27,
            'PhpOption\\' => 10,
        ),
        'G' => 
        array (
            'GrahamCampbell\\ResultType\\' => 26,
        ),
        'D' => 
        array (
            'Dotenv\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Php80\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php80',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Plasticbrain\\FlashMessages\\' => 
        array (
            0 => __DIR__ . '/..' . '/plasticbrain/php-flash-messages/src',
        ),
        'PhpOption\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpoption/phpoption/src/PhpOption',
        ),
        'GrahamCampbell\\ResultType\\' => 
        array (
            0 => __DIR__ . '/..' . '/graham-campbell/result-type/src',
        ),
        'Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/phpdotenv/src',
        ),
    );

    public static $classMap = array (
        'App\\Controllers\\AdminController' => __DIR__ . '/../..' . '/app/Controllers/AdminController.php',
        'App\\Controllers\\CategoryController' => __DIR__ . '/../..' . '/app/Controllers/CategoryController.php',
        'App\\Controllers\\ContactController' => __DIR__ . '/../..' . '/app/Controllers/ContactController.php',
        'App\\Controllers\\Controller' => __DIR__ . '/../..' . '/app/Controllers/Controller.php',
        'App\\Controllers\\HomeController' => __DIR__ . '/../..' . '/app/Controllers/HomeController.php',
        'App\\Controllers\\LoginController' => __DIR__ . '/../..' . '/app/Controllers/LoginController.php',
        'App\\Controllers\\ProductController' => __DIR__ . '/../..' . '/app/Controllers/ProductController.php',
        'App\\Controllers\\ProductbController' => __DIR__ . '/../..' . '/app/Controllers/ProductbController.php',
        'App\\Controllers\\ProfileController' => __DIR__ . '/../..' . '/app/Controllers/ProfileController.php',
        'App\\Controllers\\RegisterController' => __DIR__ . '/../..' . '/app/Controllers/RegisterController.php',
        'App\\Controllers\\UserController' => __DIR__ . '/../..' . '/app/Controllers/UserController.php',
        'App\\Controllers\\productcController' => __DIR__ . '/../..' . '/app/Controllers/ProductcController.php',
        'App\\Database\\MigrateDatabase' => __DIR__ . '/../..' . '/app/Database/MigrateDatabase.php',
        'App\\Helpers\\Helper' => __DIR__ . '/../..' . '/app/Helpers/Helper.php',
        'App\\Libraries\\MySql' => __DIR__ . '/../..' . '/app/Libraries/MySql.php',
        'App\\Libraries\\QueryBuilder' => __DIR__ . '/../..' . '/app/Libraries/QueryBuilder.php',
        'App\\Libraries\\Request' => __DIR__ . '/../..' . '/app/Libraries/Request.php',
        'App\\Libraries\\Router' => __DIR__ . '/../..' . '/app/Libraries/Router.php',
        'App\\Libraries\\View' => __DIR__ . '/../..' . '/app/Libraries/View.php',
        'App\\Middleware\\Permissions' => __DIR__ . '/../..' . '/app/Middleware/Permissions.php',
        'App\\Middleware\\WhenLoggedIn' => __DIR__ . '/../..' . '/app/Middleware/WhenLoggedIn.php',
        'App\\Middleware\\WhenNotLoggedin' => __DIR__ . '/../..' . '/app/Middleware/WhenNotLoggedIn.php',
        'App\\Models\\CategoryModel' => __DIR__ . '/../..' . '/app/Models/CategoryModel.php',
        'App\\Models\\Model' => __DIR__ . '/../..' . '/app/Models/Model.php',
        'App\\Models\\PermissionModel' => __DIR__ . '/../..' . '/app/Models/PermissionModel.php',
        'App\\Models\\ProductModel' => __DIR__ . '/../..' . '/app/Models/ProductModel.php',
        'App\\Models\\ProductbModel' => __DIR__ . '/../..' . '/app/Models/ProductbModel.php',
        'App\\Models\\RoleModel' => __DIR__ . '/../..' . '/app/Models/RoleModel.php',
        'App\\Models\\UserModel' => __DIR__ . '/../..' . '/app/Models/UserModel.php',
        'App\\Models\\productcModel' => __DIR__ . '/../..' . '/app/Models/ProductcModel.php',
        'App\\Requests\\UserRequest' => __DIR__ . '/../..' . '/app/Requests/UserRequest.php',
        'Attribute' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Attribute.php',
        'Bowl' => __DIR__ . '/../..' . '/test.php',
        'ComposerAutoloaderInit4fd09cabee3860617ba4e335db940a83' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit4fd09cabee3860617ba4e335db940a83' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Dotenv\\Dotenv' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Dotenv.php',
        'Dotenv\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Exception/ExceptionInterface.php',
        'Dotenv\\Exception\\InvalidEncodingException' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Exception/InvalidEncodingException.php',
        'Dotenv\\Exception\\InvalidFileException' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Exception/InvalidFileException.php',
        'Dotenv\\Exception\\InvalidPathException' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Exception/InvalidPathException.php',
        'Dotenv\\Exception\\ValidationException' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Exception/ValidationException.php',
        'Dotenv\\Loader\\Loader' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Loader/Loader.php',
        'Dotenv\\Loader\\LoaderInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Loader/LoaderInterface.php',
        'Dotenv\\Loader\\Resolver' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Loader/Resolver.php',
        'Dotenv\\Parser\\Entry' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Parser/Entry.php',
        'Dotenv\\Parser\\EntryParser' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Parser/EntryParser.php',
        'Dotenv\\Parser\\Lexer' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Parser/Lexer.php',
        'Dotenv\\Parser\\Lines' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Parser/Lines.php',
        'Dotenv\\Parser\\Parser' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Parser/Parser.php',
        'Dotenv\\Parser\\ParserInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Parser/ParserInterface.php',
        'Dotenv\\Parser\\Value' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Parser/Value.php',
        'Dotenv\\Repository\\AdapterRepository' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/AdapterRepository.php',
        'Dotenv\\Repository\\Adapter\\AdapterInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/AdapterInterface.php',
        'Dotenv\\Repository\\Adapter\\ApacheAdapter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/ApacheAdapter.php',
        'Dotenv\\Repository\\Adapter\\ArrayAdapter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/ArrayAdapter.php',
        'Dotenv\\Repository\\Adapter\\EnvConstAdapter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/EnvConstAdapter.php',
        'Dotenv\\Repository\\Adapter\\GuardedWriter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/GuardedWriter.php',
        'Dotenv\\Repository\\Adapter\\ImmutableWriter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/ImmutableWriter.php',
        'Dotenv\\Repository\\Adapter\\MultiReader' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/MultiReader.php',
        'Dotenv\\Repository\\Adapter\\MultiWriter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/MultiWriter.php',
        'Dotenv\\Repository\\Adapter\\PutenvAdapter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/PutenvAdapter.php',
        'Dotenv\\Repository\\Adapter\\ReaderInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/ReaderInterface.php',
        'Dotenv\\Repository\\Adapter\\ReplacingWriter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/ReplacingWriter.php',
        'Dotenv\\Repository\\Adapter\\ServerConstAdapter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/ServerConstAdapter.php',
        'Dotenv\\Repository\\Adapter\\WriterInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/WriterInterface.php',
        'Dotenv\\Repository\\RepositoryBuilder' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/RepositoryBuilder.php',
        'Dotenv\\Repository\\RepositoryInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/RepositoryInterface.php',
        'Dotenv\\Store\\FileStore' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Store/FileStore.php',
        'Dotenv\\Store\\File\\Paths' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Store/File/Paths.php',
        'Dotenv\\Store\\File\\Reader' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Store/File/Reader.php',
        'Dotenv\\Store\\StoreBuilder' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Store/StoreBuilder.php',
        'Dotenv\\Store\\StoreInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Store/StoreInterface.php',
        'Dotenv\\Store\\StringStore' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Store/StringStore.php',
        'Dotenv\\Util\\Regex' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Util/Regex.php',
        'Dotenv\\Util\\Str' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Util/Str.php',
        'Dotenv\\Validator' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Validator.php',
        'GrahamCampbell\\ResultType\\Error' => __DIR__ . '/..' . '/graham-campbell/result-type/src/Error.php',
        'GrahamCampbell\\ResultType\\Result' => __DIR__ . '/..' . '/graham-campbell/result-type/src/Result.php',
        'GrahamCampbell\\ResultType\\Success' => __DIR__ . '/..' . '/graham-campbell/result-type/src/Success.php',
        'House' => __DIR__ . '/../..' . '/test.php',
        'Monolog\\DateTimeImmutable' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/DateTimeImmutable.php',
        'Monolog\\ErrorHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/ErrorHandler.php',
        'Monolog\\Formatter\\ChromePHPFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/ChromePHPFormatter.php',
        'Monolog\\Formatter\\ElasticaFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/ElasticaFormatter.php',
        'Monolog\\Formatter\\ElasticsearchFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/ElasticsearchFormatter.php',
        'Monolog\\Formatter\\FlowdockFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/FlowdockFormatter.php',
        'Monolog\\Formatter\\FluentdFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/FluentdFormatter.php',
        'Monolog\\Formatter\\FormatterInterface' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/FormatterInterface.php',
        'Monolog\\Formatter\\GelfMessageFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/GelfMessageFormatter.php',
        'Monolog\\Formatter\\HtmlFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/HtmlFormatter.php',
        'Monolog\\Formatter\\JsonFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/JsonFormatter.php',
        'Monolog\\Formatter\\LineFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/LineFormatter.php',
        'Monolog\\Formatter\\LogglyFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/LogglyFormatter.php',
        'Monolog\\Formatter\\LogmaticFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/LogmaticFormatter.php',
        'Monolog\\Formatter\\LogstashFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/LogstashFormatter.php',
        'Monolog\\Formatter\\MongoDBFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/MongoDBFormatter.php',
        'Monolog\\Formatter\\NormalizerFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/NormalizerFormatter.php',
        'Monolog\\Formatter\\ScalarFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/ScalarFormatter.php',
        'Monolog\\Formatter\\WildfireFormatter' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Formatter/WildfireFormatter.php',
        'Monolog\\Handler\\AbstractHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/AbstractHandler.php',
        'Monolog\\Handler\\AbstractProcessingHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/AbstractProcessingHandler.php',
        'Monolog\\Handler\\AbstractSyslogHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/AbstractSyslogHandler.php',
        'Monolog\\Handler\\AmqpHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/AmqpHandler.php',
        'Monolog\\Handler\\BrowserConsoleHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/BrowserConsoleHandler.php',
        'Monolog\\Handler\\BufferHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/BufferHandler.php',
        'Monolog\\Handler\\ChromePHPHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/ChromePHPHandler.php',
        'Monolog\\Handler\\CouchDBHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/CouchDBHandler.php',
        'Monolog\\Handler\\CubeHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/CubeHandler.php',
        'Monolog\\Handler\\Curl\\Util' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/Curl/Util.php',
        'Monolog\\Handler\\DeduplicationHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/DeduplicationHandler.php',
        'Monolog\\Handler\\DoctrineCouchDBHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/DoctrineCouchDBHandler.php',
        'Monolog\\Handler\\DynamoDbHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/DynamoDbHandler.php',
        'Monolog\\Handler\\ElasticaHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/ElasticaHandler.php',
        'Monolog\\Handler\\ElasticsearchHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/ElasticsearchHandler.php',
        'Monolog\\Handler\\ErrorLogHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/ErrorLogHandler.php',
        'Monolog\\Handler\\FallbackGroupHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/FallbackGroupHandler.php',
        'Monolog\\Handler\\FilterHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/FilterHandler.php',
        'Monolog\\Handler\\FingersCrossedHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/FingersCrossedHandler.php',
        'Monolog\\Handler\\FingersCrossed\\ActivationStrategyInterface' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/FingersCrossed/ActivationStrategyInterface.php',
        'Monolog\\Handler\\FingersCrossed\\ChannelLevelActivationStrategy' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/FingersCrossed/ChannelLevelActivationStrategy.php',
        'Monolog\\Handler\\FingersCrossed\\ErrorLevelActivationStrategy' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/FingersCrossed/ErrorLevelActivationStrategy.php',
        'Monolog\\Handler\\FirePHPHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/FirePHPHandler.php',
        'Monolog\\Handler\\FleepHookHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/FleepHookHandler.php',
        'Monolog\\Handler\\FlowdockHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/FlowdockHandler.php',
        'Monolog\\Handler\\FormattableHandlerInterface' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/FormattableHandlerInterface.php',
        'Monolog\\Handler\\FormattableHandlerTrait' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/FormattableHandlerTrait.php',
        'Monolog\\Handler\\GelfHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/GelfHandler.php',
        'Monolog\\Handler\\GroupHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/GroupHandler.php',
        'Monolog\\Handler\\Handler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/Handler.php',
        'Monolog\\Handler\\HandlerInterface' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/HandlerInterface.php',
        'Monolog\\Handler\\HandlerWrapper' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/HandlerWrapper.php',
        'Monolog\\Handler\\IFTTTHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/IFTTTHandler.php',
        'Monolog\\Handler\\InsightOpsHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/InsightOpsHandler.php',
        'Monolog\\Handler\\LogEntriesHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/LogEntriesHandler.php',
        'Monolog\\Handler\\LogglyHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/LogglyHandler.php',
        'Monolog\\Handler\\LogmaticHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/LogmaticHandler.php',
        'Monolog\\Handler\\MailHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/MailHandler.php',
        'Monolog\\Handler\\MandrillHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/MandrillHandler.php',
        'Monolog\\Handler\\MissingExtensionException' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/MissingExtensionException.php',
        'Monolog\\Handler\\MongoDBHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/MongoDBHandler.php',
        'Monolog\\Handler\\NativeMailerHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/NativeMailerHandler.php',
        'Monolog\\Handler\\NewRelicHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/NewRelicHandler.php',
        'Monolog\\Handler\\NoopHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/NoopHandler.php',
        'Monolog\\Handler\\NullHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/NullHandler.php',
        'Monolog\\Handler\\OverflowHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/OverflowHandler.php',
        'Monolog\\Handler\\PHPConsoleHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/PHPConsoleHandler.php',
        'Monolog\\Handler\\ProcessHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/ProcessHandler.php',
        'Monolog\\Handler\\ProcessableHandlerInterface' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/ProcessableHandlerInterface.php',
        'Monolog\\Handler\\ProcessableHandlerTrait' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/ProcessableHandlerTrait.php',
        'Monolog\\Handler\\PsrHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/PsrHandler.php',
        'Monolog\\Handler\\PushoverHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/PushoverHandler.php',
        'Monolog\\Handler\\RedisHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/RedisHandler.php',
        'Monolog\\Handler\\RedisPubSubHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/RedisPubSubHandler.php',
        'Monolog\\Handler\\RollbarHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/RollbarHandler.php',
        'Monolog\\Handler\\RotatingFileHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/RotatingFileHandler.php',
        'Monolog\\Handler\\SamplingHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/SamplingHandler.php',
        'Monolog\\Handler\\SendGridHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/SendGridHandler.php',
        'Monolog\\Handler\\SlackHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/SlackHandler.php',
        'Monolog\\Handler\\SlackWebhookHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/SlackWebhookHandler.php',
        'Monolog\\Handler\\Slack\\SlackRecord' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/Slack/SlackRecord.php',
        'Monolog\\Handler\\SocketHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/SocketHandler.php',
        'Monolog\\Handler\\SqsHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/SqsHandler.php',
        'Monolog\\Handler\\StreamHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/StreamHandler.php',
        'Monolog\\Handler\\SwiftMailerHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/SwiftMailerHandler.php',
        'Monolog\\Handler\\SyslogHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/SyslogHandler.php',
        'Monolog\\Handler\\SyslogUdpHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/SyslogUdpHandler.php',
        'Monolog\\Handler\\SyslogUdp\\UdpSocket' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/SyslogUdp/UdpSocket.php',
        'Monolog\\Handler\\TelegramBotHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/TelegramBotHandler.php',
        'Monolog\\Handler\\TestHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/TestHandler.php',
        'Monolog\\Handler\\WebRequestRecognizerTrait' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/WebRequestRecognizerTrait.php',
        'Monolog\\Handler\\WhatFailureGroupHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/WhatFailureGroupHandler.php',
        'Monolog\\Handler\\ZendMonitorHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Handler/ZendMonitorHandler.php',
        'Monolog\\Logger' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Logger.php',
        'Monolog\\Processor\\GitProcessor' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Processor/GitProcessor.php',
        'Monolog\\Processor\\HostnameProcessor' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Processor/HostnameProcessor.php',
        'Monolog\\Processor\\IntrospectionProcessor' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Processor/IntrospectionProcessor.php',
        'Monolog\\Processor\\MemoryPeakUsageProcessor' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Processor/MemoryPeakUsageProcessor.php',
        'Monolog\\Processor\\MemoryProcessor' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Processor/MemoryProcessor.php',
        'Monolog\\Processor\\MemoryUsageProcessor' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Processor/MemoryUsageProcessor.php',
        'Monolog\\Processor\\MercurialProcessor' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Processor/MercurialProcessor.php',
        'Monolog\\Processor\\ProcessIdProcessor' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Processor/ProcessIdProcessor.php',
        'Monolog\\Processor\\ProcessorInterface' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Processor/ProcessorInterface.php',
        'Monolog\\Processor\\PsrLogMessageProcessor' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Processor/PsrLogMessageProcessor.php',
        'Monolog\\Processor\\TagProcessor' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Processor/TagProcessor.php',
        'Monolog\\Processor\\UidProcessor' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Processor/UidProcessor.php',
        'Monolog\\Processor\\WebProcessor' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Processor/WebProcessor.php',
        'Monolog\\Registry' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Registry.php',
        'Monolog\\ResettableInterface' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/ResettableInterface.php',
        'Monolog\\SignalHandler' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/SignalHandler.php',
        'Monolog\\Test\\TestCase' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Test/TestCase.php',
        'Monolog\\Utils' => __DIR__ . '/..' . '/monolog/monolog/src/Monolog/Utils.php',
        'PhpOption\\LazyOption' => __DIR__ . '/..' . '/phpoption/phpoption/src/PhpOption/LazyOption.php',
        'PhpOption\\None' => __DIR__ . '/..' . '/phpoption/phpoption/src/PhpOption/None.php',
        'PhpOption\\Option' => __DIR__ . '/..' . '/phpoption/phpoption/src/PhpOption/Option.php',
        'PhpOption\\Some' => __DIR__ . '/..' . '/phpoption/phpoption/src/PhpOption/Some.php',
        'Plasticbrain\\FlashMessages\\FlashMessages' => __DIR__ . '/..' . '/plasticbrain/php-flash-messages/src/FlashMessages.php',
        'Psr\\Log\\AbstractLogger' => __DIR__ . '/..' . '/psr/log/src/AbstractLogger.php',
        'Psr\\Log\\InvalidArgumentException' => __DIR__ . '/..' . '/psr/log/src/InvalidArgumentException.php',
        'Psr\\Log\\LogLevel' => __DIR__ . '/..' . '/psr/log/src/LogLevel.php',
        'Psr\\Log\\LoggerAwareInterface' => __DIR__ . '/..' . '/psr/log/src/LoggerAwareInterface.php',
        'Psr\\Log\\LoggerAwareTrait' => __DIR__ . '/..' . '/psr/log/src/LoggerAwareTrait.php',
        'Psr\\Log\\LoggerInterface' => __DIR__ . '/..' . '/psr/log/src/LoggerInterface.php',
        'Psr\\Log\\LoggerTrait' => __DIR__ . '/..' . '/psr/log/src/LoggerTrait.php',
        'Psr\\Log\\NullLogger' => __DIR__ . '/..' . '/psr/log/src/NullLogger.php',
        'StringFunctions' => __DIR__ . '/../..' . '/test.php',
        'Stringable' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Stringable.php',
        'SuperBowl' => __DIR__ . '/../..' . '/test.php',
        'SuperHouse' => __DIR__ . '/../..' . '/test.php',
        'Symfony\\Polyfill\\Ctype\\Ctype' => __DIR__ . '/..' . '/symfony/polyfill-ctype/Ctype.php',
        'Symfony\\Polyfill\\Mbstring\\Mbstring' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/Mbstring.php',
        'Symfony\\Polyfill\\Php80\\Php80' => __DIR__ . '/..' . '/symfony/polyfill-php80/Php80.php',
        'UnhandledMatchError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/UnhandledMatchError.php',
        'ValueError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/ValueError.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4fd09cabee3860617ba4e335db940a83::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4fd09cabee3860617ba4e335db940a83::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4fd09cabee3860617ba4e335db940a83::$classMap;

        }, null, ClassLoader::class);
    }
}
