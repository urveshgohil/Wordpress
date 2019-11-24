# Wordpress
    Wordpress 5.3

### What is WORDPRESS?
    WordPress
     is a content management system (CMS) based on PHP and MySQL that is usually used with the MySQL or MariaDB database servers but can also use the SQLite database engine.
    WordPress was released on May 27, 2003, by its founders, Matt Mullenweg and Mike Little, as a fork of b2/cafelog. The software is released under the GPLv2 (or later) license.

### Converting PSD TO WORDPRESS.
    Not Time Consuming.
    Cost Effective.
    Easy to Use.
    Plugin Integration.
    Social Media.
    SEO Friendly.

### Software Requirements
    WAMP SERVER
    XAMP SERVER
    MAMP SERVER

### Two ways to Convert PSD TO WORDPRESS.
    1. Custom Theme Design.
    2. Design and Modify the Readymade theme.

### Custom Theme Integration
Dowanlod the the latest version of the wordpress from “https://wordpress.org/”.
<br>
Or
<br>
Create custom blank themes from “http://underscores.me/”.

    1. Starts your Wamp, Mamp or Xamp Server.
    2. Go to phpmyadmin
    3. Create new database as per the your project name.
    4. Now If you are using wamp server then follow below steps.
        a. Go to wamp folder >  then www folder.
        b. Put or extract your wordpress zip file in www folder.
        c. Rename that folder as per your project Name.
        d. And type “localhost/projectname” in your browser.
    5. Now install the Wordpress in your localhost.
        For the Installation please go the this URL and Follow that steps.
        “http://opensourcecmsinfo.com/wordpress-installation-step-by-step-with-screenshots/”
    6. After that create your team as per the requirements

### Create a Navigation
    Admin Panel  > Click On Pages and Select Add New Pages.
    Add Multiple pages and give Title for particular pages.
    Now go to Appearance and Select The Menu’s Options.
    Click on “Create New Menu” and Give proper title of Menu.
    Add Pages in Navigation Links which you want.
    And Save The Menu.

### Call  Navigation In PHP File
    Open the Header.php File and Write the below code for called the navigation.
    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'main' ) ); ?>
    A ‘Menu_id’ =  Navigation Name which is Provided in Admin Panel.

### Call CSS , JS  and Images.
    <link href="<?php bloginfo('template_directory'); ?> /css/animations.css" type="text/css" rel="stylesheet" />
    <script src="<?php bloginfo('template_directory'); ?> /js/Jquerymin_2.1.4.js" type="text/javascript"></script>
    <img src="<?php bloginfo('template_directory'); ?>/images/logo.svg" alt="Weebit" title="Weebit">
