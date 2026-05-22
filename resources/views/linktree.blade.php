<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <title>gamareptile | Instagram, TikTok | Linktree</title>
</head>

<script>
    function showme() {
        //  alert("Hallo Selamat Siang");
        Swal.fire({
            title: "Hallo!",
            text: "Selamat Siang!",
            icon: "success"
        });
        console.log("Ini baris 18, sudah sampai di sini");
        a = 18 + 10;
        console.log("Hasil Penjumlahan: " + a);
        c = 1 * 2 * 3;
        console.log("Hasil Perkalian: " + c);
    }

    function changeText() {
        const element = document.getElementById("intro");
        element.innerHTML = "Sistem Informasi ITS";
    }

    function changeStyle() {
        const element = document.getElementById("tomboll");
        element.style.color = "red";
        element.style.background = "yellow";
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<style>
    body {
        background-color: rgb(194, 184, 149);
    }

    .kartu {
        background-color: rgb(250, 231, 206);
        border-radius: 50px;
        text-align: center;
        font-family: Arial, Helvetica, sans-serif;
        max-width: 500px;
        margin: auto;
        margin-top: 50px;
        padding-bottom: 50px;
    }

    .icon_atas {
        display: flex;
        justify-content: space-between;
        padding: 20px 20px;
    }

    .icon_lingkaran {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background-color: aliceblue;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .icon_lingkaran img {
        width: 15px;
        height: 15px;
    }

    .profil {
        border-radius: 300px;
        width: 80px;
    }

    .nama {
        font-weight: bolder;
        font-size: large;
        margin-bottom: 20px;
    }

    .bio {
        font-weight: bold;
        font-size: smaller;
        margin-bottom: 10px;
    }

    .tombol {
        background-color: rgb(54, 77, 38);
        color: aliceblue;
        text-decoration: none;
        border-radius: 5px;
        display: block;
        margin: 10px auto;
        padding: 10px;
        max-width: 400px;
        align-items: center;
        display: flex;
        justify-content: space-between;
    }

    .tombol:hover {
        opacity: 0.9;
    }

    .tombol_icon {
        width: 40px;
        height: 40px;
        border-radius: 5px;
    }

    .kanan {
        width: 40px;
        text-align: right;
        font-weight: bold;
    }

    .isi_Link {
        text-align: center;
        font-weight: bold;
    }

    .based {
        font-size: smaller;
        font-weight: bold;
        margin-top: 20px;
    }

    .linktree {
        font-size: small;
        font-weight: bold;
        margin-top: 50px;
        margin-left: auto;
        margin-right: auto;
        background-color: rgb(251, 255, 247);
        display: block;
        padding: 10px;
        width: 250px;
        border-radius: 50px;
    }
</style>

<body>
    <div class="kartu">
        <!-- tombol yg di atas-->
        <div class="icon_atas">
            <div class="icon_lingkaran">
                <img src="https://assets.streamlinehq.com/image/private/w_300,h_300,ar_1/f_auto/v1/icons/logos/linktree-hrggdeqdzll06zjl9h6j.png/linktree-bafynmeua3noot52xbu71.png?_a=DATAiZAAZAA0">
            </div>
            <div class="icon_lingkaran">
                <img src="https://static.vecteezy.com/system/resources/previews/001/187/075/non_2x/download-png.png">
            </div>
        </div>

        <!--PROFIL N BIO-->
        <img src=" https://ugc.production.linktr.ee/5d95476a-fefc-4f14-bd84-5926d7b1ef9a_IMG-2579.jpeg?io=true&size=avatar-v3_0 " class="profil ">
        <h1 id="intro" class="nama">
            @gamareptile
        </h1>
        <div class="bio ">
            👇 Leopard Gecko Dormice Breeder 👇
        </div>


        <!--TOMBOL LINK-->
        <a id="tomboll" href="https://www.odoo.com/typo?domain=gamareptile.odoo.com&autodbname=gamareptile&hosting=as231a.odoo.com" class="tombol" target="_blank">
            <img src="https://ugc.production.linktr.ee/43ed403c-bc39-484e-960c-477f824f9de9_AVAILABLE-NOW--1-.png?io=true&size=thumbnail-stack_v1_0 " class="tombol_icon ">
            <div class="isi_Link ">
                Ready Stock
            </div>
            <div class="kanan ">
                ⋮
            </div>
        </a>

        <button class="btn btn-primary" onclick="showme();">Show Me</button>
        <button class="btn btn-primary" onclick="changeText();">Change Text</button>
        <button class="btn btn-primary" onclick="changeStyle();">Change Style></button>

        <a href="https://api.whatsapp.com/send/?phone=%2B6285163608850&text&type=phone_number&app_absent=0" class=" tombol " target="_blank">
            <img src="https://ugc.production.linktr.ee/37b14857-750d-44d4-a5da-5f88f52007bf_Whatsapp.png?io=true&size=thumbnail-stack_v1_0 " class="tombol_icon ">
            <div class="isi_Link ">
                WhatsApp Gama Reptile
            </div>
            <div class="kanan ">
                ⋮
            </div>
        </a>
        <a href="https://www.tokopedia.com/gama-reptile-769" class=" tombol " target="_blank">
            <img src="https://ugc.production.linktr.ee/22db6a9f-8577-44d6-bdf8-f044d1f877ec_Tokopedia.png?io=true&size=thumbnail-stack_v1_0 " class="tombol_icon ">
            <div class="isi_Link ">
                Tokopedia Gama Reptile
            </div>
            <div class="kanan ">
                ⋮
            </div>
        </a>
        <a href="https://shopee.co.id/andrew_julian" class=" tombol " target="_blank">
            <img src="https://ugc.production.linktr.ee/1430d2b7-392a-4e82-ad51-5d4bcfb72344_Shopee.png?io=true&size=thumbnail-stack_v1_0 " class="tombol_icon ">
            <div class="isi_Link ">
                Shopee Gama Reptile
            </div>
            <div class="kanan ">
                ⋮
            </div>
        </a>
        <a href="https://www.tiktok.com/@gamareptile.id" class=" tombol " target="_blank">
            <img src="https://ugc.production.linktr.ee/2d1114d6-b65e-4de3-97a0-8169493f9c40_Tiktok.png?io=true&size=thumbnail-stack_v1_0 " class="tombol_icon ">
            <div class="isi_Link ">
                TikTok Gama Reptile
            </div>
            <div class="kanan ">
                ⋮
            </div>
        </a>
        <a href="https://www.instagram.com/gamareptile?igshid=MjEwN2IyYWYwYw%3D%3D" class=" tombol " target="_blank">
            <img src="https://ugc.production.linktr.ee/a5a9bd1b-547e-46c5-8647-a345ec8e2f4e_Instagram.png?io=true&size=thumbnail-stack_v1_0 " class="tombol_icon ">
            <div class="isi_Link ">
                Instagram Gama Reptile
            </div>
            <div class="kanan ">
                ⋮
            </div>
        </a>
        <a href="https://www.youtube.com/@gamareptile" class=" tombol " target="_blank">
            <img src="https://ugc.production.linktr.ee/8733495b-b14b-4765-9f5c-df84c083733f_Youtube.png?io=true&size=thumbnail-stack_v1_0 " class="tombol_icon ">
            <div class="isi_Link ">
                Youtube Gama Reptile
            </div>
            <div class="kanan ">
                ⋮
            </div>
        </a>

        <!--Denpasar-->
        <div class="based ">
            Based in Denpasar, Bali
        </div>
        <!--disuruh join linktree-->
        <div class="linktree">
            Join gamareptile on Linktree today
        </div>
    </div>
</body>

</html>
