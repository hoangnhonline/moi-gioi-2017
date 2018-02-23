<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Helpers\Helper;
use App\Models\LandingProjects;
use App\Models\ArticlesCate;
use App\Models\Pages;
use App\Models\Menu;
use App\Models\Account;
use App\Models\CtvJoinSale;

use DB, Session, Auth;
class GeneralController extends Controller
{
    public function updateOrder(Request $request){
        if ($request->ajax())
        {
        	$dataArr = $request->all();
        	$str_order = $dataArr['str_order'];        	
            $table = $dataArr['table'];        
            if( $str_order ){
            	$tmpArr = explode(";", $str_order);
            	$i = 0;
            	foreach ($tmpArr as $id) {
            		if( $id > 0 ){
            			$i++;
            			DB::table($table)
				        ->where('id', $id)				        
				        ->update(array('display_order' => $i));			
            		}
            	}
            }
        }        
    }

    public function updateStatus(Request $request){
        if ($request->ajax())
        {
            $column = $request->col;
            $table = $request->table;
            $status = $request->status;
            $id = $request->id;
            DB::table($table)->where('id', $id)->update([$column => $status, 'updated_user' => Auth::user()->id ]);
            if($column == "cskh_status" && $status == 3){
                $pr_min = null;
                $pr_list = Account::where(['status'=>1, 'role' => 3])->select(['id'])->get();              
                $arr = [];
                if($pr_list->count() > 0){
                    foreach($pr_list as $pr){
                        $count = CtvJoinSale::where('pr_id', $pr->id)->get()->count();
                        $arr[$pr->id] = $count;
                    }
                }
              
                $pr_min = array_search(min($arr), $arr);
                $sales = CtvJoinSale::find($id);
                $sales->pr_id = $pr_min;
                $sales->updated_user = Auth::user()->id;
                $sales->save();
            }
        }        
    }
    
    public function getSlug(Request $request){
    	$strReturn = '';
    	if( $request->ajax() ){
    		$str = $request->str;
    		if( $str ){
    			$strReturn = str_slug( $str );
    		}
    	}
    	return response()->json( ['str' => $strReturn] );
    }
    public function setupMenu(Request $request){
        $landingList = LandingProjects::where('status', 1)->orderBy('id', 'desc')->get();        
        $articlesCateList = ArticlesCate::where('status', 1)->orderBy('display_order', 'asc')->get();
        $pageList = Pages::where('status', 1)->get();
        return view('backend.menu.index', compact( 'landingList', 'articlesCateList', 'pageList'));
    }
    public function renderMenu(Request $request){        
        $dataArr = $request->all();       
        return view('backend.menu.render-menu', compact( 'dataArr' ));   
    }
    public function storeMenu(Request $request){
        $data = $request->all();
        Menu::where('menu_id', 1)->delete();
        if(!empty($data)){
            $i = 0;
            foreach($data['title'] as $k => $title){
                $i++;
                Menu::create([
                    'menu_id' => 1,
                    'title' => $title,
                    'url' => $data['url'][$k],
                    'slug' => $data['slug'][$k],
                    'type' => $data['type'][$k],
                    'object_id' => $data['object_id'][$k],
                    'status' => 1,
                    'title_attr' => $title,
                    'display_order' => $i
                ]);
            }
        }
        Session::flash('message', 'Cập nhật menu thành công.');

        return redirect()->route('menu.index');
    }
}
