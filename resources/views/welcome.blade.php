<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dinesh Nakum | Backend Developer - Portfolio</title>
        <meta name="description" content="Hi, I'm Dinesh, a Backend Developer specializing in Laravel, PHP, Vue.js, Backend Development, FullStack, Database, MySQL, JQuery, Bootstrap, TailwindCSS, API Integrate, Git and GitHub. Check out my portfolio featuring my best work in Software Engineering. Let's collaborate!">

        <link rel="icon" href="{{ asset('assets/icon.png') }}" sizes="16x16" type="image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta property="og:title" content="Dinesh Nakum | Backend Developer Portfolio">
        <meta property="og:description" content="Check out my portfolio showcasing my work in [Industry].">
        <meta property="og:image" content="{{ asset('assets/me.jpeg') }}">
        <meta property="og:url" content="https://yourportfolio.com">
        <meta property="og:type" content="website">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300;400;500;600&family=Kalam:wght@300;400;700&display=swap" rel="stylesheet">

        <!-- Styles / Scripts -->
        @vite('resources/css/client.css')
    </head>
    <body>
        <div class="ghibli-bg">
            <div class="clouds"></div>
            <div class="clouds clouds-2"></div>
            <div class="ghibli-decoration"></div>

            <!-- Header -->
            <header>
                <div class="container">
                    <nav>
                        <div class="logo">Dinesh Nakum</div>
                        <ul class="nav-links">
                            <li><a href="#home">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#skills">Skills</a></li>
                            <li><a href="#projects">Projects</a></li>
                            <li><a href="#experience">Experience</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                        <button class="mobile-menu-btn" id="mobileMenuBtn">
                            <i class="fas fa-bars"></i>
                        </button>
                    </nav>
                </div>
            </header>

            <!-- Hero Section -->
            <section class="hero" id="home">
                <div class="container">
                    <div class="hero-content">
                        <div class="hero-text">
                            <h1>Hi, I'm <span class="highlight">Dinesh Nakum</span></h1>
                            <p class="subtitle">Backend Developer specializing in PHP, Laravel, MySQL, API integration and Vue.js</p>
                            <div class="hero-buttons">
                                <a href="#contact" class="btn">Get In Touch</a>
                                <a href="#projects" class="btn btn-outline">View My Work</a>
                            </div>
                            <div class="social-links">
                                <a target="_blank" href="https://github.com/Dineshnakum">
                                    <i class="fab fa-github"></i>
                                </a>
                                <a target="_blank" href="https://www.linkedin.com/in/dineshnakum">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                                <a target="_blank" href="https://x.com/DineshNakum07">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </div>
                        </div>
                        <div class="hero-image">
                            <div class="ghibli-character">
                                <img src="{{ asset('assets/icon.png') }}" alt="my photo">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- About Section -->
            <section class="about" id="about">
                <div class="container">
                    <div class="section-title">
                        <h2>About Me</h2>
                    </div>
                    <div class="about-content">
                        <div class="about-text">
                            <p>I am Dinesh Nakum, a dedicated Backend Developer with expertise in PHP, Laravel, MySQL, and API integration. I have experience developing dynamic websites, optimizing backend performance, and ensuring seamless front-end integration. </p>
                            <p>My work focuses on building scalable, high-performance applications while maintaining clean and efficient code. I have successfully handled multiple projects, including CRM systems, portfolio websites, and business automation tools.</p>
                            <p>With a strong passion for learning and innovation, I continuously explore new technologies to enhance my development skills. I specialize in creating reusable code structures, improving website security, and integrating third-party APIs like WhatsApp Business API.</p>
                            <p>My collaborative approach allows me to work effectively with front-end teams, ensuring smooth project execution and delivering user-friendly web solutions.</p>
                        </div>
                        <div class="about-image">
                            <div class="ghibli-illustration">
                                <img src="{{ asset('assets/about.jpg') }}" alt="photo">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Skills Section -->
            <section class="skills" id="skills">
                <div class="container">
                    <div class="section-title">
                        <h2>My Skills</h2>
                    </div>
                    <div class="skills-container">
                        <div class="skill-category">
                            <h3>Frontend</h3>
                            <div class="skill-item">
                                <div class="skill-name">
                                    <span>HTML/CSS</span>
                                    <span>Bootstrap</span>
                                </div>
                            </div>
                            <div class="skill-item">
                                <div class="skill-name">
                                    <span>JavaScript</span>
                                    <span>JQuery</span>
                                </div>
                            </div>
                            <div class="skill-item">
                                <div class="skill-name">
                                    <span>Twailwind</span>
                                    <span>Vue.js</span>
                                </div>
                            </div>
                        </div>
                        <div class="skill-category">
                            <h3>Backend Development</h3>
                            <div class="skill-item">
                                <div class="skill-name">
                                    <span>PHP</span>
                                    <span>Laravel</span>
                                </div>
                            </div>
                            <div class="skill-item">
                                <div class="skill-name">
                                    <span>API Integrate</span>
                                    <span>Node.js</span>
                                </div>
                            </div>
                        </div>
                        <div class="skill-category">
                            <h3>Database</h3>
                            <div class="skill-item">
                                <div class="skill-name">
                                    <span>MySQL</span>
                                </div>
                            </div>
                            <div class="skill-item">
                                <div class="skill-name">
                                    <span>MongoDB</span>
                                </div>
                            </div>
                        </div>
                        <div class="skill-category">
                            <h3>Other</h3>
                            <div class="skill-item">
                                <div class="skill-name">
                                    <span>Git & GitHub</span>
                                </div>
                            </div>
                            <div class="skill-item">
                                <div class="skill-name">
                                    <span>Postman</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Projects Section -->
            <section class="projects" id="projects">
                <div class="container">
                    <div class="section-title">
                        <h2>Projects & Contributions</h2>
                    </div>
                    <div class="projects-container">
                        <div class="project-card">
                            <div class="project-info">
                                <h3>Dynamic Photo Studio Website</h3>
                                <h4>Professional Work at CM Websolution</h4>
                                <p>I developed a Dynamic Photo Studio Website using PHP, Laravel, HTML, CSS, and Bootstrap, ensuring seamless front-end and back-end integration. The project focused on efficient server-side logic, reusable code, and optimized performance.</p>
                                <div class="project-tech">
                                    <span class="tech-tag">Laravel</span>
                                    <span class="tech-tag">PHP</span>
                                    <span class="tech-tag">MySQL</span>
                                    <span class="tech-tag">JQuery</span>
                                </div>
                                <div class="project-links">
                                    <a target="_blank" href="https://photolinestudio.com/">
                                        <i class="fas fa-external-link-alt"></i> Live Demo
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="project-card">
                            <div class="project-info">
                                <h3>Company Portfolio Website</h3>
                                <h4>Professional Work at CM Websolution</h4>
                                <p>I developed a Company Portfolio Website using PHP, Laravel, HTML, CSS, and Bootstrap to showcase company details, services, projects, and customer reviews. It includes a dynamic admin panel for easy content management and ensures a responsive, user-friendly experience.</p>
                                <div class="project-tech">
                                    <span class="tech-tag">Laravel</span>
                                    <span class="tech-tag">Bootstrap</span>
                                    <span class="tech-tag">JQuery</span>
                                    <span class="tech-tag">HTML/CSS</span>
                                </div>
                                <div class="project-links">
                                    <a target="_blank" href="https://lgmgroup.in/">
                                        <i class="fas fa-external-link-alt"></i>
                                        Live Demo
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="project-card">
                            <div class="project-info">
                                <h3>Content Management API</h3>
                                <h4>Professional Work at CM Websolution</h4>
                                <p>I developed a CRM Website using PHP, Laravel, and MySQL to manage leads, track interactions, and automate follow-ups. It features a user-friendly dashboard with role-based access and real-time data updates, ensuring efficient customer management.</p>
                                <div class="project-tech">
                                    <span class="tech-tag">HTML/CSS</span>
                                    <span class="tech-tag">JavaScript</span>
                                    <span class="tech-tag">Bootstrap</span>
                                    <span class="tech-tag">Laravel</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Experience Section -->
            <section class="experience" id="experience">
                <div class="container">
                    <div class="section-title">
                        <h2>My Experience</h2>
                    </div>
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-content">
                                <div class="timeline-date">07/2024 - Present</div>
                                <h3 class="timeline-company">CM Websolution</h3>
                                <p class="timeline-position">Backend Developer</p>
                                <p>I work as a Backend Developer, managing server-side logic using PHP, Laravel, and MySQL. I collaborate with the front-end team, integrate third-party APIs, and develop dynamic websites with optimized performance.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-content">
                                <div class="timeline-date">01/2024 - 06/2024</div>
                                <h3 class="timeline-company">Virtual Carry</h3>
                                <p class="timeline-position">Backend Developer Intern</p>
                                <p>As a Backend Developer Intern, I gained hands-on experience with PHP, Laravel, MongoDB, and Node.js. I contributed to multiple projects, improving performance, debugging issues, and learning backend development best practices.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-content">
                                <div class="timeline-date">06/2023 - 07/2023</div>
                                <h3 class="timeline-company">Fuerte Developers</h3>
                                <p class="timeline-position">Web Developer Intern</p>
                                <p>During my Web Developer Internship, I worked on frontend and backend components, gaining experience in web development processes and enhancing my problem-solving skills.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Contact Section -->
            <section class="contact" id="contact">
                <div class="container">
                    <div class="section-title">
                        <h2>Get In Touch</h2>
                    </div>
                    <div class="contact-container">
                        <div class="contact-info">
                            <h3>Let's talk about your project</h3>
                            <p>I'm currently available for freelance work or full-time positions. Feel free to reach out to discuss your project requirements or just to say hello!</p>
                            <div class="contact-details">
                                <div class="contact-item">
                                    <i class="fas fa-envelope"></i>
                                    <span>
                                        <a href="mailto:dineshnakum579@gmail.com">
                                            dineshnakum579@gmail.com
                                        </a>
                                    </span>
                                </div>
                                <div class="contact-item">
                                    <i class="fas fa-phone"></i>
                                    <span>
                                        <a href="tel:+91 7990763918">
                                            +91 7990763918
                                        </a>
                                    </span>
                                </div>
                                <div class="contact-item">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>Rajkot, Gujarat, India</span>
                                </div>
                            </div>
                        </div>
                        <div class="contact-form">
                            <form method="post" id="contact_me" action="{{ route('contact') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control" required>
                                    <p class="error" id="name_error"></p>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control">
                                    <p class="error" id="email_error"></p>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" name="phone" id="phone" class="form-control">
                                    <p class="error" id="phone_error"></p>
                                </div>
                                <div class="form-group">
                                    <label for="subject">Subject</label>
                                    <input type="text" name="subject" id="subject" class="form-control">
                                    <p class="error" id="subject_error"></p>
                                </div>
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea id="message" name="message" class="form-control"></textarea>
                                    <p class="error" id="message_error"></p>
                                </div>
                                <p class="error" id="form_error"></p>
                                <button type="submit" id="contact_btn" class="btn">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

            <footer>
                <div class="container">
                    <p class="footer-text">&copy; 2025 Dinesh Nakum. All rights reserved.</p>
                </div>
            </footer>
        </div>
        @vite('resources/js/client.js')
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                $("#contact_me").submit(function(e) {
                    e.preventDefault();
                    let btn = $('#contact_btn');
                    let form = $(this);
                    form.find('.error').text('');
                    let btnText = btn.text();
                    btn.text('Sending Message...');
                    btn.attr('disabled','disabled');

                    var formData = form.serialize();
                    $.ajax({
                        url: form.attr("action"),
                        type: form.attr("method"),
                        data: formData,
                        dataType: "json",
                        success: function(response) {
                            btn.text(btnText);
                            btn.removeAttr('disabled')
                            alert("Form submitted successfully!");
                        },
                        error: function(xhr, status, error) {
                            btn.text(btnText);
                            btn.removeAttr('disabled');
                            console.log(xhr);
                            if(xhr.status == 422) {
                                let errors = xhr.responseJSON.errors;
                                $.each(errors, function(key, error) {
                                    form.find(`#${key}_error`).text(error[0])
                                });
                            } else if (xhr.status == 429) {
                                alert("Too Many request, try after some time");
                            } else {
                                alert("Something went wrong, try after some time.");
                            }
                        }
                    });
                });
            });
        </script>
    </body>
</html>
