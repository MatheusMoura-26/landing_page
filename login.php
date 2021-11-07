<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="shortcut icon" href="imagens/favico.png" type="image/x-icon">
</head>
<body>
    <section>
        <div class="circle"></div>
       <header>
           <a href="index.html" class="logo"><img src="imagens/logo.png" alt=""></a>
           <ul>
               <li><a href="index.html">HOME</a></li>
               <li><a href="Login.html">LOGIN</a></li>
               <li><a href="historia.html">HISTÓRIA</a></li>
               <li><a href="Contato.html">CONTATO</a></li>             
           </ul>
       </header>
       <!--Começando o main-->
       <main>
        <h1>Crie uma conta</h1>
        <div class="social-media">
            <a href="#">
                <img src="imagens/Login/google.png" alt="Google">
            </a>
            <a href="#">
                <img src="imagens/Login/facebook.png" alt="Facebook">
            </a>
            <a href="#">
                <img src="imagens/Login/linkedin.png" alt="Linkedin">
            </a>
        </div>

        <div class="alternative">
            <span>OU</span>
        </div>
        <!--Criação de formulário com campos para Login e senha-->
        <form action="" method="post">
        

            <label for="email">
                <span>Login</span>
                <input type="text" id="email" name="user">
            </label>

            <label for="password">
                <span>Senha</span>
                <input type="password" id="password" name="pass">
            </label>
        
            <input type="submit" value="logar!" id="button" name="submit">
           
            
        
        </form>


        
    </main>

       </section>

      
       </body>
       </html>

     <?php 
				/* Declaração de Variáveis */
				$user = @$_REQUEST['user'];
				$pass = @$_REQUEST['pass'];
				$submit = @$_REQUEST['submit'];
				
				/* Declaração das variáveis que possuem os usuarios e as senhas */
				$user1 = 'Matheus';
				$pass1 = '12345';
				
				$user2 = 'admin';
				$pass2 = '872008';
				
				/* Testa se o botão submit foi ativado */
				if($submit){
					
					/* Se o campo usuário ou senha estiverem vazios geramos um alerta */
					if($user == "" || $pass == ""){
						echo "<script:alert('Por favor, preencha todos os campos!');</script>";
					}
					/* Caso o campo usuario e senha não 
						*estiverem vazios vamos testar se o usuário e a senha batem 
					*iniciamos uma sessão e redirecionamos o usuário para o painel */
					else{
						if(($user == $user1 && $pass == $pass1) || ($user == $user2 && $pass == $pass2)){
							session_start();
							$_SESSION['usuario']=$user;
							$_SESSION['senha']=$pass;
							header("Location: painel.php");
						}
						/* Se o usuario ou a senha não batem alertamos o usuario */
						else{
							echo "<script>alert('Usuário e/ou senha inválido(s), Tente novamente!');</script>";
						}
					}
				}
			?>