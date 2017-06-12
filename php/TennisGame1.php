<?php

class TennisGame1 implements TennisGame
{
    private $m_score1 = 0;
    private $m_score2 = 0;
    private $player1Name = '';
    private $player2Name = '';

    private $feedbacks = [
        'tie' => [
            'Love-All',
            'Fifteen-All',
            'Thirty-All',
            'Deuce'
        ],
        'lead' => [
            'Love',
            'Fifteen',
            'Thirty',
            'Forty'
        ],
        'win' => 'Win for',
        'advantage' => 'Advantage'
    ];

    public function __construct($player1Name, $player2Name)
    {
        $this->player1Name = $player1Name;
        $this->player2Name = $player2Name;
    }

    public function wonPoint($playerName)
    {
        if ('player1' == $playerName) {
            $this->m_score1++;
        } else {
            $this->m_score2++;
        }
    }

    public function getScore()
    {
        if ($this->m_score1 == $this->m_score2)
            return array_key_exists($this->m_score1 , $this->feedbacks['tie']) ? $this->feedbacks['tie'][$this->m_score1] : end($this->feedbacks['tie']);
        elseif ($this->m_score1 >= 4 || $this->m_score2 >= 4) {
            $diff = $this->m_score1 - $this->m_score2;
            $player = $diff > 0 ? 'player1' : 'player2';
            return $this->feedbacks[abs($diff) > 1 ? 'win' : 'advantage'] . " " . $player;
        } else
            return $this->feedbacks['lead'][$this->m_score1] . "-" . $this->feedbacks['lead'][$this->m_score2];
    }
}

