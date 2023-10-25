<link rel="stylesheet" href="explode.css">
<form class="form">
   


<?php

$entrada="12;25;peruíbe;100;caraguava;2023;9";
$info=explode(";",$entrada);
echo "<h1>Lista com Explode</h1><br>";
echo "nº de agentes: ".$info{0}."<br>";
echo "nº de aparelhos: ".$info{1}."<br>";
echo "Cidade: ".$info{2}."<br>";
echo "Posto: ".$info{3}."<br>";
echo "Bairro: ".$info{4}."<br>";
echo "Ano: ".$info{5}."<br>";
echo "Mês: ".$info{6}."<br>";




$tags=["Nº Agentes:",
"Aparelhos:",
"CIdade:",
"Postos:",
"Bairro:",
"Ano:",
"Mês:"];

// for($i; $i<6; $i++)
// {
//     echo $tags[$i];
// }




echo "<h1>Lista com Explode 2</h1><br>";
echo $tags[0]." ".$info[0]. "<br>";
echo $tags[1]." ".$info[1]. "<br>";
echo $tags[2]." ".$info[2]. "<br>";
echo $tags[3]." ".$info[3]. "<br>";
echo $tags[4]." ".$info[4]. "<br>";
echo $tags[5]." ".$info[5]. "<br>";
echo $tags[6]." ".$info[6]. "<br>";




// $hoje=date("d/m/Y");
// $partes=explode("/",$hoje);
// $data_mysql=$partes[2]."-".$partes[1]."-".$partes[0];
// echo $data_mysql;

// echo "<br>";

// $nome="Larissa Silva do Prado";
// $nomes=explode(" ", $nome);
// echo $nomes[0]." ".$nomes[1]." ".$nomes[2]." ".$nomes[3];
// echo $nomes[1];
// echo $nomes[2];
// echo $nomes[3];
// phpinfo(); "para ver as informaçoes sobre o php... como ver a versão"

?></form></table>