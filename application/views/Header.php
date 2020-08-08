<?php 
$id = $this->session->userdata('sid');
if(!$id){
    redirect(base_url());
}
?> 
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home Page</title>
    <link rel="stylesheet" href="<?= base_url() ?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/Article-List.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/Card-Carousel-1.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/Card-Carousel.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/MUSA_carousel-product-cart-slider-1.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/MUSA_carousel-product-cart-slider.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/Navbar-Fixed-Side.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/sidebar-1.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/sidebar-2.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/sidebar-3.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/Sidebar-Menu-1.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/Sidebar-Menu-2.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/Sidebar-Menu-3.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/Sidebar-Menu.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/sidebar.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
</head>