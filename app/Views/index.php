<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="assets/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="James Joseph Cuadra's profile website." />

    <!-- Icons -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
      integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="style.css" />
    <title>James Joseph Cuadra | Profile</title>

    <script
      src="https://cdn.jsdelivr.net/gh/dixonandmoe/rellax@master/rellax.min.js"
      defer
    ></script>
    <script type="module" src="scripts/navbar.js" defer></script>
    <script type="module" src="scripts/accordion.js" defer></script>
    <script type="module" src="scripts/animation.js" defer></script>
  </head>
  <body>
    <aside id="initialTextAnimation" class="initial-text-animation">
      <p>James Joseph Cuadra | Profile</p>
    </aside>

    <header>
      <nav class="desktop-navbar">
        <div>
          <h1 id="weblogo">//JJC</h1>
          <label for="check">
            <input type="checkbox" id="check" />
            <span></span>
            <span></span>
            <span></span>
          </label>
        </div>

        <div>
          <p id="scroll-home">Home</p>
          <p id="scroll-about">About</p>
          <p id="scroll-skills">Skills</p>
          <p id="scroll-projects">Projects</p>
          <p id="scroll-interests">Interests</p>
          <p id="scroll-questions">FAQ</p>
          <p id="scroll-contacts">Contact</p>
        </div>
      </nav>

      <nav class="mobile-navbar" id="mobile-navbar">
        <p id="scroll-home">Home</p>
        <p id="scroll-about">About</p>
        <p id="scroll-skills">Skills</p>
        <p id="scroll-projects">Projects</p>
        <p id="scroll-interests">Interests</p>
        <p id="scroll-questions">FAQ</p>
        <p id="scroll-contacts">Contact</p>
      </nav>

      <div class="navbar-overlay" id="navbar-overlay" />
    </header>

    <main>
      <div class="hero-section" id="hero-section">
        <div class="hero-title">
          <h1>Hello! I&apos;m</h1>
          <h1>James Joseph Cuadra</h1>
        </div>

        <div class="hero-landscape">
          <img src="assets/neon-landscape.webp" alt="" />
        </div>

        <div class="hero-mountain">
          <img src="assets/neon-mountains.webp" alt="" />
        </div>

        <div class="gradient-shadow"></div>
      </div>

      <div class="about-section" id="about-section">
        <div class="profile-picture">
          <img src="assets/photo-uniform.webp" alt="" />
          <h1 id="title-slide">About Me</h1>
        </div>

        <div class="about-content">
          <p id="fade-up-animation">
            I&apos;m currently taking my Computer Science Degree at West Visayas
            State University University, Iloilo City, Philippines. I like
            building and developing various software applications and
            knowledgeable in various technologies. I strive to deliver dynamic,
            user-friendly software applications that blend aesthetics and
            functionality seamlessly.
          </p>
          <p id="fade-up-animation">
            I stay up-to-date with the latest trends and best practices in the
            industry by continuously learning about new developments and
            exploring emerging technologies. I am continuously honing my skills,
            exploring new technologies and frameworks to expand my skill set,
            allowing me to deliver innovative solutions that address evolving
            challenges.
          </p>
          <p id="fade-up-animation">
            In addition to developing software applications, I enjoy hobbies
            such as gaming and watching YouTube and Netflix. I&apos;m also
            interested in AI and Machine Learning, particularly Computer Vision.
            I also love exploring new places I haven't been to whenever I have
            the time to do so.
          </p>
        </div>
      </div>

      <div class="skills-section" id="skills-section">
        <h1 id="title-slide">Skills</h1>

        <div class="skills-container">
          <div class="skill-content" id="fade-up-animation">
            <p>Frontend</p>
            <ul>
              <?php foreach ($frontend_skills as $key => $skills): ?>
                <li><?= $skills['skill_name'].($key === array_key_last($frontend_skills) ? '' : ',') ?></li>
              <?php endforeach; ?>
            </ul>
          </div>
          <div class="skill-content" id="fade-up-animation">
            <p>Backend</p>
            <ul>
              <?php foreach ($backend_skills as $key => $skills): ?>
                <li><?= $skills['skill_name'].($key === array_key_last($backend_skills) ? '' : ',') ?></li>
              <?php endforeach; ?>
            </ul>
          </div>
          <div class="skill-content" id="fade-up-animation">
            <p>Databases</p>
            <ul>
              <?php foreach ($databases_skills as $key => $skills): ?>
                <li><?= $skills['skill_name'].($key === array_key_last($databases_skills) ? '' : ',') ?></li>
              <?php endforeach; ?>
            </ul>
          </div>
          <div class="skill-content" id="fade-up-animation">
            <p>AI/ML</p>
            <ul>
              <?php foreach ($ml_skills as $key => $skills): ?>
                <li><?= $skills['skill_name'].($key === array_key_last($ml_skills) ? '' : ',') ?></li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      </div>

      <div class="projects-section" id="projects-section">
        <h1 id="title-slide">Projects</h1>
         <?php foreach ($projects as $project): ?>
            <ul class="projects-container">
              <li class="rev-block" id="reveal-animation">
                  <div class="project-content" id="reveal-opacity-animation">
                      <p><?= $project['project_name'] ?></p>
                      <p><?= $project['project_description'] ?></p>
                      <a href="<?= $project['project_link'] ?>" target="_blank">View the Site Here</a>
                  </div>
              </li>
            </ul>
        <?php endforeach?>
      </div>

      <div class="interests-section" id="interests-section">
        <h1 id="title-slide">Interests</h1>

        <div class="interests-content">
          <div class="interests-info" id="fade-up-animation">
            <div class="interests-icon">
              <img src="assets/youtube.png" alt="hobbies" />
            </div>
            <p>
              My hobbies include playing games, listen to music and watching
              Netflix and YouTube.
            </p>
          </div>

          <div class="interests-info" id="fade-up-animation">
            <div class="interests-icon">
              <img src="assets/microphone.png" alt="talents" />
            </div>
            <p>My talents include Speaking/VO and Dancing.</p>
          </div>
        </div>
      </div>

      <div class="questions-section" id="questions-section">
        <h1 id="title-slide">FAQ</h1>

        <div class="question-and-answer-content">
          <button class="accordion">What are your achievements?</button>
          <div class="panel">
            <p>
              One of my greatest achievement is graduating from junior to senior
              high school with high honors. Soon, I'll be graduating with a
              bachelor's degree in computer science and I'll do my best to
              attain that achievement.
            </p>
          </div>

          <button class="accordion">What are your strengths?</button>
          <div class="panel">
            <p>
              One of my greatest strength is my perseverance. I was an eagle
              scout and I tackle a lot of difficult challenges. Despite the
              difficulty, I won't back down until I reach my goal.
            </p>
          </div>

          <button class="accordion">
            What are your favorite music genres to listen to?
          </button>
          <div class="panel">
            <p>Jpop, Kpop, Rock, Hip-hop, Heavy metal and Classical Music.</p>
          </div>

          <button class="accordion">Can you please tell me a secret?</button>
          <div class="panel">
            <p>No.</p>
          </div>
        </div>
      </div>
    </main>

    <footer class="contacts-section" id="contacts-section">
      <div class="contact-info">
        <h1>Let&apos;s work together!</h1>
        <p>jamesjoseph.cuadra@wvsu.edu.ph</p>
      </div>
      <div class="contact-links">
        <a href="https://github.com/admiralfirefox" target="_blank">
          <i class="fa-brands fa-github"></i>
        </a>
        <a href="https://m.me/jjlcuadra" target="_blank">
          <i class="fa-brands fa-facebook-messenger"></i>
        </a>
        <a href="https://www.linkedin.com/in/jjlcuadra" target="_blank">
          <i class="fa-brands fa-linkedin-in"></i>
        </a>
      </div>
    </footer>
  </body>
</html>
