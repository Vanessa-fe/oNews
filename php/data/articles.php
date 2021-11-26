<?php

function getArticles($index = null)
{
    // On crée une variable $articles contenant TOUS les articles du site
    $articles = [
        1 => [
            'title' => 'It\'s gonna be Legen…dary ! Legendary !',
            'author' => 'Darren Collison',
            'text' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.<br>
            Totam accusantium iure perspiciatis provident error, eos aut inventore beatae odit tempora cupiditate voluptate dolor perferendis consectetur molestiae dolorum rem ipsum, obcaecati alias laboriosam! Sapiente optio natus, id obcaecati ut maiores voluptates. Sed unde asperiores quo aspernatur fuga dolor quas hic cupiditate voluptatibus voluptas voluptate eos at, ex harum ratione dolorum? Expedita ab nesciunt excepturi cupiditate totam laudantium? Voluptatibus aspernatur ex delectus mollitia sapiente unde et tempora qui perspiciatis vitae magnam, commodi distinctio neque, temporibus asperiores quas laborum inventore dolores quidem praesentium minima omnis facilis nostrum. Error quasi quibusdam beatae eum quo obcaecati, commodi ducimus nulla in pariatur iusto recusandae harum nesciunt tempore reiciendis ratione inventore excepturi, maiores consequuntur dolores dolor ut sit? Facilis commodi, omnis reprehenderit est id vel! Sunt, maiores enim? Ad at accusantium quaerat quasi deleniti perferendis blanditiis libero perspiciatis similique, numquam dolore consequuntur et velit quod exercitationem amet accusamus, mollitia assumenda soluta. Voluptatum amet fuga harum necessitatibus dolorum. Odio, impedit vero. Voluptatibus minus eveniet repellat. Harum assumenda adipisci ex, explicabo ad ullam laboriosam similique quo? Nihil repudiandae aperiam non numquam dolores? Asperiores voluptas tempora quos quod illum quasi sequi nam sint, minus dolorum sunt veniam eveniet inventore soluta. Hic voluptatem animi aliquam iusto tenetur minima odit dicta voluptas ullam iste! Consequatur dolorum vero adipisci quibusdam dolorem voluptatibus dolores blanditiis illum assumenda, eveniet aut optio rerum quisquam nostrum sequi quia veritatis, modi perferendis velit nihil placeat quam obcaecati neque vitae. Ea quasi tenetur voluptate, dolores laborum harum fugiat ipsum aperiam omnis beatae voluptas ipsam, iste optio blanditiis accusantium mollitia repellat recusandae consequuntur eaque.</p>
            
            <p>
            J\'haïs l\'hiver, la slush, la glace. J\'haïs le printemps ça pue la vache. J\'haïs l\'été y\'a trop de maringnouins. J\'haïs l\'automne parce qu\'l\'hiver s\'en vient. Fugit nihil, quibusdam aliquid blanditiis ipsum alias expedita in consequuntur repellat. Molestiae tempora accusantium officiis. Labore, magnam fuga ad deserunt voluptatibus cupiditate commodi esse ullam harum explicabo aperiam, delectus dicta sequi tenetur omnis perspiciatis, odio consequuntur aut distinctio rerum natus. Voluptas nesciunt nostrum odit a officiis earum corrupti? Soluta laboriosam, delectus earum ut officia consequatur facilis natus sapiente, consectetur dolorem illum quasi eos numquam a veritatis vitae autem dolor. Error vel deserunt magni minus, officia ab dolor animi aliquam nihil autem consequuntur impedit illum provident labore debitis hic praesentium neque perspiciatis quisquam ratione distinctio. Nemo dicta nesciunt consequatur pariatur, minus possimus architecto labore blanditiis assumenda expedita minima, illum magni doloribus aspernatur sed quas sapiente quasi tempora. Ratione nostrum aut delectus dolores earum cumque.</p>',
            'author_image' => 'icon-dar.png',
            'date' => '2018-02-10',
            'category' => 'team',
        ],
        [
            'title' => 'Lorem ipsum dolor article 2',
            'author' => 'John Marchill',
            'text' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit neque illo veritatis explicabo consequatur laborum, facere omnis ducimus tempore alias quia suscipit error sit perspiciatis quibusdam. Doloremque temporibus dolores harum quisquam hic quasi tempora deleniti, veniam odio, quod excepturi ex dolorem delectus asperiores reprehenderit fugit nihil mollitia consectetur quos! At ex repudiandae voluptas iure? Et eligendi suscipit, perspiciatis inventore dignissimos voluptatibus tempore quaerat eveniet! Placeat magnam velit sunt distinctio mollitia accusamus, suscipit nostrum quae quaerat dolorem necessitatibus nulla dolor unde quo accusantium, veritatis laudantium, animi autem atque rem soluta beatae? Cumque nesciunt ea nihil voluptas ipsum sed temporibus doloribus quas, eius distinctio error debitis ab tempora quod dicta quo, assumenda molestias unde laudantium quasi! Quo aliquam facilis esse! Inventore aliquid eveniet qui voluptatum provident beatae optio corporis? Quo, labore voluptatem reprehenderit, nesciunt laudantium officia repellat nostrum fugit distinctio vero necessitatibus quasi praesentium fuga aliquam ab dolorum blanditiis cumque consequuntur! Tempora beatae facere sed, architecto quisquam quos? Quia facere qui saepe! Odio, rem! Voluptatem accusamus iste quidem ex animi delectus corrupti rem sunt. Totam suscipit, enim sapiente inventore saepe harum ipsa excepturi dolorem. A nemo temporibus omnis, qui eius quam adipisci vero eos obcaecati repellendus repellat impedit quas maiores eum cumque minus voluptatibus deserunt ullam aliquid modi officiis corporis blanditiis! Quae blanditiis iure obcaecati, quo qui accusantium voluptate eius necessitatibus, quisquam alias deserunt repellendus expedita distinctio voluptates? Esse facere, earum incidunt, ullam recusandae autem quis ratione voluptatibus aut maxime eius itaque. Modi veritatis laborum iusto accusamus adipisci molestias sit ullam tenetur tempora enim similique dolores, dolore, reiciendis reprehenderit dicta. Veritatis suscipit in, quo ea voluptatum possimus dolor vel repudiandae, delectus distinctio quam dignissimos adipisci, provident sequi perspiciatis? Sapiente dolore minima distinctio, ex placeat consequuntur non id minus sint totam eum voluptates fuga cum consectetur qui eos, soluta repudiandae tenetur quaerat aperiam molestias dolor quasi! Animi odit distinctio tenetur repudiandae, dolorum facere aperiam cupiditate magnam dolor, est ullam reprehenderit quidem nam incidunt. Quos odit amet ducimus sed esse vero voluptatibus possimus voluptatem perspiciatis non, veniam molestiae eveniet iste adipisci laborum provident praesentium quisquam neque? Officia, architecto ducimus? Laborum ab quas eos neque.</p>',
            'author_image' => 'icon-john.png',
            'date' => '2018-03-27',
            'category' => 'news',
        ],
        [
            'title' => 'Lorem ipsum dolor article 3',
            'author' => 'Olivier Hertz',
            'text' => '<p>Vous savez, moi je ne crois pas qu’il y ait de bonne ou de mauvaise situation. Moi, si je devais résumer ma vie aujourd’hui avec vous, je dirais que c’est d’abord des rencontres. Des gens qui m’ont tendu la main, peut-être à un moment où je ne pouvais pas, où j’étais seul chez moi. Et c’est assez curieux de se dire que les hasards, les rencontres forgent une destinée… Parce que quand on a le goût de la chose, quand on a le goût de la chose bien faite, le beau geste, parfois on ne trouve pas l’interlocuteur en face je dirais, le miroir qui vous aide à avancer. Alors ça n’est pas mon cas, comme je disais là, puisque moi au contraire, j’ai pu : et je dis merci à la vie, je lui dis merci, je chante la vie, je danse la vie… je ne suis qu’amour ! Et finalement, quand beaucoup de gens aujourd’hui me disent « Mais comment fais-tu pour avoir cette humanité ? », et bien je leur réponds très simplement, je leur dis que c’est ce goût de l’amour ce goût donc qui m’a poussé aujourd’hui à entreprendre une construction mécanique, mais demain qui sait ? Peut-être simplement à me mettre au service de la communauté, à faire le don, le don de soi…</p>',
            'author_image' => 'icon-ohz.png',
            'date' => '2018-05-05',
            'category' => 'news',
        ],
        [
            'title' => 'Lorem ipsum dolor article 4',
            'author' => 'Jack Sparrow',
            'text' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.<br>
            Totam accusantium iure perspiciatis provident error, eos aut inventore beatae odit tempora cupiditate voluptate dolor perferendis consectetur molestiae dolorum rem ipsum, obcaecati alias laboriosam! Sapiente optio natus, id obcaecati ut maiores voluptates. Sed unde asperiores quo aspernatur fuga dolor quas hic cupiditate voluptatibus voluptas voluptate eos at, ex harum ratione dolorum? Expedita ab nesciunt excepturi cupiditate totam laudantium? Voluptatibus aspernatur ex delectus mollitia sapiente unde et tempora qui perspiciatis vitae magnam, commodi distinctio neque, temporibus asperiores quas laborum inventore dolores quidem praesentium minima omnis facilis nostrum. Error quasi quibusdam beatae eum quo obcaecati, commodi ducimus nulla in pariatur iusto recusandae harum nesciunt tempore reiciendis ratione inventore excepturi, maiores consequuntur dolores dolor ut sit? Facilis commodi, omnis reprehenderit est id vel! Sunt, maiores enim? Ad at accusantium quaerat quasi deleniti perferendis blanditiis libero perspiciatis similique, numquam dolore consequuntur et velit quod exercitationem amet accusamus, mollitia assumenda soluta. Voluptatum amet fuga harum necessitatibus dolorum. Odio, impedit vero. Voluptatibus minus eveniet repellat. Harum assumenda adipisci ex, explicabo ad ullam laboriosam similique quo? Nihil repudiandae aperiam non numquam dolores? Asperiores voluptas tempora quos quod illum quasi sequi nam sint, minus dolorum sunt veniam eveniet inventore soluta. Hic voluptatem animi aliquam iusto tenetur minima odit dicta voluptas ullam iste! Consequatur dolorum vero adipisci quibusdam dolorem voluptatibus dolores blanditiis illum assumenda, eveniet aut optio rerum quisquam nostrum sequi quia veritatis, modi perferendis velit nihil placeat quam obcaecati neque vitae. Ea quasi tenetur voluptate, dolores laborum harum fugiat ipsum aperiam omnis beatae voluptas ipsam, iste optio blanditiis accusantium mollitia repellat recusandae consequuntur eaque.</p>
            
            <p>
            Eaque, sapiente? Dicta dolorem saepe commodi omnis, dolores accusantium qui hic minus distinctio, fugit nihil, quibusdam aliquid blanditiis ipsum alias expedita in consequuntur repellat. Molestiae tempora accusantium officiis. Labore, magnam fuga ad deserunt voluptatibus cupiditate commodi esse ullam harum explicabo aperiam, delectus dicta sequi tenetur omnis perspiciatis, odio consequuntur aut distinctio rerum natus. Voluptas nesciunt nostrum odit a officiis earum corrupti? Soluta laboriosam, delectus earum ut officia consequatur facilis natus sapiente, consectetur dolorem illum quasi eos numquam a veritatis vitae autem dolor. Error vel deserunt magni minus, officia ab dolor animi aliquam nihil autem consequuntur impedit illum provident labore debitis hic praesentium neque perspiciatis quisquam ratione distinctio. Nemo dicta nesciunt consequatur pariatur, minus possimus architecto labore blanditiis assumenda expedita minima, illum magni doloribus aspernatur sed quas sapiente quasi tempora. Ratione nostrum aut delectus dolores earum cumque.</p>',
            'author_image' => 'icon-spr.png',
            'date' => '2018-07-31',
            'category' => 'work',
        ],
        [
            'title' => 'Lorem ipsum dolor article 5',
            'author' => 'Terry Rozier',
            'text' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.<br>
            Totam accusantium iure perspiciatis provident error, eos aut inventore beatae odit tempora cupiditate voluptate dolor perferendis consectetur molestiae dolorum rem ipsum, obcaecati alias laboriosam! Sapiente optio natus, id obcaecati ut maiores voluptates. Sed unde asperiores quo aspernatur fuga dolor quas hic cupiditate voluptatibus voluptas voluptate eos at, ex harum ratione dolorum? Expedita ab nesciunt excepturi cupiditate totam laudantium? Voluptatibus aspernatur ex delectus mollitia sapiente unde et tempora qui perspiciatis vitae magnam, commodi distinctio neque, temporibus asperiores quas laborum inventore dolores quidem praesentium minima omnis facilis nostrum. Error quasi quibusdam beatae eum quo obcaecati, commodi ducimus nulla in pariatur iusto recusandae harum nesciunt tempore reiciendis ratione inventore excepturi, maiores consequuntur dolores dolor ut sit? Facilis commodi, omnis reprehenderit est id vel! Sunt, maiores enim? Ad at accusantium quaerat quasi deleniti perferendis blanditiis libero perspiciatis similique, numquam dolore consequuntur et velit quod exercitationem amet accusamus, mollitia assumenda soluta. Voluptatum amet fuga harum necessitatibus dolorum. Odio, impedit vero. Voluptatibus minus eveniet repellat. Harum assumenda adipisci ex, explicabo ad ullam laboriosam similique quo? Nihil repudiandae aperiam non numquam dolores? Asperiores voluptas tempora quos quod illum quasi sequi nam sint, minus dolorum sunt veniam eveniet inventore soluta. Hic voluptatem animi aliquam iusto tenetur minima odit dicta voluptas ullam iste! Consequatur dolorum vero adipisci quibusdam dolorem voluptatibus dolores blanditiis illum assumenda, eveniet aut optio rerum quisquam nostrum sequi quia veritatis, modi perferendis velit nihil placeat quam obcaecati neque vitae. Ea quasi tenetur voluptate, dolores laborum harum fugiat ipsum aperiam omnis beatae voluptas ipsam, iste optio blanditiis accusantium mollitia repellat recusandae consequuntur eaque.</p>
            
            <p>
            Eaque, sapiente? Dicta dolorem saepe commodi omnis, dolores accusantium qui hic minus distinctio, fugit nihil, quibusdam aliquid blanditiis ipsum alias expedita in consequuntur repellat. Molestiae tempora accusantium officiis. Labore, magnam fuga ad deserunt voluptatibus cupiditate commodi esse ullam harum explicabo aperiam, delectus dicta sequi tenetur omnis perspiciatis, odio consequuntur aut distinctio rerum natus. Voluptas nesciunt nostrum odit a officiis earum corrupti? Soluta laboriosam, delectus earum ut officia consequatur facilis natus sapiente, consectetur dolorem illum quasi eos numquam a veritatis vitae autem dolor. Error vel deserunt magni minus, officia ab dolor animi aliquam nihil autem consequuntur impedit illum provident labore debitis hic praesentium neque perspiciatis quisquam ratione distinctio. Nemo dicta nesciunt consequatur pariatur, minus possimus architecto labore blanditiis assumenda expedita minima, illum magni doloribus aspernatur sed quas sapiente quasi tempora. Ratione nostrum aut delectus dolores earum cumque.</p>',
            'author_image' => 'icon-tr.png',
            'date' => '2018-09-09',
            'category' => 'team',
        ],
        [
            'title' => 'Lorem ipsum dolor article 6',
            'author' => 'Trevor Bayne',
            'text' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.<br>
            Totam accusantium iure perspiciatis provident error, eos aut inventore beatae odit tempora cupiditate voluptate dolor perferendis consectetur molestiae dolorum rem ipsum, obcaecati alias laboriosam! Sapiente optio natus, id obcaecati ut maiores voluptates. Sed unde asperiores quo aspernatur fuga dolor quas hic cupiditate voluptatibus voluptas voluptate eos at, ex harum ratione dolorum? Expedita ab nesciunt excepturi cupiditate totam laudantium? Voluptatibus aspernatur ex delectus mollitia sapiente unde et tempora qui perspiciatis vitae magnam, commodi distinctio neque, temporibus asperiores quas laborum inventore dolores quidem praesentium minima omnis facilis nostrum. Error quasi quibusdam beatae eum quo obcaecati, commodi ducimus nulla in pariatur iusto recusandae harum nesciunt tempore reiciendis ratione inventore excepturi, maiores consequuntur dolores dolor ut sit? Facilis commodi, omnis reprehenderit est id vel! Sunt, maiores enim? Ad at accusantium quaerat quasi deleniti perferendis blanditiis libero perspiciatis similique, numquam dolore consequuntur et velit quod exercitationem amet accusamus, mollitia assumenda soluta. Voluptatum amet fuga harum necessitatibus dolorum. Odio, impedit vero. Voluptatibus minus eveniet repellat. Harum assumenda adipisci ex, explicabo ad ullam laboriosam similique quo? Nihil repudiandae aperiam non numquam dolores? Asperiores voluptas tempora quos quod illum quasi sequi nam sint, minus dolorum sunt veniam eveniet inventore soluta. Hic voluptatem animi aliquam iusto tenetur minima odit dicta voluptas ullam iste! Consequatur dolorum vero adipisci quibusdam dolorem voluptatibus dolores blanditiis illum assumenda, eveniet aut optio rerum quisquam nostrum sequi quia veritatis, modi perferendis velit nihil placeat quam obcaecati neque vitae. Ea quasi tenetur voluptate, dolores laborum harum fugiat ipsum aperiam omnis beatae voluptas ipsam, iste optio blanditiis accusantium mollitia repellat recusandae consequuntur eaque.</p>
            
            <p>
            Eaque, sapiente? Dicta dolorem saepe commodi omnis, dolores accusantium qui hic minus distinctio, fugit nihil, quibusdam aliquid blanditiis ipsum alias expedita in consequuntur repellat. Molestiae tempora accusantium officiis. Labore, magnam fuga ad deserunt voluptatibus cupiditate commodi esse ullam harum explicabo aperiam, delectus dicta sequi tenetur omnis perspiciatis, odio consequuntur aut distinctio rerum natus. Voluptas nesciunt nostrum odit a officiis earum corrupti? Soluta laboriosam, delectus earum ut officia consequatur facilis natus sapiente, consectetur dolorem illum quasi eos numquam a veritatis vitae autem dolor. Error vel deserunt magni minus, officia ab dolor animi aliquam nihil autem consequuntur impedit illum provident labore debitis hic praesentium neque perspiciatis quisquam ratione distinctio. Nemo dicta nesciunt consequatur pariatur, minus possimus architecto labore blanditiis assumenda expedita minima, illum magni doloribus aspernatur sed quas sapiente quasi tempora. Ratione nostrum aut delectus dolores earum cumque.</p>',
            'author_image' => 'icon-tre.png',
            'date' => '2018-10-25',
            'category' => 'work',
        ],
        [
            'title' => 'Lorem ipsum article 7',
            'author' => 'Djyp',
            'text' => '<p>Beam me up, Scotty Valar morghulis Don\'t Panic Beam me up, Scotty Valar morghulis Don\'t Panic Beam me up, Scotty Valar morghulis Don\'t Panic Beam me up, Scotty Valar morghulis Don\'t Panic Beam me up, Scotty Valar morghulis Don\'t Panic Beam me up, Scotty Valar morghulis Don\'t Panic Beam me up, Scotty Valar morghulis Don\'t Panic</p>',
            'author_image' => 'icon-john.png',
            'date' => '2021-01-05',
            'category' => 'work',
        ],
    ];

    if (is_null($index)) {
        return array_reverse($articles, true);
    }

    if (isset($articles[$index])) {
        return $articles[$index];
    }

    sendError('Erreur, l\'article demandé n\'existe pas.');
}

/**
 * Permet d'obtenir l'article demandé selon l'index dans l'url
 */
function getRequestedArticle()
{
    if (isset($_GET['index'])) {
        $index = $_GET['index'];
        return getArticles($index);
    }

    sendError('Erreur, aucun index d\'article n\'est précisé !');
}
