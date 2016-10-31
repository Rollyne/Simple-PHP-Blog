<?php $this->title = 'Users'; ?>

<h1><?= htmlspecialchars($this->title) ?></h1>

<table>
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Full Name</th>
    </tr>
    <?php foreach ($this->users as $user) : ?>
        <tr>
            <th><?= $user['id'] ?></th>
            <th><?= $user['username'] ?></th>
            <th><?= $user['full_name'] ?></th>
        </tr>
    <?php endforeach ?>
</table>
