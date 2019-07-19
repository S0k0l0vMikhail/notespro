<div class="row justify-content-md-center">
  <div class="col-md-auto">
    <form method="post" action="/notes/update/<?php echo $note['id']; ?>">
        <div class="form-group">
            <label for="title">Название заметки</label>
            <input type="text" class="form-control" id="title" name="title" autocomplete="off" required value="<?php echo $note['title']; ?>">
        </div>
        <div class="form-group">
            <textarea class="form-control" name="comment" cols="40" rows="15" required><?php echo $note['description']; ?></textarea>
        </div>
        <button type="submit" class="btn btn-secondary" >Изменить</button>
        <button type="submit" class="btn btn-secondary" name="delete">Удалить</button>
    </form>
  </div>
</div>
