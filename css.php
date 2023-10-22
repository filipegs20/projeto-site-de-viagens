<style>

		.corpo {margin:0;
			padding:0 10% 0 10%;}

    .tamanho_cards {
              height:210.33px;
              width:341.73;
    }

    .buttom_cards  {
 border-radius: 50px;
 border: 0;
 background-color: rgb(53, 240, 153);
 box-shadow: rgb(0 0 0 / 5%) 0 0 8px;
 letter-spacing: 1.5px;
 text-transform: uppercase;
 font-size: 15px;
 transition: all .5s ease;
 font-family: Arial, Helvetica, sans-serif;
}

button:hover {
 letter-spacing: 3px;
 background-color: rgb (25 135 84);
 color: hsl(152%, 69%, 31%);
 box-shadow: rgb (25 135 84) 0px 7px 29px 0px;
}

button:active {
 letter-spacing: 3px;
 background-color: rgb (25 135 84);
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
            background-color: rgb(248,249,250);
            margin-top: 2%;
            margin-bottom: 0;
        }


        .botao_login {
            margin-left: 10%;
            margin-right: 2%;
        }

        .botao_logout {
            margin-left: 10%;
            margin-right: 2%;
            background-color: (222, 20, 20);
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
        .empurrao {
            margin-left: 65%;
        }

        .link_cards {
            text-decoration: none;
            color: inherit;}

        .content {
            text-align: center;}

        /* aqui abaixo está todo css do login */    
        #login .container #login-row #login-column #login-box {
            margin-top: 60px;
            max-width: 600px;
            height: 320px;
            border: 1px solid #9C9C9C;
            background-color: #EAEAEA;
            }   
        #login .container #login-row #login-column #login-box #login-form {
            padding: 20px;
            
            }

            #login-form {
                padding-bottom: 0;
            }
        
            
        .button_login {
            text-decoration: none;
            color: inherit;
            width: block;
        }


        input[type="tel"]::placeholder {
        color: rgba(0, 0, 0, 0,1); /* Cor opaca preta */
        }
        #email::-moz-placeholder {
        color:#C4C;}        


        .buttom_registro_login {
            border-radius: 50px;
            border: 0;
            background-color: rgb(53, 240, 153);
            box-shadow: rgb(0 0 0 / 5%) 0 0 8px;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            font-size: 15px;
            transition: all .5s ease;
            font-family: Arial, Helvetica, sans-serif;
            margin-left: 0;
            }
        .div-buttom-registro-login {
                padding: 10px;
            }
        
        /* abaixo css da formatação dos formulários */ 
        .format-login-registro {
        color: rgb(25 135 84);
            }

        .paginacao_complemento {
            margin-bottom: 6%;
        }

        .border_senhas {
            border: solid;
        }

        .botoes-nav-operador {
            color: black;
            border-radius: 50px;
            border: 0;
            box-shadow: rgb(0 0 0 / 5%) 0 0 8px;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            font-size: 15px;
            transition: all .5s ease;
            font-family: Arial, Helvetica, sans-serif;
            margin-left: 0;
        }
        .botoes-nav-operador:hover {
        background-color: green;
        border-color: white;
        }

        .back_header {
            display: flex;
        }

        .div-sup-backoffice {
            width: 100%;
            height: 3%;
        }
        

        dialog::backdrop{
            background-color: rgb(0 0 0 0.5);
        }

        dialog {
            border: none;
            border-radius: .5rem;
            box-shadow: 0 0 0 1em rgb(0 0 0 0.3);
            width: 60%;
        }

        .register_login {
            float: right;
            
        }
        
        /* Estilize o container */
        .containerprotect {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100vh; /* Isso garante que o container ocupe a altura da janela inteira */
        }

        /* Estilize a mensagem */
        .messageprotect {
        text-align: center;
        font-size: 24px;
        }

        /* Estilize o botão */
        .buttonprotect {
        margin-top: 20px; /* Espaçamento acima do botão */
        background-color: #198754;
        color: #fff;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        border-radius: 4px;
        }

        .espaco-no-bottom {
            margin-bottom: 20px; /* Adicione a quantidade desejada de espaço no topo em pixels ou outra unidade de medida */
        }

        .botao-red-cards-excluir{
            background-color: rgb(213, 46, 0);
        }
        .botao-red-cards-editar{
            background-color: rgb(13, 149, 0);
        }

        .title-compra {
            margin-top: 10px;
        }

        .descricao-pacote {
            margin-top: 30px;
            margin-bottom: 30px;
        }

        .descricao-pacote-oferece {
            margin-top: 30px;
            margin-bottom: 70px;
        }
        
</style>