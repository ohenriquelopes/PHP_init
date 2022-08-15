<?php


/*
$idade = 21;

echo "Voce so pode entrar se tiver mais do que 18 anos." .PHP_EOL;

if ($idade > 18 || $idade == 18) { // || equivale ao OU ou usar o OR
// AND é o E e pode usar o && tambem
  echo "Voce tem $idade anos." .PHP_EOL;
  echo 'Pode entrar';
}

 */


$idade = 17;
$numeroDePessoas = 2;

echo "Voce so pode entrar se tiver a prtir de 18 anos ou ";
echo "a partir de 16 anos acompanhado" . PHP_EOL;

if ($idade >= 18) {
  echo "Voce tem $idade anos. Pode entrar sozinho.";
} else if ($idade >= 16 && $numeroDePessoas > 1) {
  echo "Voce tem $idade anos, está acompanhado(a), entao pode entrar.";
} else {
  echo "Voce so tem $idade anos. Voce nao pode entar.";
  echo PHP_EOL . "É uma pena";
}

// Se voce tiver apenas uma linha apos a condicao nao e necessario colocar { } ele executa a UNICA linha apos ela e "finaliza" o bloco


echo PHP_EOL;
echo "Adeus!";
