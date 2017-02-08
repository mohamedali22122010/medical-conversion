<?php
namespace Hagag\MedicalConversion;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
class MedicalConversionController extends Controller
{

    public function register()
    {
        include __DIR__.'/routes.php';
        $this->app->make('Hagag\MedicalConversion\MedicalConversionController');
    }

    public function index()
    {
    }

}