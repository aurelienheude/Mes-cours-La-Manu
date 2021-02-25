<?php
/*
Plugin Name: Plugin Météo
Plugin URI: https://lamanu.fr/
Description: Ceci est mon premier plugin
Author: Nicolas Personne
Version: 1.0
Author URI: http://lamanu.fr/
*/
if($pagenow == 'admin.php'){
function style()
	{
		wp_enqueue_style('style_plug', plugin_dir_url( __FILE__ ).'style.css');
	}
	add_action('admin_enqueue_scripts', 'style');
}else{
		remove_action('admin_enqueue_scripts', 'style');
}
//Cette fonction permet d'afficher le menu sur la partie gauche du backoffice Wordpress
//string $page_title, string $menu_title, string $capability, string $menu_slug, callable $function = '', string $icon_url = '', int $position = null 
function my_admin_menu()
{
	add_menu_page('Widget Météo', 'Widget Météo', 'manage_options', 'meteo/form.php', 'form', 'dashicons-tickets', 6);
}
add_action('admin_menu', 'my_admin_menu');

function form()
{

?>
	<h1>Bonjour,</h1>
	<form action="options.php" method="POST">
		<?php
		do_settings_sections('settings_page');
		settings_fields('setting');
		submit_button();
		?>
	</form>
	<p>Voici le shortcode : [widget_meteo]</p>
	<?php
	echo create_shortcode();
}
add_action('admin_init', 'setting');

function setting()
{
	/**
	 * Registers a single setting
	 */
	register_setting(
		'setting',     // Settings group.
		'groupInput',     // Setting name
		'sanitize'  // Sanitize callback.
	);

	add_settings_section(
		'section',                   // Section ID
		'Bienvenue sur votre plugin de météo.',  // Title
		'section_markup',            // Callback or empty string
		'settings_page'              // Page to display the section in.
	);
	add_settings_field(
		'text_field',                   // Field ID
		'Entrez votre clé API',  // Title
		'apiKey',            // Callback to display the field
		'settings_page',                // Page
		'section'                      // Section
	);
	add_settings_field(
		'city',                   // Field ID
		'Entrez l\'id de la ville',  // Title
		'city',            // Callback to display the field
		'settings_page',                // Page
		'section'                      // Section
	);
	add_settings_field(
		'widget',                   // Field ID
		'Choisissez votre widget',  // Title
		'widget',            // Callback to display the field
		'settings_page',                // Page
		'section'                      // Section
	);
	/**
	 * Displays our setting field
	 * 
	 * @param  array  $args  Arguments passed to corresponding add_settings_field() call
	 */
	function apiKey()
	{
		$group = get_option('groupInput');
		$key = $group['apiKey'];
		$value   = $key ?: '';
	?>
		<input id="apiKey" class="apiKey" type="text" name="groupInput[apiKey]" value="<?php echo esc_attr($value); ?>">
	<?php
	}
	function city()
	{
		$group = get_option('groupInput');
		$city = $group['city'];
		$value   = $city ?: '';
	?>
		<input id="city" class="city" type="text" name="groupInput[city]" value="<?php echo esc_attr($value); ?>">
	<?php
	}
	function widget()
	{
		$group = get_option('groupInput');
		$id_widget = $group['id_widget'];
		$value   = $id_widget ?: '';
		for($i = 11; $i <= 19; $i++){
	?>
<label>
	<input <?= ($i == $value) ? 'checked' : ''  ?> type="radio" id="id_widget" name="groupInput[id_widget]" value="<?= $i ?>">
	<img src="/wp-content/plugins/meteo/img/weather-<?= $i ?>.PNG">
	</label>
<?php
		}
	}
	/**
	 * Displays the content of the section
	 * 
	 * @param  array  $args  Arguments passed to the add_settings_section() function call
	 */
	function section_markup(){}
}
function sanitize($inputs)
{
	$input = [];
	if (isset($inputs['apiKey'])) {
		$key = $inputs['apiKey'];
		$input['apiKey'] = $key;
	} else {
		$input['apiKey'] = get_option('groupInput["apiKey"]');
	};

	if (isset($inputs['id_widget'])) {
		$id_widget = $inputs['id_widget'];
		$input['id_widget'] = $id_widget;
	} else {
		$input['id_widget'] = get_option('groupInput["id_widget"]');
	};

	if (isset($inputs['city'])) {
		$city = $inputs['city'];
		$input['city'] = $city;
	} else {
		$input['city'] = get_option('groupInput["city"]');
	};

	return $input;
}

function create_shortcode()
{
	$group = get_option('groupInput');
	$key = $group['id_widget'];
	switch ($key) {
		case 11:
			$div = '<div id="openweathermap-widget-11"></div>';
			function script_11()
			{
				wp_enqueue_script('script', 'https://openweathermap.org/themes/openweathermap/assets/vendor/owm/js/d3.min.js', '1.0.0', true);
			}
			add_action('wp_enqueue_scripts', 'script_11');
			break;
		case 12:
			$div = '<div id="openweathermap-widget-12"></div>';
			break;
		case 13:
			$div = '<div id="openweathermap-widget-13"></div>';
			break;
		case 14:
			$div = '<div id="openweathermap-widget-14"></div>';
			break;
		case 16:
			$div = '<div id="openweathermap-widget-16"></div>';
			break;
		case 17:
			$div = '<div id="openweathermap-widget-17"></div>';
			break;
		case 18:
			$div = '<div id="openweathermap-widget-18"></div>';
			break;
		case 19:
			$div = '<div id="openweathermap-widget-19"></div>';
			break;
		default:
			$div = '<div id="openweathermap-widget-15"></div>';
			break;
	}

	return $div;
}
add_shortcode('widget_meteo', 'create_shortcode');

function script()
{
	wp_enqueue_script('script', plugins_url('script.js', __FILE__), '1.0.0', true);
	$group = get_option('groupInput');
	$key = $group['apiKey'];
	$id_city = $group['city'];
	$id_widget = $group['id_widget'];
	$values = [
		'key' => $key,
		'city' => $id_city,
		'id_widget' => $id_widget
	];
	wp_localize_script('script', 'values', $values);
}
add_action('wp_enqueue_scripts', 'script');
add_action('admin_enqueue_scripts', 'script');


