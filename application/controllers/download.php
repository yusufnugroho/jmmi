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
		$this->load->model('m_download');
		$data = $this->m_download->select();
		$this->load->library('excel');
		$this->excel->setActiveSheetIndex(0);
		$this->excel->getActiveSheet()->mergeCells('A1:D1');
		$this->excel->getActiveSheet()->setCellValue('A1', 'Nilai Mentoring Mahasiswa ITS');
		$this->excel->getActiveSheet()->setCellValue('A2', 'NO');
		$this->excel->getActiveSheet()->setCellValue('B2', 'NRP');
		$this->excel->getActiveSheet()->setCellValue('C2', 'Nama');
		$this->excel->getActiveSheet()->setCellValue('D2', 'Mentor');
		$this->excel->getActiveSheet()->setCellValue('E2', 'Dosen');
		$this->excel->getActiveSheet()->mergeCells('F1:H1');
		$this->excel->getActiveSheet()->setCellValue('F1', 'SCREENING MENTORING');
		$this->excel->getActiveSheet()->setCellValue('F2', 'Tes Tulis');
		$this->excel->getActiveSheet()->setCellValue('G2', 'Kuisioner');
		$this->excel->getActiveSheet()->setCellValue('H2', 'Tilawah');
		$this->excel->getActiveSheet()->mergeCells('I1:K1');
		$this->excel->getActiveSheet()->setCellValue('F1', 'SCREENING MENTORING');
		$this->excel->getActiveSheet()->setCellValue('I2', 'E_GOM');
		$this->excel->getActiveSheet()->setCellValue('J2', 'E_MA');
		$this->excel->getActiveSheet()->setCellValue('K2', 'E_MK');
		$this->excel->getActiveSheet()->mergeCells('L1:U1');
		$this->excel->getActiveSheet()->setCellValue('L1', 'Pertemuan');
		$this->excel->getActiveSheet()->setCellValue('L2', '1');
		$this->excel->getActiveSheet()->setCellValue('M2', '2');
		$this->excel->getActiveSheet()->setCellValue('N2', '3');
		$this->excel->getActiveSheet()->setCellValue('O2', '4');
		$this->excel->getActiveSheet()->setCellValue('P2', '5');
		$this->excel->getActiveSheet()->setCellValue('Q2', '6');
		$this->excel->getActiveSheet()->setCellValue('R2', '7');
		$this->excel->getActiveSheet()->setCellValue('S2', '8');
		$this->excel->getActiveSheet()->setCellValue('T2', '9');
		$this->excel->getActiveSheet()->setCellValue('U2', '10');
		$this->excel->getActiveSheet()->mergeCells('V1:X1');
		$this->excel->getActiveSheet()->setCellValue('V1', 'UAS MENTORING');
		$this->excel->getActiveSheet()->setCellValue('V2', 'Tulis');
		$this->excel->getActiveSheet()->setCellValue('W2', 'Kuisioner');
		$this->excel->getActiveSheet()->setCellValue('X2', 'Tilawah');
		$this->excel->getActiveSheet()->mergeCells('Y1:Z1');
		$this->excel->getActiveSheet()->setCellValue('Y1', 'Nilai Akhir');
		$this->excel->getActiveSheet()->setCellValue('Y2', 'Angka');
		$this->excel->getActiveSheet()->setCellValue('Z2', 'Huruf');
		$this->excel->getActiveSheet()->setTitle('Nilai Mentoring Mahasiswa ITS');
		$rowCount = 3;
		$no = 1;
		foreach ($data as $row) {
			# code...
			$this->excel->getActiveSheet()->SetCellValue('A'.$rowCount, $no); 
			$this->excel->getActiveSheet()->SetCellValue('B'.$rowCount, $row['nrp_mente']); 
		    $this->excel->getActiveSheet()->SetCellValue('C'.$rowCount, $row['NAMA_DEPAN_MENTE']." ".$row['NAMA_BELAKANG_MENTE']); 
		    $this->excel->getActiveSheet()->SetCellValue('D'.$rowCount, $row['nama_depan_mentor']." ".$row['nama_belakang_mentor']); 
		    $this->excel->getActiveSheet()->SetCellValue('E'.$rowCount, $row['nama_depan_dosen']." ".$row['nama_belakang_dosen']); 
		    $this->excel->getActiveSheet()->SetCellValue('F'.$rowCount, $row['TES_TULIS']); 
		    $this->excel->getActiveSheet()->SetCellValue('G'.$rowCount, $row['QUISIONER']); 
		    $this->excel->getActiveSheet()->SetCellValue('H'.$rowCount, $row['TILAWAH']); 
		    $this->excel->getActiveSheet()->SetCellValue('I'.$rowCount, $row['E_GOM']); 
		    $this->excel->getActiveSheet()->SetCellValue('J'.$rowCount, $row['E_MA']); 
		    $this->excel->getActiveSheet()->SetCellValue('K'.$rowCount, $row['E_MK']); 
		    $this->excel->getActiveSheet()->SetCellValue('L'.$rowCount, $row['KEHADIRAN_1']); 
		    $this->excel->getActiveSheet()->SetCellValue('M'.$rowCount, $row['KEHADIRAN_2']); 
		    $this->excel->getActiveSheet()->SetCellValue('N'.$rowCount, $row['KEHADIRAN_3']);
		    $this->excel->getActiveSheet()->SetCellValue('O'.$rowCount, $row['KEHADIRAN_4']); 
		    $this->excel->getActiveSheet()->SetCellValue('P'.$rowCount, $row['KEHADIRAN_5']); 
		    $this->excel->getActiveSheet()->SetCellValue('Q'.$rowCount, $row['KEHADIRAN_6']); 
		    $this->excel->getActiveSheet()->SetCellValue('R'.$rowCount, $row['KEHADIRAN_7']); 
		    $this->excel->getActiveSheet()->SetCellValue('S'.$rowCount, $row['KEHADIRAN_8']);
		    $this->excel->getActiveSheet()->SetCellValue('T'.$rowCount, $row['KEHADIRAN_9']); 
		    $this->excel->getActiveSheet()->SetCellValue('U'.$rowCount, $row['KEHADIRAN_10']); 
		    $this->excel->getActiveSheet()->SetCellValue('V'.$rowCount, $row['UAS_TULIS']);
		    $this->excel->getActiveSheet()->SetCellValue('W'.$rowCount, $row['UAS_KUIS']); 
		    $this->excel->getActiveSheet()->SetCellValue('X'.$rowCount, $row['UAS_TILAWAH']); 
		    $this->excel->getActiveSheet()->SetCellValue('Y'.$rowCount, 0.15*$row['nilai_bpm']+0.4*$row['kehadiran']+0.15*$row['UAS_TILAWAH']+0.3*$row['nilai_uas']); 
		    $this->excel->getActiveSheet()->SetCellValue('Z'.$rowCount, $row['NILAI_HURUF']); 
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