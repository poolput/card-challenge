<?php
namespace App\Controllers;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 * class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 *
 * @package CodeIgniter
 */
use CodeIgniter\Controller;
use App\Models\AuthenticationModel;
use App\Models\ConfigurationModel;

class BaseController extends Controller
{

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation.
     * These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = [
        'date',
        'option',
        'location',
        'period',
        'format',
        'color'
    ];

    public $data = array();

    public $session = array();

    public $authentication = array();

    protected $configuration = array();

    /**
     * Constructor.
     */
    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);

        $this->router = \Config\Services::router();
        $this->session = \Config\Services::session();

        $this->data['base_url'] = base_url();

        // set default value meta tag
        $this->data['title'] = TITLE;
        $this->data['description'] = DESCRIPTION;
        $this->data['keywords'] = KEYWORD;

        helper('cookie');

        $data['name'] = 'email';
        $data['value'] = 1;
        $data['expire'] = (30 * 24 * 60 * 60);
        $data['secure'] = TRUE;
        $data['domain'] = "domain.com";
        set_cookie($data);

        get_cookie('email');
    }
}
