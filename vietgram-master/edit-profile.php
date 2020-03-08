<!DOCTYPE html>
<html lang="en">
<?php 
    session_start();
    include("koneksi.php");
    $data_photo = mysqli_query($conn,"select * from profile where username='". $_SESSION['username']. "'");
    $jmlData = mysqli_num_rows($data_photo);
    while($rows[]=mysqli_fetch_array($data_photo));
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Profile | Vietgram</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <nav class="navigation">
        <div class="navigation__column">
            <a href="feed.php">
                <img src="images/logo.png" />
            </a>
        </div>
        <div class="navigation__column">
            <i class="fa fa-search"></i>
            <input type="text" placeholder="Search">
        </div>
        <div class="navigation__column">
            <ul class="navigations__links">
                <li class="navigation__list-item">
                    <a href="logout.php" class="navigation__link">
                        <i class="fa fa-sign-out"></i>
                    </a>
                </li>
                <li class="navigation__list-item">
                    <a href="explore.php" class="navigation__link">
                        <i class="fa fa-compass fa-lg"></i>
                    </a>
                </li>
                <li class="navigation__list-item">
                    <a href="#" class="navigation__link">
                        <i class="fa fa-heart-o fa-lg"></i>
                    </a>
                </li>
                <li class="navigation__list-item">
                    <a href="profile.php" class="navigation__link">
                        <i class="fa fa-user-o fa-lg"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <main id="edit-profile">
        <div class="edit-profile__container">
            <header class="edit-profile__header">
                <div class="edit-profile__avatar-container">
                    <img src="images/me.jpg" class="edit-profile__avatar" />
                </div>
                <h4 class="edit-profile__username"><?php echo $_SESSION['username'];?></h4>
            </header>
            <form action="editprofile.php" class="edit-profile__form" method="post">
                <div class="form__row">
                    <label for="full-name" class="form__label">Name:</label>
                    <input name="nama" type="text" class="form__input" value="<?php echo $_SESSION['name']?>"/>
                </div>
                <div class="form__row">
                    <label for="user-name" class="form__label">Username:</label>
                    <input name="user-name" type="text" class="form__input" value="<?php echo $_SESSION['username']?>" disabled/>
                </div>
                <div class="form__row">
                    <label for="website" class="form__label">Website:</label>
                    <input name="website" type="url" class="form__input" value="<?php echo $_SESSION['website']?>"/>
                </div>
                <div class="form__row">
                    <label for="bio" class="form__label">Bio:</label>
                    <textarea name="bio"><?php echo $_SESSION['bio']?></textarea>
                </div>
                <div class="form__row">
                    <label for="email" class="form__label">Email:</label>
                    <input name="email" type="email" class="form__input" value="<?php echo $_SESSION['email']?>"/>
                </div>
                <div class="form__row">
                    <label for="phone" class="form__label">Phone Number:</label>
                    <input name="phone" type="text" class="form__input" value="<?php echo $_SESSION['phone_number']?>"/>
                </div>
                <div class="form__row">
                    <label for="gender" class="form__label">Gender:</label>
                    <select name="gender">
                        <?php
                            if($_SESSION['gender'] == "Female") {
                        ?>
                            <option value="Female" selected>Female</option>
                            <option value="Male">Male</option>
                        <?php } else { ?>
                            <option value="Female">Female</option>
                            <option value="Male" selected>Male</option>
                        <?php } ?>
                        
                        
                    </select>
                </div>
                <input type="submit" value="Submit">
            </form>
        </div>
    </main>
    <footer class="footer">
        <div class="footer__column">
            <nav class="footer__nav">
                <ul class="footer__list">
                    <li class="footer__list-item"><a href="#" class="footer__link">About Us</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Support</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Blog</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Press</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Api</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Jobs</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Privacy</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Terms</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Directory</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Language</a></li>
                </ul>
            </nav>
        </div>
        <div class="footer__column">
            <span class="footer__copyright">© 2017 Vietgram</span>
        </div>
    </footer>
</body>

</html>