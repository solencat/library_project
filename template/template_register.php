<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
    <title><?= $title ?? "" ?></title>
</head>
<body>
    <?php include 'component/navbar.php'; ?>
    <main class="container-fluid">
        <h1>S'inscrire</h1>
        <form action="" method="post">
            <input type="text" name="firstname" placeholder="saisir votre Prénom">
            <input type="text" name="lastname" placeholder="saisir votre Nom">
            <input type="text" name="email" placeholder="saisir votre Email">
            <input type="password" name="password" placeholder="saisir le mot de passe">
            <input type="password" name="confirm-password" placeholder="saisir le mot de passe">
            <input type="submit" value="Inscription" name="submit">

            <input type="file" name="img_profil" enctype="multipart/form-data">
        </form>
        <p><?= htmlspecialchars($data["msg"] ?? "", ENT_QUOTES, 'UTF-8') ?></p>
    </main>
</body>
</html>
