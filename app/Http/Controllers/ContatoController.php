<?php
  
namespace App\Http\Controllers;
  
class ContatoController extends Controller {
  
            public function lista(){
                        return '<h1>Informações para Contato</h1>
                                   <b>Nome:</b> Luciano Alexandre <br />
                                   <b>Telefone:</b> (xx) xxxxx-xxxx <br />
                                   <b>e-mail:</b> luciano.cnrn@gmail.com <br />';
            }
}