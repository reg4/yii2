<?php
namespace app\controllers;

use yii\web\Controller;
use app\models\Post;

class PostController extends Controller
{

 public function actionIndex(){
 $posts = Post::find()->all();

 	$post = new Post();
	$post->category_id = 1;
	$post->title = 'Header';
	$post->excerpt = 'excerpt';
	$post->keywords = 'keywords';
	$post->description = 'description';
	$post->created = "1998-02-05";
	$post->text = "Text content here";
	$post->save();

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