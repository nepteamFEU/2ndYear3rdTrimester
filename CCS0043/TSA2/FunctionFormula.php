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
           padding: 4px;
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
            <tr>
                <?php
                function prism($B,$H)
                {
                    return $B*$H;
                }
                $prismBase = 2;
                $prismHeight = 6;
                $prismVolume = prism($prismBase,$prismHeight);
                echo "<td> b=$prismBase h=$prismHeight</td>";
                echo "<td> V = bh </td>";
                echo "<td> $prismVolume";
                ?>
            </tr>
            <tr>
                <?php
                function pyramid($L,$W,$H)
                {
                    return ($L*$W*$H)/3;
                }
                $pyramidL = 23;
                $pyramidW = 12;
                $pyramidH = 6;
                $pyramidVolume = pyramid($pyramidL,$pyramidW,$pyramidH);
                echo "<td> l=$pyramidL<br>w=$pyramidW<br>h=$pyramidH </td>";
                echo "<td> V = (lwh)/3 </td>";
                echo "<td> $pyramidVolume </td>";
                ?>
            </tr>
            <tr>
                
                <?php
                function sphere($R)
                {
                    $RCUBE = $R*$R*$R;
                    return ((4/3)*3.1415*($RCUBE));
                }
                $sphereR = 6.0;
                $sphereVolume = sphere($sphereR);
                echo "<td> r = $sphereR  </td>";
                echo "<td> V = (4/3)πr<sup>3</sup> </td>";
                echo "<td> $sphereVolume </td>";
                ?>
            </tr>
        </table>
        <?php

        
        ?>
    </body>
</html>
