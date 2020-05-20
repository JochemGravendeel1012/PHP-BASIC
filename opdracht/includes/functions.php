<?php

 $products = array(
     "1" => [
         'naam' => 'OFF-WHITE Prestos',
         'prijs' => 480.00
     ],
     "2" => [
         'naam' => 'OFF-WHITE T-shirt',
         'prijs' => 180.00
     ],
     "3" => [
         'naam' => 'OFF-WHITE Jordan 1',
         'prijs' => 670.75
     ],
 );

function getInput()
{
    $input = $_GET['input'] ?? 'vul een waarde in hierboven en klik op [check]';
    echo $input;
}


function getProductNr()
{
    $productnummer = $_GET['productnummer'] ?? 'vul een productnummer in!';
}

function getAmount()
{
    $aantalProd = $_GET['aantal'] ?? 'vul een aantal in!';
    echo $aantalProd;
}

function getAge()
{
    $leeftijd = $_GET['leeftijd'] ?? 'vul een leeftijd in!';
    echo $leeftijd;
}

function getDataType()
{
    if (isset($_GET['input'])) {
        $datatype = gettype($_GET['input']) ;
        echo $datatype;
    }
}


function sale()
{
    if (!isset($_GET['leeftijd']) || $_GET['leeftijd'] == 0) {
        return;
    }
    
    $age = $_GET['leeftijd'];
    $sale = 0;
    
    if ($age < 16) {
        $sale = 1;
    } elseif ($age == 19) {
        $sale = 0.19;
    } elseif ($age == 18) {
        $sale = 0.18;
    } elseif ($age == 17) {
        $sale = 0.17;
    } elseif ($age == 16) {
        $sale = 0.16;
    }
    
    echo $sale . ' euro';
}
function prijs()
{
    global $products;

    if (isset($_GET['productnummer']) && isset($_GET['aantal'])) {
        if (isset($products[$_GET['productnummer']])) {
            echo $products[$_GET['productnummer']]['prijs'] * $_GET['aantal'];
        }
    }
}