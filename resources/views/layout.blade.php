<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{$title}}</title>
</head>
<body>
  <header>
    <nav>
      <ul>
        <li><a href="/orders">Заказы</a></li>
        <li><a href="/products">Товары</a></li>
        <li><a href="/job">График работы</a></li>
        <li><a href="/account">Личный кабинет</a></li>
      </ul>
    </nav>
  </header>

    {{$slot}}

  <footer>
    made_by maksimKa
  </footer>
</body>
</html>