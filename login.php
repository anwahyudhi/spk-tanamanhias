<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pendukung Keputusan Pemilihan Tanaman Hias untuk didalam Ruangan</title>
    <link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/footer.css">
    <link rel="stylesheet" href="assets/login-clean.css">
    
</head>

<body>
    <div>
        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
            <h5 class="navbar-brand">Sistem Pendukung Keputusan Pemilihan Tanaman Hias untuk didalam Ruangan</h5>
            </div>
        </nav>
    </div>

    <div class="login-clean">
        <form method="post" action="proses_login.php" id="captcha_form">
            <h2 class="sr-only">Login Form</h2>
           <div class="illustration"><img src="assets/gambar/depan.png" class="img-responsive" > </div>
            <div class="form-group"><input class="form-control" placeholder="masukkan username" name="username" type="username" required ></div>
            
            <div class="form-group"><input class="form-control" placeholder="masukkan Password" name="password" type="password" required ></div>
            <br>
            <a href="masyarakat/daftar/daftar_masyarakat.php">belum punya akun? daftar disini</a>
           <br>
            <div class="form-group">
                <button class="btn btn-success btn-block" name="login" id="login" type="submit">Log In</button>
            </div>
        </form>
</div>
    <div class="footer-basic">
        <footer>
            <p class="copyright"><?php echo date("Y") ?></p>
        </footer>
    </div>
    
</body>


</html>

<script>
    $(document).ready(function(){

        $(#captcha_form).on('submit', function(event){
            event.preventDefault();
            if($('#captcha_code').val() == '')
            {
             alert('Masukkan Captcha')
             $('#login').attr('disabled', 'disabled');
             return false;
            }
            else{
                   alert("form telah ");
                   $('#captcha_form')[0].reset();
                   $('#captcha_image').attr('src', 'assets/image.php');
            }
        });

        $('#captcha_code').on('blur', function(){
            var code = $('captcha_code').val();
            if(code = ''){
                alert('masukkan kode captcha!');
                $('#login').attr('disabled', 'disabled');
            }
            else{
                $.ajax({
                    url:"login-proses.php", 
                    method:"POST",
                    data:{code:code},
                    success:function(data){
                        if(data == 'success'){
                            $('#login').attr('disabled',false);
                        }
                        else{
                            $('#login').attr('disabled', 'disabled');
                            alert('Kode Salah!')
                        }
                    }
                })
            }
        });
    });

    
</script>