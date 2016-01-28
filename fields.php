<?php
/**
* ACF Fields 
*/
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_configuracao-de-template',
		'title' => 'Configuração de template',
		'fields' => array (
			array (
				'key' => 'field_56a793a912c60',
				'label' => 'Categoria dos Destaques',
				'name' => 'featured_cat',
				'type' => 'taxonomy',
				'taxonomy' => 'category',
				'field_type' => 'select',
				'allow_null' => 1,
				'load_save_terms' => 0,
				'return_format' => 'id',
				'multiple' => 0,
			),
			array (
				'key' => 'field_56aa619cd54ec',
				'label' => 'Link no botão Leia Mais na sub-página de destaque',
				'name' => 'link-readmore',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page-equipe.php',
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
	register_field_group(array (
		'id' => 'acf_configuracoes-de-template-2',
		'title' => 'Configurações de template',
		'fields' => array (
			array (
				'key' => 'field_56aa16c78a4b3',
				'label' => 'Sub titulo',
				'name' => 'sub_title',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_56aa6211e29f8',
				'label' => 'Link no botão Leia Mais na sub-página de destaque',
				'name' => 'link-readmore',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page-camara.php',
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
