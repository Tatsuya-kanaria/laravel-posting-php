<!DOCTYPE html>
<html lang="ja">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>投稿詳細</title>
</head>

<body>
  <!-- header -->
  <header>
    <nav>
      <div>
        <a href="{{ route('posts.index') }}">投稿アプリ</a>
      </div>
    </nav>
  </header>

  <!-- main -->
  <main>
    <article>
      <div>
        <h1>投稿詳細</h1>

        <div>
          <a href="{{ route('posts.index') }}">&lt; 戻る</a>
        </div>

        <div>
          <div>
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->content }}</p>
          </div>
        </div>
      </div>
    </article>
  </main>

  <!-- footer -->
  <footer>
    <p class="copyright">&copy; 投稿アプリ All rights reserved.</p>
  </footer>
</body>
</html>
