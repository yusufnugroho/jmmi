<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Download extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_mentor');
		$this->load->model('m_mente');
		$this->load->model('m_dosen');
		$this->load->model('m_kj');
	}

	public function nilai(){
		$this->load->model('universal');
		$data = $this->universal->getall('mente');
		$this->load->library('excel');
		$this->excel->setActiveSheetIndex(0);
		$this->excel->getActiveSheet()->mergeCells('A1:D1');
		$this->excel->getActiveSheet()->setCellValue('A1', 'Nilai Mentoring Mahasiswa ITS');
		$this->excel->getActiveSheet()->setCellValue('A2', 'NO');
		$this->excel->getActiveSheet()->setCellValue('B2', 'NRP');
		$this->excel->getActiveSheet()->setCellValue('C2', 'Nama');
		$this->excel->getActiveSheet()->setCellValue('D2', 'Nilai');
		$this->excel->getActiveSheet()->setTitle('Nilai Mentoring Mahasiswa ITS');
		$rowCount = 3;
		$no = 1;
		foreach ($data as $row) {
			# code...
			$this->excel->getActiveSheet()->SetCellValue('A'.$rowCount, $no); 
			$this->excel->getActiveSheet()->SetCellValue('B'.$rowCount, $row->NRP_MENTE); 
		    $this->excel->getActiveSheet()->SetCellValue('C'.$rowCount, $row->NAMA_DEPAN_MENTE." ".$row->NAMA_BELAKANG_MENTE); 
		    $this->excel->getActiveSheet()->SetCellValue('D'.$rowCount, $row->NILAI_MENTE); 
		    $rowCount++;
		    $no++;
		}
		$filename='Nilai Mentoring Mahasiswa.xlsx'; //save our workbook as this file name
		header('Content-Type: application/vnd.ms-excel'); //mime type
		header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name
		header('Cache-Control: max-age=0'); //no cache
		            
		//save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
		//if you want to save it as .XLSX Excel 2007 format
		$objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel2007');  
		//force user to download the Excel file without writing it to server's HD
		$objWriter->save('php://output');
	}
}
?>