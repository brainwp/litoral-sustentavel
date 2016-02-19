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
			array (
				'key' => 'field_56a793a912c60',
				'label' => 'Categoria das Publicações',
				'name' => 'featured_cat',
				'type' => 'taxonomy',
				'taxonomy' => 'category',
				'field_type' => 'select',
				'allow_null' => 1,
				'load_save_terms' => 0,
				'return_format' => 'id',
				'multiple' => 0,
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


//ACF OPTIONS
if(function_exists("register_field_group"))
{
    register_field_group(array (
        'id' => 'acf_eixos',
        'title' => 'Eixos',
        'fields' => array (
            array (
                'key' => 'field_56c20d07ccc1c',
                'label' => 'Ícone',
                'name' => 'thumbnail',
                'type' => 'image',
                'save_format' => 'object',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'ef_taxonomy',
                    'operator' => '==',
                    'value' => 'eixos',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'side',
            'layout' => 'default',
            'hide_on_screen' => array (
            ),
        ),
        'menu_order' => 0,
    ));
    register_field_group(array (
        'id' => 'acf_temas',
        'title' => 'Temas',
        'fields' => array (
            array (
                'key' => 'field_56c20f44270ee',
                'label' => 'Cor',
                'name' => 'color',
                'type' => 'color_picker',
                'instructions' => 'Selecione a cor do tema',
                'default_value' => '#' . dechex( rand( 0x000000, 0xFFFFFF ) ),
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'ef_taxonomy',
                    'operator' => '==',
                    'value' => 'temas',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array (
            ),
        ),
        'menu_order' => 0,
    ));
}
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_agenda-de-desenvolvimento',
		'title' => 'Agenda de Desenvolvimento',
		'fields' => array (
			array (
				'key' => 'field_56c349d659282',
				'label' => 'Exibir post na página Agenda de Desenvolvimento?',
				'name' => 'show_in_agenda',
				'type' => 'radio',
				'choices' => array (
					'true' => 'Sim',
					'false' => 'Não',
				),
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => 'false',
				'layout' => 'vertical',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'side',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
