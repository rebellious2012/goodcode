<?php

return [
    'title' => 'Interview preparation',
    'questions' => [
        [
            'question' => 'What is Cloud Identity in Laravel 12?',
            'answer' => 'It is a new authentication option in starter kits that provides enterprise features like social login, passkeys, and single sign-on (SSO) out of the box, powered by WorkOS.'
        ],
        [
            'question' => 'How has native MongoDB support changed in Laravel 12?',
            'answer' => 'Laravel 12 now includes more robust, native-like support for MongoDB, making it easier to use as a primary database with Eloquent and other framework features.'
        ],
        [
            'question' => 'What is the recommended way to handle concurrency in modern Laravel (2026)?',
            'answer' => 'Using the `Concurrency` facade (introduced in Laravel 11 and refined in 12), which allows you to run multiple tasks in parallel and wait for their results, improving performance for I/O-bound operations.'
        ],
        [
            'question' => 'Explain the concept of "Modular Monoliths" in the context of Laravel 12.',
            'answer' => 'This is an architectural trend where a large Laravel application is organized into distinct, loosely coupled modules within a single repository. It provides the benefits of microservices (separation of concerns) without the operational complexity of multiple deployments.'
        ],
        [
            'question' => 'What is the "Context" facade in Laravel, and when should it be used?',
            'answer' => 'The Context facade (introduced in Laravel 11) allows you to store and retrieve information that persists throughout the lifecycle of a request or background job. It is particularly useful for logging and tracing, as it automatically attaches context data to log entries.'
        ],
        [
            'question' => 'Explain the four pillars of Object-Oriented Programming (OOP).',
            'answer' => 'The four pillars are:\n    - **Encapsulation:** Bundling data (attributes) and methods (functions) that operate on that data into a single unit or class, and restricting direct access to some of the object\'s components.\n    - **Inheritance:** A mechanism where a new class (subclass) inherits properties and behavior from an existing class (superclass), promoting code reuse.\n    - **Polymorphism:** The ability of an object to take on many forms. In OOP, this allows objects of different classes to be treated as objects of a common superclass, often achieved through method overriding or interfaces.\n    - **Abstraction:** Hiding complex implementation details and showing only the essential features of an object. It focuses on "what" an object does rather than "how" it does it, often using abstract classes and interfaces.'
        ],
        [
            'question' => 'What is the difference between `interface` and `abstract class` in PHP?',
            'answer' => '\n    - **Interface:** Defines a contract that classes must follow. It can only contain method signatures (no implementation) and constants. A class can implement multiple interfaces.\n    - **Abstract Class:** Can have both abstract methods (no implementation) and concrete methods (with implementation). It can also have properties. A class can only inherit from one abstract class. Abstract classes are meant to be extended, whereas interfaces are meant to be implemented.'
        ],
        [
            'question' => 'Explain Traits in PHP and when they should be used.',
            'answer' => 'Traits are a mechanism for code reuse in single-inheritance languages like PHP. They allow a class to use methods from multiple traits, effectively mimicking multiple inheritance of behavior. Traits are useful for sharing common functionality across different classes that do not share a common parent in the inheritance hierarchy.'
        ],
        [
            'question' => 'What is Dependency Injection (DI) and why is it important in PHP/Laravel?',
            'answer' => 'Dependency Injection is a design pattern where a class receives its dependencies from an external source rather than creating them itself. In Laravel, it is heavily used via the Service Container. It promotes loose coupling, making code more modular, testable, and maintainable. It also simplifies managing class dependencies.'
        ],
        [
            'question' => 'Describe the SOLID principles in OOP.',
            'answer' => 'SOLID is an acronym for five design principles intended to make software designs more understandable, flexible, and maintainable:\n    - **S - Single Responsibility Principle (SRP):** A class should have only one reason to change, meaning it should have only one job or responsibility.\n    - **O - Open/Closed Principle (OCP):** Software entities (classes, modules, functions, etc.) should be open for extension but closed for modification.\n    - **L - Liskov Substitution Principle (LSP):** Objects in a program should be replaceable with instances of their subtypes without altering the correctness of that program.\n    - **I - Interface Segregation Principle (ISP):** Clients should not be forced to depend on interfaces they do not use. Multiple client-specific interfaces are better than one general-purpose interface.\n    - **D - Dependency Inversion Principle (DIP):** High-level modules should not depend on low-level modules. Both should depend on abstractions. Abstractions should not depend on details. Details should depend on abstractions.'
        ],
        [
            'question' => 'Explain the request lifecycle in Laravel.',
            'answer' => 'The Laravel request lifecycle begins when a request enters the `public/index.php` file. This file loads the Composer autoloader and retrieves a Laravel application instance. The HTTP kernel then handles the request, passing it through a series of middleware (global, route, and group) for tasks like authentication, CSRF protection, and session management. After middleware, routing matches the incoming URL to a specific route, which dispatches the request to a controller action or closure. The controller processes the request, interacts with models/services, and returns a response. Finally, the response is sent back through the HTTP kernel and middleware before being sent to the user.'
        ],
        [
            'question' => 'What is Eloquent ORM in Laravel and what are its benefits?',
            'answer' => 'Eloquent is Laravel\'s built-in Object-Relational Mapper (ORM). It provides an elegant and active record implementation for working with databases. Each database table has a corresponding "Model" used to interact with that table. Benefits include:\n    - **Expressive Syntax:** Allows interacting with the database using clean, fluent PHP syntax instead of raw SQL.\n    - **Relationships:** Easy to define and manage relationships between models (one-to-one, one-to-many, many-to-many).\n    - **Time-saving:** Reduces the amount of boilerplate code required for CRUD operations.\n    - **Maintainability:** Makes code more readable, understandable, and maintainable.'
        ],
        [
            'question' => 'How does Laravel handle database migrations?',
            'answer' => 'Laravel migrations are like version control for your database, allowing teams to easily modify and share the application\'s database schema. They provide a programmatic way to define database table structures, add/remove columns, and create/drop tables. Each migration is a PHP class with `up()` and `down()` methods to apply and reverse changes respectively. Artisan commands (`php artisan migrate`, `php artisan migrate:rollback`) are used to manage migrations.'
        ],
        [
            'question' => 'What is the purpose of Service Providers in Laravel?',
            'answer' => 'Service Providers are the central place for all Laravel application bootstrapping. They are responsible for binding services into the Laravel service container, registering event listeners, middleware, and even routes. In essence, they tell Laravel how to load and configure various components of your application. `AppServiceProvider` is a common place for registering application-specific services.'
        ],
        [
            'question' => 'Explain the concept of Middleware in Laravel.',
            'answer' => 'Middleware provides a convenient mechanism for filtering HTTP requests entering your application. For example, Laravel includes middleware that verifies whether the user of your application is authenticated. If the user is not authenticated, the middleware will redirect the user to the login screen. If the user is authenticated, the middleware will allow the request to proceed further into the application. Middleware can perform tasks before or after the request is processed by the application.'
        ],
        [
            'question' => 'What is the Blade templating engine?',
            'answer' => 'Blade is a simple, yet powerful templating engine provided with Laravel. Unlike other popular PHP templating engines, Blade does not restrict you from using plain PHP code in your views. In fact, all Blade views are compiled into plain PHP code and cached until they are modified, meaning Blade adds essentially zero overhead to your application. Blade provides convenient shortcuts for common PHP control structures, such as conditional statements and loops, as well as template inheritance.'
        ],
    ]
];
