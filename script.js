// a função abaixo é do preenchimento automático de endereço //
var txtCep = document.querySelector("#cep")
var txtLocalidade = document.querySelector("#localidade")
var txtUf = document.querySelector("#uf")
var txtLogradouro = document.querySelector("#logradouro")

txtCep.addEventListener('focusout', async() =>{
    var url = `https://viacep.com.br/ws/${txtCep.value}/json/`
    var resposta = await fetch(url)
    var dados = await resposta.json()

    console.log(dados)

    if (dados.erro){
        alert("CEP inválido")
        txtLogradouro.value = ""
        txtLocalidade.value = ""
        txtUf.value = ""  
    }else {
        txtLogradouro.value = dados.logradouro
        txtLocalidade.value = dados.localidade
        txtUf.value = dados.uf
    }
}) 
       
    // Função para adicionar a máscara de telefone
    function formatPhoneNumber(input) {
    // Remove todos os caracteres que não sejam números
    var phoneNumber = input.value.replace(/\D/g, '');

    // Adiciona a máscara
    if (phoneNumber.length > 10) {
     input.value = '(' + phoneNumber.substring(0, 2) + ') ' +
     phoneNumber.substring(2, 7) + '-' +
     phoneNumber.substring(7);
    } else {
    input.value = '(' + phoneNumber.substring(0, 2) + ') ' +
    phoneNumber.substring(2, 6) + '-' +
    phoneNumber.substring(6);
    }
    }

    //essa função baixo é para confirmação de senha //
    function validatePassword() {
        var password = document.querySelector("#senha").value;
        var confirmPassword = document.querySelector("#confirmarSenha").value;

        if (password !== confirmPassword) {
            alert("As senhas não coincidem. Por favor, tente novamente.");
            return false;
        }
        return true;
    }

    function goBack() {
    window.history.back();
    }

    
    