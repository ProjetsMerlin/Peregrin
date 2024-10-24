<?php

switch (true) {
case ($get_page === $trad["url_home"] ) :
$slug_page = "home";
break;

/* START */
case ($get_page === $trad["url_blog"] ) :
$slug_page = "blog";
break;

/* -END- */

case ($get_page === "error" || $get_page === "404"):
default:
$slug_page= "404";
break;
}