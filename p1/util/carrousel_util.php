<?php

class carrousel_util{




    public static function carou($id,$texto_prin,$vinculo_imagen,$texto_descp){
       return' <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="'.$id.'" class="active" aria-current="true" aria-label="Slide '.$id.'"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide '.$id++.'"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="'.$vinculo_imagen.'" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>'.$texto_prin.'</h5>
                        <p>'.$texto_descp.'</p>
                    </div>
                </div>
                <div class="carousel-item">
                <img src="https://dummyimage.com/1800x1200/dbdbdb/787878.png&text=Image+cap" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        ';















    
}

}

