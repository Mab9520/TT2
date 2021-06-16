<?php

require("../includes/funciones.php");
require("../clases/Especialista.php");
require("../clases/Estudiante.php");
require("../clases/pacientes.php");
require('pdfreporte/fpdf.php');

$conexion = conexion("epiz_28894954", "QAGy4WNWlTZ4UX");
$result= $conexion->query("SELECT * from datos");
$mostrar= $result->fetch();

$usuario = Estudiante::usuarioPorId($_GET['id']);
$nombre = $usuario[0]['Nombre'];
$apellido = $usuario[0]['Apellidos'];
class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    //$this->Image('logo.png',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(50);
    // Título
    $this->Cell(100,10,'Test de Ansiedad de Beck',1,0,'C');
    // Salto de línea
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
//---------------------------------------------------------
//PREGUNTA 1
if ($mostrar['pre1'] == 0){
            $pre1="No";
        }elseif ($mostrar['pre1'] == 1) {
           $pre1="Leve";
        }elseif ($mostrar['pre1'] == 2) {
            $pre1="Moderado";
        }elseif ($mostrar['pre1'] == 3) {
            $pre1="Bastante";
        }
//---------------------------------------------------------
//---------------------------------------------------------
//PREGUNTA 2
if ($mostrar['pre2'] == 0){
            $pre2="No";
        }elseif ($mostrar['pre2'] == 1) {
           $pre2="Leve";
        }elseif ($mostrar['pre2'] == 2) {
            $pre2="Moderado";
        }elseif ($mostrar['pre2'] == 3) {
            $pre2="Bastante";
        }
//---------------------------------------------------------
//PREGUNTA 3
if ($mostrar['pre3'] == 0){
            $pre3="No";
        }elseif ($mostrar['pre3'] == 1) {
           $pre3="Leve";
        }elseif ($mostrar['pre3'] == 2) {
            $pre3="Moderado";
        }elseif ($mostrar['pre3'] == 3) {
            $pre3="Bastante";
        }
//---------------------------------------------------------
//PREGUNTA 4
if ($mostrar['pre4'] == 0){
            $pre4="No";
        }elseif ($mostrar['pre4'] == 1) {
           $pre4="Leve";
        }elseif ($mostrar['pre4'] == 2) {
            $pre4="Moderado";
        }elseif ($mostrar['pre4'] == 3) {
            $pre4="Bastante";
        }
//---------------------------------------------------------
//PREGUNTA 5
if ($mostrar['pre5'] == 0){
            $pre5="No";
        }elseif ($mostrar['pre5'] == 1) {
           $pre5="Leve";
        }elseif ($mostrar['pre5'] == 2) {
            $pre5="Moderado";
        }elseif ($mostrar['pre5'] == 3) {
            $pre5="Bastante";
        }
//---------------------------------------------------------
//PREGUNTA 6
if ($mostrar['pre6'] == 0){
            $pre6="No";
        }elseif ($mostrar['pre6'] == 1) {
           $pre6="Leve";
        }elseif ($mostrar['pre6'] == 2) {
            $pre6="Moderado";
        }elseif ($mostrar['pre6'] == 3) {
            $pre6="Bastante";
        }
//---------------------------------------------------------
//PREGUNTA 7
if ($mostrar['pre7'] == 0){
            $pre7="No";
        }elseif ($mostrar['pre7'] == 1) {
           $pre7="Leve";
        }elseif ($mostrar['pre7'] == 2) {
            $pre7="Moderado";
        }elseif ($mostrar['pre7'] == 3) {
            $pre7="Bastante";
        }
//---------------------------------------------------------
//PREGUNTA 8
if ($mostrar['pre8'] == 0){
            $pre8="No";
        }elseif ($mostrar['pre8'] == 1) {
           $pre8="Leve";
        }elseif ($mostrar['pre8'] == 2) {
            $pre8="Moderado";
        }elseif ($mostrar['pre8'] == 3) {
            $pre8="Bastante";
        }
//---------------------------------------------------------
//PREGUNTA 9
if ($mostrar['pre9'] == 0){
            $pre9="No";
        }elseif ($mostrar['pre9'] == 1) {
           $pre9="Leve";
        }elseif ($mostrar['pre9'] == 2) {
            $pre9="Moderado";
        }elseif ($mostrar['pre9'] == 3) {
            $pre9="Bastante";
        }
//---------------------------------------------------------
//PREGUNTA 10
if ($mostrar['pre10'] == 0){
            $pre10="No";
        }elseif ($mostrar['pre10'] == 1) {
           $pre10="Leve";
        }elseif ($mostrar['pre10'] == 2) {
            $pre10="Moderado";
        }elseif ($mostrar['pre10'] == 3) {
            $pre10="Bastante";
        }
