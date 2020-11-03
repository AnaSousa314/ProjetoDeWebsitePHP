//A parte dos clientes

$(document).ready(function(){

    $('#conteudo').on('submit','#formCliente',function(e){
        e.preventDefault();
        var formulario = $(this).serialize();
        $.ajax({
            type: "post",
            url: "ins_cliente.php",
            data: formulario,
            dataType: "text",
            success: function (response) {
                if(response == "ok"){
                    $('#formCliente').each(function(){
                        this.reset();
                    });
                    alert("Cliente inserido com sucesso!");
                }else{
                    alert(response);
                }
            }
        });
    });

    
    $('#conteudo').on('click','#btn_bscCliente',function(e){
        e.preventDefault();
        $.ajax({
            type: "post",
            url: "cliente_busca.php",
            data: "buscar",
            dataType: "text",
            success: function (response) {
                $('#tblCliente').html(response);
            }
        });
    });

    $('#conteudo').on('focus','#cmpNm',function (e) {
        e.preventDefault();

        $.ajax({
            type:"post",
            url:"cliente_select.php",
            data: "busca",
            dataType:"text",
            success: function (response) {
                $('#cmpNm').html(response);
                
            }
        });
    });
});

// A parte dos funcionários

$(document).ready(function(){

    $('#conteudo').on('submit','#formFuncionario',function(e){
        e.preventDefault();
        var formulario = $(this).serialize();
        $.ajax({
            type: "post",
            url: "ins_funcionario.php",
            data: formulario,
            dataType: "text",
            success: function (response) {
                if(response == "ok"){
                    $('#formFuncionario').each(function(){
                        this.reset();
                    });
                    alert("Funcionario inserido com sucesso!");
                }else{
                    alert(response);
                }
            }
        });
    });

    
    $('#conteudo').on('click','#btn_bscFuncionarios',function(e){
        e.preventDefault();
        $.ajax({
            type: "post",
            url: "funcionario_busca.php",
            data: "buscar",
            dataType: "text",
            success: function (response) {
                $('#tblFuncionarios').html(response);
            }
        });
    });

    $('#conteudo').on('focus','#cmpFnc',function (e) {
        e.preventDefault();
        $.ajax({
            type:"post",
            url:"funcionario_select.php",
            data: "busca",
            dataType:"text",
            success: function (response) {
                $('#cmpFnc').html(response);
                
            }
        });
    });
});



// A parte dos Desktops

$(document).ready(function(){

    $('#conteudo').on('submit','#formDesktops',function(e){
        e.preventDefault();
        var formulario = $(this).serialize();
        $.ajax({
            type: "post",
            url: "ins_desktop.php",
            data: formulario,
            dataType: "text",
            success: function (response) {
                if(response == "ok"){
                    $('#formDesktops').each(function(){
                        this.reset();
                    });
                    alert("Desktop inserido com sucesso!");
                }else{
                    alert(response);
                }
            }
        });
    });

    
    $('#conteudo').on('click','#btn_bscDesktops',function(e){
        e.preventDefault();
        $.ajax({
            type: "post",
            url: "desktop_busca.php",
            data: "buscar",
            dataType: "text",
            success: function (response) {
                $('#tblDesktops').html(response);
            }
        });
    });

    $('#conteudo').on('focus','#cmpDsk',function (e) {
        e.preventDefault();
        $.ajax({
            type:"post",
            url:"desktop_select.php",
            data: "busca",
            dataType:"text",
            success: function (response) {
                $('#cmpDsk').html(response);
                
            }
        });
    });
});

// A parte dos Impressoras

$(document).ready(function(){

    $('#conteudo').on('submit','#formImpressoras',function(e){
        e.preventDefault();
        var formulario = $(this).serialize();
        $.ajax({
            type: "post",
            url: "ins_impressora.php",
            data: formulario,
            dataType: "text",
            success: function (response) {
                if(response == "ok"){
                    $('#formImpressoras').each(function(){
                        this.reset();
                    });
                    alert("Impressora inserido com sucesso!");
                }else{
                    alert(response);
                }
            }
        });
    });

    
    $('#conteudo').on('click','#btn_bscImpressoras',function(e){
        e.preventDefault();
        $.ajax({
            type: "post",
            url: "impressora_busca.php",
            data: "buscar",
            dataType: "text",
            success: function (response) {
                $('#tblImpressoras').html(response);
            }
        });
    });

    $('#conteudo').on('focus','#cmpImp',function (e) {
        e.preventDefault();
        $.ajax({
            type:"post",
            url:"impressora_select.php",
            data: "busca",
            dataType:"text",
            success: function (response) {
                $('#cmpImp').html(response);
                
            }
        });
    });
});

// A parte dos Laptops

$(document).ready(function(){

    $('#conteudo').on('submit','#formLaptops',function(e){
        e.preventDefault();
        var formulario = $(this).serialize();
        $.ajax({
            type: "post",
            url: "ins_laptop.php",
            data: formulario,
            dataType: "text",
            success: function (response) {
                if(response == "ok"){
                    $('#formLaptops').each(function(){
                        this.reset();
                    });
                    alert("Laptop inserido com sucesso!");
                }else{
                    alert(response);
                }
            }
        });
    });

    
    $('#conteudo').on('click','#btn_bscLaptops',function(e){
        e.preventDefault();
        $.ajax({
            type: "post",
            url: "laptop_busca.php",
            data: "buscar",
            dataType: "text",
            success: function (response) {
                $('#tblLaptops').html(response);
            }
        });
    });

    $('#conteudo').on('focus','#cmpLap',function (e) {
        e.preventDefault();
        $.ajax({
            type:"post",
            url:"laptop_select.php",
            data: "busca",
            dataType:"text",
            success: function (response) {
                $('#cmpLap').html(response);
                
            }
        });
    });
});

/// A parte das vendas 


$(document).ready(function(){

    $('#conteudo').on('submit','#formVendas',function(e){
        e.preventDefault();
        var formulario = $(this).serialize();
        $.ajax({
            type: "post",
            url: "ins_venda.php",
            data: formulario,
            dataType: "text",
            success: function (response) {
                if(response == "ok"){
                    $('#formVendas').each(function(){
                        this.reset();
                    });
                    alert("Venda inserida com sucesso!");
                }else{
                    alert(response);
                }
            }
        });
    });

    
    $('#conteudo').on('click','#btn_bscVendas',function(e){
        e.preventDefault();
        $.ajax({
            type: "post",
            url: "venda_busca.php",
            data: "buscar",
            dataType: "text",
            success: function (response) {
                $('#tblVendas').html(response);
            }
        });
    });

});