<div class="row justify-content-md-center">
    <?php foreach ($notes as $note): ?>
      <a class="a-note" href="/notes/open/<?php echo $note['id']; ?>">
    <div class="col-md-auto note" >

        <h2><?php echo $note['title']; ?></h2>
        <div >
          <?php echo $note['description']; ?>
        </div>
    </div>
    <?php endforeach; ?>
    </a>
</div>
<script src="/js/script.js"></script>
