# Chain of Responsibility Design Pattern

We use this design pattern when you have more then one way to respond a given call. With the Chain of Responsibility we decouple the sender of a request and the handler, allowing more then one handler.

## How it is done?

As an example we made a Guess the Song game. The `SongGuesser` interface defines that every song guesser will need a `next()` function to pass on the request and a `$nextGuesser` variable to store the nexte guesser. Than we implemented the interface on two classes `GuesserOne` and `GuesserTwo`. Both guessers have a function `guessSong($lyrics)` that uses super high tech machine learning techniques (not really) to guess the song being passed.

Finally, on the `GuessTheSong.php` script we bring it all together and make our guessers guess! Just run the file and you will se the guesses of the guessing guessers printed on your terminal.