//---------------------------------------------------------
//PREGUNTA 11
if ($mostrar['pre11'] == 0){
            $pre11="No";
        }elseif ($mostrar['pre11'] == 1) {
           $pre11="Leve";
        }elseif ($mostrar['pre11'] == 2) {
            $pre11="Moderado";
        }elseif ($mostrar['pre11'] == 3) {
            $pre11="Bastante";
        }
//---------------------------------------------------------
//PREGUNTA 12
if ($mostrar['pre12'] == 0){
            $pre12="No";
        }elseif ($mostrar['pre12'] == 1) {
           $pre12="Leve";
        }elseif ($mostrar['pre12'] == 2) {
            $pre12="Moderado";
        }elseif ($mostrar['pre12'] == 3) {
            $pre12="Bastante";
        }
//---------------------------------------------------------
//PREGUNTA 13
if ($mostrar['pre13'] == 0){
            $pre13="No";
        }elseif ($mostrar['pre13'] == 1) {
           $pre13="Leve";
        }elseif ($mostrar['pre13'] == 2) {
            $pre13="Moderado";
        }elseif ($mostrar['pre13'] == 3) {
            $pre13="Bastante";
        }
//---------------------------------------------------------
//PREGUNTA 14
if ($mostrar['pre14'] == 0){
            $pre14="No";
        }elseif ($mostrar['pre14'] == 1) {
           $pre14="Leve";
        }elseif ($mostrar['pre14'] == 2) {
            $pre14="Moderado";
        }elseif ($mostrar['pre14'] == 3) {
            $pre14="Bastante";
        }
//---------------------------------------------------------
//PREGUNTA 15
if ($mostrar['pre15'] == 0){
            $pre15="No";
        }elseif ($mostrar['pre15'] == 1) {
           $pre15="Leve";
        }elseif ($mostrar['pre15'] == 2) {
            $pre15="Moderado";
        }elseif ($mostrar['pre15'] == 3) {
            $pre15="Bastante";
        }
//---------------------------------------------------------
//PREGUNTA 16
if ($mostrar['pre16'] == 0){
            $pre16="No";
        }elseif ($mostrar['pre16'] == 1) {
           $pre16="Leve";
        }elseif ($mostrar['pre16'] == 2) {
            $pre16="Moderado";
        }elseif ($mostrar['pre16'] == 3) {
            $pre16="Bastante";
        }
//---------------------------------------------------------
//PREGUNTA 17
if ($mostrar['pre17'] == 0){
            $pre17="No";
        }elseif ($mostrar['pre17'] == 1) {
           $pre17="Leve";
        }elseif ($mostrar['pre17'] == 2) {
            $pre17="Moderado";
        }elseif ($mostrar['pre17'] == 3) {
            $pre17="Bastante";
        }
//---------------------------------------------------------
//PREGUNTA 18
if ($mostrar['pre18'] == 0){
            $pre18="No";
        }elseif ($mostrar['pre18'] == 1) {
           $pre18="Leve";
        }elseif ($mostrar['pre18'] == 2) {
            $pre18="Moderado";
        }elseif ($mostrar['pre18'] == 3) {
            $pre18="Bastante";
        }
//---------------------------------------------------------
//PREGUNTA 19
if ($mostrar['pre19'] == 0){
            $pre19="No";
        }elseif ($mostrar['pre19'] == 1) {
           $pre19="Leve";
        }elseif ($mostrar['pre19'] == 2) {
            $pre19="Moderado";
        }elseif ($mostrar['pre19'] == 3) {
            $pre19="Bastante";
        }
//---------------------------------------------------------
//PREGUNTA 20
if ($mostrar['pre20'] == 0){
            $pre20="No";
        }elseif ($mostrar['pre20'] == 1) {
           $pre20="Leve";
        }elseif ($mostrar['pre20'] == 2) {
            $pre20="Moderado";
        }elseif ($mostrar['pre20'] == 3) {
            $pre20="Bastante";
        }
//---------------------------------------------------------
//PREGUNTA 21
if ($mostrar['pre21'] == 0){
            $pre21="No";
        }elseif ($mostrar['pre21'] == 1) {
           $pre21="Leve";
        }elseif ($mostrar['pre21'] == 2) {
            $pre21="Moderado";
        }elseif ($mostrar['pre21'] == 3) {
            $pre21="Bastante";
        }
//---------------------------------------------------------





