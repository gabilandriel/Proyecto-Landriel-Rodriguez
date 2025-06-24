<?php 

namespace App\Controllers; 
use App\Models\consultaModelo; 

class Consulta extends BaseController 
{ 
    public function index() 
    { 
        $model = new consultaModelo(); 
        $consultas = $model->where('baja', 'NO')->findAll(); 
        return view('panel/vistasAdmin/consultas', ['consultas' => $consultas]); 
    } 
    public function guardar() 
    { 
        $model = new consultaModelo(); 
        $data = [ 'nombre' => $this->request->getPost('nombre'), 
                  'correo' => $this->request->getPost('correo'), 
                  'descripcion' => $this->request->getPost('descripcion'), 
                  'baja' => 'NO'
                ]; 
        $model->save($data); 
        return redirect()->to('/informacion-de-contacto')->with('mensaje', 'Consulta enviada con éxito'); 
    } 

    public function marcarLeido($id) 
    { 
        $model = new consultaModelo(); 
        $model->update($id, ['baja' => 'SI']); 
        return redirect()->to('/admin/consultas')->with('mensaje', 'Consulta marcada como leída');
    } 

    public function leidas() 
    { 
        $model = new consultaModelo(); 
        $consultas = $model->where('baja', 'SI')->findAll(); 
        return view('panel/vistasAdmin/consultas_leidas', ['consultas' => $consultas]); 
    } 
}