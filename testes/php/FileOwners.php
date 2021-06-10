<?php


/* ----------------- DESCRIÇÃO DO TESTE -----------------------*/

/*
Implemente uma função que ao receber um array associativo contendo arquivos e donos, retorne os arquivos agrupados por dono. 

Por exempolo, um array ["Input.txt" => "Jose", "Code.py" => "Joao", "Output.txt" => "Jose"] a função groupByOwners deveria retornar ["Jose" => ["Input.txt", "Output.txt"], "Joao" => ["Code.py"]].


*/

class FileOwners
{
    public static function groupByOwners($files){
        $finalArray = array();

        //Define os valores unicos do array ou os donos (Não ficou claro para mim se a Maria e a maria eram a mesma pessoa ou pessoas diferentes, então por estar escrito de forma diferente optei por separar as duas);
        $uniqueValues = array_values(array_unique($files));

        //Loop para definir as keys antigas e em seguida inserir numa nova array com o Nome sendo a key e os arquivos os novos values;
        for ($x = 0; $x < sizeof($uniqueValues); $x++) {
            $keys = array_keys($files, $uniqueValues[$x]);

            array_push($finalArray[$uniqueValues[$x]] = $keys);
        } 

        return $finalArray;
        }
    }

$files = array
(
    "Input.txt" => "Jose",
    "Code.py" => "Joao",
    "Output.txt" => "Jose",
    "Click.js" => "Maria",
    "Out.php" => "maria",

);
var_dump(FileOwners::groupByOwners($files));
