<div class="telareservacadastro">
    <h1>Fazer reserva de mesa</h1>
        <form action="reservacadastro1.php" method="post">
        <div class="inputreservacadastro">
       <?php
       echo $_SESSION['nome'];
       include'conectabanco.php';
       ?>
        </div> 
        <br><br>
        <div class="inputreservacadastro">
        <label for="datareserva">Data</label><br>
        <input type="date" name="datareserva" id="data" required>
        </div>
        <br><br>
        <div class="inputreservacadastro">
        <label for="hora" class="labelreservacadastro">Hora</label><br>
        <input type="text" name="hora" id="hora" class="inputusuario" placeholder="exemplo: 12:00" required>
        </div>
        <br><br>
        <div class="inputreservacadastro">
        <label for="qtdpessoa">Quantidade de pessoas</label><br>
        <input type="number" name="qtdpessoa" id="qtdpessoa" min=1 max=20>
        </div>
        
        <br><br>
        <div class="inputreservacadastro">
        <label for="ocasiao" class="labelreservacadastro">Ocasião</label><br>
        <input type="text" name="ocasiao" id="ocasiao" class="inputusuario" placeholder="(exemplo: aniversário, reunião,...)" maxlength="45">
        </div>
        <br><br>
        <input type="submit" value="Fazer Reserva" id="submit">
        <br><br>
        </form>
        <form action="listareserva.php" method="post">
        <input type="submit" value="Já possui uma reserva" id="submit">
        </form>

    </div>
