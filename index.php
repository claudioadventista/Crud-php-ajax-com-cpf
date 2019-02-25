
<html>
 <!-- Todo codigo tirado da net e adaptado, projetos de vários autores -->
	<head>
 
		<title>Cadastro de pessoas</title>
		<!--<title>Webslesson Demo - PHP PDO Ajax CRUD with Data Tables and Bootstrap Modals</title>-->
		<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>-->
		<script src="internet/ajax-googleapis-com-ajax-libs-jquery-2-2-0-jquery-min.js"></script>
		<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />-->
		
		<link rel="stylesheet" href="internet/maxcdn-bootstrapcdn-com-bootstrap-3-3-6-css-bootstrap-min.css" />
		
		<!--<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>-->
		<script src="internet/cdn-datatables-net-1-10-12-js-jquery-dataTables-min.js"></script>
		<!--<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>-->		
		<script src="internet/cdn-datatables-net-1-10-12-js-dataTables-bootstrap-min.js"></script>		
		<!--<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />-->
		<link rel="stylesheet" href="internet/cdn-datatables-net-1-10-12-css-dataTables-bootstrap-min.css" />	
		
		<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>-->
		<script src="internet/maxcdn-bootstrapcdn-com-bootstrap-3-3-6-js-bootstrap-min.js"></script>
		
		
		<style>
			body {
				margin: 0;
				padding: 0;
				background-color: #cacaca;
			}
			.box {
				/*width:1270px;*/
				width: 99%;
				padding: 10px;

				background-color: #fff;
				border: 1px solid #ccc;/*border-radius:5px;/*margin-top:25px;*/
			}
			.titulo{
				font-weight:bold;
				margin-right:35%;
			}
			.cabecario{
				background-color:#ccc;
				padding:10px 10px 10px 0;
			}
			.az{
				margin-left:70px;
			}
			.za{
				margin-left:50px;
			}
			
			.coluna_1{
				margin-left:10px;
			}
			.coluna_2{
				margin-left:10px;
			}
			.coluna_3{
				margin-left:10px;
			}
			.coluna_4{
				margin-left:10px;
			}
			.coluna_5{
				margin-left:10px;
			}
			.coluna_6{
				margin-left:10px;
			}
			.coluna_7{
				margin-left:10px;
			}
			.coluna_8{
				margin-left:10px;
			}
			.coluna_9{
				margin-left:10px;
			}
			.coluna_10{
				margin-left:10px;
			}
			.coluna_11{
				margin-left:10px;
			}
			.coluna_12{
				margin-left:10px;
			}
			.coluna_13{
				margin-left:10px;
			}
		</style>		
	</head>
		
	<body>
		<div id="atualizar">
		<div class="container box">
			<!--<h4 align="center">Cadastro de Pessoas</h4>-->
			
			<div class="table-responsive">
				
				<div align="right" class="cabecario">
					
					<!-- data-backdrop="static" , evita fechar o modal clicando fora do botão fechar -->
					<span class="titulo">Cadastro de Pessoas </span>
					<button type="button" id="add_button" data-toggle="modal" data-target="#userModal" data-backdrop="static" class="btn btn-info btn-lg">Adicionar</button>
			        <button type="button" id="menu_button" data-toggle="modal" data-target="#userModalmenu" data-backdrop="static" class="btn btn-primary btn-lg">Menu</button>
			
				</div>				
				<br />
			
				<table id="user_data" class="table table-bordered table-striped table-hover table-condensed">
					<thead>
						<tr>
							<th width:"10%;"><center>Imagem</center></th>
							<th width="30%"><center>Nome</center></th>
							<th width="20%"><center>Cpf</center></th>
							<th width="20%"><center>Ação Editar</center></th>
							<th width="19%"><center>Ação Excluir</center></th>
						</tr>
					</thead>
				
						
					
					
				</table>
				</div>
		
		</div>
		
		<!-- Formulário -->
		
