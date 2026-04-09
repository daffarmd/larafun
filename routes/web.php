<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard', [
        'user' => [
            'name' => 'Avery Morgan',
            'role' => 'Studio Lead',
        ],
        'hero' => [
            'eyebrow' => 'Minimal dashboard template',
            'title' => 'Quiet layout, clear priorities, better decisions.',
            'description' => 'A modern Blade starter for admin panels, internal workspaces, or client-facing dashboards with a light editorial feel.',
            'chips' => [
                'Responsive structure',
                'Blade-friendly loops',
                'Elegant neutral palette',
            ],
        ],
        'stats' => [
            [
                'label' => 'Monthly revenue',
                'value' => '$84.2K',
                'change' => '+12.4%',
                'caption' => 'Steady lift from retainers',
            ],
            [
                'label' => 'Active clients',
                'value' => '18',
                'change' => '+3',
                'caption' => 'Across product and brand work',
            ],
            [
                'label' => 'Open tasks',
                'value' => '26',
                'change' => '08 due soon',
                'caption' => 'Five marked high priority',
            ],
            [
                'label' => 'Satisfaction',
                'value' => '96%',
                'change' => '+1.8%',
                'caption' => 'Survey trend over 30 days',
            ],
        ],
        'projects' => [
            [
                'name' => 'Northstar Portal',
                'description' => 'Client workspace and onboarding touchpoints.',
                'progress' => 82,
                'status' => 'In review',
                'owner' => 'Avery Morgan',
                'due' => 'Apr 14',
                'accent' => 'sage',
            ],
            [
                'name' => 'Mosaic Campaign',
                'description' => 'Spring launch assets and reporting snapshots.',
                'progress' => 64,
                'status' => 'Building',
                'owner' => 'Sam Lee',
                'due' => 'Apr 18',
                'accent' => 'sand',
            ],
            [
                'name' => 'Atlas Analytics',
                'description' => 'Dashboard polish and KPI storytelling layer.',
                'progress' => 91,
                'status' => 'Final pass',
                'owner' => 'Mina Ross',
                'due' => 'Apr 11',
                'accent' => 'clay',
            ],
            [
                'name' => 'Library Refresh',
                'description' => 'Design system cleanup for internal handoff.',
                'progress' => 47,
                'status' => 'Planning',
                'owner' => 'Noah Kent',
                'due' => 'Apr 21',
                'accent' => 'ink',
            ],
        ],
        'schedule' => [
            [
                'time' => '09:30',
                'title' => 'Weekly design review',
                'detail' => 'Finalize navigation states and interaction notes.',
            ],
            [
                'time' => '11:00',
                'title' => 'Client checkpoint',
                'detail' => 'Share the revised dashboard direction with Northstar.',
            ],
            [
                'time' => '14:30',
                'title' => 'Reporting sync',
                'detail' => 'Review campaign pacing, revenue, and retention flags.',
            ],
            [
                'time' => '16:00',
                'title' => 'Team closeout',
                'detail' => 'Confirm tomorrow priorities and handoff items.',
            ],
        ],
        'activity' => [
            [
                'title' => 'Atlas Analytics approved the final reporting layout',
                'detail' => 'Stakeholders signed off on the comparison cards and simplified filters.',
                'time' => '12 minutes ago',
            ],
            [
                'title' => 'Two new comments landed on Mosaic Campaign',
                'detail' => 'Requested alternate headlines and a tighter CTA hierarchy for mobile.',
                'time' => '39 minutes ago',
            ],
            [
                'title' => 'Northstar Portal staging build finished successfully',
                'detail' => 'The latest visual polish is ready for review and content QA.',
                'time' => '1 hour ago',
            ],
        ],
        'insights' => [
            '78% of active work is currently on schedule.',
            'Two reviews need approval before 4:00 PM.',
            'Recurring revenue remains the strongest growth signal this week.',
        ],
        'focusScore' => 78,
    ]);
});

Route::get('/greeting', function () {
    return view('hello');
});

Route::get('/welcome', function () {
    return view('welcome');
});
