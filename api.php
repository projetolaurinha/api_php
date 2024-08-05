<?php
    header('Content-Type:application/json');
    include 'conexao.php';

    $metodo = $_SERVER['REQUEST_METHOD'];
    //echo json_encode($metodo);

    $url = $_SERVER['REQUEST_URI'];

    //echo json_encode($url);

    $path = parse_url($url, PHP_URL_PATH);
    $path = trim($path,'/');

    echo json_encode($path);

    $pathparts = explode('/',$path);

    echo json_encode($pathparts[1]);

    //CRIANDO AS VARIANTES PARA CADA PARTE DA URL

    $primeira = isset($pathparts [0]) ? $pathparts [0] : '' ;
    $segunda = isset($pathparts [1]) ? $pathparts [1] : '' ;
    $terceira = isset($pathparts [2]) ? $pathparts [2] : '' ;
    $quarta = isset($pathparts [3]) ? $pathparts [3] : '' ;
 
    // RESPOSTA

   $response = [
     
    'metodo' => $metodo,
    'primeiraparte'=> $primeira,
    'segundaparte'=> $segunda,
    'terceiraparte'=> $terceira,
    'quartaparte'=> $quarta
   ];

   // MOSTRANDO A RESP
   // echo json_encode ($response);

   // SELEÇÃO DO METODO

   switch($metodo){

      case 'GET':
        //LOGICA
        break;
    
      case 'POST':
          //LOGICA
        break;  
        
      case 'PUT':
        //LOGICA
        break;  

      case 'DELETE':
         //LOGICA
       break;   

      default:  
        echo json_encode (
         [
            'mensagem'=> 'metodo não permitido'
         ]
       )

    }


?>