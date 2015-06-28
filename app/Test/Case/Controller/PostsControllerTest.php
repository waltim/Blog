<?php
App::uses('PostsController', 'Controller');

class PostsControllerTest extends CakeTestCase {
	public $fixtures = array(
		'app.post'
	);

//	public function testIndex()
//    {
//        $results = $this->testAction('posts/index/');
//	}
//	public function testAdd()
//    {
//        $data = array(
//            'Post' => array(
//                'title' => 'Lorem ipsum dolor sit amet',
//                'body' => 'Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet',
//                'hoge' => 'Lorem',
//                'created' => '2015-06-24 19:24:16',
//                'modified' => '2015-06-24 19:24:16'
//            )
//        );
//        $results = $this->testAction('posts/add',array('data' => $data,'method' => 'post'));
//    }
//    public function testEdit(){
//        $results1 = $this->testAction('posts/edit/1');
//
//
//        $data = array(
//            'Post' => array(
//                '_id' => 1,
//                'title' => 'este titulo foi editado',
//                'body' => 'foi editado pelo teste',
//                'hoge' => 'teste',
//                'created' => '2015-04-24 19:23:16',
//                'modified' => '2015-04-27 17:21:11'
//            )
//        );
//        $results2 = $this->testAction('posts/edit',array('data' => $data,'method' => 'post'));
//
//    }
//    public function testDelete(){
//        $results = $this->testAction('posts/delete/1');
//    }
    public function testSomar()
    {
        $classe = new PostsController();
        $soma = $this->assertEqual(4,$classe->somar(2, 2),'Resultado invalido!');
        echo '2 mais 2 = ' . $classe->somar(2, 2).'<br>';
    }
    public function testSubtrair()
    {
        $classe = new PostsController();
        $subtrair = $this->assertEqual(2,$classe->subtrair(4, 2),'Resultado invalido!!');
        echo '4 menos 2 = ' . $classe->subtrair(4, 2).'<br>';
    }
    public function testDividir()
    {
        $classe = new PostsController();
        $divisao = $this->assertEqual(3,$classe->dividir(6, 2),'Resultado invalido!!');
        echo '6 dividido por 2 = ' . $classe->dividir(6, 2).'<br>';
    }
    public function testMultiplicar()
    {
        $classe = new PostsController();
        $multiplicacao = $this->assertEqual(8,$classe->multiplicar(4, 2),'Resultado invalido!');
        echo '4 vezes 2 = ' . $classe->multiplicar(4, 2) .'<br>';
    }
    public function testSomarArray()
    {
        $classe = new PostsController();
        $resultado = $this->assertEqual(6,$classe->somarArray([1,2,3]),'Resultado invalido!');
        echo 'a soma dos numeros da lista é de = ' . $classe->somarArray([1,2,3]) .'<br>';
    }
    public function testSubtrairArray()
    {
        $classe = new PostsController();
        $resultado = $this->assertEqual(-6,$classe->subtrairArray([1,2,3]),'Resultado invalido!');
        echo 'a subtração dos numeros da lista é de = ' . $classe->subtrairArray([1,2,3]) .'<br>';
    }
    public function testDividirArray()
    {
        $classe = new PostsController();
        $resultado = $this->assertEqual(0,$classe->dividirArray([1,2,3]),'Resultado invalido!');
        echo 'a divisão dos numeros da lista é de = ' . $classe->dividirArray([1,2,3]) .'<br>';
    }
    public function testMultiplicarArray()
    {
        $classe = new PostsController();
        $resultado = $this->assertEqual(12,$classe->multiplicarArray([2,2,3]),'Resultado invalido!');
        echo 'a multiplicação dos numeros da lista é de = ' . $classe->multiplicarArray([2,2,3]) .'<br>';
    }
    public function testSomarArrayVazio()
    {
        $classe = new PostsController();
        $resultado = $this->assertEqual(0,$classe->somarArrayVazio([]),'Resultado invalido!');
        echo 'a soma com lista vazia é = ' . $classe->somarArrayVazio([]) .'<br>';
    }
    public function testSubtrairArrayVazio()
    {
        $classe = new PostsController();
        $resultado = $this->assertEqual(0,$classe->subtrairArrayVazio([]),'Resultado invalido!');
        echo 'a subtração com lista vazia é = ' . $classe->subtrairArrayVazio([]) .'<br>';
    }
    public function testDividirArrayVazio()
    {
        $classe = new PostsController();
        $resultado = $this->assertEqual(0,$classe->dividirArrayVazio([]),'Resultado invalido!');
        echo 'a divisão com lista vazia é = ' . $classe->dividirArrayVazio([]) .'<br>';
    }
    public function testMultiplicarArrayVazio()
    {
        $classe = new PostsController();
        $resultado = $this->assertEqual(0,$classe->multiplicarArrayVazio([]),'Resultado invalido!');
        echo 'a multiplicação com lista vazia é = ' . $classe->multiplicarArrayVazio([]) .'<br>';
    }
    public function testSomarDoisResultados()
    {
        $classe = new PostsController();
        $soma = $this->assertEqual(8,$classe->somarDoisResultados(2, 2),'Resultado invalido!');
        echo 'A soma dos resultados é = ' . $classe->somarDoisResultados(2, 2).'<br>';
    }
    public function testSubtrairDoisResultados()
    {
        $classe = new PostsController();
        $subtrair = $this->assertEqual(0,$classe->subtrairDoisResultados(4, 2),'Resultado invalido!!');
        echo 'A subtração dos resultados é = ' . $classe->subtrairDoisResultados(4, 2).'<br>';
    }
    public function testDividirDoisResultados()
    {
        $classe = new PostsController();
        $divisao = $this->assertEqual(1,$classe->dividirDoisResultados(6, 2),'Resultado invalido!!');
        echo 'A divisão dos resultados é = ' . $classe->dividirDoisResultados(6, 2).'<br>';
    }
    public function testMultiplicarDoisResultados()
    {
        $classe = new PostsController();
        $multiplicacao = $this->assertEqual(64,$classe->multiplicarDoisResultados(4, 2),'Resultado invalido!');
        echo 'A multiplicação dos resultados é = ' . $classe->multiplicarDoisResultados(4, 2) .'<br>';
    }
    public function testEquacaoDeSegundoGrau()
    {
        $classe = new PostsController();
        $Equacao = $this->assertEqual('3 é o valor do x1, e o de x2 é 2',$classe->equacaoDeSegundoGrau(1,-5,6),'Resultado invalido!');
        echo 'os valores de x1 e x2 respectivamente são: ' . $classe->equacaoDeSegundoGrau(1,-5,6) .'<br>';
    }
    public function testPorcentagem10()
    {
        $classe = new PostsController();
        $resultado = $this->assertEqual(10,$classe->porcentagem10(100),'Resultado invalido!');
        echo '10% de 100 é: '.$classe->porcentagem10(100).'<br>';
    }
    public function testPorcentagem20()
    {
        $classe = new PostsController();
        $resultado = $this->assertEqual(20,$classe->porcentagem20(100),'Resultado invalido!');
        echo '20% de 100 é: '.$classe->porcentagem20(100).'<br>';
    }
    public function testPorcentagem30()
    {
        $classe = new PostsController();
        $resultado = $this->assertEqual(30,$classe->porcentagem30(100),'Resultado invalido!');
        echo '30% de 100 é: '.$classe->porcentagem30(100).'<br>';
    }
    public function testPorcentagem40()
    {
        $classe = new PostsController();
        $resultado = $this->assertEqual(40,$classe->porcentagem40(100),'Resultado invalido!');
        echo '40% de 100 é: '.$classe->porcentagem40(100).'<br>';
    }
    public function testPorcentagem50()
    {
        $classe = new PostsController();
        $resultado = $this->assertEqual(50,$classe->porcentagem50(100),'Resultado invalido!');
        echo '50% de 100 é: '.$classe->porcentagem50(100).'<br>';
    }
    public function testPorcentagem60()
    {
        $classe = new PostsController();
        $resultado = $this->assertEqual(60,$classe->porcentagem60(100),'Resultado invalido!');
        echo '60% de 100 é: '.$classe->porcentagem60(100).'<br>';
    }
    public function testPorcentagem70()
    {
        $classe = new PostsController();
        $resultado = $this->assertEqual(70,$classe->porcentagem70(100),'Resultado invalido!');
        echo '70% de 100 é: '.$classe->porcentagem70(100).'<br>';
    }
    public function testPorcentagem80()
    {
        $classe = new PostsController();
        $resultado = $this->assertEqual(80,$classe->porcentagem80(100),'Resultado invalido!');
        echo '80% de 100 é: '.$classe->porcentagem80(100).'<br>';
    }
    public function testPorcentagem90()
    {
        $classe = new PostsController();
        $resultado = $this->assertEqual(90,$classe->porcentagem90(100),'Resultado invalido!');
        echo '90% de 100 é: '.$classe->porcentagem90(100).'<br>';
    }
    public function testCosAmaisB() {
        $classe = new PostsController();
        $result = $this->assertEqual(0.09,$classe->cosAmaisB(0.9,0.6,0.9,0.5),'Resultado invalido!');
        echo 'Cosseno de ( A + B ) é = ' .$classe->cosAmaisB(0.9,0.6,0.9,0.5) .'<br>';
    }
    public function testCosAmenosB() {
        $classe = new PostsController();
        $result = $this->assertEqual(0.99,$classe->cosAmenosB(0.9,0.6,0.9,0.5),'Resultado invalido!');
        echo 'Cosseno de ( A - B ) é = ' .$classe->cosAmenosB(0.9,0.6,0.9,0.5) .'<br>';
    }
    public function testSenAmenosB() {
        $classe = new PostsController();
        $result = $this->assertEqual(0.09,$classe->senMenosB(0.9,0.6,0.9,0.5),'Resultado invalido!');
        echo 'Seno de ( A - B ) é = ' .$classe->senMenosB(0.9,0.6,0.9,0.5) .'<br>';
    }
    public function testSenAmaisB() {
        $classe = new PostsController();
        $result = $this->assertEqual(0.99,$classe->senAmaisB(0.9,0.6,0.9,0.5),'Resultado invalido!');
        echo 'Seno de ( A + B ) é = ' .$classe->senAmaisB(0.9,0.6,0.9,0.5) .'<br>';
    }
    public function testQuebrarSequenciaCaracter() {
        $classe = new PostsController();
        $frase = "Quebra uma seqüência";
        $result = $this->assertEqual('Quebra uma seqüência',$classe->quebrarSequenciaCaracter($frase),'Resultado invalido!');
    }
    public function testCalculaRaizQuadrada() {
        $classe = new PostsController();
        $numero = 64;
        $result = $this->assertEqual(8,$classe->calculaRaizQuadrada($numero),'Resultado invalido!');
        echo '<br>'.'A raiz de 64 é: '.$classe->calculaRaizQuadrada($numero).'<br>';
    }
    public function testPorcentagem15()
    {
        $classe = new PostsController();
        $resultado = $this->assertEqual(15,$classe->porcentagem15(100),'Resultado invalido!');
        echo '15% de 100 é: '.$classe->porcentagem15(100).'<br>';
    }
    public function testPorcentagem25()
    {
        $classe = new PostsController();
        $resultado = $this->assertEqual(25,$classe->porcentagem25(100),'Resultado invalido!');
        echo '25% de 100 é: '.$classe->porcentagem25(100).'<br>';
    }
    public function testPorcentagem35()
    {
        $classe = new PostsController();
        $resultado = $this->assertEqual(35,$classe->porcentagem35(100),'Resultado invalido!');
        echo '35% de 100 é: '.$classe->porcentagem35(100).'<br>';
    }
    public function testPorcentagem45()
    {
        $classe = new PostsController();
        $resultado = $this->assertEqual(45,$classe->porcentagem45(100),'Resultado invalido!');
        echo '45% de 100 é: '.$classe->porcentagem45(100).'<br>';
    }
    public function testPorcentagem55()
    {
        $classe = new PostsController();
        $resultado = $this->assertEqual(55,$classe->porcentagem55(100),'Resultado invalido!');
        echo '55% de 100 é: '.$classe->porcentagem55(100).'<br>';
    }
    public function testPorcentagem11()
    {
        $classe = new PostsController();
        $resultado = $this->assertEqual(11,$classe->porcentagem11(100),'Resultado invalido!');
        echo '11% de 100 é: '.$classe->porcentagem11(100).'<br>';
    }
    public function testPorcentagem12()
    {
        $classe = new PostsController();
        $resultado = $this->assertEqual(12,$classe->porcentagem12(100),'Resultado invalido!');
        echo '12% de 100 é: '.$classe->porcentagem12(100).'<br>';
    }
    public function testPorcentagem22()
    {
        $classe = new PostsController();
        $resultado = $this->assertEqual(22,$classe->porcentagem22(100),'Resultado invalido!');
        echo '22% de 100 é: '.$classe->porcentagem22(100).'<br>';
    }
    public function testPorcentagem37()
    {
        $classe = new PostsController();
        $resultado = $this->assertEqual(37,$classe->porcentagem37(100),'Resultado invalido!');
        echo '37% de 100 é: '.$classe->porcentagem37(100).'<br>';
    }
    public function testPorcentagem42()
    {
        $classe = new PostsController();
        $resultado = $this->assertEqual(42,$classe->porcentagem42(100),'Resultado invalido!');
        echo '42% de 100 é: '.$classe->porcentagem42(100).'<br>';
    }
    public function testEquacaoDeSegundoGrau2()
    {
        $classe = new PostsController();
        $Equacao = $this->assertEqual('3 é o valor do x1, e o de x2 é 2',$classe->equacaoDeSegundoGrau2(1,-5,6),'Resultado invalido!');
        echo 'os valores de x1 e x2 respectivamente são: ' . $classe->equacaoDeSegundoGrau2(1,-5,6) .'<br>';
    }
    public function testEquacaoDeSegundoGrau3()
    {
        $classe = new PostsController();
        $Equacao = $this->assertEqual('3 é o valor do x1, e o de x2 é 2',$classe->equacaoDeSegundoGrau3(1,-5,6),'Resultado invalido!');
        echo 'os valores de x1 e x2 respectivamente são: ' . $classe->equacaoDeSegundoGrau3(1,-5,6) .'<br>';
    }
    public function testEquacaoDeSegundoGrau4()
    {
        $classe = new PostsController();
        $Equacao = $this->assertEqual('3 é o valor do x1, e o de x2 é 2',$classe->equacaoDeSegundoGrau4(1,-5,6),'Resultado invalido!');
        echo 'os valores de x1 e x2 respectivamente são: ' . $classe->equacaoDeSegundoGrau4(1,-5,6) .'<br>';
    }
    public function testQuebrarSequenciaCaracter2() {
        $classe = new PostsController();
        $frase = "Teste de quebra de texto 2";
        $result = $this->assertEqual('Teste de quebra de texto 2',$classe->quebrarSequenciaCaracter2($frase),'Resultado invalido!');
    }
    public function testQuebrarSequenciaCaracter3() {
        $classe = new PostsController();
        $frase = "Teste de quebra de texto 3";
        $result = $this->assertEqual('Teste de quebra de texto 3',$classe->quebrarSequenciaCaracter3($frase),'Resultado invalido!');
    }
    public function testQuebrarSequenciaCaracter4() {
        $classe = new PostsController();
        $frase = "testando um metodo chato de teste";
        $result = $this->assertEqual('testando um metodo chato de teste',$classe->quebrarSequenciaCaracter4($frase),'Resultado invalido!');
    }
    public function testQuebrarSequenciaCaracter5() {
        $classe = new PostsController();
        $frase = "Já cansei de fazer porra de teste";
        $result = $this->assertEqual('Já cansei de fazer porra de teste',$classe->quebrarSequenciaCaracter5($frase),'Resultado invalido!');
    }
    public function testSomar2()
    {
        $classe = new PostsController();
        $soma = $this->assertEqual(4,$classe->somar2(2, 2),'Resultado invalido!');
        echo '2 mais 2 = ' . $classe->somar2(2, 2).'<br>';
    }
    public function testSomar3()
    {
        $classe = new PostsController();
        $soma = $this->assertEqual(4,$classe->somar3(2, 2),'Resultado invalido!');
        echo '2 mais 2 = ' . $classe->somar3(2, 2).'<br>';
    }
    public function testSomar4()
    {
        $classe = new PostsController();
        $soma = $this->assertEqual(4,$classe->somar4(2, 2),'Resultado invalido!');
        echo '2 mais 2 = ' . $classe->somar4(2, 2).'<br>';
    }

}
