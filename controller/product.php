<?php

class Controller_product extends Controller_BaseController{
     
    public function view()
    {
        if (!array_key_exists('id', $this->_params) || empty($this->_params['id'])) {
            header('Location: /error/notFound');
            exit;
        }
        
        $details_model = new Model_shop();
        $results = $details_model->select_details($this->_params['id']);
        $params = array(
            'results' => $results,
        );
        $this->_render($params);
    }
}