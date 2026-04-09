<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard', [
        'app' => [
            'name' => 'Upstream',
            'filter' => 'All',
            'module' => 'Monitoring',
            'count' => 248,
            'monthLabel' => 'August, 2024',
        ],
        'user' => [
            'name' => 'Adam Watkins',
            'role' => 'Organization admin',
            'initials' => 'AW',
        ],
        'browserTabs' => [
            [
                'label' => 'Project operations event',
                'active' => true,
            ],
            [
                'label' => 'Verification events',
                'active' => false,
            ],
        ],
        'statusTabs' => [
            [
                'label' => 'Ongoing',
                'count' => 16,
            ],
            [
                'label' => 'Inactive',
                'count' => 0,
            ],
            [
                'label' => 'Overdue',
                'count' => 0,
            ],
            [
                'label' => 'Completed',
                'count' => 0,
            ],
        ],
        'events' => [
            [
                'title' => 'Verification of documents and photos in the government of GRESCSS',
                'project' => 'Myanmar Kyeeonkyeewa Solar Power Plant Project',
                'status' => 'Active',
                'action' => 'Visit site',
                'day' => 'SUN',
                'date' => '18',
                'notes' => 4,
                'tasks' => '0/0',
                'active' => true,
                'avatars' => [
                    ['initials' => 'AW', 'tone' => '#1d8fff'],
                    ['initials' => 'RM', 'tone' => '#242938'],
                    ['initials' => 'KL', 'tone' => '#4b5563'],
                    ['initials' => 'MN', 'tone' => '#12a594'],
                    ['initials' => 'SC', 'tone' => '#d9a26f'],
                ],
                'extraMembers' => 2,
            ],
            [
                'title' => 'Preparation of documents for submitting an application to the authorities',
                'project' => 'Myanmar Kyeeonkyeewa Solar Power Plant Project',
                'status' => 'Active',
                'action' => 'Visit site',
                'day' => 'SUN',
                'date' => '18',
                'notes' => 4,
                'tasks' => '0/0',
                'active' => false,
                'avatars' => [
                    ['initials' => 'AW', 'tone' => '#1d8fff'],
                    ['initials' => 'RM', 'tone' => '#242938'],
                    ['initials' => 'KL', 'tone' => '#4b5563'],
                    ['initials' => 'MN', 'tone' => '#12a594'],
                    ['initials' => 'SC', 'tone' => '#d9a26f'],
                ],
                'extraMembers' => 2,
            ],
            [
                'title' => 'Construction site inspection',
                'project' => 'Myanmar Kyeeonkyeewa Solar Power Plant Project',
                'status' => 'Active',
                'action' => 'Visit site',
                'day' => 'SUN',
                'date' => '18',
                'notes' => 4,
                'tasks' => '0/0',
                'active' => false,
                'avatars' => [
                    ['initials' => 'AW', 'tone' => '#1d8fff'],
                    ['initials' => 'RM', 'tone' => '#242938'],
                    ['initials' => 'KL', 'tone' => '#4b5563'],
                    ['initials' => 'MN', 'tone' => '#12a594'],
                    ['initials' => 'SC', 'tone' => '#d9a26f'],
                ],
                'extraMembers' => 2,
            ],
            [
                'title' => 'Verification of documents and photos in the government of GRESCSS',
                'project' => 'Myanmar Kyeeonkyeewa Solar Power Plant Project',
                'status' => 'Inactive',
                'action' => 'Visit site',
                'day' => 'FRI',
                'date' => '22',
                'notes' => 2,
                'tasks' => '1/3',
                'active' => false,
                'avatars' => [
                    ['initials' => 'AW', 'tone' => '#1d8fff'],
                    ['initials' => 'RM', 'tone' => '#242938'],
                    ['initials' => 'KL', 'tone' => '#4b5563'],
                ],
                'extraMembers' => 1,
            ],
        ],
        'selectedEvent' => [
            'title' => 'Verification of documents and photos in the government of GRESCSS',
            'project' => 'Myanmar Kyeeonkyeewa Solar Power Plant',
            'status' => 'Active',
            'category' => 'Project process event',
            'metrics' => [
                ['label' => 'Date', 'value' => '18.08.24', 'icon' => 'calendar'],
                ['label' => 'Frequency', 'value' => 'Annually', 'icon' => 'chevron'],
                ['label' => 'Type', 'value' => 'Site visit', 'icon' => 'chevron'],
                ['label' => 'Budget', 'value' => '$24,000', 'icon' => 'edit'],
            ],
            'members' => [
                ['name' => 'Adam Watkins', 'initials' => 'AW', 'tone' => '#1d8fff', 'owner' => true],
                ['name' => 'Rina Moore', 'initials' => 'RM', 'tone' => '#242938', 'owner' => false],
                ['name' => 'Kara Lim', 'initials' => 'KL', 'tone' => '#4b5563', 'owner' => false],
                ['name' => 'Mina Noor', 'initials' => 'MN', 'tone' => '#12a594', 'owner' => false],
                ['name' => 'Sean Cole', 'initials' => 'SC', 'tone' => '#d9a26f', 'owner' => false],
            ],
            'memberOverflow' => 2,
            'description' => "We partnered with Carbon Solutions to design a modern, user-friendly web dashboard for their Upstream Project, making carbon reduction data clear and actionable. Looking for a design partner? Let's create something amazing together!",
            'attachments' => [
                ['name' => 'ERS MP 01062020 31122020.xls', 'type' => 'Monitoring report', 'modified' => '06.07.2024'],
                ['name' => 'MMR site photos - august.zip', 'type' => 'Field evidence', 'modified' => '05.30.2024'],
                ['name' => 'Annual inspection checklist.pdf', 'type' => 'Verification memo', 'modified' => '05.26.2024'],
            ],
        ],
    ]);
});

Route::get('/greeting', function () {
    return view('hello');
});

Route::get('/welcome', function () {
    return view('welcome');
});
