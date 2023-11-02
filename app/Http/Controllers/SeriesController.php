<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{

    public function index(Request $request)
    {

        $series = [
            'Punisher',
            'Lost',
            'Grey\'s Anatomy'
        ];

        return view('listar-series', [
            'series' => $series
        ]);

    }
}


    //existem varias formas de usar o verbo get, nesse caso usaremos o metodo index, mas existe o create, store, etc...-https://laravel.com/docs/9.x/controllers#resource-controllers
    //a acao do nosso controller recebe por parametro uma requisicao e retorna uma resposta por isso que quando criamos por linha de comando essa class request já é importada. Dessa forma, já conseguimos acessar os dados da requisição por ex (URL, detalhes da query string, o input que viria de um formulario e etc), também poderíamos retornar uma resposta.
    // se não for uma string, for um array, objeto, etc... e colocarmos um return, o laravel vai converter para json (o que poderia ser o retorno de uma API)
    // entao o que o laravel faz é pegar esse retorno e analisar a melhor forma de transformar isso em uma resposta, seja como um  texto (html) ou json
    // se quisermos acessar uma serie com id 1 por exemplo, o que faremos é usar o request para pegar o id da serie que queremos acessar, por ex: $request->get('id'). Se quisermos acessar a url $request->url() e assim por diante. Para ver todos os metodos disponiveis, podemos acessar a documentacao do laravel
    //evitar dar echos de controllers, pois pode conflitar ao executar o codigo do framework, ao adicionar o retorn ele roda a string e retorna o html
    //se quisermos controlar que tipo de status e cabelhos ele vai retornar, podemos usar o metodo response, que recebe como primeiro parametro o conteudo que queremos retornar e como segundo parametro o status code que queremos retornar
    //A diferença entre o método get e o método query é que o método get busca o dado de qualquer lugar do nosso request, seja da query string ou mesmo de um campo enviado por post. Por isso o ideal é utilizar o método query para que nosso código fique mais explícito, deixando claro de onde vamos buscar o dado.
    //o segundo parametro da nossa view é chamado de data, que é um array associativo, onde a chave é o nome da variavel que queremos passar para a view e o valor é o valor da variavel que queremos passar para a view
