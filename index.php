<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>tabela 1</title>
    <style>
    h3{
        margin-left: 20%;
        margin-right: 50%;
        white-space: nowrap;
        width: 20%; 

    }
    
    .titulo{ text-Align: center;
        margin-left: 0%;
        margin-right: 0%;
        white-space: nowrap;
        width: 5%;    
        padding: 3px;
        font-size: 3px;
        
        }
        
    table{
        border: 1px solid black;
        border-collapse: collapse;
        width: 100%;
        margin-left: 0%;
        white-space: nowrap;
        background-Color: white-space;
        }
        
    h1,h2,h3,h4,h5{
        font-size: 10px;
    }
    
    p{
        font-size:8px;
    }
    
    
    
    tr,td,th{
        white-space: nowrap;
    
    }
    td{
        font-size: 10px;
    }
    
    th{
        font-size: 12px;
        color: white;
    }
    .tabela1{
        margin-top: none;
        padding: 6px;
    }
    
    .tabela2{
        margin-top: 30px;
        width: 100%;
        /*box-sizing: border-box;*/ 
        padding: 5px; 
       
        
    }

    .tabela2 input {
        width: 99%;
    }
    
    .tabela3{
        margin-top: 30px;
        width: 100%
    }
    
    .tabela4{
        margin-top: 30px;
        width: 100%;
        
    }
    
    th{ 
    text-Align: center;
    background-Color: green;
    }
    
    .tabelapt1{ 
    width: 38%; 
     
    }
    
    tr{
        border: 1px solid black
    }
    input{
        width: 38%; 
        border:none; 
        width: 90%
    }
    .trtabela2{
        text-Align:center;
    
    }
    
    td{
        border: 1px solid black
    }
    
    
    .trdomalrsrs{
        height: 100px;
    }
    
    .data{
         padding: 4px;
    }
    
    .radio{
        width:10px;
    }
    
    div{
       margin-left: 50px;
       font-size: 10px;
       
    }
    
    textarea{
        height: 10px;
        border:  none;
    }

    .logo {
        width: 20%;
    }
    
    </style>
</head>
<body>
    <form method="POST" action="gerador.php">
<img class="logo" src="https://cecom.ifc.edu.br/wp-content/uploads/sites/10/2022/11/Logo_IFC_horizontal_Sombrio.png ">
    <h3>NOVA AVALIAÇÃO EM CASO DE FALTA JUSTIFICADA</h3>
    <p class="titulo">Referência: Organização Didática do IFC – Resolução 10/2021 – Art. 222

Identificaçã	o do estudante

</p>
    <table class="tabela1">
    
     <tr>
     <th colspan="3">informações</th>
     </tr>
     
     <tr class="1">
     <td>
     Nome: 
     <input name="nome" type="text" class="tabelapt1" style="width: 75%"></input>
     </td>
     <td>
     N° matricula:
     <input type="text" name="matricula" class="tabelapt1" style="width: 67%"></input>
     </td>
     <br>
     <tr>
     <td>
     Curso:
     <input type="text" name="curso" class="tabelapt1" style="width: 75%">
     </td>
     <td>
     Ano/Semestre de Ingresso:
     <input type="text" class="tabelapt1" name="ingresso" style="width: 38%">
     </td>
     </tr>
     <tr>
     <td>
     E-mail:
     <input type="text" name="email" class="tabelapt1"style="width: 75%">
     </td>
     <td>
     Período de Afastamento:
     <input type="text" name="afastamento" class="tabelapt1"style="width: 40%">
     </td>
     </tr>
     <tr>
     <td>
     Data do Pedido:
     <input type="text" name="pedido" class="tabelapt1"style="width: 50%">
     </td>
     <td>
     Assinatura:
     </td>
     </tr>
    </table>
    
    <table class="tabela2">
    <tr> 
    <th class="data">Data da Avaliação</th> 
    <th>Código da Disciplina</th> 
    <th>Docente</th> 
    </tr> 
    <tr> 
    <td><input type="text" name="data1"></td>
     <td><input type="text" name="cod1"></td>
      <td><input type="text" name="docente1"></td> 
      </tr> 

    <td><input type="text" name="data2"></td>
    <td><input type="text" name="cod2"></td>
      <td><input type="text" name="docente2"></td> 
      </tr> 
      
    <td><input type="text" name="data3"></td>
    <td><input type="text" name="cod3"></td>
     <td><input type="text" name="docente3"></td> 
     </tr> 
      
    <td><input type="text" name="data4"></td>
    <td><input type="text" name="cod4"></td>
     <td><input type="text" name="docente4"></td> 
     </tr> 
      
    <td><input type="text" name="data5"></td>
    <td><input type="text" name="cod5"></td>
     <td><input type="text" name="docente5"></td> 
     </tr> 
     
    <td><input type="text" name="data6"></td>
    <td><input type="text" name="cod6"></td>
     <td><input type="text" name="docente6"></td> 
     </tr> 
     
    <td><input type="text" name="data7"></td>
    <td><input type="text" name="cod7"></td>
     <td><input type="text" name="docente7"></td> 
     </tr> 
     
    <td><input type="text" name="data8"></td>
    <td><input type="text" name="cod8"></td>
     <td><input type="text" name="docente8"></td> 
     </tr> 
     
    <td><input type="text" name="data9"></td>
    <td><input type="text" name="cod9"></td>
     <td><input type="text" name="docente9"></td> 
     </tr> 
     
    <td><input type="text" name="data0"></td>
    <td><input type="text" name="cod0"></td>
     <td><input type="text" name="docente0"></td> 
     </tr> 
     
      
      
      </table>
    
      <table class="tabela3">
    <tr>
        <th colspan="3">informações</th>
    </tr>

    <tr>
    <td class="radio">
        <input type="radio" name="opcao1" value="1">
    </td>
    <td>Atestado ou comprovante de atendimento médico ou clínico</td>
</tr>
<tr>
    <td class="radio">
        <input type="radio" name="opcao2" value="2">
    </td>
    <td>Declaração de participação em atividade de representação oficial</td>
</tr>
<tr>
    <td class="radio">
        <input type="radio" name="opcao3" value="3">
    </td>
    <td>Declaração do ambulatório do IFC ou Sisae</td>
</tr>
<tr>
    <td class="radio">
        <input type="radio" name="opcao4" value="4">
    </td>
    <td>Declaração de guarda religiosa</td>
</tr>
<tr>
    <td class="radio">
        <input type="radio" name="opcao5" value="5">
    </td>
    <td class="outros">outros:<textarea></textarea></td>
</tr>


</table>

    
    <table class="tabela4">
    <th colspan="3">raci(ou manifestações do colegial de curso)</th>
    
    <tr colspan="3" class="trdomalrsrs">
    <td><p>parecer do raci(ou </p><p>colegial do curso)</p></td>
    <td><p>devera ser cadastrado no processo SIPAC</p></td>
    </tr>
    </table>
    <div>
    <button type="input" name="btn_gerar" value="Enviar"></button>
    <h3>Estudante:</h3>
    <p>1.	Preencher o requerimento e assinar, preferencialmente, de forma digital;
    <p>

2.	Anexar o comprovante da justificativa para a falta;
</p>
<p>

3.	Enviar conforme orientação no link: https://bit.ly/envio_de_requerimento.

</p>
</div>
</form>
</body>
</html>