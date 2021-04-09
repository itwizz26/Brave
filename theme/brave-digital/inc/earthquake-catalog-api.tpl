<!-- Template file for the api data visualization -->
<link href="<?php echo get_stylesheet_directory_uri(); ?>/node_modules/leaflet/dist/leaflet.css" rel="stylesheet" />
<link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet" />
<link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/earthquake-catalog-api.css" rel="stylesheet" />

<div class="container">
    <h1>Earthquake Catalog API</h1>
    <div id="earthquake-map"><!-- interactive map holder --></div>
</div>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/node_modules/leaflet/dist/leaflet.js"></script>

<script type="text/javascript">
    // set dir path globally for js
    var templateUri = '<?php echo get_stylesheet_directory_uri(); ?>';
</script>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/earthquake-global.js"></script>
