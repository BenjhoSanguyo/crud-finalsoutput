<?php 


class Crud extends CI_Controller
{
	
	public function index()
	{
		$data['product_details'] = $this->crud_model->getAllProducts();
		$this->load->view('crud_view', $data);
	}

	public function addProduct(){

		$this->form_validation->set_rules('brand','Product Brand', 'trim|required');
		$this->form_validation->set_rules('price','Product Price', 'trim|required');
		$this->form_validation->set_rules('type','Product Type', 'trim|required');
		$this->form_validation->set_rules('descriptions','descriptions', 'trim|required');


		if ($this->form_validation->run() == false) {
			
			$data_error = [

				'error' => validation_errors() 
			];
			$this->session->set_flashdata($data_error);
		}
		else{
			$result = $this->crud_model->insertProduct([
				'brand' => $this->input->post('brand'),
				'price' => $this->input->post('price'),
				'type' => $this->input->post('type'),
				'descriptions' => $this->input->post('descriptions')

			]);

			if ($result) {
				$this->session->set_flashdata('inserted','New furniture has been successfully added!');
			}
		}
		redirect('crud');
	}

	public function editProduct($id){

		$data['singleProduct'] = $this->crud_model->getSingleProduct($id);

		$this->load->view('edit_view', $data);
	}

	public function update($id){

		$this->form_validation->set_rules('brand','Product Brand', 'trim|required');
		$this->form_validation->set_rules('price','Product Price', 'trim|required');
		$this->form_validation->set_rules('type','Product Type', 'trim|required');
		$this->form_validation->set_rules('descriptions','descriptions', 'trim|required');


		if ($this->form_validation->run() == false) {
			
			$data_error = [

				'error' => validation_errors() 
			];
			$this->session->set_flashdata($data_error);
		}
		else{
			$result = $this->crud_model->updateProduct([
				'brand' => $this->input->post('brand'),
				'price' => $this->input->post('price'),
				'type' => $this->input->post('type'),
				'descriptions' => $this->input->post('descriptions')

			], $id);

			if ($result) {
				$this->session->set_flashdata('updated','furniture details has been successfully updated!');
			}
		}
		redirect('crud');
	}
	public function deleteProduct($id){

		$result = $this->crud_model->deleteItem($id);

		if ($result == true) {
				$this->session->set_flashdata('deleted','The product deleted successfully!');
			}
		redirect('crud');
	}

}

?>