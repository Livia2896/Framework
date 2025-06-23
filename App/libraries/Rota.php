<?php
class Rota{
    private $controlador = "Paginas";
    public function __construct(){
        echo 'Criando a primeira classe';
        $this ->url();
        var_dump($this);
    } //Fim da função construtor

    private function url(){
        //echo ' carregando a url';
        echo $_GET['url'];
        $url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);

        if(isset($url)){
        // trim - retira o espaço no inicio e final de uma string
        // rtrim - retira o espaço em branco (ou outros caracteres) do final da string
            $url = trim(rtrim($url, '/'));
            $url = explode('/', $url);
            return $url;
        }
    }// Fim da função url

} //Fim da classe Rota
?>