<div id="userModal" class="modal fade">
	<div class="modal-dialog">
		<form method="post" id="user_form" enctype="multipart/form-data">
			<div class="modal-content">
				<div class="modal-header" >
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					
					 <!--<input type="submit" name="action" id="action2"  class="btn btn-success" />-->
					 <h4 class="modal-title">Adicionar Cadastro</h4>
				</div>
				<div class="modal-body">
					
					<div id="formulario" class="formulario">
						 
					<label>Entre com o Nome</label>
					<input type="text" name="first_name" id="first_name" class="form-control title" onKeyup="pri_mai(this);" />				
					<br />												
					<label>Entre com o Sobrenome</label>
					<input type="text" name="last_name" id="last_name" class="form-control title" />
					<br />
					</div>
					
					<label>Entre com o CPF. &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp* Obs.( Digite somente Números )</label>
					<input type="text" id="cpf" name="cpf" maxlength="11" class="form-control" readonly="true" onkeypress='return event.charCode >= 48 && event.charCode <= 57' autofocus />
					<span style="color:green; padding-left:50%;" id="resposta"></span><br />
					
					<div id="formulario" class="formulario">
					<label>Endereço</label>
					<input type="text" name="endereco" id="endereco" class="form-control title" onKeyup="pri_mai(this);" />
					<br />
					<label>Selecione a Imagem</label>
					<input type="file" name="user_image" id="user_image" />
					<span id="user_uploaded_image"></span>
				    <div class="modal-footer">
				 	   <input type="hidden" name="user_id" id="user_id" />
					   <input type="hidden" name="operation" id="operation" />
					   <input type="submit" name="action" id="action" class="btn btn-success" />
					   <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
					</div>
				</div>
		</form>
	</div>
</div>
</div>
</div>



<!-- Formulario Menu -->

<div id="userModalmenu" class="modal fade" >
	<div class="modal-dialog">
       <form method="post" id="user_form_menu" >
           <div class="modal-content">
				<div class="modal-header" >
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					
					 <!--<input type="submit" name="action" id="action2"  class="btn btn-success" />-->
					 <h4 class="modal-title-menu">Menu configuração</h4>
				</div>
				<div class="modal-body">
						 
					<label>Número de linhas por página  ( 1 a 100 )</label>
					<input type="number" name="linha" id="linha"  autocomplete="off" autofocus maxlength="3" min="1" max="100" class="form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57' />				
					<br />												
					<label>Coluna em que deve iniciar a ordenação</label><br>
					<span class="coluna_0"> 0 </span><input type="radio" name="coluna" id="0" value="0" disabled />
					<span class="coluna_1"> 1 </span><input type="radio" name="coluna" id="1" value="1" />
					<span class="coluna_2"> 2 </span><input type="radio" name="coluna" id="2" value="2" />
					<span class="coluna_3"> 3 </span><input type="radio" name="coluna" id="3" value="3" disabled />
					<span class="coluna_4"> 4 </span><input type="radio" name="coluna" id="4" value="4" disabled />
					<span class="coluna_5"> 5 </span><input type="radio" name="coluna" id="5" value="5" disabled />
					<span class="coluna_6"> 6 </span><input type="radio" name="coluna" id="6" value="6" disabled />
					<span class="coluna_7"> 7 </span><input type="radio" name="coluna" id="7" value="7" disabled />
					<span class="coluna_8"> 8 </span><input type="radio" name="coluna" id="7" value="8" disabled />
					<span class="coluna_9"> 9 </span><input type="radio" name="coluna" id="7" value="9" disabled />
					<span class="coluna_10"> 10 </span><input type="radio" name="coluna" id="7" value="10" disabled />
					<span class="coluna_11"> 11 </span><input type="radio" name="coluna" id="7" value="11" disabled />
					<span class="coluna_12"> 12 </span><input type="radio" name="coluna" id="7" value="12" disabled />
					<span class="coluna_13"> 13 </span><input type="radio" name="coluna" id="7" value="13" disabled />
					<br /><br />
					<label>Ordem em que deve iniciar</label>
					<span class="az"> de A para Z </span><input type="radio" name="ordem" id="2" value="2" />
					<span class="za"> de Z para A </span><input type="radio" name="ordem" id="1" value="1" />
					<br /><br />
					<div class="modal-footer">			
					   <input type="hidden" name="operation-menu" id="operation-menu" />
					   <input type="submit" name="action-menu" id="action-menu" class="btn btn-success" />
					   <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
					</div>
		</form>
	</div>
</div>
</div>
</div>
</div>

<?php
include('db.php');

$configuracao = $connection->prepare("SELECT * FROM configuracao");
$configuracao->execute();
$resultado = $configuracao->fetch();

if(($resultado['coluna_inicial']=='')OR( $resultado['coluna_inicial']<1)OR($resultado['coluna_inicial']>2))
{
	 $resultado['coluna_inicial']="1";
}

// Se o valor de ordem inicial for branco, ou menor que 1, ou maior que 2, assume um valor fixo.
if(($resultado['ordem_inicial']=='')OR( $resultado['ordem_inicial']<1)OR($resultado['ordem_inicial']>2))
{
   $ordem_inicial="asc"; 
} 
 // Se o valor de ordem inicial for 1, variavel assume o valor desc.
