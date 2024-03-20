<?php
// Список адресов картинок


$slides = array(
    "image1.png",
    "image2.png",
    "image3.png",
    // Добавьте здесь остальные адреса картинок
);

// Получаем текущий индекс слайда из запроса (если не указан, начинаем с первого слайда)
$currentSlideIndex = isset($_GET['slide']) ? intval($_GET['slide']) : 0;

// Определяем предыдущий и следующий слайды
$prevSlideIndex = max($currentSlideIndex - 1, 0);
$nextSlideIndex = min($currentSlideIndex + 1, count($slides) - 1);

// Определяем адрес текущего слайда
$currentSlide = $slides[$currentSlideIndex];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Carousel</title>
    <style>
        .carousel {
            width: 80%;
            margin: 0 auto;
            text-align: center;
        }
        .carousel img {
            max-width: 20%;
            height: auto;
        }
        .controls {
            margin-top: 20px;
        }
        .img {
            width: 30px;
            height: 30px;
        }
    </style>
</head>
<body>
    <div class="carousel">
        <img src="<?php echo $currentSlide; ?>" alt="Slide">
        <div class="controls">
            <!-- Кнопка для перехода к предыдущему слайду -->
            <?php if ($currentSlideIndex > 0): ?>
                <a href="?slide=<?php echo $prevSlideIndex; ?>">Previous</a>
            <?php endif; ?>
            <!-- Кнопка для перехода к следующему слайду -->
            <?php if ($currentSlideIndex < count($slides) - 1): ?>
                <a href="?slide=<?php echo $nextSlideIndex; ?>">Next</a>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
