<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function subcategories(){
        return $this->hasMany('App\Category', 'parent_id')->where('status',1);
    }

    public function section(){
        return $this->belongsTo('App\Section','section_id')->select('id','name');
    }


    public function parentcategory(){
        return $this->belongsTo('App\Category','parent_id')->select('id','name');
    }

    public static function catDetails($url){
        $catDetails = Category::select('id','parent_id','name','url','description')->with(['subcategories'=>function($query){
            $query->select('id','parent_id','name','url','description');
        }])->where('url', $url)->first()->toArray();

        if($catDetails['parent_id']==0){
            // Show Only Main Category in Breadcrumb
            $breadcrumbs = '<a href="'.url($catDetails['url']).'">'.$catDetails['name'].'</a>';
        } else{
            // Show Main and Sub Category in Breadcrumb
            $parentCategory = Category::select('name','url')->where('id', $catDetails['parent_id'])->first()->toArray();
            $breadcrumbs = '<a href="'.url($parentCategory['url']).'">'.$parentCategory['name'].'</a>&nbsp;<span class="divider">/</span>&nbsp;<a href="'.url($catDetails['url']).'">'.$catDetails['name'].'</a>';
        }
        $catIds = array();
        $catIds[] = $catDetails['id'];
        foreach($catDetails['subcategories'] as $key => $subcat){
            $catIds = $subcat['id'];
        }

        return array('catIds'=>$catIds,'catDetails'=>$catDetails,'breadcrumbs'=>$breadcrumbs);
    }
}
