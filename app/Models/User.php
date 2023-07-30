<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;

class User extends Model
{
    use HasFactory;

    public function getNationality() {
        $result = DB::select(DB::raw("SELECT * FROM trx.nationality"));
        return $result;
    }

    public function getDataUser() {
        $result = DB::select(DB::raw("SELECT cus.cst_id, TRIM(cus.cst_name) as cst_name, cus.cst_dob, nat.nationality_name, cus.cst_phone_num, cus.cst_email FROM trx.customer cus JOIN trx.nationality nat ON nat.nationality_id = cus.nationality_id"));
        return $result;
    }
    
    public function getDataUserByID($id) {
        return DB::table('trx.customer')
            ->select('cst_id', DB::raw('TRIM(cst_name) as cst_name'), 'cst_dob', 'nationality_id', 'cst_phone_num', 'cst_email')
            ->where('cst_id', $id)
            ->first();
    }

    public function getDataFamilyByID($id) {
        $result = DB::select(DB::raw("
        SELECT
            fl.fl_id,
            fl.fl_name,
            fl.fl_relation,
            fl.fl_dob
        FROM
            trx.family_list fl
        WHERE fl.cst_id = $id"));

        return $result;
    }
    
    public function addDataUser($customer) {
        try {
            // $insertCus = DB::table('trx.customer')->updateOrInsert($customer, $id);
            $insertCus = DB::table('trx.customer')->insertGetId($customer, 'cst_id');
            return $insertCus;
        } catch (\Throwable $th) {
            throw new \Exception($th->errorInfo);
        }
    }

    public function updateUser($id, $user) {
        try {
            return DB::table('trx.customer')->where('cst_id', $id)->update($user);
        } catch (\Throwable $th) {
            throw new \Exception($th->errorInfo);
        }
    }
    
    public function updateFamily($id, $family) {
        try {
            return DB::table('trx.customer')->where('cst_id', $id)->update($user);
        } catch (\Throwable $th) {
            throw new \Exception($th->errorInfo);
        }
    }
    
    public function addDataFamily($family) {
        try {
            $insertFamily = DB::table('trx.family_list')->insert($family);
            return $insertFamily;
        } catch (\Throwable $th) {
            throw new \Exception($th);
        }
    }

    public function deleteUserByID($id) {
        return DB::table('trx.customer')->where('cst_id', $id)->delete();
    }
    
    public function deleteFamilyByID($id) {
        return DB::table('trx.family_list')->where('fl_id', $id)->delete();
    }
}
