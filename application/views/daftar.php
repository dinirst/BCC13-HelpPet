<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>HelpPet</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <!-- Site Properties -->
    <link rel="icon" href="assets/image/favicon.ico" type="image/gif">
    <link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">

    <link rel='stylesheet prefetch'
        href='https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/icon.min.css'>

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="semantic/dist/semantic.min.js"></script>
    <script>
    $(document)
        .ready(function() {
            $('.menu .item')
                .tab();
        });
    </script>
</head>

<body class="ui dimmable">
    <div class="ui container fluid"
        style="position:absolute;top: 50%;left: 50%;transform: translateX(-50%) translateY(-50%)">
        <div class="ui container center aligned">
            <a href="<?php echo base_url("");?>"><img class="ui small centered image"
                    src="assets/image/HELPPET-DARK.png" style="margin-bottom:10px"></a>
            <div class="ui two column stackable grid">
                <div class="row">
                    <div class="column middle aligned">
                        <div class="ui three row stackable grid">
                            <div class="column" style="margin:10px">
                                <div class="row" style="margin-bottom:5px;font-size:28px">
                                    Halo #ParaPecintaHewan!
                                </div>
                                <div class="row" style="margin-top:10px;margin-bottom:10px;font-size:20px">
                                    Mari bergabung bersama HelpPet
                                </div>
                                <div class="row"><img src="assets/image/pet.png"
                                        class="ui rounded centered medium image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column" style="padding-right:80px">
                        <div class="ui container">
                            <div class="ui container">
                                <div style="margin-top:20px">
                                    <p style="font-size:28px">Daftar Akun</p>
                                </div>
                                <div class="ui pointing secondary menu">
                                    <a class="active item" data-tab="pengguna">Pengguna</a>
                                    <a class="item" data-tab="penampunganhewan">Penampungan Hewan</a>
                                </div>

                                <!-- Form untuk pendaftaran user -->
                                <div class="ui tab active" data-tab="pengguna">
                                    <form class="ui form" style="padding:5px 40px 40px 40px" action="<?php echo base_url('Daftar/user');?>" method="post">
                                        <div class="ui segment" style="padding:30px">
                                            <div class="field" style="margin-top:8px">
                                                <div class="ui left icon input">
                                                    <i class="user icon"></i>
                                                    <input type="text" name="username" placeholder="Nama Lengkap">
                                                </div>
                                            </div>
                                            <div class="field" style="margin-top:20px">
                                                <div class="ui left icon input">
                                                    <i class="envelope icon"></i>
                                                    <input type="text" name="email" placeholder="Alamat Email">
                                                </div>
                                            </div>
                                            <div class="field" style="margin-top:20px">
                                                <div class="ui left icon input">
                                                    <i class="phone icon"></i>
                                                    <input type="text" name="telp" placeholder="Nomor Telepon">
                                                </div>
                                            </div>
                                            <div class="field" style="margin-top:20px">
                                                <div class="ui left icon input">
                                                    <i class="home icon"></i>
                                                    <input type="text" name="alamat"
                                                        placeholder="Alamat Tempat Tinggal">
                                                </div>
                                            </div>
                                            <div class="field">
                                                <div class="ui left icon input">
                                                    <i class="lock icon"></i>
                                                    <input type="password" name="password" placeholder="Kata Sandi">
                                                </div>
                                            </div>
                                            <input class="ui fluid large button brown" type="submit" name="user" id="user" value="Masuk" 
                                            style="margin-top:15px;margin-bottom:20px;background-color:#cd8b62" onclick="$('.ui.dimmable .dimmer').dimmer('show')">
                                            <div style="font-size:15px">Sudah punya akun HelpPet?<a
                                                    href="<?php echo base_url("masuk");?>" style="color:brown">
                                                    Masuk</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <!-- Form untuk pendaftaran penampungan hewan -->
                                <div class="ui tab" data-tab="penampunganhewan">
                                    <form class="ui form" style="padding:5px 40px 40px 40px" action="<?php echo base_url('Daftar/tampung');?>" method="post">
                                        <div class="ui segment" style="padding:30px">
                                            <div class="field" style="margin-top:8px">
                                                <div class="ui left icon input">
                                                    <i class="user icon"></i>
                                                    <input type="text" name="nm_penampungan"
                                                        placeholder="Nama Penampungan">
                                                </div>
                                            </div>
                                            <div class="field" style="margin-top:20px">
                                                <div class="ui left icon input">
                                                    <i class="envelope icon"></i>
                                                    <input type="text" name="email"
                                                        placeholder="Alamat Email">
                                                </div>
                                            </div>
                                            <div class="field" style="margin-top:20px">
                                                <div class="ui left icon input">
                                                    <i class="phone icon"></i>
                                                    <input type="text" name="telp"
                                                        placeholder="Nomor Telepon">
                                                </div>
                                            </div>
                                            <div class="field" style="margin-top:20px">
                                                <div class="ui left icon input">
                                                    <i class="home icon"></i>
                                                    <input type="text" name="alamat"
                                                        placeholder="Alamat Tempat Penampungan">
                                                </div>
                                            </div>
                                            <div class="field">
                                                <div class="ui left icon input">
                                                    <i class="lock icon"></i>
                                                    <input type="password" name="password"
                                                        placeholder="Kata Sandi">
                                                </div>
                                            </div>
                                            <input type="file" name="foto" class="form-control">
                                            <input class="ui fluid large button brown" type="submit" name="user" id="user" value="Masuk" 
                                            style="margin-top:15px;margin-bottom:20px;background-color:#cd8b62" onclick="$('.ui.dimmable .dimmer').dimmer('show')">
                                            <div style="font-size:15px">Sudah punya akun HelpPet?
                                                <a href="<?php echo base_url("masuk");?>" style="color:brown">
                                                    Masuk
                                                </a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tampilan dimmer saat klik daftar -->
    <div class="ui dimmer">
        <div class="content">
            <h2 class="ui inverted icon header">
                <i class="heart red icon"></i>
                Terimakasih Sudah Menjadi Bagian Dari HelpPet
            </h2><br>
            <a href="<?php echo base_url("masuk");?>"><button class="positive ui large button">Login</button></a>
        </div>
    </div>

</body>

</html>
