<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <link rel="icon" type="image/x-icon" href="img/logo1.png">
    <title>El Academy</title>
</head>

<body>
    <!-- header start -->
    <header>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-11 col-sm-10 col-md-8 col-lg-6 col-xl-6 col-xxl-6 offer text-center">
                    <img src="img/Logo.png" alt="Logo of website">
                    <button type="button" class="btn mybtn col-12 btn-warning">Taklif / Shikoyat</button>
                    <form action="report" method="POST">
                        @csrf          
                        <div class="mb-3">
                            <input type="text" class="form-control" name="name" id="name" placeholder="To'liq ism" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="phone" id="phone" value="+998" placeholder="Telefon raqam" required>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" name="message" id="text" placeholder="Izoh qoldiring" rows="5" required></textarea>
                        </div>
                        <button class="btn btn-warning btn-lg center-block" type="submit" name="submit">Yuborish</button>
                    </form>
                    <p>Taklif va shikoyatingiz maxfiy saqlanadi</p>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>