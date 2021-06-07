<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Categoria;
use App\Models\Produto;

class InsertProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $cat = new Categoria(['categoria' => 'Hortifruti']);
        $cat->save();

        $cat2 = new Categoria(['categoria' => 'Açougue']);
        $cat2->save();
        
        $cat3 = new Categoria(['categoria' => 'Variedades']);
        $cat3->save();

        $cat4 = new Categoria(['categoria' => 'Alimentos Básicos']);
        $cat4->save();

        $cat5 = new Categoria(['categoria' => 'Produtos de Limpeza']);
        $cat5->save();

        $cat6 = new Categoria(['categoria' => 'Produtos de Higiêne']);
        $cat6->save();

        $cat7 = new Categoria(['categoria' => 'Bebidas']);
        $cat7->save();

        $p1 = new Produto([
            'nome' => 'ABACAXI PÉROLA',
            'valor' => '7.49',
            'foto' => 'assets/images/img01.png',
            'descricao' => 'Um doce e suculento abacaxi ',
            'cat_id' => $cat->id
        ]);
        $p1->save();

        $p2 = new Produto([
            'nome' => 'ALFACE CRESPA',
            'valor' => '3.50',
            'foto' => 'assets/images/img03.png',
            'descricao' => 'Alface crespa Maço',
            'cat_id' => $cat->id
        ]);
        $p2->save();

        $p3 = new Produto([
            'nome' => 'LIMÃO TAITI',
            'valor' => '2.49',
            'foto' => 'assets/images/img02.png',
            'descricao' => 'O limão perfeito para temperar sua salada ou fazer uma limonada deliciosa',
            'cat_id' => $cat->id
        ]);
        $p3->save();

        $p4 = new Produto([
            'nome' => 'TOMATE',
            'valor' => '5.99',
            'foto' => 'assets/images/img04.png',
            'descricao' => 'Tomate Italiano direto do produtor',
            'cat_id' => $cat->id
        ]);
        $p4->save();

        $p5 = new Produto([
            'nome' => 'COXÃO MOLE',
            'valor' => '36.99',
            'foto' => 'assets/images/img05.png',
            'descricao' => 'Coxão Mole',
            'cat_id' => $cat2->id
        ]);
        $p5->save();

        $p6 = new Produto([
            'nome' => 'LINGUIÇA CALABRESA',
            'valor' => '29.99',
            'foto' => 'assets/images/img06.png',
            'descricao' => 'Linguiça calabresa defumada Kg',
            'cat_id' => $cat2->id
        ]);
        $p6->save();

        $p7 = new Produto([
            'nome' => 'PEITO DE FRANGO',
            'valor' => '16.99',
            'foto' => 'assets/images/img07.png',
            'descricao' => 'Peito de frango sem osso Kg',
            'cat_id' => $cat2->id
        ]);
        $p7->save();

        $p8 = new Produto([
            'nome' => 'FILÉ DE TILÁPIA',
            'valor' => '99.90',
            'foto' => 'assets/images/img08.png',
            'descricao' => 'Filé de tilápia congelado pacote 2 Kg',
            'cat_id' => $cat2->id
        ]);
        $p8->save();

        $p9 = new Produto([
            'nome' => 'PILHA ALCALINA',
            'valor' => '19.99',
            'foto' => 'assets/images/img09.png',
            'descricao' => 'Elegante, furtivo, mínimo.
                            Boné clássico do Laravel "Stealth" com bordado 3D "puff".',
            'cat_id' => $cat3->id
        ]);
        $p9->save();

        $p10 = new Produto([
            'nome' => 'RESISTÊNCIA PARA CHUVEIRO',
            'valor' => '7.99',
            'foto' => 'assets/images/img10.png',
            'descricao' => 'Resistência para chuveiro 127V 5400W Lorenzetti Embalagem 1 UN',
            'cat_id' => $cat3->id
        ]);
        $p10->save();
        
        $p11 = new Produto([
            'nome' => 'COLA INSTANTÂNEA',
            'valor' => '6.99',
            'foto' => 'assets/images/img11.png',
            'descricao' => 'Cola instantânea Scotch Bond 3g',
            'cat_id' => $cat3->id
        ]);
        $p11->save();

        $p12 = new Produto([
            'nome' => 'ACENDEDOR',
            'valor' => '11.99',
            'foto' => 'assets/images/img12.png',
            'descricao' => 'Acencedor para fogão Lume Embalagem 1 Un',
            'cat_id' => $cat3->id
        ]);
        $p12->save();

        $p13 = new Produto([
            'nome' => 'FEIJÃO',
            'valor' => '7.98',
            'foto' => 'assets/images/img13.png',
            'descricao' => 'Feijão carioca caipira Embalagem',
            'cat_id' => $cat4->id
        ]);
        $p13->save();

        $p14 = new Produto([
            'nome' => 'AÇUCAR',
            'valor' => '2.99',
            'foto' => 'assets/images/img14.png',
            'descricao' => 'Açucar refinado União 1Kg',
            'cat_id' => $cat4->id
        ]);
        $p14->save();

        $p15 = new Produto([
            'nome' => 'FUBÁ',
            'valor' => '3.99',
            'foto' => 'assets/images/img15.png',
            'descricao' => 'Fubá de milho mimoso Yoki 500g',
            'cat_id' => $cat4->id
        ]);
        $p15->save();

        $p16 = new Produto([
            'nome' => 'ARROZ',
            'valor' => '26.98',
            'foto' => 'assets/images/img16.png',
            'descricao' => 'Arroz tipo 1 Broto legal Pacote 5Kg',
            'cat_id' => $cat4->id
        ]);
        $p16->save();

        $p17 = new Produto([
            'nome' => 'DETERGENTE',
            'valor' => '1.79',
            'foto' => 'assets/images/img17.png',
            'descricao' => 'Detergente Limpol Neutro 500Ml',
            'cat_id' => $cat5->id
        ]);
        $p17->save();

        $p18 = new Produto([
            'nome' => 'SABÃO EM PÓ',
            'valor' => '8.99',
            'foto' => 'assets/images/img18.png',
            'descricao' => 'Sabão em pó Omo Lavagem Perfeita 800g',
            'cat_id' => $cat5->id
        ]);
        $p18->save();

        $p19 = new Produto([
            'nome' => 'CERA LÍQUIDA',
            'valor' => '17.99',
            'foto' => 'assets/images/img19.png',
            'descricao' => 'Cera líquida poliflor Pratic Incolor 750Ml',
            'cat_id' => $cat5->id
        ]);
        $p19->save();

        $p20 = new Produto([
            'nome' => 'ESPONJA DE LIMPEZA',
            'valor' => '2.59',
            'foto' => 'assets/images/img20.png',
            'descricao' => 'Esponja de limpeza pesada Scotch Brite 1 Unidade',
            'cat_id' => $cat5->id
        ]);
        $p20->save();

        $p21 = new Produto([
            'nome' => 'CREME DENTAL',
            'valor' => '7.99',
            'foto' => 'assets/images/img21.png',
            'descricao' => 'Creme dental Colgate Total 12 Clean Mint 90g',
            'cat_id' => $cat6->id
        ]);
        $p21->save();

        $p22 = new Produto([
            'nome' => 'SABONETE',
            'valor' => '3.49',
            'foto' => 'assets/images/img22.png',
            'descricao' => 'Sabonete Johnsons Baby 80g',
            'cat_id' => $cat6->id
        ]);
        $p22->save();

        $p23 = new Produto([
            'nome' => 'SHAMPOO',
            'valor' => '22.99',
            'foto' => 'assets/images/img23.png',
            'descricao' => 'Shampoo Pantene Hidratação 400Ml',
            'cat_id' => $cat6->id
        ]);
        $p23->save();

        $p24 = new Produto([
            'nome' => 'DESODORANTE',
            'valor' => '11.99',
            'foto' => 'assets/images/img24.png',
            'descricao' => 'Desodorante masculino antitranspirante Nivea Men Dry Impact Embalagem aerosol 150Ml',
            'cat_id' => $cat6->id
        ]);
        $p24->save();

        $p25 = new Produto([
            'nome' => 'REFRESCO',
            'valor' => '1.19',
            'foto' => 'assets/images/img25.png',
            'descricao' => 'Refresco em pó Tang Laranja 25g',
            'cat_id' => $cat7->id
        ]);
        $p25->save();

        $p26 = new Produto([
            'nome' => 'ISOTÔNICO',
            'valor' => '4.49',
            'foto' => 'assets/images/img26.png',
            'descricao' => 'Isotônico Gatorade Frutas Cítricas 500Ml',
            'cat_id' => $cat7->id
        ]);
        $p26->save();

        $p27 = new Produto([
            'nome' => 'REFRIGERANTE',
            'valor' => '1.79',
            'foto' => 'assets/images/img27.png',
            'descricao' => 'Refrigerante Coca-Cola Lata 220Ml',
            'cat_id' => $cat7->id
        ]);
        $p27->save();

        $p28 = new Produto([
            'nome' => 'ÁGUA',
            'valor' => '2.99',
            'foto' => 'assets/images/img28.png',
            'descricao' => 'Água Mineral com Gás Crystal 1,5L',
            'cat_id' => $cat7->id
        ]);
        $p28->save();
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
