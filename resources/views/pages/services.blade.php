@extends('layouts.app')

@section('title', __('services.title'))

@section('content')

{{-- ========== HERO ========== --}}
<section class="relative py-24 bg-gradient-to-br from-deep-blue via-slate-900 to-slate-800 overflow-hidden">
    {{-- Decorative background blobs --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute -top-40 -left-40 w-96 h-96 bg-bright-indigo/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-80 h-80 bg-bright-cyan/10 rounded-full blur-3xl"></div>
    </div>
    <div class="container mx-auto px-4 text-center relative z-10">
        <h1 class="text-5xl md:text-6xl font-bold text-white mb-6 leading-tight">
            {{ __('services.hero_title') }} <span class="text-transparent bg-clip-text bg-gradient-to-r from-bright-indigo to-bright-cyan">{{ __('services.hero_highlight') }}</span>
        </h1>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto mb-10">
            {{ __('services.hero_subtitle') }}
        </p>
        {{-- Quick jump navigation --}}
        <div class="flex flex-wrap justify-center gap-3">
            <a href="#crm" class="text-sm text-gray-300 hover:text-bright-cyan transition-colors border border-slate-600 hover:border-bright-cyan/50 rounded-full px-4 py-2">CRM & Админки</a>
            <a href="#ready" class="text-sm text-gray-300 hover:text-bright-cyan transition-colors border border-slate-600 hover:border-bright-cyan/50 rounded-full px-4 py-2">Готовые решения</a>
            <a href="#seo" class="text-sm text-gray-300 hover:text-bright-cyan transition-colors border border-slate-600 hover:border-bright-cyan/50 rounded-full px-4 py-2">SEO & SMM</a>
            <a href="#design" class="text-sm text-gray-300 hover:text-bright-cyan transition-colors border border-slate-600 hover:border-bright-cyan/50 rounded-full px-4 py-2">Дизайн</a>
            <a href="#audit" class="text-sm text-gray-300 hover:text-bright-cyan transition-colors border border-slate-600 hover:border-bright-cyan/50 rounded-full px-4 py-2">Аудит бизнеса</a>
            <a href="#api" class="text-sm text-gray-300 hover:text-bright-cyan transition-colors border border-slate-600 hover:border-bright-cyan/50 rounded-full px-4 py-2">API & ИИ</a>
        </div>
    </div>
</section>


{{-- ========== SERVICE 1: CRM & ADMIN PANELS ========== --}}
<section id="crm" class="py-24 bg-slate-900">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            {{-- Left: text --}}
            <div>
                <div class="flex items-center gap-3 mb-5">
                    <div class="w-12 h-12 bg-gradient-to-br from-bright-indigo to-bright-cyan rounded-xl flex items-center justify-center shrink-0">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3H5a2 2 0 00-2 2v4m6-6h10a2 2 0 012 2v4M9 3v18m0 0h10a2 2 0 002-2V9M9 21H5a2 2 0 01-2-2V9m0 0h18"/>
                        </svg>
                    </div>
                    <span class="text-bright-cyan text-sm font-semibold tracking-widest uppercase">Услуга 01</span>
                </div>
                <h2 class="text-4xl font-bold text-white mb-5">CRM-системы и&nbsp;админ-панели любой сложности</h2>
                <p class="text-gray-300 text-lg mb-6">
                    Разрабатываем CRM, ERP и корпоративные порталы под ключ — от простых учётных систем до многомодульных платформ с ролевым доступом, автоматизацией процессов и аналитическими дашбордами. За плечами — десятки запущенных систем для разных отраслей.
                </p>

                {{-- Feature list --}}
                <ul class="space-y-4 mb-8">
                    @foreach([
                        ['Клиентские CRM', 'Управление лидами, воронкой продаж, историей взаимодействий и автоматическими уведомлениями.'],
                        ['ERP и учётные системы', 'Складской учёт, финансовые модули, интеграция с бухгалтерией и 1С.'],
                        ['Корпоративные порталы', 'Интранет, управление задачами, HR-кабинеты, онбординг сотрудников.'],
                        ['Многоролевой доступ', 'Гибкая настройка прав: супер-администратор, менеджер, клиент, партнёр — любая иерархия.'],
                        ['Аналитика и дашборды', 'Визуализация KPI в реальном времени, экспорт в Excel/PDF, интерактивные отчёты.'],
                    ] as [$title, $desc])
                    <li class="flex items-start gap-4 bg-slate-800/50 rounded-xl p-4 border border-slate-700 hover:border-bright-indigo/50 transition-colors">
                        <svg class="w-5 h-5 text-bright-cyan mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <div>
                            <div class="text-white font-semibold text-sm">{{ $title }}</div>
                            <div class="text-gray-400 text-sm mt-0.5">{{ $desc }}</div>
                        </div>
                    </li>
                    @endforeach
                </ul>

                <a href="/contact" class="inline-block bg-gradient-to-r from-bright-indigo to-bright-cyan text-white px-8 py-4 rounded-xl font-semibold hover:shadow-lg hover:shadow-bright-indigo/30 transition-all duration-300">
                    Обсудить проект
                </a>
            </div>

            {{-- Right: stack cards --}}
            <div class="grid grid-cols-2 gap-4">
                @foreach([
                    ['Laravel', 'Backend', 'Надёжный фундамент для любых бизнес-правил'],
                    ['Vue.js / React', 'Frontend', 'Реактивный интерфейс без перезагрузок страниц'],
                    ['PostgreSQL / MySQL', 'База данных', 'Многомиллионные записи без деградации'],
                    ['Redis & Queues', 'Производительность', 'Фоновые задачи, кеш, real-time события'],
                    ['REST & GraphQL API', 'Интеграции', 'Подключение любых внешних сервисов'],
                    ['Docker / CI/CD', 'Деплой', 'Автоматическое тестирование и развёртывание'],
                ] as [$name, $cat, $desc])
                <div class="bg-slate-800 border border-slate-700 rounded-xl p-5 hover:border-bright-cyan/40 transition-colors group">
                    <div class="text-bright-cyan text-xs font-semibold uppercase tracking-wider mb-1 group-hover:text-bright-indigo transition-colors">{{ $cat }}</div>
                    <div class="text-white font-bold mb-1">{{ $name }}</div>
                    <div class="text-gray-400 text-xs">{{ $desc }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>


{{-- ========== SERVICE 2: READY-MADE SOLUTIONS ========== --}}
<section id="ready" class="py-24 bg-slate-800/40">
    <div class="container mx-auto px-4">
        <div class="text-center mb-14">
            <div class="flex items-center justify-center gap-3 mb-4">
                <span class="text-bright-cyan text-sm font-semibold tracking-widest uppercase">Услуга 02</span>
            </div>
            <h2 class="text-4xl font-bold text-white mb-4">Готовые решения — быстрый старт с&nbsp;проверенной базой</h2>
            <p class="text-gray-300 max-w-2xl mx-auto text-lg">
                У нас есть собственная библиотека продуктов, которые запускаются в разы быстрее кастомной разработки. Берём готовое — дорабатываем под вас.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
            @foreach([
                [
                    'icon' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-2 10v-5a1 1 0 00-1-1h-2a1 1 0 00-1 1v5m4 0H9',
                    'title' => 'Недвижимость',
                    'badge' => 'Флагман',
                    'desc' => 'Платформы для агентств и застройщиков: каталог объектов, CRM для риелторов, онлайн-бронирование, интеграции, ипотечный калькулятор, личный кабинет клиента.',
                    'tags' => ['Агентства', 'Застройщики', 'Аренда', 'Коммерческая'],
                    'color' => 'bright-indigo',
                ],
                [
                    'icon' => 'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z',
                    'title' => 'Корпоративный портал',
                    'badge' => 'Популярно',
                    'desc' => 'Готовый интранет: новостная лента, задачи и проекты, HR-модуль с отпусками и заявками, база знаний, чат-уведомления, оргструктура компании.',
                    'tags' => ['Интранет', 'HR', 'Задачи', 'База знаний'],
                    'color' => 'bright-cyan',
                ],
                [
                    'icon' => 'M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z',
                    'title' => 'Интернет-магазины',
                    'badge' => 'B2B / B2C',
                    'desc' => 'Готовые e-commerce решения с корзиной, оплатой, управлением складом, программой лояльности и интеграцией с 1С/Moysklad.',
                    'tags' => ['Каталог', 'Оплата', 'Склад', '1С'],
                    'color' => 'bright-indigo',
                ],
                [
                    'icon' => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2',
                    'title' => 'Тестирование сотрудников',
                    'badge' => 'HR Tech',
                    'desc' => 'Платформа оценки персонала: тесты, кейсы, аттестации, статистика результатов, уровни сложности, автоматические сертификаты.',
                    'tags' => ['Тесты', 'Аттестации', 'Сертификаты'],
                    'color' => 'bright-cyan',
                ],
                [
                    'icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0',
                    'title' => 'CRM для сервиса и продаж',
                    'badge' => 'Готово',
                    'desc' => 'CRM "из коробки": воронки, задачи, звонки через Binotel, история клиента, автоматические письма, дашборд руководителя.',
                    'tags' => ['Воронки', 'Звонки', 'Автоматизация'],
                    'color' => 'bright-indigo',
                ],
                [
                    'icon' => 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253',
                    'title' => 'Онлайн-школа / LMS',
                    'badge' => 'EdTech',
                    'desc' => 'Платформа обучения с курсами, видеоуроками, домашними заданиями, тестами, прогрессом студентов и платёжным модулем.',
                    'tags' => ['Курсы', 'Видео', 'Оплата'],
                    'color' => 'bright-cyan',
                ],
            ] as $s)
            <div class="bg-slate-900/80 border border-slate-700 rounded-2xl p-6 hover:border-{{ $s['color'] }}/50 transition-all duration-300 group flex flex-col">
                <div class="flex items-start justify-between mb-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-bright-indigo/30 to-bright-cyan/30 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-bright-cyan" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $s['icon'] }}"/>
                        </svg>
                    </div>
                    <span class="text-xs font-semibold bg-{{ $s['color'] }}/20 text-{{ $s['color'] }} px-3 py-1 rounded-full border border-{{ $s['color'] }}/30">{{ $s['badge'] }}</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">{{ $s['title'] }}</h3>
                <p class="text-gray-400 text-sm mb-4 flex-1">{{ $s['desc'] }}</p>
                <div class="flex flex-wrap gap-2">
                    @foreach($s['tags'] as $t)
                    <span class="text-xs bg-slate-800 text-gray-400 px-2 py-1 rounded-md border border-slate-700">{{ $t }}</span>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center">
            <p class="text-gray-400 mb-5">Нужна демонстрация любого из решений? Покажем живую версию.</p>
            <a href="/contact" class="inline-block bg-gradient-to-r from-bright-cyan to-bright-indigo text-white px-8 py-4 rounded-xl font-semibold hover:shadow-lg hover:shadow-bright-cyan/30 transition-all duration-300">
                Запросить демо
            </a>
        </div>
    </div>
</section>


{{-- ========== SERVICE 3: SEO & SMM ========== --}}
<section id="seo" class="py-24 bg-slate-900">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            {{-- Left: visual --}}
            <div class="order-2 lg:order-1">
                <div class="bg-gradient-to-br from-bright-indigo/10 to-bright-cyan/10 border border-slate-700 rounded-2xl p-8">
                    <h3 class="text-xl font-bold text-white mb-6">Что входит в комплекс продвижения</h3>
                    <div class="space-y-5">
                        @foreach([
                            ['SEO-аудит и техническая оптимизация', 'Скорость, Core Web Vitals, структура, robots, карты сайта, ссылочный профиль.', 'from-blue-500 to-indigo-600'],
                            ['Семантика и контент-стратегия', 'Сбор ключей, кластеризация, контент-план, написание и публикация SEO-текстов.', 'from-indigo-500 to-purple-600'],
                            ['Ведение социальных сетей', 'Контент-план, дизайн постов, публикации, реакция на комментарии, сторис.', 'from-cyan-500 to-blue-600'],
                            ['Таргетированная реклама', 'Настройка и ведение рекламных кампаний в Meta, TikTok, ВКонтакте.', 'from-teal-500 to-cyan-600'],
                            ['Аналитика и отчётность', 'Ежемесячные отчёты с позициями, трафиком, конверсиями и планом на следующий месяц.', 'from-bright-indigo to-bright-cyan'],
                        ] as [$title, $desc, $grad])
                        <div class="flex items-start gap-4">
                            <div class="w-2 h-2 rounded-full bg-gradient-to-r {{ $grad }} mt-2 shrink-0"></div>
                            <div>
                                <div class="text-white font-semibold text-sm">{{ $title }}</div>
                                <div class="text-gray-400 text-xs mt-0.5">{{ $desc }}</div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    {{-- Fake metrics --}}
                    <div class="grid grid-cols-3 gap-4 mt-8 pt-6 border-t border-slate-700">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-bright-cyan">+240%</div>
                            <div class="text-gray-400 text-xs mt-1">Органический трафик</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-bright-indigo">TOP-3</div>
                            <div class="text-gray-400 text-xs mt-1">Средняя позиция</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-bright-cyan">×3.5</div>
                            <div class="text-gray-400 text-xs mt-1">Рост заявок</div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Right: text --}}
            <div class="order-1 lg:order-2">
                <div class="flex items-center gap-3 mb-5">
                    <div class="w-12 h-12 bg-gradient-to-br from-bright-cyan to-bright-indigo rounded-xl flex items-center justify-center shrink-0">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                        </svg>
                    </div>
                    <span class="text-bright-cyan text-sm font-semibold tracking-widest uppercase">Услуга 03</span>
                </div>
                <h2 class="text-4xl font-bold text-white mb-5">Комплексное SEO-продвижение и&nbsp;ведение социальных сетей</h2>
                <p class="text-gray-300 text-lg mb-6">
                    Не просто настроить рекламу — а выстроить системный онлайн-маркетинг. Мы объединяем техническое SEO, создание контента и ведение социальных сетей в единую стратегию, которая работает в долгосрок.
                </p>
                <p class="text-gray-400 mb-8">
                    Работаем на рынках Европы, Украины и США. Понимаем местную специфику поиска, соцсетей и поведение аудитории в каждом регионе.
                </p>
                <div class="flex flex-wrap gap-3 mb-8">
                    @foreach(['Google Search', 'Instagram', 'Facebook', 'TikTok', 'LinkedIn', 'VK'] as $pl)
                    <span class="text-sm bg-slate-800 text-gray-300 px-3 py-1.5 rounded-lg border border-slate-700">{{ $pl }}</span>
                    @endforeach
                </div>
                <a href="/contact" class="inline-block bg-gradient-to-r from-bright-cyan to-bright-indigo text-white px-8 py-4 rounded-xl font-semibold hover:shadow-lg hover:shadow-bright-cyan/30 transition-all duration-300">
                    Получить стратегию
                </a>
            </div>
        </div>
    </div>
