<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="IT Student Portfolio - Showcasing projects, skills, and experience">
    <meta name="keywords" content="portfolio, IT, web development, projects, student">
    <title>IT Portfolio | Your Name</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar" id="navbar">
        <div class="container">
            <div class="nav-wrapper">
                <a href="#home" class="logo">Portfolio</a>
                <button class="mobile-menu-btn" id="mobileMenuBtn" aria-label="Toggle menu">
                    <i class="fas fa-bars"></i>
                </button>
                <ul class="nav-menu" id="navMenu">
                    <li><a href="#home" class="nav-link">Home</a></li>
                    <li><a href="#about" class="nav-link">About</a></li>
                    <li><a href="#skills" class="nav-link">Skills</a></li>
                    <li><a href="#projects" class="nav-link">Projects</a></li>
                    <li><a href="#experience" class="nav-link">Experience</a></li>
                    <li><a href="#education" class="nav-link">Education</a></li>
                    <li><a href="#contact" class="nav-link">Contact</a></li>
                    <li>
                        <button class="theme-toggle" id="themeToggle" aria-label="Toggle theme">
                            <i class="fas fa-moon"></i>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="profile-image">
                    <div class="profile-circle">
                        <img src="Pics/sijey.png" alt="Your Name">
                    </div>
                </div>
                <h1 class="hero-title">Hi, I'm <span class="gradient-text">Your Name</span></h1>
                <p class="hero-subtitle">IT Student | Full Stack Developer | Tech Enthusiast</p>
                <p class="hero-description">
                    Passionate about creating innovative solutions and building modern web applications.
                    Currently pursuing my degree in Information Technology.
                </p>
                <div class="hero-buttons">
                    <a href="#contact" class="btn btn-primary">Get In Touch</a>
                    <a href="#projects" class="btn btn-secondary">View Projects</a>
                    <a href="assets/resume.pdf" download class="btn btn-outline">
                        <i class="fas fa-download"></i> Resume
                    </a>
                </div>
                <div class="social-links">
                    <a href="https://github.com/Cjheyy" target="_blank" rel="noopener noreferrer" aria-label="GitHub">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/mabbayad-christian-jay-g-6854233b7/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="mailto:mabbayad.christianjay.gazzingan@gmail.com" aria-label="Email">
                        <i class="fas fa-envelope"></i>
                    </a>
                    <a href="https://www.facebook.com/share/18cF9NcV9c" target="_blank" rel="noopener noreferrer" aria-label="Twitter">
                        <i class="fab fa-facebook"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about section-padding">
        <div class="container">
            <h2 class="section-title">About <span class="gradient-text">Me</span></h2>
            <div class="about-content">
                <div class="about-text">
                    <p>
                        I’m an Information Technology student passionate about building digital experiences and solving real-world problems through technology. I enjoy creating websites, applications, and systems that are not only functional but also clean, efficient, and user-friendly.
                    </p>
                    <p>
                        My interest in tech started from curiosity, wanting to understand how things work behind the screen. Over time, that curiosity grew into a strong passion for software development, continuous learning, and innovation. I enjoy exploring new technologies, improving my technical skills, and turning ideas into meaningful projects.
                    </p>
                    <p>
                        As an aspiring IT professional, I value adaptability, teamwork, and problem-solving. I’m constantly challenging myself to learn modern tools, frameworks, and development practices that help me grow both technically and creatively.
                        Outside of coding, I spend time exploring emerging technologies, learning new programming concepts, and staying updated with the latest trends in the tech industry.
                    </p>
                </div>
                <div class="about-cards">
                    <div class="about-card">
                        <div class="card-icon blue">
                            <i class="fas fa-code"></i>
                        </div>
                        <h3>Clean Code</h3>
                        <p>I focus on writing organized, maintainable, and scalable code while following modern development practices and design principles.</p>
                    </div>
                    <div class="about-card">
                        <div class="card-icon purple">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <h3>Problem Solver</h3>
                        <p>I enjoy analyzing challenges, thinking critically, and developing practical and efficient solutions.</p>
                    </div>
                    <div class="about-card">
                        <div class="card-icon pink">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h3>Continuous Learner</h3>
                        <p>Technology evolves quickly, and I’m always eager to expand my knowledge and improve my skills through learning and hands-on experience.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="skills section-padding">
        <div class="container">
            <h2 class="section-title">Technical <span class="gradient-text">Skills</span></h2>
            <div class="skills-grid">
                <!-- Frontend Skills -->
                <div class="skill-category">
                    <h3>Frontend</h3>
                    <div class="skill-items">
                        <div class="skill-item">
                            <i class="fab fa-html5" style="color: #e34c26;"></i>
                            <span>HTML5</span>
                        </div>
                        <div class="skill-item">
                            <i class="fab fa-css3-alt" style="color: #264de4;"></i>
                            <span>CSS3</span>
                        </div>
                        <div class="skill-item">
                            <i class="fab fa-js" style="color: #f0db4f;"></i>
                            <span>JavaScript</span>
                        </div>
                        <div class="skill-item">
                            <i class="fab fa-react" style="color: #61dafb;"></i>
                            <span>React</span>
                        </div>
                        <div class="skill-item">
                            <i class="fab fa-bootstrap" style="color: #7952b3;"></i>
                            <span>Bootstrap</span>
                        </div>
                    </div>
                </div>

                <!-- Backend Skills -->
                <div class="skill-category">
                    <h3>Backend</h3>
                    <div class="skill-items">
                        <div class="skill-item">
                            <i class="fab fa-node-js" style="color: #68a063;"></i>
                            <span>Node.js</span>
                        </div>
                        <div class="skill-item">
                            <i class="fab fa-python" style="color: #3776ab;"></i>
                            <span>Python</span>
                        </div>
                        <div class="skill-item">
                            <i class="fab fa-java" style="color: #f89820;"></i>
                            <span>Java</span>
                        </div>
                        <div class="skill-item">
                            <i class="fab fa-php" style="color: #777bb4;"></i>
                            <span>PHP</span>
                        </div>
                    </div>
                </div>

                <!-- Database Skills -->
                <div class="skill-category">
                    <h3>Database</h3>
                    <div class="skill-items">
                        <div class="skill-item">
                            <i class="fas fa-database" style="color: #4db33d;"></i>
                            <span>MongoDB</span>
                        </div>
                        <div class="skill-item">
                            <i class="fas fa-database" style="color: #336791;"></i>
                            <span>PostgreSQL</span>
                        </div>
                        <div class="skill-item">
                            <i class="fas fa-database" style="color: #00758f;"></i>
                            <span>MySQL</span>
                        </div>
                        <div class="skill-item">
                            <i class="fas fa-database" style="color: #cc2927;"></i>
                            <span>SQL</span>
                        </div>
                    </div>
                </div>

                <!-- Tools & Others -->
                <div class="skill-category">
                    <h3>Tools & Others</h3>
                    <div class="skill-items">
                        <div class="skill-item">
                            <i class="fab fa-git-alt" style="color: #f34f29;"></i>
                            <span>Git</span>
                        </div>
                        <div class="skill-item">
                            <i class="fab fa-github" style="color: #181717;"></i>
                            <span>GitHub</span>
                        </div>
                        <div class="skill-item">
                            <i class="fas fa-terminal" style="color: #4d4d4d;"></i>
                            <span>Linux</span>
                        </div>
                    </div>
                </div>

                <!-- Embedded Systems & Hardware -->
                <div class="skill-category">
                    <h3>Embedded Systems & Hardware</h3>
                    <div class="skill-items">
                        <div class="skill-item">
                            <i class="fas fa-microchip" style="color: #00979d;"></i>
                            <span>Arduino UNO</span>
                        </div>
                        <div class="skill-item">
                            <i class="fas fa-broadcast-tower" style="color: #e34c26;"></i>
                            <span>Sensors & Modules</span>
                        </div>
                        <div class="skill-item">
                            <i class="fas fa-project-diagram" style="color: #f0db4f;"></i>
                            <span>Circuit Design</span>
                        </div>
                        <div class="skill-item">
                            <i class="fas fa-tools" style="color: #61dafb;"></i>
                            <span>Hardware Troubleshooting</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Additional Skills -->
            <div class="additional-skills">
                <h3>Additional Skills</h3>
                <div class="skill-tags">
                    <span class="skill-tag">RESTful APIs</span>
                    <span class="skill-tag">Responsive Design</span>
                    <span class="skill-tag">Testing</span>
                    <span class="skill-tag">Problem Solving</span>
                    <span class="skill-tag">Team Collaboration</span>
                    <span class="skill-tag">Version Control</span>
                    <span class="skill-tag">UI/UX Design</span>
                    <span class="skill-tag">API Development</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="projects section-padding">
        <div class="container">
            <h2 class="section-title">Featured <span class="gradient-text">Projects</span></h2>
            <div class="projects-grid">
                <!-- Project 1 -->
                <div class="project-card">
                    <div class="project-image">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600&h=400&fit=crop" alt="E-Commerce Platform">
                        <div class="project-overlay">
                            <a href="#" class="project-link" target="_blank" rel="noopener noreferrer">
                                <i class="fas fa-external-link-alt"></i>
                            </a>
                            <a href="#" class="project-link" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                    <div class="project-content">
                        <h3>E-Commerce Platform</h3>
                        <p>A full-stack e-commerce website with user authentication, product management, shopping cart, and payment integration.</p>
                        <div class="project-tags">
                            <span>HTML</span>
                            <span>CSS</span>
                            <span>JavaScript</span>
                            <span>Node.js</span>
                            <span>MongoDB</span>
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
               

                <!-- Project 3 -->
               
                <!-- Project 4 -->

                <!-- Project 5 -->
                
                <!-- Project 6 -->
            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section id="experience" class="experience section-padding">
        <div class="container">
            <h2 class="section-title">Work <span class="gradient-text">Experience</span></h2>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-date">2024 - Present</div>
                        <h3>Web Development Intern</h3>
                        <h4>Tech Company Name</h4>
                        <p>Developing and maintaining web applications using modern technologies. Collaborating with senior developers on various projects and learning industry best practices.</p>
                        <ul>
                            <li>Built responsive web interfaces using HTML, CSS, and JavaScript</li>
                            <li>Implemented RESTful APIs and integrated third-party services</li>
                            <li>Participated in code reviews and agile development processes</li>
                        </ul>
                    </div>
                </div>
    </section>

    <!-- Education Section -->
    <section id="education" class="education section-padding">
        <div class="container">
            <h2 class="section-title">Education & <span class="gradient-text">Certifications</span></h2>
            <div class="education-grid">
                <div class="education-card">
                    <div class="education-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3>Bachelor of Science in Information Technology</h3>
                    <h4>Quezon City University (QCU)</h4>
                    <p class="education-date">2022 - 2026 (Expected)</p>
                    <p>Relevant Coursework: Data Structures, Algorithms, Database Management, Web Development, Software Engineering, Computer Networks</p>
                    <p><strong>GPA:</strong> N/A</p>
                </div>

                <div class="education-card">
                    <div class="education-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3>Web Development Bootcamp</h3>
                    <h4>Online Platform</h4>
                    <p class="education-date">2023</p>
                    <p>Intensive program covering full-stack web development, including HTML, CSS, JavaScript, Node.js, databases, and deployment.</p>
                </div>

                <div class="education-card">
                    <div class="education-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3>Responsive Web Design</h3>
                    <h4>freeCodeCamp</h4>
                    <p class="education-date">2022</p>
                    <p>Learned responsive web design principles, CSS Flexbox, CSS Grid, and accessibility best practices.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact section-padding">
        <div class="container">
            <h2 class="section-title">Get In <span class="gradient-text">Touch</span></h2>
            <p class="contact-subtitle">Have a question or want to work together? Feel free to reach out!</p>
            
            <div class="contact-content">
                <div class="contact-info">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <h3>Email</h3>
                            <a href="mailto:mabbayad.christianjay.gazzingan@gmail.com">mabbayad.christianjay.gazzingan@gmail.com</a>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div>
                            <h3>Phone</h3>
                            <a href="tel:+639625898446">+63 962 589 8446</a>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <h3>Project 8</h3>
                            <p>Quezon City, Philippines</p>
                        </div>
                    </div>

                    <div class="contact-social">
                        <a href="https://github.com/Cjheyy" target="_blank" rel="noopener noreferrer">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/mabbayad-christian-jay-g-6854233b7/" target="_blank" rel="noopener noreferrer">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="https://www.facebook.com/share/18cF9NcV9c" target="_blank" rel="noopener noreferrer">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </div>
                </div>

                <form class="contact-form" id="contactForm">
                    <div class="form-group">
                        <input type="text" id="name" name="name" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" name="email" placeholder="Your Email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" id="subject" name="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group">
                        <textarea id="message" name="message" rows="5" placeholder="Your Message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-paper-plane"></i> Send Message
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 Christian Jay Mabbayad. All rights reserved.</p>
        </div>
    </footer>

    <!-- Scroll to Top Button -->
    <button class="scroll-top" id="scrollTop" aria-label="Scroll to top">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script src="script.js"></script>
</body>
</html>
