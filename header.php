<!DOCTYPE html>
<html>
   
<head>
    <meta charset=" <?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(''); ?>
    <?php bloginfo('name'); ?>
</title>
    <link rel="stylesheet" href=" <?php echo get_template_directory_uri();?>/css/style.css">
    <?php wp_head(); ?>
    </head>

<body <?php body_class(); ?> >

<!-- Navigation Bar -->
<header>
        <div class="navbar">
            <div class="logo">
                <span>neweb.ai</span>
            </div>
            <ul class="nav-links">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Projects</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Website Management</a></li>
                <li><a href="#">SEO Tools</a></li>
                <li><a href="#">Support</a></li>
            </ul>
            <div class="contact-btn">
                <a href="#">LOGIN</a>
            </div>
            <div class="burger">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </header>