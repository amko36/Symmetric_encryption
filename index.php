<html>


<body class='background'>
    <head>
        <?php //      File with styles ?>
        <link rel="stylesheet" href="style.css" type="text/css">
        <?php //adaptation of width for different types of screen(phone, pc, etc.) ?>
        <meta name="viewport" content="width=device-width"/>
    </head>
    <br>
    <h1> Here you can encrypt and decrypt your text using a simple symmetric encryption algorithm.</h1>
    
    <h2 class="description">Enter the text you want en encrypt/decrypt</h2>
   
    <form method="POST">
    <textarea name='texttoencrypt'></textarea> <br><br>
    <input type="submit" name="submit" value="Encrypt the text" />
    </form>
   
    

   
    <?php
      if(isset($_POST['submit'])){
        $fnumber=rand(10000, 99999); //we use random numbers for filenames in order to avoid the using of the same files by several persons 
        $fnamein='texts/'.$fnumber.'.in';
        $fnameout='texts/'.$fnumber.'.out';
        $texttoencrypt_var = $_POST['texttoencrypt'];
        if(empty($texttoencrypt_var)) echo "<div class='alert'>First, enter the text to encrypt/decrypt.</div>";
        else {
          $fd = fopen($fnamein, 'w') or die("<div class='alert'>The file couldn't be created.</div>");
            $str = $texttoencrypt_var;
            fwrite($fd, $str);
          fclose($fd);
          $command = escapeshellcmd("python3 script.py $fnamein $fnameout");
          $command=$command . ' 2>&1';
          $output = shell_exec($command);
            $fd = fopen($fnameout, 'r');
            $encryptedtext = fread($fd, filesize($fnameout));
          fclose($fd);
          echo "<h2 class='description'>Here below you can find your encrypted text.<br>To decrypt it, you should copy the WHOLE text in the encryption field, including all spaces at the end.</h2>";
          echo "<textarea id='textencrypted'>$encryptedtext</textarea>";
          $finalstep=unlink($fnamein); // At last, we delete all created files from the server  
          $finalstep=unlink($fnameout); 
      }
    }
    ?>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
</body>

</html>
