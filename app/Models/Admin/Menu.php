<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menu';
    protected $fillable = ['id_menu','nombre_menu','url','id_padre'];
    public $timestamps = false;
    
    public function getHijos($padres, $line){
        $children = [];
        foreach($padres as $line1){
            if($line['id_menu'] == $line1['id_padre']){
                $children = array_merge($children, [array_merge($line1, ['submenu' => $this->getHijos($padres, $line1)])]);
            }
        }
        return $children;
    }
    
    public function getPadres($front){
        if($front){
            return $this->whereHas('roles', function($query){
                $query->where('rol_id', session()->get('rol_id'))->orderBy('id_menu');
            })->where('estado',1)
                ->orderBy('id_menu')
                ->get()
                ->toArray();
        }else{
            return $this->orderBy('id_menu')
                    ->get()
                    ->toArray();
        }
    }
    
    public static function getMenu($front=false){
        $menus = new Menu();
        $padres = $menus->getPadres($front);
        $menuAll=[];
        foreach ($padres as $line){
            if($line['id_padre'] != null)
                continue;
            $item = [array_merge($line, ['submenu' => $menus->getHijos($padres, $line)])];
            $menuAll = array_merge($menuAll, $item);
        }
        return $menuAll;
    }

    public function guardarOrden($menu)
    {
        $menus = json_decode($menu);
        foreach ($menus as $var => $value) {
            $this->where('id_menu', $value->id)->update(['id_padre' => 0, 'orden' => $var + 1]);
            if (!empty($value->children)) {
                foreach ($value->children as $key => $vchild) {
                    $update_id = $vchild->id;
                    $parent_id = $value->id;
                    $this->where('id_menu', $update_id)->update(['id_padre' => $parent_id, 'orden' => $key + 1]);
                    if (!empty($vchild->children)) {
                        foreach ($vchild->children as $key => $vchild1) {
                            $update_id = $vchild1->id;
                            $parent_id = $vchild->id;
                            $this->where('id_menu', $update_id)->update(['id_padre' => $parent_id, 'orden' => $key + 1]);
                            if (!empty($vchild1->children)) {
                                foreach ($vchild1->children as $key => $vchild2) {
                                    $update_id = $vchild2->id;
                                    $parent_id = $vchild1->id;
                                    $this->where('id_menu', $update_id)->update(['id_padre' => $parent_id, 'orden' => $key + 1]);
                                    if (!empty($vchild2->children)) {
                                        foreach ($vchild2->children as $key => $vchild3) {
                                            $update_id = $vchild3->id;
                                            $parent_id = $vchild2->id;
                                            $this->where('id_menu', $update_id)->update(['id_padre' => $parent_id, 'orden' => $key + 1]);
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }

}
