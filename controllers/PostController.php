<?php
namespace app\controllers;


use yii\web\Controller;
use app\models\Post;
use app\models\Category;

class PostController extends Controller
{

 public function actionIndex(){
$posts = Post::find()->with('category')->all();
 	// $category = new Category();
 	// $category->name = 'First Category';
 	// $category->keywords = 'keywords Category';
 	// $category->description = 'description Category';
 	// $category->save();


 	// $category = new Category();
 	// $category->name = 'Second Category';
 	// $category->keywords = 'keywords Category';
 	// $category->description = 'description Category';
 	// $category->save();


 	// $category = new Category();
 	// $category->name = 'Third Category';
 	// $category->keywords = 'keywords Category';
 	// $category->description = 'description Category';
 	// $category->save();


	 // 	$post = new Post();
	// $post->category_id = 1;
	// $post->title = 'Header';
	// $post->excerpt = 'excerpt';
	// $post->keywords = 'keywords';
	// $post->description = 'description';
	// $post->created = "1998-02-05";
	// $post->text = "Text content here";
	// $post->save();

 return $this->render('index', compact('posts'));
 }



 public function actionFill(){
 
	$post->category_id = '1';
	$post->title = 'Header';
	$post->excerpt = 'excerpt';
	$post->keywords = 'keywords';
	$post->description = 'description';
	$post->created = "1998-02-05";
	$post->text = "Text content here";
	$post->save();


 }

}