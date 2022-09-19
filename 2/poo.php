<?php
class trabajo{
    public $alumnas;
    public $alumnos;

    
    
    public function Mostrar(){
        $cantidad = $this->alumnas+ $this->alumnos;
        $pm= ($this->alumnos/$cantidad)*100;
        $pf= ($this->alumnas/$cantidad)*100;
        return 
        
        "<table class='table table-dark table-striped'>
        <tr>
            <th>Niñas</th>
            <th>Niños</th>
        </tr>
        <tr>
            <th><h2>" .round($pf, 2) ."%</h2></th>
            <th><h2>" .round($pm, 2) ."%</h2></th>
        </tr>
    </table>"
        
        ;
    }

    public function setF($alumnas){
        $this->alumnas = $alumnas;
    }
    public function getF($alumnas){
        return $this->alumnas;
    }
    public function setM($alumnos){
        $this->alumnos = $alumnos;
    }
    public function getM($alumnos){
        return $this->alumnos;
    }

}
?>
