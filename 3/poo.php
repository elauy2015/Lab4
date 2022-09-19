<?php
class trabajo{
    public $precio;
    public $vida;

    
    
    public function Mostrar(){
        $valor = 0;
        $a =$this->precio;
        for($i=0;$i<=$this->vida-1;$i++){
            $a=$a-30000;
        }


        if($a>=0){

        
        ?>
        <table class="table table-dark table-striped">
            <tr>
                <th style="text-align: center;">Año</th>
                <th style="text-align: center;">Valor por Año</th>
                <th style="text-align: center;">Valor Recuperado</th>
            </tr>

        <?php
         for($i=0;$i<=$this->vida;$i++){
            echo "<tr>
            <th><h3 style='text-align: center;'>$i</h3></th>
            <th><h3 style='text-align: center;'>" . $this->precio . "</h3></th>
            <th><h3 style='text-align: center;'>". $valor ."</h3></th>";
            $this->precio = $this->precio-30000;
            $valor = $valor+30000;
        
        
        }
    }else{
        echo "<h3 style='text-align: center;'>Usted no puede hacer eso maestro </h3>";
    }
    }

    public function setPrecio($precio){
        $this->precio = $precio;
    }
    public function getPrecio($precio){
        return $this->precio;
    }
    public function setVida($vida){
        $this->vida = $vida;
    }
    public function getVida($vida){
        return $this->vida;
    }

}
?>
