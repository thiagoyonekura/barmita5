<?php
    include 'conectabanco.php';

    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];

    $sql = "SELECT cpf, nome, email FROM funcionario WHERE cpf = '$cpf'";
    $sla = "SELECT * FROM senhas WHERE fk_cpf = '$cpf'"; /* seleciona da tabela senhas todos os dados */
    $funcionario = $banco->query($sql);
    $teste = $banco->query($sla); 
    $linha = mysqli_fetch_assoc($teste); /* informações da tabela senhas */
    $datual = date('Y-m-d');/* dia do acesso */
    
    if($linha != null){ /* se as informações da tabela senha não forem vazias */
    $d1 = $linha['dataAtual']; /* variavel para guardar a data da senha atual */
    $situacao = $linha['situacao']; /* usuario bloqueado ou desbloqueado */
    $tentativa = $linha['tentativas']; /* número de tentativas de acesso do usuario */
        function ddiasDatas($d1,$datual) {
            $diferenca = strtotime($d1) - strtotime($datual); /* strtotime interpreta descrições de data e hora */
            $dias = floor($diferenca / (60 * 60 * 24)); /* floor arredonda frações para baixo */
            return $dias;} /* função que conta o dia de diferentes datas [2022-11-17 - 2022-11-20 = 3 dias de diferença] */
    $ok = ddiasDatas($datual,$d1); /* guarda os dias entre as datas */
    $_SESSION['fkcpf'] = $linha['fk_cpf']; 
        if($ok<3){/* R3 - troca de senhas a cada 3 dias */
            if($situacao == 1){ /* verifica se o usuario esta bloqueado no banco */
                if($tentativa < 3){ /* R4 - verifica o numero de tentativas de login */
                    if($senha == $linha['senhaAtual']){
                        //echo 'ok';
                        $edita = "UPDATE senhas SET tentativas = 0 WHERE fk_cpf = $cpf"; /* zera a contagem de tentativas */
                        $banco->query($edita);
                    }
                    else{
                        echo 'senha incorreta <br>';
                        $tentativa = $tentativa + 1;
                        $edita = "UPDATE senhas SET tentativas = '$tentativa' WHERE fk_cpf = '$cpf'";
                        $banco->query($edita);
                        if($tentativa == 3){
                            echo 'Usuario bloqueado';
                            $edita2 = "UPDATE senhas SET situacao = 0 WHERE fk_cpf = '$cpf'"; /* bloqueia o acesso apos 3 tentativas */
                            $banco->query($edita2);
                        }else{
                            echo 'tentar novamente'; /* direciona para pagina de login */
                        }

                    }
                }else{
                    header('Location: trocasenha.php'); /* apos ser desbloqueado manualmente o numero de tentativas continua o mesmo p/ obrigar a troca */
                
            }
            }
            else{
                echo "usuario bloqueado"; /* desbloqueio manual no banco */
            }
            
        }
        else{
            header('Location: trocasenha.php');
        }
    }else{
        echo 'usuario nao encontrado';
    }
        $banco->close();






    // if($funcionario){ //cliente resultado da consulta é cheio?
    //     while($row= mysqli_fetch_assoc($funcionario)){
    //         if($linha['senhaAtual']==$senha){
    //             $_SESSION['cpfF']=$row['cpf'];
    //             $_SESSION['nomeF']=$row['nome'];
    //             $_SESSION['emailF']=$row['email'];
    //             header('Location: acessofuncionario.php');
    //             $banco->close();
    //         }else{
    //             echo "A senha do funcionário $cpf está incorreta.";
    //         }
    //     }
    // }else{
    //     $banco->close();
    //     echo "CPF: $cpf não cadastrado";
    // }











?>