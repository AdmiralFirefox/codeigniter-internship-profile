<?= $this->extend('layout/root_layout') ?>

<?= $this->section('scripts') ?>
<script type="module" src="scripts/navbar.js" defer></script>
<script type="module" src="scripts/titleslide.js" defer></script>
<script type="module" src="scripts/accordion.js" defer></script>
<?= $this->endsection() ?>

<?= $this->section('content') ?>
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