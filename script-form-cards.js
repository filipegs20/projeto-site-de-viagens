
    // essa função abaixo é para separar as casas decimais do campo valor //
    function formatarValor(input) {
        // Remove todos os caracteres não numéricos
        const valorSemFormatacao = input.value.replace(/[^0-9]/g, '');
        
        // Separa a parte inteira e a parte decimal
        const parteInteira = valorSemFormatacao.substring(0, valorSemFormatacao.length - 2);
        const parteDecimal = valorSemFormatacao.substring(valorSemFormatacao.length - 2);
        
        // Formata a parte inteira com separadores de milhares
        const parteInteiraFormatada = parteInteira.replace(/\B(?=(\d{3})+(?!\d))/g, '.');
        
        // Reconstitui o valor formatado
        const valorFormatado = parteInteiraFormatada + ',' + parteDecimal;
        
        // Define o valor formatado de volta no campo de entrada
        input.value = valorFormatado;
    }