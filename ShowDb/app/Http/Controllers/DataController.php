<?php

namespace ShowDb\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use ShowDb\Song;
use ShowDb\State;
use ShowDb\TriviaQuestion;

class DataController extends Controller
{
    /**
     * For use with typeahead inputs.
     */
    public function songs()
    {
        return Song::all()->pluck('title')->toJson();
    }

    /**
     * Available state information.
     */
    public function states()
    {
        return State::all()->pluck('name')->toJson();
    }

    public function triviaAuth()
    {
        if (Auth::user()) {
            return $this->trivia();
        } else {
            header('Access-Control-Allow-Origin: *');
            echo json_encode('');
            exit;
        }
    }

    public function trivia()
    {
        header('Access-Control-Allow-Origin: *');
        //$questions = TriviaQuestion::all()->random(10);
        //$questions = TriviaQuestion::inRandomOrder()->where('published', '=', 1)->whereNotNull('imageUrl')->get();
        //$questions = TriviaQuestion::whereNotNull('imageUrl')->get();
        //$questions = TriviaQuestion::orderBy('created_at', 'desc')->get();
        $questions = TriviaQuestion::inRandomOrder()
                   ->where('published', '=', 1)
                   ->where('groupname', '=', 'game1')
                   ->get();
        $result = [];
        foreach ($questions as $q) {
            $result[] = (object) [
                'question' => $q->question,
                'audio' => $q->audioUrl,
                'image' => $q->imageUrl,
                'choices' => [
                    (object) [
                        'key' => 'blueSheet',
                        'text' => $q->choice1,
                        'pressed' => false,
                        'setScale' => (object) ['x' => 3, 'y' => 2],
                        'frame' => 'blue_button00.png',
                        'correct' => $q->correct == 1,
                    ],
                    (object) [
                        'key' => 'blueSheet',
                        'text' => $q->choice2,
                        'pressed' => false,
                        'setScale' => (object) ['x' => 3, 'y' => 2],
                        'frame' => 'blue_button00.png',
                        'correct' => $q->correct == 2,
                    ],
                    (object) [
                        'key' => 'blueSheet',
                        'text' => $q->choice3,
                        'pressed' => false,
                        'setScale' => (object) ['x' => 3, 'y' => 2],
                        'frame' => 'blue_button00.png',
                        'correct' => $q->correct == 3,
                    ],
                    (object) [
                        'key' => 'blueSheet',
                        'text' => $q->choice4,
                        'pressed' => false,
                        'setScale' => (object) ['x' => 3, 'y' => 2],
                        'frame' => 'blue_button00.png',
                        'correct' => $q->correct == 4,
                    ],
                ],
            ];
        }
        foreach ($result as $r) {
            shuffle($r->choices);
        }
        shuffle($result);

        echo json_encode($result);
        exit;
    }
}
