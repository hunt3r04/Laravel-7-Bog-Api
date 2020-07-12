---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#Article management


APIs for managing users
<!-- START_0d4cb2104f73e3ee9cf74a52a015de76 -->
## Display a listing of the Articles.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/articles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/articles"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "title": "Sed pariatur et rerum quis et similique.",
            "slug": "fugit-exercitationem-consequatur-porro-dolore-sunt",
            "body": "st porro a cumque. Aut ut sed explicabo ea dicta ab ut. Fuga rem sit earum et. In excepturi dolorum fuga aut vel labore. Aut ipsam aut eligendi ipsum et saepe. Id vel placeat odio praesentium molestiae pariatur. Qui et quo vero et necessitatibus quisquam ipsam. Suscipit minima sit alias. Veritatis eos deserunt fuga amet voluptatibus praesentium. Ratione ipsa ut est. Adipisci nesciunt veritatis est dolorem fugit cupiditate. Ducimus facilis qui aspernatur harum architecto sed ut. Et deserunt non cum temporibus. Quia sed quasi impedit asperiores. Et a ratione asperiores nemo possimus eos nulla. Et corporis odit possimus perferendis voluptatem consectetur odio.",
            "author": "Lucius Corwin",
            "category_id": 5
        },
        {
            "id": 2,
            "title": "Fuga explicabo deserunt eius tenetur quia fuga ex nobis.",
            "slug": "fugiat-est-quisquam-soluta-rerum-quis-vitae",
            "body": "Sint earum mollitia harum rerum tenetur rem. Voluptatem quo iusto ipsum aut. Sapiente quis unde deleniti sed est alias. Consequatur quibusdam et vitae ea harum similique id. Voluptatem molestiae pariatur dicta dignissimos. Sapiente voluptas aut sit vitae incidunt est. Qui iusto et et excepturi corrupti magni repudiandae. Consequatur maiores placeat voluptatum sit iure sunt. Sunt asperiores voluptate praesentium. Architecto et impedit omnis atque sint voluptatem. Distinctio iure cumque autem sint qui. Culpa id animi aut ut non impedit. Saepe dolor omnis alias excepturi a eveniet laudantium et. Quae totam nostrum quae nihil. Qui voluptate sint numquam occaecati et. Quis rerum aperiam optio veritatis reiciendis. Ut et eius facilis ratione omnis est. Voluptatem sint sit enim sequi voluptatem. Similique sint quia qui nihil. Eveniet sunt non voluptatem doloremque. Adipisci blanditiis et excepturi illum. Neque ipsam quis doloribus nulla excepturi. Quasi sint accusamus vel. Consequatur deleniti magni non ullam error. Magni inventore natus sed est veritatis. Veniam at laboriosam nesciunt nesciunt quos. Possimus magni est quos quidem maxime at. Quidem id quo non illum qui. Non qui inventore animi neque nostrum. Voluptas sit possimus commodi quia beatae doloribus dolor. Velit reprehenderit ut odio modi ullam. Veniam veniam nemo soluta accusantium placeat dignissimos distinctio. Et qui itaque accusamus aut recusandae. Aut dolores sed ipsa voluptate odit beatae. Repudiandae laudantium inventore voluptas et sint ullam velit modi. Voluptatum sunt dolorum exercitationem veritatis praesentium. Dolor ex similique qui debitis voluptas deserunt vitae. Dolor itaque consequuntur in ea necessitatibus consequatur. In nam ut et iste ad rem alias quo. Ratione ut qui dolor. Totam nam eveniet nihil ea unde dolor. Temporibus sunt aut qui soluta modi rerum. Et repellat quia ut aut et similique at. Nostrum similique in aperiam omnis quidem. Et atque officia sit sed officia. Cupiditate aut alias et delectus vero dolore asperiores. Tempore provident harum et consequuntur. Labore vitae ratione inventore. Nam commodi aliquam minima illo earum omnis quia. Sed modi ut dolor est sit voluptatum. Fugit quia et quo consequatur exercitationem dolorem. Odio est voluptate ut in magnam. Placeat et minima molestiae voluptatem. Nisi nihil nostrum non dolor veniam. Veniam dolorum id omnis aliquid reiciendis aut. Harum sed quia exercitationem. Rerum et fugit atque animi nesciunt quia consequatur dolore. Deleniti doloremque sit sed aspernatur sequi quis. Beatae a eligendi non enim nihil exercitationem animi. Temporibus sed officia earum laboriosam. Est repellat minima ipsum. Quisquam sint quia repellendus. Inventore recusandae qui et dolor et placeat sit. Dolores est consequatur unde aut fuga voluptas aut ab. Provident modi quaerat maxime impedit rerum. Nihil maiores consequatur delectus assumenda nesciunt neque sint.",
            "author": "Prof. Lauryn Mohr",
            "category_id": 1
        },
        {
            "id": 3,
            "title": "Aspernatur qui est molestiae ut ullam culpa voluptas quia provident.",
            "slug": "aut-qui-reiciendis-veniam-eos-sed",
            "body": "Non ut eligendi totam ratione placeat. Id tenetur dignissimos adipisci nihil deserunt sit. Veritatis natus aspernatur unde voluptas. Vel repudiandae quia eos quis repellat rerum nesciunt. Quidem sed dolorem maxime natus nesciunt assumenda quia. Ut consequuntur nam placeat aliquid molestiae. Totam et aliquam sint facilis. Ut est nihil accusantium harum. Fugit aperiam autem omnis optio vel. Voluptatem quis atque saepe rerum voluptas. Sapiente ut voluptatem quae reprehenderit culpa dicta eum. Eum esse dicta quas maiores minus quia. Ea itaque et iure voluptatem optio consequatur. Praesentium hic eius veritatis impedit culpa iusto architecto. Recusandae maiores nihil recusandae voluptatem quasi. Quasi possimus delectus sed sed. At nisi quis vitae sed dolorum pariatur. Sed nostrum sunt porro. Molestias eum nihil rem. Tempora est non perferendis dolore tenetur. Quae totam magni consectetur nostrum. Aut vel debitis ullam ut suscipit. Accusantium perspiciatis suscipit exercitationem molestiae qui. Facere dolore laudantium nisi aperiam nostrum perferendis. Laboriosam placeat velit distinctio et. Fugit reiciendis voluptates alias eveniet harum porro sint. Dolor ut corrupti pariatur. Quidem ipsa voluptas dolorum quis facilis aperiam. Aut quia temporibus dolore voluptate quae. Et et facere nobis. Perspiciatis est corrupti laborum reiciendis voluptatem eos amet. Sed necessitatibus at sit a. Ratione illum aut illum impedit. Qui itaque animi itaque. Reprehenderit voluptatibus aut quisquam. Placeat magnam earum autem placeat et dolor. Voluptas ad saepe enim ullam eos alias tempora eos. A impedit nisi sint officiis quasi et. Similique accusantium itaque et. Et fugit fuga maiores consequatur dolores alias dolores. Ea et quo autem consequatur praesentium officia. Et est necessitatibus facere ut natus optio eos. Quas quasi a earum ratione debitis. Voluptas explicabo porro voluptate. Dignissimos molestiae aut sed rerum consequatur mollitia dolor. Voluptatem et autem ea voluptas eveniet sint vero aut. Tempore eligendi et amet vitae sunt voluptates. Magnam qui corporis quibusdam at maxime. Velit reprehenderit et rerum et vel. Quidem ipsam quam a molestiae est assumenda a. Facilis voluptatem inventore magni ea. Fuga delectus accusantium ut quas corrupti et blanditiis. Consectetur itaque et sequi sunt accusamus repellendus. Totam dolores dolores veniam nesciunt. Repellat consequatur sunt autem. Dolores provident itaque mollitia expedita. Officiis atque et saepe et. Veritatis explicabo necessitatibus quia nihil maiores. Qui velit aspernatur earum quibusdam sunt. Et qui suscipit vitae quibusdam aut illo. Molestiae molestiae et eum sint. Eos nemo veritatis ea et aut repellat ut. Impedit nulla a error iste. Illum cum ut quisquam perferendis et iste dicta. Necessitatibus pariatur voluptatem corporis rerum minus sunt. Eum molestiae error aliquid consequuntur sapiente ea.",
            "author": "Dorcas Dibbert",
            "category_id": 1
        },
        {
            "id": 4,
            "title": "Ad incidunt qui ut non sit sed molestiae.",
            "slug": "voluptatem-reprehenderit-cum-et-consectetur-hic-nihil",
            "body": "Optio laboriosam perferendis ipsam et. Corrupti laboriosam commodi est autem voluptate pariatur. Ut doloribus quisquam omnis porro voluptatum nisi. Minima aliquam cumque dolor. Facilis perspiciatis quas enim. Eos nobis exercitationem accusamus tempora voluptatem neque corrupti. Dolor qui totam molestiae quasi. Ut distinctio odit velit enim sint. Repellendus officiis voluptatum occaecati illum incidunt dolorum labore. Dolorum omnis modi doloremque saepe. Qui dolorum ut autem vitae architecto dignissimos ipsa. Error ea aut animi aut voluptates saepe fugit omnis. Possimus accusantium ut ea aut sed perferendis maxime deserunt. Rerum eum accusamus doloremque est. Delectus beatae magni minima expedita qui. Sed est quia dignissimos incidunt accusamus laboriosam in. Vel blanditiis earum consequatur ut. Dolorem asperiores esse est repellendus quis. Omnis magnam ea eos velit molestias officiis et voluptas. Quidem amet enim dolores ratione commodi nam corrupti harum. Est sit a vel ducimus enim natus. Eum velit dolorem consequuntur quos autem earum qui. Est cum sit a quod ex dolor. Eligendi esse eos quidem distinctio necessitatibus. Est veniam aut at. Ut dolore autem vero et veniam. Itaque aperiam doloremque reprehenderit. Sed non incidunt accusamus veniam nisi et culpa. Laboriosam natus dolorem sapiente suscipit explicabo pariatur eum. Et vitae quibusdam et maxime saepe iure. Voluptatem debitis fuga impedit odio aut excepturi. Non accusantium est quam molestiae quas asperiores. Quia minima saepe corporis omnis temporibus magni illo. Nulla et facilis vero perferendis maxime facilis quia. Eos error ipsum ut quibusdam. Nihil sapiente omnis explicabo corrupti sequi corrupti sed. Dolores maiores debitis perferendis. Impedit beatae non placeat qui delectus asperiores. Nesciunt quo mollitia quo maiores et. Impedit ut consequatur est sit dolorum dolor consectetur. Est ad qui voluptate. Consequatur beatae libero dolorum ut. Quia veniam nesciunt corrupti. Vitae eum repudiandae at voluptatum et. Commodi sunt ut minus laborum facere. Odit minima nulla consequatur reiciendis. Et unde fugit sint eum. Ipsum possimus incidunt sunt alias dolore dignissimos consequatur hic. Dicta vero aut laborum blanditiis ducimus sed provident cupiditate. Sit fugit provident eum enim ab et aliquid. Quibusdam iure ea rerum et doloremque error sunt consequatur. Voluptas et voluptas sapiente et. Nostrum animi voluptatibus atque aut. Voluptatem voluptas quis consectetur voluptate distinctio sint. Earum aliquam numquam rerum magni ut cumque. Repudiandae itaque tenetur rerum nihil quos dolorem quibusdam sapiente. Perferendis id aut esse autem ut cum numquam. Corporis sint odio aspernatur quia expedita quibusdam excepturi animi. Et quo sed ullam inventore molestiae est reiciendis. Et sunt voluptates dolor voluptatem id placeat aut. Est quia qui ipsum cumque molestiae. Qui sunt aut laborum et. Modi modi pariatur possimus. Deserunt neque molestias vel neque laudantium numquam.",
            "author": "Gregg Spinka",
            "category_id": 1
        },
        {
            "id": 5,
            "title": "Et a mollitia ut non qui sit quia.",
            "slug": "quia-repellat-error-aut",
            "body": "Officiis molestiae neque nihil dolores quia. Doloremque quis mollitia consequatur est ut. Earum dicta assumenda debitis at temporibus. Repellat expedita accusamus nam ea. Aut dignissimos quia modi voluptates molestias ipsa voluptate autem. Delectus nobis dolore laborum necessitatibus. Ut accusamus maxime voluptas rerum et eos. Expedita quia nemo sint vel. Ab eos delectus quos. Sequi ut eum explicabo fugiat beatae qui. Delectus ut corrupti asperiores fugiat eveniet voluptatem. Unde quidem quae mollitia temporibus est. Excepturi dolores dolores nemo nesciunt provident. Repellat eos rerum non voluptates repellendus. Ut est sit quia facilis voluptas. Et aut ipsam velit aperiam accusamus voluptatem eos. Sit ad earum soluta ut quibusdam. Nihil quia et omnis eveniet ab cumque eaque. Doloremque assumenda sequi incidunt. Est reiciendis dolores quibusdam maiores. Sint est optio explicabo omnis vel. Beatae nulla qui sit eos sed quisquam. Aut aut beatae non qui consequatur dolorum. Reiciendis tenetur modi recusandae dicta itaque. Beatae voluptatibus corrupti et tenetur quia omnis. Inventore exercitationem sint consectetur et. Accusamus asperiores voluptatem repudiandae. Sunt provident quia aut sunt beatae. Delectus sint vitae aperiam. Voluptate quisquam distinctio exercitationem voluptatibus enim sint. Rem sunt voluptas mollitia dolor molestiae corporis aut et. Ipsam ad itaque autem error tempore officiis. Enim eum rerum dolor reiciendis quas qui. Et facilis quaerat minus rerum sed quaerat. Quo dignissimos assumenda non et. Voluptates soluta recusandae autem laboriosam consequuntur. Non et omnis recusandae labore et et asperiores. Ipsa quidem fuga cum tenetur. Nihil quisquam sit sequi sunt dicta hic. Sit ea est dolores sunt qui sit nihil. Et impedit aut assumenda reprehenderit. Aut aut consequuntur unde et laudantium praesentium. Laboriosam occaecati amet repudiandae esse et sit. Eos est eos voluptates exercitationem. Ullam expedita voluptas praesentium blanditiis quia sit. Sit error laudantium harum aspernatur quia labore eius. Voluptatum eos vel qui accusantium et numquam aspernatur natus. Maxime veritatis placeat non recusandae. Doloremque sed tempora eos. Asperiores est et sed unde nobis. Et possimus ut nemo sapiente et occaecati. Illo maiores dignissimos quidem iste sed deserunt expedita. Nulla et hic itaque neque ad aut et. At eaque enim quis unde ut. Debitis neque dolorem vel itaque. Quia provident nemo facere ut dignissimos error nostrum. Et hic accusamus a harum dignissimos sapiente voluptatem. Ducimus eius dolores dolor rem deleniti veniam voluptate. Velit dolores cum ut quibusdam deserunt error illo. Dolores excepturi maxime voluptatem aut voluptas commodi. Voluptatum nulla reprehenderit qui earum. Reprehenderit totam dolorem eum harum qui earum eius. Asperiores dolore dolorem illum molestiae. Iure totam nisi autem quia dolore voluptatibus rem. Corporis vel dolorem deleniti.",
            "author": "Agustina Shields IV",
            "category_id": 1
        },
        {
            "id": 6,
            "title": "Possimus nihil quidem eos tempore omnis rem eos.",
            "slug": "quas-est-tempora-dolores-eos-qui",
            "body": "Tenetur voluptatum doloremque necessitatibus dolor occaecati est. Quia atque nihil mollitia nihil odio est. Modi quam doloremque aut est sint et. Voluptas pariatur expedita fugiat nihil. Molestiae quod tempore aut possimus sunt itaque et facere. Quia sapiente ut illum et. Beatae minima dolor repudiandae laborum labore. Qui et quibusdam alias quos veritatis et nisi. Aut debitis natus dolor doloremque assumenda vel qui. Quam ea ut velit dolor qui optio delectus ut. Eius ut id voluptatem blanditiis dolore illo. Odit doloribus dignissimos dignissimos reprehenderit perferendis non. Eum nam inventore hic nam est sed sequi eligendi. Voluptates velit autem vitae temporibus. Nisi fugiat est iure. Cupiditate id voluptatem necessitatibus porro non explicabo qui. Velit molestiae rerum et maiores nihil et et. Aut temporibus odio rerum velit et delectus harum. Accusantium ullam pariatur harum eaque voluptatem eius fuga. Perspiciatis necessitatibus ea dignissimos iure consequatur officia sed. Consequuntur aut vel quis nostrum atque voluptas. Dolor pariatur vitae tempore aut aliquid ea totam. Cupiditate dolorem voluptatem necessitatibus quia sit possimus et. Omnis consectetur harum voluptatum eos ut architecto perspiciatis. Inventore unde sequi libero in maxime. Aliquid sunt dignissimos repellat ipsam ut qui architecto dolor. Recusandae libero consequatur et voluptas eum possimus perferendis. Quibusdam dignissimos a cum quo et. Fugit et corrupti eveniet architecto optio. Et voluptatibus quam sed reprehenderit consectetur. Impedit similique vel non autem. Eum qui ut dolorum et. Praesentium quis nisi ex ea nobis reprehenderit fuga. Vitae voluptate quia quod est. Nihil minus deserunt iusto qui tenetur saepe. Odio totam id fugiat repudiandae optio labore. Exercitationem ut nihil architecto atque. Et repellat ex quisquam neque eos possimus. Dolor dolor beatae corporis fuga similique dignissimos. Tenetur necessitatibus ea aut ea nulla. Numquam ipsa non sed dolor. Voluptatem cupiditate aut et quis mollitia dolorum. Inventore voluptatem quam laborum illo voluptatem vel ut dolores. Pariatur fugiat voluptas maiores facilis eligendi consequatur. Quisquam quia et neque ea culpa. Asperiores sapiente eveniet expedita. Numquam qui animi adipisci corporis et. Error deserunt delectus voluptate est consequatur nulla quia. Harum ea inventore est. Itaque voluptatem molestias dolorum hic ea. Sit sit ut dolor eos possimus. Esse quibusdam occaecati assumenda aspernatur sunt. Sed voluptas accusamus non. Occaecati vitae tempore soluta minima eligendi. Error occaecati ut hic officia perspiciatis. Ut et voluptatibus autem modi reprehenderit est. Nesciunt quo mollitia qui animi. Architecto accusamus consequuntur non omnis libero vitae. Officiis ea animi nemo omnis. Aut omnis repudiandae debitis facere. Consequatur aliquid et nobis perferendis. Autem unde mollitia alias quis.",
            "author": "Dr. Vinnie Beer",
            "category_id": 1
        },
        {
            "id": 7,
            "title": "Nihil at officiis optio necessitatibus porro ab consectetur aliquam placeat in.",
            "slug": "consequatur-quia-dignissimos-numquam-et-numquam-consequatur-consequatur",
            "body": "Voluptas at veritatis id et. Ratione molestiae perspiciatis asperiores dolorum neque. Non commodi qui cumque facere ut. Id dolorem quis laboriosam pariatur voluptatem explicabo fugit nihil. Dolorem nisi voluptates est est. Nulla quaerat culpa sunt quod. Dolorum occaecati voluptatem velit est. Vel voluptas totam impedit id eligendi voluptatem. Et temporibus est non repudiandae tempora occaecati ducimus. Suscipit architecto et aut sapiente ipsa dicta. Voluptatem libero dolorem eos qui temporibus harum. Tempora quia autem velit et asperiores. Cumque vel ut et. Et ut suscipit aut. Aut fugiat et enim voluptate deserunt suscipit cum. Rerum est velit velit consequatur error. Illum eum voluptas modi est ad. Et minus rerum dolor maxime recusandae quis. Architecto nihil et adipisci ex ea. Voluptatem minima iure reiciendis sed. Quia incidunt enim non fugit provident est consequatur. Fugiat modi molestias totam praesentium. Iure cum ut aliquam error odit. Commodi quod dolorem et enim. Sed non omnis numquam quibusdam. Qui enim at sunt unde. Saepe velit molestiae voluptatem ullam. Omnis omnis et fugit optio debitis sint. Aut quisquam quia aperiam autem ut distinctio. Voluptatem esse ea quaerat tempora aut asperiores. Soluta est officia nostrum corporis. Aut est sed et. Quo eaque sunt voluptatem amet ut. Ea aut sed explicabo provident omnis dolorum. Qui cumque odio quia rerum aut. Alias sed architecto ea ad. Odit expedita eum quia odit nostrum voluptatem rem laudantium. Ad distinctio aut assumenda assumenda sint velit. Ullam ut praesentium fuga dolores eum nostrum qui et. Autem corrupti amet dolor eligendi omnis repudiandae distinctio. Ut assumenda voluptatem saepe omnis molestias reiciendis. Quaerat voluptate fugiat dignissimos quia. Dolores ducimus est delectus sunt sunt. Enim sit consequatur dolores quaerat neque quos. Qui laudantium similique facilis sit sit perspiciatis velit. Dolores dolore dolores officia quas nostrum architecto. Est natus ipsum eligendi ut assumenda quo eum. Asperiores vitae eos quisquam consectetur sunt magnam laudantium. Minus commodi omnis aperiam sequi optio. Ut incidunt commodi necessitatibus aut facilis ut quia provident. Nobis fugiat et libero doloribus sit laborum distinctio. Rem magni est facilis qui minus. Quaerat et natus omnis repudiandae enim. Inventore aut delectus dolores id sit voluptatem. Dolore laboriosam assumenda animi expedita quis veniam neque consequatur. Distinctio cum voluptatem omnis ullam quidem ipsum. Sit fuga et ipsum mollitia perferendis autem dolorum. Illo odio ea possimus repellendus. Quo eveniet nostrum animi. Esse qui corporis repudiandae distinctio vel cumque. Ipsam temporibus dolore soluta soluta aut. In et eos neque et quis debitis accusamus. Enim vero rerum tenetur dolorem aut molestias. Reiciendis sit magnam culpa. Et qui delectus illo aut quibusdam nobis omnis. Sit eum ea sint laborum voluptatibus.",
            "author": "Mr. Makenna Kohler",
            "category_id": 1
        },
        {
            "id": 8,
            "title": "Blanditiis possimus fugiat natus illum nihil quis neque laboriosam molestiae est.",
            "slug": "cum-neque-maiores-aspernatur-pariatur-error-beatae-odio",
            "body": "Eligendi est cumque deserunt ipsam accusantium asperiores voluptas. Magnam aut rerum autem saepe tempora eligendi. Doloremque id facere expedita tempora sit vel. Nulla pariatur id voluptatibus quo dolor. Repudiandae quae aspernatur natus aut. Ipsam quia minus dicta rerum. Deleniti qui corrupti laboriosam eveniet asperiores et voluptatum. Exercitationem quia nam soluta doloremque. Id est consequuntur tempore perferendis et aut. Quae aliquam ea repellat excepturi. Quae rem modi dolor quia. Atque sunt repellat officia autem voluptatem blanditiis sequi. Debitis voluptatem et quia architecto. Est recusandae necessitatibus soluta sunt placeat aspernatur voluptatem asperiores. Fuga aut eos non officiis alias et quae. Sapiente et architecto soluta. Ipsum vel neque quis expedita praesentium enim labore voluptatem. Culpa expedita dicta qui voluptas id atque eveniet. Consequuntur est cumque autem sit excepturi. Cupiditate dolorum autem inventore neque sit ut. Non veritatis nostrum enim voluptates. Libero nemo sed iusto molestiae aut ipsam qui. Odit doloribus corporis dolorem eum sed atque magni. Consequuntur autem omnis rerum minus vel. Ut et nulla molestiae expedita. Nostrum sed maiores facilis non quia et. Sed sapiente laboriosam voluptatem consequatur quod dolor. Sapiente sunt reiciendis consequatur dignissimos ducimus consequatur. Sed sed sed maiores. Harum ducimus aut amet. In culpa quis aspernatur id. Omnis et praesentium necessitatibus nostrum. Est est voluptatem voluptas aliquam ut nesciunt fuga quod. Molestias sed consequuntur excepturi iste et et. Fuga voluptas illo eum dicta impedit. Repudiandae in quis fugit nesciunt. Id laboriosam harum laudantium harum quis. Qui id harum nihil aliquam. Nihil quod et eum aperiam. Quis et voluptas aliquam saepe incidunt voluptas. Natus minus cum accusamus. Non officiis dolore modi voluptas et. Praesentium ducimus molestiae cum et. Ea nostrum earum consequatur vitae voluptatibus debitis reiciendis. Qui aut nisi cumque. Autem corrupti omnis corrupti eveniet quas consectetur. Doloribus aut odit natus consequatur et. Rem autem animi provident consequatur magni ipsam corporis. Error et sint architecto quo sunt quia. Animi perferendis dolorem et omnis quasi. Soluta rem eum magni. Est aut accusantium consectetur corporis nihil qui quo. Aspernatur aut rerum omnis qui et aperiam. Accusantium debitis fugiat illum doloribus pariatur. Harum repellendus officia quo non non qui exercitationem provident. Id aut suscipit quia enim. Optio rerum est adipisci nesciunt praesentium sint. Officiis est animi assumenda esse laboriosam similique id. Iusto et cupiditate omnis voluptates. Eum quasi magni magni nesciunt laboriosam ea laudantium. A dignissimos nisi ut voluptatum et voluptas tempore. Asperiores unde aliquam repellat aperiam. Optio doloremque quae sunt qui.",
            "author": "Helena Roob",
            "category_id": 1
        },
        {
            "id": 9,
            "title": "Dolorum optio omnis ex non in.",
            "slug": "ut-enim-ab-soluta-autem-deserunt-id",
            "body": "Temporibus est odit exercitationem voluptas officiis minus. Nam ratione eos aut temporibus officia dolorum ex. Quo culpa sit et veritatis debitis ut. Aut ea et voluptates asperiores vitae architecto. Animi consectetur qui optio quibusdam eligendi consequatur cupiditate. Facilis omnis nesciunt asperiores corporis. Veniam repellat illo eius maiores tempore animi et. Ad id est accusantium necessitatibus atque. Voluptate officia ut consectetur aut repudiandae vitae. Illum magnam dolores sequi quam officiis. Hic sequi voluptatibus aspernatur optio voluptatem omnis sed vitae. Ipsam nam est sunt quasi corrupti quos fuga excepturi. Ut quibusdam qui eius pariatur. In aut iure numquam. Ea quae et eum. Dolor velit aliquam assumenda asperiores eum dolorem explicabo. Ducimus sint eveniet rerum et sunt. Aut rem in dignissimos voluptatibus delectus dignissimos. Rem debitis praesentium sed. Necessitatibus sit optio eum nihil velit. Laudantium molestiae reiciendis aut excepturi. Dignissimos quam pariatur sit est facere iure quia. Voluptatem accusamus et voluptatem necessitatibus occaecati. Explicabo ratione hic ea exercitationem. Laudantium aut sint officia voluptatibus. Excepturi veniam tenetur totam labore praesentium. Rerum modi ut quisquam est et. Consequatur sit vitae ut voluptate. Qui qui quidem neque ipsa soluta voluptatibus. Assumenda vel quia aut voluptatem aut. Nobis alias culpa error magnam reprehenderit eligendi neque. Officia amet illum et ex sunt magnam blanditiis est. Architecto distinctio incidunt quia dolorum fugit nobis. Tempore non alias sed quia architecto. Voluptas eius quos voluptatem natus eligendi et dignissimos. Qui et nam asperiores. Ut molestiae aut rerum. Et voluptas quod iusto autem. Iusto iusto et est nulla ratione ut corrupti. Dolorum aut est alias quos. Quis enim nam fugiat qui natus et. Quia possimus consequuntur sit quia. Labore assumenda tempora maxime inventore est dolor quis. Animi molestiae maxime eius omnis. Autem dolorem impedit nemo quia expedita in et dolorem. Laudantium odit dolor laudantium ut cupiditate consequatur totam. Dolorem quasi reiciendis fugiat nam commodi accusamus dicta ducimus. Nostrum nostrum dolores nihil earum at quibusdam blanditiis. Quae voluptatem consequatur ad qui ipsam. Qui cupiditate quidem aut et rerum dolores magni. Culpa sint itaque et numquam et aut. Accusantium qui sapiente quo ipsum et omnis. Vel sapiente libero iure fugit molestiae. Omnis ducimus dolor omnis eaque. Eaque excepturi unde nisi velit porro dolores. Laudantium ut et autem consequatur. Eum veritatis facilis in ipsum sit dolor. Natus illum animi aut sed. Voluptatibus enim ipsam consequatur et. Eveniet autem dolorum voluptatem quia laboriosam architecto. Dolorum aut qui consequatur ut cum dolorum unde aut. Non sunt labore quibusdam voluptatem qui vel.",
            "author": "Mrs. Rhoda Will",
            "category_id": 1
        },
        {
            "id": 10,
            "title": "Aut voluptatem qui perspiciatis consequatur explicabo numquam.",
            "slug": "ad-sit-ab-minus-eos-odit",
            "body": "Sit dolores similique officiis nihil et. Omnis nisi autem quas atque minus. Cupiditate ad sunt impedit cupiditate. Ut cumque officiis tenetur. Perspiciatis ullam provident quos autem et qui adipisci harum. Ratione laboriosam ducimus distinctio maxime. Ut quo impedit omnis dolor. Sit ut beatae mollitia sit amet quas. Illum et rerum possimus et atque dolores nisi esse. Autem sed in eveniet aut. Commodi quibusdam sed at et culpa. Ad autem id et mollitia temporibus. Neque est odio qui nostrum qui sint. In numquam illum et nam iste. Quidem ratione sunt inventore sed recusandae. Ex molestiae et perspiciatis cupiditate sed. Cupiditate iusto non exercitationem sapiente reprehenderit quo. Laudantium est ad libero ex beatae. Quia tempore aut voluptatibus consequatur. Molestiae explicabo provident eos est et cum soluta. Pariatur velit qui a libero eius. Nihil dolores magni hic. In eligendi similique quia enim ut. Animi sit voluptatem ea quam. Impedit doloremque aut vel voluptas non qui in. Qui facilis corrupti veritatis sint nostrum. Tempora nulla quia quia qui adipisci. Cum quasi nesciunt et totam explicabo. Dolorem et vitae non alias mollitia quis alias. Dolor molestiae ut unde consequatur et voluptate dolorem. Vero asperiores consequatur temporibus et non explicabo. Ratione aliquam quo inventore numquam. Eos est sequi facere illum dolores neque animi alias. Ut placeat eveniet provident doloremque officia consequuntur quia. Rem qui omnis iure id. Distinctio corrupti aperiam a labore et esse reiciendis. Aut quia omnis dicta praesentium. Dolore et velit error dolorem laudantium quasi impedit. Quibusdam eum qui natus est facilis sint quia. Voluptatibus voluptatem voluptatem mollitia dolores fugit illo assumenda ipsa. A vel et eius. Qui voluptatem ullam sint libero. Molestias tempora expedita quae ullam sed modi. Et saepe reiciendis incidunt cum dolorum velit. Ea enim tenetur iure facilis id adipisci. Ab molestiae consequatur qui aliquid eum odio maiores. Esse eos rem eos quas reiciendis pariatur. Maiores laborum perferendis omnis illo accusantium sunt voluptatum. Quia qui debitis asperiores. Omnis sunt qui sequi modi veniam dolores. Distinctio voluptas ipsa ut aut est maxime. Labore est porro alias fugit aut quo. Ipsa ex cupiditate est amet. Nihil voluptates labore voluptates rerum nesciunt autem quia. Ea quidem cum iste. Aut eligendi iusto qui quia rerum ad itaque. Blanditiis et fugiat reiciendis ut animi consequatur magni. Incidunt aut placeat enim libero omnis. Nulla tempore omnis modi dolor consequatur dicta. Dolores atque rerum molestias et. Commodi beatae ad nesciunt vel inventore nihil sequi est. Sit vero recusandae animi temporibus. Quos odio voluptates ipsam nihil aut eum. Quaerat quae sit ipsam fugit nam recusandae est doloremque. Molestiae beatae ratione dolores. Ea est soluta accusantium nisi sapiente. Dignissimos in est enim. Rem rem qui maiores eos harum nobis consequuntur laudantium. Sed commodi vero excepturi tenetur.",
            "author": "Mrs. Mayra Thiel",
            "category_id": 1
        },
        {
            "id": 11,
            "title": "Nostrum minima qui laboriosam non molestias repellat repellendus sed dolorum.",
            "slug": "velit-iste-quia-qui-ab-pariatur",
            "body": "Aut commodi quos pariatur eum. Atque vitae in quo omnis. Distinctio molestiae voluptas tempore est pariatur vel velit. Accusantium cupiditate itaque perspiciatis ipsam. Ad mollitia temporibus eos minima excepturi. Similique quas possimus qui magnam ratione inventore. Quasi voluptates quis ut ut sit dolor. Saepe quaerat ullam autem. Nesciunt modi totam ducimus repudiandae doloremque. Rem repellat iste natus ipsa est. Harum molestiae temporibus aut expedita. In repudiandae tempore natus doloribus deleniti ex. Quae sit quos eum tenetur sapiente itaque. Voluptas quidem voluptate quo recusandae omnis suscipit. Consequatur qui consectetur voluptatem temporibus et deserunt. Sunt est quo id. Harum aspernatur delectus mollitia dicta sed ad. Ut nesciunt molestiae dolores cumque quisquam voluptatem. Esse asperiores eveniet asperiores accusamus. Fugiat vitae earum possimus eveniet aut voluptate corporis. In voluptatem explicabo ut laudantium. Vitae dolorem dolore quasi velit et. Quas ipsa deserunt illo eveniet eos velit odio. Corrupti ratione in corporis excepturi dignissimos iste. Nulla nihil quod odit temporibus eveniet. Nihil eum aliquid harum inventore vel suscipit. Voluptates ut ea ipsa consequatur natus omnis modi. Sequi voluptatem est eveniet totam labore vero. Unde consequatur facilis expedita placeat iusto eligendi. Reiciendis aspernatur pariatur sit sint possimus eos. Laudantium consequatur aliquam aut libero saepe vitae consequatur rerum. Molestiae incidunt iusto rerum eos natus dolor pariatur. Maiores voluptas sed maxime iure hic amet dolores. Dicta amet ut hic harum quis porro. Quo assumenda deleniti quis voluptatum ducimus dolores. Necessitatibus quo nihil illum suscipit sapiente. Dolores incidunt asperiores in et voluptas. Impedit temporibus sapiente vel sequi aut quaerat dolores ad. Eius dignissimos perspiciatis quasi. Placeat dolor et harum corporis ut nisi qui. Aspernatur est officia enim vitae odit cupiditate soluta atque. Consectetur perspiciatis nam eveniet esse sequi quidem. Ut culpa exercitationem repudiandae facere. Quidem iure et modi debitis dolorem quia. Voluptas voluptatem consequuntur nihil quia voluptatum provident laboriosam. Corrupti quos et quo repudiandae. Quas quis voluptatem officia voluptatum nesciunt et. Repellat ea ipsa quaerat quod quasi. Maxime est velit est occaecati adipisci facilis. Voluptatem et ad odio est alias corrupti. Iste totam quasi facere vel et qui. Et voluptatum nemo eius quod quod. Necessitatibus non dolorem laudantium est est. Omnis error molestiae omnis nam saepe magnam. Rem maiores et aut corrupti quis dolores. Ut ratione dicta cupiditate. Exercitationem aspernatur aut sapiente sapiente unde blanditiis delectus veritatis. Et sint et qui aut enim. Qui quisquam sunt voluptas rerum praesentium ab. Et esse sit reiciendis voluptatem reprehenderit.",
            "author": "Gabriel Barton",
            "category_id": 1
        },
        {
            "id": 12,
            "title": "Accusamus possimus voluptatem in porro possimus aut.",
            "slug": "et-deserunt-commodi-omnis-aspernatur-minus-adipisci-vero-ad",
            "body": "Sequi et non perferendis. Ducimus ut cupiditate ut qui error ad. Sit nisi praesentium sint perferendis odit. Qui necessitatibus adipisci labore est. Modi repellendus neque hic adipisci. Impedit dolor quibusdam aut perspiciatis asperiores consequuntur dolores eos. Minima quae praesentium similique qui est voluptatem aut. Vitae consequatur minus expedita ex similique. Debitis aut quaerat dolor rerum voluptatibus. Aperiam odio non consequuntur qui dolor in. Quibusdam pariatur nisi reprehenderit dolores. Eligendi in natus dolore. Voluptatum reprehenderit tempora velit ratione qui molestias. A dolorem porro dolores asperiores. Totam laboriosam itaque pariatur ut. Ex fuga voluptas impedit quia. Qui sapiente optio voluptas totam perspiciatis qui. Possimus sunt magnam in et praesentium corrupti voluptatem. Magnam sit deserunt nisi quaerat quasi molestiae dolorum. Quasi fugit numquam dolores harum. Deserunt suscipit nisi alias tempora nobis ex ea. Dolorum natus sed distinctio. Est et aut atque voluptas eos veritatis. Minus esse aut suscipit sapiente eum. At delectus dolorem vero maiores voluptas ipsam delectus. Aut totam est aspernatur assumenda. Quibusdam architecto facere saepe magni ipsum omnis ut. Eum inventore velit odio ut. Et commodi impedit laboriosam voluptatem et. Et non rerum ratione odio. Enim reprehenderit voluptates aut nemo ad. Doloremque maxime ut impedit aut. Nemo est minima amet dolore maxime quia natus. Non blanditiis praesentium repudiandae. In voluptates distinctio sit ab cumque. Ea vel ducimus numquam itaque. Modi sed voluptatem in aperiam incidunt. Tempore rerum rerum cupiditate et dolor dolorum amet veniam. Magnam porro deserunt corporis est vel. Non voluptatibus dolorem dignissimos sit. Minima architecto maiores autem. Beatae rem molestiae qui quidem quibusdam qui quia. Et dolore corporis dolorum molestias consequuntur assumenda. Id aperiam et et in voluptatum sit veritatis. Sunt aspernatur earum aliquid laboriosam dicta corporis et. Dolorem architecto et quia officiis placeat consequuntur libero. Qui dolor laboriosam explicabo quis dignissimos eos dolorum. Placeat et rerum ex cupiditate ab. Aut eligendi est ea et unde. Tempora alias nulla et qui autem ut vel est. Aut vero architecto distinctio illum. Et consequatur quaerat enim illo. Aspernatur aut quae quia sed itaque. Id aperiam suscipit fugiat. Nulla vel qui illo laborum. Aperiam ipsa quidem et hic. Exercitationem iure aut dolore doloribus sed qui suscipit. Sint provident iusto voluptas id. Veritatis sed earum nam consequuntur doloremque nihil. Alias placeat commodi nobis voluptatem ut illum nulla. Ullam neque non mollitia deleniti eveniet officia. Qui voluptatem et qui suscipit. Voluptas laborum veniam illo molestiae at unde. Molestias quo sit non veniam. Commodi ex odio saepe sapiente quam et. Doloribus ex molestiae non fugiat tempore molestiae. Est amet dignissimos voluptatum aliquid esse consequatur et. Impedit fugiat consequatur consequatur quis.",
            "author": "Mackenzie Satterfield",
            "category_id": 1
        },
        {
            "id": 13,
            "title": "Voluptates qui aut velit voluptatem non perferendis.",
            "slug": "vel-a-voluptatem-sit",
            "body": "Blanditiis rerum aut laborum veritatis fuga. Rerum adipisci nihil illo quidem est ratione. Omnis fuga corporis ut quasi et omnis culpa est. Beatae ea qui officiis quo voluptas architecto enim. Nihil sed officiis qui nostrum ab culpa. Commodi quasi id consequuntur consequuntur. Beatae sit officia qui et perferendis rerum. Repellat minus quos fugit vel reprehenderit molestiae fugiat. Voluptatem omnis nostrum quo consequuntur sed. Omnis optio nam natus quibusdam voluptas enim. Molestiae quia quia est eaque et. Maiores officia dolor enim ut cum voluptatem quo praesentium. Ipsam et nobis dolore atque quia. Explicabo magni est optio voluptatem officiis. Eum facilis molestiae necessitatibus laboriosam ut quia. Cum sequi ullam consequatur autem qui ut. Optio aut illum sit ut. Ut ab fugit ad cupiditate cumque amet. Sed aut non et modi. Amet laboriosam quas eum odio sint. Quos aliquam sunt ratione rerum. Optio sunt consequatur a optio magnam labore cumque voluptas. Aut deleniti et ea eos impedit. Rerum omnis repellendus necessitatibus voluptatibus sunt rem maiores. Non perspiciatis sed nesciunt in exercitationem magnam. Voluptatem sunt aspernatur laboriosam velit reprehenderit. Nihil distinctio dolore est aliquid aperiam provident quaerat. Et ullam velit vel at voluptas laborum nihil. Aspernatur recusandae nihil nostrum cupiditate. Esse occaecati ipsa quibusdam dolores qui et sunt. Enim itaque harum ut eligendi eius et mollitia. Excepturi libero occaecati aut officia animi dicta. Minus eum quam labore quis temporibus laboriosam deserunt. Amet ipsum dolores quia ea ipsum est in. Sit eligendi voluptatem sint modi quo et porro eveniet. Beatae laudantium quia quo laboriosam quo quos distinctio. Vero natus expedita expedita at. Voluptatem ut commodi dolor qui ad sint tempora. In eos ipsum eius quo. Ullam harum quisquam iusto dolorum placeat velit numquam. Qui vitae numquam qui et quaerat. Et magni unde alias itaque qui quo commodi adipisci. Laudantium ipsa est magni minus sit amet. Sapiente consectetur nobis nostrum iure beatae sit neque esse. Nemo laboriosam autem sequi sed iure. Quisquam quidem sunt voluptatem fuga voluptas. Eligendi laboriosam sunt doloribus. Ex voluptatem neque voluptates sequi reprehenderit. Est eos optio voluptatum fugiat odio quam. Sequi accusantium sed corporis itaque. Voluptas omnis voluptatum corrupti itaque vitae dolorem fugit. Provident nulla nesciunt iure qui. Aliquid ipsam ad sunt et optio tempora modi. Dolorem qui consequuntur eaque sed quia est. Quis consequatur quisquam in ipsam officia cupiditate ipsum eos. Est velit dolorem accusamus eveniet sit voluptas odio quasi. Quos enim expedita facilis reiciendis eligendi. Voluptas laudantium neque aliquid voluptatem. Voluptas dolorum quis quis dolores. Voluptatum quibusdam consequatur ad voluptas. Fuga ut iste neque quia. Officiis velit in in et iusto non.",
            "author": "Sherman Roberts",
            "category_id": 1
        },
        {
            "id": 14,
            "title": "Beatae eum nisi incidunt est pariatur dolorum inventore animi voluptatum dolor.",
            "slug": "aut-sed-dolor-repellendus-iusto-mollitia-rerum",
            "body": "Perferendis culpa nihil quia et iusto ea facere. Ut dolorem quia odio hic cum. Similique voluptatum facilis veniam repudiandae expedita dolor rerum deleniti. Nemo nam nihil iste doloremque voluptas voluptas veniam. Voluptate laboriosam aliquam excepturi neque dolor est. Aut delectus aut mollitia est ut aliquam beatae. Ad accusantium consectetur amet omnis quasi. Iure et quia numquam possimus veniam quo. Ut ut et voluptas a maxime vero vel. Sint non corporis excepturi quos provident quis eos. Veritatis voluptates voluptatem et optio. Suscipit sint voluptas placeat laboriosam quia itaque sit. Qui quos esse quia ullam. Hic quae nihil harum veritatis dolores ex. Ipsam rerum ut deleniti corporis. Voluptatem illum pariatur dolore veniam repudiandae explicabo. Nesciunt rem ad minus quo ducimus. Impedit reprehenderit rerum molestias aliquid accusamus adipisci est. Nam praesentium sunt suscipit quasi et. Autem et officia magni ratione. Dignissimos perferendis nemo neque nobis nostrum vitae nostrum. Veniam eveniet tempore aut rerum ea nesciunt fugiat. Dolore maiores laudantium nostrum odio et. Cum quis velit quas dicta sint veniam. Saepe animi vitae a ut iure. Nesciunt recusandae aut error. Tenetur qui rem asperiores reprehenderit nobis repudiandae. Reprehenderit odit et voluptatibus beatae. In non repellendus et. Excepturi eveniet molestiae voluptas beatae quo aut quo. Voluptas amet dicta et quo ea quibusdam libero cum. Et et perferendis minima at asperiores vel nihil. Maxime ut nulla voluptatibus nulla at. Ipsam ipsa qui molestiae laboriosam et error. Repudiandae vel omnis omnis accusamus culpa labore qui. Sit suscipit aut fugit non eius ex cum. Nulla error vel vel odio nam at cum. Voluptas aut et rerum perferendis quia. Deserunt unde odit molestias omnis consequatur sunt voluptatem. Doloribus dolores impedit ut rem ex sint. In culpa natus nihil mollitia itaque id tempora. Cupiditate rem sapiente ducimus quia laboriosam. Id velit doloremque est. Omnis voluptates vel velit qui est rem. Vero odit et magni facilis asperiores. Id a dolorem sed at error. Id corporis voluptas optio cupiditate. Omnis alias possimus odit. Distinctio aliquam exercitationem animi porro. Dolor a nobis molestiae quis sapiente. Quasi quas facilis vel et qui quibusdam et. Commodi et voluptas neque vel voluptatem eos at est. Et tenetur qui harum repellat recusandae. Necessitatibus dolores voluptates tempore sit vel. Quasi nesciunt omnis est quisquam illo. Quidem quis vel quo. Quo maiores aut itaque ea officiis magnam. Quia suscipit voluptatum laborum et eius. Ratione quia aut quos ut corporis. Porro voluptate est voluptas unde consequuntur. Reprehenderit mollitia autem modi non qui illum. Maiores est rerum corrupti rerum recusandae sequi. Deleniti rem aliquid recusandae sed. Praesentium molestias veritatis sed nam minus. Hic voluptates et quasi in ut rerum ullam at.",
            "author": "Dr. Leila Bayer DVM",
            "category_id": 1
        },
        {
            "id": 15,
            "title": "Aut eius consequuntur eveniet sit.",
            "slug": "voluptas-nihil-delectus-et-nemo-ea-perferendis-magnam",
            "body": "Vero laborum non voluptatibus. Provident sed aut asperiores repellat ipsa. Et sit rerum esse odio mollitia. Eligendi laborum soluta enim et. Aperiam deleniti dolor aut et velit culpa aut veritatis. Harum est quisquam autem. Rerum cumque numquam quia ex sit vel aut consectetur. Perspiciatis adipisci facere ut velit. Aliquid molestias sunt atque ut modi itaque voluptates. Reprehenderit veritatis earum aut provident omnis praesentium. Aut aut dolorem et aperiam eum. Quo ex eveniet eaque et voluptas corrupti. Non recusandae suscipit recusandae qui ratione ad animi ipsa. Itaque quod omnis facere. Qui facilis et est molestiae reprehenderit. Incidunt voluptatem magni ipsum minus commodi. Aperiam ut illo veritatis eum consequuntur consequatur aut quo. Quaerat quia ratione ipsum sit. Et id numquam culpa ut minima. Voluptatem aut consequatur quo aut sapiente est ex. Aspernatur rem sit perspiciatis necessitatibus. Eum omnis dolores expedita. Voluptatum est est consequatur deleniti. Rem aperiam repellat tenetur animi. Quia facere et veritatis quos consequuntur quisquam autem. Dicta doloremque autem itaque maiores cum et accusantium. Quo est eos magnam minima velit odit. Mollitia a soluta eius. Est consectetur sit mollitia. Aut doloribus sed et non eligendi et est. Cupiditate libero veritatis et beatae. Voluptas doloribus enim hic iusto est autem perferendis. Ea consequatur assumenda aliquam modi aut hic recusandae. Voluptates ducimus recusandae deserunt fugit ut pariatur. Qui quis occaecati corrupti nulla ipsum vel qui. Eos repudiandae asperiores quo doloribus aut. Voluptates ut totam dolore dolor in quibusdam. Dolorem facilis nam quae quia. Debitis vero numquam quia nihil nemo quas non. Quia ex non doloribus odit sed modi. Est pariatur et et non. Adipisci dolor accusamus cupiditate. Cupiditate et occaecati ut ea asperiores recusandae distinctio. Ratione consequatur hic aperiam voluptas rerum inventore sed. Earum blanditiis dolorum et vitae aliquam. Iusto sapiente et quis nobis. Nisi molestias nobis omnis autem non. Voluptatibus quo neque eveniet et distinctio nemo. Vero officiis tempore voluptas voluptatem. Ut qui eaque molestiae error quod. Labore asperiores velit reprehenderit quia. Exercitationem explicabo vitae eum qui illo ex eveniet minus. Voluptatum modi provident officiis aut minus consequatur mollitia nostrum. Delectus cumque porro voluptas non quam. Provident eius ut est blanditiis. Sint illo accusamus voluptates qui quasi. Dolorum repellat vitae sunt. Aut doloribus et qui quia et. Voluptatem eos asperiores explicabo quidem. Iste excepturi accusamus autem enim odio. Consectetur voluptatum aliquid dolore sint beatae est. Harum odit dolores voluptate qui accusantium voluptates qui. Ipsum qui consectetur quas omnis voluptatem ut. Laudantium sed rerum officiis est. Quam laudantium ea voluptas. Tempora veritatis vel nisi voluptatibus officiis.",
            "author": "Jacquelyn Emard",
            "category_id": 1
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/articles?page=1",
        "last": "http:\/\/localhost\/api\/articles?page=2",
        "prev": null,
        "next": "http:\/\/localhost\/api\/articles?page=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 2,
        "path": "http:\/\/localhost\/api\/articles",
        "per_page": 15,
        "to": 15,
        "total": 30
    }
}
```

### HTTP Request
`GET api/articles`


<!-- END_0d4cb2104f73e3ee9cf74a52a015de76 -->

<!-- START_a92651a991429ff89af216ff17612d94 -->
## Display the specified Article.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/article/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/article/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": 1,
    "title": "Sed pariatur et rerum quis et similique.",
    "slug": "fugit-exercitationem-consequatur-porro-dolore-sunt",
    "body": "st porro a cumque. Aut ut sed explicabo ea dicta ab ut. Fuga rem sit earum et. In excepturi dolorum fuga aut vel labore. Aut ipsam aut eligendi ipsum et saepe. Id vel placeat odio praesentium molestiae pariatur. Qui et quo vero et necessitatibus quisquam ipsam. Suscipit minima sit alias. Veritatis eos deserunt fuga amet voluptatibus praesentium. Ratione ipsa ut est. Adipisci nesciunt veritatis est dolorem fugit cupiditate. Ducimus facilis qui aspernatur harum architecto sed ut. Et deserunt non cum temporibus. Quia sed quasi impedit asperiores. Et a ratione asperiores nemo possimus eos nulla. Et corporis odit possimus perferendis voluptatem consectetur odio.",
    "author": "Lucius Corwin",
    "category_id": 5
}
```

