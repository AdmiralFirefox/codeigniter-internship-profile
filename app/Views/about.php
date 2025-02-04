<?= $this->extend('layout/root_layout') ?>

<?= $this->section('content') ?>
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
<?= $this->endsection() ?>

<?= $this->section('scripts') ?>
<script type="module" src="/scripts/navbar.js"></script>
<script type="module" src="/scripts/titleslide.js"></script>
<script type="module" src="/scripts/fadeupanimate.js"></script>
<script type="module" src="/scripts/accordion.js"></script>
<?= $this->endsection() ?>