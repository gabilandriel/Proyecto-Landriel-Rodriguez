<?php 
namespace App\Controllers;

use App\Models\productoModelo;
use App\Models\categoriaModelo;  

class Producto_controller extends BaseController { 
    public function index() { 
        $model = new productoModelo(); 
        $productos = $model
            ->where('baja', 'NO')
            ->where('cantidad >', 0)
            ->findAll(); 
        
        return view('panel/vistasAdmin/productos_activos', ['productos' => $productos]); 
    }
    public function crear() { 
        $categoriaModel = new categoriaModelo(); 
        $categorias = $categoriaModel->findAll(); 
        return view('panel/vistasAdmin/crear_producto', ['categorias' => $categorias]); 
    } 
    public function guardar() { 
        $model = new productoModelo();
        $imagen = $this->request->getFile('url_imagen'); 
        $nombreImagen = $imagen->getRandomName(); 
        $imagen->move('assets/img', $nombreImagen); 
        $model->insert([ 
            'id_categoria' => $this->request->getPost('id_categoria'), 
            'nombre' => $this->request->getPost('nombre'), 
            'descripcion' => $this->request->getPost('descripcion'), 
            'precio' => $this->request->getPost('precio'), 
            'cantidad' => $this->request->getPost('cantidad'), 
            'url_imagen' => $nombreImagen, 
            'baja' => 'NO' 
        ]);  
        return redirect()->to('/admin/productos')->with('mensaje', 'Producto creado correctamente.'); 
    } 
    public function editar($id) { 
        $model = new productoModelo(); 
        $categoriaModel = new categoriaModelo(); 
        $producto = $model->find($id); 
        $categorias = $categoriaModel->findAll(); 
        return view('panel/vistasAdmin/editar_producto', [ 'producto' => $producto, 'categorias' => $categorias ]); 
    } 
    public function actualizar($id) {
        $model = new productoModelo(); 
        $datos = [ 
            'id_categoria' => $this->request->getPost('id_categoria'), 
            'nombre' => $this->request->getPost('nombre'), 
            'descripcion' => $this->request->getPost('descripcion'), 
            'precio' => $this->request->getPost('precio'), 
            'cantidad' => $this->request->getPost('cantidad'), 
        ]; 
        $imagen = $this->request->getFile('url_imagen'); 
        if ($imagen && $imagen->isValid() && !$imagen->hasMoved()) { 
            $nombreImagen = $imagen->getRandomName(); 
            $imagen->move('assets/img', $nombreImagen); 
            $datos['url_imagen'] = $nombreImagen; 
        } 
        $model->update($id, $datos); 
        return redirect()->to('/admin/productos')->with('mensaje', 'Producto actualizado correctamente.'); 
    } 
    public function baja($id) { 
        $model = new productoModelo(); 
        $model->update($id, ['baja' => 'SI']); 
        return redirect()->to('/admin/productos')->with('mensaje', 'Producto dado de baja.'); 
    } 
    public function reactivar($id) { 
        $model = new productoModelo(); $model->update($id, ['baja' => 'NO']); 
        return redirect()->to('/admin/productos/bajas')->with('mensaje', 'Producto reactivado.'); 
    } 
    public function bajas()
    {
        $productoModel = new \App\Models\productoModelo();
        $productosBaja = $productoModel
            ->select('producto.*, categoria.nombre as categoria')
            ->join('categoria', 'producto.id_categoria = categoria.id_categoria')
            ->where('producto.baja', 'SI')
            ->orWhere('producto.cantidad', 0)
            ->findAll();

        return view('panel/vistasAdmin/productos_baja', ['productosBaja' => $productosBaja]);
    }
} 