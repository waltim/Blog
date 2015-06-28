<?php

App::uses('AppController', 'Controller');
class PostsController extends AppController {
    public function index() {
        $this->Post->recursive = 0;
        $this->set('posts', $this->paginate());
    }
    public function add() {
        if ($this->request->is('post')) {
            $this->Post->create();
            if ($this->Post->save($this->request->data)) {
                $this->Session->setFlash(__('A notícia foi salva com sucesso!'), 'flash/success');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('A notícia pode ser salva, por favor tente novamente.'), 'flash/error');
            }
        }
    }
    public function edit($id = null){
        if($this->data){
            if($this->Post->save($this->data))
                $this->Session->setFlash('A notícia foi editada com sucesso!');
            $this->redirect(array('controller' => 'posts','action' => 'index'));
        }else{
            $this->data = $this->Post->read(null,$id);
        }
    }
    public function delete($id = null){
        if($id){
            if($this->Post->delete($id))
                $this->Session->setFlash('Deletado com sucesso!');
            $this->redirect(array('controller' => 'posts','action' => 'index'));
        }
    }
    public function view($id = null) {
        if (!$this->Post->exists($id)) {
            throw new NotFoundException(__('Notícia está inválida.'));
        }
        $options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
        $this->set('novidade', $this->Post->find('first', $options));
    }
    public function somar($a, $b)
    {
        return $a+$b;
    }
    public function subtrair($a, $b)
    {
        return $a-$b;
    }
    public function dividir($a, $b)
    {
        return $a/$b;
    }
    public function multiplicar($a, $b)
    {
        return $a*$b;
    }

    public function somarArray($lista)
    {
        $soma = 0;

        foreach($lista as $numero):
        {
            $soma += $numero;
        }
        endforeach;
        return $soma;
    }
    public function subtrairArray($lista)
    {
        $subtrair = 0;

        foreach($lista as $numero):
        {
            $subtrair -= $numero;
        }
        endforeach;
        return $subtrair;
    }
    public function dividirArray($lista)
    {
        $dividir = 0;

        foreach($lista as $numero):
        {
            $dividir /= $numero;
        }
        endforeach;
        return $dividir;
    }
    public function multiplicarArray($lista)
    {
        $multiplicar = 1;

        foreach($lista as $numero):
        {
            $multiplicar *= $numero;
        }
        endforeach;
        return $multiplicar;
    }

    public function somarArrayVazio($lista)
    {
        $soma = 0;

        foreach($lista as $numero):
        {
            $soma += $numero;
        }
        endforeach;
        return $soma;
    }
    public function subtrairArrayVazio($lista)
    {
        $subtrair = 0;

        foreach($lista as $numero):
        {
            $subtrair -= $numero;
        }
        endforeach;
        return $subtrair;
    }
    public function dividirArrayVazio($lista)
    {
        $dividir = 0;

        foreach($lista as $numero):
        {
            $dividir /= $numero;
        }
        endforeach;
        return $dividir;
    }
    public function multiplicarArrayVazio($lista)
    {
        $multiplicar = 0;

        foreach($lista as $numero):
        {
            $multiplicar *= $numero;
        }
        endforeach;
        return $multiplicar;
    }
    public function somarDoisResultados($a, $b)
    {
        $resultado1 = $a + $b;
        $resultado2 = $a + $b;
        $soma = $resultado1+$resultado2;
        return $soma;
    }
    public function subtrairDoisResultados($a, $b)
    {
        $resultado1 = $a - $b;
        $resultado2 = $a - $b;
        $subtracao = $resultado1-$resultado2;
        return $subtracao;
    }
    public function dividirDoisResultados($a, $b)
    {
        $resultado1 = $a / $b;
        $resultado2 = $a / $b;
        $divisao = $resultado1 /$resultado2;
        return $divisao;
    }
    public function multiplicarDoisResultados($a, $b)
    {
        $resultado1 = $a * $b;
        $resultado2 = $a * $b;
        $multiplicacao = $resultado1 * $resultado2;
        return $multiplicacao;
    }
    public function equacaoDeSegundoGrau($a,$b,$c)
    {
        $delta = ($b*$b)-((4*$a)*$c);
        $x1 = (-$b + sqrt ($delta)) / (2 * $a);
        $x2 = (-$b - sqrt ($delta)) / (2 * $a);
        return $x1." é o valor do x1, e o de x2 é ".$x2;
    }
    public function porcentagem10($valor)
    {
        $resultado = ($valor*10)/100;
       return $resultado;
    }
    public function porcentagem20($valor)
    {
        $resultado = ($valor*20)/100;
        return $resultado;
    }
    public function porcentagem30($valor)
    {
        $resultado = ($valor*30)/100;
        return $resultado;
    }
    public function porcentagem40($valor)
    {
        $resultado = ($valor*40)/100;
        return $resultado;
    }
    public function porcentagem50($valor)
    {
        $resultado = ($valor*50)/100;
        return $resultado;
    }
    public function porcentagem60($valor)
    {
        $resultado = ($valor*60)/100;
        return $resultado;
    }
    public function porcentagem70($valor)
    {
        $resultado = ($valor*70)/100;
        return $resultado;
    }
    public function porcentagem80($valor)
    {
        $resultado = ($valor*80)/100;
        return $resultado;
    }
    public function porcentagem90($valor)
    {
        $resultado = ($valor*90)/100;
        return $resultado;
    }
    //Cosseno de ( A - B )
    public function cosAmenosB($cosA,$cosB,$senA,$senB)
    {
        $cosAmenosB = $cosA*$cosB + $senA*$senB;
        return $cosAmenosB;
    }
    //Cosseno de ( A + B )
    public function cosAmaisB($cosA,$cosB,$senA,$senB)
    {
        $cosAmaisB = $cosA*$cosB - $senA*$senB;
        return $cosAmaisB;
    }
    //seno (A + B)
    public function senAmaisB($cosA,$cosB,$senA,$senB)
    {
        $senAmaisB = $senA*$cosB + $senB*$cosA;
        return $senAmaisB;
    }
    //seno (A - B)
    public function senMenosB($cosA,$cosB,$senA,$senB)
    {
        $senMenosB = $senA*$cosB - $senB*$cosA;
        return $senMenosB;
    }
    public function quebrarSequenciaCaracter($frase)
    {
        print_r (explode(" ",$frase));
        return $frase;
    }
    public function calculaRaizQuadrada($numero)
    {
        $resultado= sqrt($numero);
        return $resultado;
    }
    public function porcentagem15($valor)
    {
        $resultado = ($valor*15)/100;
        return $resultado;
    }
    public function porcentagem25($valor)
    {
        $resultado = ($valor*25)/100;
        return $resultado;
    }
    public function porcentagem35($valor)
    {
        $resultado = ($valor*35)/100;
        return $resultado;
    }
    public function porcentagem45($valor)
    {
        $resultado = ($valor*45)/100;
        return $resultado;
    }
    public function porcentagem55($valor)
    {
        $resultado = ($valor*55)/100;
        return $resultado;
    }
    public function porcentagem11($valor)
    {
        $resultado = ($valor*11)/100;
        return $resultado;
    }
    public function porcentagem12($valor)
    {
        $resultado = ($valor*12)/100;
        return $resultado;
    }
    public function porcentagem22($valor)
    {
        $resultado = ($valor*22)/100;
        return $resultado;
    }
    public function porcentagem37($valor)
    {
        $resultado = ($valor*37)/100;
        return $resultado;
    }
    public function porcentagem42($valor)
    {
        $resultado = ($valor*42)/100;
        return $resultado;
    }
    public function equacaoDeSegundoGrau2($a,$b,$c)
    {
        $delta = ($b*$b)-((4*$a)*$c);
        $x1 = (-$b + sqrt ($delta)) / (2 * $a);
        $x2 = (-$b - sqrt ($delta)) / (2 * $a);
        return $x1." é o valor do x1, e o de x2 é ".$x2;
    }
    public function equacaoDeSegundoGrau3($a,$b,$c)
    {
        $delta = ($b*$b)-((4*$a)*$c);
        $x1 = (-$b + sqrt ($delta)) / (2 * $a);
        $x2 = (-$b - sqrt ($delta)) / (2 * $a);
        return $x1." é o valor do x1, e o de x2 é ".$x2;
    }
    public function equacaoDeSegundoGrau4($a,$b,$c)
    {
        $delta = ($b*$b)-((4*$a)*$c);
        $x1 = (-$b + sqrt ($delta)) / (2 * $a);
        $x2 = (-$b - sqrt ($delta)) / (2 * $a);
        return $x1." é o valor do x1, e o de x2 é ".$x2;
    }
    public function quebrarSequenciaCaracter2($frase)
    {
        print_r (explode(" ",$frase));
        return $frase;
    }
    public function quebrarSequenciaCaracter3($frase)
    {
        print_r (explode(" ",$frase));
        return $frase;
    }
    public function quebrarSequenciaCaracter4($frase)
    {
        print_r (explode(" ",$frase));
        return $frase;
    }
    public function quebrarSequenciaCaracter5($frase)
    {
        print_r (explode(" ",$frase));
        return $frase;
    }
    public function somar2($a, $b)
    {
        return $a+$b;
    }
    public function somar3($a, $b)
    {
        return $a+$b;
    }
    public function somar4($a, $b)
    {
        return $a+$b;
    }
}