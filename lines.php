<?php 
include("conexao.php");

 $pdo_verifica = $conexao_pdo->prepare("select idlinha, linha, status from linhas ");
                     $pdo_verifica->execute();
            while($fetch = $pdo_verifica->fetch()){
            
                //echo '<td>' . $fetch['linha'] . '</td><br>';
                $linha = array($fetch['idlinha'] => $fetch['status']);
                
                
                
            }

    echo $linha["1"];
    
?>


<div class="inner">
                    <nav>
                        <ul>
                            <li style="background-color: red" style=""><a>Watch 01</a></li>
                            <li><a>Watch 02</a></li>
                            <li><a></a></li>
                            <li><a></a></li>
                            <li><a></a></li>
                            <!--<li><a href="#elements">Elements</a></li>-->
                        </ul>
                    </nav>
                    <br>
                    <nav>
                        <ul>
                            <li><a>J003</a></li>
                            <li><a>J004</a></li>
                            <li><a>J005</a></li>
                            <li><a>J006</a></li>
                            <li><a>J007</a></li>
                            <!--<li><a href="#elements">Elements</a></li>-->
                        </ul>
                    </nav>
                    <br>
                    <nav>
                        <ul>
                            <li><a>J008</a></li>
                            <li><a>J009</a></li>
                            <li><a>J010</a></li>
                            <li><a>J011</a></li>
                            <li><a>J012</a></li>
                            <!--<li><a href="#elements">Elements</a></li>-->
                        </ul>
                    </nav>
                    <br>
                    <nav>
                        <ul>
                            <li><a>J013</a></li>
                            <li><a>J014</a></li>
                            <li><a>J015</a></li>
                            <li><a>J016</a></li>
                            <li><a>J017</a></li>
                            <!--<li><a href="#elements">Elements</a></li>-->
                        </ul>
                    </nav>
                    <br>
                    <nav>
                        <ul>
                            <li><a>J018</a></li>
                            <li><a>J019</a></li>
                            <li><a>J020</a></li>
                            <li><a>M06</a></li>
                            <li><a>M05</a></li>
                            <!--<li><a href="#elements">Elements</a></li>-->
                        </ul>
                    </nav>
                    <br>
                    <nav>
                        <ul>
                            <li><a>TM01</a></li>
                            <li><a>M01</a></li>
                            <li><a>M02</a></li>
                            <li><a>M03</a></li>
                            <li><a>M04</a></li>
                            <!--<li><a href="#elements">Elements</a></li>-->
                        </ul>
                    </nav>
                </div>