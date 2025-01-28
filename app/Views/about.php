<?= $this->extend('layout/root_layout') ?>

<?= $this->section('scripts') ?>
<script type="module" src="scripts/navbar.js" defer></script>
<script type="module" src="scripts/titleslide.js" defer></script>
<script type="module" src="scripts/fadeupanimate.js" defer></script>
<?= $this->endsection() ?>

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
<?= $this->endsection() ?>