<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $profile?->name }} - Developer Portfolio</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Crimson+Pro:wght@300;400;600;700&family=Archivo:wght@300;400;600;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('front/tooplate-split-portfolio.css') }}">
</head>

<body>

<header>

    <a href="#work" class="logo">

        <svg class="logo-icon" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
            <circle cx="50" cy="50" r="45" fill="none" stroke="#ff3366" stroke-width="3"/>
            <path d="M 30 40 L 50 60 L 70 40" fill="none" stroke="#ff3366" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
            <circle cx="50" cy="70" r="3" fill="#ff3366"/>
        </svg>

        <span>{{ $profile?->name }}</span>

    </a>

    <nav>
        <ul class="desktop-nav">
            <li><a href="#work">Projects</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Skills</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <div class="menu-icon">
        <span></span>
    </div>

</header>

<div class="mobile-nav">

    <button class="mobile-nav-close" aria-label="Close menu">
        &times;
    </button>

    <ul>
        <li><a href="#work">Projects</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#services">Skills</a></li>
        <li><a href="#contact">Contact</a></li>
    </ul>

    <div class="mobile-nav-footer">

        <p>
            Building modern web applications with Laravel & Filament
        </p>

        <a href="mailto:{{ $profile?->email }}">
            {{ $profile?->email }}
        </a>

    </div>

</div>

<!-- PROJECT -->

<div class="split-container" id="work">

    <!-- LEFT IMAGE -->
    <div class="left-panel">

        @foreach ($projects as $project)

            <div
                class="image-container {{ $loop->first ? 'active' : '' }}"
                data-project="{{ $loop->index }}"
            >

                <div
                    class="project-image"
                    style="background-image: url('{{ asset('storage/' . $project->thumbnail) }}')">
                </div>

            </div>

        @endforeach

    </div>

    <!-- RIGHT CONTENT -->
    <div class="right-panel">

        @foreach ($projects as $project)

            <div
                class="project-details {{ $loop->first ? 'active' : '' }}"
                data-project="{{ $loop->index }}"
            >

                <div class="project-number">

                    {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}

                    /

                    {{ str_pad($projects->count(), 2, '0', STR_PAD_LEFT) }}

                </div>

                <h1 class="project-title">
                    {{ $project->title }}
                </h1>

                <span class="project-category">
                    {{ ucfirst(str_replace('_', ' ', $project->status)) }}
                </span>

                <p class="project-description">
                    {!! $project->description !!}
                </p>

                <div class="project-info">

                    <div class="info-item">
                        <h4>Tech Stack</h4>
                        <p>{{ $project->tech_stack }}</p>
                    </div>

                    <div class="info-item">
                        <h4>Start Date</h4>
                        <p>{{ $project->start_date }}</p>
                    </div>

                    <div class="info-item">
                        <h4>Status</h4>
                        <p>{{ ucfirst($project->status) }}</p>
                    </div>

                </div>

                <div class="project-tags">

                    @php
                        $tags = explode(',', $project->tech_stack);
                    @endphp

                    @foreach ($tags as $tag)

                        <span class="tag">
                            {{ trim($tag) }}
                        </span>

                    @endforeach

                </div>

                @if ($project->github_url)

                    <a
                        href="{{ $project->github_url }}"
                        target="_blank"
                        class="view-project-btn"
                    >
                        View Project →
                    </a>

                @endif

            </div>

        @endforeach

    </div>

    <!-- NAVIGATION -->
    <div class="project-controls">

        <div class="progress-indicator">

            @foreach ($projects as $project)

                <div
                    class="progress-dot {{ $loop->first ? 'active' : '' }}"
                    data-project="{{ $loop->index }}"
                ></div>

            @endforeach

        </div>

        <div class="navigation">

            <div class="nav-arrow" id="prevBtn">
                <div class="arrow arrow-left"></div>
            </div>

            <div class="nav-arrow" id="nextBtn">
                <div class="arrow arrow-right"></div>
            </div>

        </div>

    </div>

