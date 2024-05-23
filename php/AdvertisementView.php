<?php

namespace php;

class AdvertisementView
{
    public function showAdvertisements($advertisements){
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="UTF-8">
            <meta author="Andor Balo">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Advertisements</title>
            <link rel="stylesheet" href="../style/styles.css">
        </head>
        <body>
        <main>
            <h3 class="title">Advertisements:</h3>
            <table>
                <tr>
                    <th>Advertisement ID</th>
                    <th>Name</th>
                    <th>Advertisement title</th>
                </tr>
                <?php foreach($advertisements as $advertisement){?>
                    <tr>
                        <td><?php echo $advertisement->getId(); ?></td>
                        <td><?php echo $advertisement->getUser() ?></td>
                        <td><?php echo $advertisement->getTitle(); ?></td>
                    </tr>
                <?php } ?>
            </table>
            <div class="menu">
                <a href="../index.php">
                    <p>Vissza</p>
                </a>
            </div>
        </main>
        </body>
        </html>

        <?php
    }
}