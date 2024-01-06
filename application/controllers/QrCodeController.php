<?php
// application/controllers/QrCodeController.php

defined('BASEPATH') or exit('No direct script access allowed');

use CodeIgniter\Controller;

class QrCodeController extends CI_Controller
{

    public function generateQRCode()
    {
        $this->load->library('ciqrcode');

        // QR code data
        $data = 'congrulation scanning was successfully done ';

        // QR code filename
        $filename = 'loremipsum.png';

        // Generate QR code and save it to the specified path
        $params['data'] = $data;
        $params['level'] = 'H';
        $params['size'] = 1024;
        $params['savename'] = FCPATH . 'uploads/qrcodes/' . $filename;

        $this->ciqrcode->generate($params);
        // Load a view or do additional processing as needed

        // Load the view in your controller
        $this->load->view('qr_code_view', ['imagePath' => base_url('uploads/qrcodes/' . $filename)]);
    }
}
