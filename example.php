<?php if ($auth):?>
      <li class="">
        <a class="" href="/account">Личный кабинет</a>
       </li>
        <li class="">
            <a class="" href="/account/logout">Выйти</a>
        </li>
<?php else: ?>
    <form method="post" action="/account/auth" class="">
        <input name="email" class="" type="email" placeholder="e-mail">
        <input name="password" class="" type="password" placeholder="password">
        <button class="" type="submit">Войти</button>
    </form>
        <li class="">
            <a class="" href="/account/registration">Регистрация</a>
        </li>
<?php  endif;?>
