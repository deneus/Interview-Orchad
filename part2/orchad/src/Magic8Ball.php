<?php
/**
 * @file
 * Class Magic8Ball.
 */

namespace Orchad;

class Magic8Ball {

  protected $answers;
  protected $alreadyAnswered;

  /**
   * Magic8Ball constructor.
   */
  public function __construct() {
    $this->answers = ['It is certain',
      'It is decidedly so',
      'Without a doubt',
      'Yes – definitely',
      'You may rely on it',
      'As I see it',
      'Yes',
      'Most Likely',
      'Outlook good',
      'Yes',
      'Signs point to yes'
    ];
  }

  /**
   * Ask a question to the magic ball.
   *
   * @param $question
   *  The asked question.
   *
   * @return string
   *  The answer.
   */
  public function ask($question) {
    // Respond with "Not a question" if the input does not end with '?'.
    if (!$this->isAQuestion($question)) {
      return 'Not a question';
    }

    if ($this->isAlreadyAnswered($question)) {
      return $this->answeredQuestion($question);
    }

    $keyAnswer = array_rand($this->answers);
    $this->storeQuestionAndAnswer($question, $this->answers[$keyAnswer]);

    return $this->answers[$keyAnswer];
  }

  /**
   * Test if the question is a question.
   *
   * @param $question
   *  The question.
   *
   * @return bool
   *  Is it a question or not?
   */
  private function isAQuestion($question) {
    $question = explode('?', $question);
    if (count($question) === 1) {
      return FALSE;
    }

    return TRUE;
  }

  /**
   * Search if the question was already answered.
   *
   * @param $question
   *  The asked question.
   *
   * @return bool
   *  Is the question was already answered or not.
   */
  private function isAlreadyAnswered($question) {
    if (isset($this->alreadyAnswered)) {
      foreach ($this->alreadyAnswered as $storedQuestion => $storedAnswer) {
        if ($storedQuestion === $this->transformQuestionAsKey($question)) {
          return TRUE;
        }
      }
    }

    return FALSE;
  }

  /**
   * Get the question from the already answered questions.
   *
   * @param $question
   *  The question asked.
   *
   * @return string
   *  The stored answer.
   */
  private function answeredQuestion($question) {
    // We don't need to test if it's set here, it's already tested.
    foreach ($this->alreadyAnswered as $storedQuestion => $storedAnswer) {
      if ($storedQuestion === $this->transformQuestionAsKey($question)) {
        return $storedAnswer;
      }
    }

    return '';
  }

  private function storeQuestionAndAnswer($question, $answer) {
    $question = $this->transformQuestionAsKey($question);
    $this->alreadyAnswered[$question] = $answer;
  }

  /**
   * Transform the question into an array key for storage and comparison purpose.
   *
   * @param $question
   *  The question.
   *
   * @return string
   *  The transformed question into an array key.
   */
  private function transformQuestionAsKey($question) {
    // Ignore everything after the '?'
    $output = explode('?', $question);
    // Input is case-insensitive.
    $output = strtolower($output[0]);

    return $output;
  }

  /**
   * Getter for answers.
   *
   * @return array
   *  Available answers.
   */
  public function getAnswers() {
    return $this->answers;
  }

}