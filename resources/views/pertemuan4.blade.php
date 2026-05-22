<!DOCTYPE html>
<html lang="id">

<head>
    <title>Pertemuan 4 - Latihan Bootstrap</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <style>
        body {
            background-color: #ffffff;
            font-family: 'Roboto', sans-serif;
        }

        .no-gutters-custom {
            margin-right: 0;
            margin-left: 0;
        }

        .no-gutters-custom>.col,
        .no-gutters-custom>[class*="col-"] {
            padding-right: 0;
            padding-left: 0;
        }

        .content-section {
            padding: 80px 60px;
        }

        h2 {
            color: #091133;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .main-desc {
            color: #7383c4;
            line-height: 1.6;
            margin-bottom: 40px;
        }

        .fitur-title {
            color: #000000;
            font-weight: bold;
            font-size: 14px;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .fitur-desc {
            color: #000000;
            font-size: 10px;
            line-height: 1.4;
        }

        .icon-box {
            width: 35px;
            margin-bottom: 10px;
        }

        .content-section {
            padding-left: 100px;
            padding-right: 100px;
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="row no-gutters-custom align-items-center">

            <div class="col-md-5">
                <img src="{{ asset('assets/img/Image.png') }}" class="img-fluid w-100" style="height: 100vh; object-fit: cover;">
            </div>

            <div class="col-md-7">
                <div class="content-section">
                    <h2>Light, Fast & Powerful</h2>
                    <p class="main-desc">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis,
                        sem. Nulla consequat massa quis enim.
                    </p>

                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <img src="https://cdn-icons-png.flaticon.com/512/1048/1048953.png" class="icon-box">
                            <div class="fitur-title">Title Goes Here</div>
                            <p class="fitur-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                        </div>

                        <div class="col-md-6 mb-4">
                            <img src="https://cdn-icons-png.flaticon.com/512/1048/1048953.png" class="icon-box">
                            <div class="fitur-title">Title Goes Here</div>
                            <p class="fitur-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                        </div>

                        <div class="col-md-6 mb-4">
                            <img src="https://cdn-icons-png.flaticon.com/512/1048/1048953.png" class="icon-box">
                            <div class="fitur-title">Title Goes Here</div>
                            <p class="fitur-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                        </div>

                        <div class="col-md-6 mb-4">
                            <img src="https://cdn-icons-png.flaticon.com/512/1048/1048953.png" class="icon-box">
                            <div class="fitur-title">Title Goes Here</div>
                            <p class="fitur-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>

</html>
