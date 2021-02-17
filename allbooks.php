
<?php
$db = new PDO("mysql:host=localhost;dbname=testbrief;charset=UTF8", "root", "");
$sql = "SELECT * FROM books";
$stmt = $db->query($sql);
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Books</title>
    <style>
        body{
            margin: 0px;
            padding: 0px;
        }
        .contentBooks {
            /* background-color: yellow; */
            display: flex;
            justify-content: center;
            flex-wrap: wrap;

        }

        .imagebook {
            width: 250px;
            height: 330px;
            border: 2px solid black;
            margin: 15px;
        }

        .imagebook img{
            max-width: 100%;
            max-height: 100%;
            /* display: block; */
            /* remove extra space below image */
        }

        .book {
            /* background-color: green; */
        }

        .book p {
            text-align: center;
            color: blueviolet;
            font-size: 20px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <?php include 'header.php' ; ?>
    
    <div class="container">
        <div style="margin: 30px;background-color: aqua;margin: 10px; color: blueviolet; font-weight: bold;">
            <p style="margin-left: 120px;"> OUR BOOKS :</p>
        </div>
        <div class="contentBooks">
        <?php foreach ($rows as $row) : ?>
           
            <div class="book" id="book1">
                <div class="imagebook">
                    <img src="image/<?php echo $row['imageUpload'];?>">
                </div>
                <div>
                    <p><?php echo $row["titre"]; ?></p>
                </div>

            </div>



                  
                       
                        
                <?php endforeach; ?>

       
           



        </div>
    </div>




</body>

</html>