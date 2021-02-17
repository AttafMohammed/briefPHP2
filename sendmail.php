<?php





require_once"mail.php";

// $nomPrenom = $_POST['nomEtPrenom'];
// $email = $_POST['email'];

if(isset($_POST['submit'])) {
    // echo "gdsgfhgd";

$nomPrenom = $_POST['nomEtPrenom'];
// $email = $_POST['email'];
// echo $email;
$message = $_POST['message'];
// echo" $nomPrenom   $email  $message";
$mail->setFrom( 'greenchip2.0v1@gmail.com', $nomPrenom);
$mail->addAddress('greenchip2.0v1@gmail.com', 'Joe User');  


// $mail->setFrom('$email','$nomPrenom');
// $mail->addAddress('greenchip2.0v1@gmail.com', 'med');  

$mail->Subject = 'from website';
$mail->Body    = $message;
$mail->send();

}

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact US</title>
    <style>
        input{
            
            margin: 5px 0px 20px 0px ;
            height: 30px;
            width: 450px;
            background-color: #f1e9e9;
            border: none;
        }
        textarea{
            margin: 5px 0px 20px 0px ;
            width: 450px;
            background-color: #f1e9e9;
            border: none;
        }
        .container{
            display: flex;
            justify-content: center;
           
           
        }
        #buttonEnvoyer{
            width: 100px;
            height: 30px;
            background-color: blueviolet;
            color: white;
        }
        .content{
            display: flex;
            width: 600px;
        }
       

    </style>
</head>

<body>

<!-- ici le header nav bar -->
<?php include "header.php" ?>

    <!-- contact us -->

    <p style="font-size:20px;font-weight: bold; margin-left: 80px;color: blueviolet;">CONTACT US</p>

    <div class="container">
        <div class="content" style=" padding: 20px;">

            <form action="" method="POST">

                <label>NOM ET PRENOM</label><br>
                <input type="text" name="nomEtPrenom"><br>
                <label>EMAIL</label><br>
                <input type="email" name="email"><br>
                <label>MESSAGE</label><br>
                <textarea name="message" id="message" cols="30" rows="10"></textarea><br>

                <input id="buttonEnvoyer" type="submit" name="submit" value="Envoyer">
            </form>

        </div>

    </div>

</body>

</html>