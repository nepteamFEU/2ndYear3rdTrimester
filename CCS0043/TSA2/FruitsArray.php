<html>
<head>
    <title> Fruits Array </title>
</head>
<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
    }
    table, td, th {
       border: 1px solid;
       border-color: black;
       text-align: center;
    }
    h1, h2, h3 {
        margin:auto;
    }
    img {
        max-width: 100px;
        height: 100px;
    }
</style>
<body>
<table>
<?php
    $textFruit = 'names.txt';
    $fruitName = [];
    
    if (file_exists($textFruit)) {
        $fileHandle = fopen($textFruit, 'r');
        if ($fileHandle) {
            while (($line = fgets($fileHandle)) !== false) {
                $trimmedLine = trim($line);
                $fruitName[] = $trimmedLine;
            }
            fclose($fileHandle);
        } else {
            echo "Error: Unable to open the file.";
        }
    } else {
        echo 'Error: File does not exist.';
    }

    $textdesc = 'description.txt';
    $fruitdesc = [];
    
    if (file_exists($textdesc)) {
        $fileHandle = fopen($textdesc, 'r');
        if ($fileHandle) {
            while (($line = fgets($fileHandle)) !== false) {
                $trimmedLine = trim($line);
                $fruitdesc[] = $trimmedLine;
            }
            fclose($fileHandle);
        } else {
            echo "Error: Unable to open the file.";
        }
    } else {
        echo 'Error: File does not exist.';
    }

    $images = [
        "https://i.imgur.com/lEMqmxg.png",
        "https://i.imgur.com/icusq0B.jpeg",
        "https://i.imgur.com/oq26Snt.jpeg",
        "https://i.imgur.com/4oC5Kqc.jpeg,",
        "https://i.imgur.com/N2ick8R.png",
        "https://i.imgur.com/j89LCg3.png",
        "https://i.imgur.com/KCHWbAu.jpeg",
        "https://i.imgur.com/IerUIeF.jpeg",
        "https://i.imgur.com/M94V2hn.jpeg",
        "https://i.imgur.com/yhZVcQM.jpeg",
    ];
    $facts =[
        "There are no words that rhyme with orange.",
        "There are over 7,500 varieties of apples grown worldwide.",
        "Ancient bananas or Wild bananas have seeds in them unlike domestic bananas with no seeds inside them.",
        "Peach Fuzz is a form of protection to animals who eat fruits.",
        "Pineapples are highly acidic. They typically score between a 3 and 4 on the pH scale.",
        "Lemons can be used to make a battery with two metals suspended in an acidic solution.",
        "There have been tomatos that have been to space.",
        "Grapes that are meant for consumption are not the same kind of grapes used for winemaking.",
        "The durian has been banned from public transportation in some country.",
        "A mange has a larrge flat kernel within itself which is about 4-7cm long."
    ]
?>
<tr>
    <th colspan="4"><h1>MY FRUITS</h1></th>
</tr>
<tr>
    <td><h2>IMAGE</h2></td>
    <td><h2>NAME</h2></td>
    <td><h2>DESCRIPTION</h2></td>
    <td><h2>FACTS</h2></td>
</tr>
<?php
    $totalEntries = min(count($fruitName), count($fruitdesc), 10); // Ensure we do not exceed array bounds
    for ($x = 0; $x < $totalEntries; $x++) {
        echo '<tr>';
        echo '<td><img src="' . $images[$x % count($images)] . '" alt="' . $fruitName[$x] . '" /></td>';
        echo '<td><h3>' . htmlspecialchars($fruitName[$x]) . '</h3></td>';
        echo '<td><p>' . htmlspecialchars($fruitdesc[$x]) . '</p></td>';
        echo '<td>'. htmlspecialchars($facts[$x]) .' </td>';
        echo '</tr>';
    }
?>
</table>
</body>
</html>
