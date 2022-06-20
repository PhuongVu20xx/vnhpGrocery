<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\NameController;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //PRODUCT
    public function AllProduct()
    {
        $allproduct = DB::select('exec sp_select_all_product');
        return view(NameController::$ADMIN_CONTROLLERS_ALL_PRODUCT, ['allproduct'=>$allproduct]);
    }

    public function AddProduct()
    {
        $category_root=DB::select(NameController::$SP_SELECT_ROOT_CATEGORY_NAME);
        $category_name=DB::select(NameController::$SP_SELECT_ALL_CATEGORY);
        $unit_name=DB::select(NameController::$SP_SELECT_ALL_UNIT);

        return view(NameController::$ADMIN_CONTROLLERS_ADD_PRODUCT,['category_name'=>$category_name,'category_root'=>$category_root,'unit_name'=>$unit_name]);
    }

    public function SubmitProduct(Request $request)
    {
        $product_name       =$request->product_name;
        $category_name      =$request->category_name;
        $unit_name          =$request->unit_name;
        $information        =$request->information;
        $img                = $request->file('img');
        $extension          = $request->file('img')->extension(); // Cắt đuôi file img
        $img_name           = time().'-'.'product.'.$extension;       // Nối đuôi file img vào tên mới của img
        $img->move(public_path('upload.product'), $img_name);

        $note='abc';


        DB::insert("exec sp_insert_product '$product_name','$category_name','$unit_name','$information','$img_name','$note'");

        return redirect()->action([ProductController::class,'AllProduct']);
    }

//EDIT PRODUCT
    public function EditProduct()
    {
        $category_root  = DB::select(NameController::$SP_SELECT_ROOT_CATEGORY_NAME) ;
        $category_name  = DB::select(NameController::$SP_SELECT_ALL_CATEGORY);
        $unit_name      = DB::select(NameController::$SP_SELECT_ALL_UNIT);

        return view(NameController::$ADMIN_CONTROLLERS_EDIT_PRODUCT,['category_root'=>$category_root,
                                                                     'category_name'=>$category_name,
                                                                     'unit_name'    =>$unit_name]);
    }
    public function PostEditProduct(Request $request){
        $cate_name = $request->category_name;
        $pro_name = $request->product_name;
        $information = $request->information;
        $unit = $request->unit_name;
        $img     = $request->file('img');
        $extension  = $request->file('img')->extension(); // Cắt đuôi file img
        $img_name= time().'-'.'product.'.$extension;       // Nối đuôi file img vào tên mới của img
        $img->move(public_path('upload.product'), $img_name);
        $note = 'abc';

        DB::insert("exec sp_insert_product '$pro_name','$cate_name','$unit','$information','$img_name','$note'");

    }

// IMPORT STOCK 
    public function ImportStock()
    {
        $select_product=DB::select(NameController::$SP_SELECT_ALL_PRODUCT);
        $select_suppliers=DB::select(NameController::$SP_SELECT_ALL_SUPPLIER);
        $offers_name=DB::select(NameController::$SP_SELECT_OFFERS_DETAILS);

        return view(NameController::$ADMIN_CONTROLLERS_IMPORT_STOCK,['select_product'=>$select_product,'select_suppliers'=>$select_suppliers,'offers_name'=>$offers_name]);
        
    }

    public function ShowImportStock(Request $request)
    {
        $productname    = $request->select_product;
        $supplier       = $request->select_suppliers;
        $offer          = $request->offers_name;
        $quantity       = $request->quantity;
        $status         = $request->stock_status;

        $st=0;
        if($status == "on") $st=1;

        $price          = $request->price;
        $note           = '';

        DB::insert("exec sp_insert_stock '$productname','$supplier','$offer','$quantity','$st','$price','$note'");

        return redirect()->action([ProductController::class,'AllStock']);
    }

    public function AllStock()
    {
        $allstock = DB::select('exec sp_select_stock');
        return view(NameController::$ADMIN_CONTROLLERS_ALL_STOCK, ['allstock'=>$allstock]);
    }
 

    public function showEditStock()
    {
        $select_product=DB::select(NameController::$SP_SELECT_ALL_PRODUCT);
        $select_suppliers=DB::select(NameController::$SP_SELECT_ALL_SUPPLIER);
        return view(NameController::$ADMIN_CONTROLLERS_EDIT_STOCK, ['select_product'=>$select_product,'select_suppliers'=>$select_suppliers]);

    }
    public function postEditStock()
    {
        
    }



// IMPORT PRODUCT 
    public function showImportProduct()
    {
        $select_product=DB::select(NameController::$SP_SELECT_ALL_PRODUCT);
        $select_suppliers=DB::select(NameController::$SP_SELECT_ALL_SUPPLIER);
        $select_manager=DB::select(NameController::$SP_SELECT_ALL_MANAGERS);
        $select_offer=DB::select(NameController::$SP_SELECT_OFFERS_DETAILS);

        return view(NameController::$ADMIN_CONTROLLERS_IMPORT_PRODUCT,[
            'select_product'=>$select_product,
            'select_suppliers'=>$select_suppliers,
            'select_manager'=>$select_manager,
            'select_offer'=>$select_offer
        ]);
    }

    public function postImportProduct(Request $request)
    {   
        $productname    = $request->select_product;
        $supplier       = $request->select_suppliers;
        $offer          = $request->offers_name;
        $quantity       = $request->quantity;
        $price          = $request->price;
        $importdate     = $request->importdate;
        $employee       = $request->emp_name;
        $totalpayment   = $request->totalpayment;   
        $note           = $request->note;
        $output = '';

        DB::insert("exec sp_insert_import_product '$productname','$supplier','$quantity','$price',
                                        '$importdate','$offer','$totalpayment','$employee','$note','','','0','$output'");

        return redirect()->action([ProductController::class,'AllProduct']);
    }

    public function showEditimportproduct()
    {
        $select_product=DB::select(NameController::$SP_SELECT_ALL_PRODUCT);
        $select_suppliers=DB::select(NameController::$SP_SELECT_ALL_SUPPLIER);
        $select_manager=DB::select(NameController::$SP_SELECT_ALL_MANAGERS);
        $select_offer=DB::select(NameController::$SP_SELECT_OFFERS_DETAILS);

        return view(NameController::$ADMIN_CONTROLLERS_EDIT_IMPORT,[
            'select_product'=>$select_product,
            'select_suppliers'=>$select_suppliers,
            'select_manager'=>$select_manager,
            'select_offer'=>$select_offer
        ]);
    }

 

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}