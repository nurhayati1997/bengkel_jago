<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Karisma Motor</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?= base_url() ?>asset_login/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?= base_url() ?>asset_login/css/style.css">
</head>

<body>

    <div class="main">
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="<?= base_url() ?>asset_login/images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="#" class="signup-image-link"> </a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Login</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <select name="nama" class="form-control" id="nama">
                                </select>
                                <small class="text-danger"><?= form_error('nama'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="your_pass" id="your_pass" placeholder="Password" />
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in" />
                            </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label"> </span>
                            <ul class="socials">
                                <!-- <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="<?= base_url() ?>assets/js/core/jquery.3.2.1.min.js"></script>
    <script src="<?= base_url() ?>asset_login/js/main.js"></script>
    <script>
        get_list_desa();

        function get_list_desa() {
            $.ajax({
                type: 'get',
                data: 'target=tbl_pengguna',
                url: '<?= base_url() ?>login_control/ambilData',
                dataType: 'json',
                success: function(data) {
                    var baris = '<option value="0">- Pilih Pengguna -</option>';
                    var nama = '';
                    for (var i = 0; i < data.length; i++) {
                        baris += '<option value = "' + data[i].id_pengguna + '"'
                        if (data[i].id_pengguna == <?php if (set_value("nama")) {
                                                        echo "'" . set_value("nama") . "'";
                                                    } else {
                                                        echo "0";
                                                    } ?>) {
                            baris += "selected"
                        }
                        nama = data[i].nama
                        baris += ' > ' + nama + ' </option>'
                    }

                    $("#nama").html(baris);
                }
            });
        }
    </script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>