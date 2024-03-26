<?php
$trad["fr_blog"] = "blog";
$trad["nl_blog"] = "actualiteit";

switch (true) {
case ($get_page === $trad["fr_home"] && $get_lang === "fr" ) :
$slug_page = "home";
break;

case ($get_page === $trad["nl_home"] && $get_lang === "nl" ) :
$slug_page = "home";
break;

/* START */
case ($get_page === $trad["fr_blog"] && $get_lang === "fr" ) :
$slug_page = "blog";
break;

case ($get_page === $trad["nl_blog"] && $get_lang === "nl" ) :
$slug_page = "blog";
break;
/* -END- */

case ($get_page === "error" || $get_page === "404"):
default:
$slug_page= "404";
break;
}