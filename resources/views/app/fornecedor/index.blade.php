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
    <p>Fornecedor: {{ $fornecedores[0]['nome'] }} </p>
    <p>Status: {{ $fornecedores[1]['status'] }}</p>

    @isset($fornecedores[0]['cnpj'])
        <p>CNPJ: {{ $fornecedores[0]['cnpj'] }}</p>

        @empty($fornecedores[0]['cnpj'])
            <p>- Vazio</p>
        @endempty

    @endisset
   
@endisset


@unless($fornecedores[0]['status'] == 'S')
<p>Fornecedor Inativo</p>
@endunless





















{{-- @if( !($fornecedores[0]['status'] == 'S') )
    <p>Fornecedor Inativo</p>
@endif --}}

{{-- @unless executa se o retorno for false --}}

{{-- @dd($fornecedores) --}}
