<?php
/* THEME OPTIONS */
require_once get_stylesheet_directory() . '/inc/class-theme-options.php';
$odin_theme_options = new Odin_Theme_Options( 
    'odin-options', // Slug/ID da página (Obrigatório)
    'Opções do tema', // Titulo da página (Obrigatório)
    'manage_options' // Nível de permissão (Opcional) [padrão é manage_options]
);
$odin_theme_options->set_tabs(
    array(
        array(
            'id' => 'social_cfg', // ID da aba e nome da entrada no banco de dados.
            'title' => __('Social','litoral-sustentavel'), // Título da aba.
        ),
        array(
            'id' => 'home_cfg', // ID da aba e nome da entrada no banco de dados.
            'title' => __('Home','litoral-sustentavel'), // Título da aba.
        ),
        array(
            'id' => 'footer_cfg', // ID da aba e nome da entrada no banco de dados.
            'title' => __('Rodapé','litoral-sustentavel'), // Título da aba.
        ),
    )
);
$odin_theme_options->set_fields(
    array(
        'social_section' => array(
            'tab'   => 'social_cfg', // Sessão da aba odin_general
            'title' => __('Configurações de redes sociais','litoral-sustentavel'),
            'fields' => array(
                array(
                    'id' => 'facebook',
                    'label' => __('URL do facebook','litoral-sustentavel'),
                    'type' => 'text',
                    //'description' => __( 'Descrition Example', 'odin' )
                ),
                array(
                    'id' => 'twitter',
                    'label' => __('URL do twitter','litoral-sustentavel'),
                    'type' => 'text',
                    //'description' => __( 'Descrition Example', 'odin' )
                ),
                array(
                    'id' => 'youtube',
                    'label' => __('URL do youtube','litoral-sustentavel'),
                    'type' => 'text',
                    //'description' => __( 'Descrition Example', 'odin' )
                ),
            )
        ),
        'home_section' => array(
            'tab'   => 'home_cfg', // Sessão da aba odin_general
            'title' => __('Configurações da página inicial','litoral-sustentavel'),
            'fields' => array(
                array(
                    'id' => 'agenda_eventos_exibidos',
                    'label' => __('Agenda - Eventos exibidos','litoral-sustentavel'),
                    'type' => 'text',
                    'attributes'  => array( // Opcional (atributos para input HTML/HTML5)
                        'type' => 'number',
                        'min'  => '3',
                    ),
                    'default' => 3
                    //'description' => __( 'Descrition Example', 'odin' )
                ),
                array(
                    'id' => 'noticias_posts_exibidos',
                    'label' => __('Notícias - Posts exibidos','litoral-sustentavel'),
                    'type' => 'text',
                    'attributes'  => array( // Opcional (atributos para input HTML/HTML5)
                        'type' => 'number',
                        'min'  => '3',
                    ),
                    'default' => 3
                    //'description' => __( 'Descrition Example', 'odin' )
                ),
				array(
                    'id' => 'modal_na_home',
                    'label' => __('Conteúdo do modal da home'),
                    'type' => 'editor',
                ),
            )
        ),
        'footer_section' => array(
            'tab'   => 'footer_cfg', // Sessão da aba odin_general
            'title' => __('Configurações do rodapé','litoral-sustentavel'),
            'fields' => array(
                array(
                    'id' => 'footer_name',
                    'label' => __('Nome no rodapé','litoral-sustentavel'),
                    'type' => 'text'
                    //'description' => __( 'Descrition Example', 'odin' )
                ),
                array(
                    'id' => 'footer_infos',
                    'label' => __('Contatos no rodapé','litoral-sustentavel'),
                    'type' => 'textarea',
                    'description' => __( 'Adicione a Rua, Número, Bairro, Cidade, CEP e e-mail de contato.', 'litoral-sustentavel' )
                ),
                array(
                    'id' => 'footer_tel',
                    'label' => __('Telefone','litoral-sustentavel'),
                    'type' => 'text',
                ),
                array(
                    'id' => 'footer_convenio',
                    'label' => __('Logos Convênio - Imagem','litoral-sustentavel'),
                    'type' => 'image',
                    //'description' => __( 'Adicione o logo do Pólis aqui', 'litoral-sustentavel' )
                ),
                array(
                    'id' => 'footer_destaque_1_title',
                    'label' => __('Destaque no footer 1 (Esquerda) - Titulo','litoral-sustentavel'),
                    'type' => 'text',
                    //'description' => __( 'Adicione o logo do Pólis aqui', 'litoral-sustentavel' )
                ),
                array(
                    'id' => 'footer_destaque_1_text',
                    'label' => __('Destaque no footer 1 (Esquerda) - Texto','litoral-sustentavel'),
                    'type' => 'editor',
                ),
                array(
                    'id' => 'footer_destaque_1_link',
                    'label' => __('Destaque no footer 1 (Esquerda) - Link','litoral-sustentavel'),
                    'type' => 'text',
                    //'description' => __( 'Adicione o logo do Pólis aqui', 'litoral-sustentavel' )
                ),
                array(
                    'id' => 'footer_destaque_2_title',
                    'label' => __('Destaque no footer 2 (Direita) - Titulo','litoral-sustentavel'),
                    'type' => 'text',
                    //'description' => __( 'Adicione o logo do Pólis aqui', 'litoral-sustentavel' )
                ),
                array(
                    'id' => 'footer_destaque_2_text',
                    'label' => __('Destaque no footer 2 (Direita) - Texto','litoral-sustentavel'),
                    'type' => 'editor',
                ),
                array(
                    'id' => 'footer_destaque_2_link',
                    'label' => __('Destaque no footer 2 (Direita) - Link','litoral-sustentavel'),
                    'type' => 'text',
                    //'description' => __( 'Adicione o logo do Pólis aqui', 'litoral-sustentavel' )
                ),
            )
        ),
    )
);