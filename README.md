How to create a block with ACF/Gutenberg :

- Go to functions.php, line 165
- Register a bloc in an array()
- Create a folder template-parts/block/ create a file content-exemple.php
- Create your bloc html/css/js/... whatever, with fields <?php the_field('name'); ?> to get your field from ACF

- Go to your Worpress
- Dashboard/ACF/Add a new group field ACF
- Add/filled the field you need, each field will have an id you'll call in your content-exemple.php

- Create a new page
- Click on +
- Search your block ('name')
- Edit
- Filled the blank

And It's done ! You've just created your own block by ACF/Gutenberg


