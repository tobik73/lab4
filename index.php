<!DOCTYPE html>
<html>

<head>
    <title>lab4</title>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
<div class="header bg-dark">
    <div class="container">
        <div class="row justify-content-center" style="color:white; padding:10px">
            <div class="col-auto">
                <p>Дерево ссылок</p>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <form id="form" name="form">
                <div class="form-group">
                    <label for="href">Сайт для изучения:</label>
                    <input  id="href" name="href" class="form-control" type="text" placeholder="Введите ссылку на сайт"></input>
                </div>
                <button class="btn btn-primary" type="submit">Запустить</button>
            </form>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-10">
            <div id="content" name="content" class="container"></div>
        </div>
    </div>
</div>

</body>

<footer class="footer bg-dark " style="color:white">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm ">
                <h5>Our Address</h5>
                <address>
                    121, Clear Water Bay Road<br>
                    Clear Water Bay, Kowloon
                    HONG KONG<br>
                    Tel.: +852 1234 5678<br>
                    Email: <a style="color:white" href="mailto:confusion@food.net">3331kirill@mail.ru</a>
                </address>
            </div>
            <div class="col-12 col-sm align-self-center">
                <div class="text-center">
                    <a  class="btn btn-social-icon btn-google" href="http://google.com/+"><i class="fa fa-google-plus"></i></a>
                    <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                    <a class="btn btn-social-icon btn-vk" href="https://vk.com/kerry73"><span class="fa fa-vk"></span></a>
                    <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter"></i></a>
                    <a class="btn btn-social-icon btn-google" href="http://youtube.com/"><i class="fa fa-youtube"></i></a>
                    <a class="btn btn-social-icon" href="mailto:"><i class="fa fa-envelope-o"></i></a>
                </div>

            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-auto">
                <p>© Copyright 2020 Tobik</p>
            </div>
        </div>
    </div>
</footer>
<!-- jQuery first, then Popper.js, then Bootstrap JS. -->
<script src="node_modules/jquery/dist/jquery.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>


<script src="main.js"></script>

</html>