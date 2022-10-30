<!DOCTYPE html>
<html lang="ja">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>投稿一覧</title>
</head>

<body class>
  <!-- header -->
  <header>
    <nav>
      <a href="{{ route('posts.index') }}">投稿アプリ</a>
    </nav>
  </header>

  <!-- main -->
  <main>
    <article class="home">
      <h1>投稿一覧</h1>

        @if (session('flash_message'))
          <p>{{ session('flash_message') }}</p>
        @endif

        <div>
          <a href="{{ route('posts.create') }}">新規投稿</a>
        </div>
    </article>
  </main>

  <!-- footer -->
  <footer>
    <p class="copyright">&copy; 投稿アプリ All rights reserved.</p>
  </footer>
</body>
</html>
