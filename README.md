# phpDemo

# php commands
- Declare file with .php to use php code
- `<?php echo "Hello World"; ?>` - to display in web
    (or)
- `<?= $message; ?> `   
- $greeting = "Hello"; - to declare a variable
- `php -S localhost:8888` - to run in local server
- for loop with arrays -
        
        <?php $books = ["Book1", "Book2", "Book3"]; ?>

            <ul>
              <?php foreach($books as $book) {
                 echo "<li>{$book}tm</li>";
               }
              ?>
            </ul>

- other ways to write for loop -
   
         <?php foreach($books as $book) : ?>
            <li><?php echo $book; ?></li>
          <?php endforeach; ?>
     
- accessing individual element from array
   
          <p><?= $books[2]; ?> </p>

- associative arrays
