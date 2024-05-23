<?php

namespace php;

class UserView
{
    public function showUsers($users){
        ?>
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
                            <?php
                            if($users->num_rows > 0){
                                while($user = $users->fetch_assoc()) { ?>
                                    <tr>
                                        <td><?php echo $user["userid"]; ?></td>
                                        <td><?php echo $user["username"]; ?></td>
                                    </tr>
                                <?php }
                                } ?>
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