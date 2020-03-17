<?php 
    class petugas extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }
        public function index() {
        $this->load->model('m_petugas');
        $data['petugas'] = $this->m_petugas->tampil_data()->result();

        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('petugas', $data);
		$this->load->view('templates/footer');
        }

        public function tambah() {
        $this->load->model('m_petugas');
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('petugas');
		$this->load->view('templates/footer');
        }

        public function tambah_petugas() {
            $this->load->model('m_petugas');
            $id_petugas = $this->input->post('id_petugas');
            $nm_petugas = $this->input->post('nm_petugas');
            $jk = $this->input->post('jk');
            $jabatan = $this->input->post('jabatan');
            $gaji = $this->input->post('gaji');

            $data = array(
                'id_petugas'        => $id_petugas,
                'nm_petugas'        => $nm_petugas,
                'jk'                => $jk,
                'jabatan'           => $jabatan,
                'gaji'              => $gaji,
            );

            $this->m_petugas->input_data($data, 'petugas');
            redirect('petugas');
        }

        public function hapus($id_petugas) {
            $this->load->model('m_petugas');
            $where = array('id_petugas' => $id_petugas);
            $this->m_petugas->hapus_data($where, 'petugas');
            redirect('petugas');
        }

        public function editpetugas($id_petugas) {
            $this->load->model('m_petugas');
            $where = array ('id_petugas' => $id_petugas);
            $data['petugas'] = $this->m_petugas->edit_data($where, 'petugas')->result();

            $this->load->view('templates/header');
		    $this->load->view('templates/sidebar');
		    $this->load->view('editpetugas', $data);
		    $this->load->view('templates/footer');
        }

        public function update() {
            $this->load->model('m_petugas');
            $id_petugas = $this->input->post('id_petugas');
            $nm_petugas = $this->input->post('nm_petugas');
            $jk = $this->input->post('jk');
            $jabatan = $this->input->post('jabatan');
            $gaji = $this->input->post('gaji');

            $data = array(
                'id_petugas'        => $id_petugas,
                'nm_petugas'        => $nm_petugas,
                'jk'                => $jk,
                'jabatan'           => $jabatan,
                'gaji'              => $gaji,
            );

            $where = array ('id_petugas' => $id_petugas);

            $this->m_petugas->update_data($where,$data,'petugas');
            redirect('petugas');
        }

        public function detailpetugas($id_petugas){
            $this->load->model('m_petugas');
            $detailpetugas = $this->m_petugas->detail_data($id_petugas);
            $data['detailpetugas'] = $detailpetugas;
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('detailpetugas', $data);
            $this->load->view('templates/footer');
            }
    }
?>