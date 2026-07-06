<?php if (isset($_GET['success'])): ?>
    <div class="alert alert-success">
        Message sent successfully!
    </div>
<?php endif; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/portfolio_web/public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body class="bg-light">

    <div class="container">

        <div class="row">
            <div class="col-12">
                <h1><b>Have a project, collaboration, or question? Let’s connect.</b></h1>
            </div>
        </div>

        <!-- SOCIAL MEDIA -->

        <div class="row mt-5">

            <div class="col-lg-4 col-md-4 my-2">
                <div class="row">
                    <h5><b>Follow me on,</b></h5>
                </div>

                <div class="row d-flex justify-content-center align-items-center align-self-center">
                    <div class="col-12 m-2">
                        <a href="https://www.instagram.com/shehazz_me/" target="_blank" class="link-dark text-decoration-none">
                            <i class="bi bi-instagram m-3" style="background: linear-gradient(45deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888); background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent;"></i>
                            <b style="background: linear-gradient(45deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888); background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Instagram</b>
                        </a>
                    </div>
                </div>
                <div class="row d-flex justify-content-center align-items-center align-self-center">
                    <div class="col-12 m-2">
                        <a href="https://web.facebook.com/amodh.kushan.7/" target="_blank" class="link-dark text-decoration-none">
                            <i class="bi bi-facebook m-3 text-primary"></i>
                            <b class="text-primary">Facebook</b>
                        </a>
                    </div>
                </div>
                <div class="row d-flex justify-content-center align-items-center align-self-center">
                    <div class="col-12 m-2">
                        <a href="https://x.com/maticdrops" target="_blank" class="link-dark text-decoration-none">
                            <i class="bi bi-twitter-x m-3"></i>
                            <b>X</b>
                        </a>
                    </div>
                </div>
                <div class="row d-flex justify-content-center align-items-center align-self-center">
                    <div class="col-12 m-2">
                        <a href="" class="link-dark text-decoration-none">
                            <i class="bi bi-linkedin m-3" style="color: #0077b5;"></i>
                            <b style="color: #0077b5;">Linkedin</b>
                        </a>
                    </div>
                </div>
                <div class="row d-flex justify-content-center align-items-center align-self-center">
                    <div class="col-12 m-2">
                        <a href="https://github.com/shehazz" target="_blank" class="link-dark text-decoration-none">
                            <i class="bi bi-github m-3"></i>
                            <b>Github</b>
                        </a>
                    </div>
                </div>
            </div>

            <!-- INPUT FIELD -->

            <div class="col-lg-8 col-md-8">
                <form class="row g-3" name="form1" action="/portfolio_web/index.php?action=send-contact" method="post">
                    <div class="col-lg-6 col-md-6">
                        <label for="email" class="form-label">Valid Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Valid Email" onblur="email_validation()" oninput="email_validation()">
                        <span id="iemailerror"></span>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Full Name" onblur="name_validation()" oninput="name_validation()">
                        <span id="inameerror"></span>
                    </div>
                    <div class="col-12">
                        <label for="subj" class="form-label">Subject</label>
                        <input type="text" class="form-control" id="subj" name="subj" placeholder="Enter Subject" onblur="subj_validation()" oninput="subj_validation()">
                        <span id="isubjerror"></span>
                    </div>
                    <div class="col-12">
                        <label for="msg" class="form-label">Message</label>
                        <textarea rows="5" class="form-control" id="msg" name="msg" placeholder="Enter Your Message" onblur="msg_validation()" oninput="msg_validation()"></textarea>
                        <span id="imsgerror"></span>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-dark">Submit</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <script src="/portfolio_web/public/assets/js/validation.js"></script>
    <script src="/portfolio_web/public/assets/js/bootstrap.bundle.min.js"></script>

</body>

</html>