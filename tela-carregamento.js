document.addEventListener("DOMContentLoaded", function () {
    // Quando o conteúdo da página estiver carregado
    setTimeout(function () {
        document.getElementById("tela-de-carregamento").style.display = "none";
        document.getElementById("conteudo").style.display = "block";
    }, 2000); // Defina o tempo desejado ou remova isso se não quiser um temporizador

    // Simule uma requisição assíncrona (substitua isso pela sua lógica de carregamento)
    // Exemplo com AJAX
    // var xhr = new XMLHttpRequest();
    // xhr.open("GET", "seu_script_php.php", true);
    // xhr.onreadystatechange = function () {
    //     if (xhr.readyState == 4 && xhr.status == 200) {
    //         document.getElementById("tela-carregamento").style.display = "none";
    //         document.getElementById("conteudo").style.display = "block";
    //     }
    // };
    // xhr.send();
});


