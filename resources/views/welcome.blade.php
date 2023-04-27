<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- favicon -->
    <link rel="icon" href="img/favicon.ico" type="image/x-icon"/>
    <!--    Font Awesome Icons-->
    <script src="https://kit.fontawesome.com/e0ac83d9c8.js" crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
            href="https://fonts.googleapis.com/css2?family=Oxygen+Mono&family=Oxygen:wght@300;400;700&display=swap"
            rel="stylesheet"
    />
    <!-- <link rel="stylesheet" href="../dist/style.css"> -->
    <link rel="stylesheet" href="style.css"/>
    <title>Shahrizan</title>
</head>
<body>
<!-- Nav Section -->
<div class="bg-secondary">
    <nav>
        <ul>
            <li>
                <h1>
                    <div class="logo-wrapper">
                        <div class="logo-image-wrapper">
                            <img class="logo-img" src="img/logo.png" alt="logo shahrizan">
                            <div class="gradient-border"></div>
                        </div>
                        <a class="logo-name" href="/">SRZ DEV</a>
                    </div>
                </h1>
            </li>
            <li><a href="/#projects">Projects</a></li>
            <li><a href="/profile">About</a></li>
            <li><a href="/#contact">Contact</a></li>
            <li>
                <a
                        target="_blank"
                        href="https://www.linkedin.com/in/shahrizan-webdev/"
                >
                    <i aria-hidden="true" class="fa-brands fa-linkedin fa-xl"></i>
                    <span class="sr-only">LinkedIn</span>
                </a
                >
            </li>
            <li>
                <a target="_blank" href="https://github.com/shrizaan">
                    <i aria-hidden="true" class="fa-brands fa-square-github fa-xl"></i>
                    <span class="sr-only">GitHub</span>
                </a>
            </li>
            <li>
                <a
                        class="button"
                        target="_blank"
                        href="https://drive.google.com/file/d/1jz_1m3aXCDCPEPRhHC_7lja3pdVW0s5K/view?usp=sharing"
                >Resume</a
                >
            </li>
        </ul>
    </nav>
</div>

<!--Intro Section -->
<div class="bg-planet"></div>
<div class="bg-primary-gradient">
    <section id="intro">
        <div class="starfield"></div>

        <p class="name">Hi, my name is <br> <span>Shahrizan<span class="dot-style">.</span></span></p>
        <h2>Web Developer</h2>
        <p>
            A highly motivated student currently majoring in Information Systems at
            Sriwijaya University. <br/>
            I am passionate about web development and focus on both front-end and
            back-end development.
        </p>
        <p>
            Please feel free to <a href="#">contact me</a> with any questions or
            opportunities.
        </p>
    </section>
</div>
<div class="gradient-border"></div>

<!-- Project Section -->
<div class="bg-primary">
    <section id="projects">
        <h2>Projects I'm proud of</h2>
        <div class="project-card-wrapper">
            <article class="project-card">
                <div class="project-info">
                    <p class="project-status"><b>Latest Project</b></p>
                    <h3 class="project-title">Full-Stack Javascript Developer Website Travel</h3>
                    <p class="project-description">This project is focused on developing skills in MERN Stack web application development. It covers various key components such as learning to use ReactJS library, creating APIs with NodeJS & ExpressJS, building reusable components from scratch, and using MongoDB to process non-sequel databases. Additionally, the project also emphasizes understanding UI/UX in building an online hotel booking website and usability testing to analyze user behavior on the website.

The project is designed for Full-Stack JavaScript Developers who want to enhance their skills in MERN Stack development. All tools used in the project are free and can be used on any operating system. The project starts with designing the website, including conducting research and creating information architecture. After that, participants will create a wireframe for a rough idea of the design.</p>
                    <p><b>Technologies used include:</b></p>
                    <ul class="tech-list">
                        <li>
                            <i class="fa-brands fa-bootstrap fa-xl"></i>
                            Bootstrap CSS
                        </li>
                      <li>
                            <i class="fa-brands fa-react fa-xl"></i>
                        React JS
                      </li>
                      <li>
                        <i class="fa-brands fa-node-js fa-xl"></i>  
                      </li>
                      Node JS
                    </ul>
                </div>
                <img class="project-image" src="img/portfolio-1.jpg"
                     alt="Screenshot of the Project"/>
            </article>
            <article class="project-card">
                <div class="project-info">
                    <p class="project-status"><b>College Assigment Project</b></p>
                    <h3 class="project-title">E-Commerce Site</h3>
                    <p class="project-description">This project is a website that serves as an e-commerce platform and was created using HTML, CSS, JavaScript, and Bootstrap CSS framework. The purpose of the project was to fulfill a web programming class assignment. The website has five pages: Home, About, Shop, News, and Contact.

The Home page gives a quick overview of the website and its products, while the About page provides information about the company that owns the website. The Shop page displays all the available products and allows users to add items to their cart and proceed to checkout. The News page provides the latest updates on the company and its products. Lastly, the Contact page allows users to get in touch with the company through a contact form.

This project enables students to showcase their web development skills by building a fully functional and visually appealing website. Bootstrap CSS provides a responsive design that ensures the website is accessible from any device. Overall, this project is an excellent opportunity for students to apply their knowledge in web development to a practical scenario.</p>
                    <ul class="tech-list">
                        <li>
                            <i class="fa-brands fa-html5 fa-xl"></i>
                            HTML
                        </li>
                        <li>
                            <i class="fa-brands fa-bootstrap fa-xl"></i>
                            Bootstrap CSS
                        </li>
                        <li>
                            <i class="fa-brands fa-square-js fa-xl"></i>
                            Javascript
                        </li>
                    </ul>
                </div>
                <img class="project-image" src="img/portfolio-2.jpg"
                     alt="Screenshot of the Wall of Wonder."/>
            </article>
        </div>
    </section>
</div>


<!-- Contact Section -->
<div class="gradient-border"></div>
<div class="bg-contact">
    <section id="contact">
        <div class="starfield"></div>
        <h2>Contact Me</h2>
        <p>
            If you would like to contact me, please feel free to email me.
            <br/>
            I will do my best to respond to your message as soon as possible.
            <br/>
            Thank you for visiting my web portfolio!
        </p>
        <a class="button" href="#">Email Me</a>
    </section>
</div>
<div class="gradient-border"></div>


<!-- Footer Section -->
<div class="bg-secondary">
    <footer>
        <h2 class="footer-title">Shahrizan<span>&boxbox;</span><span>Web Developer</span></h2>
        <ul>
            <li>
                <a
                        target="_blank"
                        href="https://www.linkedin.com/in/shahrizan-webdev/"
                >
                    <i aria-hidden="true" class="fa-brands fa-linkedin fa-2xl"></i>
                    <span class="sr-only">LinkedIn</span>
                </a
                >
            </li>
            <li>
                <a target="_blank" href="https://github.com/shrizaan">
                    <i aria-hidden="true" class="fa-brands fa-square-github fa-2xl"></i>
                    <span class="sr-only">GitHub</span>
                </a>
            </li>
            <li><a href="https://www.instagram.com/sh.rizaan">
                <i class="fa-brands fa-square-instagram fa-2xl"></i>
                <span class="sr-only">Instagram</span>
            </a></li>
            </a></li>
            <li><a href="mailto:shahrizan.learner@gmail.com">
                <i class="fas fa-envelope fa-2xl" aria-hidden="true"></i>
                <span class="sr-only">Email</span>
            </a></li>
        </ul>
        <p><small>&copy; 2022 Shahrizan. All rights reserved.</small></p>
    </footer>
</div>
</body>
</html>
