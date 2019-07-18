<div class="row justify-content-md-center">
  <div class="col-md-auto">
    <form method="post" action="/notes/add">
        <div class="form-group">
            <label for="title">Название заметки</label>
            <input type="text" class="form-control" id="title" name="title" autocomplete="off" required>
        </div>
        <div class="form-group">
            <textarea class="form-control" name="comment" cols="40" rows="15" required></textarea>
            <p class="hint" id="private"><input type="checkbox" id="private" checked>Приватная заметка</p>
        </div>
        <button type="submit" class="btn btn-secondary" >Добавить</button>
    </form>
  </div>
</div>
