<?php

        function httpPost($url, $data)
        {
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($curl);
            curl_close($curl);
            return $response;
        }
        
        function get_data($lop){
            $sFile = file_get_contents("https://kakaka6c.pythonanywhere.com/loading/".$lop, False);
            echo $sFile;
        }


        // httpPost('kakaka6c.pythonanywhere.com/testde',"class=8&socau=TG-4-GIOI-5,TG-4-KHA-5,TG-4-TB-5&ans=0&username=tailieutoancoloigiai.com&total=15&count=1&TL=0&TN=100");
        // get_class_1();
?>