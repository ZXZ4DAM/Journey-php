<html>
    <head>
        <title>Form Login</title>
        <link href="css/main.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
 
            <div class="badan">
                <div class="kepala">
                    <p class="kepalatext">&#187; Adam Malik Site &#171;</p>
                </div>
                  <div class="bingkai">
                   <div style="padding-top:10px; padding-left:10px; padding-right:10px; color:#030033;">
                         <?php
                          session_start();
                          if(empty($_SESSION['username'])){
                              echo "<center>KETIK LOGIN SEBELUM MELANJUTKAN</center><br/>Maaf sepertinya anda belum Login,silahkan tekan link login dibawah <br/>
                                      <a href='login.php'><center>Login</center></a>";
                          }else{
                              echo "<center>SELAMAT ANDA BERHASIL LOGIN<br/>Ketik link di bawah untuk melanjutkan...<br/><a href='../face/index.php'>Masuk</a></center>";
                          }
                          ?>
                   </div>
                  </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>	