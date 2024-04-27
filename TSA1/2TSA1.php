<html>
    <head>
        <title>Multiplication Table</title>
    </head>
    <style>
        body {
            font-family: Courier New;
        }
        table, th, td, tr
        {
            border: 2px solid;
        }
        th,td,tr
        {
            padding: 4px;
        }
        tr:nth-child(even) td:nth-child(even),tr:nth-child(odd) td:nth-child(odd)
        {background-color: yellow;}
        tr:nth-child(even) td:nth-child(odd),tr:nth-child(odd) td:nth-child(even)
        {background-color: red;;}
    </style>
    <body>
        <h1> Multiplication Table </h1>
    <?php
        echo "<table>";
        for($one = 0; $one < 11; $one++)
        {
        echo "<tr>";
            for ($factor = 1;$factor < 11; $factor++)
            {
                echo "<td>" . ($one * $factor) . "</td>";
            }
        echo "</tr>";
        }
        echo "</table>";
    ?>
    </body>
</html>