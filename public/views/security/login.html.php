<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>
    <main>
        <form action="/auth/login" method="post" class="flex flex-col gap-2 px-8">
            <h1>Zaloguj się</h1>
            <input type="text" name="username" id="" placeholder="Nazwa użytwkonika">
            <input type="password" name="passwd" id="" placeholder="Hasło">
        </form>
    </main>
</body>
</html>