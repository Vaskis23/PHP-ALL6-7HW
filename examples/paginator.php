<!-- LOGIC -->
<?
    $totalPages = 5; // Общее количество страниц
    $currentPage = isset($_GET['p']) ? intval($_GET['p']) : 1; // Текущая страница
    $prevPage = max($currentPage - 1, 1); // Предыдущая страница
    $nextPage = min($currentPage + 1, $totalPages); // Следующая страница
?>
<!-- HW add limits to prev, next: don't let the user go over (ideally - hide the arrows close to the limits)-->
<!-- HW use another method to underline the selectrd page number -->


<!-- TEMPLATE -->
<style>
    body { background-color: #222; color: white; text-align: center; }
    a { color: #ccc; text-decoration: none; }
    span a { margin: 0 5px; } /* Добавляем отступ ссылкам */
    .current-page { text-decoration: underline; } /* подчеркивание к текущей странице */
    .disabled { color: #666; } /* Цвет для неактивных ссылок */
</style>

<div>
    You are on page <?=$currentPage ?>
</div>
<hr>
<!-- HW try to use for loop to print the paginator -->
<div>
    <a href="?p=<?=$prevPage ?>" <?= $currentPage === 1 ? 'class="disabled"' : '' ?>>&lt;</a>
    <span>
        <?php for ($i = 1; $i <= $totalPages; $i++) { ?>
            <a href="?p=<?=$i ?>" class="<?=$i === $currentPage ? 'current-page' : '' ?>"><?=$i ?></a>
        <?php } ?>
    </span>
    <a href="?p=<?=$nextPage ?>" <?= $currentPage === $totalPages ? 'class="disabled"' : '' ?>>&gt;</a>
</div>