</section>


{{-- ========== SERVICE 4: UI/UX DESIGN ========== --}}
<section id="design" class="py-24 bg-gradient-to-br from-slate-800/60 to-slate-900">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div>
                <div class="flex items-center gap-3 mb-5">
                    <div class="w-12 h-12 bg-gradient-to-br from-bright-indigo to-bright-cyan rounded-xl flex items-center justify-center shrink-0">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/>
                        </svg>
                    </div>
                    <span class="text-bright-cyan text-sm font-semibold tracking-widest uppercase">Услуга 04</span>
                </div>
                <h2 class="text-4xl font-bold text-white mb-5">UI/UX-дизайн: интерфейсы, которые нравятся и продают</h2>
                <p class="text-gray-300 text-lg mb-6">
                    В нашей команде — несколько профессиональных дизайнеров с опытом в продуктовом и маркетинговом дизайне. Мы создаём не просто красивую картинку, а продуманный пользовательский опыт, который уменьшает отток и увеличивает конверсию.
                </p>

                <ul class="space-y-4 mb-8">
                    @foreach([
                        ['UX-исследование', 'Анализ пользователей, CJM, интервью, A/B тесты, конкурентный анализ.'],
                        ['UI-дизайн системы', 'Дизайн-система с компонентами, токенами, правилами сетки и типографики.'],
                        ['Прототипирование', 'Кликабельные прототипы в Figma для тестирования до старта разработки.'],
                        ['Брендинг и айдентика', 'Логотип, фирменный стиль, гайдлайн бренда, презентационные материалы.'],
                        ['Веб-дизайн и лендинги', 'Корпоративные сайты, посадочные страницы с фокусом на конверсию.'],
                    ] as [$title, $desc])
                    <li class="flex items-start gap-4">
                        <div class="w-6 h-6 rounded-full bg-bright-indigo/20 border border-bright-indigo/50 flex items-center justify-center shrink-0 mt-0.5">
                            <svg class="w-3 h-3 text-bright-cyan" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <div>
                            <span class="text-white font-semibold text-sm">{{ $title }}</span>
                            <span class="text-gray-400 text-sm"> — {{ $desc }}</span>
                        </div>
                    </li>
                    @endforeach
                </ul>

                <a href="/contact" class="inline-block bg-gradient-to-r from-bright-indigo to-bright-cyan text-white px-8 py-4 rounded-xl font-semibold hover:shadow-lg hover:shadow-bright-indigo/30 transition-all duration-300">
                    Обсудить дизайн
                </a>
            </div>

            {{-- Right: tools grid --}}
            <div>
                <div class="bg-slate-900/80 border border-slate-700 rounded-2xl p-8">
                    <h3 class="text-xl font-bold text-white mb-6">Наш рабочий процесс</h3>
                    <div class="space-y-6">
                        @foreach([
                            ['1', 'Бриф и исследование', 'Изучаем бизнес, аудиторию, конкурентов и цели проекта.', 'bright-indigo'],
                            ['2', 'Структура и прототип', 'Проектируем информационную архитектуру, создаём wireframes.', 'bright-cyan'],
                            ['3', 'Визуальный дизайн', 'Разрабатываем UI-концепцию, дизайн-систему, все экраны.', 'bright-indigo'],
                            ['4', 'Передача разработке', 'Документируем компоненты, передаём Figma-файлы и спецификации.', 'bright-cyan'],
                        ] as [$num, $title, $desc, $col])
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-{{ $col }}/20 border border-{{ $col }}/40 rounded-full flex items-center justify-center shrink-0">
                                <span class="text-{{ $col }} font-bold text-sm">{{ $num }}</span>
                            </div>
                            <div>
                                <div class="text-white font-semibold">{{ $title }}</div>
                                <div class="text-gray-400 text-sm mt-0.5">{{ $desc }}</div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div class="mt-8 pt-6 border-t border-slate-700">
                        <div class="text-gray-400 text-sm mb-3">Инструменты</div>
                        <div class="flex flex-wrap gap-2">
                            @foreach(['Figma', 'FigJam', 'Adobe XD', 'Illustrator', 'Photoshop', 'Lottie', 'Zeplin'] as $tool)
                            <span class="text-xs bg-slate-800 border border-slate-600 text-gray-300 px-3 py-1.5 rounded-lg">{{ $tool }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ========== SERVICE 5: BUSINESS AUDIT ========== --}}
