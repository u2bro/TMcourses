<!DOCTYPE html>
<html lang="ca">
<?php
include "head.php";
?>

    <main>
        <div class="container">
            <article class="row example">
                <div class="col s-12">
                    <header class="main_header">
                        <h1>Contact Us</h1>
                        <section class="desc">
                            <p>Nam in maximus arcu, ac aliquam tellus. Donec vestibulum ipsum nunc, at placerat ante posuere non. Integer at dui a lacus suscipit elementum id non massa.
                                Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc eu neque eros. Ut eu quam justo.</p>
                        </section>
                    </header>
                    <div class="main_text">
                        <form action="" method="post">
                            <div class="input_name col m-6"><input class="inputs" type="text" name="name" placeholder="Your Name" required></div>
                            <div class="input_email col m-6"> <input class="inputs" type="email" name="email" placeholder="Email" required></div>
                            <div class="input_sub col"><input class="inputs_sub" type="text" name="subject" placeholder="Subject" required></div>
                            <div class="input_message col"><textarea class="text_area" name="message" placeholder="Your message" required></textarea></div>
                            <p><input type="submit" value="SEND MESSAGE" class="sub_button"></p>

                        </form>
                    </div>
                </div>
            </article>
        </div>
    </main>

<?php
include "footer.php";
?>
</body>
</html>
