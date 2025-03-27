<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/fonts/fontawesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="js/slick/slick.css"/>
    <title>Template 1</title>
</head>
<body>
<section class="latest-news-slider">
    <div class="container-fluid">
        <div class="content-wrapper">
            <div class="left-wrapper">
                <h3 class="title">Latest News</h3>
                <p class="description">Lorem ipsum dolor sit amet consectetur urna dolor</p>
            </div>
            <div class="right-wrapper">
                <div class="news-slider">
                    <?php
                        $jsonData = file_get_contents('data/news.json');
                        $newsItems = json_decode($jsonData, true);
                        if (!empty($newsItems)) {
                            foreach ($newsItems as $item) {
                                echo '<div class="post-img-box">';
                                echo '  <div class="post-img">';
                                echo '    <img src="' . htmlspecialchars($item['image']) . '" alt="' . htmlspecialchars($item['alt']) . '">';
                                echo '  </div>';
                                echo '  <div class="post-box">';
                                echo '    <a class="title" href="' . htmlspecialchars($item['url']) . '">' . htmlspecialchars($item['title']) . '</a>';
                                echo '    <div class="excerpt">' . htmlspecialchars($item['excerpt']) . '</div>';
                                echo '  </div>';
                                echo '</div>';
                            }
                        } else {
                            echo '<p>No news items found.</p>';
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>  
<section class="expanding-knowledge">
    <div class="container">
        <div class="content-wrapper">
            <div class="left-wrapper">
                <h3 class="title">Expanding Your Knowledge</h3>
                <p class="description">Lorem ipsum dolor sit amet consectetur urna dolor</p>
            </div>
            <div class="right-wrapper">
                <div class="icon-img-text">
                    <div class="icon-img-box">
                        <img src="assets/images/professionals.svg" alt="professional svg icon">
                    </div>
                    <div class="text-box">
                        <h4 class="title">For Wealth Advisors & Professionals</h4>
                        <p class="description">Lorem ipsum dolor sit amet consectetur. Consequat sollicitudin in euismod dolor, nec sodales viverra.</p>
                    </div>
                </div>
                <div class="icon-img-text">
                    <div class="icon-img-box">
                        <img src="assets/images/students.svg" alt="students svg icon">
                    </div>
                    <div class="text-box">
                        <h4 class="title">For Law Students</h4>
                        <p class="description">Lorem ipsum dolor sit amet consectetur. Consequat sollicitudin in euismod dolor, nec sodales viverra.</p>
                    </div>
                </div>
                <div class="icon-img-text">
                    <div class="icon-img-box">
                        <img src="assets/images/diversity.svg" alt="diversity svg icon">
                    </div>
                    <div class="text-box">
                        <h4 class="title">Diversity Resources</h4>
                        <p class="description">Lorem ipsum dolor sit amet consectetur. Consequat sollicitudin in euismod dolor, nec sodales viverra.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="js/slick/slick.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>