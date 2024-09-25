<?php

//Buatlah array multidimensi yang terdiri dari persegi panjang, panjang, dan lebar.
//Hitung nilai luas kemudian tambahkan data luas kedalam array yang telah dibuat sebelumnya.

$data=array(    array("Persegi"=>"Persegi1","Panjang"=>56,"Lebar"=>23),
                array("Persegi"=>"Persegi2","Panjang"=>33,"Lebar"=>21),
                array("Persegi"=>"Persegi3","Panjang"=>65,"Lebar"=>42),
                array("Persegi"=>"Persegi4","Panjang"=>73,"Lebar"=>29),
            ); 
  
            

            foreach($data as $n ){
                $luas=$n["Panjang"]* $n ["Lebar"];
                echo $n ['Persegi']. "  " .$n ['Panjang']. "  " .$n ['Lebar']."  ". $luas."<br>";
                
            }

            echo "<hr>";

    $data=array(array("Persegi"=>"Persegi1","Panjang"=>56,"Lebar"=>23),
            array("Persegi"=>"Persegi2","Panjang"=>33,"Lebar"=>21),
            array("Persegi"=>"Persegi3","Panjang"=>65,"Lebar"=>42),
            array("Persegi"=>"Persegi4","Panjang"=>73,"Lebar"=>29),
        ); 

        foreach($data as $n =>$persegi ){
            $data[$n]["Luas"]=$data[$n]["Panjang"]*$data[$n]["Lebar"];

            //$data[0]["Luas"]=$data[0]["Panjang]*$data[0]["lebar"];
        }

        $jsonData=json_encode($data,JSON_PRETTY_PRINT);
        echo "<pre>".$jsonData."</pre>";

        
            

            

            
                