$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(30,10,'Paciente:');
$pdf->Ln(8);
$pdf->Cell(28);
$pdf->Cell(25,10,$nombre);
$pdf->Ln(8);
$pdf->Cell(28);
$pdf->Cell(10,10,$apellido);
$pdf->Ln(15);
$pdf->Cell(1);
$pdf->Cell(150,10,'1.- Torpe o entumecido.                                          ',1,0,'C');
$pdf->Cell(40,10,$pre1,1,1,'C');
$pdf->Cell(1);
$pdf->Cell(150,10,'2.- Acalorado.                                                           ',1,0,'C');
$pdf->Cell(40,10,$pre2,1,1,'C');
$pdf->Cell(1);
$pdf->Cell(150,10,'3.- Con temblor en las piernas.                              ',1,0,'C');
$pdf->Cell(40,10,$pre3,1,1,'C');
$pdf->Cell(1); 
$pdf->Cell(150,10,'4.- Incapaz de relajarse.                                          ',1,0,'C');
$pdf->Cell(40,10,$pre4,1,1,'C');
$pdf->Cell(1); 
$pdf->Cell(150,10,'5.- Con temor a que ocurra lo peor.                       ',1,0,'C');
$pdf->Cell(40,10,$pre5,1,1,'C');
$pdf->Cell(1); 
$pdf->Cell(150,10,'6.- Mareado, o que se le va la cabeza.                   ',1,0,'C');
$pdf->Cell(40,10,$pre6,1,1,'C');
$pdf->Cell(1); 
$pdf->Cell(150,10,utf8_decode('7.- Con latidos del corazón fuertes y acelerados.'),1,0,'C');
$pdf->Cell(40,10,$pre7,1,1,'C');
$pdf->Cell(1); 
$pdf->Cell(150,10,utf8_decode('8.-  Inestable.                                                            '),1,0,'C');
$pdf->Cell(40,10,$pre8,1,1,'C');
$pdf->Cell(1); 
$pdf->Cell(150,10,utf8_decode('9.- Atemorizado o asustado.                                  '),1,0,'C');
$pdf->Cell(40,10,$pre9,1,1,'C');
$pdf->Cell(1); 
$pdf->Cell(150,10,utf8_decode('10.- Nervioso.                                                               '),1,0,'C');
$pdf->Cell(40,10,$pre10,1,1,'C');
$pdf->Cell(1); 
$pdf->Cell(150,10,utf8_decode('11.- Con sensación de bloqueo.                                 '),1,0,'C');
$pdf->Cell(40,10,$pre11,1,1,'C');
$pdf->Cell(1); 
$pdf->Cell(150,10,utf8_decode('12.- Con temblores en las manos.                              '),1,0,'C');
$pdf->Cell(40,10,$pre12,1,1,'C');
$pdf->Cell(1); 
$pdf->Cell(150,10,utf8_decode('13.- Inquieto, inseguro.                                               '),1,0,'C');
$pdf->Cell(40,10,$pre13,1,1,'C');
$pdf->Cell(1); 
$pdf->Cell(150,10,utf8_decode('14.- Con miedo a perder el control.                            '),1,0,'C');
$pdf->Cell(40,10,$pre14,1,1,'C');
$pdf->Cell(1); 
$pdf->Cell(150,10,utf8_decode('15.- Con sensación de ahogo.                                    '),1,0,'C');
$pdf->Cell(40,10,$pre15,1,1,'C');
$pdf->Cell(1); 
$pdf->Cell(150,10,utf8_decode('16.- Con temor a morir.                                               '),1,0,'C');
$pdf->Cell(40,10,$pre16,1,1,'C');
$pdf->Cell(1); 
$pdf->Cell(150,10,utf8_decode('17.- Con miedo.                                                          '),1,0,'C');
$pdf->Cell(40,10,$pre17,1,1,'C');
$pdf->Cell(1);
$pdf->Cell(150,10,utf8_decode('18.- Con problemas digestivos.                               '),1,0,'C');
$pdf->Cell(40,10,$pre18,1,1,'C');
$pdf->Cell(1);
$pdf->Cell(150,10,utf8_decode('19.- Con desvanecimientos.                                       '),1,0,'C');
$pdf->Cell(40,10,$pre19,1,1,'C');
$pdf->Cell(1);
$pdf->Cell(150,10,utf8_decode('20.- Con rubor facial.                                                   '),1,0,'C');
$pdf->Cell(40,10,$pre20,1,1,'C');
$pdf->Cell(1);
$pdf->Cell(150,10,utf8_decode('21.- Con sudores, fríos o calientes.                          '),1,0,'C');
$pdf->Cell(40,10,$pre21,1,1,'C');


$pdf->Output();
?>