### HTTP Request
`GET api/article/{id}`


<!-- END_a92651a991429ff89af216ff17612d94 -->

<!-- START_706a660bd426dfde8ef5e730869db3f8 -->
## Store a newly created Article in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/article" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/article"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/article`


<!-- END_706a660bd426dfde8ef5e730869db3f8 -->

<!-- START_6ff7ff26b034677d2a797186d18b3acf -->
## Update the specified resource in storage.

.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/article/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/article/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/article/{id}`


<!-- END_6ff7ff26b034677d2a797186d18b3acf -->

<!-- START_13dad45773993e1d30a6eae802ceb05c -->
## Remove the specified Article from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/article/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/article/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/article/{id}`


<!-- END_13dad45773993e1d30a6eae802ceb05c -->

#Category management


APIs for managing users
<!-- START_109013899e0bc43247b0f00b67f889cf -->
## Display a listing of the Categories.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/categories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "name": "Phonetics"
        },
        {
            "id": 2,
            "name": "Itaque."
        },
        {
            "id": 3,
            "name": "Iusto."
        },
        {
            "id": 4,
            "name": "Phonemes"
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/categories?page=1",
        "last": "http:\/\/localhost\/api\/categories?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "path": "http:\/\/localhost\/api\/categories",
        "per_page": 10,
        "to": 4,
        "total": 4
    }
}
```

### HTTP Request
`GET api/categories`


<!-- END_109013899e0bc43247b0f00b67f889cf -->

<!-- START_d9dfc7825b2d75293082aeacaa0c0aac -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/category/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/category/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/category/{id}`


<!-- END_d9dfc7825b2d75293082aeacaa0c0aac -->

<!-- START_10ee6e46975f0dbd3a6a0a4c3dbc9fc4 -->
## Display the specified Category.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/category/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/category/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": 1,
    "name": "Phonetics"
}
```

### HTTP Request
`GET api/category/{id}`


<!-- END_10ee6e46975f0dbd3a6a0a4c3dbc9fc4 -->

<!-- START_894ef06ce7a41cb47f9c434fcd778d9a -->
## Store a newly created Category in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/category" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/category"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/category`


<!-- END_894ef06ce7a41cb47f9c434fcd778d9a -->

<!-- START_99bc857b434c735c34957789a6467e9d -->
## Remove the specified Category from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/category/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/category/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/category/{id}`


<!-- END_99bc857b434c735c34957789a6467e9d -->


