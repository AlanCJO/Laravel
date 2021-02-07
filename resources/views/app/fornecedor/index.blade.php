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
        if(!<condicao>) {} // enquanto executa se o retorno for true
    */
@endphp


@isset($fornecedores)
    <p>Fornecedor: {{ $fornecedores[0]['nome'] }} </p>
    <p>Status: {{ $fornecedores[1]['status'] }}</p>

    @isset($fornecedores[1]['cnpj'])
        <p>CNPJ: {{ $fornecedores[1]['cnpj'] }}</p>
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