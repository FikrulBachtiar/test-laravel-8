<?php

namespace App\Http\Controllers;

use App\Models\User;
use Yajra\DataTables\DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller {
    protected $userModel;

    public function __construct(User $userModel) {
        $this->userModel = $userModel;
    }

    public function index() {
        $nationality = $this->userModel->getNationality();
        return view('welcome', compact('nationality'));
    }
    
    public function get_user(Request $request) {
        $data = $this->userModel->getDataUser();
        
        $dataTables = DataTables::of($data)->addIndexColumn()->addColumn('action', function ($row) {
            $actionBtn = '<button class="btn btn-primary btn-sm" id="showModalEdit" data-id="'. $row->cst_id .'">Edit</button> <button class="btn btn-danger btn-sm" id="deleteUser" data-id="'. $row->cst_id .'">Delete</button>';
            return $actionBtn;
        })->rawColumns(['action'])->make(true);
        return response()->json($dataTables->original);
    }
    
    public function user_add(Request $request) {
        DB::beginTransaction();
        try {
            $idUser = $this->userModel->addDataUser($request->user_data);
            
            if (count($request->family_data) > 0) {
                $dataFamily = array_map(function ($item) use ($idUser) {
                    $item['cst_id'] = $idUser;
                    return $item;
                }, $request->family_data);
                
                $insertFamily = $this->userModel->addDataFamily($dataFamily);
            }
            
            DB::commit();
            return response()->json(['data' => "Successfully saved data"]);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['error' => 'An error occurred while processing data'], 500);
        }
    }
    
    public function delete_user($id) {
        DB::beginTransaction();
        try {
            $userIsDeleted = $this->userModel->deleteUserByID($id);
            DB::commit();
            return response()->json(['user' => $userIsDeleted]);
        } catch (\Throwable $e) {
            DB::rollback();
            return response()->json(['user' => $e]);
        }
    }

    public function delete_family($id) {
        try {
            $userIsDeleted = $this->userModel->deleteFamilyByID($id);
            return response()->json($userIsDeleted);
        } catch (\Throwable $e) {
            return response()->json(['error' => $e]);
        }
    }
    
    public function get_user_by_id($id) {
        try {
            $user = $this->userModel->getDataUserByID($id);
            $family = [];
            if ($user) {
                $family = $this->userModel->getDataFamilyByID($id);
            }

            return response()->json([
                'user' => $user,
                'family' => $family
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'error' => $e
            ], 500);
        }
    }

    public function user_update(Request $request) {
        DB::beginTransaction();
        try {
            $isUpdate = $this->userModel->updateUser($request->id, $request->user_data);
            DB::commit();
            return response()->json(['data' => $isUpdate]);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['error' => 'An error occurred while processing data', 'ms' => $e], 500);
        }
    }
}
