<?php

return [
    'title' => 'Przygotowanie do rozmowy kwalifikacyjnej',
    'questions' => [
        [
            'question' => 'Co to jest Cloud Identity w Laravelu 12?',
            'answer' => 'To nowa opcja uwierzytelniania w zestawach startowych, która zapewnia funkcje korporacyjne, takie jak logowanie społecznościowe, klucze dostępu (passkeys) i logowanie jednokrotne (SSO) prosto z pudełka, oparte na WorkOS.'
        ],
        [
            'question' => 'Jak zmieniło się natywne wsparcie dla MongoDB w Laravelu 12?',
            'answer' => 'Laravel 12 zawiera teraz bardziej solidne, zbliżone do natywnego wsparcie dla MongoDB, co ułatwia korzystanie z niej jako głównej bazy danych z Eloquent i innymi funkcjami frameworka.'
        ],
        [
            'question' => 'Jaki jest zalecany sposób obsługi współbieżności w nowoczesnym Laravelu (2026)?',
            'answer' => 'Użycie fasady `Concurrency` (wprowadzonej w Laravelu 11 i dopracowanej w 12), która pozwala na równoległe uruchamianie wielu zadań i oczekiwanie na ich wyniki, co poprawia wydajność operacji zależnych od wejścia/wyjścia (I/O).'
        ],
        [
            'question' => 'Wyjaśnij koncepcję "Modularnych Monolitów" w kontekście Laravela 12.',
            'answer' => 'To trend architektoniczny, w którym duża aplikacja Laravela jest organizowana w odrębne, luźno powiązane moduły w ramach jednego repozytorium. Zapewnia to korzyści mikrousług (separacja obaw) bez złożoności operacyjnej wielu wdrożeń.'
        ],
        [
            'question' => 'Czym jest fasada "Context" w Laravelu i kiedy należy jej używać?',
            'answer' => 'Fasada Context (wprowadzona w Laravelu 11) pozwala na przechowywanie i pobieranie informacji, które utrzymują się przez cały cykl życia żądania lub zadania w tle. Jest szczególnie przydatna do logowania i śledzenia (tracing), ponieważ automatycznie dołącza dane kontekstowe do wpisów w logach.'
        ],
        [
            'question' => 'Wyjaśnij cztery filary programowania obiektowego (OOP).',
            'answer' => 'Cztery filary to:\n    - **Enkapsulacja (Hermetyzacja):** Łączenie danych (atrybutów) i metod (funkcji) operujących na tych danych w jedną jednostkę lub klasę oraz ograniczanie bezpośredniego dostępu do niektórych komponentów obiektu.\n    - **Dziedziczenie:** Mechanizm, w którym nowa klasa (podklasa) dziedziczy właściwości i zachowania od istniejącej klasy (nadklasy), co sprzyja ponownemu użyciu kodu.\n    - **Polimorfizm:** Zdolność obiektu do przyjmowania wielu form. W OOP pozwala to na traktowanie obiektów różnych klas jako obiektów wspólnej nadklasy, co często osiąga się poprzez nadpisywanie metod lub interfejsy.\n    - **Abstrakcja:** Ukrywanie złożonych szczegółów implementacji i pokazywanie tylko istotnych cech obiektu. Skupia się na tym, "co" obiekt robi, a nie "jak" to robi, często z wykorzystaniem klas abstrakcyjnych i interfejsów.'
        ],
        [
            'question' => 'Jaka jest różnica między `interface` a `abstract class` w PHP?',
            'answer' => '\n    - **Interfejs:** Definiuje kontrakt, którego klasy muszą przestrzegać. Może zawierać tylko sygnatury metod (bez implementacji) i stałe. Klasa może implementować wiele interfejsów.\n    - **Klasa abstrakcyjna:** Może posiadać zarówno metody abstrakcyjne (bez implementacji), jak i metody konkretne (z implementacją). Może również posiadać właściwości. Klasa może dziedziczyć tylko po jednej klasie abstrakcyjnej. Klasy abstrakcyjne są przeznaczone do rozszerzania, podczas gdy interfejsy są przeznaczone do implementacji.'
        ],
        [
            'question' => 'Wyjaśnij Cechy (Traits) w PHP i kiedy należy ich używać.',
            'answer' => 'Cechy (Traits) to mechanizm ponownego użycia kodu w językach z pojedynczym dziedziczeniem, takich jak PHP. Pozwalają klasie na używanie metod z wielu cech, skutecznie naśladując wielokrotne dziedziczenie zachowań. Cechy są przydatne do współdzielenia wspólnej funkcjonalności między różnymi klasami, które nie mają wspólnego rodzica w hierarchii dziedziczenia.'
        ],
        [
            'question' => 'Co to jest Dependency Injection (DI) i dlaczego jest ważne w PHP/Laravel?',
            'answer' => 'Wstrzykiwanie zależności (DI) to wzorzec projektowy, w którym klasa otrzymuje swoje zależności z zewnętrznego źródła, zamiast tworzyć je samodzielnie. W Laravelu jest on szeroko stosowany poprzez Service Container. Sprzyja to luźnemu powiązaniu, czyniąc kod bardziej modułowym, testowalnym i łatwiejszym w utrzymaniu. Upraszcza również zarządzanie zależnościami klas.'
        ],
        [
            'question' => 'Opisz zasady SOLID w OOP.',
            'answer' => 'SOLID to akronim pięciu zasad projektowania, które mają uczynić projekty oprogramowania bardziej zrozumiałymi, elastycznymi i łatwiejszymi w utrzymaniu:\n    - **S - Zasada jednej odpowiedzialności (SRP):** Klasa powinna mieć tylko jeden powód do zmiany, co oznacza, że powinna mieć tylko jedno zadanie lub odpowiedzialność.\n    - **O - Zasada otwarte-zamknięte (OCP):** Encje oprogramowania (klasy, moduły, funkcje itp.) powinny być otwarte na rozszerzenia, ale zamknięte na modyfikacje.\n    - **L - Zasada podstawienia Liskov (LSP):** Obiekty w programie powinny być zastępowalne przez instancje ich podtypów bez wpływu na poprawność programu.\n    - **I - Zasada segregacji interfejsów (ISP):** Klienci nie powinni być zmuszani do zależności od interfejsów, których nie używają. Wiele specyficznych interfejsów jest lepszych niż jeden ogólny.\n    - **D - Zasada odwrócenia zależności (DIP):** Moduły wysokiego poziomu nie powinny zależeć od modułów niskiego poziomu. Oba powinny zależeć od abstrakcji. Abstrakcje nie powinny zależeć od szczegółów.'
        ],
        [
            'question' => 'Wyjaśnij cykl życia żądania w Laravelu.',
            'answer' => 'Cykl życia żądania w Laravelu zaczyna się, gdy żądanie trafia do pliku `public/index.php`. Plik ten ładuje autoloader Composera i pobiera instancję aplikacji Laravela. Jądro HTTP obsługuje żądanie, przepuszczając je przez szereg middleware (globalne, tras i grupowe) do zadań takich jak uwierzytelnianie, ochrona CSRF i zarządzanie sesjami. Po middleware, routing dopasowuje przychodzący adres URL do określonej trasy, która przekazuje żądanie do akcji kontrolera lub domknięcia. Kontroler przetwarza żądanie, wchodzi w interakcję z modelami/usługami i zwraca odpowiedź. Na koniec odpowiedź jest odsyłana przez jądro HTTP i middleware, zanim zostanie wysłana do użytkownika.'
        ],
        [
            'question' => 'Co to jest Eloquent ORM w Laravelu i jakie są jego zalety?',
            'answer' => 'Eloquent to wbudowany w Laravela Object-Relational Mapper (ORM). Zapewnia elegancką implementację ActiveRecord do pracy z bazami danych. Każda tabela w bazie danych ma odpowiadający jej "Model" używany do interakcji z tą tabelą. Zalety to:\n    - **Ekspresyjna składnia:** Pozwala na interakcję z bazą danych przy użyciu czystej, płynnej składni PHP zamiast surowego SQL.\n    - **Relacje:** Łatwe definiowanie i zarządzanie relacjami między modelami (jeden-do-jednego, jeden-do-wielu, wielu-do-wielu).\n    - **Oszczędność czasu:** Zmniejsza ilość kodu potrzebnego do operacji CRUD.\n    - **Łatwość utrzymania:** Sprawia, że kod jest bardziej czytelny, zrozumiały i łatwiejszy w utrzymaniu.'
        ],
        [
            'question' => 'Jak Laravel obsługuje migracje bazy danych?',
            'answer' => 'Migracje Laravela są jak system kontroli wersji dla bazy danych, pozwalając zespołom na łatwe modyfikowanie i udostępnianie schematu bazy danych aplikacji. Zapewniają programowy sposób definiowania struktur tabel, dodawania/usuwania kolumn i tworzenia/usuwania tabel. Każda migracja to klasa PHP z metodami `up()` i `down()`. Do zarządzania migracjami używa się poleceń Artisan (`php artisan migrate`, `php artisan migrate:rollback`).'
        ],
        [
            'question' => 'Jaki jest cel Service Providers w Laravelu?',
            'answer' => 'Service Providers to centralne miejsce całej konfiguracji wstępnej aplikacji Laravela. Odpowiadają za wiązanie usług w kontenerze usług Laravela, rejestrowanie słuchaczy zdarzeń, middleware, a nawet tras. W istocie mówią Laravelowi, jak ładować i konfigurować różne komponenty aplikacji. `AppServiceProvider` to typowe miejsce do rejestrowania usług specyficznych dla aplikacji.'
        ],
        [
            'question' => 'Wyjaśnij koncepcję Middleware w Laravelu.',
            'answer' => 'Middleware zapewnia wygodny mechanizm filtrowania żądań HTTP wchodzących do aplikacji. Na przykład Laravel zawiera middleware, który sprawdza, czy użytkownik jest uwierzytelniony. Jeśli nie, przekieruje go do ekranu logowania. Jeśli tak, pozwoli żądaniu przejść dalej. Middleware może wykonywać zadania przed lub po przetworzeniu żądania przez aplikację.'
        ],
        [
            'question' => 'Co to jest silnik szablonów Blade?',
            'answer' => 'Blade to prosty, ale potężny silnik szablonów dostarczany z Laravelem. W przeciwieństwie do innych popularnych silników PHP, Blade nie ogranicza Cię przed używaniem czystego kodu PHP w widokach. Widoki Blade są kompilowane do czystego kodu PHP i buforowane, co oznacza brak narzutu wydajnościowego. Blade zapewnia wygodne skróty dla struktur kontrolnych PHP (warunki, pętle) oraz dziedziczenie szablonów.'
        ],
    ]
];
