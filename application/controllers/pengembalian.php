<?php 
    class pengembalian extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }
        public function index() {
        $this->load->model('m_pengembalian');
        $data['pengembalian'] = $this->m_pengembalian->tampil_data()->result();

        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pengembalian', $data);
		$this->load->view('templates/footer');
        }

        public function tambah() {
        $this->load->model('m_pengembalian');
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pengembalian');
		$this->load->view('templates/footer');
        }

        public function tambah_pengembalian() {
            $this->load->model('m_pengembalian');
            $no_transaksi  = $this->input->post('no_transaksi');
            $tgl_kembali = $this->input->post('tgl_kembali');
            $id_petugas    = $this->input->post('id_petugas');
            $id_penyewa    = $this->input->post('id_penyewa');
            $no_pol        = $this->input->post('no_pol');
            $id_denda      = $this->input->post('id_denda');
            $harga         = $this->input->post('harga');

            $data = array(
                'no_transaksi'              => $no_transaksi,
                'tgl_kembali'               => $tgl_kembali,
                'id_petugas'                => $id_petugas,
                'id_penyewa'                => $id_penyewa,
                'no_pol'                    => $no_pol,
                'id_denda'                  => $id_denda,
                'harga'                     => $harga,

            );

            $this->m_pengembalian->input_data($data, 'pengembalian');
            redirect('pengembalian');
        }

        public function hapus($no_transaksi) {
            $this->load->model('m_pengembalian');
            $where = array('no_transaksi' => $no_transaksi);
            $this->m_pengembalian->hapus_data($where, 'pengembalian');
            redirect('pengembalian');
        }

        public function editpengembalian($no_transaksi) {
            $this->load->model('m_pengembalian');
            $where = array ('no_transaksi' => $no_transaksi);
            $data['pengembalian'] = $this->m_pengembalian->edit_data($where, 'pengembalian')->result();

            $this->load->view('templates/header');
		    $this->load->view('templates/sidebar');
		    $this->load->view('editpengembalian', $data);
		    $this->load->view('templates/footer');
        }

        public function update() {
            $this->load->model('m_pengembalian');
            $no_transaksi  = $this->input->post('no_transaksi');
            $tgl_kembali   = $this->input->post('tgl_kembali');
            $id_petugas    = $this->input->post('id_petugas');
            $id_penyewa    = $this->input->post('id_penyewa');
            $no_pol        = $this->input->post('no_pol');
            $id_denda = $this->input->post('id_denda');
            $harga         = $this->input->post('harga');

            $data = array(
            'no_transaksi'              => $no_transaksi,
            'tgl_kembali'               => $tgl_kembali,
            'id_petugas'                => $id_petugas,
            'id_penyewa'                => $id_penyewa,
            'no_pol'                    => $no_pol,
            'id_denda'                  => $id_denda,
            'harga'                     => $harga,

            );

            $where = array ('no_transaksi' => $no_transaksi);

            $this->m_pengembalian->update_data($where,$data,'pengembalian');
            redirect('pengembalian');
        }
    }
?>