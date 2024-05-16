<html>
    <head>
        <title> Length Conversion Website</title>
    </head>
    <style>
        body {
            color: ;
            font-family: Arial, Helvetica, sans-serif;
        }
        table, th, td
        {
           border: 1px solid;
           border-color: black;
        }
    </style>

    <body>
        
        <table>
            <tr>
                <th colspan ="6"> Metric Conversions </th>
            </tr>
            <tr>
            <?php
                $cm = 1;
                echo "<td> $cm centimetre</td>"; 
            ?>
            <td> = </td>
            <?php
                $cm2 = $cm * 10;
                echo "<td> $cm2 millimetres</td>";
            ?>
            <?php
                $cm = 1;
                echo "<td> $cm cm</td>"; 
            ?>
            <td> = </td>
            <?php
                $cm2 = $cm * 10;
                echo "<td> $cm2 mm</td>";
            ?>
            </tr>
            <tr>
            <?php
                echo "<td> $cm decimetre</td>"; 
            ?>
            <td> = </td>
            <?php
                $dm2 = $cm * 10;
                echo "<td> $dm2 centimetres</td>";
            ?>
            <?php
                $cm = 1;
                echo "<td> $cm dm</td>"; 
            ?>
            <td> = </td>
            <?php
                $cm2 = $cm * 10;
                echo "<td> $cm2 dm</td>";
            ?>
            </tr>
            <tr>
            <?php
                echo "<td> $cm metre</td>"; 
            ?>
            <td> = </td>
            <?php
                $m2 = $cm * 100;
                echo "<td> $m2 centimetres</td>";
            ?>
            <?php
                $cm = 1;
                echo "<td> $cm m</td>"; 
            ?>
            <td> = </td>
            <?php
                $m2 = $cm * 100;
                echo "<td> $m2 m</td>";
            ?>
            </tr>
            
        </table>

    </body>
</html>
