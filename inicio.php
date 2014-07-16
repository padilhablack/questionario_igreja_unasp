
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Questionário Igreja</title>
        <link rel="stylesheet" type="text/css" href="css/jquery.mobile-1.4.2.min.css">
        <link rel="stylesheet" href="themes/igreja_unasp.min.css" />
        <link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery.mobile.js"></script>
    </head>
    <body>
        <!--Página Inicial-->      
        <div data-role="page" id="page"  data-theme="a">
            <div class="topo-inicial"> <img class="logo" src="images/logo.png"  alt=""/> </div>
            <div id="inicio" class="corpo-incial"> 
                <form action="" method="post">
                    <input  class="bottom-principal" name="inicio" type="button" value="INICIAR PESQUISA" onclick="location.href = '#page1'" />
                </form>   
            </div>
        </div>
        <!--/Página Inicial-->
        <!--Página 1-->
        <div data-role="page" id="page1">
            <div class="header-question">
                <P class="text-question" style="margin:3% auto auto 10%">VOCÊ É INTERNO OU EXTERNO?</P>
                <h1 class="cont">1</h1>
            </div>
            <div>
                <table border="0" class="questoes">
                    <tbody style="font-size: x-large">
                        <tr>
                            <td><input type='radio' name="pergunta1" value="1"></td>
                            <td><label for="pergunta1">INTERNO</label></td>
                        </tr>
                        <tr>
                            <td><input type='radio' name="pergunta1"  value="2"></td>
                            <td><label for="pergunta1">EXTERNO</label></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <a data-role="button"  class="bottom-pagina-right" name="proximo" id="pgt1" onclick="validar('pergunta1', '#page2')">Próximo</a>            
        </div>
        <!--/Página 1-->
        <!--Página 2-->
        <div data-role="page" id="page2">
            <div class="header-question">
                <P class="text-question">NO SÁBADO,QUAL PERÍODO DO CULTO VOCÊ FREQUENTA?</P>
                <h1 class="cont">2</h1>
            </div>
            <div>
                <table border="0" class="questoes">
                    <tbody style="font-size: x-large">
                        <tr>
                            <td><input type='radio' name="pergunta2" value="1"></td>
                            <td><label for="pergunta2">PRIMEIRO [8H30 - 10H30]</label></td>

                        </tr>
                        <tr>
                            <td><input type='radio' name="pergunta2" value="2"></td>
                            <td><label for="pergunta2">SEGUNDO [10H30 - 12H00]</label></td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <a href="#page1" data-role="button"class="bottom-pagina-left">Anterior</a>
            <a data-role="button" class="bottom-pagina-right" id="pgt2" onclick="validar('pergunta2', '#page3')">Próximo</a>            
        </div>
        <!--/Página 2-->
        <!--Página 3-->
        <div data-role="page" id="page3">
            <div class="header-question">
                <P class="text-question">O QUE VOCÊ ACHA DO AMBIENTE DA IGREJA?</P>
                <P class="subititulo" style="margin:4.6% auto auto 11%">VOCÊ PODE MARCAR MAIS DE UMA OPÇÃO</p>
                <h1 class="cont">3</h1>
            </div>
            <div>
                <table border="0" class="questoes">
                    <tbody style="font-size: x-large">
                        <tr>
                            <td><input type='checkbox' name="pergunta3" value="1"></td>
                            <td><label for="pergunta3">BANCOS CONFORTÁVEIS</label></td>
                            <td><input type='checkbox' name="pergunta3" value="9"></td>
                            <td><label for="pergunta3">MUITO QUENTE NO CALOR</label></td>
                        </tr>
                        <tr>
                            <td><input type='checkbox' name="pergunta3" value="2"></td>
                            <td><label for="pergunta3">AMBIENTE AREJADO</label></td>
                            <td><input type='checkbox' name="pergunta3"value="10"></td>
                            <td><label for="pergunta3">MUITO FRIA NO INVERNO</label></td>
                        </tr>
                        <tr>
                            <td><input type='checkbox' name="pergunta3" value="3"></td>
                            <td><label for="pergunta3">LOCAL AGRADÁVEL PARA ADORAÇÃO</label></td>
                            <td><input type='checkbox' name="pergunta3"value="11"></td>
                            <td><label for="pergunta3">POUCO ACOCHEGANTE</label></td>
                        </tr>
                        <tr>
                            <td><input type='checkbox' name="pergunta3"value="4" ></td>
                            <td><label for="pergunta3">BONITA</label></td>
                            <td><input type='checkbox' name="pergunta3" value="12"></td>
                            <td><label for="pergunta3">DESCONFORTÁVEL</label></td>
                        </tr>
                        <tr>
                            <td><input type='checkbox' name="pergunta3" value="5"></td>
                            <td><label for="pergunta3">BEM DECORADA</label></td>
                            <td><input type='checkbox' name="pergunta3" value="13"></td>
                            <td><label for="pergunta3">NÃO GOSTO POR OUTROS MOTIVOS</label></td>
                        </tr>
                        <tr>
                            <td><input type='checkbox' name="pergunta3" value='6'></td>
                            <td><label for="pergunta3">CONFORTÁVEL</label></td>
                        </tr>
                        <tr>
                            <td><input type='checkbox' name="pergunta3" value="7"></td>
                            <td><label for="pergunta3">LIMPA E ORGANIZADA</label></td>
                        </tr>
                        <tr>
                            <td><input type='checkbox' name="pergunta3" value="8"></td>
                            <td><label for="pergunta3">GOSTO POR OUTROS MOTIVOS</label></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <a href="#page2" data-role="button" class="bottom-pagina-left">Anterior</a>
            <a data-role="button" class="bottom-pagina-right" id="pgt3" onclick="validar('pergunta3', '#page4')">Próximo</a>    
        </div>

        <!--/Página 3-->
        <!--Página 4-->
        <div data-role="page" id="page4">
            <div class="header-question">
                <P class="text-question">QUAL A SUA OPINIÃO SOBRE A DOXOLOGIA?</P>
                <P class="subititulo" style="margin:4.6% auto auto 11%">O MOMENTO DE CÂNTICOS NA IGREJA</p>
                <h1 class="cont">4</h1>
            </div>
            <div>
                <table border="0" class="questoes">
                    <tbody style="font-size: x-large">
                        <tr>
                            <td><input type='radio' name="pergunta4" value='1'></td>
                            <td><label for="pergunta4">PERFEITO, ME SINTO EXTREMAMENTE CONECTADO(A) Á DEUS. A QUALIDADE MUSICAL É DE EXCELÊNCIA E GOSTO DE PARTICIPAR DESSE MOMENTO DO CULTO.</label></td>

                        </tr>
                        <tr>
                            <td><input type='radio' name="pergunta4" value="2"></td>
                            <td><label for="pergunta4">GOSTO MUITO DE ADORAR Á DEUS COM CÂNTICOS, MAS ACHO A DOXOLOGIA DA IGREJA MEIO LONGA. É MUITO TEMPO DE CÂNTICOS E ISSO ACABA ME CANSANDO.</label></td>
                        </tr>
                        <tr>
                            <td><input type='radio' name="pergunta4" value="3"></td>
                            <td><label for="pergunta4">NÃO GOSTO MUITO, GOSTO DE CHEGAR LOGO PARA A PREGAÇÃO.</label></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <a href="#page3" data-role="button" class="bottom-pagina-left">Anterior</a>
            <a  data-role="button" class="bottom-pagina-right" id="pgt4" onclick="validar('pergunta4', '#page5')">Próximo</a>            
        </div>
        <!--/Página 4-->
        <!--Página 5-->
        <div data-role="page" id="page5">
            <div class="header-question">
                <P class="text-question">QUAL É A SUA OPINIÃO SOBRE AS PREGAÇÕES?</P>
                <h1 class="cont">5</h1>
            </div>
            <div>
                <table border="0" class="questoes">
                    <tbody style="font-size: x-large">
                        <tr>
                            <td><input type='radio' name="pergunta5" value="1"></td>
                            <td><label for="pergunta5">AS PREGAÇÕES SÃO SEMPRE MUITO BOAS. EU GOSTO, AINDA MAIS COM ESSE NOVO FORMATO DE DOIS CULTOS NO SÁBADO.</label></td>

                        </tr>
                        <tr>
                            <td><input type='radio' name="pergunta5" value="2"></td>
                            <td><label for="pergunta5">EU GOSTO, MAS ACHO QUE A LINGUAGEM DOS CULTOS PODIA SER UM POUCO DIFERENTE. SERIA LEGAL SE HOUVESSE UMA SEPARAÇÃO DE TEMAS ENTRE OS CULTOS DA COMUNIDADE E DOS INTERNOS. ISSO FACILITARIA NA COMPREENSÃO DA MENSAGEM.</label></td>
                        </tr>
                        <tr>
                            <td><input type='radio' name="pergunta5" value="3"></td>
                            <td><label for="pergunta5">GOSTARIA QUE AS PREGAÇÕES FOSSEM MAIS DIRETAS, SEM MUITOS RODEIOS, PRINCIPALMENTE NO SEGUNDO CULTO, O HORÁRIO COSTUMA EXTRAPOLAR, E ISSO INCOMODA UM POUCO.</label></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <a href="#page4" class="bottom-pagina-left" data-role="button">Anterior</a>
            <a  class="bottom-pagina-right" data-role="button" id="pgt5" onclick="validar('pergunta5', '#page6')">Próximo</a>            
        </div>
        <!--/Página 5-->

        <!--Página 6-->
        <div data-role="page" id="page6">
            <div class="header-question">
                <P class="text-question">SOBRE A REVERÊNCIA NO CULTO, QUAL É A SUA OPINIÃO?</P>
                <h1 class="cont">6</h1>
            </div>
            <div>
                <table border="0" class="questoes">
                    <tbody style="font-size: x-large">
                        <tr>
                            <td><input type='radio' name="pergunta6" value="1"></td>
                            <td><label for="pergunta6">NO LOCAL EM QUE EU ME SENTO É BEM TRANQUILO, AS PESSOAS RESPEITAM E SÃO REVERENTES.</label></td>

                        </tr>
                        <tr>
                            <td><input type='radio' name="pergunta6" value="2"></td>
                            <td><label for="pergunta6">DEPENDE MUITO. JÁ PARTICIPEI DE CULTOS EM QUE AS PESSOAS ESTAVAM MAIS CONCENTRADAS E, CONSEQUENTEMENTE MAIS REVERENTES, MAS ADMITDO QUE É MAIS FÁCIL ENCONTRAR IRREVERÊNCIA.</label></td>
                        </tr>
                        <tr>
                            <td><input type='radio' name="pergunta6" value="3"></td>
                            <td><label for="pergunta6">AS PESSOAS SÃO MUITO IRREVERENTES, CONVERSAS PARALELAS E BRINCADEIRAS FORA DA HORA, NÃO CONSIGO ME CONCENTRAR.</label></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <a href="#page5" class="bottom-pagina-left" data-role="button">Anterior</a>
            <a class="bottom-pagina-right" data-role="button" id="pgt6" name="proximo"  onclick="validar('pergunta6', '#page7')">Próximo</a>            
        </div>
        <!--/Página 6-->
        <!--Página 7-->
        <div data-role="page" id="page7">
            <div class="header-question">
                <P class="text-question">PORQUE VOCÊ VAI AOS CULTOS?</P>
                <h1 class="cont">7</h1>
            </div>
            <div>
                <table border="0" class="questoes">
                    <tbody style="font-size: x-large">
                        <tr>
                            <td><input type='radio' name="pergunta7" value="1"></td>
                            <td><label for="pergunta7">PORQUE REALMENTE GOSTO E ME SINTO BEM.</label></td>

                        </tr>
                        <tr>
                            <td><input type='radio' name="pergunta7" value="2"></td>
                            <td><label for="pergunta7">PORQUE SEI QUE É IMPORTANTE, MAS NÃO É SEMPRE QUE EU GOSTO DE IR.</label></td>
                        </tr>
                        <tr>
                            <td><input type='radio' name="pergunta7" value="3"></td>
                            <td><label for="pergunta7">PORQUE SOU OBRIGADO, GOSTARIA DE PODER ESCOLHER, ISSO ME DEIXA FRUSTRADO, EU DEVIA IR Á CASA DE DEUS POR VONTADE PRÓPRIA.</label></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <a href="#page6" class="bottom-pagina-left" data-role="button">Anterior</a>
            <a  class="bottom-pagina-right" data-role="button" id="pgt7"  onclick="validar('pergunta7', '#page8')">Próximo</a>            
        </div>
        <!--/Página 7-->
        <!--Página 7-->
        <div data-role="page" id="page8">
            <div style="background-color: #ffffff; margin-top: 5%;">
                <img style="margin-left:41%; position: relative;" src="images/logo-question.png" width="250" height="120" alt="logo-question"/>
            </div>
            <p  style="margin: 8%; font-size: 25px; color: #000; text-align: center">MUITO OBRIGADO PELA SUA PARTICIPAÇÃO.</p>
            <a href="#page" id="mostra_valor" data-role="button" class='bottom-principal' >FINALIZAR PESQUISA</a>
            <div id="response_text"></div>
            <div class="footer">
                <p style="text-align: center; color: #333333;">by AGZOOM - TI ®</p>
            </div>
        </div>
        <!--/Página 7-->
        <script src="js/main.js" type="text/javascript"></script>
    </body>
</html>