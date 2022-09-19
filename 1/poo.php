<?php
class trabajo{
    public $horas;
    public $salario;

    
    
    public function Mostrar(){
        $salariobruto = $this->horas * $this->salario;
        define("descuento", 0.2);
        $desc = descuento * $salariobruto;
        $salarioneto = $salariobruto - $desc;


        return "<h2>Horas Trabajadas:" . $this->horas . "</h2>" . "<h2>Salario por hora:" . $this->salario . "$</h2>".
          "<h2>Salario Bruto:" . $salariobruto . "$</h2>" . "<h2>Salario Neto:" . $salarioneto . "$</h2>";
    }

    public function setHora($horas){
        $this->horas = $horas;
    }
    public function getHora($horas){
        return $this->horas;
    }
    public function setsalario($salario){
        $this->salario = $salario;
    }
    public function getsalario($salario){
        return $this->salario;
    }

}
?>
