<!doctype html>
<html lang="pt-br">

    <head>
        <!-- Metadados -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="style.css" media="screen">

        <!-- Título da página (aparece na aba) -->
        <title>Lista de presentes</title>
    </head>

    <body>  

        <!-- Cabeçalho com título e paragrafo (ambos com css de id "titulo") -->
        <div>
		<div><img width="300px" height="280px" align="right" border="8px" src="images/nossafoto.jpeg"></div>
            <h1 id="titulo">Lista de presentes - Esdras e Ester</h1>
            <p id="paragrafo"><strong>1º Digite seu nome<br>2° Escolha algum item da lista (Fique a vontade pra escolher quantos quiser)<br>3° Só clicar em SALVAR!!</strong></p><br> 
			
		</div>
		

		
        <!-- Início do formulário -->
        <form method="POST" action="processa.php">

            <fieldset class="grupo">
                <!-- Campo do nome com legenda "nome" e css de classe "campo" -->
                <div class="campo">
                    <label for="nome"><strong>Nome</strong></label>
                    <input type="text" name="nome" id="nome" maxlength="80" required>
                </div>
            </fieldset> 
			
			<fieldset class="grupo">
                <!-- Campo de itens para escolha de 1 ou mais opções para marcar (checkbox) e css de classe "campo" -->
                <div id="check">
                 
                    <input type="checkbox" id="aspiradordepo" name="aspiradordepo" value="aspiradordepo">
                    <label for="aspiradordepo">Aspirador de Pó Mondial 2 em 1- 110v</label>
                </div>
            </fieldset>

            <fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="aparelhojantar1" name="aparelhojantar1" value="aparelhojantar1">
                    <label for="aparelhojantar1">Aparelho de Jantar Vidro - 12pçs</label>
                </div>
            </fieldset>

            <fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="bandejainox" name="bandejainox" value="bandejainox">
                    <label for="bandejainox">Bandeja para Servir Inox Retangular</label>
                </div>
            </fieldset>

            <fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="batedeira" name="batedeira" value="batedeira">
                    <label for="batedeira">Batedeira Arno Planetária Deluxe - 127V</label>
                </div>
            </fieldset>

            <fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="conjpanelas1" name="conjpanelas1" value="conjpanelas1">
                    <label for="conjpanelas1">Conjunto de Panelas Tramontina - 5 Peças - Preto</label>
                </div>
            </fieldset>

            <fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="geladeira" name="geladeira" value="geladeira">
                    <label for="geladeira">Geladeira Brastemp Inox</label>
                </div>
            </fieldset>

            <fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="faqueiro1" name="faqueiro1" value="faqueiro1">
                    <label for="faqueiro1">Faqueiro Tramontina Aço Inox</label>
                </div>
            </fieldset>

            <fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="faqueiro2" name="faqueiro2" value="faqueiro2">
                    <label for="faqueiro2">Faqueiro Tramontina Havana com 24 Peças</label>
                </div>
            </fieldset>

            <fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="ferrodepassar" name="ferrodepassar" value="ferrodepassar">
                    <label for="ferrodepassar">Ferro de Passar Black e Decker</label>
                </div>
            </fieldset>
			
			<fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="fogao" name="fogao" value="fogao">
                    <label for="fogao">Fogão 5 bocas - Preto/ Inox</label>
                </div>
            </fieldset>

            <fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="airfryier" name="airfryier" value="airfryier">
                    <label for="airfryier">Air Fryier - Fritadeira sem óleo - Preto</label>
                </div>
            </fieldset>

            <fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="jogodefacas" name="jogodefacas" value="jogodefacas">
                    <label for="jogodefacas">Jogo de Facas para Cozinha</label>
                </div>
            </fieldset>

            <fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="sanduicheira" name="sanduicheira" value="sanduicheira">
                    <label for="sanduicheira">Sanduicheira Mondial Master Grill S-20 - Preto/Inox</label>
                </div>
            </fieldset>

            <fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="ventilador" name="ventilador" value="ventilador">
                    <label for="ventilador">Ventilador Britânia BVT40 - Preto</label>
                </div>
            </fieldset>

            <fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="microondas" name="microondas" value="microondas">
                    <label for="microondas">Micro-ondas Electrolux MEF41 - 31 Litros - Branco - 110V</label>
                </div>
            </fieldset>

            <fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="mixer" name="mixer" value="mixer">
                    <label for="mixer">Mixer Britânia Inox</label>
                </div>
            </fieldset>
			
			<fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="maquinadelavar" name="maquinadelavar" value="maquinadelavar">
                    <label for="maquinadelavar">Máquina de lavar roupa 12kg - Branca</label>
                </div>
            </fieldset>

            <fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="panelapressao1" name="panelapressao1" value="panelapressao1">
                    <label for="panelapressao1">Panela de Pressão Tramontina Vancouver - 4,5 Litros - Alumínio</label>
                </div>
            </fieldset>

            <fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="tabuadepassarroupa" name="tabuadepassarroupa" value="tabuadepassarroupa">
                    <label for="tabuadepassarroupa">Tábua de Passar Roupa - Dobravél</label>
                </div>
            </fieldset>
			
			<fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="varaldechao" name="varaldechao" value="varaldechao">
                    <label for="varaldechao">Varal de Chão</label>
                </div>
            </fieldset>
			
			<fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="escada" name="escada" value="escada">
                    <label for="escada">Escada de Alumínio</label>
                </div>
            </fieldset>
			
			<fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="toalhadebanho1" name="toalhadebanho1" value="toalhadebanho1">
                    <label for="toalhadebanho1">Jogo de Toalha de Banho</label>
                </div>
            </fieldset>
			
			<fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="tapetesala" name="tapetesala" value="tapetesala">
                    <label for="tapetesala">Tapete para Sala</label>
                </div>
            </fieldset>
			
			<fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="jogodecama" name="jogodecama" value="jogodecama">
                    <label for="jogodecama">Jogo de Lençol - Cama</label>
                </div>
            </fieldset>
			
			<fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="edredom" name="edredom" value="edredom">
                    <label for="edredom">Edredom</label>
                </div>
            </fieldset>
			
			<fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="conjpanelas2" name="conjpanelas2" value="conjpanelas2">
                    <label for="conjpanelas2">Jogo de Panelas Antiaderente</label>
                </div>
            </fieldset>
			
			<fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="toalhadebanho2" name="toalhadebanho2" value="toalhadebanho2">
                    <label for="toalhadebanho2">Jogo de Toalha de Banho</label>
                </div>
            </fieldset>
			
			<fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="assadeiras1" name="assadeiras1" value="assadeiras1">
                    <label for="assadeiras1">Conjunto de Assadeiras - Retangular</label>
                </div>
            </fieldset>
			
			<fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="assadeiras2" name="assadeiras2" value="assadeiras2">
                    <label for="assadeiras2">Conjunto de Assadeiras - Redonda</label>
                </div>
            </fieldset>
			
			<fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="escorredor" name="escorredor" value="escorredor">
                    <label for="escorredor">Escorredor de Prato Inox</label>
                </div>
            </fieldset>
			
			<fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="jarra1" name="jarra1" value="jarra1">
                    <label for="jarra1">Jarra de Vidro - Suco</label>
                </div>
            </fieldset>
			
			<fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="jarra2" name="jarra2" value="jarra2">
                    <label for="jarra2">Jarra de Vidro - Água</label>
                </div>
            </fieldset>
			
			<fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="kitbanheiro" name="kitbanheiro" value="kitbanheiro">
                    <label for="kitbanheiro">Kit de Banheiro - Pia</label>
                </div>
            </fieldset>
			
			<fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="conjtoalharosto1" name="conjtoalharosto1" value="conjtoalharosto1">
                    <label for="conjtoalharosto1">Conjunto de Toalha de Rosto</label>
                </div>
            </fieldset>
			
			<fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="kittapetes" name="kittapetes" value="kittapetes">
                    <label for="kittapetes">Kit de Tapetes para Banheiro</label>
                </div>
            </fieldset>
			
			<fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="toalhadebanho3" name="toalhadebanho3" value="toalhadebanho3">
                    <label for="toalhadebanho3">Conjunto de Toalha de Banho</label>
                </div>
            </fieldset>
			
			<fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="lixeira1" name="lixeira1" value="lixeira1">
                    <label for="lixeira1">Lixeira Inox</label>
                </div>
            </fieldset>
			
			<fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="mop" name="mop" value="mop">
                    <label for="mop">Mop Giratório 3 em 1</label>
                </div>
            </fieldset>
			
			<fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="conjtoalharosto2" name="conjtoalharosto2" value="conjtoalharosto2">
                    <label for="conjtoalharosto2">Conjunto de Toalha de Rosto</label>
                </div>
            </fieldset>
			
			<fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="cestoderoupa" name="cestoderoupa" value="cestoderoupa">
                    <label for="cestoderoupa">Cesto de Roupa Suja - Fibra Sintética</label>
                </div>
            </fieldset>
			
			<fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="cortina" name="cortina" value="cortina">
                    <label for="cortina">Cortina com blackout</label>
                </div>
            </fieldset>
			
			<fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="jogodecama2" name="jogodecama2" value="jogodecama2">
                    <label for="jogodecama2">Jogo de cama</label>
                </div>
            </fieldset>
			
			<fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="travesseiros" name="travesseiros" value="travesseiros">
                    <label for="travesseiros">2 Travesseiros</label>
                </div>
            </fieldset>
			
			<fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="guardaroupa" name="guardaroupa" value="guardaroupa">
                    <label for="guardaroupa">Guarda Roupa</label>
                </div>
            </fieldset>
			
			<fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="cabeceira" name="cabeceira" value="cabeceira">
                    <label for="cabeceira">Cabeceira</label>
                </div>
            </fieldset>
			
			<fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="kitleito" name="kitleito" value="kitleito">
                    <label for="kitleito">Kit Cobre Leito</label>
                </div>
            </fieldset>
			
			<fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="persiana" name="persiana" value="persiana">
                    <label for="persiana">Persiana</label>
                </div>
            </fieldset>
			
			<fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="varaldeteto" name="varaldeteto" value="varaldeteto">
                    <label for="varaldeteto">Varal de Teto</label>
                </div>
            </fieldset>
			
			<fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="baldes" name="baldes" value="baldes">
                    <label for="baldes">Kit Baldes</label>
                </div>
            </fieldset>
			
			<fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="cestodelixo" name="cestodelixo" value="cestodelixo">
                    <label for="cestodelixo">Cesto de Lixo Grande</label>
                </div>
            </fieldset>
			
			<fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="assadeiras3" name="assadeiras3" value="assadeiras3">
                    <label for="assadeiras3">Conjunto de Assadeiras Refratárias - Vidro</label>
                </div>
            </fieldset>
			
			<fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="conjpotesvidro" name="conjpotesvidro" value="conjpotesvidro">
                    <label for="conjpotesvidro">Conjunto de Potes de Vidro</label>
                </div>
            </fieldset>
			
			<fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="frigideiras" name="frigideiras" value="frigideiras">
                    <label for="frigideiras">Conjunto de Frigideiras Antiaderente</label>
                </div>
            </fieldset>
			
			<fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="tupperware" name="tupperware" value="tupperware">
                    <label for="tupperware">Jogo de Potes Quadrado Tupperware</label>
                </div>
            </fieldset>
			
			<fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="panelapressao2" name="panelapressao2" value="panelapressao2">
                    <label for="panelapressao2">Panela de Pressão Tramontina 5 Litros - Alumínio</label>
                </div>
            </fieldset>
			
			<fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="colcha" name="colcha" value="colcha">
                    <label for="colcha">Colcha com Porta Travesseiros</label>
                </div>
            </fieldset>
			
			<fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="mesadecentro" name="mesadecentro" value="mesadecentro">
                    <label for="mesadecentro">Mesa de Centro</label>
                </div>
            </fieldset>
			
			<fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="puff" name="puff" value="puff">
                    <label for="puff">Puff</label>
                </div>
            </fieldset>
			
			<fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="televisao" name="televisao" value="televisao">
                    <label for="televisao">Televisão LCD</label>
                </div>
            </fieldset>
			
			<fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="conjtoalharosto3" name="conjtoalharosto3" value="conjtoalharosto3">
                    <label for="conjtoalharosto3">Conjunto de Toalhas de Rosto</label>
                </div>
            </fieldset>
			
			<fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="edredom2" name="edredom2" value="edredom2">
                    <label for="edredom2">Edredom</label>
                </div>
            </fieldset>
			
			<fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="quadro" name="quadro" value="quadro">
                    <label for="quadro">Quadro Decorativo para Sala</label>
                </div>
            </fieldset>
			
			<fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="pote1" name="pote1" value="pote1">
                    <label for="pote1">Potes para Condimentos</label>
                </div>
            </fieldset>
			
			<fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="conjfacas" name="conjfacas" value="conjfacas">
                    <label for="conjfacas">Conjunto de Facas Tramontina (Carnes)</label>
                </div>
            </fieldset>

            <fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="kitferramentas" name="kitferramentas" value="kitferramentas">
                    <label for="kitferramentas">Kit de Ferramentas</label>
                </div>
            </fieldset>
            
            <fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="tacas" name="tacas" value="tacas">
                    <label for="tacas">Jogo de Taças de Vidro</label>
                </div>
            </fieldset>
            
            <fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="conjsobremesa" name="conjsobremesa" value="conjsobremesa">
                    <label for="conjsobremesa">Conjunto para Sobremesa</label>
                </div>
            </fieldset>
            
            <fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="torneira" name="torneira" value="torneira">
                    <label for="torneira">Torneira com Filtro - Aluminio/ Inox</label>
                </div>
            </fieldset>
            
            <fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="luminaria" name="luminaria" value="luminaria">
                    <label for="luminaria">Luminaria de Teto</label>
                </div>
            </fieldset>
            
            <fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="toalhamesa" name="toalhamesa" value="toalhamesa">
                    <label for="toalhamesa">Jogo de Toalha de Mesa</label>
                </div>
            </fieldset>
            
            <fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="sofa" name="sofa" value="sofa">
                    <label for="sofa">Sofá 3 Lugares</label>
                </div>
            </fieldset>
            
            <fieldset class="grupo">
                <div id="check">
                    <input type="checkbox" id="abajur" name="abajur" value="abajur">
                    <label for="abajur">Abajur</label>
                </div>
            </fieldset>
			
            <!-- Caixa de texto -->
            <div class="campo">
                <br>
                <label for="mensagem"><strong>Deixe alguma mensagem para os noivos. Pode ser um versículo, poema, música:</strong></label>
                <textarea rows="6" style="width: 26em" id="mensagem" name="mensagem"></textarea>
            </div>

            <!-- Botão para enviar o formulário -->
            <button class="botao" type="submit" onsubmit="">SALVAR</button>            

        </form>

    </body>

</html>




