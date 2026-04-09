@extends('layouts.dashboard', ['title' => 'Atelier Dashboard'])

@section('content')
    @php
        $accentMap = [
            'sage' => 'var(--dashboard-sage)',
            'sand' => 'var(--dashboard-sand)',
            'clay' => 'var(--dashboard-clay)',
            'ink' => 'var(--dashboard-ink-soft)',
        ];

        $navItems = ['Overview', 'Projects', 'Schedule', 'Activity', 'Reports'];
    @endphp

    <div class="mx-auto max-w-7xl">
        <div class="dashboard-shell overflow-hidden lg:grid lg:grid-cols-[255px_minmax(0,1fr)]">
            <aside class="border-b border-white/65 p-5 lg:border-b-0 lg:border-r lg:p-6">
                <div class="dashboard-reveal">
                    <p class="text-xs font-semibold uppercase tracking-[0.32em] text-[color:var(--dashboard-muted)]">Atelier</p>
                    <h1 class="mt-3 font-display text-4xl leading-none text-[color:var(--dashboard-ink)]">Dashboard</h1>
                    <p class="mt-3 max-w-[18rem] text-sm leading-6 text-[color:var(--dashboard-muted)]">
                        A restrained starter layout for teams that want a clear, elegant workspace.
                    </p>
                </div>

                <nav class="mt-8 space-y-2">
                    @foreach ($navItems as $item)
                        <a
                            href="#"
                            class="dashboard-nav-link dashboard-reveal {{ $loop->first ? 'is-active' : '' }}"
                            style="animation-delay: {{ 80 + ($loop->index * 70) }}ms"
                        >
                            <span>{{ $item }}</span>
                            <span class="text-xs text-[color:var(--dashboard-muted)]">{{ str_pad((string) ($loop->iteration), 2, '0', STR_PAD_LEFT) }}</span>
                        </a>
                    @endforeach
                </nav>

                <div class="dashboard-card dashboard-reveal mt-8 p-5" style="animation-delay: 380ms">
                    <p class="text-xs uppercase tracking-[0.24em] text-[color:var(--dashboard-muted)]">Today</p>
                    <p class="mt-3 text-3xl font-semibold tracking-tight text-[color:var(--dashboard-ink)]">{{ now()->format('d') }}</p>
                    <p class="mt-1 text-sm text-[color:var(--dashboard-muted)]">{{ now()->format('F Y') }}</p>
                    <div class="mt-5 rounded-[24px] border border-white/80 bg-white/70 p-4">
                        <p class="text-sm font-semibold text-[color:var(--dashboard-ink)]">{{ $user['name'] }}</p>
                        <p class="mt-1 text-sm text-[color:var(--dashboard-muted)]">{{ $user['role'] }}</p>
                    </div>
                </div>
            </aside>

            <main class="p-5 lg:p-8">
                <section class="dashboard-card dashboard-reveal p-6 lg:p-8">
                    <div class="flex flex-col gap-6 xl:flex-row xl:items-start xl:justify-between">
                        <div class="max-w-3xl">
                            <p class="text-xs font-semibold uppercase tracking-[0.32em] text-[color:var(--dashboard-muted)]">{{ $hero['eyebrow'] }}</p>
                            <h2 class="mt-4 max-w-2xl font-display text-5xl leading-[0.95] text-[color:var(--dashboard-ink)] md:text-6xl">
                                {{ $hero['title'] }}
                            </h2>
                            <p class="mt-5 max-w-2xl text-base leading-7 text-[color:var(--dashboard-muted)]">
                                {{ $hero['description'] }}
                            </p>
                        </div>

                        <div class="flex flex-wrap gap-3 xl:justify-end">
                            <a href="#" class="dashboard-btn-primary">Create report</a>
                            <a href="#" class="dashboard-btn-secondary">Share overview</a>
                        </div>
                    </div>

                    <div class="mt-6 flex flex-wrap gap-3">
                        @foreach ($hero['chips'] as $chip)
                            <span class="dashboard-pill dashboard-reveal" style="animation-delay: {{ 140 + ($loop->index * 80) }}ms">{{ $chip }}</span>
                        @endforeach
                    </div>

                    <div class="mt-8 grid gap-4 lg:grid-cols-[minmax(0,1fr)_320px]">
                        <label class="flex min-h-14 items-center gap-3 rounded-full border border-white/80 bg-white/72 px-5 text-sm text-[color:var(--dashboard-muted)] shadow-[0_16px_40px_-28px_rgba(28,34,45,0.42)]">
                            <svg class="h-4 w-4 text-[color:var(--dashboard-muted)]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                <circle cx="11" cy="11" r="7"></circle>
                                <path d="m20 20-3.5-3.5"></path>
                            </svg>
                            <span>Search projects, clients, or notes</span>
                        </label>

                        <div class="grid grid-cols-2 gap-3">
                            <div class="rounded-[28px] border border-white/80 bg-white/70 p-4">
                                <p class="text-xs uppercase tracking-[0.24em] text-[color:var(--dashboard-muted)]">Next review</p>
                                <p class="mt-3 text-lg font-semibold text-[color:var(--dashboard-ink)]">11:00 AM</p>
                                <p class="mt-1 text-sm text-[color:var(--dashboard-muted)]">Northstar checkpoint</p>
                            </div>
                            <div class="rounded-[28px] border border-white/80 bg-white/70 p-4">
                                <p class="text-xs uppercase tracking-[0.24em] text-[color:var(--dashboard-muted)]">Pending approvals</p>
                                <p class="mt-3 text-lg font-semibold text-[color:var(--dashboard-ink)]">02 items</p>
                                <p class="mt-1 text-sm text-[color:var(--dashboard-muted)]">Ready for sign-off</p>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="mt-6 grid gap-4 md:grid-cols-2 2xl:grid-cols-4">
                    @foreach ($stats as $stat)
                        <article class="dashboard-card dashboard-reveal p-5" style="animation-delay: {{ 240 + ($loop->index * 70) }}ms">
                            <div class="flex items-center justify-between gap-3">
                                <p class="text-sm text-[color:var(--dashboard-muted)]">{{ $stat['label'] }}</p>
                                <span class="dashboard-pill">{{ $stat['change'] }}</span>
                            </div>
                            <p class="mt-5 text-4xl font-semibold tracking-[-0.04em] text-[color:var(--dashboard-ink)]">{{ $stat['value'] }}</p>
                            <p class="mt-2 text-sm leading-6 text-[color:var(--dashboard-muted)]">{{ $stat['caption'] }}</p>
                        </article>
                    @endforeach
                </section>

                <section class="mt-6 grid gap-6 xl:grid-cols-[minmax(0,1.45fr)_340px]">
                    <div class="space-y-6">
                        <article class="dashboard-card dashboard-reveal p-6" style="animation-delay: 520ms">
                            <div class="flex flex-col gap-4 md:flex-row md:items-end md:justify-between">
                                <div>
                                    <p class="text-xs uppercase tracking-[0.28em] text-[color:var(--dashboard-muted)]">Projects in motion</p>
                                    <h3 class="mt-3 text-2xl font-semibold tracking-tight text-[color:var(--dashboard-ink)]">Active workspaces</h3>
                                </div>
                                <a href="#" class="text-sm font-semibold text-[color:var(--dashboard-ink)]">View all projects</a>
                            </div>

                            <div class="mt-6 grid gap-4 lg:grid-cols-2">
                                @foreach ($projects as $project)
                                    <div
                                        class="rounded-[30px] border border-white/80 bg-white/72 p-5 shadow-[0_18px_45px_-32px_rgba(28,34,45,0.55)]"
                                        style="--accent: {{ $accentMap[$project['accent']] ?? 'var(--dashboard-sage)' }}"
                                    >
                                        <div class="flex items-start justify-between gap-4">
                                            <div>
                                                <p class="text-lg font-semibold text-[color:var(--dashboard-ink)]">{{ $project['name'] }}</p>
                                                <p class="mt-2 text-sm leading-6 text-[color:var(--dashboard-muted)]">{{ $project['description'] }}</p>
                                            </div>
                                            <span class="dashboard-status">{{ $project['status'] }}</span>
                                        </div>

                                        <div class="mt-5">
                                            <div class="flex items-center justify-between text-sm">
                                                <span class="text-[color:var(--dashboard-muted)]">Completion</span>
                                                <span class="font-semibold text-[color:var(--dashboard-ink)]">{{ $project['progress'] }}%</span>
                                            </div>
                                            <div class="dashboard-progress mt-3">
                                                <span style="width: {{ $project['progress'] }}%"></span>
                                            </div>
                                        </div>

                                        <div class="mt-5 flex items-center justify-between gap-4 text-sm">
                                            <div>
                                                <p class="text-[color:var(--dashboard-muted)]">Owner</p>
                                                <p class="mt-1 font-semibold text-[color:var(--dashboard-ink)]">{{ $project['owner'] }}</p>
                                            </div>
                                            <div class="text-right">
                                                <p class="text-[color:var(--dashboard-muted)]">Due date</p>
                                                <p class="mt-1 font-semibold text-[color:var(--dashboard-ink)]">{{ $project['due'] }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </article>

                        <article class="dashboard-card dashboard-reveal p-6" style="animation-delay: 620ms">
                            <div class="flex items-center justify-between gap-4">
                                <div>
                                    <p class="text-xs uppercase tracking-[0.28em] text-[color:var(--dashboard-muted)]">Recent activity</p>
                                    <h3 class="mt-3 text-2xl font-semibold tracking-tight text-[color:var(--dashboard-ink)]">Latest updates</h3>
                                </div>
                                <a href="#" class="text-sm font-semibold text-[color:var(--dashboard-ink)]">Open inbox</a>
                            </div>

                            <div class="mt-6 space-y-5">
                                @foreach ($activity as $item)
                                    <div class="dashboard-timeline-item">
                                        <div class="rounded-[28px] border border-white/80 bg-white/72 p-5">
                                            <div class="flex flex-col gap-2 md:flex-row md:items-start md:justify-between">
                                                <p class="max-w-xl text-base font-semibold leading-7 text-[color:var(--dashboard-ink)]">{{ $item['title'] }}</p>
                                                <p class="text-sm text-[color:var(--dashboard-muted)]">{{ $item['time'] }}</p>
                                            </div>
                                            <p class="mt-3 text-sm leading-6 text-[color:var(--dashboard-muted)]">{{ $item['detail'] }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </article>
                    </div>

                    <div class="space-y-6">
                        <article class="dashboard-card dashboard-reveal p-6" style="animation-delay: 560ms">
                            <p class="text-xs uppercase tracking-[0.28em] text-[color:var(--dashboard-muted)]">Focus score</p>
                            <div class="mt-5 flex items-center justify-center">
                                <div class="dashboard-ring" style="--value: {{ $focusScore }}%; --ring: var(--dashboard-sage)">
                                    <div>
                                        <p class="text-4xl font-semibold tracking-[-0.05em] text-[color:var(--dashboard-ink)]">{{ $focusScore }}</p>
                                        <p class="mt-1 text-sm text-[color:var(--dashboard-muted)]">steady pace</p>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-6 space-y-3">
                                @foreach ($insights as $insight)
                                    <div class="rounded-[22px] border border-white/80 bg-white/72 px-4 py-3 text-sm leading-6 text-[color:var(--dashboard-muted)]">
                                        {{ $insight }}
                                    </div>
                                @endforeach
                            </div>
                        </article>

                        <article class="dashboard-card dashboard-reveal p-6" style="animation-delay: 660ms">
                            <div class="flex items-center justify-between gap-4">
                                <div>
                                    <p class="text-xs uppercase tracking-[0.28em] text-[color:var(--dashboard-muted)]">Schedule</p>
                                    <h3 class="mt-3 text-2xl font-semibold tracking-tight text-[color:var(--dashboard-ink)]">Today at a glance</h3>
                                </div>
                                <p class="text-sm text-[color:var(--dashboard-muted)]">{{ now()->format('D, M j') }}</p>
                            </div>

                            <div class="mt-6 space-y-4">
                                @foreach ($schedule as $item)
                                    <div class="rounded-[28px] border border-white/80 bg-white/72 px-4 py-4">
                                        <div class="flex items-start gap-4">
                                            <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-[rgba(47,107,95,0.08)] text-sm font-semibold text-[color:var(--dashboard-sage)]">
                                                {{ $item['time'] }}
                                            </div>
                                            <div>
                                                <p class="text-base font-semibold text-[color:var(--dashboard-ink)]">{{ $item['title'] }}</p>
                                                <p class="mt-2 text-sm leading-6 text-[color:var(--dashboard-muted)]">{{ $item['detail'] }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </article>

                        <article class="dashboard-card dashboard-reveal p-6" style="animation-delay: 760ms">
                            <p class="text-xs uppercase tracking-[0.28em] text-[color:var(--dashboard-muted)]">Template note</p>
                            <p class="mt-4 text-xl font-semibold leading-8 text-[color:var(--dashboard-ink)]">
                                Replace the sample arrays in <span class="font-mono text-base">routes/web.php</span> with controller data whenever you are ready.
                            </p>
                            <p class="mt-4 text-sm leading-6 text-[color:var(--dashboard-muted)]">
                                The layout, cards, and sections are already split cleanly so you can move this into components without rewriting the design.
                            </p>
                        </article>
                    </div>
                </section>
            </main>
        </div>
    </div>
@endsection
