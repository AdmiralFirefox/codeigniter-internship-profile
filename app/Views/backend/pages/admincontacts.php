<?= $this->extend('layout/auth_layout') ?>

<?= $this->section('datatables') ?>
<!-- Bulma -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/1.0.1/css/bulma.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/2.2.1/css/dataTables.bulma.css" rel="stylesheet">
<?= $this->endsection() ?>

<?= $this->section('content') ?>
<div class="user-table-content">
    <table id="contactList" class="table is-striped" style="width:100%">
        <thead>
            <tr>
                <th>Email</th>
                <th>Name</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($contacts as $contact):?>
            <tr>
                <td><?= $contact['email'] ?></td>
                <td><?= $contact['name'] ?></td>
                <td><?= $contact['subject'] ?></td>
                <td><?= $contact['message'] ?></td>
                <td><?= $contact['created_at'] ?></td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>

<!-- <style>
body {
    background: red !important;
}
</style> -->
<?= $this->endsection() ?>

<?= $this->section('scripts') ?>
<script type="module" src="/scripts/navbar.js"></script>
<script type="module">
new DataTable("#contactList");
</script>

<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.datatables.net/2.2.1/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.2.1/js/dataTables.bulma.js"></script>
<?= $this->endsection() ?>