<?php $this->title = $this->post['title']; ?>

<h1><?= htmlspecialchars($this->title) ?></h1>
<main id="posts">
    <article>
        <div class="date"><i>Posted on</i>
            <?= (new DateTime($this->post['date']))->format('d-M-Y') ?>
        </div>
        <p class="content"><?=$this->post['content']?></p>
    </article>
</main>
