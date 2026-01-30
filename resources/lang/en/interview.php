<?php

return [
    'title' => 'Frequently Asked Questions in Interviews',
    'questions' => [
        [
            'question' => 'What is the Pipe operator (`|>`) introduced in PHP 8.5, and how does it improve code readability?',
            'answer' => 'The Pipe operator allows passing the result of one expression as the first argument to the next function call. It helps avoid deeply nested function calls and makes the data flow more linear and readable. For example: `$result = "hello" |> \'strtoupper\' |> \'trim\';`'
        ],
        [
            'question' => 'Explain Property Hooks introduced in PHP 8.4. How do they differ from traditional getters and setters?',
            'answer' => 'Property Hooks allow defining logic directly on class properties using `get` and `set` hooks. This reduces boilerplate code by eliminating the need for explicit getter and setter methods while still allowing validation or transformation of property values.'
        ],
        [
            'question' => 'What are the new `array_first()` and `array_last()` functions in PHP 8.5?',
            'answer' => 'These functions provide a built-in way to retrieve the first or last element of an array that matches a given callback condition, or simply the first/last element if no callback is provided. This replaces manual implementations using `reset()`, `end()`, or `array_filter()`.'
        ],
        [
            'question' => 'How does PHP 8.5 handle validation failures in the `filter` extension?',
            'answer' => 'PHP 8.5 introduced support for throwing exceptions on validation failures in the `filter` extension, allowing for cleaner error handling instead of checking for `false` or `null` return values.'
        ],
        [
            'question' => 'What is the significance of the `max_memory_limit` INI directive in PHP 8.5?',
            'answer' => 'It allows setting a hard ceiling for the `memory_limit` that cannot be exceeded even if a script tries to increase its own memory limit via `ini_set()`. This is useful for shared hosting or containerized environments to prevent a single process from consuming all system memory.'
        ],
        [
            'question' => 'What are the major changes in Laravel 12 regarding starter kits?',
            'answer' => 'Laravel 12 introduced new starter kits for React and Vue (using Inertia 2, TypeScript, and shadcn/ui) and Livewire (using Flux UI and Laravel Volt). Consequently, Laravel Breeze and Jetstream have been deprecated and no longer receive updates.'
        ],
        [
            'question' => 'How does Laravel 12 support "Agentic Development"?',
            'answer' => 'Laravel 12 introduced features and documentation specifically for building AI-driven applications, including better integration with LLMs and tools for creating autonomous agents within the Laravel ecosystem.'
        ],
        [
            'question' => 'What is the WorkOS AuthKit integration in Laravel 12?',
            'answer' => 'It\'s a new authentication option in starter kits that provides enterprise-grade features like social login, passkeys, and Single Sign-On (SSO) out of the box, powered by WorkOS.'
        ],
        [
            'question' => 'How has first-party support for MongoDB changed in Laravel 12?',
            'answer' => 'Laravel 12 now includes more robust, first-party-like support for MongoDB, making it easier to use as a primary database with Eloquent and other framework features.'
        ],
        [
            'question' => 'What is the recommended way to handle concurrency in modern Laravel (2026)?',
            'answer' => 'Using the `Concurrency` facade (introduced in Laravel 11 and refined in 12), which allows running multiple tasks in parallel and waiting for their results, improving performance for I/O bound operations.'
        ],
        [
            'question' => 'Explain the concept of "Modular Monoliths" in the context of Laravel 12.',
            'answer' => 'It\'s an architectural trend where a large Laravel application is organized into distinct, loosely coupled modules within a single repository. This provides the benefits of microservices (separation of concerns) without the operational complexity of multiple deployments.'
        ],
        [
            'question' => 'What is the "Context" facade in Laravel, and when should you use it?',
            'answer' => 'The Context facade (introduced in Laravel 11) allows storing and retrieving information that persists throughout the lifecycle of a request or a background job. It\'s particularly useful for logging and tracing, as it automatically attaches context data to log entries.'
        ],
        [
            'question' => 'Explain the four pillars of Object-Oriented Programming (OOP).',
            'answer' => 'The four pillars are: - **Encapsulation:** Bundling data (attributes) and methods (functions) that operate on the data within a single unit or class, and restricting direct access to some of the object\'s components. - **Inheritance:** A mechanism where a new class (subclass) derives properties and behavior from an existing class (superclass), promoting code reusability. - **Polymorphism:** The ability of an object to take on many forms. In OOP, it allows objects of different classes to be treated as objects of a common superclass, often achieved through method overriding or interfaces. - **Abstraction:** Hiding complex implementation details and showing only the essential features of an object. It focuses on \'what\' an object does rather than \'how\' it does it, often using abstract classes and interfaces.'
        ],
        [
            'question' => 'What is the difference between `interface` and `abstract class` in PHP?',
            'answer' => 'Traits are a mechanism for code reuse in single inheritance languages like PHP. They allow a class to use methods from multiple traits, effectively simulating multiple inheritance of behavior. Traits are useful for sharing common functionality across different classes that don\'t share a common parent in the inheritance hierarchy.'
        ],
        [
            'question' => 'What is Dependency Injection (DI) and why is it important in PHP/Laravel?',
            'answer' => 'Dependency Injection is a design pattern where a class receives its dependencies from an external source rather than creating them itself. In Laravel, it\'s heavily used through the Service Container. It promotes loose coupling, making code more modular, testable, and maintainable. It also simplifies the management of class dependencies.'
        ],
        [
            'question' => 'Describe the SOLID principles of OOP.',
            'answer' => 'SOLID is an acronym for five design principles intended to make software designs more understandable, flexible, and maintainable: - **S - Single Responsibility Principle (SRP):** A class should have only one reason to change, meaning it should have only one job or responsibility. - **O - Open/Closed Principle (OCP):** Software entities (classes, modules, functions, etc.) should be open for extension, but closed for modification. - **L - Liskov Substitution Principle (LSP):** Objects in a program should be replaceable with instances of their subtypes without altering the correctness of that program. - **I - Interface Segregation Principle (ISP):** Clients should not be forced to depend on interfaces they do not use. Many client-specific interfaces are better than one general-purpose interface. - **D - Dependency Inversion Principle (DIP):** High-level modules should not depend on low-level modules. Both should depend on abstractions. Abstractions should not depend on details. Details should depend on abstractions.'
        ],
        [
            'question' => 'Explain the request lifecycle in Laravel.',
            'answer' => 'The Laravel request lifecycle begins when a request enters the `public/index.php` file. This file loads the Composer autoloader and retrieves the Laravel application instance. The HTTP kernel then handles the request, passing it through a series of middleware (global, route, and group middleware) for tasks like authentication, CSRF protection, and session management. After middleware, routing matches the incoming URL to a defined route, which dispatches the request to a controller action or closure. The controller processes the request, interacts with models/services, and returns a response. Finally, the response is sent back through the HTTP kernel and middleware before being sent to the user.'
        ],
        [
            'question' => 'What is Eloquent ORM in Laravel, and what are its benefits?',
            'answer' => 'Eloquent is Laravel\'s built-in Object-Relational Mapper (ORM). It provides an elegant and active record implementation for working with databases. Each database table has a corresponding "Model" that is used to interact with that table. Benefits include: - **Expressive Syntax:** Allows database interactions using clear, fluent PHP syntax instead of raw SQL. - **Relationships:** Easily define and manage relationships between models (one-to-one, one-to-many, many-to-many). - **Time-saving:** Reduces the amount of boilerplate code needed for CRUD operations. - **Maintainability:** Makes code easier to read, understand, and maintain.'
        ],
        [
            'question' => 'How does Laravel handle database migrations?',
            'answer' => 'Laravel migrations are like version control for your database, allowing teams to easily modify and share the application\'s database schema. They provide a programmatic way to define database table structures, add/remove columns, and create/drop tables. Each migration is a PHP class with `up()` and `down()` methods, for applying and reverting changes, respectively. Artisan commands (`php artisan migrate`, `php artisan migrate:rollback`) are used to manage migrations.'
        ],
        [
            'question' => 'What is the purpose of Service Providers in Laravel?',
            'answer' => 'Service Providers are the central place for all Laravel application bootstrapping. They are responsible for binding services into Laravel\'s service container, registering event listeners, middleware, and even routes. Essentially, they tell Laravel how to load and configure various components of your application. The `AppServiceProvider` is a common place to register application-specific services.'
        ],
        [
            'question' => 'Explain the concept of Middleware in Laravel.',
            'answer' => 'Middleware provides a convenient mechanism for filtering HTTP requests entering your application. For example, Laravel includes a middleware that verifies the user of your application is authenticated. If the user is not authenticated, the middleware will redirect the user to the login screen. If the user is authenticated, the middleware will allow the request to proceed further into the application. Middleware can perform tasks before or after the request is handled by the application.'
        ],
        [
            'question' => 'What is Blade Templating Engine?',
            'answer' => 'Blade is the simple, yet powerful templating engine included with Laravel. Unlike other popular PHP templating engines, Blade does not restrict you from using plain PHP code in your views. In fact, all Blade views are compiled into plain PHP code and cached until they are modified, meaning Blade adds essentially zero overhead to your application. Blade provides convenient shortcuts for common PHP control structures like conditional statements and loops, as well as template inheritance.'
        ]
    ]
];
