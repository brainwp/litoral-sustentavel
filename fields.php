<?php
/**
* ACF Fields 
*/
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_configuracoes-de-template',
		'title' => 'Configurações de Template',
		'fields' => array (
			array (
				'key' => 'field_569e91e382d63',
				'label' => 'Cor do menu',
				'name' => 'menu_color',
				'type' => 'color_picker',
				'default_value' => '#0d3799',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page-triagem-parent.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
