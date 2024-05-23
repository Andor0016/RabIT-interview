<?php

namespace php;

class UserView
{
    //The following method shows the table with data
    public function showUsers($users){ ?>
        <!DOCTYPE html>
            <html>
                <head>
                    <meta charset="UTF-8">
                    <meta author="Andor Balo">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Users</title>
                    <link rel="stylesheet" href="../style/styles.css">
                </head>
                <body>
                    <main>
                        <h3 class="title">Users:</h3>
                        <table>
                            <tr>
                                <th>User ID</th>
                                <th>Name</th>
                            </tr>
                            <?php foreach($users as $user){?>
                                    <tr>
                                        <td><?php echo $user->getId(); ?></td>
                                        <td><?php echo $user->getName(); ?></td>
                                    </tr>
                                <?php } ?>
                        </table>
                        <div class="menu">
                            <a href="../index.php">
                                <p>Back</p>
                            </a>
                        </div>
                    </main>
                </body>
            </html>
        <?php
    }
}