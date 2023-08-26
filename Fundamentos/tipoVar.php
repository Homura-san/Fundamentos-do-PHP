<?php

    # Convertendo string pra inteiro
$f = "0";
echo gettype($f);
echo "
";

$f += 2;
echo gettype($f);

    # Convertendo inteiro pra float/double
echo "
";
$f += 2.5;
echo gettype($f);

#
echo "
";
$f = 5 + "10 carros";
echo gettype($f);
echo " ";
echo $f;

echo "
";

// Setando tipo de uma variável
$g = 10;
settype($g, "string");
echo gettype($g);
