<?php
defined('BASEPATH') or exit('No direct script access allowed');


class PdfController extends CI_Controller
{

    public function generatePDF()
    {
        // Load model 'Pemasukan_model'
        $this->load->model('Transaksi_model');
        $user_id = $this->session->userdata('id_user');
        $pemasukan = $this->Transaksi_model->get_pemasukan_by_user_id($user_id);

        require_once APPPATH . 'third_party/tcpdf/tcpdf.php';

        $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Your Name');
        $pdf->SetTitle('Data Pemasukan');
        $pdf->SetSubject('Data Pemasukan PDF');


        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);
        $pdf->AddPage();
        $pdf->SetFont('helvetica', '', 12);
        $pdf->Cell(0, 8, 'Data Transaksi', 0, 3, 'C');
        $pdf->SetLineWidth(0.1);
        $pdf->Line(10, $pdf->GetY(), 200, $pdf->GetY());
        $html = '<table border="1" style="align:center;">';
        $html .= '<thead><tr><th>No</th><th>Username</th><th>Jenis Transaksi</th><th>Tanggal</th><th>Jumlah</th></tr></thead>';
        $html .= '<tbody>';
        $no = 1;
        foreach ($pemasukan as $row) {
            $html .= '<tr>';
            $html .= '<td>' . $no++ . '</td>';
            $html .= '<td>' . $row['username'] . '</td>';
            $html .= '<td>' . $row['jenis_transaksi'] . '</td>';
            $html .= '<td>' . $row['tanggal'] . '</td>';
            $html .= '<td>Rp ' . number_format($row['jumlah'], 0, ',', '.') . '</td>';
            $html .= '</tr>';
        }

        $html .= '</tbody>';
        $html .= '</table>';

        // Write the HTML content to the PDF
        $pdf->writeHTML($html, true, false, true, false, '');

        // Output the PDF as a stream to the browser
        $pdf->Output('data_pemasukan.pdf', 'I');
    }

    // Other methods and code...
}
