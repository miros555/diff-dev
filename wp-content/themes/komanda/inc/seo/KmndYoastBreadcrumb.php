<?php
/**
 * Изменяет хлебные крошки Yoast.
 *
 * Вывести в шаблоне: do_action('kmnd_yoast_breadcrumb');
 *
 */
class KmndYoastBreadcrumb {

	/**
	 * Какую позицию занимает элемент в цепочке хлебных крошек.
	 *
	 * @var int
	 */
	private $el_position = 0;

	/**
	 * Singleton
	 */
	private static $instance = null;

	// public function __construct() {
	// 	add_action( 'kmnd_yoast_breadcrumb', [ $this, 'render' ] );
	// }
	public function addAction() {
	
		add_action( 'kmnd_yoast_breadcrumb', [ $this, 'render' ] );
	}

	/**
	 * Singleton method
	 */
	public static function getInstance()
    {
      
        if (!isset(self::$instances)) {
			self::$instance = new self;
        }

		return self::$instance;
    }

	/**
	 * Выводит на экран сгенерированные крошки.
	 *
	 * @return void
	 */
	public function render() {
		if ( ! function_exists( 'yoast_breadcrumb' ) ) {
			return;
		}

		// Регистрируем фильтры для изменения дефолтной вёрстки крошек
		add_filter( 'wpseo_breadcrumb_single_link', [ $this, 'modify_yoast_items' ], 10, 2 );
		add_filter( 'wpseo_breadcrumb_output', [ $this, 'modify_yoast_output' ] );
		add_filter( 'wpseo_breadcrumb_output_wrapper', [ $this, 'modify_yoast_wrapper' ] );
		add_filter( 'wpseo_breadcrumb_separator', '__return_empty_string' );

		// Выводим крошки на экран
		yoast_breadcrumb();

		// Отключаем фильтры
		remove_filter( 'wpseo_breadcrumb_single_link', [ $this, 'modify_yoast_items' ] );
		remove_filter( 'wpseo_breadcrumb_output', [ $this, 'modify_yoast_output' ] );
		remove_filter( 'wpseo_breadcrumb_output_wrapper', [ $this, 'modify_yoast_wrapper' ] );
		remove_filter( 'wpseo_breadcrumb_separator', '__return_empty_string' );

		// Обнуляем счётчик
		$this->el_position = 0;
	}

	/**
	 * Изменяет html код li элементов.
	 *
	 * @param string $link_html Дефолтная вёрстка элемента хлебных крошек.
	 * @param array  $link_data Массив данных об элементе хлебных крошек.
	 *
	 * @return string
	 */
	function modify_yoast_items( $link_html, $link_data, $divider = null ) {
		// Шаблон контейнера li
		$li = '<li itemprop="itemListElement" itemscope="itemscope" itemtype="https://schema.org/ListItem" %s>%s</li>';

		// Содержимое li в зависимости от позиции элемента
		if ( strpos( $link_html, 'breadcrumb_last' ) === false ) {
			$li_inner = sprintf( '
                <a itemprop="item" href="%s" class="pathway animated-link">
                    <span itemprop="name">%s</span>
                </a>
            ', $link_data['url'], $link_data['text'] );

			$li_inner .= !empty($divider) ? '<span class="divider">' .$divider. '</span>' : '';

			$li_class = '';
		} else {
			$li_inner = sprintf( '<span itemprop="name">%s</span>', $link_data['text'] );
			$li_class = 'class="active"';
		}

		$li_inner .= sprintf( '<meta itemprop="position" content="%d"/>', ++ $this->el_position );

		// Вкладываем сформированное содержание в li и возвращаем полученный элемент хлебных крошек.
		return sprintf( $li, $li_class, $li_inner );
	}

	/**
	 * Возвращает псевдо wrapper, который в будущем будет вырезан из вёрстки.
	 * Если этого не сделать, то будущие li будут обёртнуты в единый span Yoast'ом.
	 *
	 * @return string
	 */
	function modify_yoast_wrapper() {
		return 'wrapper'; // Будущий "уникальный" тег для вырезки из html
	}

	/**
	 * Изменяет дефолтный html код крошек Yoast.
	 *
	 * @param string $html
	 *
	 * @return string
	 */
	function modify_yoast_output( $html ) {
		// Убираем псевдо wrapper
		$html = str_replace( [ '<wrapper>', '</wrapper>' ], '', $html );

		// Формируем контейнер для li элементов
		$ul = '<ul itemscope="itemscope" itemtype="https://schema.org/BreadcrumbList" class="breadcrumbs">%s</ul>';

		// Вставляем в контейнер li элменты
		$html = sprintf( $ul, $html );

		return $html;
	}
}


KmndYoastBreadcrumb::getInstance()->addAction();
