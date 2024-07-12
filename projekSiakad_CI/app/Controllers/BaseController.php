<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var list<string>
     */
    protected $helpers = ['auth'];

    /**
     * Be sure to declare properties for any property fetch you initialized.
     * The creation of dynamic property is deprecated in PHP 8.2.
     */
    // protected $session;

    /**
     * @return void
     */

    protected $kelasModel;
    protected $guruModel;
    protected $siswaModel;
    protected $kegiatanModel;
    protected $jadwalModel;
    protected $administrasiModel;
    protected $pencapaianModel;
    protected $indikatorModel;
    protected $usersModel;
    protected $artikelModel;
    protected $kalenderModel;


    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.

        // E.g.: $this->session = \Config\Services::session();

        $this->kelasModel = new \App\Models\kelasModel();
        $this->guruModel = new \App\Models\guruModel();
        $this->siswaModel = new \App\Models\siswaModel();
        $this->kegiatanModel = new \App\Models\kegiatanModel();
        $this->jadwalModel = new \App\Models\jadwalModel();
        $this->administrasiModel = new \App\Models\administrasiModel();
        $this->pencapaianModel = new \App\Models\pencapaianModel();
        $this->indikatorModel = new \App\Models\indikatorModel();
        $this->usersModel = new \App\Models\usersModel();
        $this->kalenderModel = new \App\Models\kalenderModel();
        $this->artikelModel = new \App\Models\artikelModel();
    }
}
