<?php
class trabajo
{
    public static function myModal($texto_boton, $color_boton)
    {
        return '
    
    <!-- Button trigger modal -->
        <button type="button" class="btn btn-' . $color_boton . '" data-bs-toggle="modal" data-bs-target="#exampleModal">
            ' . $texto_boton . '
        </button>

       
    
    ';
    }

    public static function myModal2($titulo, $cuerpo, $texto_boton_cerrar, $texto_boton_ir, $vinculo_boton_ir)
    {
        return '
    
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog        ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">' . $titulo . '</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ' . $cuerpo . '
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">' . $texto_boton_cerrar . '</button>
                        <a href="' . $vinculo_boton_ir . '" target="_blank"><button type="button" class="btn btn-primary">' . $texto_boton_ir . '</button>
                    </div>
                </div>
            </div>
        </div>
    
    ';
    }
}
