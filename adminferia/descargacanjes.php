<?php
// CREATE PHPSPREADSHEET OBJECT
require "phpspreadsheet/vendor/autoload.php";
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

//DATABASE
include_once '../dbConnection.php';

//FORM FROM descargas.php --> promedio_plantel_xls
//if(isset($_POST["pobBen_xls"]) && isset($_POST['ciclo'])){


  $sql = "SELECT c.emprendimiento,c.email,c.nombre,c.apellidos,c.direccion,cp.descripcion,c.telefono,CONVERT_TZ(c.fecha,'+00:00','-05:00') FROM CANJE c, CTLGO_PREMIO cp where c.id_premio=cp.id";


  //CHECK MORE THAN ONE ROW
  $result = mysqli_query($con, $sql);
  if (mysqli_num_rows($result) > 0) {

    // CREATE A NEW SPREADSHEET + SET METADATA
    $spreadsheet = new Spreadsheet();
    $spreadsheet->getProperties()
    ->setCreator('Fundación Educa')
    ->setLastModifiedBy('Fundación Educa')
    ->setTitle('Canje de premios Feria EDUCA 2020')
    ->setSubject('Premios Canjeados')
    ->setDescription('Premios Canjeados')
    ->setCategory('Premios Canjeados');

    // NEW WORKSHEET
    $sheet = $spreadsheet->getActiveSheet();
    $sheet->setTitle('Premios canjeados Feria');

    //POPULATE WORKSHEET
    //HEADER
    $sheet->setCellValue('A1', 'Emprendimiento');
    $sheet->setCellValue('B1', 'Correo electrónico');
    $sheet->setCellValue('C1', 'Nombre');
    $sheet->setCellValue('D1', 'Apellidos');
    $sheet->setCellValue('E1', 'Dirección');
    $sheet->setCellValue('F1', 'Premio');
    $sheet->setCellValue('G1', 'Teléfono');
    $sheet->setCellValue('H1', 'Fecha de canje');
    
    

    //STYLE FOR HEADER
    //ALINEAR HORIZONTAL
    $spreadsheet->getActiveSheet()->getStyle('A1:H1')
    ->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
    //BACKGROUND AZUL
    $spreadsheet->getActiveSheet()->getStyle('A1:H1')->getFill()
    ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
    ->getStartColor()->setRGB('4F52BA');
    //TEXTO BLANCO
    $spreadsheet->getActiveSheet()->getStyle('A1:H1')
    ->getFont()->getColor()->setRGB('FFFFFF');
    //TEXTO NEGRITAS
    $spreadsheet->getActiveSheet()->getStyle('A1:H1')
    ->getFont()->setBold(true);
    //TAMAÑO LETRA
    $spreadsheet->getActiveSheet()->getStyle('A1:H1')
    ->getFont()->setSize('14');
    //DIMENSION DE LA CELDA PARA MOSTRAR INFORMACION COMPLETA
    $spreadsheet->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
    $spreadsheet->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
    $spreadsheet->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
    $spreadsheet->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
    $spreadsheet->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
    $spreadsheet->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
    $spreadsheet->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
    $spreadsheet->getActiveSheet()->getColumnDimension('H')->setAutoSize(true);


    //DATA
    $n = 2;
    while ($row = mysqli_fetch_array($result)) {
        $sheet->setCellValue('A'.$n, $row["emprendimiento"]);
        $sheet->setCellValue('B'.$n, $row["email"]);
        $sheet->setCellValue('C'.$n, $row["nombre"]);
        $sheet->setCellValue('D'.$n, $row["apellidos"]);
        $sheet->setCellValue('E'.$n, $row["direccion"]);
        $sheet->setCellValue('F'.$n, $row["descripcion"]);
        $sheet->setCellValue('G'.$n, $row["telefono"]);
        $sheet->setCellValue('H'.$n, $row["CONVERT_TZ(c.fecha,'+00:00','-05:00')"]);
        $n++;
    }//END WHILE

    // OUTPUT
    $writer = new Xlsx($spreadsheet);

    //FORCE DOWNLOAD
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="Premios Canjeados-Feria EDUCA,Ahorra y Emprende 2020.xlsx"');
    header('Cache-Control: max-age=0');
    header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
    header('Cache-Control: cache, must-revalidate');
    header('Pragma: public');
    $writer->save('php://output');

  }else {
    header("Location: canjes.php?errordescarga=true");
  }//END IF
//}//END IFSET
?>
