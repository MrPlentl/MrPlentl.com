<?php
// This is a temporary Home page throw together real quick until I can get my main site rolled out!
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Brandon Plentl - Resume</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Cormorant+Garamond:wght@600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f8f9fa;
      color: #171717;
    }
    .header-name {
      font-family: 'Cormorant Garamond', serif;
      font-size: 2.8rem;
      font-weight: 600;
      color: #171717;
    }
    .header-name .last-name {
      color: #788e89;
    }
    .section-title {
      font-size: 1.1rem;
      font-weight: 600;
      color: #171717;
      border-bottom: 2px solid #788e89;
      padding-bottom: 4px;
      margin-bottom: 12px;
    }
    .contact-info {
      font-size: 0.75rem;
      color: #171717;
    }
    .contact-info strong {
      font-weight: 600;
    }
    .skills-group h6 {
      font-size: 0.9rem;
      font-weight: 600;
      color: #171717;
      margin-bottom: 8px;
    }
    .experience-title {
      font-weight: 600;
      font-size: 1rem;
    }
    .experience-company {
      font-size: 0.9rem;
      color: #595959;
    }
    .experience-date {
      font-style: italic;
      font-size: 0.8rem;
      color: #595959;
    }
    .bullet-list {
      padding-left: 1.2rem;
      font-size: 0.9rem;
    }
    .bullet-list li {
      margin-bottom: 6px;
    }
    .first-name, .last-name {
        white-space: nowrap; /* Prevents breaking inside the name */
    }
    .first-name {
        padding-right: 1rem;
    }
    @media (max-width: 768px) {
      .header-name {
        font-size: 2.2rem;
      }
      .section-title {
        font-size: 1rem;
      }
    }
    @media print {
      body { background: white; }
      .container { max-width: 100%; }
    }
  </style>
