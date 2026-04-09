@extends('layouts.dashboard', ['title' => 'Upstream Dashboard'])

@section('content')
    <div class="dashboard-frame">
        <header class="dashboard-topbar">
            <div class="dashboard-brand">
                <div class="dashboard-brand-mark" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none">
                        <path d="M4 6v5.5c0 4 3.2 7.2 7.2 7.2S18.4 15.5 18.4 11.5V6" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/>
                        <path d="M4 9.2h4.2M4 12.2h5.8M4 15.2h7.4M9.8 9.2h10.2M8 12.2h12M6.2 15.2h13.8" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" opacity=".95"/>
                    </svg>
                </div>
                <div class="dashboard-brand-name">{{ $app['name'] }}</div>
            </div>

            <div class="dashboard-searchbar">
                <button type="button" class="dashboard-search-filter">
                    <span>{{ $app['filter'] }}</span>
                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="m7 9 5 5 5-5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <label class="dashboard-search-input">
                    <span class="sr-only">Search</span>
                    <input type="text" value="" placeholder="Search" aria-label="Search">
                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <circle cx="11" cy="11" r="7" stroke="currentColor" stroke-width="1.8"></circle>
                        <path d="m20 20-3.5-3.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"></path>
                    </svg>
                </label>
            </div>

            <div class="dashboard-top-actions">
                <button type="button" class="dashboard-icon-button" aria-label="Notifications">
                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M15 17H6.5c-.8 0-1.4-.7-1.2-1.5l.9-4.3A5.7 5.7 0 0 1 12 6.5a5.7 5.7 0 0 1 5.8 4.7l.9 4.3c.2.8-.4 1.5-1.2 1.5H15Z" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/>
                        <path d="M10.3 17a1.7 1.7 0 0 0 3.4 0" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/>
                    </svg>
                    <span class="dashboard-notification-dot" aria-hidden="true"></span>
                </button>

                <button type="button" class="dashboard-profile" aria-label="Open user menu">
                    <span class="dashboard-profile-avatar">{{ $user['initials'] }}</span>
                    <span class="dashboard-profile-copy">
                        <strong>{{ $user['name'] }}</strong>
                        <span>{{ $user['role'] }}</span>
                    </span>
                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="m6 9 6 6 6-6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
        </header>

        <div class="dashboard-body">
            <aside class="dashboard-sidebar" aria-label="Primary navigation">
                <button type="button" class="dashboard-sidebar-button is-active" aria-label="Dashboard">
                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M4.5 4.5h6v6h-6zM13.5 4.5h6v6h-6zM4.5 13.5h6v6h-6zM13.5 13.5h6v6h-6z" fill="currentColor"/>
                    </svg>
                </button>
                <button type="button" class="dashboard-sidebar-button" aria-label="Calendar">
                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <rect x="4.5" y="5.5" width="15" height="14" rx="2.5" stroke="currentColor" stroke-width="1.8"/>
                        <path d="M8 3.5v4M16 3.5v4M4.5 10.5h15" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                    </svg>
                </button>
                <button type="button" class="dashboard-sidebar-button" aria-label="Documents">
                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M7.5 4.5h7.3l4.2 4.2V19a1.5 1.5 0 0 1-1.5 1.5h-10A1.5 1.5 0 0 1 6 19V6a1.5 1.5 0 0 1 1.5-1.5Z" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round"/>
                        <path d="M14.8 4.5V9h4.2" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <button type="button" class="dashboard-sidebar-button" aria-label="Building">
                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M5 19.5h14" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                        <path d="M7.5 19.5V8.5l4.5-2.5 4.5 2.5v11" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/>
                        <path d="M10 11.5h1.6M10 14.5h1.6M14.4 11.5H16M14.4 14.5H16" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/>
                    </svg>
                </button>
                <div class="dashboard-sidebar-spacer"></div>
                <button type="button" class="dashboard-sidebar-button dashboard-sidebar-button--ghost" aria-label="Collapse sidebar">
                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="m8 7 5 5-5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M16 7v10M4 12h6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                    </svg>
                </button>
            </aside>

            <main class="dashboard-main">
                <section class="dashboard-hero">
                    <p class="dashboard-hero-kicker">
                        <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M5.5 6.5h13l-1.3 11.2a1.5 1.5 0 0 1-1.5 1.3H8.3a1.5 1.5 0 0 1-1.5-1.3L5.5 6.5Z" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round"/>
                            <path d="M9 4.5h6M9.2 9.5h5.6M8.8 13h6.4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                        </svg>
                        <span>{{ $app['module'] }}</span>
                    </p>
                    <h1 class="dashboard-hero-title">Events <span>{{ $app['count'] }}</span></h1>
                </section>

                <section class="dashboard-workspace">
                    <div class="dashboard-panel dashboard-panel--list">
                        <div class="dashboard-panel-tools">
                            <label class="dashboard-panel-search">
                                <span class="sr-only">Search events</span>
                                <input type="text" placeholder="Search" aria-label="Search events">
                                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                    <circle cx="11" cy="11" r="7" stroke="currentColor" stroke-width="1.8"></circle>
                                    <path d="m20 20-3.5-3.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"></path>
                                </svg>
                            </label>

                            <button type="button" class="dashboard-icon-button dashboard-icon-button--soft" aria-label="Filter events">
                                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                    <path d="M4 6h16l-6 7v4.5l-4 2V13L4 6Z" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round"/>
                                </svg>
                            </button>

                            <button type="button" class="dashboard-create-button">
                                <span>Create</span>
                                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                    <path d="m7 9 5 5 5-5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>

                        <div class="dashboard-tab-row">
                            @foreach ($browserTabs as $tab)
                                <button type="button" class="dashboard-tab {{ $tab['active'] ? 'is-active' : '' }}">
                                    {{ $tab['label'] }}
                                </button>
                            @endforeach
                        </div>

                        <div class="dashboard-status-row">
                            <div class="dashboard-status-chips">
                                @foreach ($statusTabs as $status)
                                    <button type="button" class="dashboard-status-chip {{ $loop->first ? 'is-active' : '' }}">
                                        <span>{{ $status['label'] }}</span>
                                        <strong>{{ $status['count'] }}</strong>
                                    </button>
                                @endforeach
                            </div>

                            <button type="button" class="dashboard-icon-button dashboard-icon-button--soft" aria-label="Sort events">
                                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                    <path d="M7 7h10M7 12h7M7 17h4" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/>
                                    <path d="m16 15 2 2 2-2" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>

                        <h2 class="dashboard-month">{{ $app['monthLabel'] }}</h2>

                        <div class="dashboard-event-list">
                            @foreach ($events as $event)
                                <article class="dashboard-event-card {{ $event['active'] ? 'is-active' : '' }}">
                                    <div class="dashboard-event-copy">
                                        <h3 class="dashboard-event-title">{{ $event['title'] }}</h3>
                                        <p class="dashboard-event-project">{{ $event['project'] }}</p>
                                        <div class="dashboard-event-meta">
                                            <span class="dashboard-status-badge {{ $event['status'] === 'Active' ? 'is-active' : 'is-muted' }}">
                                                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                                    <path d="M7 6.5v11l10-5.5-10-5.5Z" fill="currentColor"/>
                                                </svg>
                                                <span>{{ $event['status'] }}</span>
                                            </span>
                                            <span class="dashboard-event-action">{{ $event['action'] }}</span>
                                        </div>

                                        <div class="dashboard-avatar-stack">
                                            @foreach ($event['avatars'] as $avatar)
                                                <span class="dashboard-avatar" style="--avatar-tone: {{ $avatar['tone'] }};">
                                                    {{ $avatar['initials'] }}
                                                    @if ($loop->first)
                                                        <span class="dashboard-avatar-badge">*</span>
                                                    @endif
                                                </span>
                                            @endforeach

                                            @if ($event['extraMembers'])
                                                <span class="dashboard-avatar dashboard-avatar--extra">+{{ $event['extraMembers'] }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="dashboard-event-side">
                                        <div class="dashboard-event-date">
                                            <span>{{ $event['day'] }}</span>
                                            <strong>{{ $event['date'] }}</strong>
                                        </div>

                                        <div class="dashboard-event-stats">
                                            <span class="dashboard-mini-stat">
                                                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                                    <path d="M7.5 4.5h9l3 3v12h-12z" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/>
                                                    <path d="M10 10.5h6M10 13.5h6M10 16.5h4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/>
                                                </svg>
                                                <strong>{{ $event['notes'] }}</strong>
                                            </span>
                                            <span class="dashboard-mini-stat">
                                                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                                    <rect x="5" y="5" width="14" height="14" rx="2.5" stroke="currentColor" stroke-width="1.6"/>
                                                    <path d="m8 12 2.5 2.5L16 9" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                <strong>{{ $event['tasks'] }}</strong>
                                            </span>
                                        </div>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                    </div>

                    <div class="dashboard-panel dashboard-panel--detail">
                        <div class="dashboard-detail-head">
                            <div>
                                <h2 class="dashboard-detail-title">{{ $selectedEvent['title'] }}</h2>
                                <p class="dashboard-detail-subtitle">
                                    <span>{{ $selectedEvent['project'] }}</span>
                                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                        <path d="m6 9 6 6 6-6" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </p>
                            </div>

                            <button type="button" class="dashboard-icon-button dashboard-icon-button--soft" aria-label="More actions">
                                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                    <path d="M12 6.5h0M12 12h0M12 17.5h0" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"/>
                                </svg>
                            </button>
                        </div>

                        <div class="dashboard-detail-status">
                            <span class="dashboard-status-badge is-active">
                                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                    <path d="M7 6.5v11l10-5.5-10-5.5Z" fill="currentColor"/>
                                </svg>
                                <span>{{ $selectedEvent['status'] }}</span>
                            </span>
                            <span class="dashboard-detail-category">{{ $selectedEvent['category'] }}</span>
                        </div>

                        <div class="dashboard-metric-grid">
                            @foreach ($selectedEvent['metrics'] as $metric)
                                <div class="dashboard-metric-card">
                                    <div>
                                        <strong>{{ $metric['value'] }}</strong>
                                        <span>{{ $metric['label'] }}</span>
                                    </div>

                                    @if ($metric['icon'] === 'calendar')
                                        <svg class="dashboard-metric-icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                            <rect x="4.5" y="5.5" width="15" height="14" rx="2.4" stroke="currentColor" stroke-width="1.6"/>
                                            <path d="M8 3.5v4M16 3.5v4M4.5 10.5h15" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/>
                                        </svg>
                                    @elseif ($metric['icon'] === 'chevron')
                                        <svg class="dashboard-metric-icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                            <path d="m8 10 4 4 4-4" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    @else
                                        <svg class="dashboard-metric-icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                            <path d="m8 16 8-8M13 6.5h4.5V11" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    @endif
                                </div>
                            @endforeach
                        </div>

                        <div class="dashboard-section-head">
                            <h3>Members</h3>
                            <button type="button" class="dashboard-inline-action">
                                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                    <path d="m14 5 5 5-9 9H5v-5l9-9Z" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/>
                                    <path d="M13 6l5 5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/>
                                </svg>
                                <span>Edit</span>
                            </button>
                        </div>

                        <div class="dashboard-member-row">
                            @foreach ($selectedEvent['members'] as $member)
                                <span class="dashboard-avatar dashboard-avatar--member" style="--avatar-tone: {{ $member['tone'] }};">
                                    {{ $member['initials'] }}
                                    @if ($member['owner'])
                                        <span class="dashboard-avatar-badge">*</span>
                                    @endif
                                </span>
                            @endforeach

                            <span class="dashboard-avatar dashboard-avatar--extra">+{{ $selectedEvent['memberOverflow'] }}</span>

                            <button type="button" class="dashboard-member-add" aria-label="Add member">
                                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                    <path d="M12 5.5v13M5.5 12h13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                                </svg>
                            </button>
                        </div>

                        <div class="dashboard-section-head">
                            <h3>Description</h3>
                            <button type="button" class="dashboard-inline-action">
                                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                    <path d="m14 5 5 5-9 9H5v-5l9-9Z" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/>
                                    <path d="M13 6l5 5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/>
                                </svg>
                                <span>Edit</span>
                            </button>
                        </div>

                        <p class="dashboard-description">{{ $selectedEvent['description'] }}</p>

                        <div class="dashboard-section-head">
                            <h3>Attachments</h3>
                            <button type="button" class="dashboard-inline-action">
                                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                    <path d="M12 5.5v13M5.5 12h13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                                </svg>
                                <span>Add</span>
                            </button>
                        </div>

                        <div class="dashboard-attachment-table">
                            <div class="dashboard-attachment-head">
                                <span><input type="checkbox" aria-label="Select all attachments"></span>
                                <span>
                                    Name
                                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                        <path d="M7 9h10M9 13h6M10 17h4" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/>
                                    </svg>
                                </span>
                                <span>
                                    Type
                                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                        <path d="M7 9h10M9 13h6M10 17h4" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/>
                                    </svg>
                                </span>
                                <span>
                                    Modified
                                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                        <path d="M7 9h10M9 13h6M10 17h4" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/>
                                    </svg>
                                </span>
                            </div>

                            @foreach ($selectedEvent['attachments'] as $attachment)
                                <div class="dashboard-attachment-row">
                                    <span><input type="checkbox" aria-label="Select attachment"></span>
                                    <span class="dashboard-file-name">
                                        <svg class="dashboard-file-icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                            <path d="M7.5 4.5h6.8l4.2 4.2V19a1.5 1.5 0 0 1-1.5 1.5h-9.5A1.5 1.5 0 0 1 6 19V6a1.5 1.5 0 0 1 1.5-1.5Z" fill="currentColor" opacity=".75"/>
                                            <path d="M14.3 4.5V9h4.2" stroke="white" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <strong>{{ $attachment['name'] }}</strong>
                                    </span>
                                    <span>{{ $attachment['type'] }}</span>
                                    <span>{{ $attachment['modified'] }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>
@endsection
