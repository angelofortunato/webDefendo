<?php
class Articolo {
    function Articolo($id,$titolo,$corpo,$data,$img) {
        $this->id = $id;
        $this->titolo = $titolo;
        $this->corpo = $corpo;
        $this->data = $data;
        $this->img = $img;
    }
}
?>