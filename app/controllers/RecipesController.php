<?php
namespace app\controllers;
use app\models\Recipes;

class RecipesController extends \lithium\action\Controller {
    
        public function index(){
            
            if($this->request->data && $this->request->data['search']){
                $recipes = Recipes::find("all",  array(
                    'conditions' => array(
                        'name' => new \MongoRegex('/'.$this->request->data['search'].'/i')
                    )
                ));
            } else {
                $recipes = Recipes::all();
            }
            return compact('recipes');
        }
        
        public function add(){
            if($this->request->data){
                $tmpIngredients = $this->request->data['ingredient'];
                $ingredients  = array();
                foreach ($tmpIngredients as $key => $value){
                    array_push($ingredients, array('name'=>$value));
                }
                $this->request->data['ingredient'] = $ingredients;
                if($this->request->data){
                    $recipe = Recipes::create($this->request->data);
                    $success = $recipe->save();
                }
                $this->redirect("Recipes::index");
            }
        }
        
        public function detail($id=null){
            if(is_null($id)){
                $this->redirect("Receipes::index");
            } else {
                $recipe = Recipes::find("first",  array(
                    'conditions' => array(
                        '_id' => $id
                    )
                ));
                return compact('recipe');
            }
        }
}
?>
