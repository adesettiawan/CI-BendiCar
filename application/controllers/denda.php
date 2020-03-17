<?php 
    class denda extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }
        public function index() {
        $this->load->model('m_denda');
        $data['denda'] = $this->m_denda->tampil_data()->result();

        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('denda', $data);
		$this->load->view('templates/footer');
        }

        public function tambah() {
        $this->load->model('m_denda');
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('denda');
		$this->load->view('templates/footer');
        }

        public function tambah_denda() {
            $this->load->model('m_denda');
            $id_denda       = $this->input->post('id_denda');
            $nama_denda     = $this->input->post('nama_denda');
            $harga_denda    = $this->input->post('harga_denda');
            $ket            = $this->input->post('ket');

            $data = array(
                'id_denda'              => $id_denda,
                'nama_denda'            => $nama_denda,
                'harga_denda'           => $harga_denda,
                'ket'                   => $ket,

            );

            $this->m_denda->input_data($data, 'denda');
            redirect('denda');
        }

        public function hapus($id_denda) {
            $this->load->model('m_denda');
            $where = array('id_denda' => $id_denda);
            $this->m_denda->hapus_data($where, 'denda');
            redirect('denda');
        }

        public function editdenda($id_denda) {
            $this->load->model('m_denda');
            $where = array ('id_denda' => $id_denda);
            $data['denda'] = $this->m_denda->edit_data($where, 'denda')->result();

            $this->load->view('templates/header');
		    $this->load->view('templates/sidebar');
		    $this->load->view('editdenda', $data);
		    $this->load->view('templates/footer');
        }

        public function update() {
            $this->load->model('m_denda');
            $id_denda       = $this->input->post('id_denda');
            $nama_denda     = $this->input->post('nama_denda');
            $harga_denda    = $this->input->post('harga_denda');
            $ket            = $this->input->post('ket');

            $data = array(
            'id_denda'              => $id_denda,
            'nama_denda'            => $nama_denda,
            'harga_denda'           => $harga_denda,
            'ket'                   => $ket,

            );

            $where = array ('id_denda' => $id_denda);

            $this->m_denda->update_data($where,$data,'denda');
            redirect('denda');
        }
    }
?>