<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Param extends Model
{
    use HasFactory;

    private string $get;

    private int $pathInteiro;
    
    private string $pathString;

    public function getGet() : string {
        return $this->get;
    }

    public function setGet(string $get) {
        $this->get  = $get;
    }

    public function getPathInteiro() : int {
        return $this->pathInteiro;
    }

    public function setPathInteiro(int $pathInteiro) {
        $this->pathInteiro  = $pathInteiro;
    }

    public function getPathString() : string {
        return $this->pathString;
    }

    public function setPathString(string $pathString) {
        $this->pathString  = $pathString;
    }

    public function __construct(string $get, int $pathInteiro, string $pathString) {
        $this->setGet($get);
        $this->setPathInteiro($pathInteiro);
        $this->setPathString($pathString);
    }
}