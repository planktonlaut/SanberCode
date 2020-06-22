<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
</head>
<body>
    <h1>Berlatih Array</h1>
        
    <?php 
        echo "<h3> Soal 1 </h3>";
        /* 
            SOAL NO 1
            Kelompokkan nama-nama di bawah ini ke dalam Array.
            Kids : "Mike", "Dustin", "Will", "Lucas", "Max", "Eleven" 
            Adults: "Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"
        */
        $kids = array("Mike", "Dustin", "Will", "Lucas", "Max", "Eleven"); // Lengkapi di sini
        $adults = array("Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"); 
        echo "Array Kids : " . $kids[0] . ", ". $kids[1] . ", ". $kids[2] . ", ". $kids[3] . ", " . $kids[4] . " and " . $kids[5] . ".<br>";
        echo "Array Adults : " . $adults[0] . ", ". $adults[1] . ", ". $adults[2] . ", " . $adults[3] . " and " . $adults[4] . ".";

        echo "<h3> Soal 2</h3>";
        /* 
            SOAL NO 2
            Tunjukkan panjang Array di Soal No 1 dan tampilkan isi dari masing-masing Array.
        */
        echo "Cast Stranger Things: ";
        echo "<br>";
        echo "Total Kids: " ; // Berapa panjang array kids
        echo count($kids);
        echo "<br>";
        echo "<ol>"; 
        echo "<li> $kids[0] </li>";
        echo "<li> $kids[1] </li>";
        echo "<li> $kids[2] </li>";
        echo "<li> $kids[3] </li>";
        echo "<li> $kids[4] </li>";
        echo "<li> $kids[5] </li>";
        // Lanjutkan

        echo "</ol>";
        
        echo "Total Adults: " ;// Berapa panjang array adults
        echo count($adults);
        echo "<br>";
        echo "<ol>";
        echo "<li> $adults[0] </li>";
        echo "<li> $adults[1] </li>";
        echo "<li> $adults[2] </li>";
        echo "<li> $adults[3] </li>";
        echo "<li> $adults[4] </li>";
        // Lanjutkan

        echo "</ol>";

        /*
            SOAL No 3
            Susun data-data berikut ke dalam bentuk Asosiatif Array (Array Multidimensi)
            
            Name: "Will Byers"
            Age: 12,
            Aliases: "Will the Wise"
            Status: "Alive"
            Name: "Mike Wheeler"
            Age: 12,
            Aliases: "Dungeon Master"
            Status: "Alive"
            Name: "Jim Hopper"
            Age: 43,
            Aliases: "Chief Hopper"
            Status: "Deceased"
            Name: "Eleven"
            Age: 12,
            Aliases: "El"
            Status: "Alive"
            
        */
        echo "<h3> Soal 3</h3>";
        $biodata = [
            ["Name" => "Will Byers","Age" => "12","Aliases" => "Will the Wise","Status" => "Alive"],
            ["Name" => "Mike Wheeler","Age" => "12","Aliases" => "Dungeon Master","Status" => "Alive"],
            ["Name" => "Jim Hopper","Age" => "43","Aliases" => "Chief Hopper","Status" => "Deceased"],
            ["Name" => "Eleven","Age" => "12","Aliases" => "El","Status" => "Alive"]
        ];

        echo "<p> Menampilkan Biodata dari Mike Wheeler :</p>";
        echo "Name : ".$biodata[1]["Name"];
        echo "<br>Age : ".$biodata[1]["Age"];
        echo "<br>Aliases : ".$biodata[1]["Aliases"];
        echo "<br>Status : ".$biodata[1]["Status"]."<br>";

        echo "<hr>";
        echo "<p> Menampilkan Semua Biodata :</p>";
        foreach($biodata as $bio){
            echo "Nama : ".$bio["Name"]."<br/>";
            echo "Umur : ".$bio["Age"]."<br/>";
            echo "Alias : ".$bio["Aliases"]."<br/>";
            echo "Status : ".$bio["Status"]."<br/>";
            echo "<br>";
        }     
    ?>
</body>
</html>