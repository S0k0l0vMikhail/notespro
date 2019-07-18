<div class="row justify-content-md-center">
    <?php foreach ($notes as $note): ?>
    <div class="col-md-auto note">
        <h2><?php echo $note['title']; ?></h2>
        <div class="">
          <?php echo $note['description']; ?>
        </div>
    </div>
    <?php endforeach; ?>
</div>
<script src="/js/script.js"></script>
