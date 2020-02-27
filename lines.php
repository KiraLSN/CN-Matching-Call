<!--
<audio id="audio">
    <source src="piano-notification.mp3" type="audio/mp3" />
</audio>

<script type="text/javascript">

    audio = document.getElementById('audio');

function play(){
    audio.play();
}

</script>
<input type="button" value="test sound" onclick="play()";>
-->

<?php 
include("conexao.php");

 $pdo_verifica = $conexao_pdo->prepare("select idlinha, linha, status from linhas ");
                     $pdo_verifica->execute();
$linhastatus = array();
$cor = array();
$i = 0;
$som = 0;
            while($fetch = $pdo_verifica->fetch()){
            $i= $i+1;
                //echo '<td>' . $fetch['linha'] . '</td><br>';
                $linhastatus[$i] = $fetch['status'];
                //echo ("Linha ".$i . " = ". $linhastatus[$i]);
                if($linhastatus[$i] == 1){
                    $cor[$i] = 'style="background-color: red; font-weight: bolder"';
                    if($som == 0){
                        $som = 1;
                    }
                    
                }else{
                    $cor[$i] = '';
                }
                /*
                if($som == 1){
                    $som = 2;
                    ?><audio id="audio" autoplay>
   <source src="piano-notification.mp3" type="audio/mp3" />
</audio> <?php

                }
                */
                
            }


    
?>


    <div class="inner">
        <nav>
            <ul>
                <li <?php echo $cor[1]; ?>><a>Watch 01</a></li>
                <li <?php echo $cor[2]; ?>><a>Watch 02</a></li>
                <li><a></a></li>
                <li><a></a></li>
                <li><a></a></li>
                <!--<li><a href="#elements">Elements</a></li>-->
            </ul>
        </nav>
        <br>
        <nav>
            <ul>
                <li <?php echo $cor[3]; ?>><a>J003</a></li>
                <li <?php echo $cor[4]; ?>><a>J004</a></li>
                <li <?php echo $cor[5]; ?>><a>J005</a></li>
                <li <?php echo $cor[6]; ?>><a>J006</a></li>
                <li <?php echo $cor[7]; ?>><a>J007</a></li>
                <!--<li><a href="#elements">Elements</a></li>-->
            </ul>
        </nav>
        <br>
        <nav>
            <ul>
                <li <?php echo $cor[8]; ?>><a>J008</a></li>
                <li <?php echo $cor[9]; ?>><a>J009</a></li>
                <li <?php echo $cor[10]; ?>><a>J010</a></li>
                <li <?php echo $cor[11]; ?>><a>J011</a></li>
                <li <?php echo $cor[12]; ?>><a>J012</a></li>
                <!--<li><a href="#elements">Elements</a></li>-->
            </ul>
        </nav>
        <br>
        <nav>
            <ul>
                <li <?php echo $cor[13]; ?>><a>J013</a></li>
                <li <?php echo $cor[14]; ?>><a>J014</a></li>
                <li <?php echo $cor[15]; ?>><a>J015</a></li>
                <li <?php echo $cor[16]; ?>><a>J016</a></li>
                <li <?php echo $cor[17]; ?>><a>J017</a></li>
                <!--<li><a href="#elements">Elements</a></li>-->
            </ul>
        </nav>
        <br>
        <nav>
            <ul>
                <li <?php echo $cor[18]; ?>><a>J018</a></li>
                <li <?php echo $cor[19]; ?>><a>J019</a></li>
                <li <?php echo $cor[20]; ?>><a>J020</a></li>
                <li <?php echo $cor[21]; ?>><a>M06</a></li>
                <li <?php echo $cor[22]; ?>><a>M05</a></li>
                <!--<li><a href="#elements">Elements</a></li>-->
            </ul>
        </nav>
        <br>
        <nav>
            <ul>
                <li <?php echo $cor[23]; ?>><a>TM01</a></li>
                <li <?php echo $cor[24]; ?>><a>M01</a></li>
                <li <?php echo $cor[25]; ?>><a>M02</a></li>
                <li <?php echo $cor[26]; ?>><a>M03</a></li>
                <li <?php echo $cor[27]; ?>><a>M04</a></li>
                <!--<li><a href="#elements">Elements</a></li>-->
            </ul>
        </nav>
    </div>
