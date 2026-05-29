<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rio Darmawanto - Developer Portfolio</title>

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

        <span>Rio Darmawanto</span>
    </a>

    <nav>
        <ul class="desktop-nav">
            <li><a href="#work">Projects</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Skills</a></li>
            <li><a href="#testimonials">Experience</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <div class="menu-icon">
        <span></span>
    </div>
</header>

<div class="mobile-nav">
    <button class="mobile-nav-close" aria-label="Close menu">&times;</button>

    <ul>
        <li><a href="#work">Projects</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#services">Skills</a></li>
        <li><a href="#testimonials">Experience</a></li>
        <li><a href="#contact">Contact</a></li>
    </ul>

    <div class="mobile-nav-footer">
        <p>Building modern web applications with Laravel & Filament</p>
        <a href="mailto:riodarmawanto@gmail.com">riodarmawanto@gmail.com</a>
    </div>
</div>

<div class="split-container" id="work">

    <div class="left-panel">
<div class="image-container active" data-project="0">
    <div 
        class="project-image"
        style="background-image: url('{{ asset('front/images/roti.jpg') }}')">
    </div>
</div>

        <div class="image-container" data-project="1">
            <div class="project-images"></div>
        </div>

        <div class="image-container" data-project="2">
            <div class="project-image"></div>
        </div>

        <div class="image-container" data-project="3">
            <div class="project-image"></div>
        </div>

        <div class="image-container" data-project="4">
            <div class="project-image"></div>
        </div>
    </div>

    <div class="right-panel">

        <!-- Project 1 -->
        <div class="project-details active" data-project="0">
            <div class="project-number">01 / 05</div>

            <h1 class="project-title">Sistem Pemesanan Roti</h1>

            <span class="project-category">Filament v3</span>

            <p class="project-description">
                saat ini saya sedang mengerjakan website sistem pemesanan roti dan masih dalam tahap pengerjaan

            </p>

            <div class="project-info">
                <div class="info-item">
                    <h4>Framework</h4>
                    <p>Laravel</p>
                </div>

                <div class="info-item">
                    <h4>Year</h4>
                    <p>2026</p>
                </div>

                <div class="info-item">
                    <h4>Role</h4>
                    <p>Fullstack Developer</p>
                </div>
            </div>

            <div class="project-tags">
                <span class="tag">Laravel</span>
                <span class="tag">Filament</span>
                <span class="tag">MariaDB</span>
                <span class="tag">Docker</span>
            </div>

            <a href="#" class="view-project-btn">View Project →</a>
        </div>

        <!-- Project 2 -->
        <div class="project-details" data-project="1">
            <div class="project-number">02 / 05</div>

            <h1 class="project-title">Company Profile Website</h1>

            <span class="project-category">Web Development</span>

            <p class="project-description">
                Responsive company profile website with elegant UI design,
                optimized SEO structure, interactive sections, and mobile-first experience.
            </p>

            <div class="project-info">
                <div class="info-item">
                    <h4>Frontend</h4>
                    <p>Blade & Livewire</p>
                </div>

                <div class="info-item">
                    <h4>Year</h4>
                    <p>2026</p>
                </div>

                <div class="info-item">
                    <h4>Role</h4>
                    <p>Frontend Developer</p>
                </div>
            </div>

            <div class="project-tags">
                <span class="tag">Blade</span>
                <span class="tag">Livewire</span>
                <span class="tag">Responsive</span>
                <span class="tag">UI Design</span>
            </div>

            <a href="#" class="view-project-btn">View Project →</a>
        </div>

        <!-- Project 3 -->
        <div class="project-details" data-project="2">
            <div class="project-number">03 / 05</div>

            <h1 class="project-title">Student Information System</h1>

            <span class="project-category">Academic Project</span>

            <p class="project-description">
                Information system project for managing academic data,
                student records, schedules, and reporting features using Laravel ecosystem.
            </p>

            <div class="project-info">
                <div class="info-item">
                    <h4>Database</h4>
                    <p>MariaDB</p>
                </div>

                <div class="info-item">
                    <h4>Year</h4>
                    <p>2025</p>
                </div>

                <div class="info-item">
                    <h4>Role</h4>
                    <p>Backend Developer</p>
                </div>
            </div>

            <div class="project-tags">
                <span class="tag">CRUD</span>
                <span class="tag">API</span>
                <span class="tag">Laravel</span>
                <span class="tag">Database</span>
            </div>

            <a href="#" class="view-project-btn">View Project →</a>
        </div>

        <!-- Project 4 -->
        <div class="project-details" data-project="3">
            <div class="project-number">04 / 05</div>

            <h1 class="project-title">Docker Development Environment</h1>

            <span class="project-category">DevOps</span>

            <p class="project-description">
                Docker-based Laravel development environment with optimized workflow,
                containerized services, MariaDB integration, and scalable configuration.
            </p>

            <div class="project-info">
                <div class="info-item">
                    <h4>Technology</h4>
                    <p>Docker</p>
                </div>

                <div class="info-item">
                    <h4>Year</h4>
                    <p>2026</p>
                </div>

                <div class="info-item">
                    <h4>Role</h4>
                    <p>Backend Engineer</p>
                </div>
            </div>

            <div class="project-tags">
                <span class="tag">Docker</span>
                <span class="tag">Nginx</span>
                <span class="tag">Container</span>
                <span class="tag">Deployment</span>
            </div>

            <a href="#" class="view-project-btn">View Project →</a>
        </div>

        <!-- Project 5 -->
        <div class="project-details" data-project="4">
            <div class="project-number">05 / 05</div>

            <h1 class="project-title">Personal Portfolio Website</h1>

            <span class="project-category">Personal Branding</span>

            <p class="project-description">
                Personal portfolio website to showcase projects, skills,
                educational background, and development experience with modern UI.
            </p>

            <div class="project-info">
                <div class="info-item">
                    <h4>Name</h4>
                    <p>Rio Darmawanto</p>
                </div>

                <div class="info-item">
                    <h4>Status</h4>
                    <p>Semester 4</p>
                </div>

                <div class="info-item">
                    <h4>University</h4>
                    <p>Esa Unggul</p>
                </div>
            </div>

            <div class="project-tags">
                <span class="tag">Portfolio</span>
                <span class="tag">Developer</span>
                <span class="tag">UI</span>
                <span class="tag">Creative</span>
            </div>

            <a href="#" class="view-project-btn">Explore More →</a>
        </div>
    </div>

    <div class="project-controls">
        <div class="progress-indicator">
            <div class="progress-dot active" data-project="0"></div>
            <div class="progress-dot" data-project="1"></div>
            <div class="progress-dot" data-project="2"></div>
            <div class="progress-dot" data-project="3"></div>
            <div class="progress-dot" data-project="4"></div>
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

