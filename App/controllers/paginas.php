<?php
class Paginas extends Controllers{
    public function sobre(){
        $dados = ['titulo'=>'Pagina sobre nós.', 'descricao'=> 'Somos a maior empresa de tecnologia do Brasil', 'contato'=>'Estamos localizados na rua das flores, 
        jardim ds maravilhas...'];
        $this->view('paginas/sobre', $dados);
    }//fim do método sobre

    public function index(){
        $dados = ['titulo'=>'Pagina Inicial', 'descricao'=> 'Aula de Php Orientada a objetos com MVC.'];
        $this->view('paginas/home', $dados);
    }//Fim da função index
    public function contato(){
        
    }
}//Fim da classe 