<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->setVar('site_title', 'James Joseph Cuadra | Portfolio')->include('components/head') ?>
</head>

<body>
    <?= $this->include('components/header') ?>

    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <?= $this->renderSection('scripts') ?>
</body>

</html>