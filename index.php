<?php

    require __DIR__.'/vendor/autoload.php';

    use \App\Entity\Vaga;

    //BUSCA
    $busca = filter_input(INPUT_GET, 'busca', FILTER_SANITIZE_STRING);

    //FILTRO STATUS
    $filtroStatus = filter_input(INPUT_GET, 'status', FILTER_SANITIZE_STRING);
    $filtroStatus = in_array($filtroStatus,['s','n']) ? $filtroStatus : '';


    //CONDIÇÔES SQL
    $condicoes = [
        strlen($busca) ? 'titulo LIKE "%'.str_replace(' ', '%',$busca).'%"' : null,
        strlen($filtroStatus) ? 'ativo = "'.$filtroStatus.'"' : null
    ];

    //REMOVE POSIÇÔES VAZIAS
    $condicoes = array_filter($condicoes);
    
    //CLÁUSULA WHERE
    $where = implode(' AND ',$condicoes);
    echo "<pre>";
    print_r($where);
    echo "</pre>";
    

    $vagas = Vaga::getVagas($where);
    

    include __DIR__.'/includes/header.php'; 
    include __DIR__.'/includes/listagem.php';
    include __DIR__.'/includes/footer.php';
