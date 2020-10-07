<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'name', 
        'price',
        'description'
    ];

    public function getAll()
    {
        return $this->orderBy('name', 'asc')->get();
    }

    public function store(Array $data)
    {
        return $this->create($data);
    }

    public function find($col, $val)
    {
        return $this->where($col, $val)->first();
    }

    public function patch($product, $id)
    {
        $result = $this->where('id', $id)->firstOrFail();
        
        foreach($product as $index => $fill)
        {
            $result[$index] = $product[$index];
        }

        return $result->save();
    }

    public function deleteOne($id)
    {
        return $this->where('id', $id)->firstOrFail()->delete();
    }
}