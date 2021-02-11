<h4>Fornecedor</h4>

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

    @for($i = 0; isset($fornecedores[$i]); $i++)
        Fornecedor: {{ $fornecedores[$i]['nome'] }} 
        <br>
        Status: {{ $fornecedores[$i]['status'] }}
        <br>
        CNPJ: {{ $fornecedores[$i]['cnpj'] ?? '' }}
        <br>
        Telefone: ({{ $fornecedores[$i]['ddd'] ?? '' }} {{ $fornecedores[1]['telefone'] ?? '' }})
        <hr>
    @endfor
@endisset