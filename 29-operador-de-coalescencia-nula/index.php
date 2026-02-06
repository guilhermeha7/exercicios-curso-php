<?php
$fornecedores = [
    [
        'nome' => 'Fornecedor A',
        'status' => 'ativo'
    ],
    [
        'nome' => 'Fornecedor B',
        'status' => 'inativo'
    ],
    [
        'nome' => 'Fornecedor C'
    ]
];

echo "Status do Fornecedor C: ".($fornecedores[2]['status'] ?? 'Status não informado');