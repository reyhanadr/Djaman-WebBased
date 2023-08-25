<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// Include librari PhpSpreadsheet
// use PhpOffice\PhpSpreadsheet\Spreadsheet;
// use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


class Asknsugest extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper('url'); 
        $this->load->model('AsknsugestModel');
        $this->load->library('session');
        // $this->load->library('PhpSpreadsheet'); // Load PHPExcel library
        if (!$this->session->userdata('logged_in')) {
            redirect('Admin/loginPage');
        }
    }
    
    public function tampilAsknsugest(){
        $data['active_menu'] = 'asknsugest';
        $data['asknsugest']= $this->AsknsugestModel->getAsknsugest();
        $this->load->view("admin/asknsugest", $data);
        $this->load->view("admin/sidebar", $data);
    }

    // Pastikan Anda telah memuat library PhpSpreadsheet di atasnya, misalnya:
    // use PhpOffice\PhpSpreadsheet\Spreadsheet;
    // use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

    // public function generateExcelAsknSugest(){
    //     $data['records_AsknSugest'] = $this->AsknsugestModel->getAsknsugest(); // Mengambil data dari model
    
    //     // Create new PhpSpreadsheet object
    //     $spreadsheet = new Spreadsheet();
    //     $sheet = $spreadsheet->getActiveSheet();
    //     // Set header style
    //     $headerStyle = [
    //         'font' => [
    //             'bold' => true,
    //             'color' => ['rgb' => 'FFFFFF'], // Warna teks putih
    //         ],
    //         'fill' => [
    //             'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
    //             'startColor' => [
    //                 'rgb' => '0000FF', // Warna latar biru
    //             ],
    //         ],
    //     ];


    //     $sheet->setTitle('Pertanyaan & Saran');
    //     // Generate Excel data from database records
    //     $row = 1;
    //     $sheet->setCellValue('A'.$row, 'Data Excel: Kumpulan Pertanyaan dan Saran');
    //     $row++;
    //     $sheet->setCellValue('A'.$row, 'Tanggal Dicetak: ' . date('d-m-Y H:i:s'));
    //     $row++;
    //     $row++; // Kosongkan baris untuk memberi jarak antara judul dan header tabel
        
    //     $row++; // Baris judul header tabel
    //     $sheet->setCellValue('A'.$row, 'Nama');
    //     $sheet->setCellValue('B'.$row, 'Email');
    //     $sheet->setCellValue('C'.$row, 'Phone');
    //     $sheet->setCellValue('D'.$row, 'Subjek Pesan');
    //     $sheet->setCellValue('E'.$row, 'Isi Pesan');

    
    //     // Set column width based on content length
    //     $sheet->getColumnDimension('A')->setWidth(20); // Kolom A lebar 20
    //     $sheet->getColumnDimension('B')->setWidth(30); // Kolom B lebar 30
    //     $sheet->getColumnDimension('C')->setWidth(15); // Kolom C lebar 15
    //     $sheet->getColumnDimension('D')->setWidth(25); // Kolom D lebar 25
    //     $sheet->getColumnDimension('E')->setWidth(50); // Kolom E lebar 50
    
    //     // Apply style to header row
    //     $sheet->getStyle('A5:E5')->applyFromArray($headerStyle);
    
    //     foreach ($data['records_AsknSugest'] as $record) {
    //         $row++;
    //         $sheet->setCellValue('A'.$row, $record->nama);
    //         $sheet->setCellValue('B'.$row, $record->email);
    //         $sheet->setCellValue('C'.$row, $record->phone);
    //         $sheet->setCellValue('D'.$row, $record->subject);
    //         $sheet->setCellValue('E'.$row, $record->message);
    //     }
    
    //     // Save Excel file
    //     $filename = 'records_PertanyaanSaran' . date('YmdHis') . '.xlsx';
    //     $path = './assets/excel_files/' . $filename;
    //     $writer = new Xlsx($spreadsheet);
    //     $writer->save($path);
    
    //     $file = FCPATH . 'assets/excel_files/' . $filename; // FCPATH mengambil path direktori root proyek
    
    //     if (file_exists($file)) {
    //         header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    //         header('Content-Disposition: attachment; filename="' . $filename . '"');
    //         header('Cache-Control: max-age=0');
    //         readfile($file);
    //     } else {
    //         show_404(); // Tampilkan halaman 404 jika file tidak ditemukan
    //     }
    // }
    

    

}