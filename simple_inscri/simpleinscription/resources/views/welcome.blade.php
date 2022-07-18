@extends('layouts.web')

@section('main')
<div class="row text-center">
    <div class="container-fluid top_decor">
        <div class="row">
            <div class="col-md-6 my-5 top_text">
                <h2 class="sub_text" id="sub_text_first"> Gagnez facilement de l’argent avec Innov-EM <strong class="in_top">( jusqu’à 30 % de commission )</strong></h2>

                <p class="sub_text" id="sub_text_id">Générez des revenus passifs avec un minimum de travail ? C’est possible avec Innov-EM
                    en rejoignant la grande communauté des ambassadeurs #AmbInnov
                
                </p>        
                <a type="button" href="{{route('inscription')}}" class="btn btn-outline btn-default rounded-pill py-3 px-5" data-mdb-ripple-color="dark">Devenir AmbInnov</a>
        
        
            </div>
            <div class="col-md-6 top_img">
                <img src="{{asset('images/gain2.png')}}" alt="">
            </div>
        </div>
        
    </div>
</div>
 
<style>

    #sub_text_id{
        font-size: 20px;
        color: black;
    }
    #sub_text_first{
        line-height: 50px;
    }

    .in_top{
        color: #FAD332;
    }

    .top_decor{

        background-color: azure;
        width: 100%;

    }
    .top_text{
        padding-left: 100px;
        text-align: center;
      
    }

    @media only screen and (max-width: 768px) {
  /* For mobile phones: */

          .top_text{
        padding-left: 10px;
        
    }

    }

    .top_img{
        display: flex;
        justify-content: flex-end;
    }
 
   
    .sub_text{ 
        padding: 50px 50px 10px 30px;
        text-align: justify
        line-height: 75px;
    }
    .description_txt{
        padding: 60px 0 0 100px;
    }
    .grp_description{
       padding-bottom: 160px; 
    }

  
    .image {
    opacity: 1;
    

    backface-visibility: hidden;
    }

 

</style>

<div class="row pt-5 grp_description">
   <div class="col-md-6 text-center px-5 img_contain">
        <img class="img-fluid rounded image" width="500px" src="{{asset('images/ambInnov_vf.png')}}" alt="">
        
   </div>
 
   <div class="col-md-6 px-5 description_txt">
   
    
    <strong class="smll_title" >Quels sont les avantages à être un AmbInnov ?</strong>
    <p class="details_txt">
    Être un <strong>AmbInnov</strong> , c’est avoir une <strong class="advantge">source de revenu supplémentaire</strong>  pour <strong class="advantge">un minimum de travail, de temps et d’efforts</strong>. Vous n’avez pas à travailler un nombre d’heures fixes pour gagner de l’argent. Être un AmbInnov c’est être son propre patron.
    <br>
    </p>
    <strong class="smll_title"> Comment ça marche ?</strong>
   <p class="details_txt">
    1-) Parlez de Innov-EM autour de vous <br> 2-) ramenez des clients <br> 3-) gagnez de l’argent. 
   </p>
   <strong class="smll_title">  Découvrez nos différents offres et services </strong> 
   <p class="details_txt"> E-mail Pro <br>
    Formations  <br>
    Hébergement <br>  
    Facebook & Google Ads   <br>
    Création de site vitrine  <br>
    Création de site e-commerce  <br>
    Création d’application mobile   <br>
    Création de logiciel de gestion <br>
    Plateforme EcomWap et Skills <br>
    

    </p> 
    
    <a type="button" href="{{route('inscription')}}" class="btn btn-outline btn-default rounded-pill my-5 py-3 px-5">Rejoindre</a>
   
</div>
</div>

<style>
    .smll_title{
        text-transform: uppercase;
        color: #0B0CAC;
    }
    .advantge{
        color: black
    }
    .details_txt{
        color: black;
        padding: 0 0 10px 0;
    }

</style>

@endsection