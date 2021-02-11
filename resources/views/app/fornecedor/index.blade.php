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
    <br>
    Telefone: ({{ $fornecedores[1]['ddd'] ?? '' }} {{ $fornecedores[1]['telefone'] ?? '' }})

    @switch($fornecedores[0]['ddd'])
        @case('11')
            São Paulo - SP 
            @break
        @case('32')
            Juiz de Fora - MG
            @break
        @case('85')
            Fortaleza - CE
            @break
        @default
            Estado não identificado
        @endswitch

@endisset

@unless($fornecedores[0]['status'] == 'S')
<p>Fornecedor Inativo</p>
@endunless





















{{-- @if( !($fornecedores[0]['status'] == 'S') )
    <p>Fornecedor Inativo</p>
@endif --}}

{{-- @unless executa se o retorno for false --}}

{{-- @dd($fornecedores) --}}
