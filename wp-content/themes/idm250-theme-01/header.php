<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css"> 
    <link rel="googlefonts" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IDM250</title>
    <?php wp_head(); ?> 
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php wp_body_open(); ?>
  <header>
    <div class="nav-container">
        <div class="nav-title-container">
            <a class="nav-title" href="<?php echo home_url(); ?>"> Tea Leaves </a>
        </div>

        <?php
    // @link https://developer.wordpress.org/reference/functions/wp_body_open/
    // Fires the wp_body_open action.
    // wp_body_open();
    //   get_template_part('components/header')
        $menu = wp_nav_menu(['theme_location' => 'primary-menu']);
    ?>
        <div class="nav-links-container">
            <ul class="nav-links">
                <?php
                // foreach ($menu as $menu_item) {
                //     echo "
                //         <li class='nav-link'>
                //             <a href='{$menu_item->url}'>{$menu_item->title}</a>
                //         </li>
                //         ";
                // }?>
            </ul>
        </div>
    </div>
  </header>
  
  
  <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">