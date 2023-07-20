<?php
/***
 * settings page field
 */
if( function_exists('acf_add_local_field_group') ):
    acf_add_local_field_group(array(
        'key' => 'group_61def9b13ad29',
        'title' => 'Global CSS',
        'fields' => array(
            array(
                'key' => 'field_61ec708480f60',
                'label' => 'link font-family',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',


                ),


                'placement' => 'left',


                'endpoint' => 0,


            ),


            array(


                'key' => 'field_61ec725f80f62',


                'label' => 'Url`s font-family',


                'name' => 'urls_font-family',


                'type' => 'repeater',


                'instructions' => 'Додайте посилання на font-family',


                'required' => 0,


                'conditional_logic' => 0,


                'wrapper' => array(


                    'width' => '100',


                    'class' => '',


                    'id' => '',


                ),


                'collapsed' => '',


                'min' => 0,


                'max' => 0,


                'layout' => 'table',


                'button_label' => '',


                'sub_fields' => array(


                    array(


                        'key' => 'field_61ec70d480f61',


                        'label' => 'Url font-family',


                        'name' => 'url_font-fam',


                        'type' => 'url',


                        'instructions' => '<a href="https://fonts.google.com/" targey="_blank">Google fonts</a>',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '100',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '',


                        'placeholder' => 'https://fonts.googleapis.com/css2?family=EB+Garamond&family=Montserrat:wght@500&family=Philosopher&display=swap',


                    ),


                ),


            ),


            array(


                'key' => 'field_61df45806039b',


                'label' => 'body',


                'name' => '',


                'type' => 'tab',


                'instructions' => '',


                'required' => 0,


                'conditional_logic' => 0,


                'wrapper' => array(


                    'width' => '',


                    'class' => '',


                    'id' => '',


                ),


                'placement' => 'left',


                'endpoint' => 0,


            ),


            array(


                'key' => 'field_61df45ad6039c',


                'label' => 'body',


                'name' => 'body_style',


                'type' => 'group',


                'instructions' => '',


                'required' => 0,


                'conditional_logic' => 0,


                'wrapper' => array(


                    'width' => '',


                    'class' => '',


                    'id' => '',


                ),


                'layout' => 'block',


                'sub_fields' => array(


                    array(


                        'key' => 'field_61df45ad6039d',


                        'label' => 'font-family ( primary )',


                        'name' => 'font_family',


                        'type' => 'text',


                        'instructions' => 'Головний шрифт


    --kmnd-body-primary-font-family',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '50',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '',


                        'placeholder' => '',


                        'prepend' => 'font-family:',


                        'append' => '',


                        'maxlength' => '',


                    ),


                    array(


                        'key' => 'field_61ed84bdcb911',


                        'label' => 'font-family ( secondary )',


                        'name' => 'font_family_secondary',


                        'type' => 'text',


                        'instructions' => 'Вторинний шрифт


    --kmnd-body-secondary-font-family',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '50',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '',


                        'placeholder' => '',


                        'prepend' => 'font-family:',


                        'append' => '',


                        'maxlength' => '',


                    ),


                    array(


                        'key' => 'field_61f6da3f4e361',


                        'label' => 'font-family ( tertiary )',


                        'name' => 'font_family_tertiary',


                        'type' => 'text',


                        'instructions' => 'Третинний шрифт


    --kmnd-body-tertiary-font-family',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '50',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '',


                        'placeholder' => '',


                        'prepend' => 'font-family:',


                        'append' => '',


                        'maxlength' => '',


                    ),


                    array(


                        'key' => 'field_61ed8390cb910',


                        'label' => 'ftransition animate',


                        'name' => 'transition_animate',


                        'type' => 'text',


                        'instructions' => 'анімація переходу',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '50',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => 'all 0.5s ease',


                        'placeholder' => 'all 0.5s ease',


                        'prepend' => '',


                        'append' => '',


                        'maxlength' => '',


                    ),


                    array(


                        'key' => 'field_61df4684603ba',


                        'label' => 'background-color',


                        'name' => 'background_color',


                        'type' => 'color_picker',


                        'instructions' => '--kmnd-body-background',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '33',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '#ffffff',


                        'enable_opacity' => 1,


                        'return_format' => 'string',


                    ),


                    array(


                        'key' => 'field_61df45ad6039e',


                        'label' => 'color ( primary )',


                        'name' => 'color',


                        'type' => 'color_picker',


                        'instructions' => '--kmnd-body-color',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '33',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '#000000',


                        'enable_opacity' => 0,


                        'return_format' => 'string',


                    ),


                    array(


                        'key' => 'field_61f6daea4e362',


                        'label' => 'color ( secondary )',


                        'name' => 'color_secondary',


                        'type' => 'color_picker',


                        'instructions' => '--kmnd-body-secondary-color',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '33',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '#000000',


                        'enable_opacity' => 0,


                        'return_format' => 'string',


                    ),


                    array(


                        'key' => 'field_61df45ad603a0',


                        'label' => 'font-weight',


                        'name' => 'font_weight',


                        'type' => 'number',


                        'instructions' => '',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '33',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => 400,


                        'placeholder' => '',


                        'prepend' => '',


                        'append' => '',


                        'min' => 100,


                        'max' => 900,


                        'step' => 100,


                    ),


                    array(


                        'key' => 'field_61df45ad603a1',


                        'label' => 'letter-spacing',


                        'name' => 'letter_spacing',


                        'type' => 'number',


                        'instructions' => '',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '33',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '0,025',


                        'placeholder' => '',


                        'prepend' => '',


                        'append' => 'em',


                        'min' => '',


                        'max' => '',


                        'step' => '',


                    ),


                    array(


                        'key' => 'field_61df45ad603a2',


                        'label' => 'line-height',


                        'name' => 'line_height',


                        'type' => 'number',


                        'instructions' => '',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '33',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '1,2',


                        'placeholder' => '',


                        'prepend' => '',


                        'append' => '',


                        'min' => '',


                        'max' => '',


                        'step' => '0.1',


                    ),


                ),


            ),


            array(


                'key' => 'field_61e06bad72294',


                'label' => 'Ширина контенту',


                'name' => '',


                'type' => 'tab',


                'instructions' => '',


                'required' => 0,


                'conditional_logic' => 0,


                'wrapper' => array(


                    'width' => '',


                    'class' => '',


                    'id' => '',


                ),


                'placement' => 'left',


                'endpoint' => 0,


            ),


            array(


                'key' => 'field_61e06c0472295',


                'label' => 'максимальна ширина контенту',


                'name' => 'container_width',


                'type' => 'number',


                'instructions' => '.container, wrapp',


                'required' => 0,


                'conditional_logic' => 0,


                'wrapper' => array(


                    'width' => '',


                    'class' => '',


                    'id' => '',


                ),


                'default_value' => 1170,


                'placeholder' => '',


                'prepend' => '',


                'append' => 'px',


                'min' => 320,


                'max' => 1920,


                'step' => 10,


            ),


            array(


                'key' => 'field_61e06d5072296',


                'label' => 'padding-top',


                'name' => 'section_padding_top',


                'type' => 'number',


                'instructions' => 'Внутрішній відступ секції верхній (< section >)',


                'required' => 0,


                'conditional_logic' => 0,


                'wrapper' => array(


                    'width' => '50',


                    'class' => '',


                    'id' => '',


                ),


                'default_value' => '',


                'placeholder' => '',


                'prepend' => '',


                'append' => 'px',


                'min' => 0,


                'max' => '',


                'step' => 1,


            ),


            array(


                'key' => 'field_61e06faf72297',


                'label' => 'padding-bottom',


                'name' => 'section_padding_bottom',


                'type' => 'number',


                'instructions' => 'Внутрішній відступ секції нижній(< section >)',


                'required' => 0,


                'conditional_logic' => 0,


                'wrapper' => array(


                    'width' => '50',


                    'class' => '',


                    'id' => '',


                ),


                'default_value' => '',


                'placeholder' => '',


                'prepend' => '',


                'append' => 'px',


                'min' => 0,


                'max' => '',


                'step' => 1,


            ),


            array(


                'key' => 'field_61df3c5b96d90',


                'label' => 'Заголовки (Title h1 ,h2 ..)',


                'name' => '',


                'type' => 'tab',


                'instructions' => '',


                'required' => 0,


                'conditional_logic' => 0,


                'wrapper' => array(


                    'width' => '',


                    'class' => '',


                    'id' => '',


                ),


                'placement' => 'left',


                'endpoint' => 0,


            ),


            array(


                'key' => 'field_61df3c7596d91',


                'label' => 'H1',


                'name' => 'h1_style',


                'type' => 'group',


                'instructions' => '',


                'required' => 0,


                'conditional_logic' => 0,


                'wrapper' => array(


                    'width' => '',


                    'class' => '',


                    'id' => '',


                ),


                'layout' => 'block',


                'sub_fields' => array(


                    array(


                        'key' => 'field_61df3cd396d92',


                        'label' => 'font-family',


                        'name' => 'font_family',


                        'type' => 'text',


                        'instructions' => 'Шрифт заголовку',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '40',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '',


                        'placeholder' => '',


                        'prepend' => '',


                        'append' => '',


                        'maxlength' => '',


                    ),


                    array(


                        'key' => 'field_61df3f5696d97',


                        'label' => 'color',


                        'name' => 'color',


                        'type' => 'color_picker',


                        'instructions' => 'Колір тексту',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '30',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '#000000',


                        'enable_opacity' => 0,


                        'return_format' => 'string',


                    ),


                    array(


                        'key' => 'field_61ed480acc1ac',


                        'label' => 'text-align',


                        'name' => 'text-align',


                        'type' => 'select',


                        'instructions' => 'Розміщення заголовку',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '30',


                            'class' => '',


                            'id' => '',


                        ),


                        'choices' => array(


                            'left' => 'left',


                            'center' => 'center',


                            'right' => 'right',


                        ),


                        'default_value' => false,


                        'allow_null' => 0,


                        'multiple' => 0,


                        'ui' => 0,


                        'return_format' => 'value',


                        'ajax' => 0,


                        'placeholder' => '',


                    ),


                    array(


                        'key' => 'field_61df3dbf96d93',


                        'label' => 'font-size',


                        'name' => 'font_size',


                        'type' => 'number',


                        'instructions' => 'Розмір шрифту',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '25',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '',


                        'placeholder' => '',


                        'prepend' => '',


                        'append' => 'px',


                        'min' => 1,


                        'max' => '',


                        'step' => 1,


                    ),


                    array(


                        'key' => 'field_61df3e3e96d94',


                        'label' => 'font-weight',


                        'name' => 'font_weight',


                        'type' => 'number',


                        'instructions' => 'Товщина шрифту (жирність)',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '25',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => 400,


                        'placeholder' => '',


                        'prepend' => '',


                        'append' => '',


                        'min' => 100,


                        'max' => 900,


                        'step' => 100,


                    ),


                    array(


                        'key' => 'field_61df3ea996d95',


                        'label' => 'letter-spacing',


                        'name' => 'letter_spacing',


                        'type' => 'number',


                        'instructions' => 'Відстань між знаками',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '25',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '0,025',


                        'placeholder' => '',


                        'prepend' => '',


                        'append' => 'em',


                        'min' => '',


                        'max' => '',


                        'step' => '',


                    ),


                    array(


                        'key' => 'field_61df3f1196d96',


                        'label' => 'line-height',


                        'name' => 'line_height',


                        'type' => 'number',


                        'instructions' => 'Висота шрифту',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '25',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '1,2',


                        'placeholder' => '',


                        'prepend' => '',


                        'append' => '',


                        'min' => '',


                        'max' => '',


                        'step' => '0.1',


                    ),


                    array(


                        'key' => 'field_61ed53958234a',


                        'label' => 'font-size ( mobile )',


                        'name' => 'font_size_mob',


                        'type' => 'number',


                        'instructions' => 'Розмір шрифту для мобільних тел.',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '30',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '',


                        'placeholder' => '',


                        'prepend' => '',


                        'append' => 'px',


                        'min' => 1,


                        'max' => '',


                        'step' => 1,


                    ),


                    array(


                        'key' => 'field_61ed46fbcc1aa',


                        'label' => 'margin (зовнішні відступи)',


                        'name' => 'margin',


                        'type' => 'text',


                        'instructions' => '0px(top) 0px(right) 0px(bottom) 0px(left)',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '35',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '',


                        'placeholder' => '0px 0px 0px 0px',


                        'prepend' => '',


                        'append' => '',


                        'maxlength' => '',


                    ),


                    array(


                        'key' => 'field_61ed47d8cc1ab',


                        'label' => 'padding (внутрішні відступи)',


                        'name' => 'padding',


                        'type' => 'text',


                        'instructions' => '0px(top) 0px(right) 0px(bottom) 0px(left)',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '35',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '',


                        'placeholder' => '0px 0px 0px 0px',


                        'prepend' => '',


                        'append' => '',


                        'maxlength' => '',


                    ),


                ),


            ),


            array(


                'key' => 'field_61ed49b44ffc7',


                'label' => 'H2',


                'name' => 'h2_style',


                'type' => 'group',


                'instructions' => '',


                'required' => 0,


                'conditional_logic' => 0,


                'wrapper' => array(


                    'width' => '',


                    'class' => '',


                    'id' => '',


                ),


                'layout' => 'block',


                'sub_fields' => array(


                    array(


                        'key' => 'field_61ed49b44ffc8',


                        'label' => 'font-family',


                        'name' => 'font_family',


                        'type' => 'text',


                        'instructions' => 'Шрифт заголовку',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '40',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '',


                        'placeholder' => '',


                        'prepend' => '',


                        'append' => '',


                        'maxlength' => '',


                    ),


                    array(


                        'key' => 'field_61ed49b44ffc9',


                        'label' => 'color',


                        'name' => 'color',


                        'type' => 'color_picker',


                        'instructions' => 'Колір тексту',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '30',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '#000000',


                        'enable_opacity' => 0,


                        'return_format' => '',


                    ),


                    array(


                        'key' => 'field_61ed49b44ffca',


                        'label' => 'text-align',


                        'name' => 'text-align',


                        'type' => 'select',


                        'instructions' => 'Розміщення заголовку',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '30',


                            'class' => '',


                            'id' => '',


                        ),


                        'choices' => array(


                            'left' => 'left',


                            'center' => 'center',


                            'right' => 'right',


                        ),


                        'default_value' => false,


                        'allow_null' => 0,


                        'multiple' => 0,


                        'ui' => 0,


                        'ajax' => 0,


                        'return_format' => 'value',


                        'placeholder' => '',


                    ),


                    array(


                        'key' => 'field_61ed49b44ffcb',


                        'label' => 'font-size',


                        'name' => 'font_size',


                        'type' => 'number',


                        'instructions' => 'Розмір шрифту',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '25',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '',


                        'placeholder' => '',


                        'prepend' => '',


                        'append' => 'px',


                        'min' => 1,


                        'max' => '',


                        'step' => 1,


                    ),


                    array(


                        'key' => 'field_61ed49b44ffcc',


                        'label' => 'font-weight',


                        'name' => 'font_weight',


                        'type' => 'number',


                        'instructions' => 'Товщина шрифту (жирність)',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '25',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => 400,


                        'placeholder' => '',


                        'prepend' => '',


                        'append' => '',


                        'min' => 100,


                        'max' => 900,


                        'step' => 100,


                    ),


                    array(


                        'key' => 'field_61ed49b44ffcd',


                        'label' => 'letter-spacing',


                        'name' => 'letter_spacing',


                        'type' => 'number',


                        'instructions' => 'Відстань між знаками',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '25',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '0,025',


                        'placeholder' => '',


                        'prepend' => '',


                        'append' => 'em',


                        'min' => '',


                        'max' => '',


                        'step' => '',


                    ),


                    array(


                        'key' => 'field_61ed49b44ffce',


                        'label' => 'line-height',


                        'name' => 'line_height',


                        'type' => 'number',


                        'instructions' => 'Висота шрифту',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '25',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '1,2',


                        'placeholder' => '',


                        'prepend' => '',


                        'append' => '',


                        'min' => '',


                        'max' => '',


                        'step' => '0.1',


                    ),


                    array(


                        'key' => 'field_61ed55ba4363f',


                        'label' => 'font-size ( mobile )',


                        'name' => 'font_size_mob',


                        'type' => 'number',


                        'instructions' => 'Розмір шрифту для мобільних тел.',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '30',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '',


                        'placeholder' => '',


                        'prepend' => '',


                        'append' => 'px',


                        'min' => 1,


                        'max' => '',


                        'step' => 1,


                    ),


                    array(


                        'key' => 'field_61ed49b44ffcf',


                        'label' => 'margin (зовнішні відступи)',


                        'name' => 'margin',


                        'type' => 'text',


                        'instructions' => '0px(top) 0px(right) 0px(bottom) 0px(left)',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '35',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '',


                        'placeholder' => '0px 0px 0px 0px',


                        'prepend' => '',


                        'append' => '',


                        'maxlength' => '',


                    ),


                    array(


                        'key' => 'field_61ed49b44ffd0',


                        'label' => 'padding (внутрішні відступи)',


                        'name' => 'padding',


                        'type' => 'text',


                        'instructions' => '0px(top) 0px(right) 0px(bottom) 0px(left)',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '35',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '',


                        'placeholder' => '0px 0px 0px 0px',


                        'prepend' => '',


                        'append' => '',


                        'maxlength' => '',


                    ),


                ),


            ),


            array(


                'key' => 'field_61ed49c24ffd1',


                'label' => 'H3',


                'name' => 'h3_style',


                'type' => 'group',


                'instructions' => '',


                'required' => 0,


                'conditional_logic' => 0,


                'wrapper' => array(


                    'width' => '',


                    'class' => '',


                    'id' => '',


                ),


                'layout' => 'block',


                'sub_fields' => array(


                    array(


                        'key' => 'field_61ed49c24ffd2',


                        'label' => 'font-family',


                        'name' => 'font_family',


                        'type' => 'text',


                        'instructions' => 'Шрифт заголовку',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '40',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '',


                        'placeholder' => '',


                        'prepend' => '',


                        'append' => '',


                        'maxlength' => '',


                    ),


                    array(


                        'key' => 'field_61ed49c24ffd3',


                        'label' => 'color',


                        'name' => 'color',


                        'type' => 'color_picker',


                        'instructions' => 'Колір тексту',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '30',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '#000000',


                        'enable_opacity' => 0,


                        'return_format' => '',


                    ),


                    array(


                        'key' => 'field_61ed49c24ffd4',


                        'label' => 'text-align',


                        'name' => 'text-align',


                        'type' => 'select',


                        'instructions' => 'Розміщення заголовку',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '30',


                            'class' => '',


                            'id' => '',


                        ),


                        'choices' => array(


                            'left' => 'left',


                            'center' => 'center',


                            'right' => 'right',


                        ),


                        'default_value' => false,


                        'allow_null' => 0,


                        'multiple' => 0,


                        'ui' => 0,


                        'ajax' => 0,


                        'return_format' => 'value',


                        'placeholder' => '',


                    ),


                    array(


                        'key' => 'field_61ed49c24ffd5',


                        'label' => 'font-size',


                        'name' => 'font_size',


                        'type' => 'number',


                        'instructions' => 'Розмір шрифту',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '25',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '',


                        'placeholder' => '',


                        'prepend' => '',


                        'append' => 'px',


                        'min' => 1,


                        'max' => '',


                        'step' => 1,


                    ),


                    array(


                        'key' => 'field_61ed49c24ffd6',


                        'label' => 'font-weight',


                        'name' => 'font_weight',


                        'type' => 'number',


                        'instructions' => 'Товщина шрифту (жирність)',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '25',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => 400,


                        'placeholder' => '',


                        'prepend' => '',


                        'append' => '',


                        'min' => 100,


                        'max' => 900,


                        'step' => 100,


                    ),


                    array(


                        'key' => 'field_61ed49c24ffd7',


                        'label' => 'letter-spacing',


                        'name' => 'letter_spacing',


                        'type' => 'number',


                        'instructions' => 'Відстань між знаками',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '25',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '0,025',


                        'placeholder' => '',


                        'prepend' => '',


                        'append' => 'em',


                        'min' => '',


                        'max' => '',


                        'step' => '',


                    ),


                    array(


                        'key' => 'field_61ed49c24ffd8',


                        'label' => 'line-height',


                        'name' => 'line_height',


                        'type' => 'number',


                        'instructions' => 'Висота шрифту',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '25',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '1,2',


                        'placeholder' => '',


                        'prepend' => '',


                        'append' => '',


                        'min' => '',


                        'max' => '',


                        'step' => '0.1',


                    ),


                    array(


                        'key' => 'field_61ed55e843640',


                        'label' => 'font-size ( mobile )',


                        'name' => 'font_size_mob',


                        'type' => 'number',


                        'instructions' => 'Розмір шрифту для мобільних тел.',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '30',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '',


                        'placeholder' => '',


                        'prepend' => '',


                        'append' => 'px',


                        'min' => 1,


                        'max' => '',


                        'step' => 1,


                    ),


                    array(


                        'key' => 'field_61ed49c24ffd9',


                        'label' => 'margin (зовнішні відступи)',


                        'name' => 'margin',


                        'type' => 'text',


                        'instructions' => '0px(top) 0px(right) 0px(bottom) 0px(left)',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '35',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '',


                        'placeholder' => '0px 0px 0px 0px',


                        'prepend' => '',


                        'append' => '',


                        'maxlength' => '',


                    ),


                    array(


                        'key' => 'field_61ed49c24ffda',


                        'label' => 'padding (внутрішні відступи)',


                        'name' => 'padding',


                        'type' => 'text',


                        'instructions' => '0px(top) 0px(right) 0px(bottom) 0px(left)',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '35',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '',


                        'placeholder' => '0px 0px 0px 0px',


                        'prepend' => '',


                        'append' => '',


                        'maxlength' => '',


                    ),


                ),


            ),


            array(


                'key' => 'field_61ed49df4ffdb',


                'label' => 'H4',


                'name' => 'h4_style',


                'type' => 'group',


                'instructions' => '',


                'required' => 0,


                'conditional_logic' => 0,


                'wrapper' => array(


                    'width' => '',


                    'class' => '',


                    'id' => '',


                ),


                'layout' => 'block',


                'sub_fields' => array(


                    array(


                        'key' => 'field_61ed49df4ffdc',


                        'label' => 'font-family',


                        'name' => 'font_family',


                        'type' => 'text',


                        'instructions' => 'Шрифт заголовку',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '40',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '',


                        'placeholder' => '',


                        'prepend' => '',


                        'append' => '',


                        'maxlength' => '',


                    ),


                    array(


                        'key' => 'field_61ed49df4ffdd',


                        'label' => 'color',


                        'name' => 'color',


                        'type' => 'color_picker',


                        'instructions' => 'Колір тексту',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '30',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '#000000',


                        'enable_opacity' => 0,


                        'return_format' => '',


                    ),


                    array(


                        'key' => 'field_61ed49df4ffde',


                        'label' => 'text-align',


                        'name' => 'text-align',


                        'type' => 'select',


                        'instructions' => 'Розміщення заголовку',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '30',


                            'class' => '',


                            'id' => '',


                        ),


                        'choices' => array(


                            'left' => 'left',


                            'center' => 'center',


                            'right' => 'right',


                        ),


                        'default_value' => false,


                        'allow_null' => 0,


                        'multiple' => 0,


                        'ui' => 0,


                        'ajax' => 0,


                        'return_format' => 'value',


                        'placeholder' => '',


                    ),


                    array(


                        'key' => 'field_61ed49df4ffdf',


                        'label' => 'font-size',


                        'name' => 'font_size',


                        'type' => 'number',


                        'instructions' => 'Розмір шрифту',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '25',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '',


                        'placeholder' => '',


                        'prepend' => '',


                        'append' => 'px',


                        'min' => 1,


                        'max' => '',


                        'step' => 1,


                    ),


                    array(


                        'key' => 'field_61ed49df4ffe0',


                        'label' => 'font-weight',


                        'name' => 'font_weight',


                        'type' => 'number',


                        'instructions' => 'Товщина шрифту (жирність)',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '25',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => 400,


                        'placeholder' => '',


                        'prepend' => '',


                        'append' => '',


                        'min' => 100,


                        'max' => 900,


                        'step' => 100,


                    ),


                    array(


                        'key' => 'field_61ed49df4ffe1',


                        'label' => 'letter-spacing',


                        'name' => 'letter_spacing',


                        'type' => 'number',


                        'instructions' => 'Відстань між знаками',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '25',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '0,025',


                        'placeholder' => '',


                        'prepend' => '',


                        'append' => 'em',


                        'min' => '',


                        'max' => '',


                        'step' => '',


                    ),


                    array(


                        'key' => 'field_61ed49df4ffe2',


                        'label' => 'line-height',


                        'name' => 'line_height',


                        'type' => 'number',


                        'instructions' => 'Висота шрифту',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '25',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '1,2',


                        'placeholder' => '',


                        'prepend' => '',


                        'append' => '',


                        'min' => '',


                        'max' => '',


                        'step' => '0.1',


                    ),


                    array(


                        'key' => 'field_61ed563243641',


                        'label' => 'font-size ( mobile )',


                        'name' => 'font_size_mob',


                        'type' => 'number',


                        'instructions' => 'Розмір шрифту для мобільних тел.',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '30',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '',


                        'placeholder' => '',


                        'prepend' => '',


                        'append' => 'px',


                        'min' => 1,


                        'max' => '',


                        'step' => 1,


                    ),


                    array(


                        'key' => 'field_61ed49df4ffe3',


                        'label' => 'margin (зовнішні відступи)',


                        'name' => 'margin',


                        'type' => 'text',


                        'instructions' => '0px(top) 0px(right) 0px(bottom) 0px(left)',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '35',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '',


                        'placeholder' => '0px 0px 0px 0px',


                        'prepend' => '',


                        'append' => '',


                        'maxlength' => '',


                    ),


                    array(


                        'key' => 'field_61ed49df4ffe4',


                        'label' => 'padding (внутрішні відступи)',


                        'name' => 'padding',


                        'type' => 'text',


                        'instructions' => '0px(top) 0px(right) 0px(bottom) 0px(left)',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '35',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '',


                        'placeholder' => '0px 0px 0px 0px',


                        'prepend' => '',


                        'append' => '',


                        'maxlength' => '',


                    ),


                ),


            ),


            array(


                'key' => 'field_61ed49f24ffe5',


                'label' => 'H5',


                'name' => 'h5_style',


                'type' => 'group',


                'instructions' => '',


                'required' => 0,


                'conditional_logic' => 0,


                'wrapper' => array(


                    'width' => '',


                    'class' => '',


                    'id' => '',


                ),


                'layout' => 'block',


                'sub_fields' => array(


                    array(


                        'key' => 'field_61ed49f24ffe6',


                        'label' => 'font-family',


                        'name' => 'font_family',


                        'type' => 'text',


                        'instructions' => 'Шрифт заголовку',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '40',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '',


                        'placeholder' => '',


                        'prepend' => '',


                        'append' => '',


                        'maxlength' => '',


                    ),


                    array(


                        'key' => 'field_61ed49f24ffe7',


                        'label' => 'color',


                        'name' => 'color',


                        'type' => 'color_picker',


                        'instructions' => 'Колір тексту',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '30',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '#000000',


                        'enable_opacity' => 0,


                        'return_format' => 'string',


                    ),


                    array(


                        'key' => 'field_61ed49f24ffe8',


                        'label' => 'text-align',


                        'name' => 'text-align',


                        'type' => 'select',


                        'instructions' => 'Розміщення заголовку',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '30',


                            'class' => '',


                            'id' => '',


                        ),


                        'choices' => array(


                            'left' => 'left',


                            'center' => 'center',


                            'right' => 'right',


                        ),


                        'default_value' => false,


                        'allow_null' => 0,


                        'multiple' => 0,


                        'ui' => 0,


                        'ajax' => 0,


                        'return_format' => 'value',


                        'placeholder' => '',


                    ),


                    array(


                        'key' => 'field_61ed49f24ffe9',


                        'label' => 'font-size',


                        'name' => 'font_size',


                        'type' => 'number',


                        'instructions' => 'Розмір шрифту',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '25',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '',


                        'placeholder' => '',


                        'prepend' => '',


                        'append' => 'px',


                        'min' => 1,


                        'max' => '',


                        'step' => 1,


                    ),


                    array(


                        'key' => 'field_61ed49f24ffea',


                        'label' => 'font-weight',


                        'name' => 'font_weight',


                        'type' => 'number',


                        'instructions' => 'Товщина шрифту (жирність)',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '25',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => 400,


                        'placeholder' => '',


                        'prepend' => '',


                        'append' => '',


                        'min' => 100,


                        'max' => 900,


                        'step' => 100,


                    ),


                    array(


                        'key' => 'field_61ed49f24ffeb',


                        'label' => 'letter-spacing',


                        'name' => 'letter_spacing',


                        'type' => 'number',


                        'instructions' => 'Відстань між знаками',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '25',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '0,025',


                        'placeholder' => '',


                        'prepend' => '',


                        'append' => 'em',


                        'min' => '',


                        'max' => '',


                        'step' => '',


                    ),


                    array(


                        'key' => 'field_61ed49f24ffec',


                        'label' => 'line-height',


                        'name' => 'line_height',


                        'type' => 'number',


                        'instructions' => 'Висота шрифту',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '25',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '1,2',


                        'placeholder' => '',


                        'prepend' => '',


                        'append' => '',


                        'min' => '',


                        'max' => '',


                        'step' => '0.1',


                    ),


                    array(


                        'key' => 'field_61ed565f43642',


                        'label' => 'font-size ( mobile )',


                        'name' => 'font_size_mob',


                        'type' => 'number',


                        'instructions' => 'Розмір шрифту для мобільних тел.',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '30',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '',


                        'placeholder' => '',


                        'prepend' => '',


                        'append' => 'px',


                        'min' => 1,


                        'max' => '',


                        'step' => 1,


                    ),


                    array(


                        'key' => 'field_61ed49f24ffed',


                        'label' => 'margin (зовнішні відступи)',


                        'name' => 'margin',


                        'type' => 'text',


                        'instructions' => '0px(top) 0px(right) 0px(bottom) 0px(left)',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '35',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '',


                        'placeholder' => '0px 0px 0px 0px',


                        'prepend' => '',


                        'append' => '',


                        'maxlength' => '',


                    ),


                    array(


                        'key' => 'field_61ed49f24ffee',


                        'label' => 'padding (внутрішні відступи)',


                        'name' => 'padding',


                        'type' => 'text',


                        'instructions' => '0px(top) 0px(right) 0px(bottom) 0px(left)',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '35',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '',


                        'placeholder' => '0px 0px 0px 0px',


                        'prepend' => '',


                        'append' => '',


                        'maxlength' => '',


                    ),


                ),


            ),


            array(


                'key' => 'field_61df4d7987ed5',


                'label' => 'Тег "a" (link) в тексті',


                'name' => '',


                'type' => 'tab',


                'instructions' => '',


                'required' => 0,


                'conditional_logic' => 0,


                'wrapper' => array(


                    'width' => '',


                    'class' => '',


                    'id' => '',


                ),


                'placement' => 'left',


                'endpoint' => 0,


            ),


            array(


                'key' => 'field_61df4ea687ee6',


                'label' => 'a - link text',


                'name' => 'a_link_text',


                'type' => 'group',


                'instructions' => '',


                'required' => 0,


                'conditional_logic' => 0,


                'wrapper' => array(


                    'width' => '',


                    'class' => '',


                    'id' => '',


                ),


                'layout' => 'block',


                'sub_fields' => array(


                    array(


                        'key' => 'field_61df4ea687ee7',


                        'label' => 'font-family',


                        'name' => 'font_family',


                        'type' => 'text',


                        'instructions' => '',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '60',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '',


                        'placeholder' => '',


                        'prepend' => '',


                        'append' => '',


                        'maxlength' => '',


                    ),


                    array(


                        'key' => 'field_61fa65696c0d6',


                        'label' => 'border-bottom',


                        'name' => 'border-bottom',


                        'type' => 'text',


                        'instructions' => '',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '40',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '',


                        'placeholder' => '1px solid inherit',


                        'prepend' => '',


                        'append' => '',


                        'maxlength' => '',


                    ),


                    array(


                        'key' => 'field_61df4ea687ee8',


                        'label' => 'color',


                        'name' => 'color',


                        'type' => 'color_picker',


                        'instructions' => '',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '25',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '#000000',


                        'enable_opacity' => 0,


                        'return_format' => 'string',


                    ),


                    array(


                        'key' => 'field_61df4f5087efd',


                        'label' => 'text-decoration',


                        'name' => 'text_decoration',


                        'type' => 'select',


                        'instructions' => '',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '25',


                            'class' => '',


                            'id' => '',


                        ),


                        'choices' => array(


                            'none' => 'none',


                            'underline' => 'underline',


                        ),


                        'default_value' => 'none',


                        'allow_null' => 1,


                        'multiple' => 0,


                        'ui' => 0,


                        'return_format' => 'value',


                        'ajax' => 0,


                        'placeholder' => '',


                    ),


                    array(


                        'key' => 'field_61df4f0487ef5',


                        'label' => 'background-color',


                        'name' => 'background_color',


                        'type' => 'color_picker',


                        'instructions' => '',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '25',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '',


                        'enable_opacity' => 0,


                        'return_format' => 'string',


                    ),


                    array(


                        'key' => 'field_61df4ea687ee9',


                        'label' => 'font-size',


                        'name' => 'font_size',


                        'type' => 'number',


                        'instructions' => '',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '25',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '',


                        'placeholder' => '',


                        'prepend' => '',


                        'append' => 'px',


                        'min' => 1,


                        'max' => '',


                        'step' => 1,


                    ),


                    array(


                        'key' => 'field_61df4ea687eea',


                        'label' => 'font-weight',


                        'name' => 'font_weight',


                        'type' => 'number',


                        'instructions' => '',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '25',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '',


                        'placeholder' => '',


                        'prepend' => '',


                        'append' => '',


                        'min' => 100,


                        'max' => 900,


                        'step' => 100,


                    ),


                    array(


                        'key' => 'field_61f69f130f885',


                        'label' => 'font-style',


                        'name' => 'font-style',


                        'type' => 'select',


                        'instructions' => '',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '25',


                            'class' => '',


                            'id' => '',


                        ),


                        'choices' => array(


                            'normal' => 'normal',


                            'italic' => 'italic',


                            'inherit' => 'inherit',


                        ),


                        'default_value' => 'inherit',


                        'allow_null' => 0,


                        'multiple' => 0,


                        'ui' => 0,


                        'return_format' => 'value',


                        'ajax' => 0,


                        'placeholder' => '',


                    ),


                    array(


                        'key' => 'field_61df4ea687eeb',


                        'label' => 'letter-spacing',


                        'name' => 'letter_spacing',


                        'type' => 'number',


                        'instructions' => '',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '25',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '0,025',


                        'placeholder' => '',


                        'prepend' => '',


                        'append' => 'em',


                        'min' => '',


                        'max' => '',


                        'step' => '0.01',


                    ),


                    array(


                        'key' => 'field_61df4ea687eec',


                        'label' => 'line-height',


                        'name' => 'line_height',


                        'type' => 'number',


                        'instructions' => '',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '25',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '1,2',


                        'placeholder' => '',


                        'prepend' => '',


                        'append' => '',


                        'min' => '',


                        'max' => '',


                        'step' => '0.1',


                    ),


                ),


            ),


            array(


                'key' => 'field_61df5096d6382',


                'label' => 'a - link text ( :hover )',


                'name' => 'a_link_text_hover',


                'type' => 'group',


                'instructions' => 'При наведені курсором на посилання',


                'required' => 0,


                'conditional_logic' => 0,


                'wrapper' => array(


                    'width' => '',


                    'class' => '',


                    'id' => '',


                ),


                'layout' => 'block',


                'sub_fields' => array(


                    array(


                        'key' => 'field_61df5096d6384',


                        'label' => 'color',


                        'name' => 'color',


                        'type' => 'color_picker',


                        'instructions' => '',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '25',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '#000000',


                        'enable_opacity' => 0,


                        'return_format' => 'string',


                    ),


                    array(


                        'key' => 'field_61df5096d6386',


                        'label' => 'text-decoration',


                        'name' => 'text_decoration',


                        'type' => 'select',


                        'instructions' => '',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '25',


                            'class' => '',


                            'id' => '',


                        ),


                        'choices' => array(


                            'none' => 'none',


                            'underline' => 'underline',


                        ),


                        'default_value' => 'none',


                        'allow_null' => 1,


                        'multiple' => 0,


                        'ui' => 0,


                        'return_format' => 'value',


                        'ajax' => 0,


                        'placeholder' => '',


                    ),


                    array(


                        'key' => 'field_61df5096d6385',


                        'label' => 'background-color',


                        'name' => 'background_color',


                        'type' => 'color_picker',


                        'instructions' => '',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '25',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '',


                        'enable_opacity' => 0,


                        'return_format' => 'string',


                    ),


                    array(


                        'key' => 'field_61e05fc39f03f',


                        'label' => 'opacity',


                        'name' => 'opacity',


                        'type' => 'number',


                        'instructions' => '',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '25',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '',


                        'placeholder' => '',


                        'prepend' => '',


                        'append' => '',


                        'min' => 0,


                        'max' => 1,


                        'step' => '0.01',


                    ),


                    array(


                        'key' => 'field_61fa67c46c0d7',


                        'label' => 'border-bottom',


                        'name' => 'border-bottom',


                        'type' => 'text',


                        'instructions' => '',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '40',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '',


                        'placeholder' => '1px solid inherit',


                        'prepend' => '',


                        'append' => '',


                        'maxlength' => '',


                    ),


                ),


            ),


            array(


                'key' => 'field_61df5a093270b',


                'label' => 'CTA Кнопки',


                'name' => '',


                'type' => 'tab',


                'instructions' => '',


                'required' => 0,


                'conditional_logic' => 0,


                'wrapper' => array(


                    'width' => '',


                    'class' => '',


                    'id' => '',


                ),


                'placement' => 'left',


                'endpoint' => 0,


            ),


            array(


                'key' => 'field_61dfe1f977516',


                'label' => 'СТА ( a link, button )',


                'name' => 'cta_link',


                'type' => 'group',


                'instructions' => 'СТА (кнопка заклику до дії) 


    ( кнопка призыва к действию )',


                'required' => 0,


                'conditional_logic' => 0,


                'wrapper' => array(


                    'width' => '',


                    'class' => '',


                    'id' => '',


                ),


                'layout' => 'block',


                'sub_fields' => array(


                    array(


                        'key' => 'field_61dfe3497751f',


                        'label' => 'клас кнопки',


                        'name' => 'cta_css_style',


                        'type' => 'select',


                        'instructions' => '',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '50',


                            'class' => '',


                            'id' => '',


                        ),


                        'choices' => array(


                            'cta-border' => 'cta-border',


                        ),


                        'default_value' => false,


                        'allow_null' => 1,


                        'multiple' => 0,


                        'ui' => 0,


                        'return_format' => 'value',


                        'ajax' => 0,


                        'placeholder' => '',


                    ),


                    array(


                        'key' => 'field_61dff36aecd00',


                        'label' => 'Додати свій класс css',


                        'name' => 'cta_css_add_class',


                        'type' => 'text',


                        'instructions' => '',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '50',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '',


                        'placeholder' => '',


                        'prepend' => '',


                        'append' => '',


                        'maxlength' => '',


                    ),


                    array(


                        'key' => 'field_61dfe1f977517',


                        'label' => 'font-family',


                        'name' => 'font_family',


                        'type' => 'text',


                        'instructions' => '',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '50',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '',


                        'placeholder' => '',


                        'prepend' => '',


                        'append' => '',


                        'maxlength' => '',


                    ),


                    array(


                        'key' => 'field_61dfe1f977518',


                        'label' => 'color',


                        'name' => 'color',


                        'type' => 'color_picker',


                        'instructions' => '',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '50',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '#000000',


                        'enable_opacity' => 0,


                        'return_format' => 'string',


                    ),


                    array(


                        'key' => 'field_61dfe1f977519',


                        'label' => 'text-decoration',


                        'name' => 'text_decoration',


                        'type' => 'select',


                        'instructions' => '',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '33',


                            'class' => '',


                            'id' => '',


                        ),


                        'choices' => array(


                            'none' => 'none',


                            'underline' => 'underline',


                        ),


                        'default_value' => 'none',


                        'allow_null' => 1,


                        'multiple' => 0,


                        'ui' => 0,


                        'return_format' => 'value',


                        'ajax' => 0,


                        'placeholder' => '',


                    ),


                    array(


                        'key' => 'field_61dfe1f97751a',


                        'label' => 'background-color',


                        'name' => 'background_color',


                        'type' => 'color_picker',


                        'instructions' => '',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '33',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '',


                        'enable_opacity' => 1,


                        'return_format' => 'string',


                    ),


                    array(


                        'key' => 'field_61dfe1f97751b',


                        'label' => 'font-size',


                        'name' => 'font_size',


                        'type' => 'number',


                        'instructions' => '',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '33',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '',


                        'placeholder' => '',


                        'prepend' => '',


                        'append' => 'px',


                        'min' => 1,


                        'max' => '',


                        'step' => 1,


                    ),


                    array(


                        'key' => 'field_61dfe1f97751c',


                        'label' => 'font-weight',


                        'name' => 'font_weight',


                        'type' => 'number',


                        'instructions' => '',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '33',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '',


                        'placeholder' => '',


                        'prepend' => '',


                        'append' => '',


                        'min' => 100,


                        'max' => 900,


                        'step' => 100,


                    ),


                    array(


                        'key' => 'field_61f69950301c9',


                        'label' => 'font-style',


                        'name' => 'font-style',


                        'type' => 'select',


                        'instructions' => '',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '33',


                            'class' => '',


                            'id' => '',


                        ),


                        'choices' => array(


                            'normal' => 'normal',


                            'italic' => 'italic',


                            'inherit' => 'inherit',


                        ),


                        'default_value' => 'inherit',


                        'allow_null' => 0,


                        'multiple' => 0,


                        'ui' => 0,


                        'return_format' => 'value',


                        'ajax' => 0,


                        'placeholder' => '',


                    ),


                    array(


                        'key' => 'field_61dfe1f97751d',


                        'label' => 'letter-spacing',


                        'name' => 'letter_spacing',


                        'type' => 'number',


                        'instructions' => '',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '33',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '0,025',


                        'placeholder' => '',


                        'prepend' => '',


                        'append' => 'em',


                        'min' => '',


                        'max' => '',


                        'step' => '',


                    ),


                    array(


                        'key' => 'field_61dfe1f97751e',


                        'label' => 'line-height',


                        'name' => 'line_height',


                        'type' => 'number',


                        'instructions' => '',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '33',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '1,2',


                        'placeholder' => '',


                        'prepend' => '',


                        'append' => '',


                        'min' => '',


                        'max' => '',


                        'step' => '0.1',


                    ),


                    array(


                        'key' => 'field_61dff423ecd01',


                        'label' => 'border line',


                        'name' => 'border_line',


                        'type' => 'number',


                        'instructions' => '',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '33',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '',


                        'placeholder' => '',


                        'prepend' => '',


                        'append' => 'px',


                        'min' => 0,


                        'max' => '',


                        'step' => 1,


                    ),


                    array(


                        'key' => 'field_61dff478ecd02',


                        'label' => 'border color',


                        'name' => 'border_color',


                        'type' => 'color_picker',


                        'instructions' => '',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '33',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '',


                        'enable_opacity' => 1,


                        'return_format' => 'string',


                    ),


                    array(


                        'key' => 'field_61e016422873e',


                        'label' => 'border-radius',


                        'name' => 'border_radius',


                        'type' => 'number',


                        'instructions' => '',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '33',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '',


                        'placeholder' => 2,


                        'prepend' => '',


                        'append' => 'px',


                        'min' => 0,


                        'max' => '',


                        'step' => 1,


                    ),


                    array(


                        'key' => 'field_61dff4e6ecd03',


                        'label' => 'margin (зовнішні відступи)',


                        'name' => 'margin',


                        'type' => 'text',


                        'instructions' => '0px(top) 0px(right) 0px(bottom) 0px(left)',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '33',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '',


                        'placeholder' => '0px 0px 0px 0px',


                        'prepend' => '',


                        'append' => '',


                        'maxlength' => '',


                    ),


                    array(


                        'key' => 'field_61dff61eaa73a',


                        'label' => 'padding (внутрішні відступи)',


                        'name' => 'padding',


                        'type' => 'text',


                        'instructions' => '0px(top) 0px(right) 0px(bottom) 0px(left)',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '33',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '',


                        'placeholder' => '0px 0px 0px 0px',


                        'prepend' => '',


                        'append' => '',


                        'maxlength' => '',


                    ),


                ),


            ),


            array(


                'key' => 'field_61e01f75ee615',


                'label' => 'СТА ( a link, button ) ( :hover )',


                'name' => 'cta_link_hover',


                'type' => 'group',


                'instructions' => 'СТА (кнопка заклику до дії)	при наведені курсором 


    ( кнопка призыва к действию )',


                'required' => 0,


                'conditional_logic' => 0,


                'wrapper' => array(


                    'width' => '',


                    'class' => '',


                    'id' => '',


                ),


                'layout' => 'block',


                'sub_fields' => array(


                    array(


                        'key' => 'field_61e01f75ee619',


                        'label' => 'color',


                        'name' => 'color',


                        'type' => 'color_picker',


                        'instructions' => '',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '25',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '#000000',


                        'enable_opacity' => 0,


                        'return_format' => 'string',


                    ),


                    array(


                        'key' => 'field_61e01f75ee61b',


                        'label' => 'background-color',


                        'name' => 'background_color',


                        'type' => 'color_picker',


                        'instructions' => '',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '25',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '',


                        'enable_opacity' => 1,


                        'return_format' => 'string',


                    ),


                    array(


                        'key' => 'field_61e041bbee625',


                        'label' => 'opacity (прозорість)',


                        'name' => 'opaciti',


                        'type' => 'number',


                        'instructions' => '',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '25',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '',


                        'placeholder' => '',


                        'prepend' => '',


                        'append' => '',


                        'min' => 0,


                        'max' => 1,


                        'step' => '0.01',


                    ),


                    array(


                        'key' => 'field_61e01f75ee61a',


                        'label' => 'text-decoration',


                        'name' => 'text_decoration',


                        'type' => 'select',


                        'instructions' => '',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '25',


                            'class' => '',


                            'id' => '',


                        ),


                        'choices' => array(


                            'none' => 'none',


                            'underline' => 'underline',


                        ),


                        'default_value' => 'none',


                        'allow_null' => 1,


                        'multiple' => 0,


                        'ui' => 0,


                        'return_format' => 'value',


                        'ajax' => 0,


                        'placeholder' => '',


                    ),


                    array(


                        'key' => 'field_61e01f75ee621',


                        'label' => 'border color',


                        'name' => 'border_color',


                        'type' => 'color_picker',


                        'instructions' => '',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '50',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '',


                        'enable_opacity' => 1,


                        'return_format' => 'string',


                    ),


                    array(


                        'key' => 'field_61e01f75ee622',


                        'label' => 'border-radius',


                        'name' => 'border_radius',


                        'type' => 'number',


                        'instructions' => '',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '50',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '',


                        'placeholder' => 2,


                        'prepend' => '',


                        'append' => 'px',


                        'min' => 0,


                        'max' => '',


                        'step' => 1,


                    ),


                ),


            ),


            array(


                'key' => 'field_61e070f64330d',


                'label' => 'Поля Контактних Форм',


                'name' => '',


                'type' => 'tab',


                'instructions' => '',


                'required' => 0,


                'conditional_logic' => 0,


                'wrapper' => array(


                    'width' => '',


                    'class' => '',


                    'id' => '',


                ),


                'placement' => 'left',


                'endpoint' => 0,


            ),


            array(


                'key' => 'field_61e071d34330f',


                'label' => 'Поля вводу тексту форми',


                'name' => 'input_form',


                'type' => 'group',


                'instructions' => 'input (text, email, tel)


    textarea',


                'required' => 0,


                'conditional_logic' => 0,


                'wrapper' => array(


                    'width' => '',


                    'class' => '',


                    'id' => '',


                ),


                'layout' => 'block',


                'sub_fields' => array(


                    array(


                        'key' => 'field_61e071d343312',


                        'label' => 'font-family',


                        'name' => 'font_family',


                        'type' => 'text',


                        'instructions' => '',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '50',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '',


                        'placeholder' => '',


                        'prepend' => '',


                        'append' => '',


                        'maxlength' => '',


                    ),


                    array(


                        'key' => 'field_61e071d343313',


                        'label' => 'color',


                        'name' => 'color',


                        'type' => 'color_picker',


                        'instructions' => '',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '50',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '#000000',


                        'enable_opacity' => 0,


                        'return_format' => 'string',


                    ),


                    array(


                        'key' => 'field_61e071d343315',


                        'label' => 'background-color',


                        'name' => 'background_color',


                        'type' => 'color_picker',


                        'instructions' => '',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '50',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '',


                        'enable_opacity' => 1,


                        'return_format' => 'string',


                    ),


                    array(


                        'key' => 'field_61e071d343316',


                        'label' => 'font-size',


                        'name' => 'font_size',


                        'type' => 'number',


                        'instructions' => '',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '25',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '',


                        'placeholder' => '',


                        'prepend' => '',


                        'append' => 'px',


                        'min' => 1,


                        'max' => '',


                        'step' => 1,


                    ),


                    array(


                        'key' => 'field_61e071d34331a',


                        'label' => 'border line',


                        'name' => 'border_line',


                        'type' => 'number',


                        'instructions' => '',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '33',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '',


                        'placeholder' => '',


                        'prepend' => '',


                        'append' => 'px',


                        'min' => 0,


                        'max' => '',


                        'step' => 1,


                    ),


                    array(


                        'key' => 'field_61e071d34331b',


                        'label' => 'border color',


                        'name' => 'border_color',


                        'type' => 'color_picker',


                        'instructions' => '',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '33',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '',


                        'enable_opacity' => 1,


                        'return_format' => 'string',


                    ),


                    array(


                        'key' => 'field_61e071d34331c',


                        'label' => 'border-radius',


                        'name' => 'border_radius',


                        'type' => 'number',


                        'instructions' => '',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '25',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '',


                        'placeholder' => 2,


                        'prepend' => '',


                        'append' => 'px',


                        'min' => 0,


                        'max' => '',


                        'step' => 1,


                    ),


                    array(


                        'key' => 'field_61e071d34331d',


                        'label' => 'margin (зовнішні відступи)',


                        'name' => 'margin',


                        'type' => 'text',


                        'instructions' => '0px(top) 0px(right) 0px(bottom) 0px(left)',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '50',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '',


                        'placeholder' => '0px 0px 0px 0px',


                        'prepend' => '',


                        'append' => '',


                        'maxlength' => '',


                    ),


                    array(


                        'key' => 'field_61e071d34331e',


                        'label' => 'padding (внутрішні відступи)',


                        'name' => 'padding',


                        'type' => 'text',


                        'instructions' => '0px(top) 0px(right) 0px(bottom) 0px(left)',


                        'required' => 0,


                        'conditional_logic' => 0,


                        'wrapper' => array(


                            'width' => '50',


                            'class' => '',


                            'id' => '',


                        ),


                        'default_value' => '',


                        'placeholder' => '0px 0px 0px 0px',


                        'prepend' => '',


                        'append' => '',


                        'maxlength' => '',


                    ),


                ),


            ),


        ),


        'location' => array(


            array(


                array(


                    'param' => 'options_page',


                    'operator' => '==',


                    'value' => 'acf-options-global-css',


                ),


            ),


        ),


        'menu_order' => 0,


        'position' => 'normal',


        'style' => 'default',


        'label_placement' => 'top',


        'instruction_placement' => 'label',


        'hide_on_screen' => '',


        'active' => true,


        'description' => '',


        'show_in_rest' => 0,


    ));


    


    acf_add_local_field_group(array(


        'key' => 'group_61e08163e6e21',


        'title' => 'Header',


        'fields' => array(


            array(


                'key' => 'field_61e081a7c0ee3',


                'label' => 'Logo',


                'name' => 'logo_header',


                'type' => 'image',


                'instructions' => '',


                'required' => 0,


                'conditional_logic' => 0,


                'wrapper' => array(


                    'width' => '50',


                    'class' => '',


                    'id' => '',


                ),


                'return_format' => 'url',


                'preview_size' => 'thumbnail',


                'library' => 'all',


                'min_width' => '',


                'min_height' => '',


                'min_size' => '',


                'max_width' => '',


                'max_height' => '',


                'max_size' => '',


                'mime_types' => '',


            ),


            array(


                'key' => 'field_61e7e5945d303',


                'label' => 'Шаблон для Header',


                'name' => 'header_tamplate',


                'type' => 'post_object',


                'instructions' => '',


                'required' => 0,


                'conditional_logic' => 0,


                'wrapper' => array(


                    'width' => '50',


                    'class' => '',


                    'id' => '',


                ),


                'post_type' => array(


                    0 => 'header',


                ),


                'taxonomy' => '',


                'allow_null' => 0,


                'multiple' => 0,


                'return_format' => 'id',


                'ui' => 1,


            ),


        ),


        'location' => array(


            array(


                array(


                    'param' => 'options_page',


                    'operator' => '==',


                    'value' => 'acf-options-header',


                ),


            ),


        ),


        'menu_order' => 0,


        'position' => 'normal',


        'style' => 'default',


        'label_placement' => 'top',


        'instruction_placement' => 'label',


        'hide_on_screen' => '',


        'active' => true,


        'description' => '',


        'show_in_rest' => 0,


    ));


    


    acf_add_local_field_group(array(


        'key' => 'group_61e0907e37bca',


        'title' => 'Загальні налаштування сайту',


        'fields' => array(


            array(


                'key' => 'field_61e090a00c306',


                'label' => 'Ввімкнути sidebar',


                'name' => 'show_sidebar',


                'type' => 'true_false',


                'instructions' => '',


                'required' => 0,


                'conditional_logic' => 0,


                'wrapper' => array(


                    'width' => '',


                    'class' => '',


                    'id' => '',


                ),


                'message' => '',


                'default_value' => 0,


                'ui' => 1,


                'ui_on_text' => 'Yes',


                'ui_off_text' => 'No',


            ),


        ),


        'location' => array(


            array(


                array(


                    'param' => 'options_page',


                    'operator' => '==',


                    'value' => 'theme-general-settings',


                ),


            ),


        ),


        'menu_order' => 0,


        'position' => 'normal',


        'style' => 'default',


        'label_placement' => 'top',


        'instruction_placement' => 'label',


        'hide_on_screen' => '',


        'active' => true,


        'description' => '',


        'show_in_rest' => 0,


    ));


    


    acf_add_local_field_group(array(


        'key' => 'group_61e48b7d2c11a',


        'title' => 'Футера',


        'fields' => array(


            array(


                'key' => 'field_61e48b7ffd6b8',


                'label' => 'Лого для Футера',


                'name' => 'logo_footer',


                'type' => 'image',


                'instructions' => 'field: logo_footer',


                'required' => 0,


                'conditional_logic' => 0,


                'wrapper' => array(


                    'width' => '',


                    'class' => '',


                    'id' => '',


                ),


                'return_format' => 'url',


                'preview_size' => 'thumbnail',


                'library' => 'all',


                'min_width' => '',


                'min_height' => '',


                'min_size' => '',


                'max_width' => '',


                'max_height' => '',


                'max_size' => '',


                'mime_types' => '',


            ),


            array(


                'key' => 'field_61e48bbdfd6b9',


                'label' => 'Шаблон Футера',


                'name' => 'footer_template',


                'type' => 'post_object',


                'instructions' => '',


                'required' => 0,


                'conditional_logic' => 0,


                'wrapper' => array(


                    'width' => '',


                    'class' => '',


                    'id' => '',


                ),


                'post_type' => array(


                    0 => 'footer',


                ),


                'taxonomy' => '',


                'allow_null' => 0,


                'multiple' => 0,


                'return_format' => 'id',


                'ui' => 1,


            ),


            array(


                'key' => 'field_61e7c061607fe',


                'label' => 'Рік початку (для copywriting)',


                'name' => 'copywriting_data_start',


                'type' => 'date_picker',


                'instructions' => '',


                'required' => 0,


                'conditional_logic' => 0,


                'wrapper' => array(


                    'width' => '33',


                    'class' => '',


                    'id' => '',


                ),


                'display_format' => 'Y',


                'return_format' => 'Y',


                'first_day' => 1,


            ),


            array(


                'key' => 'field_61e7c43c60803',


                'label' => 'Бордер над блоком ( copywriting border тоp line)',


                'name' => 'copywriting_border_line',


                'type' => 'number',


                'instructions' => '',


                'required' => 0,


                'conditional_logic' => 0,


                'wrapper' => array(


                    'width' => '33',


                    'class' => '',


                    'id' => '',


                ),


                'default_value' => '',


                'placeholder' => '',


                'prepend' => '',


                'append' => 'px',


                'min' => 0,


                'max' => '',


                'step' => 1,


            ),


            array(


                'key' => 'field_61e7c32c60802',


                'label' => 'Бордер над блоком ( copywriting border color)',


                'name' => 'copywriting_border_color',


                'type' => 'color_picker',


                'instructions' => '',


                'required' => 0,


                'conditional_logic' => 0,


                'wrapper' => array(


                    'width' => '33',


                    'class' => '',


                    'id' => '',


                ),


                'default_value' => '',


                'enable_opacity' => 1,


                'return_format' => 'string',


            ),


            array(


                'key' => 'field_61e7c169607ff',


                'label' => 'Текст ( copywriting ) після дат (ua)',


                'name' => 'copywriting_text_ua',


                'type' => 'text',


                'instructions' => '',


                'required' => 0,


                'conditional_logic' => 0,


                'wrapper' => array(


                    'width' => '',


                    'class' => '',


                    'id' => '',


                ),


                'default_value' => '',


                'placeholder' => '',


                'prepend' => '',


                'append' => '',


                'maxlength' => '',


            ),


            array(


                'key' => 'field_61e7c25a60800',


                'label' => 'Текст ( copywriting ) после дат (ru)',


                'name' => 'copywriting_text_ru',


                'type' => 'text',


                'instructions' => '',


                'required' => 0,


                'conditional_logic' => 0,


                'wrapper' => array(


                    'width' => '',


                    'class' => '',


                    'id' => '',


                ),


                'default_value' => '',


                'placeholder' => '',


                'prepend' => '',


                'append' => '',


                'maxlength' => '',


            ),


            array(


                'key' => 'field_61e7c28960801',


                'label' => 'Text ( copywriting ) after date (en)',


                'name' => 'copywriting_text_en',


                'type' => 'text',


                'instructions' => '',


                'required' => 0,


                'conditional_logic' => 0,


                'wrapper' => array(


                    'width' => '',


                    'class' => '',


                    'id' => '',


                ),


                'default_value' => '',


                'placeholder' => '',


                'prepend' => '',


                'append' => '',


                'maxlength' => '',


            ),


        ),


        'location' => array(


            array(


                array(


                    'param' => 'options_page',


                    'operator' => '==',


                    'value' => 'acf-options-footer',


                ),


            ),


        ),


        'menu_order' => 0,


        'position' => 'normal',


        'style' => 'default',


        'label_placement' => 'top',


        'instruction_placement' => 'label',


        'hide_on_screen' => '',


        'active' => true,


        'description' => '',


        'show_in_rest' => 0,


    ));


    


endif;


	