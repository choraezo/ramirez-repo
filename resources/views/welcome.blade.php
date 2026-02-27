<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'EduVision') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --royal-blue: #1B3A8A;
            --royal-blue-dark: #122870;
            --powder-blue: #7EB8D4;
            --powder-blue-light: #C3DFF0;
            --beige: #F5E6C8;
            --beige-dark: #E8D4A8;
            --white: #FDFAF5;
            --text-dark: #1a1a2e;
            --text-mid: #3d4a6b;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        html { scroll-behavior: smooth; }

        body {
            font-family: 'DM Sans', sans-serif;
            background-color: var(--white);
            color: var(--text-dark);
            overflow-x: hidden;
        }

        /* ── NAVBAR ── */
        nav {
            position: fixed; top: 0; width: 100%; z-index: 100;
            padding: 1.2rem 5%;
            display: flex; align-items: center; justify-content: space-between;
            background: rgba(253, 250, 245, 0.92);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(27, 58, 138, 0.1);
        }
        .nav-logo {
            font-family: 'Playfair Display', serif;
            font-size: 1.6rem; font-weight: 900;
            color: var(--royal-blue);
            letter-spacing: -0.5px;
        }
        .nav-logo span { color: var(--powder-blue); }
        .nav-links { display: flex; gap: 2.5rem; list-style: none; }
        .nav-links a {
            text-decoration: none; color: var(--text-mid);
            font-weight: 500; font-size: 0.95rem;
            transition: color 0.2s;
        }
        .nav-links a:hover { color: var(--royal-blue); }
        .nav-cta {
            background: var(--royal-blue);
            color: white !important;
            padding: 0.55rem 1.4rem;
            border-radius: 50px;
            transition: background 0.2s !important;
        }
        .nav-cta:hover { background: var(--royal-blue-dark) !important; color: white !important; }

        /* ── HERO ── */
        #hero {
            min-height: 100vh;
            background: linear-gradient(135deg, var(--royal-blue) 0%, #2952B3 50%, #1B3A8A 100%);
            display: flex; align-items: center;
            padding: 0 5%;
            position: relative;
            overflow: hidden;
        }
        #hero::before {
            content: '';
            position: absolute; inset: 0;
            background: radial-gradient(ellipse at 70% 50%, rgba(126,184,212,0.25) 0%, transparent 60%);
        }
        .hero-blob {
            position: absolute;
            width: 520px; height: 520px;
            background: rgba(126, 184, 212, 0.15);
            border-radius: 60% 40% 70% 30% / 50% 60% 40% 50%;
            right: -80px; top: 50%;
            transform: translateY(-50%);
            animation: blob-morph 8s ease-in-out infinite;
        }
        @keyframes blob-morph {
            0%, 100% { border-radius: 60% 40% 70% 30% / 50% 60% 40% 50%; }
            50% { border-radius: 40% 60% 30% 70% / 60% 40% 60% 40%; }
        }
        .hero-content { position: relative; z-index: 2; max-width: 620px; }
        .hero-badge {
            display: inline-block;
            background: rgba(245, 230, 200, 0.2);
            border: 1px solid rgba(245, 230, 200, 0.4);
            color: var(--beige);
            padding: 0.4rem 1rem;
            border-radius: 50px;
            font-size: 0.82rem;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            margin-bottom: 1.5rem;
        }
        .hero-title {
            font-family: 'Playfair Display', serif;
            font-size: clamp(2.8rem, 5vw, 4.2rem);
            font-weight: 900;
            color: white;
            line-height: 1.1;
            margin-bottom: 1.5rem;
        }
        .hero-title em {
            font-style: normal;
            color: var(--beige);
        }
        .hero-subtitle {
            font-size: 1.1rem;
            color: rgba(255,255,255,0.75);
            line-height: 1.7;
            margin-bottom: 2.5rem;
            max-width: 480px;
        }
        .hero-btns { display: flex; gap: 1rem; flex-wrap: wrap; }
        .btn-primary {
            background: var(--beige);
            color: var(--royal-blue);
            padding: 0.85rem 2rem;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            font-size: 0.95rem;
            transition: all 0.25s;
            border: 2px solid transparent;
        }
        .btn-primary:hover {
            background: transparent;
            border-color: var(--beige);
            color: var(--beige);
        }
        .btn-secondary {
            background: transparent;
            color: white;
            padding: 0.85rem 2rem;
            border-radius: 50px;
            font-weight: 500;
            text-decoration: none;
            font-size: 0.95rem;
            border: 2px solid rgba(255,255,255,0.4);
            transition: all 0.25s;
        }
        .btn-secondary:hover {
            border-color: white;
            background: rgba(255,255,255,0.1);
        }
        .hero-stats {
            display: flex; gap: 2.5rem;
            margin-top: 3.5rem;
            padding-top: 2rem;
            border-top: 1px solid rgba(255,255,255,0.15);
        }
        .stat-num {
            font-family: 'Playfair Display', serif;
            font-size: 2rem; font-weight: 700;
            color: var(--beige);
        }
        .stat-label { font-size: 0.82rem; color: rgba(255,255,255,0.6); margin-top: 0.2rem; }

        /* ── ABOUT ── */
        #about {
            padding: 7rem 5%;
            background: var(--white);
        }
        .section-label {
            font-size: 0.78rem;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: var(--powder-blue);
            font-weight: 600;
            margin-bottom: 0.8rem;
        }
        .section-title {
            font-family: 'Playfair Display', serif;
            font-size: clamp(2rem, 3.5vw, 2.8rem);
            font-weight: 700;
            color: var(--royal-blue);
            line-height: 1.2;
            margin-bottom: 1.5rem;
        }
        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 5rem;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }
        .about-text p {
            color: var(--text-mid);
            line-height: 1.8;
            margin-bottom: 1.2rem;
            font-size: 1.02rem;
        }
        .about-visual {
            position: relative;
        }
        .about-card {
            background: linear-gradient(135deg, var(--royal-blue), #2952B3);
            border-radius: 20px;
            padding: 3rem;
            color: white;
            position: relative;
            overflow: hidden;
        }
        .about-card::after {
            content: '';
            position: absolute;
            width: 200px; height: 200px;
            background: rgba(126, 184, 212, 0.2);
            border-radius: 50%;
            right: -50px; bottom: -50px;
        }
        .about-card-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.8rem;
            margin-bottom: 1rem;
        }
        .about-card p { opacity: 0.8; line-height: 1.7; }
        .about-pill {
            display: inline-block;
            background: var(--beige);
            color: var(--royal-blue);
            padding: 0.4rem 1rem;
            border-radius: 50px;
            font-size: 0.82rem;
            font-weight: 600;
            margin: 1rem 0.3rem 0;
        }

        /* ── SERVICES ── */
        #services {
            padding: 7rem 5%;
            background: var(--beige);
        }
        .services-header { text-align: center; margin-bottom: 4rem; }
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1.5rem;
            max-width: 1200px;
            margin: 0 auto;
        }
        .service-card {
            background: white;
            border-radius: 16px;
            padding: 2.2rem;
            transition: transform 0.3s, box-shadow 0.3s;
            border: 2px solid transparent;
            cursor: default;
        }
        .service-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 40px rgba(27, 58, 138, 0.12);
            border-color: var(--powder-blue-light);
        }
        .service-icon {
            width: 52px; height: 52px;
            background: linear-gradient(135deg, var(--powder-blue-light), var(--powder-blue));
            border-radius: 14px;
            display: flex; align-items: center; justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 1.3rem;
        }
        .service-card h3 {
            font-family: 'Playfair Display', serif;
            font-size: 1.25rem;
            color: var(--royal-blue);
            margin-bottom: 0.7rem;
        }
        .service-card p {
            color: var(--text-mid);
            font-size: 0.92rem;
            line-height: 1.7;
        }

        /* ── CONTACT ── */
        #contact {
            padding: 7rem 5%;
            background: var(--white);
        }
        .contact-wrapper {
            max-width: 1100px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1.2fr;
            gap: 5rem;
            align-items: start;
        }
        .contact-info h2 { margin-bottom: 1.2rem; }
        .contact-info p {
            color: var(--text-mid);
            line-height: 1.8;
            margin-bottom: 2rem;
            font-size: 1rem;
        }
        .contact-item {
            display: flex; align-items: center; gap: 1rem;
            margin-bottom: 1rem;
            color: var(--text-mid);
            font-size: 0.95rem;
        }
        .contact-icon {
            width: 40px; height: 40px;
            background: var(--powder-blue-light);
            border-radius: 10px;
            display: flex; align-items: center; justify-content: center;
            font-size: 1rem;
            flex-shrink: 0;
        }
        .contact-form {
            background: var(--beige);
            border-radius: 20px;
            padding: 2.5rem;
        }
        .form-group { margin-bottom: 1.3rem; }
        .form-group label {
            display: block;
            font-size: 0.85rem;
            font-weight: 600;
            color: var(--royal-blue);
            margin-bottom: 0.5rem;
            letter-spacing: 0.3px;
        }
        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 0.85rem 1.1rem;
            border: 2px solid var(--beige-dark);
            border-radius: 10px;
            font-family: 'DM Sans', sans-serif;
            font-size: 0.95rem;
            color: var(--text-dark);
            background: white;
            transition: border-color 0.2s;
            outline: none;
        }
        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            border-color: var(--powder-blue);
        }
        .form-group textarea { resize: vertical; min-height: 120px; }
        .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; }
        .btn-submit {
            width: 100%;
            background: var(--royal-blue);
            color: white;
            border: none;
            padding: 1rem;
            border-radius: 10px;
            font-family: 'DM Sans', sans-serif;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s, transform 0.1s;
            margin-top: 0.5rem;
        }
        .btn-submit:hover { background: var(--royal-blue-dark); transform: translateY(-1px); }
        .btn-submit:active { transform: translateY(0); }

        /* ── SUCCESS/ERROR ALERTS ── */
        .alert {
            padding: 0.9rem 1.2rem;
            border-radius: 10px;
            margin-bottom: 1.2rem;
            font-size: 0.9rem;
            font-weight: 500;
        }
        .alert-success { background: #d1fae5; color: #065f46; border: 1px solid #a7f3d0; }
        .alert-error { background: #fee2e2; color: #991b1b; border: 1px solid #fecaca; }

        /* ── FOOTER ── */
        footer {
            background: var(--royal-blue);
            color: rgba(255,255,255,0.65);
            text-align: center;
            padding: 2rem 5%;
            font-size: 0.88rem;
        }
        footer strong { color: white; }

        /* ── RESPONSIVE ── */
        @media (max-width: 768px) {
            .about-grid, .contact-wrapper { grid-template-columns: 1fr; gap: 2.5rem; }
            .form-row { grid-template-columns: 1fr; }
            .hero-stats { gap: 1.5rem; }
            .nav-links { display: none; }
        }

        /* ── FADE IN ── */
        .fade-in {
            opacity: 0;
            transform: translateY(24px);
            animation: fadeUp 0.7s ease forwards;
        }
        @keyframes fadeUp {
            to { opacity: 1; transform: translateY(0); }
        }
        .delay-1 { animation-delay: 0.15s; }
        .delay-2 { animation-delay: 0.3s; }
        .delay-3 { animation-delay: 0.45s; }
        .delay-4 { animation-delay: 0.6s; }
    </style>
</head>
<body>

    {{-- NAVBAR --}}
    <nav>
        <div class="nav-logo">Edu<span>Vision</span></div>
        <ul class="nav-links">
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#contact" class="nav-cta">Get Started</a></li>
        </ul>
    </nav>

    {{-- HERO --}}
    <section id="hero">
        <div class="hero-blob"></div>
        <div class="hero-content">
            <div class="hero-badge fade-in">✦ School Project 2024</div>
            <h1 class="hero-title fade-in delay-1">
                Empowering <em>Students</em> for a Better Future
            </h1>
            <p class="hero-subtitle fade-in delay-2">
                A platform designed to connect, educate, and inspire. 
                Discover resources, build skills, and unlock your full potential.
            </p>
            <div class="hero-btns fade-in delay-3">
                <a href="#services" class="btn-primary">Explore Services</a>
                <a href="#contact" class="btn-secondary">Contact Us</a>
            </div>
            <div class="hero-stats fade-in delay-4">
                <div>
                    <div class="stat-num">500+</div>
                    <div class="stat-label">Students</div>
                </div>
                <div>
                    <div class="stat-num">30+</div>
                    <div class="stat-label">Programs</div>
                </div>
                <div>
                    <div class="stat-num">98%</div>
                    <div class="stat-label">Satisfaction</div>
                </div>
            </div>
        </div>
    </section>

    {{-- ABOUT --}}
    <section id="about">
        <div class="about-grid">
            <div class="about-text">
                <div class="section-label">Who We Are</div>
                <h2 class="section-title">Building Tomorrow's Leaders, Today</h2>
                <p>
                    We are a dedicated team of educators and innovators committed to providing quality 
                    education and meaningful experiences for every student who walks through our doors.
                </p>
                <p>
                    Our mission is simple — to create an environment where learning is not just a task, 
                    but an adventure. We believe every student has the potential to achieve greatness.
                </p>
            </div>
            <div class="about-visual">
                <div class="about-card">
                    <div class="about-card-title">Our Vision</div>
                    <p>To become the leading educational platform that bridges the gap between classroom learning and real-world application.</p>
                    <div>
                        <span class="about-pill">Innovation</span>
                        <span class="about-pill">Excellence</span>
                        <span class="about-pill">Community</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- SERVICES --}}
    <section id="services">
        <div class="services-header">
            <div class="section-label">What We Offer</div>
            <h2 class="section-title">Our Services</h2>
        </div>
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">📚</div>
                <h3>Academic Tutoring</h3>
                <p>One-on-one and group sessions with experienced tutors covering all major subjects from basic to advanced levels.</p>
            </div>
            <div class="service-card">
                <div class="service-icon">💡</div>
                <h3>Skill Development</h3>
                <p>Workshops and training programs designed to equip students with critical thinking and problem-solving skills.</p>
            </div>
            <div class="service-card">
                <div class="service-icon">🎓</div>
                <h3>Career Guidance</h3>
                <p>Professional counseling to help students discover their strengths and map out a clear path toward their goals.</p>
            </div>
            <div class="service-card">
                <div class="service-icon">🌐</div>
                <h3>Online Learning</h3>
                <p>Access to a library of curated digital resources, video lessons, and interactive modules anytime, anywhere.</p>
            </div>
        </div>
    </section>

    {{-- CONTACT --}}
    <section id="contact">
        <div class="contact-wrapper">
            <div class="contact-info">
                <div class="section-label">Reach Out</div>
                <h2 class="section-title">Get In Touch</h2>
                <p>Have questions or want to enroll? Fill out the form and our team will get back to you within 24 hours.</p>
                <div class="contact-item">
                    <div class="contact-icon">📍</div>
                    <span>123 University Ave, Davao City</span>
                </div>
                <div class="contact-item">
                    <div class="contact-icon">📧</div>
                    <span>hello@eduvision.edu.ph</span>
                </div>
                <div class="contact-item">
                    <div class="contact-icon">📞</div>
                    <span>+63 912 345 6789</span>
                </div>
            </div>

            <div class="contact-form">

                {{-- Success/Error messages --}}
                @if(session('success'))
                    <div class="alert alert-success">✅ {{ session('success') }}</div>
                @endif
                @if($errors->any())
                    <div class="alert alert-error">⚠️ Please fix the errors below.</div>
                @endif

                <form action="{{ route('contact.submit') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="first_name" value="{{ old('first_name') }}" placeholder="Juan" required>
                            @error('first_name')<small style="color:red">{{ $message }}</small>@enderror
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="last_name" value="{{ old('last_name') }}" placeholder="Dela Cruz" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" name="email" value="{{ old('email') }}" placeholder="juan@email.com" required>
                        @error('email')<small style="color:red">{{ $message }}</small>@enderror
                    </div>
                    <div class="form-group">
                        <label>Subject</label>
                        <select name="subject">
                            <option value="">Select a topic...</option>
                            <option value="enrollment" {{ old('subject') == 'enrollment' ? 'selected' : '' }}>Enrollment Inquiry</option>
                            <option value="tutoring" {{ old('subject') == 'tutoring' ? 'selected' : '' }}>Tutoring Services</option>
                            <option value="other" {{ old('subject') == 'other' ? 'selected' : '' }}>Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Message</label>
                        <textarea name="message" placeholder="Write your message here..." required>{{ old('message') }}</textarea>
                        @error('message')<small style="color:red">{{ $message }}</small>@enderror
                    </div>
                    <button type="submit" class="btn-submit">Send Message →</button>
                </form>
            </div>
        </div>
    </section>

    {{-- FOOTER --}}
    <footer>
        <p>&copy; {{ date('Y') }} <strong>EduVision</strong>. All rights reserved. Made with ❤️ as a School Project.</p>
    </footer>

</body>
</html>