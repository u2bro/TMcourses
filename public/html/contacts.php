<!DOCTYPE html>
<html lang="ca">
<?php
include "head.php";
?>

    <main>
        <header class="main_header">
            <h1>Contact Us</h1>
            <section class="desc">
                <p>Nam in maximus arcu, ac aliquam tellus. Donec vestibulum ipsum nunc, at placerat ante posuere non. Integer at dui a lacus suscipit elementum id non massa.
                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc eu neque eros. Ut eu quam justo.</p>
            </section>
        </header>
        <div class="main_text">
            <form action="" method="post">
                <input class="inputs" type="text" name="name" placeholder="Your Name" required>
                <input class="inputs" type="email" name="email" placeholder="Email" required>
               <p><input class="inputs_sub" type="text" name="subject" placeholder="Subject" required></p>
               <p><textarea class="text_area" name="message" placeholder="Your message" required></textarea></p>
                <p><input type="submit" value="SEND MESSAGE" class="sub_button"></p>

            </form>
        </div>
    </main>

<?php
include "footer.php";
?>
</body>
</html>
