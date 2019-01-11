<html>
<head>
    <title>Desain Form Login</title>
    <link rel="stylesheet" href="tugasform.css">

    <!-- font awesome 4 Plugin -->
    <link rel="stylesheet" href="plugin/fa/css/font-awesome.css">
</head>
<body>

    <h1 class="tengah">Login Form</h1>
    <div class="konten">
        <div class="atas">
            <div class="grup">
            </div>
            <form action="hasil.php"method="post">


                <div class="grup">
                    <input type="text" placeholder="Masukkan Email Anda" name="email">
                </div>

                <div class="grup">
                    <input type="password" placeholder="Masukkan Password Anda" name="pass">
                </div>

                <div class="jarakatas30">
                    <div class="grup tengah">
                        <button type="submit" class="tombol kirim" action="hasil.php">Submit</button>
                        <button type="button" class="tombol hapus">Clear</button>
                    </div>
                </div>
                <div class="grup">
                    <div class="kiri">
                        <input type="checkbox">
                        <span>Keep me signed in</span>
                    </div>
                    <div class="kanan">
                        <a href="#" class="a garisbawah">Forgot Your Password?</a>
                    </div>
                </div>
            </form>
        </div>
        <div class="bawah tengah">
            <span class="info">Incorrect login or Password</span>
        </div>
    </div>

</body>
</html>