</div>

<!-- ABOUT -->

<section id="about" class="about-section">

    <div class="about-split">

        <div class="about-content">

            <h2>About Me</h2>

            <p>
                {!! $profile?->bio !!}
            </p>

            <div class="about-stats">

                <div class="stat-item">
                    <h3>{{ $projects->count() }}+</h3>
                    <p>Projects</p>
                </div>

                <div class="stat-item">
                    <h3>{{ $skills->count() }}</h3>
                    <p>Skills</p>
                </div>

                <div class="stat-item">
                    <h3>100%</h3>
                    <p>Passionate</p>
                </div>

            </div>

        </div>

        <div
            class="project-image"
            style="background-image: url('{{ asset('storage/' . $profile?->photo) }}')">
        </div>

    </div>

</section>

<!-- SKILLS -->

<section id="services" class="services-section">

    <div class="services-container">

        <div class="section-header">

            <h2>Skills & Expertise</h2>

            <p>
                Technologies and tools I use for development
            </p>

        </div>

        <div class="services-grid">

            @foreach ($skills as $skill)

                <div class="service-card">

                    <div class="service-number">

                        {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}

                    </div>

                    <h3>{{ $skill->name }}</h3>

                    <p>
                        Skill Level {{ $skill->level }}%
                    </p>

                    <ul class="service-list">

                        <li>{{ $skill->name }}</li>

                        <li>Professional Development</li>

                        <li>Modern Workflow</li>

                        <li>Scalable Application</li>

                    </ul>

                </div>

            @endforeach

        </div>

    </div>

</section>

<!-- CONTACT -->

<section id="contact" class="contact-section">

    <div class="contact-split">

        <div class="contact-info">

            <h2>Let's Build Something Great</h2>

            <p>
                Interested in collaboration, freelance projects,
                or discussing web development? Feel free to contact me.
            </p>

            <div class="contact-details">

                <div class="contact-item">

                    <div class="contact-item-icon">
                        📧
                    </div>

                    <div class="contact-item-content">

                        <h4>Email</h4>

                        <a href="mailto:{{ $profile?->email }}">
                            {{ $profile?->email }}
                        </a>

                    </div>

                </div>

                <div class="contact-item">

                    <div class="contact-item-icon">
                        💻
                    </div>

                    <div class="contact-item-content">

                        <h4>Github</h4>

                        <a
                            href="{{ $profile?->github }}"
                            target="_blank"
                        >
                            Github Profile
                        </a>

                    </div>

                </div>

                <div class="contact-item">

                    <div class="contact-item-icon">
                        🔗
                    </div>

                    <div class="contact-item-content">

                        <h4>LinkedIn</h4>

                        <a
                            href="{{ $profile?->linkedin }}"
                            target="_blank"
                        >
                            LinkedIn Profile
                        </a>

                    </div>

                </div>

            </div>

        </div>

        <!-- FORM -->
        <form
            action="{{ route('contact.store') }}"
            method="POST"
            class="contact-form"
        >

            @csrf

            <div class="form-group">

                <label for="name">Name</label>

                <input
                    type="text"
                    id="name"
                    name="name"
                    required
                >

            </div>

            <div class="form-group">

                <label for="email">Email</label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    required
                >

            </div>

            <div class="form-group">

                <label for="subject">Subject</label>

                <input
                    type="text"
                    id="subject"
                    name="subject"
                    required
                >

            </div>

            <div class="form-group">

                <label for="message">Message</label>

                <textarea
                    id="message"
                    name="message"
                    required
                ></textarea>

            </div>

            <button type="submit" class="submit-btn">
                Send Message
            </button>

        </form>

    </div>

</section>

<footer>

    <p>
        Copyright © {{ now()->year }}
        {{ $profile?->name }}.
        All rights reserved.
    </p>

</footer>

<script src="{{ asset('front/tooplate-split-script.js') }}"></script>

</body>
</html>