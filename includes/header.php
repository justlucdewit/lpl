<header>
    <!--site title-->
    <h1>Welcome to Luke's programming log</h1>

    <?php
        $quotes = ["2b||!2b its funny because its true", "PHP bad", "Java verbose", "uʍop ǝpᴉsdn ɯᴉ",
        "we live in an simulation", "where is the missing semicolon?", "if it works, dont touch it",
        "c# = microsoft java", "python 4 when?", "python is an above c level language", 
        "10000111100101100", "34210", "b33p", "a session is something you can sit on",
        "it works on my machine", "screaming in bytes", 
        "//TODO: remove this comment", "THE SERVERS ARE ON FIRE!", 
        "PHPoggers for the win", "do you know da wei", ""];

        $quote = $quotes[array_rand($quotes, 1)];
    ?>

    <div id="belowtitle">
        <!--random profile picture-->
        <div id="imgcontainer">
            <img src="images/normal_luke_<?php
                switch(random_int(1,4)){
                    case 1: 
                        echo "black";
                        break;
                    case 2:
                        echo "blue";
                        break;
                    case 3:
                        echo "green";
                        break;
                    case 4:
                        echo "red";
                }
            ?>.png">
        </div>

        <!--random quote-->
        <div id="quote">
            <?php
                echo $quote;
                if ($quote == "uʍop ǝpᴉsdn ɯᴉ"){
                    echo "
                        <style>
                            #belowtitle img{
                                -webkit-transform: scaleY(-1);
                                transform: scaleY(-1);
                            }
                        </style>
                    ";
                }
            ?>
        </div>
    </div>
</header>