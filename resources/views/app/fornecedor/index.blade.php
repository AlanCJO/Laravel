<h4>Fornecedor</h4>

{{ 'Teste' }}
<?= 'Teste' ?> 

{{-- Comentário no blade --}}

@php 
    echo 'Teste';
@endphp

<br>

@php 
    /*
        if(empty($variavel)) {} // retornar true se a variável estiver vazia
        - ''
        - 0
        - 0.0
        - '0'
        - null
        - false
        - array()
        - $var
    */
@endphp


@isset($fornecedores)
    Fornecedor: {{ $fornecedores[0]['nome'] }} 
    <br>
    Status: {{ $fornecedores[1]['status'] }}
    <br>
    CNPJ: {{ $fornecedores[1]['cnpj'] ?? '' }}
    <!-- 
        $variável testada não estiver definida (isset)
        ou
        $variável testada possuior o valor null
    -->
   
@endisset

@unless($fornecedores[0]['status'] == 'S')
<p>Fornecedor Inativo</p>
@endunless





















{{-- @if( !($fornecedores[0]['status'] == 'S') )
    <p>Fornecedor Inativo</p>
@endif --}}

{{-- @unless executa se o retorno for false --}}

{{-- @dd($fornecedores) --}}
