<?php

return [
	'router' => [
		'routes' => [
			'carro-home' => [
				'type' => 'Literal',
				'options' => [
					'route' => '/carro',
					'defaults' => [
                        'controller' => 'Carro\Controller\Carro',
                        'action'     => 'index',
                    ],
				]
			]
		]
	],

	'service_manager' => [
		'invokables' => [
			'Carro\Service\CarroService' => 'Carro\Service\CarroService'
		]
	],

	'controllers' => [
		'invokables' => [
			'Carro\Controller\Carro' => 'Carro\Controller\CarroController'
		]
	],

	'view_manager' => [
		'template_path_stack' => [
			__DIR__ . '/../view',
		]
	]
];