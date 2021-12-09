<?php
/**
 * Atelê Ema Klabin
 *
 * @package           EKLabs/Atelie_CMEK
 * @author            Galactonautas
 * @license           definir
 *
 * @wordpress-plugin
 * Plugin Name:       EKLabs/Atelie_CMEK
 * Plugin Uri:        https://emaklabin.org.br/DEFINIR_URL
 * Description:       Jogo criado por Estúdio Galactonautas para o Educativo da Casa Museu Ema Klabin.
 * Version:           0.1.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Estúdio Galactonautas, Henrique Godinho
 * Text Domain:       atelie_cmek
 * Prefix:            lab_atl_
 * License:           definir
 */
namespace EKLabs;
use HGWPUtils\Extras;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Atelie_CMEK {

    public $shortcode_tag = 'atelie-cmek';
	public $width;
	public $height;

	/**
	 * Instance
	 *
	 * @var Object $instance | Instância da classe.
	 */
	private static $instance;

	/**
	 * RETORNA INSTÂNCIA DA CLASSE
	 *
	 * @return Object $instance
	 */
	public static function get_instance() {
		if ( null === self::$instance ) {
			self::$instance = new self();
		}
		return self::$instance;
	}
	
	public function __construct()
	{
		add_shortcode( $this->shortcode_tag, array( $this, 'set_atelie_cmek_app' ) );
		$this->width = '1280px';
		$this->height = '720px';
	}

	/**
	 * [atelie-cmek]
	 *
	 * @return string
	 */
	public function set_atelie_cmek_app() {
		ob_start();
		?>
			<iframe 
			 	id="<?php echo esc_attr( $this->shortcode_tag ) ?>" 
				src="https://ema-klabin.github.io/Atelie-da-Casa-Museu-Ema-Klabin/"
				width="<?php echo esc_attr( $this->width ) ?>"
				height="<?php echo esc_attr( $this->height ) ?>"
				allowfullscreen
			></iframe>
		<?php
		return ob_get_clean();
	}
}

Atelie_CMEK::get_instance();