if($resultado['ordem_inicial']==1)
{
   $ordem_inicial="desc";
}
 // Se o valor de ordem inicial for 2, variavel assume o valor asc.
if($resultado['ordem_inicial']==2)
{
   $ordem_inicial="asc";
}

// Se o valor de linhas por páginas for branco, menor que 1 ou maior que 100, assume um valor fixo. 
if(($resultado['linhas_por_pagina']=='')OR($resultado['linhas_por_pagina']<1)OR( $resultado['linhas_por_pagina']>100))
{
   $resultado['linhas_por_pagina']=10;
}

$coluna_inicial   = $resultado['coluna_inicial'];
$numero_de_linhas = $resultado['linhas_por_pagina'];

?>

<script type="text/javascript" language="javascript" >
			
$(document).ready(function(){
	
	// Menu configuração da tabela
	$('#menu_button').click(function(){
		$('#user_form_menu')[0].reset();
		$('.modal-title-menu').text("Cofiguração da tabela");
		$('#action-menu').val("Atualizar");	
	});
	
	
	$('#add_button').click(function(){
		$('#user_form')[0].reset();
		$('.modal-title').text("Adicionar Cadastro");
		$('#action').val("Adicionar");
		$('#operation').val("Add");
		$('#user_uploaded_image').html('');
	});
	
	
	var dataTable = $('#user_data').DataTable({
		"destroy":true,
		"pageLength":<?php print $numero_de_linhas; ?>,// Fixa o valor de linhas por página
		"bLengthChange":false,// Some com as opções de escolha de linhas por página
		"scrollY":false,
		"processing":true,
		"serverSide":true,
		"order":[<?php print $coluna_inicial ; ?>,"<?php print $ordem_inicial; ?>"],
		// Se for usar colunas que não vão ter setas de ordenação, usar essa função dessa forma
		// "order":[],
		// Para iniciar a tabela em uma ordem escolhida use a função conforme descrita abaixo
		// "order":[2,"desc"], Aqui diz que deve iniciar a tabela com a coluna 2 ordenada decrescente
		// Nessa tabela foi usado com variavel php com informação vinda do banco
		"ajax":{
			url:"fetch.php",
			type:"POST"
		},
		"columnDefs":[
			{
				"targets":[0,3,4],// Colunas que não vão ter setas de ordenação
				"orderable":false,
			},
		],
	});	

	$(document).on('submit', '#user_form', function(event){
		event.preventDefault();
		var firstName = $('#first_name').val();
		var lastName = $('#last_name').val();
		var cpf = $('#cpf').val();
		var endereco = $('#endereco').val();
		var extension = $('#user_image').val().split('.').pop().toLowerCase();
		if(extension != '')
		{
			if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
			{
				alert("Imagem com Extenção Inválida");
				$('#user_image').val('');
				return false;
			}
		}	
		if(firstName != '' && lastName != '' && cpf != '' && endereco != '')
		{
			$.ajax({
				url:"insert.php",
				method:'POST',
				data:new FormData(this),
				contentType:false,
				processData:false,
				success:function(data)
				{
					alert(data);                   // Confirmação de sucesso
					$('#user_form')[0].reset();    // Limpa os campos do formulário
					$('#userModal').modal('hide'); // fecha o modal
					dataTable.ajax.reload();       // atualiza a tabela
				}
			});
		}
		else
		{
			alert("Todos os campos são obrigatórios");
		}
	});
	
	$(document).on('click', '.update', function(){
		var user_id = $(this).attr("id");
		$.ajax({
			url:"fetch_single.php",
			method:"POST",
			data:{user_id:user_id},
			dataType:"json",
			success:function(data)
			{
				$('#userModal').modal('show');
				$('#first_name').val(data.first_name);
				$('#last_name').val(data.last_name);
				$('#cpf').val(data.cpf);
				$('#endereco').val(data.endereco);
				$('.modal-title').text("Editar Cadastro");
				$('#user_id').val(user_id);
				$('#user_uploaded_image').html(data.user_image);	
				$('#action').val("Editar");
				$('#operation').val("Edit");
			}
		})
	});
		
	$(document).on('click', '.delete', function(){
		
		var user_id = $(this).attr("id");
		if(confirm("Tem certeza que deseja excluir este?"))
		{
			$.ajax({
				url:"delete.php",
				method:"POST",
				data:{user_id:user_id},
				success:function(data)
				{
					alert(data);
					dataTable.ajax.reload();
				}
			});
		}
		else
		{
			
			return false;	
		}
	});
});


