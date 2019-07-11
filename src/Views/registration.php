<div class="row justify-content-md-center">
  <div class="col-md-auto">
    <h3>Зарегистрируйтесь или войдите,</h3> чтобы получить безграничные возможности.
  </div>
</div>
<div class="row justify-content-md-center ">
<div class="col-md-auto">
    <form method="post" action="/account/registration">
        <div class="form-group">
            <label for="name">Имя</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="введите имя" minlength="5" maxlength="10" required>
        </div>
        <div class="form-group">
            <label for="email">Ваша почта</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="введите E-mail" required>
        </div>
        <div class="row">
          <div class="form-group col-md-auto">
              <label for="password">Придумайте пароль</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="введите пароль" minlength="6" maxlength="20" required>
              <p id="notes" class="hint" hidden >От 6 до 20 знаков дорогуша</p>
          </div>
          <div class="form-group col-md-auto">
              <label for="password2">Повторите пароль</label>
              <input type="password" class="form-control" id="password2" name="password2" placeholder="введите пароль" minlength="6" maxlength="20" required>
          </div>
        </div>
        <p class="hint" id="hint"><input type="checkbox" id="rules" name="rules">  С <a href="/">правилами</a> сайта ознакомлен и согласен.</p>
        <button type="submit" class="btn btn-secondary" id="register" disabled>Зарегистрироваться</button>
    </form>
</div>
<div class="col-md-auto"></div>
<div class="col-md-auto">
  <form method="post" action="/account/auth">
    <div class="form-group">
        <label for="email">Почта</label>
        <input type="email" class="form-control" name="email" placeholder="введите E-mail" required>
    </div>
    <div class="form-group">
        <label for="password">Пароль</label>
        <input type="password" class="form-control" name="password" placeholder="введите пароль" minlength="6" maxlength="20" required>
    </div>
    <button type="submit" class="btn btn-secondary" id="login">Войти</button>
  </form>
</div>
</div>
<script src="/js/validate.js"></script>