</head>
<body>
  <div class="container py-4 py-md-5">
    <!-- Header -->
    <header class="text-center mb-4">
    <h1 class="header-name mb-0 d-block">
        <span class="first-name d-block d-md-inline">B R A N D O N</span>
        <span class="last-name d-block d-md-inline">P L E N T L</span>
    </h1>
    <p class="fs-5 text-muted fw-light">Senior Full Stack Engineer</p>
    </header>

    <!-- Contact Info -->
    <div class="border-top border-bottom border-secondary-subtle py-2 mb-4 text-center text-md-start">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="row g-3 contact-info">
            <div class="col-sm-6 col-lg-3">
              <strong>A:</strong> Ft. Worth, TX
            </div>
            <div class="col-sm-6 col-lg-3">
              <strong>P:</strong> 
            </div>
            <div class="col-sm-6 col-lg-3">
              <strong>E:</strong> bplentl@gmail.com
            </div>
            <div class="col-sm-6 col-lg-3">
              <strong>L:</strong> <a href="https://www.linkedin.com/in/MrPlentl" class="text-decoration-none">linkedin.com/in/MrPlentl</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Objective -->
    <section class="mb-5">
      <h2 class="section-title">OBJECTIVE</h2>
      <p class="mb-0">
        Senior Full Stack Engineer with 15+ years of experience designing and deploying scalable web applications using ReactJS, NodeJS, PHP, and RESTful APIs. Seeking to join a collaborative team focused on building modern, high-performance applications using the latest technologies and best practices.
      </p>
    </section>

    <!-- Skills -->
    <section class="mb-5">
      <h2 class="section-title">SKILLS</h2>
      <div class="row">
        <div class="col-md-4 mb-4">
          <h6 class="skills-group">15+ yrs</h6>
          <ul class="bullet-list list-unstyled">
            <li>PHP (OOP, Laravel)</li>
            <li>HTML5 & CSS3 (Responsive Design)</li>
            <li>UI/UX Best Practices</li>
            <li>Apache Web Server Config</li>
            <li>SQL Databases (MySQL, PSQL)</li>
            <li>LAMP Stack Deployment</li>
            <li>Version Control (Git, GitHub, SVN)</li>
            <li>Customer Support</li>
          </ul>
        </div>
        <div class="col-md-4 mb-4">
          <h6 class="skills-group">7+ yrs</h6>
          <ul class="bullet-list list-unstyled">
            <li>ReactJS (Hooks, Context API)</li>
            <li>NodeJS (Express, RESTful API)</li>
            <li>JavaScript (ES6+, API Integration)</li>
            <li>RESTful API Design</li>
            <li>API Testing and Documentation</li>
            <li>WordPress (Theme & Plugin Dev)</li>
            <li>Project Management</li>
          </ul>
        </div>
        <div class="col-md-4 mb-4">
          <h6 class="skills-group">3 yrs</h6>
          <ul class="bullet-list list-unstyled">
            <li>CI/CD Pipelines (GitHub / Jenkins)</li>
            <li>Golang</li>
            <li>Authentication (JWT)</li>
            <li>Docker</li>
          </ul>
        </div>
      </div>
    </section>

    <!-- Work Experience -->
    <section class="mb-5">
      <h2 class="section-title">WORK EXPERIENCE</h2>

      <!-- IBM Cloud -->
      <div class="mb-4">
        <div class="d-flex justify-content-between flex-wrap">
          <div>
            <div class="experience-title">Full Stack Software Engineer</div>
            <div class="experience-company">IBM Cloud, Dallas, TX</div>
          </div>
          <div class="experience-date text-end">March 2018 – Present</div>
        </div>
        <div class="mt-2">
          <strong>Microservices & Distributed Systems</strong>
          <ul class="bullet-list">
            <li>Architected and deployed core components of the IBM Cloud Support Center, a large-scale internal platform built with ReactJS and NodeJS, integrating with enterprise systems such as ServiceNow and Salesforce.</li>
            <li>Designed and implemented RESTful APIs to support real-time communication and cross-platform data synchronization between internal tools.</li>
            <li>Developed backend microservices and integrations using NodeJS focusing on scalability and maintainability.</li>
          </ul>

          <strong>Cloud Infrastructure & DevOps</strong>
          <ul class="bullet-list">
            <li>Automated CI/CD pipeline automation using GitHub Actions and Jenkins, improving deployment reliability and reducing delivery time.</li>
            <li>Performed database migrations and optimizations across Oracle, MySQL, and PostgreSQL environments.</li>
          </ul>

          <strong>Frontend & Platform Development</strong>
          <ul class="bullet-list">
            <li>Built internal tools for leadership, automating configuration updates and cross-system data synchronization, reducing manual workload by 99%</li>
            <li>Collaborated across multiple teams to plan, prioritize, and deliver software releases within an Agile/Scrum environment.</li>
          </ul>
        </div>
      </div>

      <!-- Daystar -->
      <div class="mb-4">
        <div class="d-flex justify-content-between flex-wrap">
          <div>
            <div class="experience-title">Webmaster / PHP Developer</div>
            <div class="experience-company">Daystar Television Network, Bedford, TX</div>
          </div>
          <div class="experience-date text-end">April 2011 – February 2018</div>
        </div>
        <ul class="bullet-list mt-2">
          <li>Developed all Daystar company websites (15+) including the flagship site</li>
          <li>Created the online Giving platform with an Admin Dashboard and Reporting</li>
          <li>Engineered API Integrations for Zip Code search and the Online Schedule</li>
          <li>Built an On Demand platform by integrating with our Video Hosting Provider</li>
          <li>Email Marketing using MailChimp (Campaign Creation and List Management)</li>
          <li>Online Support for all websites, Giving platform, Live Stream and the eStore</li>
          <li>Maintain and Oversee Online Stability of Systems</li>
          <li>Customer Support for services through phone calls and email</li>
          <li>AWS / Azure Cloud Integrations and Server Deployment</li>
        </ul>
      </div>

      <!-- DataVoice -->
      <div class="mb-4">
        <div class="d-flex justify-content-between flex-wrap">
          <div>
            <div class="experience-title">Development / Tech Support / Project Manager</div>
            <div class="experience-company">DataVoice International, Allen, TX</div>
          </div>
          <div class="experience-date text-end">2006 – 2010</div>
        </div>
        <ul class="bullet-list mt-2">
          <li>PHP code maintenance on production software</li>
          <li>MySQL database design, management and optimization</li>
          <li>Responsible for upgrading clients with new software</li>
          <li>Web Design (Company website & Support Portal)</li>
          <li>C# used to create automation utilities</li>
          <li>Telephony / VOIP</li>
          <li>Networking / Firewall Management</li>
          <li>Customer Support</li>
        </ul>
      </div>
    </section>

    <!-- Education -->
    <section class="mb-5">
      <h2 class="section-title">EDUCATION</h2>
      <div class="d-flex justify-content-between flex-wrap">
        <div>
          <div class="fw-semibold">Software Applications and Programming</div>
          <div>ITT Technical Institute, Richardson, TX</div>
        </div>
        <div class="text-end experience-date">March 2005 – June 2007</div>
      </div>
      <p class="mt-2 mb-0"><em>Relevant Coursework:</em> Object-Oriented Programming (Java, C++), DB Design, Web Development</p>
    </section>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>