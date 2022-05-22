<?php

echo "<H1>Logiciel E5 - RH 1L !!!</H1>";

if (function_exists('curl_init'))
{
    $curl = curl_init();

    curl_setopt($curl, CURLOPT_URL, "https://www.jbaubry.fr/coursEnLigne/E5.php");
    curl_setopt($curl, CURLOPT_PORT, "443");
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');

    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $output = curl_exec($curl);
    if($output == "32631827")
        echo "<H2>jbaubry.fr : OK</H2>";
    else
        echo "<H2>jbaubry.fr : pas OK</H2>";
}
else
{
    echo "<br>'apt install php-curl' puis redémarrer apache 2<br>";
}


