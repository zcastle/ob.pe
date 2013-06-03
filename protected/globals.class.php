<?php

class globals {
    private $path_images = 'resources/images/';
    private $path_images_categorias = 'categorias/';

    public function getPathImages(){return $this->path_images;}
    public function getPathImagesCategorias(){return $this->path_images.$this->path_images_categorias;}
}

?>