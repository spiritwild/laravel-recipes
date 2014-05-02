<?php namespace Recipes;

class Recipe extends \Eloquent
{
    protected $touches = ['codes', 'topics'];

    public function category()
    {
        return $this->belongsTo('Category');
    }
    public function codes()
    {
        return $this->belongsToMany('Code');
    }
    public function topics()
    {
        return $this->belongsToMany('Topic');
    }
}