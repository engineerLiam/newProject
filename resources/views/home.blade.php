<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/style.css">
    <title>Home</title>
</head>

<body>
    <header>
        <img src="/images/logo.svg" alt="logo" width="100" height="100">
        <ul>
            <li><a href="{{ route('home') }}">Главная</a></li>
            <li><a href="{{ route('array') }}">Массивы</a></li>
        </ul>
    </header>
    <main>
        <img src="/images/img1.jpg" alt="image" width="300" height="300">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas non sapien odio. Ut eget scelerisque ipsum, finibus laoreet eros. Nam at pretium nibh, vitae egestas odio. Duis imperdiet sem et sem euismod, sollicitudin lobortis leo malesuada. Mauris porta at velit sit amet suscipit. Mauris laoreet, sapien tempor bibendum mollis, arcu lorem dapibus mauris, nec gravida urna nisl ac sapien. Praesent dignissim vel mi vel bibendum. Suspendisse dolor odio, sodales quis luctus eu, ornare eget orci. Integer congue sollicitudin augue eget sodales. Vestibulum consectetur dolor vitae nisl rhoncus, in condimentum arcu ultricies. Etiam ut mi eu nisl vestibulum aliquet. Sed id tempus lectus, at euismod metus. Nullam aliquet posuere aliquam.
        </p>
    </main>
    <footer>
        <p>
            &#169; Домбровская В.Д. 2024
        </p>
    </footer>
</body>

</html>