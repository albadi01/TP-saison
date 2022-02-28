<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends AbstractController
{
    /**
     * @Route("/front", name="app_front")
     */
    public function index(): Response
    {
        return $this->render('front/index.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }


    /**
    * @Route("/saisons/{saison}", name="saisons")
    */
    public function quatreSaisons($saison){

    $ete = array ( 
        "nom" => "ETE",
        "message" => "l'ete il fait souvent chaud",
        "photo" => "/image/ete.jpg"
    );
   
    $automne = array ( 
        "nom" => "AUTOMNE",
        "message" => "En Automne les feuilles des arbres tombent ",
        "photo" => "/image/automne.jpg"
    );
    
    $hiver = array ( 
        "nom" => "HIVER",
        "message" => "il neige parfois et il fait souvent froid",
        "photo" => "/image/hiver.jpg"
    );

    $printemps = array ( 
        "nom" => "PRINTEMPS",
        "message" => "Printemps les fleurs s'ouvrent et l'herbe redevient verte", 
        "photo" => "/image/printemps.jpg"
    );

    // $mes = array (
    //     "nom" => "",
    //     "message" => "ouh la ouh laa laaa Cette saison n'existe pas",
    //     "photo" =>""
    // );

     
        // $mes = 0;
    
        if($ete['nom'] == $saison){ 
            $saison = $ete ;
        }
        elseif($printemps['nom'] == $saison){  
            $saison = $printemps ;
        }
        elseif($hiver['nom'] == $saison){
            $saison = $hiver ;
        }elseif($automne['nom']== $saison) {
            $saison = $automne ;
        }else {
            $mes = "ouh la ouh laa laaa Cette saison n'existe pas";
        }
            
        
                return $this->render('front/saisons.html.twig', [ 
                'saison' => $saison,
                // 'mes' => $mes,     
                  
            ]); 
        

    }

}

