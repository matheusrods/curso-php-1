<?php

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],
    '123.456.789-11' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.256.789-12' => [
    'titular' => 'Alberto',
    'saldo' => 300
    ]
];

$contasCorrentes[] = [
    'titular' => 'Claudia',
    'saldo' => 2000
];

$contasCorrentes[] = [
    'titular' => 'Claudia 2',
    'saldo' => 2002
];
    
    
foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}
    



