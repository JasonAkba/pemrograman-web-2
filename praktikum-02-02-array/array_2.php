<?php
        $programmer_php = array ("Andi", "Budi", "Wati" , "Gunawan" , "Baco" , "Becce" , "Fatma");
        $programmer_python = array ("Andi" , "Fatma" , "Fadli" , "Haris" , "Baco");
        
        echo "Bagian A : ";
        echo "<ul>";
        sort($programmer_php);
        foreach ($programmer_php as $data)
        {
            echo "<li>".$data."</li>";
        }
        echo "</ul>";

        echo "Bagian B :";
        echo "<ul>";
        rsort($programmer_python);
        foreach ($programmer_python as $data)
        {
            echo "<li>".$data."</li>";
        }
        echo "</ul>";

        echo "Bagian C : ";
        $bukan_python = array_diff ($programmer_php, $programmer_python);
        echo "<ul>";
        foreach ($bukan_python as $data)
        {
            echo "<li>".$data."</li>";
        }
        echo "</ul>";


        echo "Bagian D : ";
        $bukan_php = array_diff ($programmer_python, $programmer_php);
        echo "<ul>";
        foreach ($bukan_php as $data)
        {
            echo "<li>".$data."</li>";
        }
        echo "</ul>";

        echo "Bagian E : ";
        $php_dan_python = array_intersect ($programmer_python, $programmer_php);
        echo "<ul>";
        foreach ($php_dan_python as $data)
        {
            echo "<li>".$data."</li>";
        }
        echo "</ul>";


        echo "Bagian F : ";
        $semua = array_merge ($programmer_php, $programmer_python);
        echo "<ul>";
        sort($semua);
        foreach ($semua as $data)
        {
            echo "<li>".$data."</li>";
        }
        echo "</ul>";

        
        echo "Nomor 12 :";
        array_push($programmer_php, "Jason Nathaniel Notanubun");
        
        echo "<ul>";
        $countProgrammerPhp = count($programmer_php);
        for($i=0; $i < $countProgrammerPhp; $i++)
        {
            echo "<li>".$programmer_php[$i] . "<br>";
        }
        echo "</ul>";

?>