
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <style>
        body {
            margin: 0px;
            padding: 0px;
        }

       
        footer {
            width: 100%;
            height: 100px;
            background-color: lightgrey;
            text-align: center;

        }

        body {



            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.6)), url('library.jpg');
        }

        .container {

            height: 80%;
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .content {
            padding: 20px;
            /* background-color: red; */
            width: 500px;
            height: 400px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

        }
        form{
            padding: 20px;
            /* background-color: red; */
            width: 500px;
            height: 400px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .content p {
            color: white;
            font-size: 70px;
            font-weight: bold;
            /* background-color: aquamarine; */
            margin: 10px;


            text-align: center;
        }

        #inputSearch {
            width: 80%;
            height: 50px;
            margin: 10px;
            padding: 5px 20px 5px 20px;
            text-align: center;
            background-color: lightgrey;
            border: none;
        }

        #buttonSearch {
            width: 100px;
            height: 40px;
            background-color: blueviolet;
            color: white;
            border: none;
            font-weight: bold;
        }

        footer {
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
        }
        .menu{
            margin-right: 30px;
        }
    </style>
</head>

<body>
    <?php include 'header.php';?>
    <div class="container">
        <div class="content">
            <p>READ <br> MORE <br> BOOKS</p>

            <form action="bookInformations.php" method="POST">

            <input id="inputSearch" type="text" name="inputSearch" placeholder="FIND YOUR BOOK HERE">

            <input type="submit" id="buttonSearch" name="submit" value="search">
            </form>



        </div>




    </div>
    <footer>
        <!-- ici le footer -->
        <p> 2021. Tous droits réservés </p>
    </footer>




</body>

</html>



