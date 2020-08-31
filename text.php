<?php
?>

<!doctype html>
<html lang = "pt-br">
    <head>
        <title> exemplo completo  </title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="estilo.css"/>   

    </head>	
    <body background="camuflado.JPG" bgproperties="fixed">
        <header id="topo">
           Lançamento de Foguete (RAMBO)
        </header>

        <aside id="lateral">
            <nav>
                <ul>
					<li><a href="TEXT.php#InscriçoesdeEquipes">Inscriçoes de Equipes</a> </li>
                    <br>
					<li><a href="http://localhost/Evento_dentro/evento_inside.php"> Events Inside</a></li>
                    <br>                        
                    <li><a href="http://localhost/Evento_fora/evento_outside.php"> Events Outside</a></li>
                    <br>            
					<li> <a href="https://fbjc.com.br/mostraDetalhes.php?projeto=309"> Quem somos  </a> </li>
				</ul>
            </nav>
        </aside>
        <main id="conteudo"> <!--conteudo principal-->
        	<section > <!--secao1-->
        		<article>
                    <header> </header>
                    <?php
                        include_once("conexao.php");
                    ?>
                    <form method="POST" action="salva_mensagem.php">
                        <fieldset id="f1">
                            <legend> <h2 id="InscriçoesdeEquipes"> Inscrições de Equipes </h2></legend>
								<br>
								Nome das Equipes:
								<br>
									<input type="text" name="nome_equipe" >
								<br>
								<br>
								Data:
								<br>
									<input type="date" name="dt">
            					<br><br>
								Local do lançamento:
								<br>
									<input type="text" name="local" >
								<br>
								<br>	
								<input type="submit" value="Enviar">
								<input type="submit" value="Limpar">
                        </fieldset>             
                    </form>
                    <footer> </footer>   
                </article>
            </section>
            <br>
            <br>
            <section > <!--secao2-->
        		<article>
                    <header> </header>
                    <?php
                        include_once("conexao_alunos.php");
                    ?>
                    <form method="POST" action="salva_mensagem2.php">
                        <fieldset id="f1">
                            <legend> <h2 id=""> Inscrições dos Alunos </h2></legend>
								<br>
								Nome:
								<br>
									<input type="text" name="nome" >
								<br>
								<br>
								Escola:
								<br>	
									<input type="text" name="escola" placeholder="">
								<br>
								<br>
								Curso:
								<br>
									<input type="text" name="curso">
								<br>
								<br>
                                Ano:
								<br>
									<input type="year" name="ano">
								<br>
								<br>	
								<input type="submit" value="Enviar">
								<input type="submit" value="Limpar">
                        </fieldset>             
                    </form>
                    <footer> </footer>   
                </article>
            </section>
            <br>
            <br>
            <section > <!--secao2-->
        		<article>
                    <header> </header>
                    <?php
                        include_once("conexao_professor.php");
                    ?>
                    <form method="POST" action="salva_mensagem3.php">
                        <fieldset id="f1">
                            <legend> <h2 id=""> Inscrições dos Professores </h2></legend>
								<br>
								Nome:
								<br>
									<input type="text" name="nome" >
								<br>
								<br>
								Escola:
								<br>	
									<input type="text" name="escola" placeholder="">
								<br>
								<br>
								Curso:
								<br>
									<input type="text" name="curso">
								<br>
								<br>
                                Ano:
								<br>
									<input type="year" name="ano">
								<br>
								<br>	
								<input type="submit" value="Enviar">
								<input type="submit" value="Limpar">
                        </fieldset>             
                    </form>
                    <footer> </footer>   
                </article>
            </section>
        <br>
        <br>
        <?php
            include_once("conexao_rank.php");
        ?>      
         <h2 id="rankdeequipe"> Rank das Equipes</h2>
        <form  action="rank_salva.php" method="POST">
            <fieldset id="cor">
                <legend> <h2> Inscrições para o rank </h2></legend>
                <br>
                Nome das Equipes: <input type="text" name="nome" ><br><br>
                PONTOS: <input type="number" name="pontos"><br><br>	
                <input type="submit" value="enviar"> 
                </fieldset>   
        </form>                      
        <header>  <h2 id="rankdeequipe"> Abaixo está o Rank das Equipes vencedoras !! </h2>    </header>     			           
            <center>
            <table border="3" width="50%"   bordercolor="#000000" >
                <tr>
                    <th WIDTH=150 BGCOLOR=#808000>Id</th>
                    <th WIDTH=150 BGCOLOR=#808000>Nome</th>
                    <th WIDTH=150 BGCOLOR=#808000>Pts</th>
                </tr>
            <?php 
            $hostname = "localhost";

            $user = "root";
    
            $password = "";
    
            $database = "projeto";

            $conexao = mysqli_connect($hostname, $user, $password) ;
            $conx = mysqli_select_db($conexao,$database);
            $sql=mysqli_query( $conexao,'SELECT*FROM ranking ORDER BY pts DESC LIMIT 0,10');

                $lista = 0;

                while($dados = mysqli_fetch_array ($sql))
                {
                    $lista++; ?>
        
                <tr>
                    <td WIDTH=150 BGCOLOR=#d3d3d3><?php echo $lista; ?></td>
                    <td WIDTH=150 BGCOLOR=#d3d3d3><?php echo $dados['nome_equipe']; ?></td>
                    <td WIDTH=150 BGCOLOR=#d3d3d3><?php echo $dados['pts']; ?></td>
                    <br>
                </tr> 
                <?php } ?>
            </table>
            </center>     
            <br>
            <br>        
      
     <p> Espero que tenha gostado da página !!! </p>
        </main>
    </body>
</html>