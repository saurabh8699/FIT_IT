<?php 
    while(True){        
        echo "1. Create a file\n2. Read a file\n3. Write in a file\n4. Append in a file\n5. Delete a file\n6. Exit\n";
        $c = readLine();
        switch($c){
            case 1: 
                echo "Enter the file name : ";
                $file = readLine();
                fopen($file,'r');
                break;
            case 2:
                echo "Enter the file name : ";
                $file = readLine();
                echo "Enter the mode in which the file is to be opened : ";
                $mode = readLine();
                $f = fopen($file,$mode);
                if($mode=='r' || $mode=='r+'){
                    if(file_exists($file)){
                        while(!feof($f)){
                            echo fgets($f) . "\n";
                        }
                        fclose($f);
                    }
                    else{
                        die("Error message");
                    }
                }
                break;
            case 3:
                echo "Enter the file name : ";
                $file = readLine();
                $f = fopen($file,'w+');
                echo "Enter the text : ";
                $txt = readLine();
                fwrite($f, $txt);
                fclose($f);
                break;
            case 4: 
                echo "Enter the file name : ";
                $file = readLine();
                $p = fopen($file, 'a+');
                echo "Enter the text : ";
                $txt = readLine();
                fwrite($p,$txt);
                fclose($p);
                break;
            case 5:
                echo "Enter the file to be deleted : ";
                $file = readLine();

                unlink($file);
                // fclose($file);
                break;
            case 6: 
                exit("Thanks for using our services!!");
                break;
        }
    }

?>
