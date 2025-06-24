<?php 

namespace App\Controllers; 
use App\Models\productoModelo; 
use App\Models\categoriaModelo; 

class Catalogo_controller extends BaseController { 
    public function index()
    {
        $productoModel = new productoModelo(); 
        $categoriaModel = new categoriaModelo(); 
        
        $categorias = $categoriaModel->where('baja', 'NO')->findAll();
        $categoriaSeleccionada = $this->request->getGet('categorias');

        $query = $productoModel
            ->select('producto.*, categoria.nombre as categoria')
            ->join('categoria', 'producto.id_categoria = categoria.id_categoria')
            ->where('producto.baja', 'NO');

        if (!empty($categoriaSeleccionada) && is_array($categoriaSeleccionada)) {
            $query->whereIn('producto.id_categoria', $categoriaSeleccionada);
        }

        $productos = $query->findAll();

        return view('pages/catalogo', [
            'productos' => $productos,
            'categorias' => $categorias,
            'categoriaSeleccionada' => $categoriaSeleccionada,
            'nombre_categoria' => null
        ]);
    }
    public function categoria($id_categoria) { 
        $productoModel = new ProductoModelo(); 
        $categoriaModel = new CategoriaModelo(); 
        // Productos filtrados por categoría
        $productos = $productoModel
            ->select('producto.*, categoria.nombre as categoria')
            ->join('categoria', 'producto.id_categoria = categoria.id_categoria')
            ->where('producto.id_categoria', $id_categoria)
            ->where('producto.baja', 'NO')
            ->findAll();

        // Obtener nombre de la categoría
        $categoria = $categoriaModel->find($id_categoria);
        $nombre_categoria = $categoria ? $categoria['nombre'] : 'Sin nombre';

        $categorias = $categoriaModel->where('baja', 'NO')->findAll();

        return view('pages/catalogo', [
            'productos' => $productos,
            'categorias' => $categorias,
            'categoriaSeleccionada' => $id_categoria,
            'nombre_categoria' => $nombre_categoria
        ]);
    }

    public function detalle($id_producto)
    {
        $productoModel = new ProductoModelo();
        $producto = $productoModel
            ->select('producto.*, categoria.nombre as categoria')
            ->join('categoria', 'producto.id_categoria = categoria.id_categoria')
            ->find($id_producto);

        if (!$producto) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Producto no encontrado');
        }

        return view('pages/detalle_producto', ['producto' => $producto]);
    }

}