<!-- About -->
<section id="about" class="about-section">
    <div class="about-split">

        <div class="about-content">
            <h2>About Me</h2>

            <p>
                Hi, I'm <strong>Rio Darmawanto</strong>, a passionate web developer focused on Laravel,
                Filament v3, Livewire, Blade, and Docker-based development workflow.
            </p>

            <p>
                Currently, I am studying Information Systems at the Faculty of Computer Science,
                Esa Unggul University and actively building modern web applications and admin systems.
            </p>

            <p>
                I enjoy creating clean architecture, scalable backend systems,
                elegant admin panels, and responsive frontend interfaces.
            </p>

            <div class="about-stats">

                <div class="stat-item">
                    <h3>10+</h3>
                    <p>Projects</p>
                </div>

                <div class="stat-item">
                    <h3>4</h3>
                    <p>Semester</p>
                </div>

                <div class="stat-item">
                    <h3>100%</h3>
                    <p>Passionate</p>
                </div>

            </div>
        </div>
    <div 
        class="project-image"
        style="background-image: url('{{ asset('front/images/fotorio.jpg') }}')">
    </div>
</div>
    </div>
</section>

<!-- Skills -->
<section id="services" class="services-section">

    <div class="services-container">

        <div class="section-header">
            <h2>Skills & Expertise</h2>
            <p>Technologies and tools I use for development</p>
        </div>

        <div class="services-grid">

            <div class="service-card">
                <div class="service-number">01</div>

                <h3>Backend Development</h3>

                <p>
                    Building secure and scalable backend systems using Laravel framework.
                </p>

                <ul class="service-list">
                    <li>Laravel</li>
                    <li>REST API</li>
                    <li>Authentication</li>
                    <li>Database Design</li>
                </ul>
            </div>

            <div class="service-card">
                <div class="service-number">02</div>

                <h3>Admin Panel Development</h3>

                <p>
                    Developing modern admin dashboards using Filament v3 and Livewire.
                </p>

                <ul class="service-list">
                    <li>Filament v3</li>
                    <li>Livewire</li>
                    <li>CRUD System</li>
                    <li>Dashboard UI</li>
                </ul>
            </div>

            <div class="service-card">
                <div class="service-number">03</div>

                <h3>DevOps & Docker</h3>

                <p>
                    Managing Laravel environments using Docker for efficient development workflow.
                </p>

                <ul class="service-list">
                    <li>Docker</li>
                    <li>Nginx</li>
                    <li>MariaDB</li>
                    <li>Linux Environment</li>
                </ul>
            </div>

        </div>
    </div>
