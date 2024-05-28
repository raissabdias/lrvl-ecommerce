<?php

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $cat = new Category(['name' => 'General']);
        $cat->save();

        $prod = new Product([
            'name' => 'Caneta Cis Move Ponta Fina 0.7 Kit 8 Cores',
            'value' => 9.99,
            'image' => 'images/product1.jpg',
            'description' => 'Cor da Tinta: Igual ao corpo da caneta. Cores do kit: Azul, Laranja, Preto, Rosa, Roxo, Verde, Vermelho e Azul Claro',
            'category_id' => $cat->id,
        ]);
        $prod->save();

        $prod = new Product([
            'name' => 'Caneta Esferográfica cis Move 0.7mm c/ 5 Unds',
            'value' => 8.99,
            'image' => 'images/product2.jpg',
            'description' => 'Características:
            - Marca: CiS
            - Ponta agulha 0.7 mm
            - Escrita suave até 1.600M lineares
            - 2x mais tinta
            - Design moderno
            - Cores: azul, rosa, preta, roxa e vermelha',
            'category_id' => $cat->id,
        ]);
        $prod->save();

        $prod = new Product([
            'name' => 'Kit Canetas Ponta Fina Multicolor Fineliners Kelly Creates',
            'value' => 16.99,
            'image' => 'images/product3.jpg',
            'description' => 'Coloque muita cor em seus planners, agendas e projetos de scrapbook com o Kit Canetas Ponta Fina Multicolor Fineliners Kelly Creates. São 10 canetas em cores variadas com a ponta 0,5 para fazer muito journaling.',
            'category_id' => $cat->id,
        ]);
        $prod->save();

        $prod = new Product([
            'name' => 'Kit Canetas Coloridas Gel 18 Canetas Escolar Ponta Fina',
            'value' => 22.99,
            'image' => 'images/product4.jpg',
            'description' => 'Comprimento: 15cm
            Material: Plástico / Tinta Neon Colorida
            Acompanha o estojo para guardar
            Kit com 18 Canetas.',
            'category_id' => $cat->id,
        ]);
        $prod->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
