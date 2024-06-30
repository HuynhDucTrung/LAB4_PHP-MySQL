<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class Books
    {
        /* Member variables */
        var $price;
        var $title;
        /* Constructor */
        function __construct($_title, $_price)
        {
            $this->title = $_title;
            $this->price = $_price;
        }
        /* Member functions */
        function setPrice($_price)
        {
            $this->price = $_price;
        }
        function getPrice()
        {
            echo $this->price . "<br/>";
        }
        function setTitle($_title)
        {
            $this->title = $_title;
        }
        function getTitle()
        {
            echo $this->title . " <br/>";
        }
        function sayHello()
        {
            echo "Hello<br>";
        }
    }
    $java = new Books("OOP with Java", 10);
    $ios = new Books("Advanced iOS Programming", 15);
    $game = new Books("Game Programming", 7);
    /* Get those set values */
    $java->getTitle();
    $ios->getTitle();
    $game->getTitle();
    $java->getPrice();
    $ios->getPrice();
    $game->getPrice();
    $game->sayHello();
    ?>
</body>

</html>