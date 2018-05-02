<?php
require("vendor/autoload.php");

use Models\Post;
use Models\Helpers\Page;

$data = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);
//paduodu duomenys is formos i klases Post konstruktoriu
$post = new Post($data);
$post->save();

Page::redirect("index.php", ["Post created!"]);




