<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use Dompdf\Dompdf;


//Load Composer's autoloader
require 'vendor/autoload.php';


//Recebe os dados do formulário
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
//var_dump($dados);
$conteudo_pdf = "";

if (!empty($dados['btn_gerar'])) {
    $conteudo_pdf .= "<!DOCTYPE html>";
$conteudo_pdf .= "<html lang='pt-br'>";
$conteudo_pdf .= "<head>";
$conteudo_pdf .= "<meta charset='UTF-8'>";
$conteudo_pdf .= "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
$conteudo_pdf .= "<title>tabela 1</title>";
$conteudo_pdf .= "<style>";
$conteudo_pdf .= "
    h3{
        margin-left: 20%;
        margin-right: 50%;
        white-space: nowrap;
        width: 20%; 
    }
    
    .titulo{ 
        text-align: center;
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
        background-color: white-space;
    }
        
    h1,h2,h3,h4,h5{
        font-size: 10px;
    }
    
    p{
        font-size: 8px;
    }
    
    tr, td, th{
        white-space: nowrap;
    }
    
    td{
        font-size: 10px;
    }
    
    th{
        font-size: 12px;
        color: white;
        text-align: center;
        background-color: green;
    }
    
    .tabela1{
        margin-top: none;
        padding: 6px;
    }
    
    .tabela2{
        margin-top: 30px;
        width: 100%;
        padding: 5px; 
    }

    .tabela2 input {
        width: 99%;
    }
    
    .tabela3{
        margin-top: 30px;
        width: 100%;
    }
    
    .tabela4{
        margin-top: 30px;
        width: 100%;
    }
    
    .tabelapt1{ 
        width: 38%; 
    }
    
    tr{
        border: 1px solid black;
    }
    
    input{
        width: 38%; 
        border: none; 
        width: 90%;
    }
    
    .trtabela2{
        text-align: center;
    }
    
    td{
        border: 1px solid black;
    }
    
    .trdomalrsrs{
        height: 100px;
    }
    
    .data{
         padding: 4px;
    }
    
    .radio{
        width: 10px;
    }
    
    div{
       margin-left: 50px;
       font-size: 10px;
    }
    
    textarea{
        height: 10px;
        border: none; 
    }
";
$conteudo_pdf .= "</style>";
$conteudo_pdf .= "</head>";
$conteudo_pdf .= "<body>";
$conteudo_pdf .= "<img src='https://cecom.ifc.edu.br/logotipos-do-ifc/'>";
$conteudo_pdf .= "<h3>NOVA AVALIAÇÃO EM CASO DE FALTA JUSTIFICADA</h3>";
$conteudo_pdf .= "<p class='titulo'>Referência: Organização Didática do IFC – Resolução 10/2021 – Art. 222\n\nIdentificação do estudante</p>";
$conteudo_pdf .= "<table class='tabela1'>";
$conteudo_pdf .= "<tr>";
$conteudo_pdf .= "<th colspan='3'>informações</th>";
$conteudo_pdf .= "</tr>";
$conteudo_pdf .= "<tr class='1'>";
$conteudo_pdf .= "<td>". "Nome: " . $dados['nome'] ."</td>";
$conteudo_pdf .= "<td>". "Nº Matricula: " . $dados['matricula'] ."</td>";
$conteudo_pdf .= "</tr>";
$conteudo_pdf .= "<tr>";
$conteudo_pdf .= "<td>". "Curso: " . $dados['curso'] ."</td>";
$conteudo_pdf .= "<td>". "Ano/Semestre Ingresso: " . $dados['ingresso'] ."</td>";
$conteudo_pdf .= "</tr>";
$conteudo_pdf .= "<tr>";
$conteudo_pdf .= "<td>". "Email: " . $dados['email'] ."</td>";
$conteudo_pdf .= "<td>". "Tempo de Afastamento: " . $dados['afastamento'] ."</td>";
$conteudo_pdf .= "</tr>";
$conteudo_pdf .= "<tr>";
$conteudo_pdf .= "<td>". "Data do Pedido: " . $dados['pedido'] ."</td>";
$conteudo_pdf .= "<td>assinatura:</td>";
$conteudo_pdf .= "</tr>";
$conteudo_pdf .= "</table>";
$conteudo_pdf .= "<table class='tabela2'>";
$conteudo_pdf .= "<tr>";
$conteudo_pdf .= "<th class='data'>Data da Avaliação</th>";
$conteudo_pdf .= "<th>Código da Disciplina</th>";
$conteudo_pdf .= "<th>Docente</th>";
$conteudo_pdf .= "</tr>";
$conteudo_pdf .= "<tr>" . "<td>" . $dados['data1'] . "</td>" . "<td>" . $dados['cod1'] . "</td>" . "<td>" . $dados['docente1'] . "</td>" . "</tr>";
$conteudo_pdf .= "<tr>" . "<td>" . $dados['data2'] . "</td>" . "<td>" . $dados['cod2'] . "</td>" . "<td>" . $dados['docente2'] . "</td>" . "</tr>";
$conteudo_pdf .= "<tr>" . "<td>" . $dados['data3'] . "</td>" . "<td>" . $dados['cod3'] . "</td>" . "<td>" . $dados['docente3'] . "</td>" . "</tr>";
$conteudo_pdf .= "<tr>" . "<td>" . $dados['data4'] . "</td>" . "<td>" . $dados['cod4'] . "</td>" . "<td>" . $dados['docente4'] . "</td>" . "</tr>";
$conteudo_pdf .= "<tr>" . "<td>" . $dados['data5'] . "</td>" . "<td>" . $dados['cod5'] . "</td>" . "<td>" . $dados['docente5'] . "</td>" . "</tr>";
$conteudo_pdf .= "<tr>" . "<td>" . $dados['data6'] . "</td>" . "<td>" . $dados['cod6'] . "</td>" . "<td>" . $dados['docente6'] . "</td>" . "</tr>";
$conteudo_pdf .= "<tr>" . "<td>" . $dados['data7'] . "</td>" . "<td>" . $dados['cod7'] . "</td>" . "<td>" . $dados['docente7'] . "</td>" . "</tr>";
$conteudo_pdf .= "<tr>" . "<td>" . $dados['data8'] . "</td>" . "<td>" . $dados['cod8'] . "</td>" . "<td>" . $dados['docente8'] . "</td>" . "</tr>";
$conteudo_pdf .= "<tr>" . "<td>" . $dados['data9'] . "</td>" . "<td>" . $dados['cod9'] . "</td>" . "<td>" . $dados['docente9'] . "</td>" . "</tr>";
$conteudo_pdf .= "<tr>" . "<td>" . $dados['data0'] . "</td>" . "<td>" . $dados['cod0'] . "</td>" . "<td>" . $dados['docente0'] . "</td>" . "</tr>";
$conteudo_pdf .= "</table>";
$conteudo_pdf .= "<table class='tabela3'>";
$conteudo_pdf .= "<tr>";
$conteudo_pdf .= "<th colspan='3'>informações</th>";
$conteudo_pdf .= "</tr>";
$dados = array(
    '1' => 'off',    
    '2' => 'off',   
    '3' => 'off',   
    '4' => 'off',   
    '5' => 'off'   
);
 
if (!empty($dados) && isset($dados['1'])) {
    $conteudo_pdf .= "<tr>
        <td class='radio'>
            <input type='radio' name='opcao1' value='1'" . ($dados['1'] === 'on' ? ' checked' : '') . ">
        </td>
        <td>Atestado ou comprovante de atendimento médico ou clínico</td>
    </tr>";
}

if (!empty($dados) && isset($dados['2'])) {
    $conteudo_pdf .= "<tr>
        <td class='radio'>
            <input type='radio' name='opcao2' value='2'" . ($dados['2'] === 'on' ? ' checked' : '') . ">
        </td>
        <td>Declaração de participação em atividade de representação oficial</td>
    </tr>";
}

if (!empty($dados) && isset($dados['3'])) {
    $conteudo_pdf .= "<tr>
        <td class='radio'>
            <input type='radio' name='opcao3' value='3'" . ($dados['3'] === 'on' ? ' checked' : '') . ">
        </td>
        <td>Declaração do ambulatório do IFC ou Sisae</td>
    </tr>";
}

if (!empty($dados) && isset($dados['4'])) {
    $conteudo_pdf .= "<tr>
        <td class='radio'>
            <input type='radio' name='opcao4' value='4'" . ($dados['4'] === 'on' ? ' checked' : '') . ">
        </td>
        <td>Declaração de guarda religiosa</td>
    </tr>";
}

if (!empty($dados) && isset($dados['5'])) {
    $conteudo_pdf .= "<tr>
        <td class='radio'>
            <input type='radio' name='opcao5' value='5'" . ($dados['5'] === 'on' ? ' checked' : '') . ">
        </td>
        <td class='outros'>outros:<textarea></textarea></td>
    </tr>";
}
$conteudo_pdf .= "</table>";

$mail = new PHPMailer(true);

try {
    //echo $conteudo_pdf;
    //Instanciar e usar a classe dompdf
    $dompdf = new Dompdf();

    //Chamar o metodo loadHtml e enviar o conteudo do PDF
    $dompdf->loadHtml($conteudo_pdf);

    //Configurar o tamanho ea orientação do papel
    //landscape - Imprimir no formato paisagem
    //portrait - Imprimir no formato retrato
    $dompdf->setPaper('A4', 'portrait');

    //Renderizar o HTML como PDF
    $dompdf->render();

    // Defina o nome do arquivo PDF gerado
    $filename = 'meu_arquivo.pdf';

    //Gerar o PDF
    $dompdf->stream($filename);
    $pdfString = $dompdf->output();


    //Server settings
    
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'evaristoluizthiago@gmai.com';                     //SMTP username
    $mail->Password   = 'rnybvggnuwmundlg';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('evaristoluizthiago@gmail.com', 'PDF Site');
    $mail->addAddress('eluizthiago@gmail.com', 'Joe User');     //Add a recipient
    //Attachments
    $mail->addAttachment($dompdf->$filename . '.pdf', 'pdf seg. chamada');    //Optional name
    $mail->addStringAttachment($pdfString, 'php.pdf');
   
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Titulo do email';
    $mail->Body    = 'Corpo do email';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'email enviado com sucesso';
} catch (Exception $e) {
    echo "email não enviado {$mail->ErrorInfo}";
}


    


    //echo $conteudo_pdf;
    //Instanciar e usar a classe dompdf
    $dompdf = new Dompdf();

    //Chamar o metodo loadHtml e enviar o conteudo do PDF
    $dompdf->loadHtml($conteudo_pdf);

    //Configurar o tamanho ea orientação do papel
    //landscape - Imprimir no formato paisagem
    //portrait - Imprimir no formato retrato
    $dompdf->setPaper('A4', 'portrait');

    //Renderizar o HTML como PDF
    $dompdf->render();

    // Defina o nome do arquivo PDF gerado
    $filename = 'meu_arquivo.pdf';

    //Gerar o PDF
    $dompdf->stream($filename);
   
} else{
    header("Location: index.php");
}

