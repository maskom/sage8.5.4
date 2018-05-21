<?php
if (in_category('video')) {
    get_template_part('templates/card', 'video');
} elseif (in_category('photo')) {
    get_template_part('templates/card', 'photo');
} elseif (in_category('twitter')){
    get_template_part('templates/card', 'twitter');
} else {
    get_template_part('templates/card', 'article');
}
?>