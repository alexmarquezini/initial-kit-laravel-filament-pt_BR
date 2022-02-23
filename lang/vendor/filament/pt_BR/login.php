<?php

return [

    'title' => 'Entrar',

    'heading' => 'Faça login em sua conta',

    'buttons' => [

        'submit' => [
            'label' => 'Entrar',
        ],

    ],

    'fields' => [

        'email' => [
            'label' => 'E-mail',
        ],

        'password' => [
            'label' => 'Senha',
        ],

        'remember' => [
            'label' => 'Lembre-se de min',
        ],

    ],

    'messages' => [
        'failed' => 'Essas credenciais não correspondem aos com nossos registros.',
        'throttled' => 'Muitas tentativas de login. Por favor, aguarde :seconds segundos para tentar novamente.',
    ],

];
