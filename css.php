<style>

		.corpo {margin:0;
			padding:0 10% 0 10%;}

    .tamanho_cards {
              height:210.33px;
              width:341.73;
    }

    .buttom_cards {
 border-radius: 50px;
 border: 0;
 background-color: rgb(255, 201, 229);
 box-shadow: rgb(0 0 0 / 5%) 0 0 8px;
 letter-spacing: 1.5px;
 text-transform: uppercase;
 font-size: 15px;
 transition: all .5s ease;
}

button:hover {
 letter-spacing: 3px;
 background-color: red;
 color: hsl(0, 0%, 100%);
 box-shadow: rgb(93 24 220) 0px 7px 29px 0px;
}

button:active {
 letter-spacing: 3px;
 background-color: hsl(261deg 80% 48%);
 color: hsl(0, 0%, 100%);
 box-shadow: rgb(93 24 220) 0px 0px 0px 0px;
 transform: translateY(10px);
 transition: 100ms;
}

.rating {
    display: inline-block;
    padding-left: 5%;
}

.rating input {
    display: none;
}

.rating label {
    font-size: 30px;
    color: gray;
    cursor: pointer;
}

.rating label:before {
    content: "\2605"; /* Código unicode para estrela vazia */
}

.rating input:checked ~ label {
    color: gold;
}

.rating input:checked ~ label:before {
    content: "\2605"; /* Código unicode para estrela preenchida */
}


.banner_header {
            position: relative;
            width: 100%;
            height: 300px; /* Altura do banner */
            overflow: hidden; /* Esconde qualquer parte da imagem que vá além da altura definida */
        }

        .banner_header .img {
            width: 100%; /* A imagem ocupa 100% da largura do banner */
            height: auto; /* A altura é ajustada automaticamente para manter a proporção */
            object-fit: cover;  /*A imagem é redimensionada para cobrir todo o espaço, mantendo a proporção */
            object-position: top; /* A imagem é alinhada no topo do banner */
        }

        .container_header {
          padding-bottom: 2%;
        }

        h1 {font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            }

        .container_page {
              padding: 0 2% 0 2%;
        }

        .footer {
            padding: 2% 2% 2% 2%;
        }

        .botao_login {
            margin-left: 10%;
            margin-right: 2%;
        }

        .container_page_complet {
            padding: 2% 2% 0 2%;

        }

        .cartoes_footer {
            margin-top:3%;
        }

        .links_footer {
            text-decoration: none;
            color: inherit;

        }
</style>