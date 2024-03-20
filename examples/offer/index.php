<!-- HW Add paginator -->
<!-- HW include, include_once, require, require_once -->
<!-- HW add 2 links on top of catalog ^ - sort ascending v - sort descending -->
<?
include 'data.php';

usort($products, fn ($p1, $p2) => $p1['price']['amount'] - $p2['price']['amount']);
?>
<!-- TEmplate -->

<?
// Устанавливаем количество продуктов на странице
$productsPerPage = 3;

// Получаем номер текущей страницы из параметра GET
$page = isset($_GET['page']) ? $_GET['page'] : 1;

// Вычисляем индекс начала и конца продуктов на текущей странице
$start = ($page - 1) * $productsPerPage;
$end = $start + $productsPerPage;
?>
<!-- Добавляем ссылки на предыдущую и следующую страницы -->
<a href="?page=<?= $page - 1 ?>">^ Sort Ascending</a>
<a href="?page=<?= $page + 1 ?>">v Sort Descending</a>
<?
// Отображаем только продукты для текущей страницы
for ($i = $start; $i < $end && $i < count($products); $i++) { ?>
    <li>
        <ol>
            <h2>
                <?= $products[$i]['name']?>
                <? if($products[$i]['new']) { ?> <img src="<?=NEW_STICKER ?>" width="50"/><? } ?>
            </h2>
            <h3><?= $products[$i]['category']?></h3>
            <img src="<?=$products[$i]['image']?>" width="100"/>
            <div><?= $products[$i]['price']['amount'] ?><?= $products[$i]['price']['currency']?></div>
            <hr>
        </ol>
    </li>
    
<? } ?>
