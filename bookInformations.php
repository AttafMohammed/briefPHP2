<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book informations</title>
    <style>
        body{
            margin: 0px;
            padding:0px;
        }
        #bookInformations {
            display: flex;
            flex-direction: column;
           justify-content: center;
            background-color: lightgrey;
            /* margin-right: 40px; */
            border-radius: 10px;
            padding: 10px;
            width: 500px;
        }

        #bookInformations p {
            color: blueviolet;
            font-weight: bold;
            margin: 5px;
           
            

            padding: 5px;
        }

        #imagebook {
            width: 250px;
            height: 330px;
            border: 2px solid black;
            margin: 15px;
        }

        #imagebook img {
            max-width: 100%;
            max-height: 100%;
            display: block;
            /* remove extra space below image */
        }
        .content{
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;

        }
    </style>
</head>

<body>
    <header>
        <!-- ici le header  nav bar  -->
        <?php include "header.php" ?>
    </header>


    <!-- titre de livre generer  -->
    <p style="font-weight: bold;font-size: 20px;color: blueviolet;margin-left:20px;"> POOR DAD RICH DAD </p>

    <!-- bloc pour representer les informations du livre avec une photo -->

    <div class="container">
        <div class="content" ">
            <div id="bookInformations">
                <p>NAME: <span></span></p>
                <p>AUTEUR: <span></span></p>
                <p>PRIX: <span></span></p>
                <p>QUANTITE AU STOCK: <span></span></p>
                <p>DATE DE PUBLICATION: <span></span></p>

            </div>
            <div id="bookCover">
                <div id="imagebook">
                    <img src="mysql.jpg" alt="">
                </div>



            </div>

        </div>

    </div>


</body>

</html>