</section>

<!-- Experience -->
<section id="testimonials" class="testimonials-section">

    <div class="testimonials-container">

        <div class="section-header">
            <h2>Experience & Journey</h2>
            <p>My development and academic journey</p>
        </div>

        <div class="testimonials-grid">

            <div class="testimonial-card">
                <div class="quote-icon">"</div>

                <p class="testimonial-text">
                    Passionate about backend and fullstack development using modern Laravel ecosystem.
                </p>

                <div class="testimonial-author">
                    <div class="author-avatar">RD</div>

                    <div class="author-info">
                        <h4>Rio Darmawanto</h4>
                        <p>Laravel Developer</p>
                    </div>
                </div>
            </div>

            <div class="testimonial-card">
                <div class="quote-icon">"</div>

                <p class="testimonial-text">
                    Experienced in building admin systems with Filament v3 and Livewire integration.
                </p>

                <div class="testimonial-author">
                    <div class="author-avatar">LV</div>

                    <div class="author-info">
                        <h4>Laravel Stack</h4>
                        <p>Filament Specialist</p>
                    </div>
                </div>
            </div>

            <div class="testimonial-card">
                <div class="quote-icon">"</div>

                <p class="testimonial-text">
                    Active Information Systems student at Esa Unggul University with strong enthusiasm for technology.
                </p>

                <div class="testimonial-author">
                    <div class="author-avatar">UE</div>

                    <div class="author-info">
                        <h4>Esa Unggul</h4>
                        <p>Faculty of Computer Science</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Contact -->
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
                    <div class="contact-item-icon">📧</div>

                    <div class="contact-item-content">
                        <h4>Email</h4>
                        <a href="mailto:riodarmawanto@gmail.com">
                            riodarmawanto@gmail.com
                        </a>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-item-icon">🎓</div>

                    <div class="contact-item-content">
                        <h4>University</h4>
                        <a href="#">
                            Universitas Esa Unggul
                        </a>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-item-icon">💻</div>

                    <div class="contact-item-content">
                        <h4>Focus</h4>
                        <a href="#">
                            Laravel & Filament Developer
                        </a>
                    </div>
                </div>

            </div>

            <div class="social-links">
                <a href="#" class="social-link">GH</a>
                <a href="#" class="social-link">IG</a>
                <a href="#" class="social-link">LI</a>
                <a href="#" class="social-link">TW</a>
            </div>

        </div>

        <form action="{{ route('contact.store') }}" method="POST" class="contact-form">

            @csrf

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" id="subject" name="subject" required>
            </div>

            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" required></textarea>
            </div>

            <button type="submit" class="submit-btn">
                Send Message
            </button>

        </form>

    </div>
</section>

<footer>
    <p>
        Copyright © 2026 Rio Darmawanto.
        All rights reserved.
    </p>
</footer>

<script src="{{ asset('front/tooplate-split-script.js') }}"></script>

</body>
</html>