<link rel="stylesheet" href="style_2.css">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


<div class="topo">

<div class="cabe">
    <h1>INSERIR VENDA</h1>
 </div>


    <form id="formVendas" method="post" class="form-cp">


        <div>

            <table>
                <tr>
                
                    <td>CLIENTE: </td>
                    <td>
                        <select name="campo_cliente" id="cmpNm">
                            <option required  value="#">Selecione...</option>
                        </select>
                    </td>
                 
           
                </tr>

                <tr>
                    <td>FUNCIONARIO: </td>
                    <td>
                        <select name="campo_funcionario" id="cmpFnc">
                            <option required  value="#">Selecione...</option>
                        </select>
                    </td>
                </tr>

                <tr>
                <tr>    
                    <td>DESKTOP: </td>
                    <td>
                        <select name="campo_desktop" id="cmpDsk">
                            <option  value="#">Selecione...</option>
                        </select>   
                    </td>
                </tr> 
                <tr>
                    <td>LAPTOP: </td>
                    <td>
                        <select name="campo_laptop" id="cmpLap">
                            <option  value="#">Selecione...</option>
                        </select>   
                    </td>
                    
                </tr>

                <tr>
                    <td>IMPRESSORA: </td>
                    <td>
                        <select name="campo_impressora" id="cmpImp">
                            <option  value="#">Selecione...</option>
                        </select>   
                    </td>
                </tr>

                <tr>

                    <td>DATA DE VENDA: </td><td><input required  type="date" name="campo_venda" id="cmpVnd"></td>

                </tr>

                <tr>

                    <td>PREÇO: </td><td><input required placeholder="Ex.: 2610.00" type="text" name="campo_preco" id="cmpPrc"></td>

                </tr>

            </table>

            <div class="botao">
                <input type="submit" value="Salvar">
            </div>

    </form>

</div>