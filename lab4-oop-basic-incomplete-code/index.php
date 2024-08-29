<?php

require "Profile.php";

$profile = new Profile("Dela Cruz", "Juan", "Dipasisiil");

$profile->setEmail('juan@delacruz.ph');
$profile->setAddress('Barangay Mintal, Davao City, Philippines 8000');
$profile->setFavoriteQuote('To be, or not to be, that is the question.');
$profile->setContactNumber('0934-354-1234');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile: <?php echo htmlspecialchars($profile->getCompleteName()); ?></title>
</head>
<body>
    <h1><?php echo htmlspecialchars($profile->getCompleteName()); ?></h1>
    <h2><?php echo htmlspecialchars($profile->getEmail());?></h2>
    <h2><?php echo htmlspecialchars($profile->getContactNumber());?></h2>
    <h2><?php echo htmlspecialchars($profile->getAddress());?></h2>
   
    <p>
        <?php echo htmlspecialchars($profile->getFavoriteQuote()); ?>
    </p>
</body>
</html>