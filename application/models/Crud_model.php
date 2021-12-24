<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_model extends CI_Model {

	public function __construct()	{
		$this->load->database();
	}


	function scrapTexto(){
		include('simple_html_dom.php');
		$html = file_get_html("https://quotes.toscrape.com/");

		foreach($html->find('.quote') as $quote) {
      $texto = $quote->find('span[class="text"]', 0)->plaintext;
      $autor = $quote->find('small[class="author"]', 0)->plaintext;
      $tag = $quote->find('div[class="tags"]', 0)->plaintext;
      $tag = str_replace('Tags:', ' ', $tag);
      $tag = preg_replace('/\s+/', ' ', $tag);
			
			$data = array (
				'texto' => $texto, 
				'autor' => $autor,
				'tag' => $tag
			);
			$this->db->insert('quotes', $data);
	}
}

	function createData() {
		$data = array (
			'texto' =>$this->input->post('texto'),
			'autor' =>$this->input->post('autor'),
			'tag' =>$this->input->post('tag')
		);
		$this->db->insert('quotes', $data);

		}

		function getAllData(){
			$query = $this->db->query('SELECT * FROM quotes');
			return $query->result();
		}

		function getData($id){
			$query = $this->db->query('SELECT * FROM quotes WHERE `id` = ' . $id);
			return $query->row();


		}

		function updateData($id){
			$data = array (
				'texto' =>$this->input->post('texto'),
				'autor' =>$this->input->post('autor'),
				'tag' =>$this->input->post('tag')
			);
			$this->db->where('id', $id);
			$this->db->update('quotes', $data);
		}

		function deleteData($id){
			$this->db->where('id', $id);
			$this->db->delete('quotes');
		}
}