// Configuração da tabela
$(document).on('submit', '#user_form_menu', function(event){
		event.preventDefault();
		var linha = $('#linha').val();
		var coluna = $('#coluna').val();
		var ordem = $('#ordem').val();
		
		if(linha != '' && coluna != '' && ordem != '' )
		{
			$.ajax({
				url:"config_tables.php",
				method:'POST',
				data:new FormData(this),
				contentType:false,
				processData:false,
				success:function(data)
				{
					$('#userModalmenu').modal('hide'); // fecha o modal
					location.reload();// Atualiza a página inteira
					//$('#atualizar').load('index.php');// Atualiza parte da página	más acumula mascara								
				}
			});
		}
		else
		{
			alert("Todos os campos são obrigatórios");
		}
	});
	
			$("#add_button").click(function(){
				$('.formulario').css('display','none');	
				$('#cpf').attr("readonly", false);
			});
			
			$(".close").click(function(){
				$('.modal').modal('hide');
				$('.formulario').css('display','block');	
				$('#cpf').attr("readonly", true);				
						
			});
	
function CPF()
{	
   document.getElementById('cpf').focus();
"user_strict";
function r(r)
     {
	for(var t=null,n=0;9>n;++n)t+=r.toString().charAt(n)*(10-n);
	var i=t%11;return i=2>i?0:11-i
	}
	function t(r)
	    {
		for(var t=null,n=0;10>n;++n)t+=r.toString().charAt(n)*(11-n);
		var i=t%11;
		return i=2>i?0:11-i
		}
		/*var n=" CPF Inválido",i=" CPF Válido";*/
		var n="",i=" CPF válido";
		this.gera=function()
		{
			for(var n="",i=0;9>i;++i)n+=Math.floor(9*Math.random())+"";
			/*var o=r(n),a=n+"-"+o+t(n+""+o);*/
			var o=r(n),a=n+o+t(n+""+o);
			return a
			},
			this.valida=function(o)
			{
				for(var a=o.replace(/\D/g,""),u=a.substring(0,9),f=a.substring(9,11),v=0;10>v;v++)
				if(""+u+f==""+v+v+v+v+v+v+v+v+v+v+v)
				return n;
				var c=r(u),e=t(u+""+c);
				return f.toString()===c.toString()+e.toString()?i:n
				}
				}
   // Fim da função valida cpf

// Começa a função verificar cada número digitado
var CPF = new CPF();  
$("#cpf").keyup(function(){
    $("#resposta").html(CPF.valida($(this).val()));
    // Aqui já validou os 11 numero
    
    //Se o CPF for válido, vai verificar no banco se está cadastrado
      if (CPF.valida($(this).val())==" CPF válido")
     {
     	var cpf = $("#cpf"); 
            $.ajax({ 
                url: 'verificaCpf.php', 
                type: 'POST', 
                data:{"cpf" : cpf.val()},               
                success: function(data) { 
                console.log(data); 
                data = $.parseJSON(data); 
                   if ($("#respostaCpf").text(data.cpf).val()=='')
                   {           	   	                 	               
     	                //$('.formulario').show();
     	                //$('#first_name').focus();
     	                
                   }else{
     	                 $('.formulario').show();
     	                 $('#first_name').focus();
     	                 $('#cpf').attr("readonly", true);              	
                   }            
            } 
        });    	
     }else{
    // Desabilita os campos até completar o cpf
     	 $('.formulario').hide();
     }
});

// Primeira letra maiúscula
function pri_mai(obj){
    str = obj.value;
    qtd = obj.value.length;
    prim = str.substring(0,1);
    resto = str.substring(1,qtd);
    str = prim.toUpperCase() + resto;
    obj.value = str;
}

// Primeira letra de cada palavra maiúscula
$.fn.capitalize = function () {
    //palavras para ser ignoradas
  var wordsToIgnore = ["to", "and", "the", "it", "or", "that", "this"],
    minLength = 3;

  function getWords(str) {
    //return str.match(/\S+\s*/g);
    return str.match(/\S+\s*/g);
  }
  this.each(function () {
    var words = getWords(this.value);
    $.each(words, function (i, word) {
      // somente continua se a palavra nao estiver na lista de ignorados
      if (wordsToIgnore.indexOf($.trim(word)) == -1 && $.trim(word).length > minLength) {
        words[i] = words[i].charAt(0).toUpperCase() + words[i].slice(1);
      }
    });
    this.value = words.join("");
  });
};

//onblur do campo com classe .title
$('.title').on('keyup', function () {
  $(this).capitalize();
}).capitalize();
</script>
		
		</body>
			
</html>
