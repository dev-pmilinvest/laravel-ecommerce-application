<?php

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([

            'brand_id' => '1', 
            'sku' =>'00000001',
            'name' => 'argel7 en tube',
            'slug' => 'argel7-tube',
            'description' => "<h2>A l’origine du succès d’Argel 7 ® !</h2>
            <p>
            Le tube est le format idéal pour doser parfaitement la quantité de gel nécessaire à un massage optimal. 
            </p>
            <p>
            Idéal pour des applications ciblées, le tube permet de doser précisément la quantité de gel nécessaire. C’est le format standard, le plus vendu, très apprécié des personnes de plus de 50 ans qui souhaitent se masser efficacement.
            </p>
            <p>
            Argel 7 ® possède toutes les propriétés pour effectuer un message efficace et bienfaisant. Il apaise la peau en diminuant l’inconfort provoqué par les frictions du massage, favorise le bien-être et la détente. Les huiles essentielles éveillent les sens et développent le caractère relaxant du massage. Le menthol procure enfin un effet froid immédiat qui évite les tiraillements et les échauffements. On l’utilisera pour des massages journaliers pour favoriser une amélioration.
            </p>
            <h2>Pourquoi utiliser Argel7 ® en tube ?</h2>
            <p>
            Argel7 ® en tube :
            <ul>
                <li>Idéal pour les massages ciblés </li>
                <li>Pratique à emporter</li>
                <li>Facile à doser</li>
                <li>Un volume de 120 ml</li>
            </ul>
            </p>
            <h2>Qui peut utiliser Argel 7 ® gel de message ?</h2>
            <p>
            Toutes les personnes qui connaissent des zones d’inconfort au niveau des genoux, épaules, poignets, cou, dos… et qui souhaitent détendre ces zones par des massages. 
            </p>
            <h2>Les secrets du massage</h2>
            <p>
            Pourquoi le massage fait-il tant d’effet ? Parce que la peau est un organe extrêmement sensible ! Des scientifiques ont décrypté les messages qui se propagent dans la peau quand on reçoit un massage. Au moment où la paume de la main fait pression sur la peau, de minuscules capteurs répondent à ces stimuli liés au toucher ou encore à la variation de température. Ces récepteurs ressentent les effets du massage et transmettent les informations aux centres nerveux. Des endorphines sont alors libérées. Ce sont les fameuses hormones du bien-être !</p>",
            'quantity' => '1',
            'weight' => '150',
            'price' => 26.00,
            'sale_price' =>26.00,
            'status' => 1,
        ]);

        Product::create([

            'brand_id' => '1', 
            'sku' =>'00000002',
            'name' => 'argel7 Spray',
            'slug' => 'argel7-spray',
            'description' => "<h2>Découvrez les bienfaits du spray Argel 7 ®</h2>
            <p>
            Les sportifs l’adopteront immédiatement ! Le spray est particulièrement utile pour atteindre les zones les plus difficiles d’accès, comme le dos.
            </p>
            <p>
            Argel 7 ® spray possède toutes les vertus pour procurer un message efficace et bienfaisant. Il apaise la peau en minimisant la gêne provoqué par les frictions du massage, favorise le bien-être et la détente. Les huiles essentielles réveillent les sens et développent le propriétés apaisantes du massage. Le menthol procure un effet froid immédiat qui évite les tiraillements et les échauffements. Nous conseillons d’utiliser le spray Argel 7 ® pour des massages journaliers.
            </p>
            <h2>Pourquoi utiliser Argel7 ® en spray ?</h2>
            <p>
            Argel7 ® en spray :
            <ul>
                <li>Idéal pour les zones difficiles d’accès</li>
               <li> Fonctionne dans toutes les positions</li>
                <li>Effet froid renforcé et prolongé</li>
                <li>Un volume de 125 ml</li>
            </ul>
            </p>
            <h2>Qui peut utiliser Argel 7 ® gel de message ?</h2>
            Toutes les personnes qui connaissent des zones d’inconfort au niveau des genoux, épaules, poignets, cou, dos… et qui souhaitent détendre ces zones par des massages. 
            
            <h2>Le massage à travers les millénaires</h2>
            
            L’étymologie du mot « Massage » a plusieurs origines qui se mêlent :
            <ul>
                <li>« mass’h » en langue arabe signifie frotter doucement</li>
               <li> « massesh » en langue hébraïque peut être traduit par le verbe palper</li>
               <li> « massein » en grec ancien, veut dire pétrir avec les mains</li>
                <li>« manas » en latin, évoque aussi les mains, etc. Mais à l’époque des Romains, on utilisait surtout le terme « fricare » pour parler du massage. Un terme qui reprend bien l’idée de friction qu’on retrouve dans le massage énergique et bénéfique.</li>
            </ul>",
            'quantity' => '1',
            'weight' => '150',
            'price' => 26.00,
            'sale_price' =>26.00,
            'status' => 1,
        ]);

        Product::create([

            'brand_id' => '1', 
            'sku' =>'00000003',
            'name' => 'argel7 en pot',
            'slug' => 'argel7-pot',
            'description' => "<h2>Découvrez les bienfaits du pot Argel 7 ®</h2>
            <br>
            Pour masser toute la famille, sans se limiter ! Le pot d’Argel7 ® est ce qu’il y a de plus pratique si on veut l’utiliser sur de larges zones. <br>
            <br>
            Argel 7 ® possède toutes les qualités pour réaliser un message efficace et bienfaisant. Il apaise la peau en réduisant l’inconfort engendré par les frictions du massage, favorise le bien-être et la détente. Les huiles essentielles éveillent les sens et développent le caractère apaisant du massage. Le menthol procure un effet froid immédiat qui évite les tiraillements et les échauffements. Nous conseillons d’utiliser le pot Argel 7 ® pour des massages journaliers.<br>
            <br>
            <h2>Pourquoi utiliser Argel7 ® en pot ?</h2>
            <br>
            Argel7 ® en pot :<br>
            <br>
            <ul>
                <li>Idéal pour les massages intensifs</li>
               <li> Adapté pour de larges zones du corps</li>
               <li> A privilégier pour une utilisation familiale</li>
                <li>Un volume de 120 ml</li>
            </UL>
            <h2>Qui peut utiliser Argel 7 ® gel de message ?</h2>
            <br>
            Toutes les personnes qui connaissent des zones d’inconfort au niveau des genoux, épaules, poignets, cou, dos… et qui souhaitent détendre ces zones par des massages.  <br>
            
            <h2>Les bienfaits du massage</h2>
            
            Il existe plusieurs formes de massages aux effets positifs multiples. D’une part, il participe à décontracter les muscles. Chez les personnes âgées, il renforce l’équilibre postural. Il améliore aussi la souplesse des tendons et des ligaments grâce à une action ciblée sur les fibres tendineuses. D’autre part, de nombreuses études ont montré les bénéfices du massage au niveau des zones articulaires, comme la main ou le genou. Il améliore notamment la souplesse dans le cas de gênes et de raideurs du poignet.",
            'quantity' => '1',
            'weight' => '150',
            'price' => 26.00,
            'sale_price' =>26.00,
            'status' => 1,
        ]);

        //TODO:  factory('App\Models\Product', 10)->create();
    }
}
