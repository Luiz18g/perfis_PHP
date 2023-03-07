<?php
require_once "dompdf/autoload.inc.php";
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$conteudo = "";
$conteudo .= "<table border = '2' style='background:red'>";
$conteudo .= "<tr>";
$conteudo .= "<td>Nome</td>";
$conteudo .= "<td>E-mail</td>";
$conteudo .= "<td>Cidade</td>";
$conteudo .= "</tr>";
$conteudo .= "<tr>";
$conteudo .= "<td>Luiz</td>";
$conteudo .= "<td>luizgtb1805@gmail.com</td>";
$conteudo .= "<td>Americana</td>";
$conteudo .= "</tr>";
$conteudo .= "<tr>";
$conteudo .= "<td>Marcelo</td>";
$conteudo .= "<td>marcelo1452@gmail.com</td>";
$conteudo .= "<td>SBO</td>";

include_once "conexao.php";
$buscarPainel = "select * from tb_relatorio";
$painelColum = mysqli_query($conexao, $buscarPainel);
while ($coluna = mysqli_fetch_assoc($painelColum)) {
    $conteudo .= "<tr>";
    $conteudo .= "<td> $coluna[Nome]</td>";
    $conteudo .= "<td> $coluna[E-mail]</td>";
    $conteudo .= "<td> $coluna[Cidade]</td>";
    $conteudo .= "</tr>";
}

mysqli_close($conexao);

$conteudo .= "</table>";
$dompdf->loadHtml("$conteudo");
$dompdf->setPaper('A4','landscape');
$dompdf->render();$dompdf->stream();
?>