<section id="audit" class="py-24 bg-slate-900">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            {{-- Left: audit areas --}}
            <div class="order-2 lg:order-1">
                <div class="grid grid-cols-2 gap-4">
                    @foreach([
                        ['Бизнес-процессы', 'Картирование процессов, узкие места, точки потерь', 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2'],
                        ['IT-инфраструктура', 'Безопасность, производительность, масштабируемость', 'M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 10H3m18-10h-2m2 10h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z'],
                        ['Финансовая модель', 'Точки роста, оптимизация затрат, unit-экономика', 'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z'],
                        ['Маркетинг и продажи', 'Воронка, CPA, конкуренты, позиционирование', 'M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z'],
                        ['Команда и HR', 'Структура, KPI, мотивация, процессы найма', 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0'],
                        ['IT-решение для оптимизации', 'Подбор и внедрение инструментов под выявленные проблемы', 'M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z M15 12a3 3 0 11-6 0 3 3 0 016 0z'],
                    ] as [$title, $desc, $icon])
                    <div class="bg-slate-800/60 border border-slate-700 rounded-xl p-5 hover:border-bright-indigo/40 transition-colors">
                        <svg class="w-7 h-7 text-bright-cyan mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $icon }}"/>
                        </svg>
                        <div class="text-white font-semibold text-sm mb-1">{{ $title }}</div>
                        <div class="text-gray-400 text-xs">{{ $desc }}</div>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- Right: text --}}
            <div class="order-1 lg:order-2">
                <div class="flex items-center gap-3 mb-5">
                    <div class="w-12 h-12 bg-gradient-to-br from-bright-indigo to-bright-cyan rounded-xl flex items-center justify-center shrink-0">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </div>
                    <span class="text-bright-cyan text-sm font-semibold tracking-widest uppercase">Услуга 05</span>
                </div>
                <h2 class="text-4xl font-bold text-white mb-5">Комплексный аудит бизнеса: не только IT</h2>
                <p class="text-gray-300 text-lg mb-6">
                    Мы умеем смотреть на бизнес шире, чем просто с технической стороны. Проводим глубокий анализ процессов, команды, финансовой модели и маркетинга — и предлагаем конкретный план: что оптимизировать, как автоматизировать, какие IT-инструменты внедрить.
                </p>
                <p class="text-gray-400 mb-6">
                    В итоге получаете не просто отчёт, а дорожную карту трансформации с чёткими приоритетами и ожидаемым эффектом от каждого шага.
                </p>

                <div class="bg-slate-800/50 border border-slate-700 rounded-xl p-5 mb-8">
                    <div class="text-white font-semibold mb-3">Что вы получаете на выходе</div>
                    <ul class="space-y-2 text-sm text-gray-300">
                        <li class="flex items-center gap-2"><span class="text-bright-cyan">→</span> Детальный отчёт с описанием проблем и их приоритетом</li>
                        <li class="flex items-center gap-2"><span class="text-bright-cyan">→</span> Рекомендации по оптимизации процессов</li>
                        <li class="flex items-center gap-2"><span class="text-bright-cyan">→</span> Подборка IT-инструментов под выявленные задачи</li>
                        <li class="flex items-center gap-2"><span class="text-bright-cyan">→</span> Дорожная карта внедрения изменений</li>
                        <li class="flex items-center gap-2"><span class="text-bright-cyan">→</span> Сессия разбора результатов с командой</li>
                    </ul>
                </div>

                <a href="/contact" class="inline-block bg-gradient-to-r from-bright-indigo to-bright-cyan text-white px-8 py-4 rounded-xl font-semibold hover:shadow-lg hover:shadow-bright-indigo/30 transition-all duration-300">
                    Заказать аудит
                </a>
            </div>
        </div>
    </div>
