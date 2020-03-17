<?php 
    class peminjaman extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }
        public function index() {
        $this->load->model('m_peminjaman');
        $data['peminjaman'] = $this->m_peminjaman->tampil_data()->result();

        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('peminjaman', $data);
		$this->load->view('templates/footer');
        }

        public function tambah() {
        $this->load->model('m_peminjaman');
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('peminjaman');
		$this->load->view('templates/footer');
        }

        public function tambah_peminjaman() {
            $this->load->model('m_peminjaman');
            $no_transaksi  = $this->input->post('no_transaksi');
            $tgl_peminjaman = $this->input->post('tgl_peminjaman');
            $id_petugas    = $this->input->post('id_petugas');
            $id_penyewa    = $this->input->post('id_penyewa');
            $no_pol        = $this->input->post('no_pol');
            $lama_peminjaman = $this->input->post('lama_peminjaman');
            $harga         = $this->input->post('harga');
            $jk            = $this->input->post('jk');

            $data = array(
                'no_transaksi'              => $no_transaksi,
                'tgl_peminjaman'             => $tgl_peminjaman,
                'id_petugas'                => $id_petugas,
                'id_penyewa'                => $id_penyewa,
                'no_pol'                    => $no_pol,
                'lama_peminjaman'           => $lama_peminjaman,
                'harga'                     => $harga,
                'jk'                        => $jk,

            );

            $this->m_peminjaman->input_data($data, 'peminjaman');
            redirect('peminjaman');
        }

        public function hapus($no_transaksi) {
            $this->load->model('m_peminjaman');
            $where = array('no_transaksi' => $no_transaksi);
            $this->m_peminjaman->hapus_data($where, 'peminjaman');
            redirect('peminjaman');
        }

        public function editpeminjaman($no_transaksi) {
            $this->load->model('m_peminjaman');
            $where = array ('no_transaksi' => $no_transaksi);
            $data['peminjaman'] = $this->m_peminjaman->edit_data($where, 'peminjaman')->result();

            $this->load->view('templates/header');
		    $this->load->view('templates/sidebar');
		    $this->load->view('editpeminjaman', $data);
		    $this->load->view('templates/footer');
        }

        public function update() {
            $this->load->model('m_peminjaman');
            $no_transaksi  = $this->input->post('no_transaksi');
            $tgl_peminjaman = $this->input->post('tgl_peminjaman');
            $id_petugas    = $this->input->post('id_petugas');
            $id_penyewa    = $this->input->post('id_penyewa');
            $no_pol        = $this->input->post('no_pol');
            $lama_peminjaman = $this->input->post('lama_peminjaman');
            $harga         = $this->input->post('harga');
            $jk            = $this->input->post('jk');

            $data = array(
            'no_transaksi'              => $no_transaksi,
            'tgl_peminjaman'             => $tgl_peminjaman,
            'id_petugas'                => $id_petugas,
            'id_penyewa'                => $id_penyewa,
            'no_pol'                    => $no_pol,
            'lama_peminjaman'           => $lama_peminjaman,
            'harga'                     => $harga,
            'jk'                        => $jk,

            );

            $where = array ('no_transaksi' => $no_transaksi);

            $this->m_peminjaman->update_data($where,$data,'peminjaman');
            redirect('peminjaman');
        }
    }
?>