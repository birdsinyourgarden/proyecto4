<?php

require_once("Components/layout.php");

require_once("Components/header.php");

?>

<body>

    <main>
    <a href="./index.php"><button class="btn btn-primary">Cancel</button></a>
        <form class="row g-3" action="?action=store" method="post">
            <div class="col-md-6">
                <label class="form-label">Child Name*</label>
                <input type="text" class="form-control" name="childName">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Age</label>
                <input type="number" class="form-control" name="age">
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Place*</label>
                <input type="text" class="form-control" name="place" placeholder="in the school playground">
            </div>
            <div class="col-12">
                <label class="form-label">Gift Suggestion</label>
                <input type="text" class="form-control" name="giftSuggestion">
            </div>
            <div class="buttons">
                <button type ="submit" value="create" class="btn btn-primary">Save</button>
                <button type="reset" value="reset" class="btn btn-primary">Reset</button>
            </div>
        </form>
    </main>
    
    <?php

            require_once("Components/footer.php");
    ?>

    <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
</body>

