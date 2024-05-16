<html>
    <head>
        <title> Function Formulas </title>
    </head>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
        table, td, th
        {
           border: 1px solid;
           border-color: black;
           text-align: center;
        }
    </style>
    <body>
        <table>
            <tr>
                <th colspan="3"> Volume of Shapes </th>
            </tr>
            <tr>
                <td>Values</td>
                <td>Formula</td>
                <td>Answer</td>
            </tr>
            <?php
            function CubeFormula($length) 
            {
                return $length*$length*$length;
            }
            $cubeSide = 5;
            $cube = CubeFormula($cubeSide);
            
               echo "<td> s = $cubeSide  </td>";
               echo "<td> V = s<sup>3</sup> </td>";
               echo "<td> $cube </td>";
               ?>
            </tr>
            <tr>
                <?php
                function rightRectangularPrism($l,$w,$h)
                {
                    return $l*$w*$h;
                }
                $rrl = 4;
                $rrw = 3;
                $rrh = 2;
                $rightPrism = rightRectangularPrism($rrl,$rrw,$rrh);
                echo "<td> l=$rrl<br>w=$rrw<br>h=$rrh  </td>";
                echo "<td> V = lwh </td>";
                echo "<td> $rightPrism </td>";
                ?>
            </tr>
        </table>
        <?php

        
        ?>
    </body>
</html>
