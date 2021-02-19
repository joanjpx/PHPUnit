<?php
namespace App;
require (__DIR__.'/../vendor/autoload.php');
require (__DIR__.'/../config/database.php');

use Models\Tweet;


Class TweetController { 
    
    private $model;

    public function __construct() {

        $this->model = new Tweet();
    }

    public function insert($array) : bool
    {
        try{
            if($this->model::create($array))
            {
                return true;
            }
        }catch(\Exception $e)
        {
            return false;
        }
        
    }

    public function selectOne($id) : array
    {

        return $this->model->find($id)->toArray();
    }

    public function selectAll() : array 
    {
        return $this->model->all()->toArray();
    }

    public function update(int $id, array $params) : bool
    {
        try{

            if(
                $this->model->find($id)->update($params)
            ) return true;

        }catch(\Exception $e)
        {
            return false;
        }
    }

    public function delete(int $id) : bool
    {   
        try{

        }catch(\Exception $e)
        {

        }
    }
}