</section>


{{-- ========== SERVICE 6: API & AI INTEGRATIONS ========== --}}
<section id="api" class="py-24 bg-gradient-to-br from-slate-800/40 to-slate-900">
    <div class="container mx-auto px-4">
        <div class="text-center mb-14">
            <div class="flex items-center justify-center gap-3 mb-4">
                <span class="text-bright-cyan text-sm font-semibold tracking-widest uppercase">Услуга 06</span>
            </div>
            <h2 class="text-4xl font-bold text-white mb-4">API-интеграции и ИИ-решения</h2>
            <p class="text-gray-300 max-w-2xl mx-auto text-lg">
                Подключаем ваш бизнес к нужным сервисам и добавляем интеллектуальные возможности. От телефонии до нейросетей.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-12">

            {{-- Telephony & Communication --}}
            <div class="bg-slate-900/80 border border-slate-700 rounded-2xl p-7 hover:border-bright-indigo/50 transition-all duration-300">
                <div class="w-12 h-12 bg-bright-indigo/20 border border-bright-indigo/40 rounded-xl flex items-center justify-center mb-5">
                    <svg class="w-6 h-6 text-bright-indigo" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">Телефония и коммуникации</h3>
                <p class="text-gray-400 text-sm mb-5">Интеграция IP-телефонии прямо в CRM: звонки в один клик, запись разговоров, автоматическое создание задач.</p>
                <div class="space-y-2">
                    @foreach(['Binotel — полная интеграция', 'Ringostat', 'Asterisk / FreePBX', 'Telegram Bot API', 'Viber Business', 'WhatsApp Business API'] as $item)
                    <div class="flex items-center gap-2 text-sm text-gray-300">
                        <div class="w-1.5 h-1.5 rounded-full bg-bright-indigo"></div>
                        {{ $item }}
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- 1C & ERP integrations --}}
            <div class="bg-slate-900/80 border border-slate-700 rounded-2xl p-7 hover:border-bright-cyan/50 transition-all duration-300">
                <div class="w-12 h-12 bg-bright-cyan/20 border border-bright-cyan/40 rounded-xl flex items-center justify-center mb-5">
                    <svg class="w-6 h-6 text-bright-cyan" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">Учётные системы и ERP</h3>
                <p class="text-gray-400 text-sm mb-5">Синхронизация данных между вашей платформой и учётными программами в реальном времени без ручного переноса.</p>
                <div class="space-y-2">
                    @foreach(['1С: Предприятие / Бухгалтерия', 'МойСклад', 'Bitrix24', 'SAP (API-адаптеры)', 'Odoo', 'amoCRM / Salesforce'] as $item)
                    <div class="flex items-center gap-2 text-sm text-gray-300">
                        <div class="w-1.5 h-1.5 rounded-full bg-bright-cyan"></div>
                        {{ $item }}
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- AI Solutions --}}
            <div class="bg-slate-900/80 border border-slate-700 rounded-2xl p-7 hover:border-bright-indigo/50 transition-all duration-300 relative overflow-hidden">
                <div class="absolute top-3 right-3 bg-gradient-to-r from-bright-indigo to-bright-cyan text-white text-xs px-2.5 py-1 rounded-full font-semibold">🔥 Trending</div>
                <div class="w-12 h-12 bg-gradient-to-br from-bright-indigo/30 to-bright-cyan/30 border border-bright-indigo/40 rounded-xl flex items-center justify-center mb-5">
                    <svg class="w-6 h-6 text-bright-cyan" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">ИИ-решения для бизнеса</h3>
                <p class="text-gray-400 text-sm mb-5">Внедряем искусственный интеллект как реальный инструмент: автоматизация рутины, анализ данных, умные чат-боты.</p>
                <div class="space-y-2">
                    @foreach(['AI-чат-бот для поддержки клиентов', 'Автоматическая обработка заявок', 'Распознавание и обработка документов', 'Генерация контента (тексты, описания)', 'Анализ и прогнозирование данных', 'Интеграция ChatGPT / Claude API'] as $item)
                    <div class="flex items-center gap-2 text-sm text-gray-300">
                        <div class="w-1.5 h-1.5 rounded-full bg-gradient-to-r from-bright-indigo to-bright-cyan"></div>
                        {{ $item }}
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Payment gateways --}}
        <div class="bg-slate-900/60 border border-slate-700 rounded-2xl p-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <div>
                    <h3 class="text-xl font-bold text-white mb-3">Платёжные системы и финтех</h3>
                    <p class="text-gray-400 text-sm mb-4">Подключаем оплату к любой платформе: интернет-магазину, SaaS, маркетплейсу или мобильному приложению.</p>
                    <a href="/contact" class="inline-block bg-gradient-to-r from-bright-indigo to-bright-cyan text-white px-7 py-3.5 rounded-xl font-semibold text-sm hover:shadow-lg hover:shadow-bright-indigo/30 transition-all duration-300">
                        Обсудить интеграцию
                    </a>
                </div>
                <div class="flex flex-wrap gap-3">
                    @foreach(['Stripe', 'LiqPay', 'Fondy / CloudPayments', 'PayPal', 'Przelewy24', 'Mono / PrivatBank API', 'Google Pay / Apple Pay'] as $p)
                    <span class="text-sm bg-slate-800 border border-slate-600 text-gray-300 px-4 py-2 rounded-xl">{{ $p }}</span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>


@include('components.cta')
@endsection
