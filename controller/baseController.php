<?php

class Controller_BaseController
{
    protected $_params = array();

    public function __construct($urlParams)
    {
        $this->genParams($urlParams);
        session_start();
    }
    
    protected function _render($params = array())
    {
        if (!empty($params)) {
            extract($params);
        }
        
        ob_start();
        
        include DOCUMENT_ROOT . DIRECTORY_SEPARATOR
                . 'view' . DIRECTORY_SEPARATOR
                . strtolower($this->_params['controller']) . DIRECTORY_SEPARATOR
                . strtolower($this->_params['action']) . '.php';
        
        $content = ob_get_clean();
        
        include DOCUMENT_ROOT . DIRECTORY_SEPARATOR
                . 'view' . DIRECTORY_SEPARATOR
                . 'baseView.php';
        
        ob_end_flush();
    }
    
    public function genParams($params)
    {
        $this->_params['controller'] = $params[0];
        $this->_params['action'] = $params[1];
        
        if (count($params) === 4) {
            $this->_params[$params[2]] = $params[3];
        }
    }
}
