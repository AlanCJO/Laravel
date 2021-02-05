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

{{-- @unless executa se o retorno for false --}}

{{-- @dd($fornecedores) --}}

<h4>Fornecedor: {{ $fornecedores[0]['nome'] }} </h4>
<h4>Status: {{ $fornecedores[0]['status'] }} </h4>

{{-- @if( !($fornecedores[0]['status'] == 'S') )
    <p>Fornecedor Inativo</p>
@endif --}}

@unless($fornecedores[0]['status'] == 'S')
    <p>Fornecedor Inativo</p>
@endunless