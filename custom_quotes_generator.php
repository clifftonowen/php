<?php 
$authorquote = [
    [
        'author' => 'Ludwig van Beethoven',
        'quote' => 'Art! Who comprehends her? With whom can one consult concerning this great goddess?'
    ],
    [
        'author' => 'Nelson Mandela',
        'quote' => 'The greatest glory in living lies not in never falling, but in rising every time we fall.'
    ],
    [
        'author' => 'Steve Jobs',
        'quote' => "Your time is limited, so don't waste it living someone else's life. Don't
        be trapped by dogma – which is living with the results of other
        people's thinking."
    ],
    [
        'author' => 'Walt Disney',
        'quote' => "The way to get started is to quit talking and begin doing."
    ],
    [
        'author' => 'Eleanor Roosevelt',
        'quote' => "If life were predictable it would cease to be life, and be without flavor."
    ]


];

$randomisednumber = rand(0,count($authorquote) - 1 );





$my_quote = $_POST['my_quote'];

if ($my_quote == true) {
    $author = $_POST['author'];

    $quote = $_POST['quote'];

    $authorquote = [
        [
            'author' => 'Ludwig van Beethoven',
            'quote' => 'Art! Who comprehends her? With whom can one consult concerning this great goddess?'
        ],
        [
            'author' => 'Nelson Mandela',
            'quote' => 'The greatest glory in living lies not in never falling, but in rising every time we fall.'
        ],
        [
            'author' => 'Steve Jobs',
            'quote' => "Your time is limited, so don't waste it living someone else's life. Don't
            be trapped by dogma – which is living with the results of other
            people's thinking."
        ],
        [
            'author' => 'Walt Disney',
            'quote' => "The way to get started is to quit talking and begin doing."
        ],
        [
            'author' => 'Eleanor Roosevelt',
            'quote' => "If life were predictable it would cease to be life, and be without flavor."
        ]
    
    
    ];

    $output = '"' . $quote . '" - ' .$author;

    // Try to continue with array_push() and make existing array try to research how to continue with this
   
} else {
    $author = $authorquote[$randomisednumber]['author'];

$quote = $authorquote[$randomisednumber]['quote'];

$output = '"' . $quote . '" - ' .$author;
}

var_dump(isset($author));
var_dump(isset($quote));
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Random Quotes</title>
</head>
<body style='width: 50%;'>
    <h1>Quote of the day!</h1>
    <p>Press <code>F5</code> or <code>Ctrl + R</code> to randomize the quote.</p>
    <h3>
    <?= 
   $output
    ?>
    </h3>

    <form action="" method="post">
    <label for="author">Author Name</label>
    <input type="text" id="author" name="author">
    <br>
    <label for="quote">Inspirational Quote</label>
    <input type="text" id="quote" name="quote">
    <br>
    <label for="my_quote">Show my input quote</label>
    <input type="checkbox" id="my_quote" name="my_quote">
    <br>
    <button type="submit">Submit</button>

    </form>
</body>
</html>