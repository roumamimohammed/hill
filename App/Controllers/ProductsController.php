<?php 



class ProductsController extends Controller 
{
    private $conn;

    public function __construct()
    {
        $this->conn = new Products();
    }


    public function index()
    {
        $data['products'] = $this->conn->getAllProducts();
        return $this->view('products/index',$data);
    }

    public function Gallery()
    {
        $data['galleries'] = $this->conn->getAllProducts();
        return  $this->view('products/Gallery',$data);

    }
    public function conn()
    {
        return $this->view('products/conn');
    }

    public function connect_admin()
    {
        if(isset($_POST['submit']))
        {
            $email = $_POST['email'];
            $password = $_POST['password'];
                

        $data['admin'] = $this->conn->getAlladmin($email,$password);
        if($this->conn->getAlladmin($email,$password))
        {
            $data['success'] = "connected Successfully";
            //$this->view('products/conn',$data);
            $data['products'] = $this->conn->getAllProducts();
            return $this->view('products/index',$data);

        }
        else 
        {
            $data['error'] = "Error";
            return $this->view('products/conn');
        }
    }
    }

    public function about()
    {
        return $this->view('products/about');
    }
    public function contact()
    {
        return $this->view('products/contact');
    }





    public function com()
    {
        // $data['products'] = $this->conn->getAllProducts();
        //return $this->view('products/Gallery',$data);
  
    }









    public function add()
    {
        return $this->view('products/add');
    }

    public function store()
    {
        if(isset($_POST['submit']))
        {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $qty = $_POST['qty'];

            $this->conn = new Products();
            $dataInsert = Array ( "label" => $name ,
                            "price" => $price ,
                            "quantity" => $qty 
                            );

            if($this->conn->insertProducts($dataInsert))
            {
                $data['success'] = "Data Added Successfully";
                return $this->view('products/add',$data);
            }
            else 
            {
                $data['error'] = "Error";
                return $this->view('products/add',$data);
            }
        }
        return $this->view('products/add');
    }




    public function edit($id)
    {
        // var_dump($this->conn->getProduct($id));
        $data['row'] = $this->conn->getProduct($id)[0];
        return $this->view('products/edit',$data);
    }

    public function update()
    {
        if(isset($_POST['submit']))
        {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $qty = $_POST['qty'];
            $id = $_POST['id'];

            $this->conn = new Products();
            $dataInsert = Array ( "label" => $name ,
                            "price" => $price ,
                            "quantity" => $qty 
                            );
            // data of product
            

            if($this->conn->updateProduct($id,$dataInsert))
            {
                $data['success'] = "Updated Successfully";
                $data['row'] = $this->conn->getProduct($id)[0];
                $this->view('products/edit',$data);
            }
            else 
            {
                $data['error'] = "Error";
                $data['row'] = $this->conn->getProduct($id)[0];
                return $this->view('products/edit',$data);
            }
        }
        redirect('home/index');
    }



    
    public function delete($id)
    {
        if($this->conn->deleteProduct($id))
        {
            $data['success'] = "Product Have Been Deleted";
            $data['products'] = $this->conn->getAllProducts();
            return $this->view('products/index',$data);
        }
        else 
        {
            $data['error'] = "Error";
            $data['products'] = $this->conn->getAllProducts();
            return $this->view('products/index',$data);
        }
    }
}