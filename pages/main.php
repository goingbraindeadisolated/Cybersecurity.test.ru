<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Опрос</title>
    <!-- includes -->
    <?php include "../includes/content.php"?>
    <!-- styles -->
    <link rel="stylesheet" href="../styles/mainStyles.css">
    <!-- scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="../scripts/mainScript.js"></script>
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Didact+Gothic|IBM+Plex+Serif&display=swap" rel="stylesheet">
  </head>
  <body>
    <form id="content" method="POST" action="handler.php">
        <div class="block">
        <p class="question"><?php echo $questions[question1]; ?></p>
            <input type="radio" name="answerOnQuestion1" value="1" id="checkbox" required><?php echo $answers[question1][answer1]; ?><br>
            <input type="radio" name="answerOnQuestion1" value="2" id="checkbox" required><?php echo $answers[question1][answer2]; ?><br><hr>
        </div>
                                 <!-- следующий вопрос-->
        <div class="block">
        <p class="question"><?php echo $questions[question2]; ?></p>
            <input type="radio" name="answerOnQuestion2" value="1" id="checkbox" required><?php echo $answers[question2][answer1]; ?><br>
            <input type="radio" name="answerOnQuestion2" value="2" id="checkbox" required><?php echo $answers[question2][answer2]; ?><br><hr>
        </div>
                                 <!-- следующий вопрос-->
        <div class="block">
        <p class="question"><?php echo $questions[question3]; ?></p>
            <input type="radio" name="answerOnQuestion3" value="1" id="checkbox" required><?php echo $answers[question3][answer1]; ?><br>
            <input type="radio" name="answerOnQuestion3" value="2" id="checkbox" required><?php echo $answers[question3][answer2]; ?><br><hr>
        </div>
                                   <!-- следующий вопрос-->
        <div class="block">
        <p class="question"><?php echo $questions[question4]; ?></p>
            <input type="radio" name="answerOnQuestion4" value="1" id="checkbox" required><?php echo $answers[question4][answer1]; ?><br>
            <input type="radio" name="answerOnQuestion4" value="2" id="checkbox" required><?php echo $answers[question4][answer2]; ?><br><hr>
        </div>
                                 <!-- следующий вопрос-->
        <div class="block">
        <p class="question"><?php echo $questions[question5]; ?></p>
            <input type="radio" name="answerOnQuestion5" value="1" id="checkbox" required><?php echo $answers[question5][answer1]; ?><br>
            <input type="radio" name="answerOnQuestion5" value="2" id="checkbox" required><?php echo $answers[question5][answer2]; ?><br><hr>
        </div>
                                 <!-- следующий вопрос-->
        <div class="block">
        <p class="question"><?php echo $questions[question6]; ?></p>
            <input type="radio" name="answerOnQuestion6" value="1" id="checkbox" required><?php echo $answers[question6][answer1]; ?><br>
            <input type="radio" name="answerOnQuestion6" value="2" id="checkbox" required><?php echo $answers[question6][answer2]; ?><br><hr>
        </div>
                                 <!-- следующий вопрос-->
        <div class="block">
        <p class="question"><?php echo $questions[question7]; ?></p>
            <input type="radio" name="answerOnQuestion7" value="1" id="checkbox" required><?php echo $answers[question7][answer1]; ?><br>
            <input type="radio" name="answerOnQuestion7" value="2" id="checkbox" required><?php echo $answers[question7][answer2]; ?><br><hr>
        </div>
                                 <!-- следующий вопрос-->
        <div class="block">
        <p class="question"><?php echo $questions[question8]; ?></p>
            <input type="radio" name="answerOnQuestion8" value="1" id="checkbox" required><?php echo $answers[question8][answer1]; ?><br>
            <input type="radio" name="answerOnQuestion8" value="2" id="checkbox" required><?php echo $answers[question8][answer2]; ?><br><hr>
        </div>
                                 <!-- следующий вопрос-->
        <div class="block">
        <p class="question"><?php echo $questions[question9]; ?></p>
            <input type="radio" name="answerOnQuestion9" value="1" id="checkbox" required><?php echo $answers[question9][answer1]; ?><br>
            <input type="radio" name="answerOnQuestion9" value="2" id="checkbox" required><?php echo $answers[question9][answer2]; ?><br><hr>
        </div>
                                 <!-- следующий вопрос-->
        <div class="block">
        <p class="question"><?php echo $questions[question10]; ?></p>
            <input type="radio" name="answerOnQuestion10" value="1" id="checkbox" required><?php echo $answers[question10][answer1]; ?><br>
            <input type="radio" name="answerOnQuestion10" value="2" id="checkbox" required><?php echo $answers[question10][answer2]; ?><br><hr>
        </div>
                                 <!-- следующий вопрос-->
        <div class="block">
        <p class="question"><?php echo $questions[question11]; ?></p>
            <input type="radio" name="answerOnQuestion11" value="1" id="checkbox" required><?php echo $answers[question11][answer1]; ?><br>
            <input type="radio" name="answerOnQuestion11" value="2" id="checkbox" required><?php echo $answers[question11][answer2]; ?><br><hr>
        </div>
                                 <!-- следующий вопрос-->
        <div class="block">
        <p class="question"><?php echo $questions[question12]; ?></p>
            <input type="radio" name="answerOnQuestion12" value="1" id="checkbox" required><?php echo $answers[question12][answer1]; ?><br>
            <input type="radio" name="answerOnQuestion12" value="2" id="checkbox" required><?php echo $answers[question12][answer2]; ?><br><hr>
        </div>
                                 <!-- следующий вопрос-->
        <div class="block">
        <p class="question"><?php echo $questions[question13]; ?></p>
            <input type="radio" name="answerOnQuestion13" value="1" id="checkbox" required><?php echo $answers[question13][answer1]; ?><br>
            <input type="radio" name="answerOnQuestion13" value="2" id="checkbox" required><?php echo $answers[question13][answer2]; ?><br><hr>
        </div>
        <div class="block">
                                   <!-- следующий вопрос-->
        <p class="question"><?php echo $questions[question14]; ?></p>
            <input type="radio" name="answerOnQuestion14" value="1" id="checkbox" required><?php echo $answers[question14][answer1]; ?><br>
            <input type="radio" name="answerOnQuestion14" value="2" id="checkbox" required><?php echo $answers[question14][answer2]; ?><br><hr>
        </div>
                                 <!-- следующий вопрос-->
        <div class="block">
        <p class="question"><?php echo $questions[question15]; ?></p>
            <input type="radio" name="answerOnQuestion15" value="1" id="checkbox" required><?php echo $answers[question15][answer1]; ?><br>
            <input type="radio" name="answerOnQuestion15" value="2" id="checkbox" required><?php echo $answers[question15][answer2]; ?><br><hr>
        </div>
                                 <!-- последний вопрос-->
        <div class="block">
        <p class="question"><?php echo $questions[question16]; ?></p>
            <input type="radio" name="answerOnQuestion16" value="1" id="checkbox" required><?php echo $answers[question16][answer1]; ?><br>
            <input type="radio" name="answerOnQuestion16" value="2" id="checkbox" required><?php echo $answers[question16][answer2]; ?><br>
            <input type="submit">
        </div>
    </form>
  </body>
</html>
