<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;900&display=swap">

    <link rel="stylesheet" href="public/assets/css/global.css">
</head>

<body>

    <div class="container">

        <?php include 'src/Includes/navigation.php' ?>

        <section id="home">
            <?php include 'src/Sections/Home.php' ?>
        </section>

        <section id="projects" class="py-5">
            <?php include 'src/Sections/Projects.php' ?>
        </section>

        <section id="services" class="py-5 bg-white rounded-5">
            <?php include 'src/Sections/Services.php' ?>
        </section>

        <section id="contact" class="py-5">
            <?php include 'src/Sections/Contact.php' ?>
        </section>

        <?php include 'src/Includes/footer.php' ?>

    </div>

    <script src="public/assets/libs/bootstrap-5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>