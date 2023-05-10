<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">

        <?php
        require_once ('classes/Cards.php');
        require_once ('classes/Card.php');

            $cards = new Cards();

            $cards->addCard(new Card('Nadpis', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, tempore. Eum qui provident quasi voluptate quo','red'));
            $cards->addCard(new Card('Nadpis', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, tempore. Eum qui provident quasi voluptate quo','blue'));
            $cards->addCard(new Card('Nadpis', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, tempore. Eum qui provident quasi voluptate quo','green'));
            $cards->addCard(new Card('Nadpis', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, tempore. Eum qui provident quasi voluptate quo','violet'));
            
            foreach($cards->getCards() as $card){
        
                echo '<div class="col-md-3 card '.$card->getColor().'">';
                        echo '<h3>'.$card->getTitle().'</h3>';
                        echo '<div class="content">'.$card->getContent().'</div>';
                echo '</div>';
            }

        ?>

    </div>

</div>

</body>
</html>




