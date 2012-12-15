<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Dashboard extends Controller_Template
{


    public function action_index()
    {

        $tweet_model = new Model_Tweet;

        $new_tweet = $this->request->post('tweet');
        if (strlen($new_tweet) > 0) {




            $tweet_model->add_new($new_tweet);
            Notify::info('Great success!!!');

        }

        $this->content->tweets = $tweet_model->get_tweets();
    }
}

 // End Welcome
