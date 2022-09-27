<?php

class resort_util{
    
   
        
    public static function Mybarra($edadper,$colorp){
        return '
        <div class="progress">
       
        <div class="progress-bar bg-'.$colorp.' progress-bar-striped progress-bar-animated" role="progressbar" style="width: '.$edadper.'%;" aria-valuenow="'.$edadper.'" aria-valuemin="0" aria-valuemax="100">'.$edadper.'</div>
    
    </div>
   
';
    
    }
    public static function Color($sexo){
        $color = "";
        if($sexo=="Masculino"){
            $color = "primary";
        }
        if($sexo=="Femenino"){
            $color = "danger";
       
        }          
        return $color;
    }


    public static function MyModal($p_id,$p_boton,$p_color,$p_titulo,$p_nombre,$p_edad,$p_sexo,$p_ac){
        return '
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-'.$p_color.'" data-bs-toggle="modal" data-bs-target="#exampleModal'.$p_id.'">
            '.$p_boton.'
        </button>
        
        <!-- Modal -->
        <div class="modal fade" id="exampleModal'.$p_id.'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog        ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">'.$p_titulo.'</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <table class="table table-'.$p_color.' table-striped table-hover table-bordered table-sm table-responsive-sm">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Edad</th>
                            <th scope="col">Sexo</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">'.$p_id.'</th>
                            <td>'.$p_nombre.'</td>
                            <td>'.$p_edad.'</td>
                            <td>'.$p_sexo.'</td>
                            
                        </tr>
                    </tbody>
                </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">'.$p_ac.'</button>
                    </div>
                </div>
            </div>
        </div> ';

    }
}
?>







