<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css"> 
    <link rel="googlefonts" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    <?php
        if (is_front_page() || is_home()) {
            bloginfo('name');
        } else {
            wp_title('', true, 'right');
            bloginfo('name');
        }
        ?>
    </title>
    <?php wp_head(); ?> 
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php wp_body_open(); ?>
  <header>
    <div class="nav-container">
        <?php wp_nav_menu(['theme_location' => 'primary-menu-left']);?> 
        <div class="nav-title-container">
            <a class="nav-title" href="<?php echo home_url(); ?>"> Tea Leaves </a>
        </div>
        <?php wp_nav_menu(['theme_location' => 'primary-menu-right']);?> 
    </div>
  </header>


  <body <?php body_class(); ?>>
  <?php
  // @link https://developer.wordpress.org/reference/functions/wp_body_open/
  // Fires the wp_body_open action.
    wp_body_open();
    get_template_part('components/header')
    ?>
  
  
  <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">